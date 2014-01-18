<?php
require_once ("blocks/database.php");
$result = mysql_query("SELECT title,meta_d,meta_k FROM sp_settings where page='entertainment'",$db);
$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> <?php echo $myrow['title']; ?> | Pyatneco.com</title>
<meta charset="utf-8">
<meta name="description" content="<?php echo $myrow['meta_d']; ?> ">
<meta name="keywords" content="<?php echo $myrow['meta_k']; ?> ">
<link type="text/css" rel="stylesheet" href="styles/style.css" />
<!--[if IE 6]>
<script src="js/ie6-transparency.js"></script>
<script>DD_belatedPNG.fix('#header img, #featured-section h2, #circles img, #frontpage-sidebar .read-more, .blue-bullets li, #sidebar .sidebar-button, #project-content .read-more, .more-link, #contact-form .submit, .jcarousel-skin-tango .jcarousel-next-horizontal, .jcarousel-skin-tango .jcarousel-prev-horizontal, #commentform .submit');</script>
<style>body { behavior: url("styles/ie6-hover-fix.htc"); }</style>
<link rel="stylesheet" href="styles/ie6.css" />
<![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="styles/ie7.css" /><![endif]-->
<!--[if IE 8]><link rel="stylesheet" href="styles/ie8.css" /><![endif]-->
</head>
<body class="page">
<div id="wrap">
<?php require_once 'blocks/header.php'; ?>
  <div class="page-headline"><?php echo $myrow['title']; ?></div>
  <div id="main">
    <div id="porfolio-content">
	<?php 
	$result = mysql_query("select id,img from sp_articles",$db);
	$myrow = mysql_fetch_array($result);
    $first= 1;
	do{
	if($first==1){$firstmarker="first";}else{$firstmarker="";}
	//echo "first=".$first;
	printf("<div class='portfolio-item %s'> <a href='view_article.php?id=%s'><img width='280' height='190' src='%s' alt='' /></a> </div>
      <!--end portfolio-item-->",$firstmarker,$myrow['id'],$myrow['img']);
	$first++;
	if($first>= 4){ $first= 1;}
	  }
	  while( $myrow = mysql_fetch_array($result));
	  ?>
    </div>
    <!--portfolio-content-->
  </div>
  <!--end main-->
<?php require_once 'blocks/footer.php'; ?>
</div>
<!--end wrap-->
</body>
<div class="cache-images"><img src="images/red-button-bg.png" width="0" height="0" alt="" /><img src="images/black-button-bg.png" width="0" height="0" alt="" /></div>
<!--end cache-images-->
</html>