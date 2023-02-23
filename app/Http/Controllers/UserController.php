<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req)
    {
        //return $req;
        $user = User::where(['email' => $req->email])
            ->where(['password' => $req->password])
            ->first();
        if (!$user){
            $req->session()->put('user' , $user);
            return redirect('/?success=false');
        } else {
            $req->session()->put('user',$user);
            return redirect('/?success=true');
        }
    }

    function register(Request $req){
        //return $req->input();
        try{
            DB::insert('INSERT INTO users(name,email,password,created_at) VALUES (?,?,?,?)',
            [$req->fullname,$req->email,$req->password, now()]);
            return redirect('/?success=registered');
        }   catch(\Exception){
            return redirect('/?success=failed');
        }

    }
    function search(Request $req) {
    return view('userlist',['listofuser'=> DB::table('users')
    ->select(DB::raw('id, name, email, password, created_at, updated_at'))
    ->where('email', 'like', '%' . $req->q . '%')
    ->orWhere('email', 'like', '%' . $req->q . '%')
    ->paginate(5)]);
    }

    function deleteuser(Request $req) 
    {
        DB::table('users')
        ->where('id', $req->rid)
        ->delete();
        return redirect('/userlist?success=deleted');
    }

    function getuser(Request $req) 
    {
        $data = DB::table('users')
        ->where('id', $req->rid)
        ->first();
        return view('useredit', ['users'=>$data]);
    }

    function edituser(Request $req)
    {
        DB::table('users')->where('id',$req->rid)
        ->update(array(
            'name' => $req->fullname,
            'password' =>$req->password,
            'email' =>$req->email,
            'updated_at' => now()
        ));
        return redirect('userview?rid=' .$req->rid.'&succes=1');
    }

    function viewuser(Request $req) 
    {
        $data = DB::table('users')
        ->where('id', $req->rid)
        ->first();
        return view('userview', ['users'=>$data]);
    }
}