<?php

// app/Http/Controllers/AdminLoginController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrator;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('loginadmin');
    }

    public function login(Request $request)
    {
        $user = $request->input('username');
        $pass = $request->input('password');

        $administrator = Administrator::where('username', $user)->first();

        if ($administrator && $pass === $administrator->password) {
            // Set session loginadmin dan admin
            session(['loginadmin' => true, 'admin' => $user]);

            return redirect()->route('admin.dashboard'); // Sesuaikan dengan rute halaman admin
        }

        return redirect()->route('loginadmin')->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        // Hapus session loginadmin dan admin
        session(['loginadmin' => null, 'admin' => null]);

        return redirect()->route('loginadmin');
    }
}

