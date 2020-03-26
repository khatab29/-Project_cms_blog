<?php
namespace Controllers;
use Models\Category;

class Categorys{
    
    
    
    
    
       //all categories titles
    public function category(){
        $all_categorys = category::get(['id','title'] );
            return $all_categorys;
    }
    
    
    
    
    
       //add new category to database
    public function create_category($new_category){
        $cate = category::create(['title'=>$new_category]);
            return $cate; 
       }
    
    
    
        //delete category from admin table
    public function delete_category($category_id){ 
        $delete_category = category::find($category_id)->delete();
        
    }
    
    
       //update categories in admin table query
    public function update_category($cateID, $newCategory){
        $select_category = category::find($cateID);
        $select_category->title = $newCategory;
        $select_category->save(); 
    }
    
        //
    public function get_edit_category($cateID){
       $select_category = category::find($cateID);
        return $select_category;
    }
    
    /*
        //get cate_title based on post_category_id in posts table   
    public function post_category_title($postCategory){
        $post_category = category::where('cate_id', '=' , $postCategory)->get();
            return $post_category;
    }

       */
    
    
    
    
    
    
}