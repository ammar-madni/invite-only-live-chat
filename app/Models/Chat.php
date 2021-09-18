<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    use Uuids;

    protected $guarded =[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function message()
    {
        return $this->hasMany(Message::class)->latest();
    }
}
