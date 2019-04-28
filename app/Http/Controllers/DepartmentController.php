<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    //

    function index(Request $request){

        $departments = Department::with('creator')->withTrashed()->get();

        return view('pages.departments')->with(["departments"=>$departments]);    

    }


    function add(Request $request){

        return view('pages.add_department');

    }

    function store(Request $request){

        $department = new Department();
        $department->name = $request->name;
        $department->creator_id = Auth::user()->id;
        $department->save();

        $request->session()->flash('alert-success', 'Department Added Successfully');
            return redirect('add_department');

    }


    function delete(Request $request,$id){

        $department = Department::find($id);
        $department->delete();

        $request->session()->flash('alert-success', 'Department Disabled Successfully');
            return redirect('departments');

    }


    function restore(Request $request,$id){

        $department = Department::withTrashed()->find($id);
        $department->restore();

        $request->session()->flash('alert-success', 'Department Enabled Successfully');
            return redirect('departments');

    }



    function edit(Request $request,$id){

        $department = Department::withTrashed()->find($id);
        return view('pages.edit_department')->with(["department"=>$department]);    

    }

    function save_edit(Request $request,$id){

        $department = Department::withTrashed()->find($id);
        $department->name = $request->name;
        $department->save();

        $request->session()->flash('alert-success', 'Department Updated Successfully');
            return redirect('departments');

    }


}
