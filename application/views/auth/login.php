<body class="login-layout light-login">
	<div class="main-container">
		<div class="main-content">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="login-container">
						<div class="center">
							<h1>
								<i class="ace-icon fa fa-cogs"></i>
								<span class="red">Simple Login</span> 
							</h1>
						</div>

						<div class="space-6"></div>

						<div class="position-relative">
							<div id="login-box" class="login-box visible widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header blue lighter bigger">
											<i class="ace-icon fa fa-users green"></i>
											Please Enter Your Information
										</h4>
										
										<div class="space-6"></div>
										
										<?= $this->session->flashdata('message'); ?>
										<?= $this->session->flashdata('error_login'); ?>
										<form action="<?= base_url('auth'); ?>" method="POST">
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" name="user_name" id="userName" class="form-control" placeholder="Username" value="<?= set_value('user_name') ?>" />
														<i class="ace-icon fa fa-user"></i>
														<?= form_error('user_name', '<small class="text-danger padding-left-3">', '</small>') ?>
													</span>
												</label>
												
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" name="user_password" id="userPassword" class="form-control" placeholder="Password" />
														<i class="ace-icon fa fa-lock"></i>
														<?= form_error('user_password', '<small class="text-danger padding-left-3">', '</small>') ?>
													</span>
												</label>

												<div class="space"></div>

												<div class="clearfix">
													<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
														<i class="ace-icon fa fa-key"></i>
														<span class="bigger-110">Login</span>
													</button>
												</div>

												<div class="space-4"></div>
											</fieldset>
										</form>
									</div><!-- /.widget-main -->

									<div class="toolbar clearfix">
										<div>
											<a href="<?= base_url('auth/forgotPassword') ?>" class="forgot-password-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												I forgot my password
											</a>
										</div>

										<div>
											<a href="<?= base_url('auth/signUp') ?>" class="user-signup-link">
												I want to register
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.login-box -->

							<div id="forgot-box" class="forgot-box widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header red lighter bigger">
											<i class="ace-icon fa fa-key"></i>
											Retrieve Password
										</h4>

										<div class="space-6"></div>
										<p>
											Enter your email and to receive instructions
										</p>

										<form>
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="email" class="form-control" placeholder="Email" />
														<i class="ace-icon fa fa-envelope"></i>
													</span>
												</label>

												<div class="clearfix">
													<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
														<i class="ace-icon fa fa-lightbulb-o"></i>
														<span class="bigger-110">Send Me!</span>
													</button>
												</div>
											</fieldset>
										</form>
									</div><!-- /.widget-main -->

									<div class="toolbar center">
										<a href="#" data-target="#login-box" class="back-to-login-link">
											Back to login
											<i class="ace-icon fa fa-arrow-right"></i>
										</a>
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.forgot-box -->
						</div><!-- /.position-relative -->
					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.main-content -->
	</div><!-- /.main-container -->