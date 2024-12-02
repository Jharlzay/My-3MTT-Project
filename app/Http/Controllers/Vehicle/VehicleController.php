<?php

namespace App\Http\Controllers\Vehicle;

use App\Contracts\Vehicle\VehicleInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    //

    private VehicleInterface $interface;

    public function __construct(VehicleInterface $interface) {
        $this->interface = $interface;
    }

    public function index(){
        return view('admin.vehicles');
    }
}
