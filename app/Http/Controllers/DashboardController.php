<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Department;
use App\Withdrawal;


class DashboardController extends Controller
{
    //


    function index(Request $request){

        $users = User::count();
        $departments = Department::count();
        $withdrawals = Withdrawal::where('status','pending')->get()->count();
        $requests = Withdrawal::where('status','success')->get()->count();

        $data = [
            "users" => $users,
            "departments" => $departments,
            "withdrawals" => $withdrawals,
            "requests" => $requests,
        ];

        return view('pages.dashboard')->with($data);        

    }


}
