<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public function workshops()
    {
        return $this->hasMany("App\Models\Workshop",'event_id','id');
    }

    public function getFeatueredWorkshops()
    {
        return $this->hasMany("App\Models\Workshop",'event_id','id')->where('start','>=', date('Y-m-d H:i:s'));
    }

}
