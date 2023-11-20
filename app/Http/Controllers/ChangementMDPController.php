<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ChangementMDPController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.profil.changePassword');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request)
    {

        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        
        if($this->passes($request->current_password)){
            $user = User::find(auth()->user()->id);
            $user->password = Hash::make($request->new_password);
            $user->save();

            return redirect()->back()->with('success','Mot de passe modifié avec succès');

        }else{
            return redirect()->back()->with('error','Mot de passe incorrect');
        };
        
    }
    public function passes($value)
    {
        return Hash::check($value, auth()->user()->password);
    }
}
