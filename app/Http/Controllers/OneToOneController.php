<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Mobile;
use DB;


class OneToOneController extends Controller
{
   
    public function add(){
        $mobile=new Mobile();
        $mobile->model="m32";
        $mobile->company="nokia";

        $customer=new Customer();
        $customer->name="asish";
        $customer->email="asish@gmail.com";

        $customer->save();

        $customer->mobile()->save($mobile);
    }

    public function getmobile($id){
        $customer=Customer::find($id)->mobile;
        dd($customer);
    }
    public function getCustomer($id){
        $mobile=Mobile::find($id)->customer;
        dd($mobile);
    }
    public function alldata($id){
        $mobile=Customer::find($id);
        dd($mobile->mobile->model);
    }
}   
