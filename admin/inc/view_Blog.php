 <main>
                    <div class="container-fluid">
                        <div class="card mb-4">
                            
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                List Of Blog
                            </div>
                            <br>
                            
                            <div class="container">
                                <div class="row">
                                    
                                    
                                   <?php

    //echo(mysql_num_rows($result));
    $sql = "Select * from blog order by id desc";
    $isl = 0;
    
     foreach ($dbh->query($sql) as $row)
    

  {
    echo("<div class='col-md-4'>

        <img src='../slide/$row[3]' width='260px' height='175px' class='img-thumbnail' />
        <h3 style='text-align:justify;'>   $row[1]</h3>
        <p > Post By  $row[2]  <span style='float:right;'>$row[5]</span></p>
        <p style='text-align:justify;' >  $row[4]</p>
        <form method='POST' action='delete_blog.php' style='margin-bottom:20px;'><br>
    
    <input type='submit' value='Delete' name='B5' class='btn btn-danger'>
    <input type='hidden' name='id' value='$row[0]'>
    <input type='hidden' name='img' value='$row[1]'>
</form>                                                        

</div>");
 
    
    }
    ?>
                              </div>  
                                 </div>  
                            
                        </div>
                    </div>
                </main>