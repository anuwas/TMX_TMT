<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Feedback */
/* @var $form yii\widgets\ActiveForm */
?>
<section class="body-content">
    <div class="page-content">
      <div class="container">
        <div class="row">
       
          <h2>Have a Suggestion/Feedback? Feel free to drop us a line.</h2>
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
          <div class="col-md-10 col-md-offset-1">
            <?php $form = ActiveForm::begin(['options' => ['class' => 'contact-comments' ]]); ?>
              <div class="row">
                <div class="col-md-6 ">
                  <div class="form-group"> 
                    <!-- Name -->
                    <input name="Feedback[name]" id="feedback-name" class=" form-control" placeholder="Name" maxlength="100" required type="text">
                  </div>
                  <div class="form-group"> 
                    <!-- Email -->
                    <input name="Feedback[email]" id="feedback-email" class="form-control" placeholder="Email" maxlength="100" required type="email">
                  </div>
                  <div class="form-group"> 
                    <!-- Subject -->
                    <input name="Feedback[phone]" id="feedback-phone" class="form-control" placeholder="Phone" maxlength="100" type="text">
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="form-group">
                    <select class="form-control" name="Feedback[role]" id="feedback-role">
                      <option>Select</option>
                      <option value="Employee">Employee</option>
                      <option value="Not an Employee">Not an Employee</option>
                    </select>
                  </div>
                  <div class="form-group"> 
                    <!-- Comment -->
                    <textarea name="Feedback[message]" id="feedback-message" class="cmnt-text form-control" placeholder="Comments *" maxlength="400"></textarea>
                  </div>
                  <div class="form-group full-width">
                   <!--<button type="submit" class="btn btn-small btn-dark-solid sendmail"> Send Message </button>-->
                  <input type="submit" class="btn btn-small btn-dark-solid sendmail" value="Send Message" />
                  </div>
                </div>
              </div>
             <?php ActiveForm::end(); ?>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </section>