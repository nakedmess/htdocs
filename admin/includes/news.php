
<?php
	if(isset($_GET['add'])){
		include('includes/news_add.php');
	}elseif(isset($_GET['edit'])){
		include('includes/news_edit.php');
	}else{


?>
<div id="content">
	<h2>  News [ <a href="?news&add">Add new</a> ] </h2>
<?php
if(isset($_GET['delete_id'])){
	$id = smart($_GET['delete_id']);
	$DB->query("DELETE FROM news WHERE id = '$id'");
}
?>
<h3 class="col-md-12">List of news:</h3>
<table class="table">
<tr>
<td><b>Name</b></td>
<td><b>Category</b></td>
<td><b>Date</b></td>
<td><b>Author</b></td>
<td><center><b>Edit</b></center></td>
<td><center><b>Delete</b></center></td>
</tr>

<?php
	$row = $DB->query("SELECT * FROM news ORDER BY date DESC");
	while ($x = $row->fetch_assoc()) {
$cat_id = $x['category_id'];
$rowd = $DB->query("SELECT * FROM category WHERE id = '$cat_id'");
$xx = $rowd->fetch_assoc();
     ?>

<tr>
<td><?=$x['title'];?></td>
<td><?=$xx['name'];?></td>
<td><?=$x['date'];?></td>
<td><?=$x['author'];?></td>
<td><center><a href="?news&edit=<?=$x['id'];?>"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a></center></td>
<td><center><a class="confirm" href="?news&delete_id=<?=$x['id'];?>"><i class="fa fa-window-close"></i></a></center></td>
</tr>


<?php }
?>

	</table>
</div>

<?php
}
?>
