<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class AuthController extends Controller
{
    public function login()
    {
        return view('users/login');
    }

    public function userslogin(Request $request)
    {
         $request->validate([
            'email'=> 'required|Email',
            'password'=> 'required',
        ]);
        $users = $request->only('email','password');
        if(Auth::attempt($users))
        {
            return redirect('admin/dashboard');
        }
        else
        {
            return redirect()->back()->withErrors(["error" => 'Invalid email and password']);
        }
    }

    public function register()
    {
        return view('users/register');
    }

    public function registerstore(Request $request)
    {
        $validated = $request->validate([
            "fullname" => "required",
            "email" => "required|Email",
            "password" => "required",
        ]);

        $users = new Users;

        $users->fullname = $request->fullname;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->save();
        return redirect('login')->with(["success" => "Data has been successfully saved."]);
        
    }

    public function dashboard()
    {   
        return view("users.dashboard");
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/")->with(["success"=> "You have been logout successfully."]);
    }

    public function users()
    {
        $users = Users::orderBy('id', 'desc')->get();
        return view('users/users', compact('users'));
    }
    public function user_delete($id)
    {
        $users = DB::table('users')->where('id',$id);
        $users->delete();
        return redirect()->back()->with(["success" => "Item deleted successfully."]);
    }

    public function user_edit($id)
    {
        $users = DB::table("users")->where("id",$id)->first();
        return view("users/edit", compact("users"));
    }

    public function user_update(Request $request)
    {
        $users = Users::where("id",$request->id)->first();

        $users->fullname = $request->fullname;
        $users->email = $request->email;
        if(!empty($request->password))
        {
                $users->fullname = $request->fullname;
                $users->email = $request->email;
                $users->password = Hash::make($request->password);
        }
        else
        {
                $users->fullname = $request->fullname;
                $users->email = $request->email;
        };
        
        $users->save();
        return redirect()->back()->with(["success"=> "User updated successfully!"]);
    }

    public function status($id)
    {
        $users = users::where("id",$id)->first();

        if($users->status == 'active')
        {
            $users->status = 'inactive';
        }
        else
        {
            $users->status = 'active';
        }
        $users->save();
        return redirect()->back()->with(['success'=> 'Status updated successfully.']);
    }

}
