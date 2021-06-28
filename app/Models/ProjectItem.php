<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectItem extends Model
{
    protected $fillable = [
        'project_id', 'provider_id', 'name', 'type', 'amount', 'description', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'project_id', 'provider_id', 'status'
    ];

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
