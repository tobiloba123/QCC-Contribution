<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interest;
use Auth;


class InterestController extends Controller
{
    //

    function index(){

        $interest = Interest::with('approver')->orderBy('id','DESC')->first();
        //return $interest;
        return view('pages.interest')->with(["interest"=>$interest]);    

    }

    function store(Request $request){

        if( Auth::user()->hasRole('Super-Admin') ){


            $interests = Interest::whereNull('deleted_at')->delete();
            
            $interest = new Interest();
            $interest->approver_id = Auth::id();
            $interest->amount = $request->amount;
            $interest->save();
            $request->session()->flash("alert-success", "Interest Added Complete");
            return redirect()->route('interest');

        }else{

            $request->session()->flash("alert-danger", "You dont have permission to add new interest.");
            return redirect()->route('interest');

        }

    }


}
