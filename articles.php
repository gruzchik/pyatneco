<?php
include ("blocks/database.php");
//require_once ("blocks/database.php");
$result = mysql_query("SELECT title,meta_d,meta_k FROM sp_settings where page='articles'",$db);
$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $myrow['title']?> | Pyatneco.com</title>
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
  <div class="page-headline"><?php echo $myrow['title']?></div>
  <div id="main">
    <div id="content">
	  <?php $result = mysql_query("select id,title,description,date,author from sp_articles",$db); 
	  $myrow = mysql_fetch_array($result);
	  do
	  {
	  printf("<div class='post' >
	    <h3 class='post-title'><a href='view_article.php?id=%s'>%s</a></h3>
        <h3 class='post-meta'>%s <!-- / <a href='#'>No Comments &#187;</a> --> </h3>
        %s<a href='view_article.php?id=%s' class='more-link'>Read Full Article &raquo;</a></p>
      </div>
      <!--end post-->
      <div class='post-line'></div> 
	  ",$myrow['id'],$myrow['title'],$myrow['date'],$myrow['description'],$myrow['id']);
	  }
	  while ( $myrow = mysql_fetch_array($result) );
	  ?>
     
<!--      <div class="post" id="post-77">
        <h3 class="post-title"><a href="#">The Future of HTML5</a></h3>
        <h3 class="post-meta">17th April 2011 / <a href="#">No Comments &#187;</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a nibh mauris. Mauris interdum, dolor in vulputate tincidunt, mauris lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" class="more-link">Read Full Article &raquo;</a></p>
		</div>
-->
		<!--end post-->
      <div class="post-line"></div>
      <ul class="post-navigation">
        <li><a href="#">&laquo; Older Articles</a></li>
      </ul>
    </div>
    <!--end content-->
    <div id="sidebar">
    <?php require_once 'blocks/column_right.php'; ?>
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