<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pickup;
use App\Models\Sampah;
use App\Models\Kecamatan;
use App\Models\TukarPoin;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class PickupController extends Controller
{
    public function index(): View
    {
        $role = Auth::user()->role;
        $date = Carbon::parse(now());
        $dayName = $date->format('l');
        
        if ($role == '2') {
            // select * from pickups where status = pending if today is monday then show pickup from kecamatan 1-3
            if ( $dayName == 'Monday') {
                $pickups = Pickup::where('status', '0')->where('kecamatan', '1')->orWhere('kecamatan', '2')->orWhere('kecamatan', '3')->latest()->paginate(3);
                return view('driver.pickup', compact('pickups', 'dayName', ), [
                    'title' => 'Pickup',
                ]);
            } elseif ($dayName == 'Tuesday') {
                $pickups = Pickup::where('status', '0')->where('kecamatan', '4')->orWhere('kecamatan', '5')->orWhere('kecamatan', '6')->latest()->paginate(3);
                return view('driver.pickup', compact('pickups', 'dayName'), [
                    'title' => 'Pickup',
                ]);
            } elseif ($dayName == 'Wednesday') {
                $pickups = Pickup::where('status', '0')->where('kecamatan', '7')->orWhere('kecamatan', '8')->orWhere('kecamatan', '9')->latest()->paginate(3);
                return view('driver.pickup', compact('pickups', 'dayName'), [
                    'title' => 'Pickup',
                ]);
            } elseif ($dayName == 'Thursday') {
                $pickups = Pickup::where('status', '0')->where('kecamatan', '1')->orWhere('kecamatan', '2')->orWhere('kecamatan', '3')->latest()->paginate(3);
                return view('driver.pickup', compact('pickups', 'dayName'), [
                    'title' => 'Pickup',
                ]);
            } elseif ($dayName == 'Friday') {
                $pickups = Pickup::where('status', '0')->where('kecamatan', '4')->orWhere('kecamatan', '5')->orWhere('kecamatan', '6')->latest()->paginate(3);
                return view('driver.pickup', compact('pickups', 'dayName'), [
                    'title' => 'Pickup',
                ]);
            } elseif ($dayName == 'Saturday') {
                $pickups = Pickup::where('status', '0')->where('kecamatan', '7')->orWhere('kecamatan', '8')->orWhere('kecamatan', '9')->latest()->paginate(3);
                return view('driver.pickup', compact('pickups', 'dayName'), [
                    'title' => 'Pickup',
                ]);
            } else {
                $pickups = Pickup::where('status', '0')->latest()->paginate(3);
                return view('driver.pickup', compact('pickups', 'dayName'), [
                    'title' => 'Pickup',
                ]);
            }
                

        } 
        elseif ($role == '1') {
            $pickups = Pickup::latest()->paginate(5);

            return view('admin.pickup', compact('pickups'), [
                'title' => 'Pickup',
            ]);
        } else {
            $pickups = Pickup::where('status', '0')->where('user_id', Auth::user()->id)->latest()->paginate(3);
            return view('user.pickup', compact('pickups'), [
            'title' => 'Pickup',
        ]);
        }
        
    }
    

    public function current(): View
    {
        // select * from pickups where status = pending
        $pickups = Pickup::where('status', '1')->where('user_id', Auth::user()->id)->latest()->paginate(3);

        return view('driver.ongoing', compact('pickups'), [
            'title' => 'Ongoing',
        ]);
    }

    public function create(): View
    {
        $sampah = Sampah::all();
        $kecamatan = Kecamatan::all();
        // define harga sampah from jenissampah value in pickup table
        $harga = Pickup::where('jenissampah')->get();
        $pickups = Pickup::all();

        return view('user.formPickup', compact('sampah', 'kecamatan'), [
            'title' => 'Pickup',
        ]);
    }


    public function edit(Pickup $pickup): View
    {

        return view('driver.edit', compact('pickup'), [
            'title' => 'Edit Pickup',
        ]);
    }

    public function update(Request $request, Pickup $pickup): RedirectResponse
    {
        $this->validate($request, [
            'status' => 'required',
            'harga' => 'required',
        ]);
        // asign driver 
        $pickup->driver_id = Auth::user()->id;
        $pickup->driver_name = Auth::user()->name;
        $pickup->harga = $request->harga;
        $jenissampah = $request->input ('jenissampah');

        // set poin = harga * beratsampah
        

        $harga = 0;


        $pickup->update(request()->all());
        
        // if status is 1 return to ongoing page
        if ($request->status == 1) {
            return redirect()->route('pickup.ongoing')
            ->with('success', 'Pickup updated successfully.');
        } elseif ($request->status == 2) {
            // define user is pickup userid and current auth user
            $user = User::where('id', $pickup->user_id)->first();
            $users = User::where('id', Auth::user()->id)->first();
            
            
            $pickup->poin = $pickup->harga * $pickup->beratsampah;
            $pickup->save();
            $user->poin = $user->poin + $pickup->poin;
            $users->poin = $user->poin + $users->poin;
            $user->save();
            $users->save();

            return redirect()->route('pickup.history')
            ->with('success', 'Pickup updated successfully.');
        }
        
    }

    public function store(Request $request) // : RedirectResponse
    {   
        // return $request->file('image')->store('pickup-images');

        $this->validate($request, [

            'nama' => 'required',
            'alamat' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'jenissampah' => 'required',
            'beratsampah' => 'required',
            'image' => 'image|file|max:2048',
        ]);

        // get image path from storage to database
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('pickup-images');
        }

        Pickup::create([

            'user_id' => Auth::user()->id,
            'nama' => $request->nama,
            'kecamatan' => $request->kecamatan,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'email' => $request->email,
            'jenissampah' => $request->jenissampah,
            'beratsampah' => $request->beratsampah,
            'harga' => $request->harga,
            'image' => $validatedData['image'],
        ]);

        return redirect()->route('pickup.index')
            ->with('success', 'Pickup created successfully.');
    }
    public function ongoing(): View
    {
        // select * from pickups where status = diambil

        $role = Auth::user()->role;
        if ($role == '1') {
            $pickups = Pickup::where('status', '1')->latest()->paginate(5);
            $tukarpoin = TukarPoin::where('status', '0')->get();
            return view('admin.ongoing', compact('pickups', 'tukarpoin'), [
                'title' => 'Ongoing',
            ]);
        } elseif ($role == '2') {
            $pickups = Pickup::where('status', '1')->latest()->paginate(5);
            $tukarpoin = TukarPoin::where('status', '0')->where('user_id', Auth::user()->id)->get();
            return view('driver.ongoing', compact('pickups', 'tukarpoin'), [
            'title' => 'Ongoing',
            ]);
        } else {
            $pickups = Pickup::where('status', '1')->latest()->paginate(5);
            $tukarpoin = TukarPoin::where('status', '0')->where('user_id', Auth::user()->id)->get();

            return view('user.ongoing', compact('pickups', 'tukarpoin'), [
            'title' => 'Ongoing',
        ]);
        }
    }

    public function history(): View
    {
        // select * from pickups where status = done
        $role = Auth::user()->role;
        if ($role == '1') {
            $pickups = Pickup::where('status', '2')->latest()->paginate(5);
            $tukarpoin = TukarPoin::where('status', '1')->get();
            return view('admin.history', compact('pickups','tukarpoin'), [
                'title' => 'History',
            ]);
        } elseif ($role == '2') {
            $pickups = Pickup::where('status', '2')->latest()->paginate(5);
            $tukarpoin = TukarPoin::where('status', '1')->where('user_id', Auth::user()->id)->get();
            return view('driver.history', compact('pickups','tukarpoin'), [
            'title' => 'History',
            ]);
        } else {
            $pickups = Pickup::where('status', '2')->where('user_id', Auth::user()->id)->latest()->paginate(5);
            $tukarpoin = TukarPoin::where('status', '1')->where('user_id', Auth::user()->id)->get();
            return view('user.history', compact('pickups','tukarpoin'), [
            'title' => 'History',
        ]);
        }
        
    }
}
