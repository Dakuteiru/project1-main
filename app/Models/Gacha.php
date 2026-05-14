<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


#[Fillable(['name'])]
class Gacha extends Model
{
     public function donates() : HasMany
    {
        return $this->hasMany(Donate::class);
    }

     
}
