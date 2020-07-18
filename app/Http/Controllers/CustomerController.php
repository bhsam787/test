<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
      $customer=['john doe', 'jane doe', 'sara the girl', 'sam the follower'];
      return view('home', [
        'customers'=>$customer
      ]);
    }
    public function show(){
      $customer= Customer::all();
      return view('normal.customer',[
        'customers'=>$customer
      ]);
    }

    public function create(){
      return view('normal.add_customer');
    }
    public function store(){
      $data= request()->validate([
        'name'=>'required',
        'email'=>'required|email'
      ]);
      $customer= new Customer;
      $customer->name=request()->name;
      $customer->email=request()->email;
      $customer->save();
      return back();

    }
    public function edit($id){
        $customer= Customer::find($id);
      return view('normal.edit_customer')->with('customer',$customer);
    }
    public function update($id){
        $customer= Customer::find($id);
        $data= request()->validate([
          'name'=>'required',
          'email'=>'required|email'
        ]);
        $customer->name=request()->name;
        $customer->email=request()->email;
        $customer->save();
        return redirect(url('/show'));
    }
    public function destroy($id){
        $customer= Customer::find($id);
      $customer->delete();
      return redirect(url('/show'));

    }
}
