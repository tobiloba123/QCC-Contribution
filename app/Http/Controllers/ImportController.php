<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Imports\ContributionsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    //

    public function index(){
        return view('pages.contributions')->with(["contributions"=>$contributions]);
    }


    public function user_import(Request $request){

        try {
            
            Excel::import(new UsersImport,request()->file('file'));
            $request->session()->flash('alert-success', 'User Import Successful');
            return redirect('user_import');

        } catch (\Exception $e) {
            
            $request->session()->flash('alert-danger', 'User Import Failed');
            return redirect('user_import');

        }catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
             
            $failures = $e->failures();
             foreach ($failures as $failure) {
                 $failure->row(); // row that went wrong
                 $failure->attribute(); // either heading key (if using heading row concern) or column index
                 $failure->errors(); // Actual error messages from Laravel validator
                 $failure->values(); // The values of the row that has failed.
             }

             $request->session()->flash('alert-danger', 'User Import Failed');
            return redirect('user_import');

        }

    }


    public function contribution_import(Request $request){

        try {
            
            Excel::import(new ContributionsImport,request()->file('file'));
            $request->session()->flash('alert-success', 'Contributions Import Successful');
            return redirect('contribution_import');

        } catch (\Exception $e) {
            
            $request->session()->flash('alert-danger', 'Contributions Import Failed');
            return redirect('contribution_import');
            
        }catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
             
            $failures = $e->failures();
             foreach ($failures as $failure) {
                 $failure->row(); // row that went wrong
                 $failure->attribute(); // either heading key (if using heading row concern) or column index
                 $failure->errors(); // Actual error messages from Laravel validator
                 $failure->values(); // The values of the row that has failed.
             }

             $request->session()->flash('alert-danger', 'Contributions Import Failed');
            return redirect('contribution_import');

        }

        
    }


}
