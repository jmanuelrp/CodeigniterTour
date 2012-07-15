<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
	 	<title><?php echo $titulo; ?> | CodeigniterTour</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->config->base_url('resources/css/bootstrap.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo $this->config->base_url('resources/css/bootstrap-responsive.css'); ?>">
	</head>
	<body>
		<header></header>
		<div class="container">
			<div class="row-fluid">
				<?php echo form_open($login['action'],$login['atr']); ?>
				<fieldset>
				<legend><?php echo $login['title']; ?></legend>
					<?php foreach($login['fields'] as $field): ?>
						<div class="control-group">
							<?php echo form_label($field['name'], $field['atr']['name'],array('class'=>'control-label')); ?>
							<div class="controls">
								<?php 
									switch ($field['type']) {
										case 'input':
										case 'password':
											echo form_input($field['atr']);
											break;
									}
								?>
							</div><!-- /.controls -->
						</div><!-- /.control-group -->
					<?php endforeach; ?>
					<div class="form-actions">
						<?php foreach ($login['boton'] as $boton) {
							switch ($boton['type']) {
								case 'boton':
									echo form_button($boton['atr']);
									break;
								case 'link':
									echo anchor($boton['enlace'],$boton['content'],$boton['atr']);
									break;
							}
						} ?>
					</div>
				</fieldset> 
				<?php echo form_close(); ?>
			</div><!-- /.row-fluid -->
		</div> <!-- /.container -->
		<footer></footer>
	</body>
</html>