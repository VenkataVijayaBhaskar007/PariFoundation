 <main>
                    <div class="container-fluid">
                        <div class="card mb-4">
                            
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                List Of What Do
                            </div>
                            <br>
                            
                            <div class="container">
                                <div class="row">
                                    
                                    
                                   <?php

    //echo(mysql_num_rows($result));
    $sql = "Select * from whatwe order by id desc";
    $isl = 0;
    
     foreach ($dbh->query($sql) as $row)
    

  {
    echo("<div class='col-md-4'>

        <img src='../slide/$row[2]' width='260px' height='175px' class='img-thumbnail' />
        <h3>   $row[1]</h3>
        <p >  $row[3]</p>
        <form method='POST' action='delete_whatwe.php' style='margin-bottom:20px;'><br>
    
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