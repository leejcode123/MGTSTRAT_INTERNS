<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customized_engagement;
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
        $test = $request->all();
        dd($test);

        $ceform = Customized_engagement::create([
            'ef_LeadconsultantNoc' => $request->input('ef_LeadconsultantNoc'),
            'ef_LeadconsultantHf' => $request->input('ef_LeadconsultantHf'),
            'ef_LeadconsultantNoh' => $request->input('ef_LeadconsultantNoh'),
            'ef_LeadconsultantNwh' => $request->input('ef_LeadconsultantNwh')
        ]);
        foreach($request->item as $key => $items)
        {
            // $estimatesAdd['item']            = $items;
            // $estimatesAdd['estimate_number'] = $estimate_number;
            // $estimatesAdd['description']     = $request->description[$key];
            // $estimatesAdd['unit_cost']       = $request->unit_cost[$key];
            // $estimatesAdd['qty']             = $request->qty[$key];
            $estimatesAdd['ef_Leadconsultant']          = $request->ef_Leadconsultant[$key];

            EstimatesAdd::create($estimatesAdd);
        }
        
        return redirect('form/customizedEngagement/save');
    }
}
