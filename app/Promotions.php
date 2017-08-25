<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;




class Promotions extends Model {

    

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
   

    protected $table    = 'promotions';
    
    protected $fillable = [
          'name',
          'url'
    ];
    

    public static function boot()
    {
        parent::boot();

        Promotions::observe(new UserActionsObserver);
    }
    
    
    
    
}