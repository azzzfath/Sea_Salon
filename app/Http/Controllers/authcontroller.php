<?php


namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class authcontroller
{
    public function login()
    {
        return view('/login');
    }

    public function register()
    {
        return view('/register');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        

        if(Auth::attempt($credentials)) {
            return redirect()-> route ('/dashboard');
        }

        return redirect()->back()->with('error', 'email or password is wrong');

        

    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users,email',
            'phonenumber' => 'required',
            'password' => 'required',
        ]);

        $data = $request->except('_token', 'password');
        $data['password'] = Hash::make($request->password);

        user::create($data);
        return redirect('/login');
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
