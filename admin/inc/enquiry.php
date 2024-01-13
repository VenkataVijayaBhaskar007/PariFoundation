
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
                                                
                                                
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                 <th>Message</th>
                                               
                                                <th>Reg Date</th>
                                                <th>Action</th>
                                             
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            <?php
                                                $sql="select * from enquiry order by id desc";
                                                $i = 1;
                                                
                                                 foreach ($dbh->query($sql) as $rs)
                                                {
                                                   
                                                    
                                                ?>
                                            <tr>
                                                <td><?php echo $rs['name']; ?></td>
                                     <td><?php echo $rs['email']; ?></td>
                                                <td><?php echo $rs['mobile']; ?></td>
                                                
                                               
                                                <td><?php echo $rs['msg']; ?></td>
                                                <td><?php echo $rs['cdate']; ?></td>
                                                
                                                
                                                <td><a href="deleteenquiry.php?id=<?php echo $rs['id']; ?>"> <input type='submit' value='Delete'  class='btn btn-danger'></a></td>
                                            </tr>
                                            
                                              
    
   
    
   
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>