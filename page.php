<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article class="post-class">

  <h1 class="post-title"><?php $this->title() ?></h1>

  <section class="post-content">
    <?php $this->content(); ?>
  </section>

</article>
<?php $this->need('footer.php'); ?>