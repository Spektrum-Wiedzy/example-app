<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['favorite'];

    public function dayOffer(): HasOne
    {
        return $this->hasOne(DayOffer::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
