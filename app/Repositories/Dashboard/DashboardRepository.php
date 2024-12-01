<?php

namespace App\Repositories\Dashboard;

use App\Contracts\Dashboard\DashboardInterface;
use App\Entities\Officers\OfficerEntity;
use App\Entities\Vehicles\VehicleEntity;
use App\Entities\Vehicles\VehicleQueryEntity;
use App\Repositories\BaseRepository;
use Illuminate\Container\Container as App;

class DashboardRepository extends BaseRepository implements DashboardInterface {

    protected VehicleEntity $vehicleEntity;
    protected OfficerEntity $officerEntity;
    protected VehicleQueryEntity $vehicleQueryEntity;

    public function __construct(App $app, VehicleEntity $vehicleEntity, OfficerEntity $officerEntity, VehicleQueryEntity $vehicleQueryEntity) {
        parent::__construct($app);
        $this->vehicleEntity = $vehicleEntity;
        $this->officerEntity = $officerEntity;
        $this->vehicleQueryEntity = $vehicleQueryEntity;
    }

    public function getAdminDashboardDetails(): array {
        $data['totalVehicles'] = $this->vehicleEntity->select('id')->count();
        $data['totalOfficers'] = $this->officerEntity->select('id')->whereHas('roles', function ($query) {
            $query->where('name', '!=', 'admin');
        })->count();
        $data['totalVehicleQuery'] = $this->vehicleQueryEntity->select('id')->count();
        $data['flaggedVehicles'] = $this->vehicleEntity->where('status', 'flagged')->count();
        $data['vehicleQueries'] = $this->vehicleQueryEntity->with(['officer', 'vehicle'])->limit(10)->get();

        return $data;
    }


    /**
     * @return string
     */
    protected function getClass(): string
    {
        return OfficerEntity::class;
    }
}
