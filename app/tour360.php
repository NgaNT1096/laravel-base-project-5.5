<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class tour360 extends Model
{
    protected $fillable = [
        'name_project',
        'name_investor',
        'link',
        'status',
        'description',
        'version',
        'img_thumb'
    ];

    public function owner()
    {
        return $this->belongsToMany(User::class);
    }
}
