<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = '<p style="text-align:justify;"><span style="font:12px &#39;Lucida Grande&#39;, LucidaGrande, Verdana, sans-serif; color:#434343;">ESTA kontakttālrunis: +371 26335696.<br /><br />Priecāsimies par vēstulēm:<br /></span></p>';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = '';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="robots" content="all" />
		<meta name="generator" content="RapidWeaver" />
		
		<title>Kontakti</title>
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/simple/styles.css"  />
		<link rel="stylesheet" type="text/css" media="print" href="../rw_common/themes/simple/print.css"  />
		<link rel="stylesheet" type="text/css" media="handheld" href="../rw_common/themes/simple/handheld.css"  />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/simple/css/styles/soft_pink.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/simple/css/width/width_default.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/simple/css/sidebar/sidebar_right.css" />
		
		
		
		
		<script type="text/javascript" src="../rw_common/themes/simple/javascript.js"></script>
		
		
		
	</head>
<body>
<div id="container"><!-- Start container -->
	
	<div id="pageHeader"><!-- Start page header -->
		<img src="../rw_common/images/ESTA%20logo-web200.png" width="150" height="99" alt="Site logo"/>
		<h1>ESTA</h1>
		<h2>Eiropas Savienības tiesību asociācija</h2>
	</div><!-- End page header -->
	
	<div id="sidebarContainer"><!-- Start Sidebar wrapper -->
		<div id="navcontainer"><!-- Start Navigation -->
			<ul><li><a href="../" rel="self">ESTA</a></li><li><a href="../konference/" rel="self">Konferences</a></li><li><a href="../statuti/" rel="self">Statūti</a></li><li><a href="../biedri/" rel="self">Biedri</a></li><li><a href="./" rel="self" id="current">Kontakti</a></li><li><a href="../english/" rel="self">Info in english</a></li></ul>
		</div><!-- End navigation --> 
		<div id="sidebar"><!-- Start sidebar content -->
			<h1 class="sideHeader"></h1><!-- Sidebar header -->
			<!-- sidebar content you enter in the page inspector -->
			 <!-- sidebar content such as the blog archive links -->
		</div><!-- End sidebar content -->
	</div><!-- End sidebar wrapper -->
	
	<div id="contentContainer"><!-- Start main content wrapper -->
		<div id="content"><!-- Start content -->
			
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Vārds:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>E-pasts:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Tēma:</label> <br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Vēstule:</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Atcelt" />
		<input class="form-input-button" type="submit" name="submitButton" value="Nosūtīt" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
		</div><!-- End content -->
	</div><!-- End main content wrapper -->
	
	<div class="clearer"></div>
	
	<div id="footer"><!-- Start Footer -->
		<div id="breadcrumbcontainer"><!-- Start the breadcrumb wrapper -->
			<ul><li><a href="../">ESTA</a>&nbsp;>&nbsp;</li><li><a href="./">Kontakti</a>&nbsp;>&nbsp;</li></ul>
		</div><!-- End breadcrumb -->
		<p>&copy; 2012 ESTA |  <a href="#" id="rw_email_contact">Nosūtīt e-pastu</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":eu";var _rwObsfuscatedHref3 = "law";var _rwObsfuscatedHref4 = ".lv";var _rwObsfuscatedHref5 = "@gm";var _rwObsfuscatedHref6 = "ail";var _rwObsfuscatedHref7 = ".co";var _rwObsfuscatedHref8 = "m";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8; document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;</script></p>
	</div><!-- End Footer -->

</div><!-- End container -->
</body>
</html>
