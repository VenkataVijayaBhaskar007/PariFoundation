<section class="our-blog">
         	<div class="container">
         		<div class="row session-title">
        			<h2> Our Blog </h2>
        			<p>Take a look at what people say about US </p>
        		</div>
        		<div class="blog-row row">
        		    
        		    
        		     <?php
         include 'admin/inc/db.php';
         $sql = "Select * from blog order by id desc";
         
          foreach ($dbh->query($sql) as $row)
       


  {
    echo("<div class='col-md-4 col-sm-6'>


 
<div class='single-blog'>
        					<figure>
        						<img src='slide/$row[3]'>
        					</figure>
        					<div class='blog-detail'>
        						<small>By $row[2] | $row[5]</small>
								<h4>$row[1]</h4>
								<p> $row[4].</p>
								<div class='link'>
									<a href='blog1.php?id=$row[0]'>Read more </a><i class='fas fa-long-arrow-alt-right'></i>
								</div>
        					</div>
        					
        					
        				</div>



</div>");

  }
    ?>
          
        		    
        			
        		</div>
         	</div>
         </section>