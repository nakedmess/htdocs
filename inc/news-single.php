<?php
if(isset($_GET['id'])){
  $id = smart($_GET['id']);
  $row = $DB->query("SELECT * FROM news WHERE id = '$id'");
  $im  = $DB->query("SELECT * FROM news_images WHERE news_id = '$id'");
  $x = $row->fetch_assoc();
  $cat_id = $x['category_id'];
  $i = $im->fetch_assoc();
?>
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active"><?=$x['title']?></li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Single News Start-->
<div class="single-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="sn-container">
                    <div class="sn-img">
                        <img src="<?=$i['img_url'];?>" />
                    </div>
                    <div class="sn-content">
                        <h1 class="sn-title"><?=$x['title']?></h1>
<?=$x['description']?>
                    </div>
                </div>

                <?php } ?>
                <div class="sn-related">
                    <h2>Comments</h2>
                      <div class="row">
                        <?php
                $row2 = $DB->query("SELECT * FROM comments WHERE news_id = '$id' LIMIT 5");
                while($xxx = $row2->fetch_assoc()){
                  $time_elapsed = timeAgo($xxx['date']);
                  ?>
                      <div class="col-sm-6">
                      <div class="thumbnail">
                      <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                      </div><!-- /thumbnail -->
                      <div class="panel panel-default">
                      <div class="panel-heading">
                      <strong><?=$xxx['name']?></strong> <span class="text-muted">commented <?=$time_elapsed?></span>
                      </div>
                      <div class="panel-body">
                      <?=$xxx['description']?>
                      </div><!-- /panel-body -->
                      </div><!-- /panel panel-default -->
                      </div>
                    <?php } ?>
                      </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <h2 class="sw-title">In This Category</h2>
                        <div class="news-list">
                          <?php
                  $rowx = $DB->query("SELECT * FROM news WHERE category_id = '$cat_id' AND id != '$id' LIMIT 5");
                  while($xx = $rowx->fetch_assoc()){
                    $news_id = $xx['id'];
               $im2 = $DB->query("SELECT * FROM news_images WHERE news_id = '$news_id' LIMIT 1");
               $i2 = $im2->fetch_assoc();
    ?>
                            <div class="nl-item">
                                <div class="nl-img">
                                    <img src="<?=$i2['img_url'];?>" />
                                </div>
                                <div class="nl-title">
                                    <a href="?news-single&id=<?=$xx['id']?>"><?=$xx['title']?></a>
                                </div>
                            </div>
                          <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single News End-->
