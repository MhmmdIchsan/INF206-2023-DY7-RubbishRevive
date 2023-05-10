<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PagesController extends Controller
{
    public function halamanUtama()
    {
        return view('index', [
            'title' => 'Rubbish Revive'
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

    public function tukarPulsa10()
    {
        return view('user.tukarPulsa10', [
            'title' => 'Tukar',
        ]);
    }

    public function tukarPulsa20()
    {
        return view('user.tukarPulsa20', [
            'title' => 'Tukar',
        ]);
    }

    public function tukarPulsa50()
    {
        return view('user.tukarPulsa50', [
            'title' => 'Tukar',
        ]);
    }
    public function tukarPulsa100()
    {
        return view('user.tukarPulsa100', [
            'title' => 'Tukar',
        ]);
    }
    public function tukarListrik50()
    {
        return view('user.tukarListrik50', [
            'title' => 'Tukar',
        ]);
    }
    public function tukarListrik100()
    {
        return view('user.tukarListrik100', [
            'title' => 'Tukar',
        ]);
    }
    public function tukarListrik150()
    {
        return view('user.tukarListrik150', [
            'title' => 'Tukar',
        ]);
    }
    public function tukarListrik200()
    {
        return view('user.tukarListrik200', [
            'title' => 'Tukar',
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