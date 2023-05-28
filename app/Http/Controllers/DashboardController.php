<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboardMain(){
        return view('admin.dashboard');
    }

    public function insert_price(){
        return view('admin.insert_price');
    }
    public function update_price(){
        return view('admin.update_price');
    }

    public function update_price_process(Request $request){
        dd($request->all());
    }

}
