<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contact */
/* @var $form yii\widgets\ActiveForm */
?>
 
  
  <!--body content start-->
  <section class="body-content">
    <div class="page-content">
      <div class="container">
        <div class="heading-title-alt border-short-bottom text-center ">
          <h3 class="text-uppercase">feel free to drop us a line</h3>
        </div>
        <div class="row page-content">
          <div class="col-md-4">
            <div class="featured-item text-center">
              <div class="icon"> <i class="icon-map"></i> </div>
              <div class="title text-uppercase">
                <h4>Purchase</h4>
              </div>
              <div class="">
                <p>Mr. Jigme Tenzin (GM), Mobile: 17110197<br>
                  Mr. Kaka Tshering (AGM), Mobile: 17658422</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="featured-item text-center">
              <div class="icon"> <i class="icon-mobile"></i> </div>
              <div class="title text-uppercase">
                <h4>Marketing</h4>
              </div>
              <div class="">
                <p>Office, Phone: 0097505 253484<br>
                  Mr. Tashi Waaqti (TAC), Mobile: 17608566<br>
                  Mr. Nadeem (GM), Mobile: 17487034<br>
                  Mr. Yenten Thiner (DR MGR), Mobile: 17681778</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="featured-item text-center">
              <div class="icon"> <i class="icon-envelope"></i> </div>
              <div class="title text-uppercase">
                <h4>Career</h4>
              </div>
              <div class="">
                <p>Mrs. Hema Gurung (HR)<br>
                  Mobile: 77191086</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
         
            <div class="col-md-4">
              <h4 class="text-uppercase">BHUTAN ROLLING MILLS LIMITED</h4>
              <address>
              <p>Post Box. 252,1st Floor, RICBL Building,<br>
                Phuentsholing: Bhutan</p>
              <p>perfecttmx@gmail.com / perfectthermextmt@gmail.com</p>
              </address>
            </div> 
            
             <div style="color: red">
              <?php 
              if (isset($_REQUEST['status'])){
              	if($_REQUEST['status']=="success"){
              		echo 'Successfully Send';
              	}else{
              		echo 'Not Send, Please try again';
              	}
              }?>
</div>
			<?php $form = ActiveForm::begin(['options' => ['class' => 'contact-comments' ]]); ?>
            <div class="col-md-8">
              <div class="col-md-6">
                <div class="form-group"> 
                  <!-- Name -->
                  <input type="text" name="Contact[contact_name]" id="contact-contact_name" class="form-control" placeholder="Name *" maxlength="100" required>
                </div>
                <div class="form-group"> 
                  <!-- Subject -->
                  <input type="text" name="Contact[subject]"  id="contact-subject" class="form-control" placeholder="Phone" maxlength="100">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group"> 
                  <!-- Email -->
                  <input type="email" name="Contact[email]" id="contact-email" class="form-control" placeholder="Email *" maxlength="100" required>
                </div>
                <div class="form-group"> 
                  <!-- Subject -->
                  <input type="text" name="Contact[phone]" class="form-control" placeholder="Subject" maxlength="100">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group"> 
                  <!-- Comment -->
                  <textarea name="Contact[message]" id="contact-message" class="cmnt-text form-control" placeholder="Comments" maxlength="400"></textarea>
                </div>
                <div class="form-group">
                  <!--<button type="submit" class="btn btn-small btn-dark-solid sendmail"> Send Message </button>-->
                  <input type="submit" class="btn btn-small btn-dark-solid sendmail" value="Send Message" />
                </div>
              </div>
            </div>
          <?php ActiveForm::end(); ?>
        </div>
      </div>
    </div>
    
    <!-- Google Map start-->
    <div id='grey-map'>
    <iframe class="f-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28474.882048696953!2d89.39379300000002!3d26.860293!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e3cb2f8020e499%3A0x864c9045669d2d1d!2sPhuentsholing%2C+Bhutan!5e0!3m2!1sen!2sus!4v1491751211146" allowfullscreen="" frameborder="0"></iframe>
    </div>
    <!--  Google Map End--> 
  </section>
  <!--body content end--> 