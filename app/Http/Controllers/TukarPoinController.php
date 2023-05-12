<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TukarPoin;
use App\Models\Hadiah;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class TukarPoinController extends Controller
{
    public function index()
    {
        return view('user.exchange', [
            'title' => 'Tukar Poin'
        ]);
    }

    public function create()
    {
        $hadiah = Hadiah::all();

        return view('penukaran.tukarPoin', compact('hadiah'), [
            'title' => 'Tukar Poin'
        ]);
    }

    public function store(Request $request)
    {
        // poin = poin where namahadiah value

        

        $request->validate([
            'nama' => 'required',
            'namahadiah' => 'required',
            'nohp' => 'required',
        ]);

        TukarPoin::create([
            'user_id' => Auth::user()->id,
            'nama' => $request->nama,
            'nohp' => $request->nohp,
            'namahadiah' => $request->namahadiah,
            'poin' => $request->poin,
        ]);

        return redirect('ongoing')->with('status', 'Hadiah berhasil diminta!');
    }

    public function ongoing(): View
    {
        $tukarpoin = TukarPoin::where('user_id', Auth::user()->id)->get();

        return view('user.ongoing', compact('tukarpoin'), [
            'title' => 'Ongoing'
        ]);
    }

    public function edit(TukarPoin $tukarpoin): View
    {
        return view('penukaran.edit', compact('tukarpoin'), [
            'title' => 'Edit Tukar Poin'
        ]);
    }

    public function update(Request $request, TukarPoin $tukarpoin): RedirectResponse
    {
        $this->validate($request, [
            'status' => 'required',
            'poin' => 'required',
        ]);

        // set poin value based on namahadiah value
        $request->poin = $request->input ('poin');
        $namahadiah = $request->input ('namahadiah');
        
        // set poin value based on namahadiah value
        $tukarpoin->update(request()->all());

        $user = User::where('id', $tukarpoin->user_id)->first();

        // if poin is enough, set status to 1
        if ($user->poin >= $tukarpoin->poin) {
            $tukarpoin->status = 1;
            $user->poin = $user->poin - $request->poin;
            $tukarpoin->save();
            $user->save();
            return redirect()->route('pickup.history')
            ->with('success', 'Tukar Poin updated successfully.');
        } else {
            // if poin is not enough, set status to 0
            $tukarpoin->status = 0;
            $tukarpoin->save();
            return redirect()->route('pickup.ongoing')
            ->with('error', 'Poin tidak cukup.');
        } 
    }
    
}
