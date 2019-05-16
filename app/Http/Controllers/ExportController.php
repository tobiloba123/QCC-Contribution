<?php

namespace App\Http\Controllers;

use Log;
use App\Exports\WithdrawalsExport;
use App\Exports\ContributionsExport;
use App\Exports\EmployeeContributionsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    //

    public function withdrawal_export(Request $request,$keyword){

        return (new WithdrawalsExport($keyword))->download('withdrawals-report.xlsx');

    }

    public function withdrawal_export_all(Request $request){

        return (new WithdrawalsExport(""))->download('withdrawals-report.xlsx');

    }


    public function contribution_export(Request $request,$keyword){

        return (new ContributionsExport($keyword))->download('contributions-report.xlsx');

    }

    public function contribution_export_all(Request $request){
    
        return (new ContributionsExport(""))->download('contributions-report.xlsx');

    }

    public function employee_contribution_export_all(Request $request,$id){
        return (new EmployeeContributionsExport($id))->download('employee-contributions-report.xlsx');

    }
    



}
