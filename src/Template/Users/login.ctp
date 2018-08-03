<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
<?= $this->Html->charset() ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title><?= $cakeDescription ?>: <?= $this->fetch('title') ?>
</title>
<?= $this->Html->meta('icon') ?>
<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('/font-awesome/4.5.0/css/font-awesome.min.css') ?>
<?= $this->Html->css('fonts.googleapis.com.css') ?>
<?= $this->Html->css('ace.min.css') ?>
<?= $this->Html->css('ace-rtl.min.css') ?>
<?= $this->Html->script('jquery-2.1.4.min.js') ?>
<?= $this->Html->script('jquery.mobile.custom.min.js') ?>

<!--[if lte IE 9]>
	   <?= $this->Html->css('ace-ie.min.css') ?> 
	<![endif]-->


<!--[if lte IE 8]>
	
	   <?= $this->Html->script('html5shiv.min.js') ?> 
	   <?= $this->Html->script('respond.min.js') ?> 
		
		<![endif]-->


<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>

<body class="login-layout light-login">



	<div class="main-container ">
		<div class="main-content">
			<div class="">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="login-container">
						<div class="center">
							<h1>
								<i class="ace-icon fa fa-user blue"></i> <span class="blue">Generic</span>
								<span class="white" id="id-text2">Aplicação</span>
							</h1>
							<h4 class="red" id="id-company-text">&copy; RWD Company</h4>
						</div>

						<div class="space-6"></div>

						<div class="position-relative">
							<div id="login-box"
								class="login-box visible widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header blue lighter bigger">
											<i class="ace-icon fa fa-coffee blue"></i> Por favor, insira
											suas informações
										</h4>

										<div class="space-6"></div>

										<?= $this->Form->create() ?>

										<fieldset>
														
												 <?= $this->Flash->render() ?>
									

    								
											<label class="block clearfix"> 
												<span class="block input-icon input-icon-right">
												 <i	class="ace-icon fa fa-user"></i> 

													<?= $this->Form->input('email',['class' => 'form-control',
					            												    'placeholder'=> 'Username',
					            															            												 
					            												    'label' => 'Username']) ?>

												</span>
											</label> 
											<label class="block clearfix"> 
												<span class="block input-icon input-icon-right"> 
												<?= $this->Form->input('password', ['class'      => 'form-control',
					            													'placeholder'=> 'Password']) ?> 
					            				<i class="ace-icon fa fa-lock"></i>
												</span>
											</label>

											<div class="space"></div>

											<div class="clearfix">						

												<?= $this->Form->button($this->Html->tag("i", "<span></span>",array("class" => "ace-icon fa fa-key")). " Login", ['class'=>'width-35 pull-right btn btn-sm btn-primary']) ?>

											</div>

											<div class="space-4"></div>
										</fieldset>
										<?= $this->Form->end() ?>

										<div class="social-or-login center">
											<span class="bigger-110"></span>
										</div>

										<div class="space-6"></div>

										<div class="social-login center"></div>
									</div>
									<!-- /.widget-main -->

									<div class="toolbar clearfix">
										<div></div>

										<div></div>
									</div>
								</div>
								<!-- /.widget-body -->
							</div>
							<!-- /.login-box -->
						</div>
					</div>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.main-content -->
	</div>
	<!-- /.main-container -->

</body>
</html>