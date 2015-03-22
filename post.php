<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article class="post-class">

  <header class="post-header">
      <h1 class="post-title"><?php $this->title() ?></h1>
      <section class="post-meta">
          <time class="post-date" datetime="<?php $this->date('F j, Y'); ?>"><?php $this->date('F j, Y'); ?></time> <?php $this->tags(', ', true, 'none'); ?>
      </section>
  </header>
  
  <section class="post-content">
      <?php $this->content(); ?>
  </section>

  <footer class="post-footer">

      <figure class="author-image">
          <a class="img" href="<?php $this->options->themeUrl('author.png'); ?>" style="background-image: url(<?php $this->options->themeUrl('author.png'); ?>)"><span class="hidden"><?php $this->author(); ?>'s Picture</span></a>
      </figure>
      
      <section class="author">
          <h4><a href="{{url}}">{{name}}</a></h4>

              <p>Please say something about yourself...</p>

          <div class="author-meta">
              <span class="author-location">Your Location</span>
              <span class="author-link"><a href="/"><?php $this->options->siteUrl(); ?></a></span>
          </div>
      </section>
      
  </footer>

</article>
<?php $this->need('footer.php'); ?>