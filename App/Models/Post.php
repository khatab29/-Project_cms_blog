<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

 
class Post extends Model {
     
    protected $table = "post";
    protected $fillable = ['category_id', 'title', 'user_id', 'image','content', 'tags', 'post_comment_count', 'status'];
   
    
    
    
    public function user(){
        
        return $this->belongsTo('Models\User');
    }
    
    
    
    public static function Category(){
        
        return $this->belongsTo('Models\category');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}
 


   