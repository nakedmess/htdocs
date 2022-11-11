<?php /*
         <!-- Top News Start-->
         <div class="top-news">
             <div class="container">
                 <div class="row">
                     <div class="col-md-6 tn-left">
                         <div class="row tn-slider">
                             <div class="col-md-6">
                                 <div class="tn-img">
                                     <img src="img/news-450x350-1.jpg" />
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="tn-img">
                                     <img src="img/news-450x350-2.jpg" />
                                     <div class="tn-title">
                                         <a  href="">Integer hendrerit elit eget purus sodales maximus</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6 tn-right">
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="tn-img">
                                     <img src="img/news-350x223-1.jpg" />
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="tn-img">
                                     <img src="img/news-350x223-2.jpg" />
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="tn-img">
                                     <img src="img/news-350x223-3.jpg" />
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="tn-img">
                                     <img src="img/news-350x223-4.jpg" />
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Top News End-->

         <!-- Category News Start-->
         <div class="cat-news">
             <div class="container">
                 <div class="row">
                   <?php
           $row = $DB->query("SELECT * FROM category");
           $count = 0;
           while($x = $row->fetch_assoc()){

             ?>

                     <div class="col-md-6">
                         <h2><?=$x['name']?></h2>
                         <div class="row cn-slider">
                             <div class="col-md-6">
                                 <div class="cn-img">
                                     <img src="img/news-350x223-1.jpg" />
                                     <div class="cn-title">
                                         <a href="">Lorem ipsum dolor sit</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="cn-img">
                                     <img src="img/news-350x223-2.jpg" />
                                     <div class="cn-title">
                                         <a href="">Lorem ipsum dolor sit</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="cn-img">
                                     <img src="img/news-350x223-3.jpg" />
                                     <div class="cn-title">
                                         <a href="">Lorem ipsum dolor sit</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
<?php
}

?>
                 </div>
             </div>
         </div>
         <!-- Category News End-->

         <!-- Category News Start-->
         <div class="cat-news">
             <div class="container">
                 <div class="row">
                     <div class="col-md-6">
                         <h2>Business</h2>
                         <div class="row cn-slider">
                             <div class="col-md-6">
                                 <div class="cn-img">
                                     <img src="img/news-350x223-5.jpg" />
                                     <div class="cn-title">
                                         <a href="">Lorem ipsum dolor sit</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="cn-img">
                                     <img src="img/news-350x223-4.jpg" />
                                     <div class="cn-title">
                                         <a href="">Lorem ipsum dolor sit</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="cn-img">
                                     <img src="img/news-350x223-3.jpg" />
                                     <div class="cn-title">
                                         <a href="">Lorem ipsum dolor sit</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <h2>Entertainment</h2>
                         <div class="row cn-slider">
                             <div class="col-md-6">
                                 <div class="cn-img">
                                     <img src="img/news-350x223-2.jpg" />
                                     <div class="cn-title">
                                         <a href="">Lorem ipsum dolor sit</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="cn-img">
                                     <img src="img/news-350x223-1.jpg" />
                                     <div class="cn-title">
                                         <a href="">Lorem ipsum dolor sit</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="cn-img">
                                     <img src="img/news-350x223-3.jpg" />
                                     <div class="cn-title">
                                         <a href="">Lorem ipsum dolor sit</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Category News End-->

         <!-- Tab News Start-->
         <div class="tab-news">
             <div class="container">
                 <div class="row">
                     <div class="col-md-6">
                         <ul class="nav nav-pills nav-justified">
                             <li class="nav-item">
                                 <a class="nav-link active" data-toggle="pill" href="#featured">Featured News</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" data-toggle="pill" href="#popular">Popular News</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                             </li>
                         </ul>

                         <div class="tab-content">
                             <div id="featured" class="container tab-pane active">
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-1.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-2.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-3.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                             </div>
                             <div id="popular" class="container tab-pane fade">
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-4.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-5.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-1.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                             </div>
                             <div id="latest" class="container tab-pane fade">
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-2.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-3.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-4.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="col-md-6">
                         <ul class="nav nav-pills nav-justified">
                             <li class="nav-item">
                                 <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                             </li>
                         </ul>

                         <div class="tab-content">
                             <div id="m-viewed" class="container tab-pane active">
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-5.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-4.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-3.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                             </div>
                             <div id="m-read" class="container tab-pane fade">
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-2.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-1.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-3.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                             </div>
                             <div id="m-recent" class="container tab-pane fade">
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-4.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-5.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                                 <div class="tn-news">
                                     <div class="tn-img">
                                         <img src="img/news-350x223-1.jpg" />
                                     </div>
                                     <div class="tn-title">
                                         <a href="">Lorem ipsum dolor sit amet</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Tab News Start-->
*/ ?>
         <!-- Main News Start-->
         <div class="main-news">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-9">
                         <div class="row"  id="parent">
                           <?php
                   $row = $DB->query("SELECT * FROM news");
                   while($x = $row->fetch_assoc()){
                     $news_id = $x['id'];
			        	$im = $DB->query("SELECT * FROM news_images WHERE news_id = '$news_id' LIMIT 1");
			        	$i = $im->fetch_assoc();
                     ?>
                             <div class="col-md-4 cat<?=$x['category_id']?>">
                                 <div class="mn-img">
                                     <img src="<?=$i['img_url'];?>" />
                                     <div class="mn-title">
                                         <a href="?news-single&id=<?=$x['id']?>"><?=$x['title']?></a>
                                     </div>
                                 </div>
                             </div>
                             <?php } ?>
                         </div>
                     </div>

                     <div class="col-lg-3">
                         <div class="mn-list">
                             <h2>Read More</h2>
                             <ul>
                               <?php
                       $row = $DB->query("SELECT * FROM news ORDER BY rand() LIMIT 5");
                       while($x = $row->fetch_assoc()){
                         ?>
                                 <li><a href="?news-single&id=<?=$x['id']?>"><?=$x['title']?></a></li>
<?php } ?>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Main News End-->
