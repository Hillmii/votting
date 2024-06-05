<?php

namespace App\Models;

use App\Models\Poll;
use App\Models\Choices;
use App\Models\Division;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vote extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function choices(){
        return $this->hasMany(Choices::class);
    }

    public function polls(){
        return $this->belongsTo(Poll::class);
    }

    public function divisions(){
        return $this->belongsTo(Division::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}
