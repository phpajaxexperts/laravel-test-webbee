<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function child()
    {
        return $this->hasMany('App\Models\MenuItem', 'parent_id');
    }
    public function children()
    {
        return $this->child()->with('children');
    }
// parent
    public function parent()
    {
        return $this->belongsTo('App\Models\MenuItem','parent_id');
    }

// all ascendants
    public function parent_rec()
    {
        return $this->parent()->with('parent_rec');
    }
}
