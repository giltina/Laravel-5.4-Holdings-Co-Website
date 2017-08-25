<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;




class Likes extends Model {

    

    

    protected $table    = 'likes';
    
    protected $fillable = [
          'name',
          'url'
    ];
    

    public static function boot()
    {
        parent::boot();

        Likes::observe(new UserActionsObserver);
    }
    
    
    
    
}