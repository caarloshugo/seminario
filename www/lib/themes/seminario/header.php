<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php print $this->getTitle(); ?></title>
		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">
		<script language="javascript" src ="<?php print $this->themePath; ?>/js/jquery.js"></script>
		<script language="javascript" src ="<?php print $this->themePath; ?>/js/functions.js"></script>
		<?php print $this->getCSS(); ?>
	</head>

	<body>
		<div id="container">
			<div id="<?php echo ($user["language"] == "es") ? "header" : "header_en" ;?>">
				<h1>
					Segundo Seminario Internacional sobre la relaci&oacute;n 
					entre los derechos humanos y los recursos y las pol&iacute;ticas p&uacute;blicas, 
					las decisiones judiciales y la implementaci&oacute;n de las reformas legislativas
				</h1>
			</div>
			<?php if($user["language"] == "es") { ?>
				<a class="home" href="http://fundar.org.mx/seminario" title="Seminario: Derechos humanos, presupuestos públicos y poder judicial">Sitio Web del Seminario</a>
			<?php } else { ?>
				<a class="home" href="http://fundar.org.mx/seminario" title="Seminar: Human rights, public budgets and the judiciary">Seminar Website</a>
			<?php } ?>
			
		
