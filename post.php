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
          <a class="img" href="<?php $this->author->permalink(); ?>" style="background-image: url(<?php if ($this->options->authorAvatar): ?><?php $this->options->authorAvatar() ?><?php else: ?><?php $this->options->themeUrl('author.png'); ?><?php endif; ?>)"><span class="hidden"><?php $this->author(); ?>'s Picture</span></a>
      </figure>
      
      <section class="author">      	
      	
          <h4><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></h4>

              <p><span class="author-location"><?php if ($this->options->authorBio): ?><?php $this->options->authorBio() ?><?php else: ?>Please say something about yourself...<?php endif; ?></p>

          <div class="author-meta">
              <span class="author-location"><?php if ($this->options->authorLocation): ?><?php $this->options->authorLocation() ?><?php else: ?>Your Location<?php endif; ?></span>
              <span class="author-link"><a href="<?php if ($this->options->anotherSite): ?><?php $this->options->anotherSite() ?><?php else: ?>/<?php endif; ?>"><?php if ($this->options->anotherSite): ?><?php $this->options->anotherSite() ?><?php else: ?>Your Another Site<?php endif; ?></a></span>
          </div>
      </section>
      
  </footer>

</article>
<?php $this->need('footer.php'); ?>