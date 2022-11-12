<div id="content">
	<h2> News categories </h2>
	<h3> Add </h3>
  <?php


  	if(isset($_POST['name'])){
  		$category = smart($_POST['name']);
      $tempid = smart($_POST['tempId']);
  			if($category != ""){
  				$row = $DB->query("SELECT * FROM category WHERE name = '$category' OR id = '$tempid'");
  				$num = $row->num_rows;
  				echo $num;
  				if($num <= 0 ){
  				$DB->query("INSERT INTO category (`name`) VALUES ('$category')");
  				echo "<div class='ok success'>Category added!</div>";
  				}else{
  				$DB->query("UPDATE category SET `name`='$category' WHERE id = '$tempid'");
  				echo "<div class='ok success'>Category updated!</div>";
  				}
  			}else{
  				echo "<div class='err success'>Please fill out all fields!</div>";
  			}




  	}

  if(isset($_GET['delete_cat_id'])){
  $id=$_GET['delete_cat_id'];
  if($_GET['delete_cat_id'] != 1){
  $DB->query("DELETE FROM category WHERE id='$id'");
  echo "<div class='err success'>Category deleted!</div>";
}
}
    ?>
	<form method="POST">
	<div class=" col-md-6">
    		<input type="text" class="form-control" id="name" name="name" placeholder="Category name"><br>
        <input type="hidden" id="tempId" name="tempId" value="">
        <input class=" btn btn-info" type="submit" name="submit" value="Save">
	</div>
	</form>
<h3 class="col-md-12">Category list</h3>
<table class="table">
<tr>
<td><b>Category</b></td>
<td><center><b>Edit</b></center></td>
<td><center><b>Delete</b></center></td>
</tr>

<?php
	$row = $DB->query("SELECT * FROM category");
	while ($x = $row->fetch_assoc()) { ?>

<tr>
<td><?=$x['name'];?></td>
<td><center><a onclick="set_edit('<?=$x['name'];?>','<?=$x['id'];?>')"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a></center></td>
<td><center><a class="confirm" href="?category&delete_cat_id=<?=$x['id'];?>"><i class="fa fa-window-close"></i></a></center></td>
</tr>


<?php }
?>

	</table>
</div>
<script>
function set_edit(name, id){
  $('#name').val(name);
  $('#tempId').val(id);
}
</script>
