<div id="content">
	<nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-brand">
        Add newspost:
    </div>
    </div>
    </nav>
		<form method="POST" enctype="multipart/form-data">
	<div class="col-md-12">
    <?php
  if(isset($_POST['title']) && isset($_POST['author']) && isset($_POST['description']) && isset($_POST['newid'])){
    $title = smart($_POST['title']);
    $author = smart($_POST['author']);
    $description = smart($_POST['description']);
    $newid = smart($_POST['newid']);
    $date = date("Y-m-d H:i:s");
  $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {

        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        $photo_url = "uploads/".$_FILES["photo"]["name"];
        $DB->query("INSERT INTO news (`title`,`author`,`description`,`category_id`,`date`,`photo`) VALUES ('$title','$author','$description','$newid','$date','$photo_url')");
        echo "Saved!";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
//echo "<meta http-equiv='refresh' content='0'>";
}

  ?>
    <div class="panel panel-default">
<div class="panel-body">
    <div id="lv_panel">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="" placeholder="News title"><br>
        <label for="author">Author:</label>
        <input type="text" class="form-control" id="author" name="author" value="" placeholder="News author"><br>
        <label for="author">Add image:</label>
        <input type="file" class="form-control" id="photo" name="photo">
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="11" cols="80"></textarea>
    </div>
  </div>
</div>
<label for="newid">Choose a category:</label>
               <select id="newid" name="newid" class="form-control">
                 <?php
                 	$rowd = $DB->query("SELECT * FROM category");
                 	while ($xd = $rowd->fetch_assoc()) { ?>

                   <option value="<?=$xd['id'];?>"><?=$xd['name'];?></option>

                 <?php } ?>
<br>
<input class=" btn btn-success save" type="submit" name="submit" value="Save">
                 </select>
<script type="text/javascript">
         CKEDITOR.replace( 'description' );

      </script>
	</div>

	</form>
</div>
