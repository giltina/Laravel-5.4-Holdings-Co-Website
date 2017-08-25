<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;




class Announcements extends Model {

    

    

    protected $table    = 'announcements';
    
    protected $fillable = ['title'];
    

    public static function boot()
    {
        parent::boot();

        Announcements::observe(new UserActionsObserver);
    }
    
    
    
    
}