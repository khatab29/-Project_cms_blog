<?php
 
namespace Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
class Category extends Model {
    use SoftDeletes;
    protected $table    = "category";
    protected $fillable = ['title'];
  
     
    
    
    public static function post(){
        
       return $this->hasMany('Models\Post');
    }
    
    
    
}
 
