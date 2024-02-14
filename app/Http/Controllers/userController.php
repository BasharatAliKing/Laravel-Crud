<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function allUsers(){
    $users = DB::table('student')->get();
    return view('allusers',['data'=>$users]);
   }
   public function addUser(Request $req){
    $user= DB::table('student')->insert([
        'name'=>$req->name,
        'roll'=>$req->roll,
        'address'=>$req->address
    ]);
    if($user){
        return redirect()->route('home');
    }
   }
   // view User
   public function viewUser(string $id){
    $user=DB::table('student')->where('id',$id)->get();
    return view('viewUser',['data'=>$user]);
   }
   // delete User
   public function deleteUser(string $id){
    $user=DB::table('student')->where('id',$id)->delete();
    if($user){
        return redirect()->route('home');
    }
   }
   public function updateUser(string $id){
       $user=DB::table('student')->where('id',$id)->get();
       return view('updateUser',['data'=>$user]);
   }
   public function update(Request $req,$id){
    $user=DB::table('student')->where('id',$id)->update([
        'name'=>$req->name,
        'roll'=>$req->roll,
        'address'=>$req->address,
    ]);
    if($user){
        return redirect()->route('home');
    }
   }
}
