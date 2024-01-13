 
 
  <?php 
 error_reporting(0);
include('db.php');

 
 if(isset($_POST['ourwork']))
{
     
    
         $content=$_POST['content'];
 
                   
              
  
              
              $stmt = $dbh->prepare("update ourwork set content ='$content'");
     	$stmt->execute();
}

?>

                        
	<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
                <main>
                    <div class="container-fluid">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Our Work</h3></div>

                                    <div class="card-body">
                                       <form role="form" method="post" class="formular">
                                           
                                           	 <?php
                    include 'db.php';
                        $sql = "select *  from ourwork ";
                        
                         foreach ($dbh->query($sql) as $row)
                         
                        
                        
                        
            ?>            
                                           
                                            <textarea name="content" cols="5" rows="10"><?php echo $row['content'];?></textarea><br>   
                <script>
                        CKEDITOR.replace( 'content' );
                </script>
                
                
                <input type="submit" value="Submit" name="ourwork" class="btn btn-primary"  id="btn_job">
 
</form>
                                    </div>
                                     
                                </div>
                            </main>