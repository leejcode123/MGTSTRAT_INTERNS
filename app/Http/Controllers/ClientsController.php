<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\Client;
use DB;
use Auth;

class ClientsController extends Controller
{
    public function index()
    {
        $data = DB::table('clients')->get();
        return view('form.clients',compact('data'));
        // return view('form.clients');
    }

    // add new client
    // public function addNewClient()
    // {
    //     return view('form.client_register.modal');
    // }
    public function addViewClient()
    {
        
    }

     // save new user
     public function addNewClientSave(Request $request)
     {

        $request->validate([
            'company_name'      => 'required',
            // 'yr_mnth_sales'     => 'required',
            // 'old_id'     => 'required',
            // 'sales_pax'     => 'required',
            // 'client_class' => 'required',
            // 'industry'  => 'required',
            // 'old_new'  => 'required',
            // 'first_eng'  => 'required',
            // 'second_eng'  => 'required',
        ]);

        try {
            $company_name = $request->company_name;
            $yr_mnth_sales = $request->yr_mnth_sales;
            $old_id = $request->old_id;
            $sales_pax = $request->sales_pax;
            $client_class = $request->client_class;
            $industry = $request->industry;
            $old_new = $request->old_new;
            $first_eng = $request->first_eng;
            $second_eng = $request->second_eng;
            
            $clnt = new Client();
            $clnt -> company_name = $company_name;
            $clnt -> yr_mnth_sales = $yr_mnth_sales;
            $clnt -> old_id = $old_id;
            $clnt -> sales_pax = $sales_pax;
            $clnt -> client_class = $client_class;
            $clnt -> industry = $industry;
            $clnt -> old_new = $old_new;
            $clnt -> first_eng = $first_eng;
            $clnt -> second_eng = $second_eng;
            
            $clnt->save();

            Toastr::success('Client successfully Added','success');
            return redirect()->route('form/clients/new');
            // change this to route web.php
        }catch(\Exception $e){

            Alert::error('Data added fail :)','Error');
            return redirect()->route('form/clients/new');
        }
    }
    public function viewDetailClient($id)
    {
        // $dataClnt = DB::table('clients')->get();
        // return view('form.components.clients_register.edit_modal',compact('dataClnt'));
        
        if (Auth::user()->role_name=='Admin')
        {
            $dataClnt = DB::table('clients')->where('id',$id)->get();
            $roleName = DB::table('role_type_users')->get();
            $userStatus = DB::table('user_types')->get();
            return view('form.components.clients_register.edit_modal',compact('dataClnt'));
        }
        else
        {
            return redirect()->route('home');
        }
    }
    // update
    public function updateClient(Request $request)
    {
        // $dataClnt = DB::table('clients')->where('id',$id)->get();
        $request->validate([
            'company_name'      => 'required',
            // 'yr_mnth_sales'     => 'required',
            // 'old_id'            => 'required',
            // 'sales_pax'         => 'required',
            // 'client_class'      => 'required',
            // 'industry'          => 'required',
            // 'old_new'           => 'required',
            // 'first_eng'         => 'required',
            // 'second_eng'        => 'required',
        ]);

        try {
        $company_name = $request->company_name;
        $yr_mnth_sales = $request->yr_mnth_sales;
        $old_id = $request->old_id;
        $sales_pax = $request->sales_pax;
        $client_class = $request->client_class;
        $industry = $request->industry;
        $old_new = $request->old_new;
        $first_eng = $request->first_eng;
        $second_eng = $request->second_eng;


        $update = [

            'company_name'      => $company_name,
            'yr_mnth_sales'     => $yr_mnth_sales,
            'old_id'            => $old_id,
            'sales_pax'         => $sales_pax,
            'client_class'      => $client_class,
            'industry'          => $industry,
            'old_new'           => $old_new,
            'first_eng'         => $first_eng,
            'second_eng'        => $second_eng,

        ];
        Client::where('id',$request->id)->update($update);
        Alert::success('Data updated successfully :)','Success');
        return redirect()->route('form/clients/new');
    }catch(\Exception $e){

        Alert::error('Data updated fail :)','Error');
        return redirect()->route('form/clients/new');
    }
    }
    // view delete
    public function deleteClient($id)
    {
        $deleteClients = Client::find($id);
        $deleteClients->delete();
        Alert::success('Data deleted successfully :)','Success');
        return redirect()->route('form/clients/new');
    }


}
