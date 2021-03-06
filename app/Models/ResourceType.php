<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResourceType extends Model
{
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'unity',
    ];

    public function resources()
    {
        return $this->hasMany("App\Models\Resource");
    }
}
