<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Customized_engagement_form;
use App\Models\Engagement_fee;
use App\Models\Engagement_cost;
use DB;

class CustomizedEngagementController extends Controller
{
    public function index()
    {
        // $cluster = DB::table('reference')->whereNotNull('cluster')->get();
        // $cluster = DB::table('reference')->get();
        // return view('form.customized_engagement',compact('cluster'));
        
        return view('form.customized_engagement');
    }

    // view record
    public function viewRecord()
    {
        // $data = DB::table('customized_engagement_forms')->get();
        $data     = DB::table('customized_engagement_forms')->get();
        $dataJoin1 = DB::table('customized_engagement_forms')
            ->join('engagement_fees', 'customized_engagement_forms.cstmzd_eng_form_id', '=', 'engagement_fees.cstmzd_eng_form_id')
            ->select('customized_engagement_forms.*', 'engagement_fees.*')
            // ->where('engagement_fees.customized_engagement_forms',$cstmzd_eng_form_id)
            ->get();
        $dataJoin2 = DB::table('customized_engagement_forms')
            ->join('engagement_costs', 'customized_engagement_forms.cstmzd_eng_form_id', '=', 'engagement_costs.cstmzd_eng_form_id')
            ->select('customized_engagement_forms.*', 'engagement_costs.*')
            ->get();
        return view('view_record.ce_record.ce_view_record',compact('data', 'dataJoin1', 'dataJoin2'));
    }

    // view delete
    public function viewDelete($id)
    {
        $delete = Customized_engagement_form::find($id);
        $delete->delete();
        Alert::success('Data deleted successfully :)','Success');
        return redirect()->route('form/customizedEngagement/detail');
    }

    public function updateRecord($cstmzd_eng_form_id)
    {
        $data = DB::table('customized_engagement_forms') ->where('cstmzd_eng_form_id',$cstmzd_eng_form_id)->first();
        $dataJoin1 = DB::table('customized_engagement_forms')
            ->join('engagement_fees', 'customized_engagement_forms.cstmzd_eng_form_id', '=', 'engagement_fees.cstmzd_eng_form_id')
            ->select('customized_engagement_forms.*', 'engagement_fees.*')
            ->where('engagement_fees.cstmzd_eng_form_id',$cstmzd_eng_form_id)
            ->get();
        $dataJoin2 = DB::table('customized_engagement_forms')
            ->join('engagement_costs', 'customized_engagement_forms.cstmzd_eng_form_id', '=', 'engagement_costs.cstmzd_eng_form_id')
            ->select('customized_engagement_forms.*', 'engagement_costs.*')
            ->where('engagement_costs.cstmzd_eng_form_id',$cstmzd_eng_form_id)
            ->get();
        return view('form.budgetForm_update.ce_update',compact('data','dataJoin1','dataJoin2'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'client'   => 'required|string|max:255',
        ]);
            
        DB::beginTransaction();
        try{
            
            $ce_form = new Customized_engagement_form();
            $ce_form->status                = $request->status;
            $ce_form->customized_type       = $request->customized_type;
            $ce_form->ga_percent            = $request->ga_percent;
            $ce_form->client                = $request->client;
            $ce_form->engagement_title      = $request->engagement_title;
            $ce_form->pax_number            = $request->pax_number;
            $ce_form->program_dates         = $request->program_dates;
            $ce_form->program_start_time    = $request->program_start_time;
            $ce_form->program_end_time      = $request->program_end_time;
            $ce_form->cluster               = $request->cluster;
            $ce_form->core_area             = $request->core_area;
            $ce_form->save();

            $cstmzd_eng_form_id = DB::table('customized_engagement_forms')->orderBy('cstmzd_eng_form_id','DESC')->select('cstmzd_eng_form_id')->first();
            $cstmzd_eng_form_id = $cstmzd_eng_form_id->cstmzd_eng_form_id;


            try
                {foreach($request->fee_type as $key => $fee_types){
                        $engagement_fee['type']                 = $fee_types;
                        $engagement_fee['cstmzd_eng_form_id']   = $cstmzd_eng_form_id;
                        $engagement_fee['consultant_num']       = $request->fee_consultant_num[$key];
                        $engagement_fee['hour_fee']             = $request->fee_hour_fee[$key];
                        $engagement_fee['hour_num']             = $request->fee_hour_num[$key];
                        $engagement_fee['nswh']                 = $request->fee_nswh[$key];
                        $engagement_fee['notes']                = $request->fee_notes[$key];

                        Engagement_fee::create($engagement_fee);
                        
                    }
                }
            catch(\Exception $e){
                DB::rollback();
                Toastr::error('fee'.$e->getMessage(), 'Error');
            }

            try
                {foreach ($request->cost_type as $key => $cost_types) {

                    // $engagement_cost = new Engagement_cost();
                    $engagement_cost['type']                = $cost_types;
                    $engagement_cost['cstmzd_eng_form_id']  = $cstmzd_eng_form_id;
                    $engagement_cost['consultant_num']      = $request->cost_consultant_num[$key];
                    $engagement_cost['hour_fee']            = $request->cost_hour_fee[$key];
                    $engagement_cost['hour_num']            = $request->cost_hour_num[$key];
                    $engagement_cost['nswh']                = $request->cost_nswh[$key];
                    $engagement_cost['rooster']             = $request->cost_rooster[$key];
                    $engagement_cost['notes']               = $request->cost_notes[$key];
    
                    Engagement_cost::create($engagement_cost);
                }
            }
            catch(\Exception $e){
                DB::rollback();
                Toastr::error('cost'.$e->getMessage(), 'Error');
            }
            


            DB::commit();
            Toastr::success('Data added successfully','Success');
            return redirect()->back();
            // return redirect()->route('home');
        } catch(\Exception $e){
            DB::rollback();
            Toastr::error('Data added fail','Error');
            Toastr::error('test'.$e->getMessage(), 'Error');
            return redirect()->back();
            // return redirect()->route('form/customizedEngagement/new');
        }
        
        // return redirect('form/customizedEngagement/save');
    }

    /** update customized engagement record */
    public function ceUpdateRecord(Request $request)
    {
        DB::beginTransaction();
        try {
            $update = [
                'id'                    => $request->id,
                'status'                => $request->status,
                'customized_type'       => $request->customized_type,
                'ga_percent'            => $request->ga_percent,
                'client'                => $request->client,
                'engagement_title'      => $request->engagement_title,
                'pax_number'            => $request->pax_number,
                // 'program_dates'         => $request->program_dates,
                // 'program_start_time'    => $request->program_start_time,
                // 'program_end_time'      => $request->program_end_time,
                // 'cluster'               => $request->cluster,
                // 'core_area'             => $request->core_area,
            ];
            Customized_engagement_form::where('id',$request->id)->update($update);
            /** delete record */
            foreach ($request->ce_id as $key => $fee_types) {
                DB::table('engagement_fees')->where('id', $request->ce_id[$key])->delete();
            }
            foreach ($request->ce_id as $key => $cost_types) {
                DB::table('engagement_costs')->where('id', $request->ce_id[$key])->delete();
            }

            /** insert new record */
            foreach($request->fee_type as $key => $fee_type)
            {
                // $engagement_fee['type']                 = $fee_types;
                $engagement_fee['cstmzd_eng_form_id']   = $request->cstmzd_eng_form_id;
                $engagement_fee['type']                 = $request->fee_type[$key];
                $engagement_fee['consultant_num']       = $request->fee_consultant_num[$key];
                $engagement_fee['hour_fee']             = $request->fee_hour_fee[$key];
                $engagement_fee['hour_num']             = $request->fee_hour_num[$key];
                $engagement_fee['nswh']                 = $request->fee_nswh[$key];
                $engagement_fee['notes']                = $request->fee_notes[$key];

                Engagement_fee::create($engagement_fee);
            }

            foreach($request->cost_type as $key => $cost_type)
            {
                $engagement_cost['id']                  = $request->ce_id;
                $engagement_cost['cstmzd_eng_form_id']  = $request->cstmzd_eng_form_id;
                $engagement_cost['type']                = $request->cost_type[$key];
                $engagement_cost['consultant_num']      = $request->cost_consultant_num[$key];
                $engagement_cost['hour_fee']            = $request->cost_hour_fee[$key];
                $engagement_cost['hour_num']            = $request->cost_hour_num[$key];
                $engagement_cost['nswh']                = $request->cost_nswh[$key];
                $engagement_cost['rooster']             = $request->cost_rooster[$key];
                $engagement_cost['notes']               = $request->cost_notes[$key];

                Engagement_cost::create($engagement_cost);
            }
            // Engagement_fee::destroy($request->id);
            // Engagement_cost::destroy($request->ce_id);

            DB::commit();
            Toastr::success('Updated successfully','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            // Toastr::error('Update Estimates fail','Error');
            Toastr::error($e->getMessage());
            return redirect()->back();
        } 
    }

    /** delete record customized engagement add */
    public function ceAddDeleteRecord(Request $request)
    {
        DB::beginTransaction();
        try {

            Engagement_fee::destroy($request->id);
            Engagement_cost::destroy($request->id);

            DB::commit();
            Toastr::success('Deleted successfully','Success');
            return redirect()->back();
            
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Deleted fail','Error');
            return redirect()->back();
        }
    }
}

