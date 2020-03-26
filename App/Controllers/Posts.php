<?php 
namespace Controllers;
use Models\Post;

    class Posts {



        //get all posts
    public function get_post(){
        $all_posts = post::all();
        return $all_posts;
    }
        
        
        
        //get post username from user table
    public function post_author($id){
            $author = post::find($id);
            return $author->user->username;
    }
        
        
    public function resultCheck($blogsearch){
        $search_posts = post::Where('tags', 'like', '%'.$blogsearch.'%')->exists();
        return $search_posts;
    }


        // search posts index.php sidebar query
    public function searchBlog($blogsearch){
        $search_posts = post::Where('tags', 'like', '%'.$blogsearch.'%')->get();
        return $search_posts;
    }
        
        
    

/*
        //upload new post query
    public function upload_post($post_title, $post_cate, $post_author, $post_status,
                                $post_image, $post_tags, $post_content, $post_date, $post_comment_count){

        $add_post = post::create(['post_title'=>$post_title, 'post_cate_id'=>$post_cate,
                                'post_auther'=>$post_author, 'post_status'=>$post_status, 
                                'post_image'=>$post_image, 'post_tags'=>$post_tags,
                                'post_content'=>$post_content, 'post_comment_count'=>$post_comment_count,
                                'post_date'=> $post_date]);
    }



        //delete post query
    public function delete_post($post_id){

        $remove_post = post::find($post_id)->delete();
        
    }



        //update post query
    public function update_post($edit_post_id, $new_post_title, $new_post_cate, $new_post_author, 
                                $new_post_status, $new_post_image, $new_post_tags,  $new_post_content 
                                ){


        $updatePost = post::find($edit_post_id);
        $updatePost ->post_auther           = $new_post_author; 
        $updatePost->post_title             = $new_post_title;
        $updatePost->post_cate_id           = $new_post_cate;
        $updatePost->post_status            = $new_post_status;
        $updatePost->post_image             = $new_post_image ;
        $updatePost->post_tags              = $new_post_tags;
        $updatePost->post_comment_count     = '5';
        $updatePost->post_date              = date('d-m-y');
        $updatePost->post_content           = $new_post_content;
        $updatePost->save();

    }




        //display post in post.php page query
    public function posts($postId){
        $post = post::find($postId);
        return $post;
    }



        //display post based on categorey in post.php page query   
    public function post_category($post_categoryId){
          $post_category = post::where('post_cate_id', '=' , $post_categoryId)->get();
          return $post_category;
    }
      
        
        
        //get post title based on comment_post_id---view_all_comments.php    
    public function get_comment_post_title($commentPostID){
        $post_data = post::find($commentPostID);
        return $post_data;
        
    }
        */
        
        
    



   

    
    
    
}



 
    
     
    
    
    

     
    
   
    
    
    


