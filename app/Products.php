<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;




class Products extends Model {

    

    

    protected $table    = 'products';
    
    protected $fillable = [
          'name',
          'photo',
          'price',
          'url',
          'shops_id'
    ];
    

    public static function boot()
    {
        parent::boot();

        Products::observe(new UserActionsObserver);
    }
    
    public function shops()
    {
        return $this->hasOne('App\Shops', 'id', 'shops_id');
    }


    
    
    
}