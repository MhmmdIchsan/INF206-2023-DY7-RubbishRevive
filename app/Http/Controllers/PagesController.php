<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;

class PagesController extends Controller
{
    public function halamanUtama()
    {
        return view('index', [
            'title' => 'Landing Page'
        ]);
    }

    public function dashboard()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            return view('admin.dashboard', [
                'title' => 'Dashboard',
            ]);
        }

        if ($role == '2') {
            return view('driver.dashboard', [
                'title' => 'Dashboard',
            ]);
        } else {
            return view('user.dashboard', [
                'title' => 'Dashboard',
            ]);
        }
    }

    public function myprofile()
    {
        return view('user.myprofile', [
            'title' => 'My Profile',
        ]);
    }

    public function ongoing()
    {
        return view('user.ongoing', [
            'title' => 'Ongoing',
        ]);
    }

    public function history()
    {
        return view('user.history', [
            'title' => 'History',
        ]);
    }

    public function pickup()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            return view('admin.pickup', [
                'title' => 'Pickup',
            ]);
        }

        if ($role == '2') {
            return view('driver.pickup', [
                'title' => 'Pickup',
            ]);
        } else {
            return view('user.pickup', [
                'title' => 'Pickup',
            ]);
        }
    }

    public function informasi()
    {
        return view('informasi.informasi', [
            'title' => 'Informasi',
        ]);
    }

    public function informasi2()
    {
        return view('informasi.informasi2', [
            'title' => 'Informasi',
        ]);
    }

    public function informasi3()
    {
        return view('informasi.informasi3', [
            'title' => 'Informasi',
        ]);
    }

    public function informasi4()
    {
        return view('informasi.informasi4', [
            'title' => 'Informasi',
        ]);
    }

    public function exchange()
    {
        return view('user.exchange', [
            'title' => 'Exchange',
        ]);
    }

    public function aboutus()
    {
        return view('user.aboutus', [
            'title' => 'About Us',
        ]);
    }

    public function pricelist()
    {
        return view('user.pricelist', [
            'title' => 'Price List',
        ]);
    }

    public function jadwalPickup()
    {
        return view('user.jadwal-pickup', [
            'title' => 'Jadwal Pickup Sampah',
        ]);
    }

}