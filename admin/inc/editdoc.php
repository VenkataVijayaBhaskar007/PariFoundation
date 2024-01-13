 <?php 
 ob_start();
    if(isset($_POST['save']))
    {
        $file_loc = "../doc_pic/";         
        $name = str_replace("'","''", $_POST['name']);      
        $profile=str_replace("'","''",$_POST['profile']);
        $exp=str_replace("'","''",$_POST['exp']);
        $fee=str_replace("'","''",$_POST['fee']);
       // echo "update doctopr set name='$name', profile='$profile' where id=$_GET[did]";
        $stmt = $dbh->prepare("update doctor set name='$name', profile='$profile', exp='$exp', fee='$fee' where id=$_GET[did]");
        $stmt->execute();
        echo("<script>location.href = 'page.php?pg=viewdoc';</script>");
    }
if (isset($_GET['did'])) {
    # code...
}
    $sql = $dbh->prepare("select * from doctor where id = '$_GET[did]'");
    $sql->execute();
    $rs = $sql->fetch();
    ?>               

                <main>
                    <div class="container-fluid">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Doctor</h3></div>
                                    <div class="card-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Name</label>
                                                        <input class="form-control py-4" name="name" id="inputFirstName" value="<?php echo $rs['name'] ?>" type="text" placeholder="Enter Doctor's Name" required="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Qualifications</label>
                                                <input class="form-control py-4" name="profile" type="text" value="<?php echo $rs['profile'] ?>"  placeholder="Enter Doctor's Qualifications" required="" />
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Experience</label>
                                                <input class="form-control py-4" name="exp" value="<?php echo $rs['exp'] ?>" type="text" placeholder="Enter Doctor's Experience" required="" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Consultant Fee</label>
                                                <input class="form-control py-4" name="fee" value="<?php echo $rs['fee'] ?>" type="text" placeholder="Enter Doctor's Visit Fee" required="" />
                                            </div>

                                            <div class="form-group mt-4 mb-0"><input type="submit" value=" Save " name="save" class="btn btn-primary"></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="page.php?pg=viewdoc">Back</a></div>
                                    </div>
                                </div>
                            </main>