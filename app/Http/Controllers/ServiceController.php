<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){


        $services = Service::all();


        return view('/service.index', compact('services'));
    }


    public function store(){

        Service::create(request()->validate([
            'name' => 'required|min:5',
        ]));


        return redirect()->back();
    }

    public function destroy(){


    }
}
