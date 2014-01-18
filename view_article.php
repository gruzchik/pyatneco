<?php
require_once ("blocks/database.php");
if (isset($_GET['id'])){ $id = $_GET['id'];}
$result = mysql_query("SELECT title,meta_d,meta_k,address,phone,site,worktime,date,description,text,author,img FROM sp_articles where id='$id'",$db);
$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $myrow['title']; ?>| Pyatneco.com</title>
<meta charset="utf-8">
<meta name="description" content="<?php echo $myrow['meta_d']; ?> ">
<meta name="keywords" content="<?php echo $myrow['meta_k']; ?> ">
<link type="text/css" rel="stylesheet" href="styles/style.css" />
<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/js/jquery.fancybox-1.3.4.js"></script>
<link rel="stylesheet" href="/js/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<script type="text/javascript">
$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
</script>
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
    <div id="content_template">
      <div class="post" >
	  <table>
	  <tr>
	  <?php
	  $googlelink1 = str_replace(" ","+",$myrow['address']);
	  ?>
	  <td><div class="content_image">
	  <a class="fancybox" href="<?php echo $myrow['img']; ?>"><img src="<?php echo $myrow['img']; ?>" width="150" height="100"></a>
	  </div>
	  <div class="content_info">
	  <b>Адрес:&nbsp</b> <?php echo $myrow['address']; ?>,&nbsp <a href="http://maps.google.com/?ie=UTF8&hl=en&q=<?php echo $googlelink1; ?>">посмотреть на карте</a><br><b>Телефон:&nbsp</b><?php echo $myrow['phone']; ?><br><b>Сайт:&nbsp</b><?php echo !empty($myrow['site']) ? "<a href=".$myrow['site'].">".$myrow['site']."</a>" : "Информация отсутствует" ; ?><br><b>Время работы:&nbsp</b><?php echo $myrow['worktime']; ?>
	  </div></td>
	  </tr>
	  </table>
	  <br>
      <!--  <h3 class="post-title"><a href="#"><?php //echo $myrow['title']; ?></a></h3> -->
      <!--  <h3 class="post-meta"><?php //echo $myrow['date']; ?> <a href="#">No Comments &#187;</a></h3> -->
      <div><?php echo $myrow['text']; ?></div>
      </div>
      <!--end post-->
      <div class="post-line"></div>
      <!-- input content -->
	  <?php
	  
	  $result2 = mysql_query("SELECT * FROM sp_comments where post='$id'",$db);
      if(mysql_num_rows($result2) > 0)
	  {
	  echo "<p class='comment-name'>Комментарии: </p>";
	  $myrow2 = mysql_fetch_array($result2);
      do
	  {
	  printf("<div class='div-comment'><p class='comment-name-add'>Комментарий добавил(а): <b>%s</b><br>Дата: <b>%s</b></p><p> %s</p></div>",$myrow2['author'],$myrow2['date'],$myrow2['text']);
	  }
	  while($myrow2 = mysql_fetch_array($result2));
	  }
	  ?>
	<?php 
	$result3 = mysql_query("select img from sp_comments_check where id=1",$db);
	$myrow3 = mysql_fetch_array($result3);
	?>
    <p class='comment-name'>Оставить Ваше мнение:</p>
    <form action="comment.php" method="post" name="form_com">
    <p><label>Ваше имя: </label><input name="author" type="text" size="30" maxlength="30"></p>
	<p><label>Текст комментария: </label><br><textarea name="text" cols="52" rows="5"></textarea></p>
	<p>Введите сумму чисел с картинки<br><img style="vertical-align:top;" src="images/<?php echo $myrow3['img'] ?>" width="80" height="40"><input name="pr" style="vertical-align:top; margin-top:8px;" type="text" size="5" maxlength="5"></p>
	<input name="id" type="hidden" value="<?php echo $id; ?>">
	<p><input name="sub_com" type="submit" value="Отправить"></p>
	</form>	
    </div>
    <!--end content-->
	
    <div id="sidebar_template">
      <!-- <div id="hire">
        <h3 class="sidebar-title">Want To Hire Akona?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a class="sidebar-button" href="contact.html">Contact Us &raquo;</a> </div> -->
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