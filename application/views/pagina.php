<!DOCTYPE HTML>
<html>
<head>
	<title>Pagina curso</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->base_url('resources/css/bootstrap.css'); ?>">
</head>
<body>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="page-header">
				<h1><?php echo $titulo; ?><small>Texto</small></h1>
			</div>	
		</div>
		<div class="row-fluid">
			<div class="span4" id="pnl-left">
				<p>Menu</p>
			</div>
			<div class="span8" id="main-content">
				<p class="well"><?php print $dato; ?></p>
			</div>
		</div>
		
	</div>
	
	
</body>
</html>