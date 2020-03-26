<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class User extends Model {
     
    protected $table    = "user";
    protected $fillable = ['username', 'password', 'firstname', 'lastname', 'email', 'image'];

    
    
    
    
    
    
    public static function post(){
        
       return $this->hasMany('Models\Post');
    }
    
}
 
?>