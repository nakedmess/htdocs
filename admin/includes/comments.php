<div id="content">
	<h2> Comments </h2>
	<h3> Add / edit </h3>
  <?php


  	if(isset($_POST['name'])){
  		$name = smart($_POST['name']);
      $description = smart($_POST['description']);
      $tempid = smart($_POST['tempId']);
      $newid = smart($_POST['newid']);
      $date = date("Y-m-d H:i:s");
  			if($name != "" && $description != ""){
  				$row = $DB->query("SELECT * FROM comments WHERE comment_id = '$tempid'");
  				$num = $row->num_rows;
  				echo $num;
  				if($num <= 0 ){
  				$DB->query("INSERT INTO comments (`name`,`description`,`date`,`news_id`) VALUES ('$name','$description','$date','$newid')");
  				echo "<div class='ok success'>Comment added!</div>";
  				}else{
  				$DB->query("UPDATE comments SET `name`='$name', `description`='$description', `news_id`='$newid' WHERE comment_id = '$tempid'");
  				echo "<div class='ok success'>Comment updated!</div>";
  				}
  			}else{
  				echo "<div class='err success'>Please fill out all fields!</div>";
  			}




  	}

  if(isset($_GET['delete_comment_id'])){
  $id=$_GET['delete_comment_id'];
  if($_GET['delete_comment_id'] != 1){
  $DB->query("DELETE FROM comments WHERE comment_id='$id'");
  echo "<div class='err success'>Comment deleted!</div>";
}
}
    ?>
	<form method="POST">
	<div class="comm col-md-6">
    		<input type="text" class="form-control" id="name" name="name" placeholder="Name"><br>
              <input type="hidden" id="tempId" name="tempId" value="">
	             <textarea id ="description" name="description" class="form-input" required="" placeholder="Your text"></textarea>
<label for="newid">Choose a newspost:</label>
               <select id="newid" name="newid" class="form-control">
                 <?php
                 	$rowd = $DB->query("SELECT * FROM news ORDER BY id ASC");
                 	while ($xd = $rowd->fetch_assoc()) { ?>

                   <option value="<?=$xd['id'];?>"><?=$xd['title'];?></option>

                 <?php } ?>
                 </select>
        <br><input class=" btn btn-info" type="submit" name="submit" value="Save">
	</div>
	</form>
<h3 class="col-md-12">Comment list</h3>
<table class="table">
<tr>
<td><b>Name</b></td>
<td><b>Description</b></td>
<td><b>Date</b></td>
<td><b>News link</b></td>
<td><center><b>Edit</b></center></td>
<td><center><b>Delete</b></center></td>
</tr>

<?php
	$row = $DB->query("SELECT * FROM comments ORDER BY date DESC");
	while ($x = $row->fetch_assoc()) { ?>

<tr>
<td><?=$x['name'];?></td>
<td><?=$x['description'];?></td>
<td><?=$x['date'];?></td>
<td><a href="../?news-single&id=<?=$x['news_id'];?>">Go to</a></td>
<td><center><a onclick="set_edit('<?=$x['name'];?>','<?=$x['description'];?>','<?=$x['comment_id'];?>','<?=$x['news_id'];?>')"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a></center></td>
<td><center><a class="confirm" href="?comments&delete_comment_id=<?=$x['comment_id'];?>"><i class="fa fa-window-close"></i></a></center></td>
</tr>


<?php }
?>

	</table>
</div>
<script>
function set_edit(name, description, id, newid){
  $('#name').val(name);
  $('#description').val(description);
  $('#tempId').val(id);
  $("#newid").val(newid).change();
}
</script>
