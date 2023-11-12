<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    public function Service()
    {
        return view(
            'service',
            [
                "pagetitle" => "Service",
                "maintitle" => "Service",
                'services' => Service::all()
            ]
        );
    }

    public function ServiceHome()
    {
        return view(
            'index',
            [
                "pagetitle" => "Service",
                "maintitle" => "Service",
                'services' => Service::all()
            ]
        );
    }

    public function Show(Service $service)
    {
        return view(
            'showService',
            [
                "pagetitle" => "Service",
                "maintitle" => "Service",
                'services' => $service
            ]
        );
    }

    public function ShowHome()
    {
        return view('show', [
            "pagetitle" => "Service",
            "maintitle" => "Data Service",
            'services' => Service::all()
        ]);
    }
}
