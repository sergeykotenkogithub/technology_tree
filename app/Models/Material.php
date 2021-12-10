<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Material extends Model
{
      use HasFactory;
      protected $table = 'materials';

      public function materials() : BelongsTo
      {
          return $this->belongsTo(Technology::class, 'technology_id', 'id');
      }
}
