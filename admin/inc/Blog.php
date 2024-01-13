<br>
<div class="container">
    <form action="blogform.php" method="post" enctype="multipart/form-data">
    <div class="row">
        
        <div class="col-md-3">
            
            <h3>Title</h3><br>
            <input type="text"/ name="title">
        </div>
        
        
          <div class="col-md-3">
            
            <h3>Post By</h3><br>
            <input type="text"/ name="post">
        </div>
        
        
            
        <div class="col-md-3">
            
            <h3>Image</h3><br>
            <input type="file"/ name="img1">
        </div>
        
        
           
        
    </div>
    <div class="col-md-10">
            <br/>
            <h3>Description</h3>
            
	<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
         <textarea name="content" cols="5" rows="5"> </textarea>
         
           <script>
                        CKEDITOR.replace( 'content' );
                </script>
        </div>
    <br>
   
                      <div style="text-align: center;">
    <input type="submit" value="Submit" name="blog" class="btn btn-primary" id="btn_job">
</div>

                            </form>
    
    
</div>