<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Withdrawal;
use Auth;
use Carbon\Carbon;

class WithdrawalController extends Controller
{
    //


    function index(Request $request){
        $withdrawals = Withdrawal::with("approver","user")
        ->whereNull('approved_date')->paginate(20);
        return view('pages.withdrawals')->with(["withdrawals"=>$withdrawals]);
    }

    function my_withdrawals(Request $request){
        $withdrawals = Withdrawal::with("approver")->withTrashed()->where('user_id',Auth::user()->id)->paginate(20);
        return view('pages.my_withdrawals')->with(["withdrawals"=>$withdrawals]);
    }


    function make_withdrawal(Request $request){

        $withdrawal = new Withdrawal();
        $withdrawal->user_id = Auth::user()->id;
        $withdrawal->amount = $request->amount;
        $withdrawal->remark = $request->remark;
        $withdrawal->save();
        $request->session()->flash('alert-success', 'Withdrawal Request Added Successfully');
        return redirect('make_withdrawal');

    }

    function delete(Request $request,$id){
        $withdrawal = Withdrawal::find($id);
        //$withdrawal->approver_id = Auth::user()->id;
        //$withdrawal->save();
        $withdrawal->delete();
        $request->session()->flash('alert-success', 'Withdrawal Request Disapproved Successfully');
        return redirect('withdrawals');
    }

    function approve(Request $request,$id){
        $withdrawal = Withdrawal::find($id);
        $withdrawal->approver_id = Auth::user()->id;
        $withdrawal->approved_date = Carbon::now();
        $withdrawal->status = "success";
        $withdrawal->save();
        $request->session()->flash('alert-success', 'Withdrawal Request Approved Successfully');
        return redirect('withdrawals');
    }


}
