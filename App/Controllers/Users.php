<?php
namespace Controllers;
use Models\User;

class Users{
    
    
    
    
    
    
    
    
    
    
    
    
    
   /* 
    public static function userPosts(){
        
        $userpost = user::find(1)->post;
        return $userpost;
    }
    
    
       //get all users
    public function get_all_users(){
        $all_users = user::all();
        return $all_users; 
    }
    
    
    
        //add new users query
    public function add_users($username, $password, $firstname, $lastname,
                                $email, $user_image, $role){

        $add_post = user::create(['user_username'=>$username, 'user_password'=>$password,
                                  'user_firstname'=>$firstname, 'user_lastname'=>$lastname, 
                                  'user_email'=>$email, 'user_image'=>$user_image,'user_role'=>$role]);
    }
    
    
        //delte user query
    public function delete_user($user_id){
        $deleteUser = user::find($user_id)->delete();
    }
    
    
        //update user role query
    public function update_user_role($user_id, $role){
        $userRole = user::find($user_id);
        $userRole->user_role = $role;
        $userRole->save();
    }
    
    
       //get edite user data query
    public function get_user_data($userID){
        $userData = user::find($userID);
        return $userData;
    }
    
       //edit user data query
    public function edit_user($userID, $new_username, $new_password, $new_firstname, 
                              $new_lastname, $new_email, $new_user_image, $new_role){
        
        $editUser = user::find($userID);
        $editUser->user_username   = $new_username;
        $editUser->user_password   = $new_password;
        $editUser->user_firstname  = $new_firstname;
        $editUser->user_lastname   = $new_lastname;
        $editUser->user_email      = $new_email;
        $editUser->user_image      = $new_user_image;
        $editUser->user_role       = $new_role;
        $editUser->save();
        
    }
    
       //valid users query
    public function valid_users($username){
        
        $users = user::where('user_username', '=', $username)->get();
          return $users;
    }
*/
    
    
    
    
        
}