<?php
/**
 * Lanyon Theme Ported from Ghost
 * 
 * @package Lanyon
 * @author Vincent Lau
 * @version 1.1
 * @link http://tfp.io
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
  $this->need('header.php');
  ?>

  <?php while($this->next()): ?>
  <article class="post">
      <header class="post-header">
          <h1 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
          <section class="post-meta">
              <time class="post-date" datetime="<?php $this->date('F j, Y'); ?>"><?php $this->date('F j, Y'); ?></time>
              <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
              on <?php $this->tags(', ', true, 'none'); ?>
          </section>
      </header>
      <section class="post-excerpt">
          <?php $this->excerpt(500,' &raquo;'); ?>
      </section>
  </article>
	<?php endwhile; ?>  

</div>
	
  <nav class="pagination" role="navigation">
  	<?php $this->pageLink('&larr; Newer Posts','prev'); ?>
    <?php $this->pageLink('Older Posts &rarr;','next'); ?>
  </nav>
  
<?php $this->need('footer.php'); ?>
