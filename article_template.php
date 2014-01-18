<?php
require_once ("blocks/database.php");
$result = mysql_query("SELECT title,meta_d,meta_k,text FROM sp_settings where page='index'",$db);
$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Akono | Articles</title>
<meta charset="utf-8">
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
  <div class="page-headline">Articles</div>
  <div id="main">
    <div id="content_template">
      <div class="post" >
        <h3 class="post-title"><a href="#">Pacha Mama</a></h3>
        <h3 class="post-meta">1st May 2011 / <!--<a href="#">No Comments &#187;</a>--></h3>
        <p>Особенностью данного кафе помимо названия является неплохая кухня в плане мясных блюд а также живое пиво собственного производства. Здесь можно попробовать неплохие колбаски, шашлык, свиную ногу и другие блюда которые прекрасно сочетаются с живыим пивом, которое варится специально для этого заведения.</p>
		<p>Пивная Beerlin в Харькове находится в двух местах - на Красношкольной набережной и по улице Иванова недалеко от площади Свободы. Оба заведения находятся в хороших и посещаемых местах, хотя на Красношкольной у Beerlin я думаю меньше достойных конкурентов чем в центре. Чем также запмнились эти заведения, так это то, что пиво в них подается в специальных глиняных бокалах, что придает особенный вкус этому напитку.</p>
      </div>
      <!--end post-->
      <div class="post-line"></div>
      <!-- input content -->
      
    </div>
    <!--end content-->
    <div id="sidebar_template">
      <div id="hire">
        <h3 class="sidebar-title">Want To Hire Akona?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a class="sidebar-button" href="contact.html">Contact Us &raquo;</a> </div>
      <!--end hire-->
    </div>
    <!--end sidebar-->
  </div>
  <!--end main-->
<?php require_once 'blocks/footer.php'; ?>
</div>
<!--end wrap-->
</body>
<div class="cache-images"><img src="images/red-button-bg.png" width="0" height="0" alt="" /><img src="images/black-button-bg.png" width="0" height="0" alt="" /></div>
<!--end cache-images-->
</html>