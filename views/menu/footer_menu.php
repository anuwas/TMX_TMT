<div class="primary-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h5 class="text-uppercase">Location</h5>
             <?php echo \app\components\AboutUswidget::widget(); ?>
          </div>
          <div class="col-md-3">
            <h5 class="text-uppercase">Quick Links</h5>
            <ul class="f-list">
              <li><a href="<?php echo Yii::$app->homeUrl.'about'?>">About Us</a></li>
              <li><a href="<?php echo Yii::$app->homeUrl.'product'?>">Products</a></li>
              <li><a href="<?php echo Yii::$app->homeUrl.'plant'?>">Plants</a></li>
              <li><a href="<?php echo Yii::$app->homeUrl.'activity'?>">Activities</a></li>
               <li><a href="<?php echo Yii::$app->homeUrl.'career'?>">Career</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5 class="text-uppercase">Quick Contact</h5>
            <form>
              <div class="form-group">
                <input class="form-control" placeholder="Your Name" id="Your_Name" type="text">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Your Email" id="Your_Email" type="text">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Your Phone" id="Your_Phone" type="text">
              </div>
              <div class="form-group">
                <select class="form-control" name="interest" id="interest">
                  <option value="Interest">Interest</option>
                  <option value="Purchase">Purchase</option>
                  <option value="Marketing">Marketing</option>
                  <option value="Career">Career</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="contact_message" placeholder="Your Message"></textarea>
              </div>
              <div class="form-group full-width">
                <button type="button" class="btn btn-small btn-dark-solid sendmail" id="contactSubmitBtnID">Submit</button>
              </div>
            </form>
          </div>
          <div class="col-md-3">
            <h5 class="text-uppercase">Contact Details</h5>
            <ul class="f-list add">
              <li>Post Box. 252,1st Floor, RICBL Building, Phuentsholing: Bhutan</li>
              <li>00975-5-251640, Fax # 00975-5-252909</li>
              <li>00975-17608566 / 17681778 / 17944141 / 17111788</li>
              <li>0740111829 / 9647730030 / 9836772525</li>
              <li>perfecttmx@gmail.com / perfectthermextmt@gmail.com</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="secondary-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6"> <span class="m-top-10">Copyright © PERFECT TMX TMT 2017. All Rights Reserved. </span> </div>
          <div class="col-md-6">
            <div class="social-link circle pull-right"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
    
     <script type="text/javascript">
      $(document).ready(function(){
        $("#contactSubmitBtnID").click(function(){
          var Your_Name=$("#Your_Name").val();
          var Your_Email=$("#Your_Email").val();
          var Your_Phone=$("#Your_Phone").val();
          var interest=$("#interest").val();
          var contact_message=$("#contact_message").val();
          $.ajax({
  		       url: '<?php echo Yii::$app->request->baseUrl. '/contact/sendcontact' ?>',
  		       type: 'post',
  		       data: {
  		    	 Your_Name:Your_Name,
  		    	Your_Email: Your_Email,
  		    	Your_Phone : Your_Phone,
  		    	interest : interest,
  		    	contact_message : contact_message,
  		           _csrf : '<?=Yii::$app->request->getCsrfToken()?>'
  		             },
  		       success: function (data) {
  		       alert('Successfully Send !');
  		       }
  		  });
        })
      })
    </script>