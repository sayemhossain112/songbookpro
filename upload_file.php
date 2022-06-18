<!DOCTYPE html>
<html>
<head>
	<title>Upload Song</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
	
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
	
<div id = "wrapper">
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">
         
            <div class="card border-secondary mb-3" style="max-width: 50rem;">
            <div class="card-header">Title
            <input type="text" name="title">
            </div></div>
            
            <div class="card border-secondary mb-3" style="max-width: 50rem;">
            <div class="card-header">Chord
            <input type="text" name="chord">
            </div></div>
         
         
            <div class="card border-secondary mb-3" style="max-width: 50rem;">
            <div class="card-header">Number
            <input type="text" name="number">
            </div></div>
         
            <div class="card border-secondary mb-3" style="max-width: 50rem;">
            <div class="card-header">Lyrics
            <textarea name="lyrics" rows="10" cols="50"></textarea>
            </div></div>

            <div class="card text-white bg-primary mb-1" style="max-width: 50rem;">
            <div class="card-header">PDF File</div>
            <div class="card-body">
            <input type="file" 
            name="pdf_file"></p>
            </div>
            </div>
            
            <div class="card text-white bg-danger mb-1" style="max-width: 50rem;">
            <div class="card-header">PowerPoint File</div>
            <div class="card-body">
            <input type="file" 
            name="pptx_file"></p>
            </div>
            </div>
            
            <div class="card text-white bg-dark mb-1" style="max-width: 50rem;">
            <div class="card-header">Propresenter File</div>
            <div class="card-body">
            <input type="file" 
            name="pro_file"></p>
            </div>
            </div>

           <input type="submit" class = "btn btn-primary textbox-rounded"name="submit" value="Upload">
     </form>
     </div>
</body>
</html>