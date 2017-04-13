  <section class="slider-revolution-wrapper">
    <div class="tp-banner-container">
      <div class="tp-banner">
        <ul>
        
         <?php foreach ($slider as $values){?>
        
          <!-- slide 1 start -->
          <li class="" data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Truly Massive"> <img src="<?php echo Yii::getAlias('@web').'/uploads/'?>slider/<?php echo $values->filename;?>" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption rev-heading lft start back" data-x="center" data-y="150" data-speed="500" data-start="1900" data-easing="Back.easeOut" data-splitin="" data-splitout="" data-elementdelay="0.1" data-endelementdelay="0.1"><?php echo $values->title;?></div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption rev-subheading sfb back" data-x="center" data-y="250" data-speed="300" data-start="2500" data-easing="Back.easeOut" data-splitin="" data-splitout="" data-elementdelay="0.1" data-endelementdelay="0.1"><?php echo $values->content;?></div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption rev-subheading sfl" data-x="290" data-y="330" data-speed="500" data-start="3000" data-easing="Back.easeOut" data-splitin="" data-splitout="" data-elementdelay="0.1" data-endelementdelay="0.1"> </div>
            
            <!-- LAYER NR. 4 -->
            <div class="tp-caption rev-subheading sfr" data-x="490" data-y="330" data-speed="500" data-start="3000" data-easing="Back.easeOut" data-splitin="" data-splitout="" data-elementdelay="0.1" data-endelementdelay="0.1"> </div>
          </li>
          <!-- slide 1 end --> 
           <?php } ?>
          
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
      </div>
    </div>
  </section>
  
  <!--hero section--> 
  
  <!--body content start-->
  <section class="body-content">
    <div class="home-key">
      <div class="featured-box">
        <div class="one-third">
          <div class="featured-item text-center color-1">
            <div class="icon"> <i class="icon-circle-compass"></i> </div>
            <!--<div class="title text-uppercase">
                            <h4>design</h4>
                        </div>-->
            <div class="desc"> PERFECT TMX TMT <br>
              bars are available in customized forms. </div>
          </div>
        </div>
        <div class="one-third">
          <div class="featured-item text-center color-2">
            <div class="icon"> <i class="icon-mobile"></i> </div>
            <!--<div class="title text-uppercase">
                            <h4>Bootstrap</h4>
                        </div>-->
            <div class="desc"> We believe in providing the <br>
              best quality. </div>
          </div>
        </div>
        <div class="one-third">
          <div class="featured-item text-center color-3">
            <div class="icon"> <i class="icon-browser2"></i> </div>
            <!--<div class="title text-uppercase">
                            <h4>clean code</h4>
                        </div>-->
            <div class="desc"> The company also undertakes to <br>
              customize ready-to-lay rebar’s for ease of construction and cost savings. </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--hero video section-->
    <div class="page-content">
      <section class="irt-about-one">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="irt-about-thumb">
                <div class="irt-abtfst-icon flaticon-industrial-robot"></div>
                <img class="img-responsive" src="<?php echo Yii::getAlias('@web').'/web/assets/'?>img/about1.jpg" alt="about1.jpg"> </div>
            </div>
            <div class="col-sm-12 col-md-5 irt-abtonspc">
              <div class="irt-about-ondetials">
              
                <?php echo html_entity_decode($welcome->content_snippet);?>
                
                <div class="irt-abtscnd-icon flaticon-industrial-robot"></div>
                <ul class="list-inline irt-fstabt-lstinln">
                  <li>Expanding <br>
                    Provider</li>
                  <li>Global <br>
                    Certified</li>
                  <li>Award <br>
                    Wining</li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="heading-title-alt text-left heading-border-bottom">
                <h4 class="text-uppercase">latest News</h4>
              </div>
              <div class="panel panel-default">
                <div class="">
                  <ul id="demo3" class="widget-latest-post">
                    <li class="news-item">
                      <div class="thumb"> <a href="#"> <img src="<?php echo Yii::getAlias('@web').'/web/assets/'?>img/post-thumb.jpg" alt=""> </a> </div>
                      <div class="w-desk"> <a href="#">Old Father Getup</a> April 25, 2014 </div>
                    </li>
                    <li class="news-item">
                      <div class="thumb"> <a href="#"> <img src="<?php echo Yii::getAlias('@web').'/web/assets/'?>img/post-thumb.jpg" alt=""> </a> </div>
                      <div class="w-desk"> <a href="#">Old Father Getup</a> April 25, 2014 </div>
                    </li>
                    <li class="news-item">
                      <div class="thumb"> <a href="#"> <img src="<?php echo Yii::getAlias('@web').'/web/assets/'?>img/post-thumb.jpg" alt=""> </a> </div>
                      <div class="w-desk"> <a href="#">Old Father Getup</a> April 25, 2014 </div>
                    </li>
                    <li class="news-item">
                      <div class="thumb"> <a href="#"> <img src="<?php echo Yii::getAlias('@web').'/web/assets/'?>img/post-thumb.jpg" alt=""> </a> </div>
                      <div class="w-desk"> <a href="#">Old Father Getup</a> April 25, 2014 </div>
                    </li>
                    <li class="news-item">
                      <div class="thumb"> <a href="#"> <img src="<?php echo Yii::getAlias('@web').'/web/assets/'?>img/post-thumb.jpg" alt=""> </a> </div>
                      <div class="w-desk"> <a href="#">Old Father Getup</a> April 25, 2014 </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!--blog post-->
    <div class="page-content news-bg">
      <div class="container">
        <div class="row">
          <div class="heading-title text-center">
            <h3 class="text-uppercase"><span class="head1">Our Products</span>
              <hr class="border-bottom">
            </h3>
          </div>
          
          <!--post style 2 start-->
          <div class="post-list" id="portfolio-carousel">
          <?php foreach ($product as $productitem){?>
            <div class="item">
              <div class="post-single">
                <div class="post-img"> <img src="<?php echo Yii::getAlias('@web').'/uploads/'?>product/<?php echo $productitem->filename;?>" alt=""> </div>
                <div class="post-desk text-center border-short-bottom">
                  <div class="news-pic"></div>
                  <h5 class="text-uppercase"><?php echo $productitem->product_title;?></h5>
                  <p><?php echo $productitem->product_heading;?></p>
                  <div class="date"> <a href="<?php echo Yii::$app->homeUrl.'product'?>" class="">Read More</a></div>
                </div>
              </div>
            </div>
             <?php } ?>
          </div>
          <!--post style 2 end--> 
        </div>
      </div>
    </div>
    <!--blog post-->
    
    <div class="page-content gray-bg">
      <div class="container">
        <div class="row"> 
          <!--post style 4 start-->
          <div class="post-list-aside">
            <div class="post-single">
          <?php echo html_entity_decode($marketing_network->content_snippet);?>
            </div>
          </div>
          <!--post style 4 end--> 
        </div>
      </div>
    </div>
    <div class="page-content client-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="heading-title text-center">
              <h3 class="text-uppercase"><span class="head2">Major Clients</span>
                <hr class="border-bottom">
              </h3>
            </div>
            <div id="clients-1">
             <?php foreach ($clientlogo as $logovalue){?>
    <div class="item"> <img src="<?php echo Yii::getAlias('@web').'/uploads/'?>clientlogo/<?php echo $logovalue->filename;?>" alt="Clients"> </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="subscribe-box border-box">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-info">
              <h4>Sign up for<br>
                Latest Update !</h4>
            </div>
            <div class="subscribe-form">
              <form class="form-inline">
                <input class="form-control" placeholder="Your Name" type="text">
                <input class="form-control" placeholder="Your Email" type="email">
                <button type="submit" class="btn btn-medium btn-rounded btn-dark-solid text-uppercase">subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--body content end--> 