<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;




class Slideshows extends Model {

    

    

    protected $table    = 'slideshows';
    
    protected $fillable = [
          'name',
          'url',
          'photo'
    ];
    

    public static function boot()
    {
        parent::boot();

        Slideshows::observe(new UserActionsObserver);
    }
    
    
    
    
}