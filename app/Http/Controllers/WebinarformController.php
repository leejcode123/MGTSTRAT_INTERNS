<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Webinarform;
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Carbon\Carbon;
use DB;


class WebinarformController extends Controller
{
    // view form
    public function index()
    {
        return view('form.form');
    }
    // view customized engagement
    public function customized()
    {
        return view('form.customized_engagement');
    }

    // view record
    public function viewRecord()
    {
        $data = DB::table('webinarforms')->get();
        return view('view_record.viewrecord',compact('data'));
    }

    // view detail
    public function viewDetail($id)
    {
        $data = DB::table('webinarforms')->where('id',$id)->get();
        // $engagementType = DB::table('webinar')->whereNotNull('type')->get();
        // $webinarTitle = DB::table('webinar')->whereNotNull('title')->get();

        return view('view_record.viewdetail',compact(
            'data',
            // 'engagementType',
            // 'webinarTitle'
        ));

    }

    // view update
    public function viewUpdate(Request $request)
    {
        $request->validate([
            //engagement information
            'fullName'                  => 'required|string|min:10|max:255',
            'engagement_type'           => 'required',
            'webinar_title'             => 'required',
            'pax_number'                => 'required|numeric|min:1',
            'doe'                       => 'required|string|max:255',
            'dot'                       => 'required|string|max:255',
            //engagement fee
            'ef_customFee'              => 'required',
            'ef_program'                => 'required',
            'ef_programCost'            => 'required',
            'ef_sessions'               => 'required',            
            'ef_producer'               => 'required',            
            //engagement cost information
            'ec_sales'                  => 'required',
            'ec_refferal'               => 'required',
            'ec_engagementManager'      => 'required',
            'ec_customFee'              => 'required|numeric',
            'ec_hours'                  => 'required',
            'ec_creatorsFee'            => 'required',
            'creators_hours'            => 'required|numeric|min:1|max:24',
            'ec_programExpense'         => 'required|numeric',
        ],

            ['fullName.required'        => 'This field is required',
            'engagement_type.required'  => 'Please select your Engagement Type',
            'webinar_title.required'    => 'Please select your Webinar Title',
            'pax_number.required'       => 'This field is required',
            'doe.required'              => 'This field is required',
            'dot.required'              => 'This field is required',
            'ef_customFee.required'     => 'Please select Custom Fee',
            'ef_program.required'       => 'Please select Program Package',
            'ef_programCost.required'   => 'Please select Program Price',
            'ef_sessions.required'      => 'This field is required',
            'ef_producer.required'      => 'Please select Producer price',

            //engagement cost
            'ec_sales.required'                  => 'Please select Sales',
            'ec_refferal.required'               => 'Please select Referral',
            'ec_engagementManager.required'      => 'Please select Engagement Manager',
            'ec_customFee.required'              => 'Customization Fee field is required',
            'ec_hours.required'                  => 'Please select Number of Hours',
            'ec_creatorsFee.required'            => 'Please select Creators Fee',
            'creators_hours.required'            => 'Creator Hours field is required',
            'ec_programExpense.required'         => 'Program expenses field is required',
            ]
        );
        
        try{
            $id                         = $request->id;
            $deal_number                = $request->deal_number;
            $fullName                   = $request->fullName;
            $engagement_type            = $request->engagement_type;
            $webinar_title              = $request->webinar_title;
            $pax_number                 = $request->pax_number;
            $doe                        = $request->doe;
            $dot                        = $request->dot;

            //engagement fees
            $ef_customFee               = $request->ef_customFee;
            $ef_program                 = $request->ef_program;
            $ef_programCost             = $request->ef_programCost;
            $ef_producer                = $request->ef_producer;
            $ef_sessions                = $request->ef_sessions;
            $ef_workingDays             = $request->ef_workingDays;
            $ef_totalStandard           = $request->ef_totalStandard;
            $ef_discount                = $request->ef_discount;
            $ef_total                   = $request->ef_total;

            //engagement cost
            $ec_sales                   = $request->ec_sales;
            $ec_refferal                = $request->ec_refferal;
            $ec_engagementManager       = $request->ec_engagementManager;
            $ec_customFee               = $request->ec_customFee;
            $ec_hours                   = $request->ec_hours;
            $ec_creatorsFee             = $request->ec_creatorsFee;
            $creators_hours             = $request->creators_hours;
            $ec_lead                    = $request->ec_lead;
            $lead_hours                 = $request->lead_hours;
            $lead_nonovertime           = $request->lead_nonovertime;
            $ec_moderator               = $request->ec_moderator;
            $moderator_hour             = $request->moderator_hour;
            $moderator_nonovertime      = $request->moderator_nonovertime;
            $ec_producer                = $request->ec_producer;
            $producer_hour              = $request->producer_hour;
            $producer_nonovertime       = $request->producer_nonovertime;
            $ec_programExpense          = $request->ec_programExpense;
            $ec_total                   = $request->ec_total;
            $ec_sales                   = $request->ec_sales;
            //overall total
            $profit                     = $request->profit;
            $less_percent               = $request->less_percent;
            $net_profit                 = $request->net_profit;
            $profit_margin              = $request->profit_margin;

            $update = [

                'id'                         => $id,
                'deal_number'                => $deal_number,
                'full_name'                  => $fullName,
                'engagement_type'            => $engagement_type,
                'webinar_title'              => $webinar_title,
                'pax_number'                 => $pax_number,
                'doe'                        => $doe,
                'dot'                        => $dot,

                //engagement fees
                'ef_customFee'               => $ef_customFee,
                'ef_program'                 => $ef_program,
                'ef_programCost'             => $ef_programCost,
                'ef_producer'                => $ef_producer,
                'ef_sessions'                => $ef_sessions,
                'ef_workingDays'             => $ef_workingDays,
                'ef_totalStandard'           => $ef_totalStandard,
                'ef_discount'                => $ef_discount,
                'ef_total'                   => $ef_total,

                //engagement cost
                'ec_sales'                   => $ec_sales,
                'ec_refferal'                => $ec_refferal,
                'ec_engagementManager'       => $ec_engagementManager,
                'ec_customFee'               => $ec_customFee,
                'ec_hours'                   => $ec_hours,
                'ec_creatorsFee'             => $ec_creatorsFee,
                'creators_hours'             => $creators_hours,
                'ec_lead'                    => $ec_lead,
                'lead_hours'                 => $lead_hours,
                'lead_nonovertime'           => $lead_nonovertime,
                'ec_moderator'               => $ec_moderator,
                'moderator_hour'             => $moderator_hour,
                'moderator_nonovertime'      => $moderator_nonovertime,
                'ec_producer'                => $ec_producer,
                'producer_hour'              => $producer_hour,
                'producer_nonovertime'       => $producer_nonovertime,
                'ec_programExpense'          => $ec_programExpense,
                'ec_total'                   => $ec_total,
                'ec_sales'                   => $ec_sales,
                //overall total
                'profit'                     => $profit,
                'less_percent'               => $less_percent,
                'net_profit'                 => $net_profit,
                'profit_margin'              => $profit_margin,

            ];
            Webinarform::where('id',$request->id)->update($update);
            Alert::success('Data updated successfully :)','Success');
            return redirect()->route('form/view/detail');
        }catch(\Exception $e){

            Alert::error('Data updated fail :)','Error');
            return redirect()->route('form/view/detail');
        }
    }

    // save
    public function saveRecord(Request $request)
    {
        $request->validate([
            //engagement information
            'fullName'                  => 'required|string|min:10|max:255',
            'engagement_type'           => 'required',
            'webinar_title'             => 'required',
            'pax_number'                => 'required|numeric|min:1',
            'doe'                       => 'required|string|max:255',
            'dot'                       => 'required|string|max:255',
            //engagement fee
            'ef_customFee'              => 'required',
            'ef_program'                => 'required',
            'ef_programCost'            => 'required',
            'ef_sessions'               => 'required',            
            'ef_producer'               => 'required',
            //engagement cost information
            'ec_sales'                  => 'required',
            'ec_refferal'               => 'required',
            'ec_engagementManager'      => 'required',
            'ec_customFee'              => 'required|numeric',
            'ec_hours'                  => 'required',
            'ec_creatorsFee'            => 'required',
            'creators_hours'            => 'required|numeric|min:1|max:24',
            'ec_programExpense'         => 'required|numeric',
        ],

            ['fullName.required'        => 'You must input Company Name ',
            'engagement_type.required'  => 'Please select your Engagement Type',
            'webinar_title.required'    => 'Please select your Webinar Title',
            'pax_number.required'       => 'Number of pax field is required',
            'doe.required'              => 'Date field is required',
            'dot.required'              => 'Time field is required',
            'ef_customFee.required'     => 'Please select Custom Fee',
            'ef_program.required'       => 'Please select Program Package',
            'ef_programCost.required'   => 'Please select Program Price',
            'ef_sessions.required'      => 'Sessions field is required',
            'ef_producer.required'      => 'Please select Producer price',
            //engagement cost
            'ec_sales.required'                  => 'Please select Sales',
            'ec_refferal.required'               => 'Please select Referral',
            'ec_engagementManager.required'      => 'Please select Engagement Manager',
            'ec_customFee.required'              => 'Customization Fee field is required',
            'ec_hours.required'                  => 'Please select Number of Hours',
            'ec_creatorsFee.required'            => 'Please select Creators Fee',
            'creators_hours.required'            => 'Creator Hours field is required',
            'ec_programExpense.required'         => 'Program expenses field is required',
            ]
        );

        try{
            //engagement information
            $fullName                   = $request->fullName;
            $engagement_type            = $request->engagement_type;
            $webinar_title              = $request->webinar_title;
            $pax_number                 = $request->pax_number;
            $doe                        = $request->doe;
            $dot                        = $request->dot;
            //engagement fees
            $ef_customFee               = $request->ef_customFee;
            $ef_program                 = $request->ef_program;
            $ef_programCost             = $request->ef_programCost;
            $ef_producer                = $request->ef_producer;
            $ef_sessions                = $request->ef_sessions;
            $ef_workingDays             = $request->ef_workingDays;
            $ef_totalStandard           = $request->ef_totalStandard;
            $ef_discount                = $request->ef_discount;
            $ef_total                   = $request->ef_total;
            
            //engagement cost
            $ec_sales                   = $request->ec_sales;
            $ec_refferal                = $request->ec_refferal;
            $ec_engagementManager       = $request->ec_engagementManager;
            $ec_customFee               = $request->ec_customFee;
            $ec_hours                   = $request->ec_hours;
            $ec_creatorsFee             = $request->ec_creatorsFee;
            $creators_hours             = $request->creators_hours;
            $ec_lead                    = $request->ec_lead;
            $lead_hours                 = $request->lead_hours;
            $lead_nonovertime           = $request->lead_nonovertime;
            $ec_moderator               = $request->ec_moderator;
            $moderator_hour             = $request->moderator_hour;
            $moderator_nonovertime      = $request->moderator_nonovertime;
            $ec_producer                = $request->ec_producer;
            $producer_hour              = $request->producer_hour;
            $producer_nonovertime       = $request->producer_nonovertime;
            $ec_programExpense          = $request->ec_programExpense;
            $ec_total                   = $request->ec_total;
            $ec_sales                   = $request->ec_sales;
            //overall total
            $profit                     = $request->profit;
            $less_percent               = $request->less_percent;
            $net_profit                 = $request->net_profit;
            $profit_margin              = $request->profit_margin;

            $Webinarform = new Webinarform();
            //engagement information
            $Webinarform->full_name                     = $fullName;
            $Webinarform->engagement_type               = $engagement_type;
            $Webinarform->webinar_title                 = $webinar_title;
            $Webinarform->pax_number                    = $pax_number;
            $Webinarform->doe                           = $doe;
            $Webinarform->dot                           = $dot;
            //engagement fees
            $Webinarform->ef_customFee                  = $ef_customFee;
            $Webinarform->ef_program                    = $ef_program;
            $Webinarform->ef_programCost                = $ef_programCost;
            $Webinarform->ef_producer                   = $ef_producer;
            $Webinarform->ef_sessions                   = $ef_sessions;
            $Webinarform->ef_workingDays                = $ef_workingDays;
            $Webinarform->ef_totalStandard              = $ef_totalStandard;
            $Webinarform->ef_discount                   = $ef_discount;
            $Webinarform->ef_total                      = $ef_total;
            //engagement cost
            $Webinarform->ec_sales                      = $ec_sales;
            $Webinarform->ec_refferal                   = $ec_refferal;
            $Webinarform->ec_engagementManager          = $ec_engagementManager;
            $Webinarform->ec_customFee                  = $ec_customFee;
            $Webinarform->ec_hours                      = $ec_hours;
            $Webinarform->ec_creatorsFee                = $ec_creatorsFee;
            $Webinarform->creators_hours                = $creators_hours;
            $Webinarform->ec_lead                       = $ec_lead;
            $Webinarform->lead_hours                    = $lead_hours;
            $Webinarform->lead_nonovertime              = $lead_nonovertime;
            $Webinarform->ec_moderator                  = $ec_moderator;
            $Webinarform->moderator_hour                = $moderator_hour;
            $Webinarform->moderator_nonovertime         = $moderator_nonovertime;
            $Webinarform->ec_producer                   = $ec_producer;
            $Webinarform->producer_hour                 = $producer_hour;
            $Webinarform->producer_nonovertime          = $producer_nonovertime;
            $Webinarform->ec_programExpense             = $ec_programExpense;
            $Webinarform->ec_total                      = $ec_total;
            //overall total
            $Webinarform->profit                        = $profit;
            $Webinarform->less_percent                  = $less_percent;
            $Webinarform->net_profit                    = $net_profit;
            $Webinarform->profit_margin                 = $profit_margin;
            $Webinarform->save();

            Alert::success('Data added successfully :)','Success');
            return redirect()->back();

        }catch(\Exception $e){

            Alert::error('Data added fail :)','Error');
            return redirect()->back();
        }
    }

    // view delete
    public function viewDelete($id)
    {
        $delete = Webinarform::find($id);
        $delete->delete();
        Alert::success('Data deleted successfully :)','Success');
        return redirect()->route('form/view/detail');
    }
}