				<?php
/* @var $this yii\web\View */
?>
                <section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
                      <div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
							<a class="sidebar-right-toggle" data-open="#"></i></a>
						</div>
					</header>
					<!-- start: page -->
                    <!-- User Profile Start -->
						<section class="panel">
							<header class="panel-heading">
							<h2 class="panel-title">Current User</h2>
							</header>
							<div class="panel-body">
								
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
									  <tr>
                                        <th width="30%">User Name</th>
                                        <th width="30%">User Email</th>
                                      
                                      </tr>
									</thead>
									<tbody>

										 <?php 
									 foreach ($model as $value) {
									 ?>

                                <tr class="odd gradeX">
                                    <td><?php echo $value->siteuser_name;?></td>
                                    <td><?php echo $value->siteuser_email;?></td>
                                   
                                </tr>
                                <?php } ?>
                                 </tbody>
								</table>
								<div class="row">
								 <div class="col-sm-6">
								<!--<div class="lb-ld"><a href="#">VIEW ALL</a></div>-->
                                    </div>
								</div>
							</div>
						</section>
				    <!-- User Profile END -->
                       