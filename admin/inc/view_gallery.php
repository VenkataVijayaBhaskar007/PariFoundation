 <main>
                    <div class="container-fluid">
                        <div class="card mb-4">
                            
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                List Of Gallery
                            </div>
                            <br>
                            
                            <div class="container">
                                <div class="row">
                                    
                                    
                                   <?php

    //echo(mysql_num_rows($result));
    $sql = "Select * from gallery order by id desc";
    $isl = 0;
    
     foreach ($dbh->query($sql) as $row)
    

  {
    echo("<div class='col-md-4'>

        <img src='../slide/$row[1]' width='260px' height='175px' class='img-thumbnail' />
        <form method='POST' action='delete_gallery.php' style='margin-bottom:20px;'><br>
    
    <input type='submit' value='Delete' name='B1' class='btn btn-danger'>
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