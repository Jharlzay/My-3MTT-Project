<?php

namespace App\Entities\Vehicles;

use App\Entities\Officers\OfficerEntity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FlagVehicleEntity extends Model{

    protected $table = 'flagged_vehicles';
    protected $guarded = [];

    public function vehicle(): BelongsTo {
        return $this->belongsTo(VehicleEntity::class, 'vehicle_id');
    }

    public function officer(): BelongsTo {
        return $this->belongsTo(OfficerEntity::class, 'officer_id');
    }
}
