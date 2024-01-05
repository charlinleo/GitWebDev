<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reservation.index', [
            "pagetitle" => 'Reservations',
            "maintitle" => 'Reservations',
            'reservation' => Reservation::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check() && Auth::user()->isAdmin() || Auth::check() && Auth::user()->isMember()) {
            return view(
                'service.create',
                [
                    "pagetitle" => 'Add Reservation',
                    "maintitle" => 'Add Reservation Detail',
                ],
            );
        } else {
            return redirect()->route('service.index')->with('error', 'Unauthorized access');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check() && Auth::user()->isAdmin() || Auth::check() && Auth::user()->isAdmin()) {
            $service_id = (int) $request->input('service_id');
            $product_id = (int) $request->input('product_id');

            // Create the reservation
            Reservation::create([
                'client_name' => $request->input('product_name'),
                'service_id' => $service_id,
                'product_id' => $product_id,
                'product_price' => $request->input('product_price'),
                'product_desc' => $request->input('product_desc'),
            ]);

            return redirect()->route('product.index')->with('success', 'Product created successfully');
        }
        else {
            return redirect()->route('product.index')->with('error', 'Unauthorized access');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
