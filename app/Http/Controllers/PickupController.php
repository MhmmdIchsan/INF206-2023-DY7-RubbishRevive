<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pickup;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PickupController extends Controller
{
    public function index(): View
    {
        $pickups = Pickup::latest()->paginate(5);

        return view('user.ongoing', compact('pickups'), [
            'title' => 'Pickup',
        ]);
    }

    public function create(): View
    {

        return view('pickup.create', [
            'title' => 'Pickup',
        ]);
    }
