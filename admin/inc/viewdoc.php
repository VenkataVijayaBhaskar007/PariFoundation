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
                                List Of Doctors
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Photo</th>
                                                <th>Profile</th>
                                                <th width="5%">Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Photo</th>
                                                <th>Profile</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                             <?php
                                                $sql="select * from slide order by id asc";
                                                $i = 1;
                                                
                                                 foreach ($dbh->query($sql) as $rs)
                                                {
                                                    if ($rs['status']==0) {
                                                    $color='red';                                                                                                            
                                                    }
                                                    else{
                                                        $color='#000';
                                                    }
                                                ?>
                                            <tr style="color:<?php echo $color;?>">
                                                <td><?php echo $i;?></td>
                                                <td><img src="../doc_pic/<?php echo $rs[3]; ?>" height="100px"></td>
                                                <td><b>Name : </b><?php echo $rs[1]; ?><br>
                                                    <b>Profile : </b><?php echo $rs[2];?><br>
                                                    <b>Experience : </b><?php echo $rs[6];?><br>
                                                    <b>Consultant Fee : </b>Rs. <?php echo $rs[7];?> /-<br>
                                                </td>
                                                <td>
                                                      <form action="" method="post" onSubmit="if(!confirm('Do You Sure ?')){return false;}">
                                                            <a class="btn btn-primary btn-sm" href="page.php?pg=editdoc&did=<?php echo $rs[0]?>" >Edit</a>
                                                            <?php
                                                            if ($rs['status']==1) {
                                                                echo '<input type="submit" value="Hide" name="del" class="btn btn-danger btn-sm"  id="btn_job">';
                                                            }
                                                            else{
                                                                echo '<input type="submit" value="Active" name="show" class="btn btn-success btn-sm"  id="btn_job">';
                                                            }
                                                            ?>
                                                            <input type="hidden" value="<?php echo("$rs[0]") ?>" name="id" />
                                                      </form> 
                                               
              <form action="up.php" method="post" enctype="multipart/form-data">
              Upload Profile <input name="f" type="file"/>
              <input type="submit" value="Save" name="B4" class="btn btn-success btn-sm"  id="btn_job">
              <input type="hidden" value="<?php echo("$rs[0]") ?>" name="id2" />

        </form>

                                                </td>
                                            </tr>
                                        <?php
                                            $i++;
                                         } ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>