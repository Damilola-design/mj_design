<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;


use Illuminate\Http\Request;

class UpdateUsers extends Controller
{
    public function update(Request $request, User $id){
        $this->validate($request,[
            'first_name' => 'required|min:6',
           'last_name' => 'required|min:6',
        ]);
        DB::table('users')
        ->where('id', Auth::user()->id)
        ->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            ]);

            return redirect("/client-portal")->with('success', 'User has been updated!!');
    }
}
