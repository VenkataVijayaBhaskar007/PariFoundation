 <?php 
    if(isset($_POST['save']))
    {
        $file_loc = "../doc_pic/";         
        $name = str_replace("'","''", $_POST['name']);      
        $profile=str_replace("'","''",$_POST['profile']);
        $exp=str_replace("'","''",$_POST['exp']);
        $fee=str_replace("'","''",$_POST['fee']);
        $stmt = $dbh->prepare("Insert into doctor (name,profile,date,exp,fee) values ('$name','$profile',curdate(),'$exp','$fee')");
        $stmt->execute();
        
         $file_id = $dbh->lastInsertId();
         $up_id=$file_id;

           
            //=============================photo========================
                $allowedExts = array("jpg", "jpeg", "gif", "png", "pdf", "JPG", "JPEG", "GIF");
                $getext = explode(".", $_FILES["file1"]["name"]);
                $extension = end($getext);
                if (($_FILES["file1"]["size"] < 2000000)
                && in_array($extension, $allowedExts))
                  {
                  if ($_FILES["file1"]["error"] > 0)
                    {
                    echo "Return Code: " . $_FILES["file1"]["error"] . "<br />";
                    $got_error = 1;
                    }
                  else
                    {
                    
                
                  ($extension) ;
                  
                      move_uploaded_file($_FILES["file1"]["tmp_name"], $file_loc . $file_id.".".$extension);
                      
                        $stmt = $dbh->prepare("update doctor set photo ='$file_id.$extension' where id = $up_id");
                    //  echo "update content set content ='$file_id.$extension' where id = $file_id";
                        $stmt->execute();   

                        $msg="Doctor is Added Successfully";
                    }
                  }
    }
    ?>               

                <main>
                    <div class="container-fluid">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Doctor</h3></div>
                                    <?php
                                    if(isset($msg)){
        echo("<div class='alert alert-error alert-success'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong>$msg</strong> </div>");
        }
    ?>
                                    <div class="card-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Name</label>
                                                        <input class="form-control py-4" name="name" id="inputFirstName" type="text" placeholder="Enter Doctor's Name" required="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Qualifications</label>
                                                <input class="form-control py-4" name="profile" type="text" placeholder="Enter Doctor's Qualifications" required="" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Experience</label>
                                                <input class="form-control py-4" name="exp" type="text" placeholder="Enter Doctor's Experience" required="" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Consultant Fee</label>
                                                <input class="form-control py-4" name="fee" type="text" placeholder="Enter Doctor's Visit Fee" required="" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Photo</label>
                                                 <input type="file" name="file1" class="orm-control" />
                                            </div>
                                            <div class="form-group mt-4 mb-0"><input type="submit" value=" Add Doctors " name="save" class="btn btn-primary"></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="page.php?pg=viewdoc">View Doctors</a></div>
                                    </div>
                                </div>
                            </main>