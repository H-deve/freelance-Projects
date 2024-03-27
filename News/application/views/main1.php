  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <?php foreach ($slider as $value) :?>
          <div class="single_iteam"> <a href="<?php echo base_url();?>News/Newsdetails?id=<?= $value->id?>"> <img src="<?php echo base_url()?>uploads/<?php echo $value->image?>" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="<?php echo base_url();?>News/Newsdetails?id=<?= $value->id ?>"><?=  $value->title?></a></h2>
             <!-- <p><?= $value->short_description ?></p> -->
            </div>
          </div>
        <?php endforeach;?>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="single_sidebar">
            <h2><span>الأكثر متابعة</span></h2>
           
              
          
            <ul class="spost_nav">
               <?php foreach ($most as $value) : ?>
              <li>
                <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>News/Newsdetails?id=<?= $value->id ?>" class="media-left"> 
                    <img alt="" src="<?php echo base_url()?>uploads/<?php echo $value->image?>"> </a>
                  <div class="media-body"> <a href="<?php echo base_url();?>News/Newsdetails?id=<?= $value->id ?>" class="catg_title"> <?php echo $value->title ?></a> </div>
                </div>
              </li>
              <?php endforeach;?>
            </ul>
          
          </div>
        <br />
      </div>
    </div>
    
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
          <p></p>
            <h2><span>محليات</span></h2>
            <div class="single_post_content_left">
 <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig">
                         <a href="<?php echo  base_url();?>News/Newsdetails?id=<?=  $result[0]->id ?>"  class="featured_img"> <img alt="" 
                        src="<?php echo base_url()?>uploads/<?php echo $result[0]->image?>"> </a>
                       <span class="overlay"></span> </a>
                      <figcaption><?= $result[0]->title ?>  </figcaption>
                      <p><?= $result[0]->short_description ?></p>
                    </figure>
                  </li>
                </ul>
            </div>
            <div class="single_post_content_right">
              <?php for($i=1;$i<count($result);$i++) :?>
              <ul class="spost_nav">
                <li>

          <div class="media wow fadeInDown"> <a href="<?php  echo base_url();?>News/Newsdetails?id=<?=  $result[$i]->id ?>" class="media-left"> <img alt="" 
             src="<?php echo base_url()?>uploads/<?php echo $result[$i]->image?>"> </a>
                    <div class="media-body"> <a href="<?php  echo base_url();?>News/Newsdetails?id=<?=  $result[$i]->id ?>" class="catg_title"> <?= $result[$i]->title ?></a> </div>
                  </div>
                </li>
              
              </ul>
            <?php endfor?>
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>النفط والطاقة</span></h2>

                <?php if(isset( $oil[0])):?>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig">
                         <a href="<?php echo  base_url();?>news/Newsdetails?id=<?=  $oil[0]->id ?>"  class="featured_img"> <img alt="" 
                        src="<?php echo base_url()?>uploads/<?php echo $oil[0]->image?>"> </a>
                        <span class="overlay"></span> </a>
                      <figcaption><?= $oil[0]->title ?>  </figcaption>
                      <p><?= $oil[0]->short_description ?></p>
                    </figure>
                  </li>
                </ul>
              <?php endif?>

                 <?php if(isset($oil[1])) :?>
              <ul class="spost_nav">
                <li>

        
          <div class="media wow fadeInDown"> <a href="<?php  echo base_url();?>News/Newsdetails?id=<?=  $oil[1]->id ?>" class="media-left"> <img alt="" 
             src="<?php echo base_url()?>uploads/<?php echo $oil[1]->image?>"> </a>
                    <div class="media-body"> <a href="<?php echo base_url();?>News/Newsdetails?id=<?=  $oil[1]->id ?>" class="catg_title"> <?= $oil[1]->title ?></a> </div>
                  </div>
                </li>
              
              </ul>
            <?php endif?>
              
                
              </div>
            </div>

            <div class="technology">
              <div class="single_post_content">
                <h2><span>مصارف وتأمين</span></h2>
                  <?php if(isset( $banks[0])):?>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig">
                         <a href="<?php  echo base_url();?>News/Newsdetails?id=<?=  $banks[0]->id ?>"  class="featured_img"> <img alt="" 
                        src="<?php echo base_url()?>uploads/<?php echo $banks[0]->image?>"> </a>
                       <span class="overlay"></span> </a>
                      <figcaption><?= $banks[0]->title ?>  </figcaption>
                      <p><?= $banks[0]->short_description ?></p>
                    </figure>
                  </li>
                </ul>
              <?php endif?>

                 <?php if(isset($banks[1])) :?>

              <ul class="spost_nav">
                <li>

          <div class="media wow fadeInDown"> <a href="<?php  echo base_url();?>News/Newsdetails?id=<?=  $banks[1]->id ?>" class="media-left"> <img alt="" 
             src="<?php echo base_url()?>uploads/<?php echo $banks[1]->image?>"> </a>
                    <div class="media-body"> <a href="<?php  echo base_url();?>News/Newsdetails?id=<?=  $banks[1]->id ?>" class="catg_title"> <?= $banks[1]->title ?></a> </div>
                  </div>
                </li>
              
              </ul>
            <?php endif?>
              </div>
            </div>
          </div>

          <div class="single_post_content">
            <h2><span>أسواق</span></h2>

            <div class="single_post_content_left">
              <?php if(isset($markets[0])): ?>
              <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig">
                         <a href="<?php  echo base_url();?>News/Newsdetails?id=<?=  $markets[0]->id ?>"  class="featured_img"> <img alt="" 
                        src="<?php echo base_url()?>uploads/<?php echo $markets[0]->image?>"> </a>
                       <span class="overlay"></span> </a>
                      <figcaption><?= $markets[0]->title ?>  </figcaption>
                      <p><?= $markets[0]->short_description ?></p>
                    </figure>
                  </li>
                </ul>
            <?php endif;?>
            </div>

          <div class="single_post_content_right">
              <?php for($i=1;$i<count($markets);$i++) :?>
              <ul class="spost_nav">
                <li>

          <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>News/Newsdetails?id=<?=  $markets[$i]->id ?>" class="media-left"> <img alt="" 
             src="<?php echo base_url()?>uploads/<?php echo $markets[$i]->image?>"> </a>
                    <div class="media-body"> <a href="<?php echo base_url();?>News/Newsdetails?id=<?=  $markets[$i]->id ?>" class="catg_title"> <?= $markets[$i]->title ?></a> </div>
                  </div>
                </li>
              
              </ul>
            <?php endfor?>
            </div>
          </div>

          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">

                <h2><span>أحوال الناس</span></h2>
                   <?php if(isset($Peoplestatus[0])):?>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig">
                         <a href="<?php echo base_url ();?>News/Newsdetails?id=<?=  $Peoplestatus[0]->id ?>"  class="featured_img"> <img alt="" 
                        src="<?php echo base_url()?>uploads/<?php echo $Peoplestatus[0]->image?>"> </a>
                      <span class="overlay"></span> </a>
                      <figcaption><?= $Peoplestatus[0]->title ?>  </figcaption>
                      <p><?= $Peoplestatus[0]->short_description ?></p>
                    </figure>
                  </li>
                </ul>
              <?php endif;?>
              <?php if(isset($Peoplestatus[1])):?>
              <ul class="spost_nav">
                <li>

          <div class="media wow fadeInDown"> <a href="<?php  echo base_url();?>News/Newsdetails?id=<?=  $Peoplestatus[1]->id ?>" class="media-left"> <img alt="" 
             src="<?php echo base_url()?>uploads/<?php echo $Peoplestatus[1]->image?>"> </a>
                    <div class="media-body"> <a href="<?php echo base_url();?>News/Newsdetails?id=<?=  $Peoplestatus[1]->id ?>" class="catg_title"> <?= $Peoplestatus[1]->title ?></a> </div>
                  </div>
                </li>
              
              </ul>
           <?php endif;?>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>ضد الفساد</span></h2>
                <?php if(isset( $aginst[0])):?>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig">
                         <a href="<?php echo base_url();?>News/Newsdetails?id=<?=  $aginst[0]->id ?>"  class="featured_img"> <img alt="" 
                        src="<?php echo base_url()?>uploads/<?php echo $aginst[0]->image?>"> </a>
                        <span class="overlay"></span> </a>
                      <figcaption><?= $aginst[0]->title ?>  </figcaption>
                      <p><?= $aginst[0]->short_description ?></p>
                    </figure>
                  </li>
                </ul>
              <?php endif?>
                
             <?php if(isset($aginst[1])):?>
              <ul class="spost_nav">
                <li>

          <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>News/Newsdetails?id=<?=  $aginst[1]->id ?>" class="media-left"> <img alt="" 
             src="<?php echo base_url()?>uploads/<?php echo $aginst[1]->image?>"> </a>
                    <div class="media-body"> <a href="<?php echo base_url();?>News/Newsdetails?id=<?=  $aginst[1]->id ?>" class="catg_title"> <?= $aginst[1]->title ?></a> </div>
                  </div>
                </li>
              
              </ul>
           <?php endif;?>
            
              </div>
            </div>
          </div>



          <div class="single_post_content">
            <h2><span>من العالم</span></h2>


            <div class="single_post_content_left">

            <?php if(isset( $fromworld[0])):?>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig">
                         <a href="<?php echo base_url();?>News/Newsdetails?id=<?=  $fromworld[0]->id ?>"  class="featured_img"> <img alt="" 
                        src="<?php echo base_url()?>uploads/<?php echo $fromworld[0]->image?>"> </a>
                   <span class="overlay"></span> </a>
                      <figcaption><?= $fromworld[0]->title ?>  </figcaption>
                      <p><?= $fromworld[0]->short_description ?></p>
                    </figure>
                  </li>
                </ul>
              <?php endif?>
            </div>
            <div class="single_post_content_right">
            <?php if(isset($fromworld[1])):?>
              <ul class="spost_nav">
                <li>

          <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>News/Newsdetails?id=<?=  $fromworld[1]->id ?>" class="media-left"> <img alt="" 
             src="<?php echo base_url()?>uploads/<?php echo $fromworld[1]->image?>"> </a>
                    <div class="media-body"> <a href="<?php echo base_url();?>News/Newsdetails?id=<?=  $fromworld[1]->id ?>" class="catg_title"> <?= $fromworld[1]->title ?></a> </div>
                  </div>
                </li>
              
              </ul>
           <?php endif;?>
          
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>كاريكاتير اليوم</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
                <?php foreach($caricateer as $image):?>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?= base_url()?>uploads/<?= $image->image?>" title="Photography Ttile 1"> <img src="<?= base_url()?>uploads/<?= $image->image?>" alt=""/></a> </figure>
                </div>
              </li>
              <?php endforeach;?>
              <!--
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 3"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 4"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 5"> <img src="images/photograph_img2.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 6"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              -->
            </ul>
       
     