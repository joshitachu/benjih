<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'subjects',
        'description',
        'additional_information',
        'dimensions',
        'weight',
        'battery',
        'resistance',
        'voltage',
        'power_consumption',
    ];

    /**
     * Accessor for the subjects attribute.
     *
     * @param  string  $value
     * @return array
     */
    public function getSubjectsAttribute($value)
    {
        return json_decode($value, true);
    }

    /**
     * Mutator for the subjects attribute.
     *
     * @param  array  $value
     * @return void
     */
    public function setSubjectsAttribute($value)
    {
        $this->attributes['subjects'] = json_encode($value);
    }
}
