<?php include('includes/header.php'); ?>
<body>

<div data-role="page">
   <header data-role="header" class="<?php echo $siteName; ?>">
      <h1><?php echo ucwords($siteName).'+'; ?></h1>
   </header><!-- /header -->

   <div data-role="content">
      <ul data-role="listview" data-theme="c" data-dividertheme="d" data-counttheme="e">
      <?php
            foreach($feed->query->results->item as $item) {
            ?>

            <li>
              <h2>
                  <a href="article.php?siteName=<?php echo $siteName;?>&origLink=<?php echo urlencode($item->guid->content);?>">
                 <?php echo $item->title; ?>
                 </a>
              </h2>
           </li>

      <?php  } ?>
      </ul>
   </div><!-- /content -->

   <footer data-role="footer" class="<?php echo $siteName; ?>">
      <h4> www.tutsplus.com</h4>
   </footer>
</div><!-- /page -->

</body>
</html>


