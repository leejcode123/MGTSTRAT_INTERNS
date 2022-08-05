<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Brian2694\Toastr\Facades\Toastr;

class ClientsController extends Controller
{
    public function index()
    {
        return view('form.clients');
    }
    // add new client
    public function addNewClient()
    {
        return view('form.client_register.modal');
    }
     // save new user
     public function addNewClientSave(Request $request)
     {

        $request->validate([
            'company_name'      => 'required',
            'yr_mnth_sales'     => 'required',
            'old_id'     => 'required',
            'sales_pax'     => 'required',
            'client_class' => 'required',
            'industry'  => 'required',
            'old_new'  => 'required',
            'first_eng'  => 'required',
            'second_eng'  => 'required',
        ]);
        
        $clnt = new Client;
        $clnt -> company_name = $request->input('company_name');
        $clnt -> yr_mnth_sales = $request->input('yr_mnth_sales');
        $clnt -> old_id = $request->input('old_id');
        $clnt -> sales_pax = $request->input('sales_pax');
        $clnt -> client_class = $request->input('client_class');
        $clnt -> industry = $request->input('industry');
        $clnt -> old_new = $request->input('old_new');
        $clnt -> first_eng = $request->input('first_eng');
        $clnt -> second_eng = $request->input('second_eng');
        
        $clnt->save();

        Toastr::success('Client successfully Added','success');
        return redirect()->route('clientManagement');
        // change this to route web.php
    }


}
