     </div>
        </div>
      </div>
   <p></p><br />
  
   <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
     <?php if(!isset($main)) :?>
          <div class="single_sidebar">
            <h2><span>آخر الأخبار</span></h2>
            <ul class="spost_nav">
               <?php foreach ($most as $value) : ?>
              <li>
                <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?= $value->id ?>" class="media-left"> 
                    <img alt="" src="<?php echo base_url()?>uploads/<?php echo $value->image?>"> </a>
                  <div class="media-body"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?= $value->id ?>" class="catg_title"> <?php echo $value->title ?></a> </div>
                </div>
              </li>
              <?php endforeach;?>
            </ul>
          
          </div>
<?php endif;?>
<!--
 <div class="single_sidebar">
           <br />
            <h2><span>من الأرشيف</span></h2>
            <ul class="spost_nav">
                <?php foreach($from_archive as $value):?>
             <li>
                <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?= $value->id ?>" class="media-left"> 
                    <img alt="" src="<?php echo base_url()?>uploads/<?php echo $value->image?>"> </a>
                  <div class="media-body"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?= $value->id ?>" class="catg_title"> <?php echo $value->title ?></a> </div>
                </div>
              </li>
              <?php endforeach?>
             
             
            
            </ul>
          </div>
-->
<div class="single_sidebar">
           <br />
            <h2><span>كاريكاتير اليوم</span></h2>
            <ul class="spost_nav">
                 <?php foreach($caricateer as $image):?>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?= base_url()?>uploads/<?= $image->image?>" title="Photography Ttile 1"> <img src="<?= base_url()?>uploads/<?= $image->image?>" alt=""/></a> </figure>
                </div>
              </li>
              <?php endforeach;?>
             
             
            
            </ul>
          </div>
<?php if(isset($ad_sidebar[0])): $value = $ad_sidebar[0]?>
   <div class="single_sidebar wow fadeInDown">
          </br>
            <h2><span> إعلان </span></h2>
            <a class="sideAdd" href=" <?= strpos($value->url, 'http') !== false?$value->url:'http://'.$value->url ?>"><img src="<?php echo base_url()?>uploads/<?php echo $value->file ?>" alt=""></a> 
            </div>
<?php endif?>
        

<div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
            
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                  
                <ul class="nav navbar-nav main_nav">
          <li <?= isset($home)?'class="active"':'' ?>><a href="<?php echo base_url()?>News">الرئيسية</a></li>

       
       
          <li <?= isset($fromworld_header)?'class="active"':'' ?>><a href="<?php echo base_url()?>News/fromworld">من العالم</a></li>
          <li <?= isset($against_header)?'class="active"':'' ?>><a href="<?php echo base_url()?>News/aginst">ضد الفساد</a></li>
          <li <?= isset($peoplestatus_header)?'class="active"':'' ?>><a href="<?php echo base_url()?>News/peoplestatus">أحوال الناس</a></li>
          <li <?= isset($markets_header)?'class="active"':'' ?>><a href="<?php echo base_url()?>News/markets">أسواق</a></li>
          <li <?= isset($oil_header)?'class="active"':'' ?>><a href="<?php echo base_url()?>News/oil">النفط والطاقة</a></li>
          <li <?= isset($banks_header)?'class="active"':'' ?>><a href="<?php echo base_url()?>News/banks"> مصارف وتأمين</a></li>
          <li <?= isset($local_header)?'class="active"':'' ?>><a href="<?php echo base_url()?>News/local">محليات</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">كاريكاتير اليوم</a>
           
                 
          </li>
          
        </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
             
            </div>
          </div>
        <br />





          <?php $i=1;for ($i=1;$i<count($ad_sidebar);$i++) :?>
            
          <div class="single_sidebar wow fadeInDown">
          </br>
            <h2><span> إعلان </span></h2>
            <a class="sideAdd" href="<?= strpos($ad_sidebar[$i]->url, 'http') !== false?$ad_sidebar[$i]->url:'http://'.$ad_sidebar[$i]->url ?>"><img src="<?php echo base_url()?>uploads/<?php echo $ad_sidebar[$i]->file ?>" alt=""></a> 
            </div>
          
          <?php endfor;?>

          <div class="single_sidebar wow fadeInDown">
         
          <br />
            <h2><span>الطقس</span></h2>
          <a class="weatherwidget-io" href="https://forecast7.com/ar/33d5136d28/damascus/" data-label_1="DAMASCUS" data-label_2="WEATHER" data-theme="original" >DAMASCUS WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://weatherwidget.io/js/widget.min.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","weatherwidget-io-js");
</script>

          </div>
          
        </aside>
      </div>
