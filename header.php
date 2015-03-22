<!DOCTYPE html>
<html lang="en-us">
  <head>
    <link href="//gmpg.org/xfn/11" rel="profile" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="HandheldFriendly" content="True" />
    <meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
    
    <!-- Enable responsiveness on mobile devices-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    
    <title><?php $this->archiveTitle(array(
        'category'  =>  _t('Posts in %s Category'),
        'search'    =>  _t('Search Result for %s'),
        'tag'       =>  _t('Posts Tagged with  %s'),
        'author'    =>  _t('Posts by %s')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta name="description" content="<?php $this->options->description() ?>" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/poole.css'); ?>" />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/syntax.css'); ?>" />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/lanyon.css'); ?>" />
    
    <link rel="stylesheet" href="<?php $this->options->themeUrl('google/front/css?family=PT+Serif:400,400italic,700%7CPT+Sans:400'); ?>" />
    <!-- Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php $this->options->themeUrl('apple-touch-icon-precomposed.png'); ?>">
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>" />
    
    <?php $this->header(); ?>
  </head>
  
  <body class="body=class">
  	<input type="checkbox" class="sidebar-checkbox" id="sidebar-checkbox" />
  	
  	<!-- Toggleable sidebar -->
  	<div class="sidebar" id="sidebar">
  		<div class="sidebar-item">
  			<p><?php $this->options->description() ?></p>
  		</div>
  		
  		<nav class="sidebar-nav">
  			<a class="sidebar-nav-item" href="<?php $this->options->siteUrl(); ?>">Home</a>
  			<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
				<?php while($pages->next()): ?>
				<a class="sidebar-nav-item" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
				<?php endwhile; ?>
  		</nav>
  		
  		<div class="sidebar-item">
  			<p>
  				&copy; <?php echo date('Y'); ?>. All rights reserved.
  			</p>
  		</div>
    </div>
  
    <!-- Wrap is the content to shift when toggling the sidebar. We wrap the
         content to avoid any CSS collisions with our real content. -->
    <div class="wrap">
      <div class="masthead">
        <div class="container">
          <h3 class="masthead-title">
            <a href="<?php $this->options->siteUrl(); ?>" title="Home"><?php $this->options->title(); ?></a>
            <small><?php $this->options->description() ?></small>
          </h3>
        </div>
      </div>
      
      <div class="container content">