<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class Brand
 * @mixin Eloquent
 */
class Base extends Model
{
    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        self::creating(function ($item) {
            $item->slug = slug($item->name);
            $item->created_by = Auth::id() ?? 1;
            $item->updated_by = Auth::id() ?? 1;
        });

        self::updating(function (Brand $item) {
            $item->slug = slug($item->name);
            $item->updated_by = Auth::id();
        });
    }
}
