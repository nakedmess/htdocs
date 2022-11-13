         <!-- Main News Start-->
         <div class="main-news">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-9">
                         <div class="row"  id="parent">
                           <?php
                   $row = $DB->query("SELECT * FROM news ORDER BY date DESC");
                   while($x = $row->fetch_assoc()){
                     $news_id = $x['id'];
                     ?>
                             <div class="col-md-4 cat<?=$x['category_id']?>">
                                 <div class="mn-img" style="background-image: url('./admin/<?=$x['photo'];?>');">
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
