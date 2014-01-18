<?php
require_once ("blocks/database.php");
$result = mysql_query("SELECT title,meta_d,meta_k,text FROM sp_settings where page='index'",$db);
$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $myrow['title']; ?> | Pyatneco.com</title>
<meta charset="utf-8">
<meta name="description" content="<?php echo $myrow['meta_d']; ?> ">
<meta name="keywords" content="<?php echo $myrow['meta_k']; ?> ">
<link type="text/css" rel="stylesheet" href="styles/style.css" />
<link type="text/css" rel="stylesheet" href="styles/skin.css" />
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/initSlider.js"></script>
<!--[if IE 6]>
<script src="js/ie6-transparency.js"></script>
<script>DD_belatedPNG.fix('#header img, #featured-section h2, #circles img, #frontpage-sidebar .read-more, .blue-bullets li, #sidebar .sidebar-button, #project-content .read-more, .more-link, #contact-form .submit, .jcarousel-skin-tango .jcarousel-next-horizontal, .jcarousel-skin-tango .jcarousel-prev-horizontal, #commentform .submit');</script>
<style>body { behavior: url("styles/ie6-hover-fix.htc"); }</style>
<link rel="stylesheet" href="styles/ie6.css" />
<![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="styles/ie7.css" /><![endif]-->
<!--[if IE 8]><link rel="stylesheet" href="styles/ie8.css" /><![endif]-->
</head>
<body class="home">
<div id="wrap">
<?php require_once 'blocks/header.php'; ?>
  <div id="featured-section">
<?php echo $myrow['text']; ?>
    <div id="image-slider">
      <ul id="mycarousel" class="jcarousel-skin-tango">
	  <?php 
	  $result = mysql_query("select id,img from sp_articles",$db);
	  $myrow = mysql_fetch_array($result);
	  $first= 1;
	  do{
	  if($first==1){$firstmarker="class='first'";}else{$firstmarker="";}
	  printf("
        <li %s><a href='view_article.php?id=%s'><img width='280' height='190' src='%s' alt='' /></a></li>",$firstmarker,$myrow['id'],$myrow['img']);
	  $first++;
	  if($first>= 4){ $first= 1;}
	  }
	  while($myrow = mysql_fetch_array($result));
	  ?>
      </ul>
    </div>
    <!--end image-slider-->
	<div id="circles"> <img class="first" src="images/circle-ob.png" /> <img src="images/circle-dest.png" /> <img src="images/circle-menu.png" /> <img src="images/circle-wifi.png" /> </div>
    <!--end circles-->
  </div>
  <!--end featured-section-->
  <div id="frontpage-main">
    <div id="frontpage-content">
      <h3>Что Вас ждет у нас на сайте?</h3>
      <p>Вашему вниманию представлены заведения, которые по мнению автора достойны Вашего внимания, и здесь Вы найдете:</p>
      <ul class="blue-bullets">
        <li>Лучшие заведения города Харькова</li>
        <li>Классификация по различным параметрам</li>
        <li>Преимущества или недостатки заведения</li>
        <li>Независимая оценка понравившегося Вам бара или кафе</li>
      </ul>
    </div>
    <!--end frontpage-content-->
    <div id="frontpage-sidebar">
	<?php
	$result = mysql_query("select id,title,description,date from sp_articles limit 1",$db);
	$myrow = mysql_fetch_array($result);
	?>
      <h3> Последние добавления</h3>
      <a class="blog-title" href="view_article.php?id=<?php echo $myrow['id']?>"><?php echo $myrow['title'] ?></a>
      <p class="meta"><?php echo $myrow['date'] ?> / <!--<a href="#">No Comments &#187;</a> --></p>
      <?php echo $myrow['description'] ?>
      <a class="read-more" href="view_article.php?id=<?php echo $myrow['id']?>">Read More &raquo;</a> </div>
    <!--end frontpage-sidebar-->
  </div>
  <!--end frontpage-main-->
  <?php require_once 'blocks/footer.php'; ?>
</div>
<!--end wrap-->
</body>
<div class="cache-images"><img src="images/red-button-bg.png" width="0" height="0" alt="" /><img src="images/black-button-bg.png" width="0" height="0" alt="" /></div>
<!--end cache-images-->
</html>