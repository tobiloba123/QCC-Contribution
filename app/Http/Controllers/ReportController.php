<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Withdrawal;
use App\Contribution;
use App\User;


class ReportController extends Controller
{

    function withdraw_report(){

        $withdrawals = Withdrawal::with("approver","user")
        ->withTrashed()
        ->orderBy('created_at','DESC')
        ->paginate(20);
        return view('pages.with_drawals_report')->with(['withdrawals' => $withdrawals,'keyword' => '']);

    }

    function withdraw_report_advance(Request $request){

        $withdrawals = Withdrawal::with("approver","user")
        ->withTrashed()
        ->orderBy('created_at','DESC')
        ->where('remark','like','%' . $request->keyword . '%')
        ->whereOr('amount','like','%' . $request->keyword . '%')
        ->whereOr('approved_date','like','%' . $request->keyword . '%')
        ->whereOr('created_at','like','%' . $request->keyword . '%')
        ->paginate(20);
        return view('pages.with_drawals_report')->with(['withdrawals' => $withdrawals,'keyword' => $request->keyword]);

    }



    function contribution_report(){

        $contributions = Contribution::with('creditor','contribution_type','user')
        ->withTrashed()
        ->orderBy('created_at','DESC')
        ->paginate(20);
        return view('pages.contributions_report')->with(["contributions"=>$contributions,'keyword' => '']);

    }


    function contribution_report_advance(Request $request){

        $contributions = Contribution::with('creditor','contribution_type','user')
        ->withTrashed()
        ->orderBy('created_at','DESC')
        ->where('remark','like','%' . $request->keyword . '%')
        ->whereOr('amount','like','%' . $request->keyword . '%')
        ->whereOr('approved_date','like','%' . $request->keyword . '%')
        ->whereOr('created_at','like','%' . $request->keyword . '%')
        ->paginate(20);
        return view('pages.contributions_report')->with(["contributions"=>$contributions,'keyword' => $request->keyword]);

    }


    function employee_contribution_report(){
        $users = User::get();
        return view('pages.employee_contributions_report')->with(["users"=>$users]);
    }


    function employee_contribution_report_process(Request $request){

        $contributions = Contribution::with('creditor','contribution_type','user')
        ->where('user_id',$request->user_id)
        ->withTrashed()
        ->orderBy('created_at','DESC')
        ->paginate(20);
        return view('pages.employee_contributions_report')->with(["contributions"=>$contributions,'keyword' => $request->user_id]);

    }



}
