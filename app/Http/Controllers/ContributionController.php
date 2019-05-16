<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\User;
use App\UserDepartment;
use App\Department;
use App\ContributionType;
use App\Contribution;

class ContributionController extends Controller
{
    //

    function index(Request $request){

        $contributions = Contribution::with('creditor','contribution_type','user')->paginate(20);
        return view('pages.contributions')->with(["contributions"=>$contributions]);
    }

    function my_contributions(Request $request){

        $contributions = Contribution::with('creditor','contribution_type','user')->where('user_id',Auth::user()->id)->paginate(20);
        return view('pages.my_contributions')->with(["contributions"=>$contributions]);

    }


    function single_contribution(Request $request){
        
        $users = User::get();
        $contributionTypes = ContributionType::get();
        
        return view('pages.single_contribution')->with(["users"=>$users,"contribution_types"=>$contributionTypes]);
    }

    function process_single_contribution(Request $request){
        
        $contribution = new Contribution();
        $contribution->user_id = $request->user_id;
        $contribution->approver_id = Auth::user()->id;
        $contribution->contribution_type_id = $request->contribution_type_id;

        $contributionType = ContributionType::find($request->contribution_type_id);

        if($contributionType->class == "0"){

            $user = User::find($request->user_id);
            $amount = ($contributionType->amount/100) * $user->salary;
            $contribution->amount = $amount;

        }else{
            $contribution->amount = $contributionType->amount;
        }

        $contribution->remark = $request->remark;
        $contribution->save();

        $request->session()->flash('alert-success', 'User Contribution Added Successfully');
            return redirect('single_contribution');



    }


    function department_contribution(){

        $departments = Department::get();
        $contributionTypes = ContributionType::get();
        
        return view('pages.department_contribution')->with(["departments"=>$departments,"contribution_types"=>$contributionTypes]);

    }


    function process_department_contribution(Request $request){
        
        $contributionType = ContributionType::find($request->contribution_type_id);
        $userDepartments = UserDepartment::where('department_id',$request->department_id)->get();
        
        foreach($userDepartments as $userDepartment){
            
            $contribution = new Contribution();
            $contribution->user_id = $userDepartment->user_id;
            $contribution->approver_id = Auth::user()->id;

            $contribution->contribution_type_id = $contributionType->id;
            $contribution->amount = $contributionType->amount;
            $contribution->remark = $request->remark;
            $contribution->save();

        }

        

        $request->session()->flash('alert-success', 'Department Contribution Added Successfully');
            return redirect('department_contribution');



    }


}
