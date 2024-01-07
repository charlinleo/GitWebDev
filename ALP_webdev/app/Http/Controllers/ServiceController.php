<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('service.index', [
            "pagetitle" => 'Services',
            "maintitle" => 'Services',
            'service' => Service::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            if (Auth::user()->isAdmin()) {
                return view(
                    'Service.create',
                    [
                        "pagetitle" => 'Add Service',
                        "maintitle" => 'Add Servie Detail',
                    ],
                );
            } else {
                return redirect()->route('Service.index')->with('error', 'Unauthorized access');
            }
        } else {
            return redirect()->route('Service.index')->with('error', 'Unauthorized access');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {

            // Create the service
            Service::create([
                'service_name' => $request->input('service_name'),
                'duration' => $request->input('duration'),
                'service_price' => $request->input('service_price'),
            ]);

            return redirect()->route('Service.index')->with('success', 'Service created successfully');
        } else {
            return redirect()->route('Service.index')->with('error', 'Unauthorized access');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);

        if (Auth::check() && Auth::user()->isAdmin()) {
            return view('Service.edit', [
                "pagetitle" => 'Edit Service',
                "maintitle" => 'Edit Service Detail',
            ], compact('service'));
        } else {
            return redirect()->route('Service.index')->with('error', 'Unauthorized access');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        if (Auth::check() && Auth::user()->isAdmin()) {
            $request->validate([

            ]);

            // Update the service
            $service->update([
                'service_name' => $request->input('service_name'),
                'duration' => $request->input('duration'),
                'service_price' => $request->input('service_price'),
            ]);

            return redirect()->route('Service.index')->with('success', 'Service updated successfully');
        } else {
            return redirect()->route('Service.index')->with('error', 'Unauthorized access');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {

            $service->delete();

            return redirect()->route('Service.index')->with('success', 'Service deleted successfully');
        } else {
            return redirect()->route('Service.index')->with('error', 'Unauthorized access');
        }
    }
}
