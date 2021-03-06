<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = "organizations";

    protected $fillable = [
        'org_name', 'setting_id', 'org_code', 'org_prefix', 'is_active', 'email', 'email_domain', 'status', 'description', 'address'
    ];
    public $incrementing = true;
    public $timestamps = true;

    public function users()
    {
        return $this->hasMany('App\User', 'org_id','id');
    }

    public function classes()
    {
        return $this->hasMany('App\ClassRoom', 'org_id','id');
    }

    public function setting()
    {
        return $this->hasOne('App\OrganizationSettings', 'id','setting_id');
    }

    public function apis()
    {
        return $this->hasMany('App\IntegrationAPI', 'org_id','id');
    }

}

