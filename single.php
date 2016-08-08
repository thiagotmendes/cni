<?php get_header() ?>
  <main class="interno">
    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <section class="topo-titulo" style="background-image:url('<?php echo $url ?>')">
      <div class="container">
        <h1><?php the_title() ?></h1>
      </div>
    </section>

    <div class="container">
      <div class="row">
        <div class="col-md-8 col-not">
          <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
              <article class="bloco-noticia">
                <div class="img-noticia">
                  <?php if (has_post_thumbnail()): ?>
                    	<a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
                      </a>
                  <?php endif; ?>
                </div>

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(  ); ?></a></h2>

                <div class="info-adicional">
		              <div class="pull-left info-block calendario">
										<i class="fa fa-calendar-o"></i> <?php the_time('j  F,  Y'); ?> |
										<!--<i class="fa fa-user"></i> <?php  the_author(); ?> |-->
										<i class="fa fa-comment-o"></i> <?php comments_number('Nenhum comentário', '1 comentário', '% comentários'); ?>
									</div>
									<div class="pull-right info-block">
										Categoria: <?php the_category(' '); ?>
									</div>
									<div class="clearfix"></div>
								</div>
                <div class="conteudo-noticia">
                  <?php the_content(); ?>
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php $tag_single = get_the_tags( $post->ID ); ?>
          <?php if (!empty($tag_single)): ?>
            <hr>
            <div class="tags">
              <?php the_tags( 'Tags: ', ', ', '<br />' ); ?>
            </div>
          <?php endif ?>
          <hr>
          <div class="author">
            <div class="row">
              <div class="col-md-3 img-author">
                <?php $email = get_the_author_email();
                $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] );
                $usegravatar = get_option('woo_gravatar');?>
                <img src="<?php echo $grav_url; ?>" alt=""/>
              </div>
              <div class="col-md-9">
                <h4 class="nome-author"><a href = "<?php the_author_url ();?>" itemprop="url"><?php the_author(); ?></a></h4>
                <?php the_author_description();?>
              </div>
            </div>
          </div>
          <hr>
          <?php comments_template(); ?>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <?php get_sidebar() ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer() ?>
