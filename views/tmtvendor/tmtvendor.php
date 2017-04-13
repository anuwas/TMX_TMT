<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tmtvendor */
/* @var $form yii\widgets\ActiveForm */
?>
<!--body content start-->
  <section class="body-content">
    <div class="page-content">
      <div class="container">
        <div class="row">
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
                    <!-- Subject -->
                    <input name="Tmtvendor[firmname]" id="tmtvendor-firmname" class=" form-control" placeholder="Firm Name *" required maxlength="100" type="text">
                  </div>
                  <div class="form-group"> 
                    <!-- Name -->
                    <input name="Tmtvendor[name]" id="tmtvendor-name" class=" form-control" placeholder="Name *" maxlength="100" required type="text">
                  </div>
                   <div class="form-group"> 
                    <!-- Subject -->
                    <input name="Tmtvendor[phone]" id="tmtvendor-phone" class=" form-control" placeholder="Phone *" required maxlength="100" type="text">
                  </div>
                  
                  <div class="form-group"> 
                    <!-- Email -->
                    <input name="Tmtvendor[email]" id="tmtvendor-email" class=" form-control" placeholder="Email" maxlength="100"  type="email">
                  </div>
                  
                </div>
                <div class="col-md-6 form-group">
                
                <div class="form-group"> 
                    <!-- Subject -->
                    <input name="Tmtvendor[website]" id="tmtvendor-website" class=" form-control" placeholder="Website"  maxlength="100" type="text">
                  </div>
                  
                  <div class="form-group"> 
                    <!-- Subject -->
                    <input name="Tmtvendor[business_type]" id="tmtvendor-business_type" class=" form-control" placeholder="Business Type *" required maxlength="100" type="text">
                  </div>
                  <div class="form-group"> 
                    <!-- Comment -->
                    <textarea name="Tmtvendor[comment]" id="tmtvendor-comment" class="cmnt-text form-control" placeholder="Address" maxlength="400"></textarea>
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
  <!--body content end--> 