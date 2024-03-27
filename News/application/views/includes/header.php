<!DOCTYPE html>
<html>
<head>
<title>
    <?php if(isset($result->title)):?> 
<?= $result->title; ?>
<?php else:
echo $title;
?>
<?php endif?>
</title>
<?php if(isset($result->title)):?> 
 <meta property="og:url"           content="<?=base_url()?>news/Newsdetails?id=<?= $result->id ?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?= $result->title; ?>" />
  <meta property="og:description"   content="<?= strip_tags($result->short_description); ?>" />
  <meta property="og:image"         content="<?= base_url()?>uploads/<?= $result->image ?>" />
<?php endif?>



<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/css/font.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/css/theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets1/css/style.css">
  
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!--[if lt IE 9]>
<script src="<?php echo base_url()?>assets1/js/html5shiv.min.js"></script>
<script src="<?php echo base_url()?>assets1/js/respond.min.js"></script>

<![endif]-->
<style>
 


.news {
  box-shadow: inset 0 -15px 30px rgba(0,0,0,0.0), 0 5px 10px rgba(0,0,0,0.0);
  width: 100%;
  height: 36px;
  margin: 0px auto;
  overflow: hidden;
  border-radius: 4px;
  padding: 3px;
  -webkit-user-select: none
} 

.news span {
  float: right;
  color: #fff;
  padding: 6px;
  position: relative;
  top: 1%;
  border-radius: 4px;
  box-shadow: inset 0 -15px 30px rgba(0,0,0,0.4);
  font: 16px 'Raleway', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -webkit-user-select: none;
  cursor: pointer
}

.news ul {
  float: right;
  padding-left: 20px;
  animation: ticker 10s cubic-bezier(1, 0, .5, 0) infinite;
  -webkit-user-select: none;
      width:67%;
}

.news ul li {line-height: 30px; list-style: none ; width:100%}

.search-form .form-group {
  float: right !important;
  transition: all 0.35s, border-radius 0s;
  width: 32px;
  height: 32px;
  background-color: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
  border-radius: 25px;
  border: 1px solid #ccc;
}
.search-form .form-group input.form-control {
  padding-right:70px;
  border: 0 none;
  background: transparent;
  box-shadow: none;
  display:block;
}
.search-form .form-group input.form-control::-webkit-input-placeholder {
  display: none;
}
.search-form .form-group input.form-control:-moz-placeholder {
  /* Firefox 18- */
  display: none;
}
.search-form .form-group input.form-control::-moz-placeholder {
  /* Firefox 19+ */
  display: none;
}
.search-form .form-group input.form-control:-ms-input-placeholder {
  display: none;
}
.search-form .form-group:hover,
.search-form .form-group.hover {
  width: 25%;
  border-radius: 4px 25px 25px 4px;
}
.search-form .form-group span.form-control-feedback {
  position: absolute;
  top: -1px;
  right: -2px;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  color: #3596e0;
  left: initial;
  font-size: 14px;
}



/* OTHER COLORS */
.blue { background: #EEE }
.blue span { background: #F00 }

</style>
</head>
<body>
<?php if (isset($x)): ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=327131241093238";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php endif;?>
<div id="preloader">
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header" style="margin-left: -1%;">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">

        

          <div  >



         <ul class="top_nav " style="float: right">
               <li><a href="index.html">أعلن معنا</a></li>
              <li><a href="<?php echo base_url();?>contact">للتواصل معنا</a></li>
              <li><a href="<?php echo base_url();?>about">من نحن</a></li>
              <li><a href="<?php  echo base_url();?>main">الرئيسية</a></li>
            </ul>
             
          </div>
      <div class="help-block">
          
           <div class="help-block" >
                
            <form action="<?php echo base_url(); ?>news/search" method="get" class="search-form">
                <div class="form-group has-feedback">
                <label for="search" class="sr-only">search</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </form> 
        </div>
            <p  ><?php date_default_timezone_set('Asia/Damascus'); echo date("F D, Y, g:i a");?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.html" class="logo"><img src="<?php echo base_url()?>assets1/images/logo.jpg" alt=""></a></div>


          <div class="add_banner">
             <?php foreach($ad_header as $value) :?>
            <a href=" <?= strpos($value->url, 'http') !== false?$value->url:'http://'.$value->url ?>">

   
<img class="mySlides w3-animate-fading" src="<?php echo base_url()?>uploads/<?php echo $value->file?>">
  
  </a>
  <?php  endforeach;?>
</div>


        </div>
      </div>
    </div>
  </header>

  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
       <div id="navbar" class="navbar-collapse collapse" style="float: right">
        <ul class="nav navbar-nav main_nav">

         <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">كاريكاتير اليوم</a>
           
                 
          </li>
         
          <li <?= isset($fromworld_header)?'class="active"':'' ?>><a href="<?php echo base_url()?>fromworld">من العالم</a></li>
          <li <?= isset($against_header)?'class="active"':'' ?>><a href="<?php echo base_url()?>aginst">ضد الفساد</a></li>
          <li <?= isset($peoplestatus_header)?'class="active"':'' ?>><a href="<?php echo base_url()?>peoplestatus">أحوال الناس</a></li>
          <li <?= isset($markets_header)?'class="active"':'' ?>><a href="<?php echo base_url()?>markets">أسواق</a></li>
          <li <?= isset($oil_header)?'class="active"':'' ?>><a href="<?php echo base_url()?>oil">النفط والطاقة</a></li>
          <li <?= isset($banks_header)?'class="active"':'' ?>><a href="<?php echo base_url()?>banks"> مصارف وتأمين</a></li>
          <li <?= isset($local_header)?'class="active"':'' ?>><a href="<?php echo base_url()?>local">محليات</a></li>
          <li <?= isset($home)?'class="active"':'' ?>><a href="<?php echo base_url()?>"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>

        </ul>
          
        
      </div>
    </nav>
  </section>

 
    <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
       <div class="social_area" style="float: left; height: 36px;">
            <ul class="social_nav" style="float: left">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
          

        <div class="social_area" style="float: left; height: 36px;">
            <ul class="social_nav" style="float: left">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        <div class="news blue">
  <span style="height: 30px">الشريط الإخباري</span>
  
  <ul>
      <marquee direction="left">
  <?php foreach($newsarea as $value) :?>
    <li style="display: inline;"><a href="<?php echo base_url() ?>news/NewsDetails?id=<?php echo $value->id ?>"><?php echo $value->title?> </a></li> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

  <?php endforeach; ?>
   
</marquee>
  </ul>
    </div>
       
  <br />
    <?php if(isset($b) && !empty($b)) : ?>
         <div class="news blue" >
        <span>الأخبار العاجلة</span>
        <ul>
<marquee  direction="left">
          <?php foreach($b as $value) :?>
    <li style="display: inline;"><?php echo $value->description?> </a></li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

  <?php endforeach; ?>
</marquee>
       
        </ul>
          
      </div>

     <?php endif ?>

    </div>
        
  </div>
    
  </section>





 


    <br />
    
 
     <section id="contentSection">
    <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="right_content">
          <div class="single_page" style="direction: rtl;">
            <ol class="breadcrumb" style="direction: rtl;">
              <li style="float: right;"><a href=""><?=  $title ;?></a></li>
              <li style="content: " ";" ></li>
            
            </ol>
           
            <nav class="nav-slit">
              <?php if(isset($ad_onSide[0])) :?>
             <a class="prev" > 
              <span class="icon-wrap">
              <i class="fa fa-angle-left"></i>
             </span>
             <div>
       
           <img src="<?php echo base_url()?>uploads/<?php echo $ad_onSide[0]->file?>" onclick='goto("<?php echo $ad_onSide[0]->url ?>")
          'alt=""/> </div>
<!--
          <img src="<?php echo base_url()?>uploads/<?php echo $ad_onSide[0]->file?>" onclick="goto('<?php echo $ad_onSide[1]->url ?>')" alt=""/>-->

           

           </a> 
            <?php endif?>
       <?php if(isset($ad_onSide[1])) :?>
        <a class="next" > 
          <span class="icon-wrap">
            <i class="fa fa-angle-right"></i>
          </span>
        <div>
       
          <img src="<?php echo base_url()?>uploads/<?php echo $ad_onSide[1]->file?>" onclick='goto("<?php echo $ad_onSide[1]->url ?>")
          'alt=""/> </div>
        </a>
 
    <?php endif?>
      </nav>
  <?php if(isset($home))  :?>
  </section>
<?php endif?>
      
<script type="text/javascript">
  function goto(url)
  {
    window.location.href = url;
  }
</script>


<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) { myIndex = 1 }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 9000);
    }
</script>
