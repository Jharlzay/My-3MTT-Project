<?php

namespace App\Entities\Vehicles;

use App\Entities\Officers\OfficerEntity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VehicleQueryEntity extends Model {

    protected $table = 'vehicle_queries';
    protected $guarded = [];

    public function vehicle(): BelongsTo {
        return $this->belongsTo(VehicleEntity::class, 'vehicle_id');
    }

    public function officer(): BelongsTo {
        return $this->belongsTo(OfficerEntity::class, 'officer_id');
    }
}
