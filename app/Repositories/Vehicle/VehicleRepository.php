<?php

namespace App\Repositories\Vehicle;

use App\Contracts\Vehicle\VehicleInterface;
use App\Entities\Vehicles\FlagVehicleEntity;
use App\Entities\Vehicles\VehicleEntity;
use App\Entities\Vehicles\VehicleQueryEntity;
use App\Repositories\BaseRepository;
use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class VehicleRepository extends BaseRepository implements VehicleInterface {


    private FlagVehicleEntity $flagVehicleEntity;
    private VehicleQueryEntity $vehicleQueryEntity;
    public function __construct(App $app, FlagVehicleEntity $flagVehicleEntity, VehicleQueryEntity $VehicleQueryEntity) {
        parent::__construct($app);
        $this->flagVehicleEntity = $flagVehicleEntity;
        $this->vehicleQueryEntity = $VehicleQueryEntity;

    }

    public function getAllVehicles() : Collection {
        return $this->model->with(['owner', 'flagged'])->get();
    }

    public function create(array $data) : VehicleEntity {
        return $this->model->create($data);
    }

    public function getVehicle($plateNumber) : VehicleEntity {
        return $this->model->where('plate_number', $plateNumber)->first();
    }

    public function flagVehicle(array $data) : FlagVehicleEntity {
        return $this->flagVehicleEntity->create($data);
    }

    public function updateVehicleQuery(VehicleEntity $vehicle) {
       return $this->vehicleQueryEntity->create([
           'officer_id' => Auth::user()->id,
           'vehicle_id' => $vehicle->id
       ]);
    }

    protected function getClass(): string {
       return VehicleEntity::class;
    }


}
