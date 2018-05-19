
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/ace-extra.min.js"></script>
<link rel="stylesheet" href="font-awesome/4.5.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/select2.min.css" />
<link rel="stylesheet" href="css/fonts.googleapis.com.css" />
<link rel="stylesheet" href="css/ace.min.css" />
<link rel="stylesheet" href="css/ace-skins.min.css" />
<link rel="stylesheet" href="css/ace-rtl.min.css" />
<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\URL;

?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="main-content">
    				<div class="main-content-inner">
    					<div class="page-content">
    						<div class="row">
    							<div class="col-xs-12">
    								<!-- PAGE CONTENT BEGINS -->
    								<div class="widget-box">
    									<div class="widget-header widget-header-blue widget-header-flat">
    										<h4 class="widget-title lighter">CheckPoints</h4>
    									</div>
    									<div class="widget-body">
    										<div class="widget-main">
    											<div id="fuelux-wizard-container">
    												<div>
    													<ul class="steps">
                                                            <li data-step="1" class="active">
    															<span class="step">1</span>
    															<span class="title">CheckPoint</span>
    														</li>
    														<li data-step="2" class="active">
    															<span class="step">2</span>
    															<span class="title">CheckPoint</span>
    														</li>

    														<li data-step="3">
    															<span class="step">3</span>
    															<span class="title">CheckPoint</span>
    														</li>

    														<li data-step="4">
    															<span class="step">4</span>
    															<span class="title">CheckPoint</span>
    														</li>

    														<li data-step="5">
    															<span class="step">5</span>
    															<span class="title">CheckPoint</span>
    														</li>
    													</ul>
    												</div>
    												<hr />
    										<div class="step-content pos-rel">
                                            <div class="step-pane" data-step="1">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-top" for="duallist" style="color:blue">  MANAGMENT (BUSINESS) </label>

                										<div class="col-sm-12">
                                                            <div class="hr hr-2 hr-dotted"></div>
                											<div class="bootstrap-duallistbox-container row moveonselect">
                                                                 <div class="box1 col-md-6">
                                                                      <span class="info-container">
                                                                           <span class="info">FeildInputName_1</span>
                                                                         </span>
                                                                          <input class="filter form-control" type="text" placeholder="...">
                                                                     </div>
                                                                 <div class="box2 col-md-6">
                                                                     <span class="info-container">
                                                                     <span class="info">FeildInputName_2</span>
                                                                 </span>   <input class="filter form-control" type="text" placeholder="...">
                                                                     </div>
                                                                     </div>
                										</div>
                								</div>
                                                <div class="form-group">
                    										<div class="col-sm-12">
                    											<div class="bootstrap-duallistbox-container row moveonselect">
                                                                     <div class="box1 col-md-6">
                                                                          <span class="info-container">
                                                                               <span class="info">FeildInputName_3</span>
                                                                             </span>
                                                                              <input class="filter form-control"  type="text" placeholder="...">
                                                                         </div>
                                                                     <div class="box2 col-md-6">
                                                                         <span class="info-container">
                                                                         <span class="info">FeildInputName_4</span>
                                                                     </span>   <input class="filter form-control" type="text" placeholder="...">
                                                                         </div>
                                                                         </div>
                    									</div>
                    							</div>
                                                <div class="form-group">
                        										<div class="col-sm-12">
                        											<div class="bootstrap-duallistbox-container row moveonselect">
                                                                         <div class="box1 col-md-6">
                                                                              <span class="info-container">
                                                                                   <span class="info">FeildInputName_5</span>
                                                                                 </span>
                                                                                  <input class="filter form-control"  type="text" placeholder="...">
                                                                             </div>
                                                                         <div class="box2 col-md-6">
                                                                             <span class="info-container">
                                                                             <span class="info">FeildInputName_6</span>
                                                                         </span>   <input class="filter form-control" type="text" placeholder="...">
                                                                             </div>
                                                                             <div ></div>
                                                                             </div>
                        										</div>
                        							</div>
                                                    <div class="form-group">
                                                                <label class="col-sm-3 control-label no-padding-top" for="duallist" style="margin-top: 10px; color:blue"> PROGRAMMING </label>
                            										<div class="col-sm-12">
                                                                        <div class="hr hr-2 hr-dotted"></div>
                            											<div class="bootstrap-duallistbox-container row moveonselect">
                                                                             <div class="box1 col-md-6">
                                                                                  <span class="info-container">
                                                                                       <span class="info">FeildInputName_7</span>
                                                                                     </span>
                                                                                      <input class="filter form-control"  type="text" placeholder="...">
                                                                                 </div>
                                                                             <div class="box2 col-md-6">
                                                                                 <span class="info-container">
                                                                                 <span class="info">FeildInputName_8</span>
                                                                             </span>   <input class="filter form-control" type="text" placeholder="...">
                                                                                 </div>
                                                                                 </div>
                            										</div>
                            							</div>
                                                        <div class="form-group">
                                										<div class="col-sm-12">
                                											<div class="bootstrap-duallistbox-container row moveonselect">
                                                                                 <div class="box1 col-md-6">
                                                                                      <span class="info-container">
                                                                                           <span class="info">FeildInputName_9</span>
                                                                                         </span>
                                                                                          <input class="filter form-control"  type="text" placeholder="...">
                                                                                     </div>
                                                                                 <div class="box2 col-md-6">
                                                                                     <span class="info-container">
                                                                                     <span class="info">FeildInputName_10</span>
                                                                                 </span>   <input class="filter form-control" type="text" placeholder="...">
                                                                                     </div>
                                                                                     </div>
                                										   </div>
                                							</div>
                                                            <div class="form-group">
                                    										<div class="col-sm-12">
                                    											<div class="bootstrap-duallistbox-container row moveonselect">
                                                                                     <div class="box1 col-md-6">
                                                                                          <span class="info-container">
                                                                                               <span class="info">FeildInputName_11</span>
                                                                                             </span>
                                                                                              <input class="filter form-control"  type="text" placeholder="...">
                                                                                         </div>
                                                                                     <div class="box2 col-md-6">
                                                                                         <span class="info-container">
                                                                                         <span class="info">FeildInputName_12</span>
                                                                                     </span>   <input class="filter form-control" type="text" placeholder="...">
                                                                                         </div>
                                                                                         </div>
                                    										</div>
                                    							</div>
                                                                <div class="form-group">
                                                                            <label class="col-sm-3 control-label no-padding-top" for="duallist" style="margin-top: 10px; color:blue"> DESIGN </label>
                                        										<div class="col-sm-12">
                                                                                    <div class="hr hr-2 hr-dotted"></div>
                                        											<div class="bootstrap-duallistbox-container row moveonselect">
                                                                                         <div class="box1 col-md-6">
                                                                                              <span class="info-container">
                                                                                                   <span class="info">FeildInputName_13</span>
                                                                                                 </span>
                                                                                                  <input class="filter form-control"  type="text" placeholder="...">
                                                                                             </div>
                                                                                         <div class="box2 col-md-6">
                                                                                             <span class="info-container">
                                                                                             <span class="info">FeildInputName_14</span>
                                                                                         </span>   <input class="filter form-control" type="text" placeholder="...">
                                                                                             </div>
                                                                                             </div>
                                        										</div>
                                        							</div>
                                                                    <div class="form-group">
                                            										<div class="col-sm-12">
                                            											<div class="bootstrap-duallistbox-container row moveonselect">
                                                                                             <div class="box1 col-md-6">
                                                                                                  <span class="info-container">
                                                                                                       <span class="info">FeildInputName_15</span>
                                                                                                     </span>
                                                                                                      <input class="filter form-control"  type="text" placeholder="...">
                                                                                                 </div>
                                                                                             <div class="box2 col-md-6">
                                                                                                 <span class="info-container">
                                                                                                 <span class="info">FeildInputName_16</span>
                                                                                             </span>   <input class="filter form-control" type="text" placeholder="...">
                                                                                                 </div>
                                                                                                 </div>
                                            										</div>
                                            							</div>
                                                        </div>
                                                        <div class="step-pane active" data-step="2">
    														<h3 class="lighter block green">Please Enter information</h3>

    														<form class="form-horizontal" id="sample-form">
    															<div class="form-group has-warning">
    																<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with warning</label>

    																<div class="col-xs-12 col-sm-5">
    																	<span class="block input-icon input-icon-right">
    																		<input type="text" id="inputWarning" class="width-100" />
    																		<i class="ace-icon fa fa-leaf"></i>
    																	</span>
    																</div>
    																<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
    															</div>

    															<div class="form-group has-error">
    																<label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Input with error</label>

    																<div class="col-xs-12 col-sm-5">
    																	<span class="block input-icon input-icon-right">
    																		<input type="text" id="inputError" class="width-100" />
    																		<i class="ace-icon fa fa-times-circle"></i>
    																	</span>
    																</div>
    																<div class="help-block col-xs-12 col-sm-reset inline"> Error tip help! </div>
    															</div>

    															<div class="form-group has-success">
    																<label for="inputSuccess" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with success</label>

    																<div class="col-xs-12 col-sm-5">
    																	<span class="block input-icon input-icon-right">
    																		<input type="text" id="inputSuccess" class="width-100" />
    																		<i class="ace-icon fa fa-check-circle"></i>
    																	</span>
    																</div>
    																<div class="help-block col-xs-12 col-sm-reset inline"> Success tip help! </div>
    															</div>

    															<div class="form-group has-info">
    																<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with info</label>

    																<div class="col-xs-12 col-sm-5">
    																	<span class="block input-icon input-icon-right">
    																		<input type="text" id="inputInfo" class="width-100" />
    																		<i class="ace-icon fa fa-info-circle"></i>
    																	</span>
    																</div>
    																<div class="help-block col-xs-12 col-sm-reset inline"> Info tip help! </div>
    															</div>

    															<div class="form-group">
    																<label for="inputError2" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with error</label>

    																<div class="col-xs-12 col-sm-5">
    																	<span class="input-icon block">
    																		<input type="text" id="inputError2" class="width-100" />
    																		<i class="ace-icon fa fa-times-circle red"></i>
    																	</span>
    																</div>
    																<div class="help-block col-xs-12 col-sm-reset inline"> Error tip help! </div>
    															</div>
    														</form>

    														<form class="form-horizontal hide" id="validation-form" method="get">
    															<div class="form-group">
    																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email Address:</label>

    																<div class="col-xs-12 col-sm-9">
    																	<div class="clearfix">
    																		<input type="email" name="email" id="email" class="col-xs-12 col-sm-6" />
    																	</div>
    																</div>
    															</div>

    															<div class="space-2"></div>

    															<div class="form-group">
    																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">Password:</label>

    																<div class="col-xs-12 col-sm-9">
    																	<div class="clearfix">
    																		<input type="password" name="password" id="password" class="col-xs-12 col-sm-4" />
    																	</div>
    																</div>
    															</div>

    															<div class="space-2"></div>

    															<div class="form-group">
    																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">Confirm Password:</label>

    																<div class="col-xs-12 col-sm-9">
    																	<div class="clearfix">
    																		<input type="password" name="password2" id="password2" class="col-xs-12 col-sm-4" />
    																	</div>
    																</div>
    															</div>

    															<div class="hr hr-dotted"></div>

    															<div class="form-group">
    																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Company Name:</label>

    																<div class="col-xs-12 col-sm-9">
    																	<div class="clearfix">
    																		<input type="text" id="name" name="name" class="col-xs-12 col-sm-5" />
    																	</div>
    																</div>
    															</div>

    															<div class="space-2"></div>

    															<div class="form-group">
    																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Phone Number:</label>

    																<div class="col-xs-12 col-sm-9">
    																	<div class="input-group">
    																		<span class="input-group-addon">
    																			<i class="ace-icon fa fa-phone"></i>
    																		</span>

    																		<input type="tel" id="phone" name="phone" />
    																	</div>
    																</div>
    															</div>

    															<div class="space-2"></div>

    															<div class="form-group">
    																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="url">Company URL:</label>

    																<div class="col-xs-12 col-sm-9">
    																	<div class="clearfix">
    																		<input type="url" id="url" name="url" class="col-xs-12 col-sm-8" />
    																	</div>
    																</div>
    															</div>

    															<div class="hr hr-dotted"></div>

    															<div class="form-group">
    																<label class="control-label col-xs-12 col-sm-3 no-padding-right">Subscribe to</label>

    																<div class="col-xs-12 col-sm-9">
    																	<div>
    																		<label>
    																			<input name="subscription" value="1" type="checkbox" class="ace" />
    																			<span class="lbl"> Latest news and announcements</span>
    																		</label>
    																	</div>

    																	<div>
    																		<label>
    																			<input name="subscription" value="2" type="checkbox" class="ace" />
    																			<span class="lbl"> Product offers and discounts</span>
    																		</label>
    																	</div>
    																</div>
    															</div>

    															<div class="space-2"></div>

    															<div class="form-group">
    																<label class="control-label col-xs-12 col-sm-3 no-padding-right">Gender</label>

    																<div class="col-xs-12 col-sm-9">
    																	<div>
    																		<label class="line-height-1 blue">
    																			<input name="gender" value="1" type="radio" class="ace" />
    																			<span class="lbl"> Male</span>
    																		</label>
    																	</div>

    																	<div>
    																		<label class="line-height-1 blue">
    																			<input name="gender" value="2" type="radio" class="ace" />
    																			<span class="lbl"> Female</span>
    																		</label>
    																	</div>
    																</div>
    															</div>

    															<div class="hr hr-dotted"></div>

    															<div class="form-group">
    																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state">State</label>

    															</div>

    															<div class="space-2"></div>

    															<div class="form-group">
    																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="platform">Platform</label>

    															</div>

    															<div class="space-2"></div>

    															<div class="form-group">
    																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Comment</label>

    																<div class="col-xs-12 col-sm-9">
    																	<div class="clearfix">
    																		<textarea class="input-xlarge" name="comment" id="comment"></textarea>
    																	</div>
    																</div>
    															</div>

    															<div class="space-8"></div>

    															<div class="form-group">
    																<div class="col-xs-12 col-sm-4 col-sm-offset-3">
    																	<label>
    																		<input name="agree" id="agree" type="checkbox" class="ace" />
    																		<span class="lbl"> I accept the policy</span>
    																	</label>
    																</div>
    															</div>
    														</form>
    													</div>

    													<div class="step-pane" data-step="3">
    														<div>
    															<div class="alert alert-success">
    																<button type="button" class="close" data-dismiss="alert">
    																	<i class="ace-icon fa fa-times"></i>
    																</button>

    																<strong>
    																	<i class="ace-icon fa fa-check"></i>
    																	Well done!
    																</strong>

    																You successfully read this important alert message.
    																<br />
    															</div>

    															<div class="alert alert-danger">
    																<button type="button" class="close" data-dismiss="alert">
    																	<i class="ace-icon fa fa-times"></i>
    																</button>

    																<strong>
    																	<i class="ace-icon fa fa-times"></i>
    																	Oh snap!
    																</strong>

    																Change a few things up and try submitting again.
    																<br />
    															</div>

    															<div class="alert alert-warning">
    																<button type="button" class="close" data-dismiss="alert">
    																	<i class="ace-icon fa fa-times"></i>
    																</button>
    																<strong>Warning!</strong>

    																Best check yo self, you're not looking too good.
    																<br />
    															</div>

    															<div class="alert alert-info">
    																<button type="button" class="close" data-dismiss="alert">
    																	<i class="ace-icon fa fa-times"></i>
    																</button>
    																<strong>Heads up!</strong>

    																This alert needs your attention, but it's not super important.
    																<br />
    															</div>
    														</div>
    													</div>

    													<div class="step-pane" data-step="4">
    														<div class="center">
    															<h3 class="blue lighter">This is step 3</h3>
    														</div>
    													</div>

    													<div class="step-pane" data-step="5">
    														<div class="center">
    															<h3 class="green">Congrats!</h3>
    															Your product is ready to ship! Click finish to continue!
    														</div>
    													</div>
    												</div>
    											</div>


    											<div class="wizard-actions" style="margin-top: 350px;">
    												<button class="btn btn-prev">
    													<i class="ace-icon fa fa-arrow-left"></i>
    													Prev
    												</button>

    												<button class="btn btn-success btn-next" data-last="Finish">
    													Next
    													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
    												</button>
    											</div>
    										</div><!-- /.widget-main -->
    									</div><!-- /.widget-body -->
    								</div>

    								<div id="modal-wizard" class="modal">
    									<div class="modal-dialog">
    										<div class="modal-content">
    											<div id="modal-wizard-container">
    												<div class="modal-header">
    													<ul class="steps">
    														<li data-step="1" class="active">
    															<span class="step">1</span>
    															<span class="title">Validation states</span>
    														</li>

    														<li data-step="2">
    															<span class="step">2</span>
    															<span class="title">Alerts</span>
    														</li>

    														<li data-step="3">
    															<span class="step">3</span>
    															<span class="title">Payment Info</span>
    														</li>

    														<li data-step="4">
    															<span class="step">4</span>
    															<span class="title">Other Info</span>
    														</li>
    													</ul>
    												</div>

    												<div class="modal-body step-content">
    													<div class="step-pane active" data-step="1">
    														<div class="center">
    															<h4 class="blue">Step 1</h4>
    														</div>
    													</div>

    													<div class="step-pane" data-step="2">
    														<div class="center">
    															<h4 class="blue">Step 2</h4>
    														</div>
    													</div>

    													<div class="step-pane" data-step="3">
    														<div class="center">
    															<h4 class="blue">Step 3</h4>
    														</div>
    													</div>

    													<div class="step-pane" data-step="4">
    														<div class="center">
    															<h4 class="blue">Step 4</h4>
    														</div>
    													</div>
    												</div>
    											</div>

    											<div class="modal-footer wizard-actions">
    												<button class="btn btn-sm btn-prev">
    													<i class="ace-icon fa fa-arrow-left"></i>
    													Prev
    												</button>

    												<button class="btn btn-success btn-sm btn-next" data-last="Finish">
    													Next
    													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
    												</button>

    												<button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
    													<i class="ace-icon fa fa-times"></i>
    													Cancel
    												</button>
    											</div>
    										</div>
    									</div>
    								</div><!-- PAGE CONTENT ENDS -->
    							</div><!-- /.col -->
    						</div><!-- /.row -->
    					</div><!-- /.page-content -->
    				</div>
    			</div><!-- /.main-content -->
</div>
<script type="text/javascript">
if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wizard.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery-additional-methods.min.js"></script>
<script src="js/bootbox.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/select2.min.js"></script>
	<!-- ace scripts -->
<script src="js/ace-elements.min.js"></script>
<script src="js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
<script type="text/javascript">
			jQuery(function($) {

				$('[data-rel=tooltip]').tooltip();

				$('.select2').css('width','200px').select2({allowClear:true})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				});


				var $validation = false;
				$('#fuelux-wizard-container')
				.ace_wizard({
					//step: 2 //optional argument. wizard will jump to step "2" at first
					//buttons: '.wizard-actions:eq(0)'
				})
				.on('actionclicked.fu.wizard' , function(e, info){
					if(info.step == 1 && $validation) {
						if(!$('#validation-form').valid()) e.preventDefault();
					}
				})
				//.on('changed.fu.wizard', function() {
				//})
				.on('finished.fu.wizard', function(e) {
					bootbox.dialog({
						message: "Thank you! Your information was successfully saved!",
						buttons: {
							"success" : {
								"label" : "OK",
								"className" : "btn-sm btn-primary"
							}
						}
					});
				}).on('stepclick.fu.wizard', function(e){
					//e.preventDefault();//this will prevent clicking and selecting steps
				});


				//jump to a step
				/**
				var wizard = $('#fuelux-wizard-container').data('fu.wizard')
				wizard.currentStep = 3;
				wizard.setState();
				*/

				//determine selected step
				//wizard.selectedItem().step



				//hide or show the other form which requires validation
				//this is for demo only, you usullay want just one form in your application
				$('#skip-validation').removeAttr('checked').on('click', function(){
					$validation = this.checked;
					if(this.checked) {
						$('#sample-form').hide();
						$('#validation-form').removeClass('hide');
					}
					else {
						$('#validation-form').addClass('hide');
						$('#sample-form').show();
					}
				})



				//documentation : http://docs.jquery.com/Plugins/Validation/validate


				$.mask.definitions['~']='[+-]';
				$('#phone').mask('(999) 999-9999');

				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");

				$('#validation-form').validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: false,
					ignore: "",
					rules: {
						email: {
							required: true,
							email:true
						},
						password: {
							required: true,
							minlength: 5
						},
						password2: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						name: {
							required: true
						},
						phone: {
							required: true,
							phone: 'required'
						},
						url: {
							required: true,
							url: true
						},
						comment: {
							required: true
						},
						state: {
							required: true
						},
						platform: {
							required: true
						},
						subscription: {
							required: true
						},
						gender: {
							required: true,
						},
						agree: {
							required: true,
						}
					},

					messages: {
						email: {
							required: "Please provide a valid email.",
							email: "Please provide a valid email."
						},
						password: {
							required: "Please specify a password.",
							minlength: "Please specify a secure password."
						},
						state: "Please choose state",
						subscription: "Please choose at least one option",
						gender: "Please choose gender",
						agree: "Please accept our policy"
					},


					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},

					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},

					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},

					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});




				$('#modal-wizard-container').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');


				/**
				$('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
					$(this).closest('form').validate().element($(this));
				});

				$('#mychosen').chosen().on('change', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				*/


				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					$('[class*=select2]').remove();
				});
			})
		</script>
