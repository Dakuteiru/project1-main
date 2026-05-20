<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['name', 'type', 'status', 'cost', 'gacha_id', 'user_id'])]
class Donate extends Model
{
    public function gacha() : BelongsTo
    {
        return $this->belongsTo(Gacha::class);
    }

    public function users() : BelongsToMany
    {
        return $this->BelongsToMany(Gacha::class);
    }
    //
}


