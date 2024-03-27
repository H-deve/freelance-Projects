  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <?php foreach ($slider as $value) :?>
          <div class="single_iteam"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?= $value->id?>"> <img src="<?php echo base_url()?>uploads/<?php echo $value->image?>" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="<?php echo base_url();?>news/Newsdetails?id=<?= $value->id ?>"><?=  $value->title?></a></h2>
             <!-- <p><?= $value->short_description ?></p> -->
            </div>
          </div>
        <?php endforeach;?>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4" style="margin-top: -3%;">
        <div class="single_sidebar">
            <h2><span>آخر الأخبار</span></h2>
           
              
          
            <ul class="spost_nav">
               <?php foreach ($most as $value) : ?>
              <li>
                <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?= $value->id ?>" class="media-left"> 
                    <img alt="" src="<?php echo base_url()?>uploads/<?php echo $value->image?>"> </a>
                 <div class="media-body" style="font-weight: bold;"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?= $value->id ?>" class="catg_title"> <?php echo $value->title ?></a> </div>
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
                         <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $result[0]->id ?>"  class="featured_img"> <img alt="" 
                        src="<?php echo base_url()?>uploads/<?php echo $result[0]->image?>"> </a>
                       <span class="overlay"></span> </a>
                       <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $result[0]->id ?>" ><figcaption><?= $result[0]->title ?>  </figcaption></a>
                      <p><?= $result[0]->short_description ?></p>
                    </figure>
                  </li>
                </ul>
            </div>
            <div class="single_post_content_right">
              <?php for($i=1;$i<count($result);$i++) :?>
              <ul class="spost_nav">
                <li>

          <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $result[$i]->id ?>" class="media-left"> <img alt="" 
             src="<?php echo base_url()?>uploads/<?php echo $result[$i]->image?>"> </a>
                    <div class="media-body" style="font-weight: bold;"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $result[$i]->id ?>" class="catg_title"> <?= $result[$i]->title ?></a> </div>
                  </div>
                </li>
              
              </ul>
            <?php endfor?>
            </div>
          </div>

            <div class="single_post_content">
            <h2><span>النفط والطاقة</span></h2>

            <div class="single_post_content_left">
              <?php if(isset($oil[0])): ?>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig">
                          <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $oil[0]->id ?>"  class="featured_img"> 
                            <img alt="" src="<?php echo base_url()?>uploads/<?php echo $oil[0]->image?>"> 
                          </a>
                         <span class="overlay"></span> </a>
                          <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $oil[0]->id ?>" ><figcaption><?= $oil[0]->title ?>  </figcaption></a>
                          <p><?= $oil[0]->short_description ?></p>
                    </figure>
                  </li>
                </ul>
            <?php endif;?>
            </div>

            <div class="single_post_content_right">
                <?php for($i=1;$i<count($oil);$i++) :?>
                <ul class="spost_nav">
                  <li>

                      <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $oil[$i]->id ?>" class="media-left"> <img alt="" 
                       src="<?php echo base_url()?>uploads/<?php echo $oil[$i]->image?>"> </a>
                     <div class="media-body" style="font-weight: bold;"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $oil[$i]->id ?>" class="catg_title"> <?= $oil[$i]->title ?></a> 
                      </div>
                    </div>
                  </li>
                
                </ul>
                <?php endfor?>
            </div>
          </div>

           <div class="single_post_content">
            <h2><span>مصارف وتأمين</span></h2>

            <div class="single_post_content_left">
              <?php if(isset($banks[0])): ?>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig">
                          <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $banks[0]->id ?>"  class="featured_img"> 
                            <img alt="" src="<?php echo base_url()?>uploads/<?php echo $banks[0]->image?>"> 
                          </a>
                         <span class="overlay"></span> </a>
                           <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $banks[0]->id ?>" ><figcaption><?= $banks[0]->title ?>  </figcaption></a>
                          <p><?= $banks[0]->short_description ?></p>
                    </figure>
                  </li>
                </ul>
            <?php endif;?>
            </div>

            <div class="single_post_content_right">
                <?php for($i=1;$i<count($banks);$i++) :?>
                <ul class="spost_nav">
                  <li>

                      <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $banks[$i]->id ?>" class="media-left"> <img alt="" 
                       src="<?php echo base_url()?>uploads/<?php echo $banks[$i]->image?>"> </a>
                     <div class="media-body" style="font-weight: bold;"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $banks[$i]->id ?>" class="catg_title"> <?= $banks[$i]->title ?></a> 
                      </div>
                    </div>
                  </li>
                
                </ul>
                <?php endfor?>
            </div>
          </div>


         

          <div class="single_post_content">
            <h2><span>أسواق</span></h2>

            <div class="single_post_content_left">
              <?php if(isset($markets[0])): ?>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig">
                          <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $markets[0]->id ?>"  class="featured_img"> 
                            <img alt="" src="<?php echo base_url()?>uploads/<?php echo $markets[0]->image?>"> 
                          </a>
                         <span class="overlay"></span> </a>
                           <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $markets[0]->id ?>" ><figcaption><?= $markets[0]->title ?>  </figcaption></a>
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

                      <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $markets[$i]->id ?>" class="media-left"> <img alt="" 
                       src="<?php echo base_url()?>uploads/<?php echo $markets[$i]->image?>"> </a>
                     <div class="media-body" style="font-weight: bold;"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $markets[$i]->id ?>" class="catg_title"> <?= $markets[$i]->title ?></a> 
                      </div>
                    </div>
                  </li>
                
                </ul>
                <?php endfor?>
            </div>
          </div>

           <div class="single_post_content">
            <h2><span>أحوال الناس</span></h2>

            <div class="single_post_content_left">
              <?php if(isset($Peoplestatus[0])): ?>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig">
                          <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $Peoplestatus[0]->id ?>"  class="featured_img"> 
                            <img alt="" src="<?php echo base_url()?>uploads/<?php echo $Peoplestatus[0]->image?>"> 
                          </a>
                         <span class="overlay"></span> </a>
                           <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $Peoplestatus[0]->id ?>" ><figcaption><?= $Peoplestatus[0]->title ?>  </figcaption></a>
                          <p><?= $Peoplestatus[0]->short_description ?></p>
                    </figure>
                  </li>
                </ul>
            <?php endif;?>
            </div>

            <div class="single_post_content_right">
                <?php for($i=1;$i<count($Peoplestatus);$i++) :?>
                <ul class="spost_nav">
                  <li>

                      <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $Peoplestatus[$i]->id ?>" class="media-left"> <img alt="" 
                       src="<?php echo base_url()?>uploads/<?php echo $Peoplestatus[$i]->image?>"> </a>
                     <div class="media-body" style="font-weight: bold;"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $Peoplestatus[$i]->id ?>" class="catg_title"> <?= $Peoplestatus[$i]->title ?></a> 
                      </div>
                    </div>
                  </li>
                
                </ul>
                <?php endfor?>
            </div>
          </div>

           <div class="single_post_content">
            <h2><span>ضد الفساد</span></h2>

            <div class="single_post_content_left">
              <?php if(isset($aginst[0])): ?>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig">
                          <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $aginst[0]->id ?>"  class="featured_img"> 
                            <img alt="" src="<?php echo base_url()?>uploads/<?php echo $aginst[0]->image?>"> 
                          </a>
                         <span class="overlay"></span> </a>
                           <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $aginst[0]->id ?>" ><figcaption><?= $aginst[0]->title ?>  </figcaption></a>
                          <p><?= $aginst[0]->short_description ?></p>
                    </figure>
                  </li>
                </ul>
            <?php endif;?>
            </div>

            <div class="single_post_content_right">
                <?php for($i=1;$i<count($aginst);$i++) :?>
                <ul class="spost_nav">
                  <li>

                      <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $aginst[$i]->id ?>" class="media-left"> <img alt="" 
                       src="<?php echo base_url()?>uploads/<?php echo $aginst[$i]->image?>"> </a>
                     <div class="media-body" style="font-weight: bold;"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $aginst[$i]->id ?>" class="catg_title"> <?= $aginst[$i]->title ?></a> 
                      </div>
                    </div>
                  </li>
                
                </ul>
                <?php endfor?>
            </div>
          </div>

        



          <div class="single_post_content">
            <h2><span>من العالم</span></h2>


            <div class="single_post_content_left">

            <?php if(isset( $fromworld[0])):?>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig">
                         <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $fromworld[0]->id ?>"  class="featured_img"> <img alt="" 
                        src="<?php echo base_url()?>uploads/<?php echo $fromworld[0]->image?>"> </a>
                   <span class="overlay"></span> </a>
                       <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $fromworld[0]->id ?>" > <figcaption><?= $fromworld[0]->title ?>  </figcaption></a>
                      <p><?= $fromworld[0]->short_description ?></p>
                    </figure>
                  </li>
                </ul>
              <?php endif?>
            </div>
             <div class="single_post_content_right">
                <?php for($i=1;$i<count($fromworld);$i++) :?>
                <ul class="spost_nav">
                  <li>

                      <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $fromworld[$i]->id ?>" class="media-left"> <img alt="" 
                       src="<?php echo base_url()?>uploads/<?php echo $fromworld[$i]->image?>"> </a>
                     <div class="media-body" style="font-weight: bold;"> <a href="<?php echo base_url();?>news/Newsdetails?id=<?=  $fromworld[$i]->id ?>" class="catg_title"> <?= $fromworld[$i]->title ?></a> 
                      </div>
                    </div>
                  </li>
                
                </ul>
                <?php endfor?>
            </div>
         <!-- </div>
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
             
            </ul>-->
       
     