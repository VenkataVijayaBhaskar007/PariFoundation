     <?php
     if (isset($_POST["del"])){
      $stmt = $dbh->prepare("update doctor set status =0 where id = $_POST[id]");
        $stmt->execute();
    }
        if (isset($_POST["show"])){
      $stmt = $dbh->prepare("update doctor set status =1 where id = $_POST[id]");
        $stmt->execute();
    }
     ?>

                <main>
                    <div class="container-fluid">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                List Of Slides
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                   <?php

    //echo(mysql_num_rows($result));
    $sql = "Select * from slide order by id desc";
    $isl = 0;
    
     foreach ($dbh->query($sql) as $row)
    

  {
    echo("<div class='span12'>

        <img src='../slide/$row[1]' width='900px' class='img-thumbnail' />
        <form method='POST' action='delete_slide.php' style='margin-bottom:20px;'>
    
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