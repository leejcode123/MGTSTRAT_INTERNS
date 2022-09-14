<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Webinarform;
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;

class FormController extends Controller
{
    // view form
    public function index()
    {
        return view('form.form');
    }

    // view record
    public function viewRecord()
    {
        $data = DB::table('webinarforms','users')->get();
        return view('view_record.viewrecord',compact('data'));
    }

    // view detail
    public function viewDetail($id)
    {
        $data = DB::table('webinarforms')->where('id',$id)->get();
        $webinarTitle = DB::table('webinar')->get();
        return view('view_record.viewdetail',compact('data','webinarTitle'));

    }

    // view update
    public function viewUpdate(Request $request)
    {
        try{
            $id                 = $request->id;
            $deal_number        = $request->deal_number;
            $fullName           = $request->fullName;
            $engagement_type    = $request->engagement_type;
            $webinar_title      = $request->webinar_title;
            $pax_number         = $request->pax_number;
            $doe                = $request->doe;
            $dot                = $request->dot;

            $update = [

                'id'            => $id,
                'deal_number'        => $deal_number,
                'full_name'     => $fullName,
                'engagement_type'           => $engagement_type,
                'webinar_title' => $webinar_title,
                'pax_number'  => $pax_number,
                'doe'      => $doe,
                'dot'    => $dot,

            ];
            Webinarform::where('id',$request->id)->update($update);
            Toastr::success('Data updated successfully :)','Success');
            return redirect()->route('form/view/detail');
        }catch(\Exception $e){

            Toastr::error('Data updated fail :)','Error');
            return redirect()->route('form/view/detail');
        }
    }

    // save
    public function saveRecord(Request $request)
    {
        $request->validate([
            'fullName'     => 'required|string|max:255',
            'engagement_type'          => 'required|string|max:255',
            'webinar_title' => 'required|string|max:255',
            'pax_number' => 'required|numeric|min:1',
            'doe'     => 'required|string|max:255',
            'dot'   => 'required|string|max:255',
            'ef_customFee'   => 'required|string|max:255',
            'ef_program'   => 'required|string|max:255',
            'ef_programCost'   => 'required|string|max:255',
            'ef_producer'   => 'required|string|max:255',
            'ef_sessions'   => 'required|string|max:255',
            'ef_workingDays'   => 'required|string|max:255',
            'ef_totalStandard'   => 'required|string|max:255',
            'ef_discount'   => 'required|string|max:255',
            'ef_total'   => 'required|string|max:255'],
            ['doe.required' => 'Date is required']);

        try{
            $fullName           = $request->fullName;
            $engagement_type    = $request->engagement_type;
            $webinar_title      = $request->webinar_title;
            $pax_number         = $request->pax_number;
            $doe                = $request->doe;
            $dot                = $request->dot;
            $ef_customFee       = $request->ef_customFee;
            $ef_program         = $request->ef_program;
            $ef_programCost     = $request->ef_programCost;
            $ef_sessions        = $request->ef_sessions;
            $ef_workingDays     = $request->ef_workingDays;
            $ef_producer        = $request->ef_producer;
            $ef_totalStandard   = $request->ef_totalStandard;
            $ef_discount        = $request->ef_discount;
            $ef_total           = $request->ef_total;

            $Webinarform = new Webinarform();
            $Webinarform->full_name                   = $fullName;
            $Webinarform->engagement_type             = $engagement_type;
            $Webinarform->webinar_title               = $webinar_title;
            $Webinarform->pax_number                  = $pax_number;
            $Webinarform->doe                         = $doe;
            $Webinarform->dot                         = $dot;
            $Webinarform->ef_customFee                = $ef_customFee;
            $Webinarform->ef_program                  = $ef_program;
            $Webinarform->ef_programCost              = $ef_programCost;
            $Webinarform->ef_sessions                 = $ef_sessions;
            $Webinarform->ef_workingDays              = $ef_workingDays;
            $Webinarform->ef_producer                 = $ef_producer;
            $Webinarform->ef_totalStandard            = $ef_totalStandard;
            $Webinarform->ef_discount                 = $ef_discount;
            $Webinarform->ef_total                    = $ef_total;
            $Webinarform->save();

            Toastr::success('Data added successfully :)','Success');
            return redirect()->back();

        }catch(\Exception $e){

            Toastr::error('Data added fail :)','Error');
            return redirect()->back();
        }
    }

    // view delete
    public function viewDelete($id)
    {
        $delete = Webinarform::find($id);
        $delete->delete();
        Toastr::success('Data deleted successfully :)','Success');
        return redirect()->route('form/view/detail');
    }
}