<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'customer_id', 'name', 'docdate', 'startdate', 'enddate', 'totalamt', 'status', 'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'customer_id', 'status'
    ];

    public function items()
    {
        return $this->hasMany(ProjectItem::class)
                ->leftJoin('providers', 'project_items.provider_id', '=', 'providers.id')
                ->where('project_items.status', 'CO')
                ->select('project_items.*', 'providers.name as provider_name');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
