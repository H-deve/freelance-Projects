
<style type="text/css">
	.single_page_content p{
		text-align: right;
	}
</style>

 <h1 style="text-align: center;"><?= $result->title ?>
 
 </h1>
  
<div class="post_commentbox"> <span><i class="fa fa-calendar"></i><?= $result->NewsDate ?></span> <a href="#"><i class="fa fa-tags"></i>Technology</a>
     <div class="fb-share-button" 
    data-href="<?=base_url()?>News/Newsdetails?id=<?= $result->id ?>" 
    data-layout="button_count">
  </div>
</div>
<div class="single_page_content"> <img class="img-center" 
        src="<?= base_url()?>uploads/<?= $result->image ?>" alt=""/>
  <p style="text-align: right;"><?= $result->long_description ?></p>

  </div>

  <br>
  <div class="related_post">
              <h2>خبار ذات صلة  <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">
                  <?php foreach($related as $value):?>
                <li class="pull-right">
                  <div class="media"> <a class="media-left" href="<?php echo base_url();?>News/Newsdetails?id=<?= $value->id ?>"> 
                      <img src="<?php echo base_url()?>uploads/<?php echo $value->image?>" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="<?php echo base_url();?>News/Newsdetails?id=<?= $value->id ?>"> <?php echo $value->title ?></a> </div>
                  </div>
                </li>
                <?php endforeach?>
              
              </ul>
            </div>
   
  <div class="fb-comments" data-href="<?=base_url()?>News/Newsdetails?id=<?= $result->id ?>" data-numposts="5"></div>