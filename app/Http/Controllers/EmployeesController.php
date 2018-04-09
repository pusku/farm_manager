<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class EmployeesController extends Controller
{
    public function add_farmers(){
      return view('farmers/add_farmers');
   	}
	
    public function insertfarmers(Request $request){
      $name = $request->input('name');
      $land = $request->input('land');
      $account_no = $request->input('account_no');
      $phone = $request->input('phone');
      $data=array('name'=>$name,'land'=>$land,'account_no'=>$account_no,'phone'=>$phone);
      DB::table('farmers')->insert($data);
      $request->session()->flash('alert-success', 'User was successful added!');
      return redirect()->route("add_farmers");
   	}
     public function farmers_list(){
      $data['data'] = DB::table('farmers')->get();
      return view('farmers/farmers_list',$data);
   }
   public function edit_farmers($id) {
    $data=Farmer::find($id);
    return view('farmers/edit_farmers',['data'=>$data]);
   }
   public function delete_farmers($id)
    {
        Farmer::destroy($id);

       return redirect("farmers_list")->with('flash_message', 'User deleted!');
    }
    public function updatefarmer(Request $req, $id){
      $data=array(
        'name'=> $req->input('name'),
        'land'=> $req->input('land'),
        'account_no'=> $req->input('account_no'),
        'phone'=> $req->input('phone')
      );
      Farmer::where('id',$id)->update($data);
      $req->session()->flash('alert-success', 'User was successful Updated!');
      return redirect()->route("farmers_list");
    }
}
