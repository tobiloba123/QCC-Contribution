<?php

namespace App\Http\Controllers;

use Log;
use App\Exports\WithdrawalsExport;
use App\Exports\ContributionsExport;
use App\Exports\EmployeeContributionsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Contribution;
use App\Withdrawal;
use PDF;

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
    


    //PDF SECTIONS

    public function withdrawal_export_pdf(Request $request,$keyword){

        $data = Withdrawal::with('user','approver')
        ->withTrashed()
        ->orderBy('created_at','DESC')
        ->where('remark','like','%' . $keyword . '%')
        ->whereOr('amount','like','%' . $keyword . '%')
        ->whereOr('approved_date','like','%' . $keyword . '%')
        ->whereOr('created_at','like','%' . $keyword . '%')->get();

        $data = ['withdrawals' => $data];
        $pdf = PDF::loadView('pdf/withdrawals', $data);
  
        return $pdf->download('withdrawals-report.pdf');

    }

    public function withdrawal_export_all_pdf(Request $request){

        $data = Withdrawal::with('user','approver')
        ->withTrashed()
        ->orderBy('created_at','DESC')->get();

        $data = ['withdrawals' => $data];
        $pdf = PDF::loadView('pdf/withdrawals', $data);
  
        return $pdf->download('withdrawals-report.pdf');

    }


    public function contribution_export_pdf(Request $request,$keyword){

        $data = Contribution::with('creditor','contribution_type','user')
        ->withTrashed()
        ->orderBy('created_at','DESC')
        ->where('remark','like','%' . $keyword . '%')
        ->whereOr('user_id','=',$keyword)
        ->whereOr('amount','like','%' . $keyword . '%')
        ->whereOr('approved_date','like','%' . $keyword . '%')
        ->whereOr('created_at','like','%' . $keyword . '%')->get();

        $data = ['contributions' => $data];
        $pdf = PDF::loadView('pdf/contributions', $data);
  
        return $pdf->download('contributions-report.pdf');

    }

    public function contribution_export_all_pdf(Request $request){
    
        $data = Contribution::with('creditor','contribution_type','user')
        ->withTrashed()
        ->orderBy('created_at','DESC')->get();

        $data = ['contributions' => $data];
        $pdf = PDF::loadView('pdf/contributions', $data);
  
        return $pdf->download('contributions-report.pdf');

    }

    public function employee_contribution_export_all_pdf(Request $request,$id){

        $data = Contribution::with('creditor','contribution_type','user')
        ->withTrashed()
        ->orderBy('created_at','DESC')
        ->where('user_id',$id)->get();

        $data = ['contributions' => $data];
        $pdf = PDF::loadView('pdf/employee_contributions', $data);
  
        return $pdf->download('employee-contributions-report.pdf');

    }


}
