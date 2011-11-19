<?php
/**
 *
 * Bootify by (http://samsherlock.com)
 * Copyright 2011, S Sherlock. (http://samsherlock.com)
 *
 * A Twitter Bootstrap package for Cake 2.0
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, S Sherlock. (http://samsherlock.com)
 * @link          http://github.com/sams/bootify
 * @package       Themed.Bootify.View.Layouts
 * @since         S Sherlock v 0.0.0.1
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
echo $this->Html->docType('html5');
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title_for_layout; ?></title>
    <meta name="description" content="<?php if (!empty($description_for_layout)) echo $description_for_layout; ?>">
    <meta name="keywords" content="<?php if (!empty($keywords_for_layout)) echo $keywords_for_layout; ?>">
    <meta name="author" content="CakePHP with Bootify">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <?php echo $this->Html->css('bootstrap.css'); ?>
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le fav and touch icons -->
    <?php echo $this->Html->meta('favicon.ico', '/favicon.ico', array('type' => 'icon')); ?> 
    <?php echo $this->Html->meta('favicon.ico', '/favicon.ico', array('type' => 'icon', 'rel' => 'shortcut icon')); ?> 
    <?php echo $this->Html->meta('favicon.ico', '/favicon.ico', array('type' => 'icon', 'rel' => 'apple-touch-icon')); ?> 
    <?php echo $this->Html->meta('icon'); ?>
  </head>

  <body>
    
    <?php echo $this->element('layout/nav_bar', array('form' => '<p class="pull-right">Logged in as <a href="#">username</a></p>')); ?>
    <?php echo $this->element('layout/header'); ?>

    <div class="fluid-container reverse">
      <div class="fluid-sidebar-right">
        <div class="well">
          <?php if(!empty($sidebar_for_layout)) echo $sidebar_for_layout; ?>
        </div>
      </div>
      <div class="fluid-content">
        
        <?php echo $content_for_layout; ?>
      
      <?php echo $this->element('layout/footer'); ?>
      </div>
    </div>

  </body>
</html>