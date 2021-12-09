<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Crib extends Model
{
      use HasFactory;
      protected $table = 'crib';

      public function crib() : BelongsTo
      {
          return $this->belongsTo(Technology::class, 'technology_id', 'id');
      }
}
