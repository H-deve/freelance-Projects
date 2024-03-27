
<h1 class="text-right"><?= $title?> </h1>
<?php if(isset($result) && is_array($result)):?>
<?php foreach ($result as $value) :

  
?>
    <div class="error_page">
            <h3><?php echo $value->title ?> </h3>
             
             <div class="post_commentbox" dir="rtl"> <a href="#"><span><i class="fa fa-calendar"></i><?php echo $value->NewsDate?></span> <a href="#"><i class="fa fa-tags"></i><?= $title?></a> </div>
             <div class="single_page_content" dir="rtl"> 
                <img class="add_banner"  src="<?= base_url();?>uploads/<?php echo $value->image?>" alt="" dir="rtl" style="margin-left:10px;">
                 <dl>
                     <dd>
                         <dl>
                             <dd>
                                 <blockquote> 
                                  <?php echo $value->short_description ?>
                                  
                                 </blockquote>
                             </dd>
                         </dl>
                     </dd>
                 </dl>
                
            &nbsp;<div class="error_page"><span></span> <a href="<?= base_url(); ?>news/Newsdetails?id=<?php echo $value->id?>">إقرأ المزيد</a> </div>                 
          </div>                              
 
    </div>
  <?php endforeach; ?>
  <p>
  <?php if(isset($links)):?>
  <div class="error_page">
   <?php echo $links; ?>
   </div>
 <?php endif?>
   </p>
<?php endif?>
<br>
 <br />

 
<!--<p>

                                      <ul class="sociallink_nav">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                       </ul>
   </p>   -->       
          