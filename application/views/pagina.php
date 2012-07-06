<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="utf-8" />
	<title><?php echo $titulo; ?> | CodeigniterTour</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->base_url('resources/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->base_url('resources/css/bootstrap-responsive.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->base_url('resources/css/formulario.css'); ?>">
	<script type="text/javascript" src="<?php echo $this->config->base_url('resources/js/jquery-1.7.2.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo $this->config->base_url('resources/js/bootstrap-alert.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo $this->config->base_url('resources/js/formulario.js'); ?>"></script>
</head>
<body>

	<header class="container">
		<div class="page-header">
			<h1><?php echo $titulo; 
				if (isset($subtitle)) {
					echo '<small>'.$subtitle.'</small>';
				}?>
			</h1>
		</div>	
	</header>

	<div class="container">
		<div class="row-fluid"> <?php 
			$width_content	= 12;
			$width_menu		= 3;
			if (isset($main_menu) AND count($main_menu)>0): 
				$width_content -= $width_menu; ?>
				<div class="span<?php echo $width_menu; ?>">
					<nav>
						<ul class="nav nav-pills nav-stacked" id="main-menu"> 
							<li class="nav-header">Menu Principal</li> <?php 
							foreach ($main_menu as $item)
							{
								echo '<li>'.anchor($item['link'],$item['title']).'</li>';
							} ?>
						</ul>
					</nav>
				</div> <?php 
			endif; ?>
			<div class="span<?php echo $width_content; ?>" id="main-content">
				<div class="container-fluid" id="alert-messages"></div> 
				<?php echo form_open($formulario['action'],$formulario['attrs']); ?>
					<fieldset>
						<legend><?php echo $formulario['title']; ?></legend> <?php 
						foreach ($formulario['fields'] as $field): ?>
							<div class="control-group">
								<?php echo form_label($field['name'],$field['attrs']['name'],array('class'=>'control-label')); ?>
								<div class="controls">
									<?php echo form_input($field['attrs']); ?>
								</div>
							</div> <?php 
						endforeach; ?>
						<div class="form-actions"> <?php
							foreach ($formulario['buttons'] as $button)
							{
								echo form_button($button);
							} ?>
						</div>
					</fieldset> 
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
	
</body>
</html>