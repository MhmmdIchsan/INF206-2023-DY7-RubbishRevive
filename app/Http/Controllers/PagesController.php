<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        return view('user.dashboard', [
            'title' => 'Dashboard',
        ]);
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

    public function pickup(){
        return view('user.pickup', [
            'title' => 'Pickup',
        ]);
    }

    public function informasi(){
        return view('user.informasi', [
            'title' => 'Informasi',
        ]);
    }
    
 }
  
  

    public function exchange()
    {
        return view('user.exchange', [
            'title' => 'Exchange',
        ]);
    }

    public function tukar()
    {
        return view('user.tukar', [
            'title' => 'Tukar',
        ]);
    }

}