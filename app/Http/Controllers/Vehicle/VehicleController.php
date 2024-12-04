<?php

namespace App\Http\Controllers\Vehicle;

use App\Contracts\Vehicle\OwnerInterface;
use App\Contracts\Vehicle\VehicleInterface;
use App\Entities\Vehicles\OwnerEntity;
use App\Http\Controllers\Controller;
use App\Http\Requests\FlagVehicleRequest;
use App\Http\Requests\VehicleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class VehicleController extends Controller
{
    //

    private VehicleInterface $interface;

    private OwnerInterface $ownerInterface;

    public function __construct(VehicleInterface $interface, OwnerInterface $ownerInterface) {
        $this->interface = $interface;
        $this->ownerInterface = $ownerInterface;
    }

    public function index(){
        $data['vehicles'] = $this->interface->getAllVehicles();
        return view('admin.vehicles.index', $data);
    }

    public function create(){
        return view('admin.vehicles.create');
    }

    public function store(VehicleRequest $request){

        if($request->hasFile('passport')){
            $file = $request->file('passport');
            $passportName = Str::random(25) . '.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/passports'), $passportName);
        }

        if($request->hasFile('vehicle_photo')){
            $files = $request->file('vehicle_photo');
            foreach($files as $file) {
                $name = Str::random(25) . '.'.$file->getClientOriginalExtension();
                $file->move(public_path('images/vehicles'), $name);
                $vehicleName[] = $name;
            }

        }

        $vehicleData = [
            'plate_number' => $request->plate_number,
            'model' => $request->model,
            'color' => $request->color,
            'pic' => implode(',', $vehicleName),
            'manufacture_year' => $request->manufacture_year,
        ];

        $ownerData = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'nin' => $request->nin,
            'drivers_license_number' => $request->license_number,
            'passport' => $passportName,
        ];

        $owner = $this->ownerInterface->create($ownerData);
        $vehicleData['owner_id'] = $owner->id;
        $vehicle = $this->interface->create($vehicleData);

        return redirect()->route('admin.vehicles');

    }

    public function search(Request $request) {
        $vehicle = $this->interface->getVehicle($request->plate_number);
        $this->interface->updateVehicleQuery($vehicle);
        if ($vehicle !== null) {
            $data['vehicle'] = $vehicle;
           return view('officer.index', $data) ;
        }
    }

    public function flag(FlagVehicleRequest $request) {
        $vehicle = $this->interface->getVehicle($request->plate_number);
        if ($vehicle !== null) {
            $data = [
              'vehicle_id' => $vehicle->id,
              'officer_id' => Auth::user()->id,
              'reason' => $request->reason
            ];

            $this->interface->flagVehicle($data);

            return redirect()->route('dashboard');

        }
    }
}
