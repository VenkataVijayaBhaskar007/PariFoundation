
                <main>
                    <div class="container-fluid">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                List Of Applicant
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Father's Name</th>
                                                <th>College</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Exam Mode</th>
                                                <th>Center</th>
                                                <th>Reg Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Father's Name</th>
                                                <th>College</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Exam Mode</th>
                                                <th>Center</th>
                                                <th>Reg Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                                $sql="select * from super order by id desc";
                                                $i = 1;
                                                
                                                 foreach ($dbh->query($sql) as $rs)
                                                {
                                                    if ($rs['status']==0) {
                                                    $pay='Not Paid';                                                                                                            
                                                    }
                                                    else{
                                                        $pay='Paid';
                                                    }
                                                ?>
                                            <tr>
                                                <td><?php echo $rs['name']; ?></td>
                                                <td><?php echo $rs['fname']; ?></td>
                                                <td><?php echo $rs['cname']; ?></td>
                                                <td><?php echo $rs['mobile']; ?></td>
                                                <td><?php echo $rs['email']; ?></td>
                                                <td><?php echo $rs['mode']; ?></td>
                                                <td><?php echo $rs['dist']; ?></td>
                                                <td><?php echo $rs['cdate']; ?></td>
                                                <td><?php echo $pay; ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>