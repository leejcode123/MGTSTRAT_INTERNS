<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomizedEngagementController extends Controller
{
    public function index()
    {
        // $cluster = DB::table('reference')->whereNotNull('cluster')->get();
        // $cluster = DB::table('reference')->get();
        // return view('form.customized_engagement',compact('cluster'));
        return view('form.customized_engagement');
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
}
