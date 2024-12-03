<?php

namespace App\Repositories\Vehicle;

use App\Contracts\Vehicle\VehicleInterface;
use App\Entities\Vehicles\VehicleEntity;
use App\Repositories\BaseRepository;
use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Collection;

class VehicleRepository extends BaseRepository implements VehicleInterface {


    public function __construct(App $app) {
        parent::__construct($app);

    }

    public function getAllVehicles() : Collection {
        return $this->model->with('owner')->get();
    }

    public function create(array $data) : VehicleEntity {
        return $this->model->create($data);
    }

    protected function getClass(): string {
       return VehicleEntity::class;
    }
}
