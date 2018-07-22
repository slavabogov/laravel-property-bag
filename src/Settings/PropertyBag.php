<?php

namespace LaravelPropertyBag\Settings;

use Illuminate\Database\Eloquent\Model;

class PropertyBag extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'property_bag';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key',
        'value',
    ];
}
