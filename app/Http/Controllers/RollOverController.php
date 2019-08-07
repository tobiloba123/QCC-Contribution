<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RollOver;
use Auth,DB,Hash;
use App\User;
use App\Contribution;
use App\Withdrawal;
use App\Interest;
use Carbon\Carbon;



class RollOverController extends Controller
{
    //


    public function index(Request $request){

           $roll_overs = DB::table('roll_overs')
            ->select('roll_overs.id','end_date','users.first_name', 'users.last_name')
            ->groupBy('code')
            ->leftJoin('users', 'users.id', '=', 'roll_overs.approver_id')
            ->paginate(20);
        
        return view('pages.roll_overs')->with(["roll_overs"=>$roll_overs]);    

    }


    public function store(Request $request){

        $password = Hash::make($request->password);

        if ( Hash::check($request->password, Auth::user()->password) ) {
            
            if( Auth::user()->hasRole('Super-Admin') ){


                $users = User::get();
                $rollOverCode = self::generateRandomString();
                
                foreach( $users as $user ) {
                    
                    //get roll over model
                    $first_roll_over = RollOver::where('user_id',$user->id)->orderBy('id','DESC')->first();

                    //get user first contribution data
                    if( !empty($first_roll_over) ){
                    
                        $first_contribution = Contribution::orderBy('created_at','ASC')
                        ->where('user_id',$user->id)
                        ->whereDate('created_at', '>=' ,$first_roll_over->end_date)
                        ->first();

                    }else{

                        $first_contribution = Contribution::orderBy('created_at','ASC')
                        ->where('user_id',$user->id)
                        ->first();

                    }

                    // Total amount withdrew by this user after roll
                    if( !empty($first_roll_over) ){
                    
                        $withdrawal = Withdrawal::where('user_id',$user->id)
                        ->whereDate('created_at', '>=' ,$first_roll_over->end_date)
                        ->sum('amount');

                    }else{

                        $withdrawal = Withdrawal::where('user_id',$user->id)
                        ->sum('amount');

                    }
                    

                    // Total amount contributed by this user after roll
                    if( !empty($first_roll_over) ){
                    
                        $contribution = Contribution::where('user_id',$user->id)
                        ->whereDate('created_at', '>=' ,$first_roll_over->end_date)
                        ->sum('amount');

                    }else{

                        $contribution = Contribution::where('user_id',$user->id)
                        ->sum('amount');

                    }
                    
                    
                    // get the interest
                    $interest = Interest::orderBy('id','DESC')->first();
                    $total_contribution_balance = ( $interest->amount / 100 ) * $contribution;

                    $roll_over = new RollOver();
                    $roll_over->user_id = $user->id;
                    $roll_over->approver_id = Auth::id();
                    $roll_over->code = $rollOverCode;
                    
                    if( !empty($first_roll_over) ){
                        $roll_over->start_date = $first_roll_over->end_date;
                    }else{
                        if( !empty($first_contribution->created_at) ){
                            $roll_over->start_date = $first_contribution->created_at;
                        }else{
                            $roll_over->start_date = now();
                        }

                    }

                    $roll_over->end_date = now();
                    $roll_over->balance = $total_contribution_balance;
                    $roll_over->amount_withdrawn = $withdrawal;
                    $roll_over->save();

                }

                
                $request->session()->flash("alert-success", "Roll Over Complete");
                return redirect()->route('roll_over');

            }else{

                $request->session()->flash("alert-danger", "You dont have permission to perform roll over.");
                return redirect()->route('roll_over');

            }

        }else{

            $request->session()->flash('alert-danger', 'Password Incorrect.');
            return redirect()->route('roll_over');

        }

        return $request;

    }



    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


}
