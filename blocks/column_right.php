  <div id="hire">
        <h3 class="sidebar-title">Есть пожелания?</h3>
        <p>Если у вас есть какие либо замечания или предложения к нам, рады будем Вам ответить.</p>
        <a class="sidebar-button" href="contact.php">Написать нам &raquo;</a> </div>
      <!--end hire-->
      <div id="recent-projects">
	  <!-- <h3>Recent Projects</h3> -->
	  <h3>Новые проекты</h3>
        <p>Заведения, информация о которых недавно появилась у нас на сайте.</p>
        <?php
	    $result = mysql_query("SELECT id,img FROM sp_articles order by date desc limit 2",$db);
        $myrow = mysql_fetch_array($result);
		do
		{
		printf("<div class='portfolio-item'> <a href='view_article.php?id=%s'><img width='280' height='190' src='%s' alt='' /></a> </div>
        <!--end portfolio-item-->",$myrow['id'],$myrow['img']);
		}
		while( $myrow = mysql_fetch_array($result) );
        ?>
        <!-- <div class="portfolio-item"> <a href="#"><img width="280" height="190" src="images/280x190.gif" alt="" /></a> </div> -->
        <!--end portfolio-item-->
        <a class="sidebar-button" href="entertainment.php">All Projects &raquo;</a> </div>
      <!--end recent-projects-->