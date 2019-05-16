<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\ContributionType;

class ContributionTypeController extends Controller
{
    //

    function index(){

        $contributionTypes = ContributionType::with('creator')->withTrashed()->get();
        return view('pages.contribution_types')->with(["contributionTypes"=>$contributionTypes]);  

    }

    function add(Request $request){

        return view('pages.add_contribution_type');

    }

    function store(Request $request){

        $contributionType = new ContributionType();
        $contributionType->name = $request->name;
        $contributionType->amount = $request->amount;
        $contributionType->class = $request->class;
        $contributionType->creator_id = Auth::user()->id;
        $contributionType->save();

        $request->session()->flash('alert-success', 'Contribution Type Added Successfully');
            return redirect('add_contribution_type');

    }

    function delete(Request $request,$id){

        $contributionType = ContributionType::find($id);
        $contributionType->delete();

        $request->session()->flash('alert-success', 'Contribution Type Disabled Successfully');
            return redirect('contribution_types');

    }


    function restore(Request $request,$id){

        $contributionType = ContributionType::withTrashed()->find($id);
        $contributionType->restore();

        $request->session()->flash('alert-success', 'Contribution Type Enabled Successfully');
            return redirect('contribution_types');

    }

    function edit(Request $request,$id){

        $contributionType = ContributionType::withTrashed()->find($id);
        return view('pages.edit_contribution_type')->with(["contributionType"=>$contributionType]);    

    }

    function save_edit(Request $request,$id){

        $contributionType = ContributionType::withTrashed()->find($id);
        $contributionType->name = $request->name;
        $contributionType->amount = $request->amount;
        $contributionType->save();

        $request->session()->flash('alert-success', 'Contribution Type Updated Successfully');
            return redirect('contribution_types');

    }


}
