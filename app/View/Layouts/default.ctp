<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?=$this->Html->charset(); ?>
	<title>
		<?//=$title_for_layout; ?> .:: Aq2Chile Revival ::.
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('estilo');
		echo $this->Html->script('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="header">			
		 <div id="menu">
	      <!-- <ul>
		      <li><a href="#" title="Inicio">Inicio</a></li>
		      <li><a href="#" title="Foro">Foro</a></li>
		      <li><a href="#" title="Ladder">Ladder</a></li>
		      <li><a href="#" title="Galeria">Galeria</a></li>
		      <li><a href="#" title="Contactar">Contactar</a></li>
	      </ul> -->
	      <div id="title">
	        <h1>.:: Aq2Chile Revival ::.</h1>
	      </div>
	      	<?=$this->element('serverMenu', array('results' => $results));?>
	    </div>
	</div>
	<div id="content">
		<?=$this->Session->flash(); ?>
		<?=$this->fetch('content'); ?>
	</div>
	<div id="footer">
	</div>
</body>
</html>
