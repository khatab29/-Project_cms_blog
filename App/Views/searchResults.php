<?php include "../../start.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../index.php">Home page</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
               

<?php
use Controllers\Posts;

    if(isset($_POST['searchBlog'])){
    $blogsearch = $_POST['blogSearch'];
     //search results check
    $results = Posts::resultCheck($blogsearch);
        
    if($results == 0){
        
      echo "<h2 class = 'text-center'>no results found</h2>";
        
    }else{
      //displaying search results data
    $posts = posts::searchBlog($blogsearch);
    foreach($posts as $postData){ 

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
        <img class='img-responsive'  src='../../images/{$post_image}' alt=''>
        <hr>
        <p>{$post_content}.</p>
        <a class='btn btn-primary' href=''>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>

        <hr>";   

    }
}
}

?>

              
                <hr>

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
            
      
        </div>
        <!-- /.row -->

       <?php include"../../includes/footer.php"; ?>