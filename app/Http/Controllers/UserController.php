<?php

namespace App\Http\Controllers;

use Auth,DB,Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Department;
use App\UserDepartment;
use App\Withdrawal;
use App\Contribution;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    //

    function index(Request $request){

        $users = User::with('user_department')
        ->with('user_department.department')
        ->withTrashed()->get();

        return view('pages.users')->with(["users"=>$users]);    

    }

    function add(Request $request){

        $departments = Department::get();

        if(Auth::user()->hasRole('Super-Admin')){
            $roles = Role::get();
        }else if(Auth::user()->hasRole('Admin')){
            $roles = Role::where('name','like','%employee%')->get();
        }else{
            $request->session()->flash('alert-danger', 'You don\'t have permission to add new user account.');
            return redirect('users');
        }


        return view('pages.add_user')->with(["departments"=>$departments,"roles"=>$roles]);

    }

    function store(Request $request){

        DB::beginTransaction();

        try{

            $validator = Validator::make($request->all(), [
                'email' => 'required|unique:users|max:255',
                'phone' => 'required|unique:users|max:20',
                'username' => 'required|unique:users|max:255',
                'first_name' => 'required',
                'last_name' => 'required',
                'address' => 'required',
                'job_description' => 'required',
                'password' => 'required',
                'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($validator->fails()) {

                return redirect('add_user')
                            ->withErrors($validator)
                            ->withInput();

            }


            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->job_description = $request->job_description;
            $user->password = Hash::make($request->password);

            if(!empty($request->picture)){

                $imageName = time().'.'.request()->picture->getClientOriginalExtension();
                request()->picture->move(public_path('uploads/profile/images'), $imageName);
                $user->picture_url = 'uploads/profile/images/'.$imageName;
            }

            $user->save();

            //adding user to department
            $userDepartment = new UserDepartment();
            $userDepartment->department_id = $request->department_id;
            $userDepartment->user_id = $user->id;
            $userDepartment->save();
            //adding role to user
            $user->assignRole($request->role);
            
            DB::commit();

            $request->session()->flash('alert-success', 'User Added Successfully');
                return redirect('add_user');

        }catch(\Exception $ex){

            DB::rollBack();

            return $ex->getMessage();
            //return $request;

            $request->session()->flash('alert-danger', 'Adding User Account Failed');
            return redirect('add_user');

        }

    }


    function delete(Request $request,$id){

        $user = User::find($id);
        $user->delete();

        $request->session()->flash('alert-success', 'User Disabled Successfully');
            return redirect('users');

    }


    function restore(Request $request,$id){

        $user = User::withTrashed()->find($id);
        $user->restore();

        $request->session()->flash('alert-success', 'User Enabled Successfully');
            return redirect('users');

    }



    function edit(Request $request,$id){
        
        $departments = Department::get();

        if(Auth::user()->hasRole('Super-Admin')){
            $roles = Role::get();
        }else if(Auth::user()->hasRole('Admin')){
            $roles = Role::where('name','like','%employee%')->get();
        }else{
            $request->session()->flash('alert-danger', 'You don\'t have permission to add edit user account.');
            return redirect('users');
        }

        if($id != Auth::user()->id){

            $user = User::with('user_department.department')->withTrashed()->find($id); 
            return view('pages.edit_user')->with(["user"=>$user,"departments"=>$departments,"roles"=>$roles]);

        }else{

            $request->session()->flash('alert-warning', 'Please Use the Profile Page To Edit your account. Thank you');
            return redirect('users');

        }

    }

    function save_edit(Request $request,$id){

        $user = User::withTrashed()->find($id);

        DB::beginTransaction();

        try{

            $validator = Validator::make($request->all(), [
                'email' => [
                    'required',
                    Rule::unique('users')->ignore($id),
                ],
                'phone' => [
                    'required',
                    Rule::unique('users')->ignore($id),
                ],
                'username' => [
                    'required',
                    Rule::unique('users')->ignore($id),
                ],
                'first_name' => 'required',
                'last_name' => 'required',
                'address' => 'required',
                'job_description' => 'required',
                'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($validator->fails()) {
                
                return "Failed";
                return redirect(route('edit_user',$id))
                            ->withErrors($validator)
                            ->withInput();

            }

            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->job_description = $request->job_description;

            if(!empty($request->picture)){

                $imageName = time().'.'.request()->picture->getClientOriginalExtension();
                request()->picture->move(public_path('uploads/profile/images'), $imageName);
                $user->picture_url = 'uploads/profile/images/'.$imageName;
            }

            $user->save();

            //adding user to department
            $userDepartment = UserDepartment::firstOrCreate(['user_id' => $user->id]);
            $userDepartment->department_id = $request->department_id;
            $userDepartment->user_id = $user->id;
            $userDepartment->save();

            //revoke all previous Roles and given new role
            $user->syncRoles([$request->role]);
            
            DB::commit();

            $request->session()->flash('alert-success', 'User Updated Successfully');
                return redirect('users');

        }catch(\Exception $ex){

            
            DB::rollBack();

            //return $ex->getMessage();
            return $request;

            $request->session()->flash('alert-danger', 'Editing User Account Failed');
            return redirect(route('edit_user',$id));

        }

    }







    function profile(Request $request){

        $user = User::with('user_department.department')->find(Auth::user()->id);
        $withdrawals = Withdrawal::where('user_id',Auth::user()->id)
        ->orderBy('created_at', 'DESC')
        ->limit(5)
        ->get();

        $allWithdrawals = Withdrawal::where('user_id',Auth::user()->id)
        ->orderBy('created_at', 'DESC')
        ->get();

        $total_contribution = Contribution::where('user_id',Auth::user()->id)->sum('amount');
        $total_withdrawal = Withdrawal::where('user_id',Auth::user()->id)->whereNotNull('approved_date')->sum('amount');

        $balance = $total_contribution - $total_withdrawal;
        

        return view('pages.profile')->with(["user"=>$user,"withdrawals"=>$withdrawals,"allWithdrawals"=>$allWithdrawals,"balance"=>$balance]);

    }


    function update_profile(Request $request){

        $id = Auth::user()->id;
        $user = Auth::user();

        DB::beginTransaction();

        try{

            $validator = Validator::make($request->all(), [
                'email' => [
                    'required',
                    Rule::unique('users')->ignore($id),
                ],
                'phone' => [
                    'required',
                    Rule::unique('users')->ignore($id),
                ],
                'username' => [
                    'required',
                    Rule::unique('users')->ignore($id),
                ],
                'first_name' => 'required',
                'last_name' => 'required',
                'address' => 'required',
                'job_description' => 'required',
                'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($validator->fails()) {
                
                return redirect(route('edit_profile'))
                            ->withErrors($validator)
                            ->withInput();

            }

            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->job_description = $request->job_description;

            if(!empty($request->picture)){

                $imageName = time().'.'.request()->picture->getClientOriginalExtension();
                request()->picture->move(public_path('uploads/profile/images'), $imageName);
                $user->picture_url = 'uploads/profile/images/'.$imageName;
            }

            $user->save();
 
            DB::commit();

            $request->session()->flash('alert-success', 'Profile Updated Successfully');
                return redirect('profile');

        }catch(\Exception $ex){

            
            DB::rollBack();
            $request->session()->flash('alert-danger', 'Updating User Account Failed');
            return redirect(route('edit_profile'));

        }

    }


    function change_password(Request $request){

        $validator = Validator::make($request->all(), [
            'new_password' => 'required|confirmed|min:6',
        ]);

        if ($validator->fails()) {
            
            return redirect(route('change_password'))
                        ->withErrors($validator)
                        ->withInput();

        }


        if ( !Hash::check($request->password, Auth::user()->password) ) {
            $request->session()->flash('alert-danger', 'Your current password is incorrect.');
            return redirect(route('change_password'));
        }

        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->flash('alert-success', 'Password Updated Successfully');
        return redirect('change_password');

    }


}
