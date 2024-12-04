<?php

namespace App\Contracts\Vehicle;

use App\Entities\Vehicles\VehicleEntity;

interface VehicleInterface {

    public function getAllVehicles();

    public function create(array $data);

    public function getVehicle(string $plateNumber) : VehicleEntity;

    public function flagVehicle(array $data);

    public function updateVehicleQuery(VehicleEntity $vehicle);
}
