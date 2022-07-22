<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Customized_engagement_form;
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
        $data = DB::table('customized_engagement_forms')->get();
        return view('view_record.ce_record.ce_view_record',compact('data'));
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
        $request->validate([
            'status' => 'required|string',
            'customized_type' => 'required|string',
            'ga_percent' => '',
            'client' => '',
            'engagement_title' => '',
            'pax_number' => '',
            'program_dates' => '',
            'program_start_time' => '',
            'program_end_time' => '',
            'cluster' => '',
            'core_area' => '',
        ]);
            
        try{
            $status             =  $request->status;
            $customized_type    =  $request->customized_type;
            $ga_percent         =  $request->ga_percent;
            $client             =  $request->client;
            $engagement_title   =  $request->engagement_title;
            $pax_number         =  $request->pax_number;
            $program_dates      =  $request->program_dates;
            $program_start_time =  $request->program_start_time;
            $program_end_time   =  $request->program_end_time;
            $cluster            =  $request->cluster;
            $core_area          =  $request->core_area;
            
            $ce_form = new Customized_engagement_form();
            $ce_form->status                = $status;
            $ce_form->customized_type       = $customized_type;
            $ce_form->ga_percent            = $ga_percent;
            $ce_form->client                = $client;
            $ce_form->engagement_title      = $engagement_title;
            $ce_form->pax_number            = $pax_number;
            $ce_form->program_dates         = $program_dates;
            $ce_form->program_start_time    = $program_start_time;
            $ce_form->program_end_time      = $program_end_time;
            $ce_form->cluster               = $cluster;
            $ce_form->core_area             = $core_area;
            $ce_form->save();

            Toastr::success('Data added successfully :)','Success');
            return redirect()->route('home');
        } catch(\Exception $e){
            Toastr::error('Data added fail :)','Error');
            return redirect()->route('form/customizedEngagement/new');
        }
        
        // return redirect('form/customizedEngagement/save');
    }
}
