         <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
<?php
             
use Controllers\Posts;
            
$postsData = Posts::get_post();
            
foreach($postsData as $postData){ 
    
    $post_id      = $postData['id'];
    $post_title   = $postData['title'];
    $post_date    = $postData['created_at'];
    $post_content = $postData['content'];
    $post_image   = $postData['image'];
    
    $post_author = posts::post_author($post_id); 
   
 echo "
                <h2>
                    <a href=''>{$post_title}</a>
                </h2>
                <p class='lead'>
                    by <a href='index.php'>{$post_author}</a>
                </p>
                <p><span class='glyphicon glyphicon-time'></span> Posted on {$post_date}</p>
             
             
                <hr>
                <img class='img-responsive'  src='images/{$post_image}' alt=''>
                <hr>
                <p>{$post_content}.</p>
                <a class='btn btn-primary' href=''>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>

                <hr>";   

}
         
?>            
    
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>
            
            
            