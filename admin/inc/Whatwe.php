<br>
<div class="container">
    <form action="whatweform.php" method="post" enctype="multipart/form-data">
    <div class="row">
        
        <div class="col-md-4">
            
            <h4>Title</h4><br>
            <input type="text"/ name="title">
        </div>
        
        
            
        <div class="col-md-4">
            
            <h4>Image</h4><br>
            <input type="file"/ name="img1">
        </div>
        
        
            <div class="col-md-4">
            
            <h4>Description</h4>
            
	<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
         <textarea name="content" cols="5" rows="5"> </textarea>
         
           <script>
                        CKEDITOR.replace( 'content' );
                </script>
        </div>
        
    </div>
    <br>
     
                              <input type="submit" value="Submit" name="whatdo" class="btn btn-primary"  id="btn_job">
                              
                              
                            </form>
    
    
</div>