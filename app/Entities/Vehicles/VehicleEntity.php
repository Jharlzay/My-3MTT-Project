<?php

namespace App\Entities\Vehicles;

use App\Entities\Officers\OfficerEntity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VehicleEntity extends Model {

    protected $table = 'vehicles';
    protected $guarded = [];

    public function owner(): BelongsTo {
        return $this->belongsTo(OfficerEntity::class, 'owner_id');
    }

    public function vehicleQuery(): HasMany {
        return $this->hasMany(VehicleQueryEntity::class, 'vehicle_id');
    }

    public function flagged() {
        return $this->hasOne(FlagVehicleEntity::class, 'vehicle_id');
    }
}
