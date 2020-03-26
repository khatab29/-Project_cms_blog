<?php 
use Controllers\Categorys;  

?>

            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                       <!-- search blog form -->
                    <form action="App/Views/searchResults.php" method="post">
                        
                    <div class="input-group">
                    <input type="text" class="form-control" name="blogSearch">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" name="searchBlog">
                    <span class="glyphicon glyphicon-search"></span>
                    </button>
                    </span>
                    </div>
                        
                    </form>
                    <!-- /.input-group -->
                </div>
                
                

                <!-- Blog Categories Well -->   
                
               <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
<?php
                                 
    //display all category titles                            
$titles  = categorys::category();
                                
foreach($titles as $title){
    echo "<li><a href=''>{$title['title']}</a></li>";
}
?>

                            
                            </ul>
                        </div>
                       
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                
                

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>