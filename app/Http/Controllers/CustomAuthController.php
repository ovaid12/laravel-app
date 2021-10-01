<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\role;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login(){

        return view('auth.login');
    }
    public function registration(){

        $data = role::all();
        return view('auth.registration', compact('data'));

    }
    public function registerUser(REQUEST $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);
        $user= new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->user_role = $request->user_role;
        $res=$user->save();
        if($res){
            return back()->with('key', 'Registered Successfully');
        }else{
            return back()->with('Fail', 'Something gone Wrong');
        }
    }
    public function loginUser(REQUEST $request){
        $request->validate([
           'email'=>'required|email',
           'password'=>'required'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
               $request->session()->put('loginId', $user->id);
               return redirect('dashboard');

            }else{
                return back()->with('fail', 'Password not matches');
            }

        }else{
            return back()->with('fail', 'This email is not registered');
        }
    }



    public function dashboard(){

        $data = array();

        if(Session::has('loginId')){
            
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }

        return view('dashboard', ['users'=> User::all()], compact('data'));
    }



    //to view the role created

    public function role(){

        return view('role', ['users'=> role::all()]);
    }



    //to logout from the current user

    public function logout(){

        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }

    //to delete a particular user

    public function destroy($id){
         $data = User::find($id);
         $data->delete();
         return redirect('/dashboard')->with('success', 'Deleted Successfully');
    }


    public function update(Request $request, $id){

        $users = User::find($id);
        $data = role::all();
        
        return view('edit', compact('data','users'));
        
        
    }

    public function userupdated(Request $request, $id){

        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->user_role = $request->input('user_role');
        $users->update();

        return redirect('/dashboard')->with('success', 'Updated Successfully');
    
    }

    public function show($id){
        
        $data = User::find($id);
        return view('/one', ['data'=>$data]);
        
    }



    public function createnewrole(){
        return view('newrole');
    }



    public function registeredrole(Request $request){
        $request->validate([
            'name'=>'required|unique:roles'
    
        ]);
         $user = new role();
         $user->name = $request->name;
         $res = $user->save();
         //$data = role::all();
         //return view('auth.registration', compact('data'));
         if($res){
             return back()->with('success', 'Role Created Successfully');
         }else{
            return back()->with('Fail', 'Role Already Exist');
         }
    }
         

    public function delrole($id){
          $role = role::find($id);
          $data = User::where('user_role','=', $role->name)->first();;
          if(!$data){

          $role->delete();
          return redirect('/role')->with('success', 'Deleted Successfully');
        }else{
            return back()->with('Fail', 'unable to delete role is already assigned');
        }
    }
    
}
