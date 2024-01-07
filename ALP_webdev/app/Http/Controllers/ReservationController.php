<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Models\Product;
use App\Models\Service;
use App\Models\Status;
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
                'reservation.create',
                [
                    "pagetitle" => 'Add Reservation',
                    "maintitle" => 'Add Reservation Detail',
                    'service' => Service::all(),
                    'product' => Product::all()
                ],
            );
        } else {
            return redirect()->route('reservation.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check() && Auth::user()->isAdmin() || Auth::check() && Auth::user()->isMember()) {
            $validated = $request->validate([
                'client_name' => 'required',
                'date' => 'required|date',
                'service_id' => 'required|exists:services,id',
                'product_id' => 'required|exists:products,id',
            ]);

            // Create the reservation
            $reservation = Reservation::create([
                'client_name' => $request->input('client_name'),
                'date' => $request->input('date'),
                'contact' => $request->input('contact'),
                'total_purchase' => "Hubungi Autosight untuk info lebih lanjut",
                'status_id' => 4
            ]);

            $reservation->services()->attach($validated['service_id']);
            $reservation->products()->attach($validated['product_id']);

            return redirect()->route('reservation.index')->with('success', 'Reservation created successfully');
        } else {
            return redirect()->route('reservation.index')->with('error', 'Unauthorized access');
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
    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);

        if (Auth::check() && Auth::user()->isAdmin()) {
            $services = Service::all();
            $products = Product::all();
            $statuses = Status::all();
            return view(
                'reservation.edit',
                [
                    "pagetitle" => 'Edit Reservation',
                    "maintitle" => 'Edit Reservation Detail',
                    'reservation' => $reservation,
                    'services' => $services,
                    'products' => $products,
                    'statuses' => $statuses,
                ],
                compact('reservation', 'services', 'products', 'statuses')
            );
        } else {
            return redirect()->route('reservation.index')->with('error', 'Unauthorized access');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        if (Auth::check() && Auth::user()->isAdmin() || Auth::check() && Auth::user()->isMember()) {
            $validated = $request->validate([
                'client_name' => 'required',
                'date' => 'required|date',
                'service_id' => 'required|exists:services,id',
                'product_id' => 'required|exists:products,id',
                'status_id' => 'required|exists:statuses,id'
            ]);

            // Update the reservation
            $reservation->update([
                'client_name' => $request->input('client_name'),
                'date' => $request->input('date'),
                'total_purchase' => $request->input('total_purchase'),
                'status_id' => $request->input('status_id'),
                'contact' => $request->input('contact'),
                // 'service_id' => $request->input('service_id'),
                // 'product_id' => $request->input('product_id'),
            ]);

            $reservation->services()->sync($validated['service_id']);
            $reservation->products()->sync($validated['product_id']);

            return redirect()->route('reservation.index')->with('success', 'Reservation updated successfully');
        } else {
            return redirect()->route('reservation.index')->with('error', 'Unauthorized access');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {

            $reservation->delete();

            return redirect()->route('reservation.index')->with('success', 'Reservation deleted successfully');
        } else {
            return redirect()->route('reservation.index')->with('error', 'Unauthorized access');
        }
    }
}
