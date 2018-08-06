<?php
namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function index()
    {
        if (!Session::get('login')) {
            return redirect('login')->with('alert', 'Kamu harus login dulu');
        } else {
            return view('home');
        }
    }
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $data = ModelUser::where('email', $email)->first();
        if (count($data) > 0) { //apakah email tersebut ada atau tidak
            if (Hash::check($password, $data->password)) {
                Session::put('name', $data->name);
                Session::put('email', $data->email);
                Session::put('phone', $data->no_hp);
                Session::put('address', $data->alamat);
                Session::put('login', true);
                return redirect('home_user');
            } else {
                return redirect('login')->with('alert', 'Password atau Email, Salah !' . Hash::check($password, $data->password));
            }
        } else {
            return redirect('login')->with('alert', 'Password atau Email, Salahaa!');
        }
    }
    public function logout()
    {
        Session::flush();
        return redirect('login')->with('alert', 'Kamu sudah logout');
    }

    public function register(Request $request)
    {
        return view('register');
    }

    public function ImageLoad()
    {
    	return view('register');
    }
    
    public function ImagePost(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        Session::put('Uploaded', true);
        return back()
            ->with('success', 'You have successfully upload images.')
            ->with('path', $imageName);
    }

    public function registerPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
            'address' => 'required|min:8',
            'phone' => 'required|min:11',
        ]);

        $data = new ModelUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->alamat = $request->address;
        $data->no_hp = $request->phone;
        $data->remember_token = str_random(30);
        $data->photo_profile = Session::get('path');
        $data->save();
        
        Session::forget('Uploaded');
        Session::forget('path');
        return redirect('login')->with('alert-success', 'Kamu berhasil Register');
    }
}