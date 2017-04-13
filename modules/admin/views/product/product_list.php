<?php
/* @var $this yii\web\View */
?>

<section role="main" class="content-body">
					<header class="page-header">
						<h2>List of Product</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Product</span></li>
								<li><span>Listing</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="#"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">List of All Product</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
											<a href="<?php echo  Yii::$app->request->baseUrl;?>/admin/product/newproduct" class="btn btn-primary">Add Product <i class="fa fa-plus"></i></a>
										</div>
                                        </div>
                                        
								</div>
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
                                            <th width="20%">Title</th>
                                            <th width="20%">Heading</th>
                                            <th width="20%">Picture</th>
                                            <th width="15%">Action</th>
                                      </tr>
									</thead>
									<tbody>
                                     <?php 
									 foreach ($model as $value) {
									 	
									 ?>
                                     <tr class="odd gradeX">
                      <td><?php echo $value->product_title;?></td>
                         <td><?php echo $value->product_heading;?></td>
   <td align="center" valign="middle"><img alt="" src="<?php echo Yii::getAlias('@web').'/uploads/product/'.$value->filename;?>" width="40%"></td>                   	
                                <td>
                                <a href="<?php echo Yii::$app->homeUrl.'admin/product/update?id='.$value->product_id;?>">EDIT</a>
                                &nbsp;|&nbsp;
                                <a href="<?php echo Yii::$app->homeUrl.'admin/product/productdlete?id='.$value->product_id;?>" onClick="return confirm('Are you sure you want to delete?');">DELETE</a>
                                </td>
                                      </tr>
                                    <?php
									 }
									 ?>
                                    </tbody>
                                    
								</table>
								
								
							</div>
						</section>
						
					<!-- end: page -->
				</section>