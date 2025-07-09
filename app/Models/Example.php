<?php

namespace App\Models;

use App\Interfaces\ExampleInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Example extends Model implements ExampleInterface
{
    protected $fillable = ['name'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'name';
    }

    /**
     * Boot the model and register event listeners.
     */
    protected static function boot()
    {
        parent::boot();

        static::retrieved(function ($example) {
            Log::info('Example model retrieved via interface binding', [
                'id' => $example->id,
                'name' => $example->name,
                'route_key' => $example->getRouteKeyName()
            ]);
        });
    }
}
