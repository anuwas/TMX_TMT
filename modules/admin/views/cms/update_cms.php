<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use sadovojav\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Notice */
/* @var $form yii\widgets\ActiveForm */
?>
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Update Page</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="dashboard.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Forms</span></li>
								<li><span>Banner</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					
					<!-- start: page -->
					<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
											<a href="<?php echo  Yii::$app->request->baseUrl;?>/admin/cms" class="btn btn-primary">List of Pages</a>
										</div>
                                        </div>
                                        
								</div>
					<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Update Page Content</h2>
							</header>			
					<div class="row">
						
						<div class="col-md-12">
						<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data','class' => 'form-horizontal']]); ?>
	               
								<section class="panel">
									<input name="cid" type="hidden" value="">
									<div class="panel-body">
                                    
                                    
										<div class="form-group">
											<label class="col-sm-2 control-label">Page Name<span class="required">*</span></label>
											<div class="col-sm-8">
											<input type="text" id="cms-page_name" class="form-control" name="Cms[page_name]" maxlength="200" aria-required="true" aria-invalid="true"  value="<?php echo $model->page_name;?>">
    
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-sm-2 control-label">Title<span class="required">*</span></label>
											<div class="col-sm-8">
											<input type="text" id="cms-page_title" class="form-control" name="Cms[page_title]" maxlength="200" aria-required="true" aria-invalid="true" value="<?php echo $model->page_title;?>">
    
											</div>
										</div>
										
  							<div class="form-group">
									<label class="col-sm-2 control-label">Page Content<span class="required">*</span></label>
											<div class="col-sm-10">
												<?php echo $form->field($model, 'page_content',['template' => '<div class=\"\" style="margin-left: 15px; ">{input}</div>'])->widget(CKEditor::className(),['editorOptions'=>['width' => '95%','height' => 500]]);?>
												
											</div>
										</div>
										
										<div class="form-group">
									<label class="col-sm-2 control-label">Content Snippet<span class="required">*</span></label>
											<div class="col-sm-10">
												<?php //echo $form->field($model, 'content_snippet',['template' => '<div class=\"\" style="margin-left: 15px; ">{input}</div>'])->widget(CKEditor::className(),['editorOptions'=>['width' => '95%']]);?>
												<?php echo $form->field($model, 'content_snippet',['template' => '<div class=\"\" style="margin-left: 15px; ">{input}</div>'])->widget(CKEditor::className(), [
    
    'editorOptions' => [
        'toolbar' => [
            ['Source', 'NewPage', 'Preview', 'Viewss'],
            ['PasteText', '-', 'Undo', 'Redo'],
            ['Replace', 'SelectAll', 'Scayt'],
            ['Format', 'FontSize'],
            ['Bold', 'Italic', 'Underline', 'TextColor', 'StrikeThrough', '-', 'Outdent', 'Indent', 'RemoveFormat',
                'Blockquote', 'HorizontalRule'],
            ['NumberedList', 'BulletedList', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight',
                'JustifyBlock'],
            ['Image', 'oembed', 'Video', 'Iframe'],
            ['Link', 'Unlink'],
            ['Maximize', 'ShowBlocks'],
            ['test']
        ],
        'allowedContent' => true,
        'forcePasteAsPlainText' => true,
        'language' => Yii::$app->language
        
    ],
]);
												?>
											</div>
										</div>

										
										<div class="form-group">
											<label class="col-sm-2 control-label">Status<span class="required">*</span></label>
											<div class="col-sm-10">
                                            
                                            <label class="radio-inline">
                                            <input type="radio" id="cms-active"  name="Cms[active]" value="1" checked="checked">Active
                                            </label>
                                            <label class="radio-inline">
                                            <input type="radio" id="cms-active"  name="Cms[active]"  value="0">Inactive
                                            </label>
											</div>
										</div>
										
										
                                       <div class="col-sm-9 col-sm-offset-2">
												<button class="btn btn-primary">Submit</button>
												<!-- <input name="submit" id="submit" value="Submit" type="submit" class="btn btn-primary"> -->
												
												<a href="<?php echo  Yii::$app->request->baseUrl;?>/admin/cms" class="btn btn-primary">Cancel</a>
											</div>
									</div>
									
								</section>
							<?php ActiveForm::end(); ?>
						</div>
						<!-- col-md-6 -->
						
					</div>
					<div class="row">
						
						
					</div>
					<!-- end: page -->
				</section>
					
					