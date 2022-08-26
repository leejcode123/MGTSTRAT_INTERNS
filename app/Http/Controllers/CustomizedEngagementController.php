<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Customized_engagement_form;
use App\Models\Engagement_fee;
use App\Models\Engagement_cost;
use App\Models\Client;
use DB;

class CustomizedEngagementController extends Controller
{


    
    public function index()
    {
        // $cluster = DB::table('reference')->whereNotNull('cluster')->get();
        // $cluster = DB::table('reference')->get();
        // return view('form.customized_engagement',compact('cluster'));
        $companyList = DB::table('clients')->get();
        return view('form.customized_engagement',compact('companyList'));
    }

    // view record
    public function viewRecord()
    {
        // $data = DB::table('customized_engagement_forms')->get();
        $data     = DB::table('customized_engagement_forms')->get();
        $dataJoin = DB::table('customized_engagement_forms')
            ->join('engagement_fees', 'customized_engagement_forms.cstmzd_eng_form_id', '=', 'engagement_fees.cstmzd_eng_form_id')
            ->select('customized_engagement_forms.*', 'engagement_fees.*')
            ->get();
        return view('view_record.ce_record.ce_view_record',compact('data', 'dataJoin'));
    }

    // view delete
    public function viewDelete($id)
    {
        $delete = Customized_engagement_form::find($id);
        $delete->delete();
        Alert::success('Data deleted successfully :)','Success');
        return redirect()->route('form/view/detail');
    }

    public function viewDetail($id)
    {
        // $data = DB::table('reference')->where('id',$id)->get();
        $cluster = DB::table('reference')->whereNotNull('cluster')->get();
        // $webinarTitle = DB::table('webinar')->whereNotNull('title')->get();

        return view('form.components.customized_engagement.information',compact(
            'cluster',
            // 'engagementType',
            // 'webinarTitle'
        ));

    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'status' => 'required|string',
        //     'customized_type' => 'required|string',
        //     'ga_percent' => '',
        //     'client' => '',
        //     'engagement_title' => '',
        //     'pax_number' => '',
        //     'program_dates' => '',
        //     'program_start_time' => '',
        //     'program_end_time' => '',
        //     'cluster' => '',
        //     'core_area' => '',
        // ]);

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
    
                    Engagement_cost::create($engagement_cost);
                }
            }
            catch(\Exception $e){
                DB::rollback();
                Toastr::error('cost'.$e->getMessage(), 'Error');
            }

// Client
            try {


                $clients['cstmzd_eng_form_id']  = $cstmzd_eng_form_id;
                Client::create($clients);

            }catch(\Exception $e){
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
}
