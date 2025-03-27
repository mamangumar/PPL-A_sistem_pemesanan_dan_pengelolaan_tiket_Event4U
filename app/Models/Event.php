<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'location',
        'start_event',
        'end_event',
        'start_sale',
        'end_sale',
        'thumbnail',
        'stage_layout',
        'category_id',
        'uid_admin'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'uid_admin');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
