<?php
include ("blocks/database.php");
//require_once ("blocks/database.php");
$result = mysql_query("SELECT title,meta_d,meta_k FROM sp_settings where page='contact'",$db);
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
  <div class="page-headline">Как связаться</div>
  <div id="main">
    <div id="contact-details">
      <h3 class="title">Будьте на связи</h3>
      <div class="post">
        <p>Если у вас есть какие то пожелания или предложения по поводу нашего сайта, вы можете отправить их на этой странице.</p>
      </div>
      <h3>Наши контакты</h3>
<!--      <h4>Phone: <span>+44 (0) 1234 567 890</span></h4>
      <h4>Fax: <span>+44 (0) 1234 567 890</span></h4> -->
      <h4>Email: <span>pyatneco@gmail.com</span></h4>
    </div> 
    <!--end contact-details-->
    <div id="contact-form-container">
      <form id="contact-form" method="post" action="contact_mail.php">
        <fieldset>
          <input id="form_name" type="text" name="name" value="Name" onFocus="if(this.value=='Name'){this.value=''};" onBlur="if(this.value==''){this.value='Name'};" />
          <input id="form_email" type="text" name="email" value="Email" onFocus="if(this.value=='Email'){this.value=''};" onBlur="if(this.value==''){this.value='Email'};" />
          <input id="form_subject" type="text" name="subject" value="Subject" onFocus="if(this.value=='Subject'){this.value=''};" onBlur="if(this.value==''){this.value='Subject'};" />
          <textarea id="form_message" rows="10" cols="40" name="cmessage"></textarea>
          <input id="form_submit" class="submit" type="submit" name="submit" value="Submit &raquo;" />
          <div class="hide">
            <label>Do not fill out this field</label>
            <input name="spam_check" type="text" value="" />
          </div>
        </fieldset>
      </form>
    </div>
    <!--end contact-form-container-->
  </div>
  <!--end main-->
<?php require_once 'blocks/footer.php'; ?>
</div>
<!--end wrap-->
</body>
<div class="cache-images"><img src="images/red-button-bg.png" width="0" height="0" alt="" /><img src="images/black-button-bg.png" width="0" height="0" alt="" /></div>
<!--end cache-images-->
</html>