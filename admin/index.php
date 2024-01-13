<?php
date_default_timezone_set('Asia/Calcutta');
ob_start(); 
session_start();
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
//include 'inc/config.php';
if(isset($_POST['B1'])){
    include 'inc/db.php';
    $uname=str_replace("'","''", $_POST['T1']);
    $pwd=str_replace("'","''", $_POST['T2']);
$stmt = $dbh->prepare("SELECT id FROM tbl_usr where un = ? and pw = ? ");
$stmt->bindParam(1, $uname);
$stmt->bindParam(2, $pwd);

$stmt->execute();
if($stmt->rowCount()==0){
    $msg = "Wrong Username or Password";
}
else{
    $row = $stmt->fetch();
    session_regenerate_id(); 
$_SESSION["u_id"] = $row[0];
header('location: validate.php?r=1');
}
    
}?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Panel</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
    <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 mt-5 rounded">
                            <div class="card-header bg-success text-white text-center py-3">
                                <h3 class="my-4">PARI FOUNDATION</h3>
                            </div>
                            <div class="card-body">
                                <?php 
                                    if(isset($msg)) {
                                        echo("<div class='alert alert-error alert-danger'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong>$msg</strong> </div>");
                                    }
                                ?>
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">User Name</label>
                                        <input class="form-control py-4" id="inputEmailAddress" type="text" name="T1" placeholder="Enter User ID" />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-4" id="inputPassword" type="password" name="T2" placeholder="Enter password" />
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-center mt-4 mb-0 text-center">
                                        <input type="submit" value=" LOGIN " name="B1" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; pari foundation <?php echo date("Y"); ?></div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

      
    </body>
</html>
