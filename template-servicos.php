<?php /* template name: Serviços */ ?>
<?php get_header() ?>
  <main>
    <?php if (have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <section class="topo-titulo" style="background-image:url('<?php echo $url ?>')">
          <div class="container">
            <h1> <?php the_title() ?> </h1>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <?php
                  $id = get_the_id();
                  $titulo_corrente = get_the_title();
                  $pagina_anterior = get_post_ancestors($id);
                  if(!empty($pagina_anterior)){
                    $idPagina = $pagina_anterior[0];
                  } else {
                    $idPagina = $id;
                  }
                  $arg = array(
                    'post_type'       => 'page',
                    'posts_per_page'  => 20,
                    'orderby'         => 'menu_order',
                    'order'           => 'ASC',
                    'post_parent'     => $idPagina
                  );
                  $menu_lateral = new wp_query($arg);
                  if($menu_lateral->have_posts()):
                    echo "<ul class='menu-servicos'>";
                      while($menu_lateral->have_posts()): $menu_lateral->the_post();
                        $titulo_menu = get_the_title();
                        if ($titulo_corrente == $titulo_menu) {
                          $activate = "activate";
                        } else {
                          $activate = "";
                        }
                        echo "<li class='$activate'>";
                        ?>
                          <a href="<?php the_permalink() ?>" class="hvr-sweep-to-right"><?php the_title(); ?></a>
                        <?php
                        echo "</li>";
                      endwhile;
                    echo "</ul>";
                  else:
                    echo "Nenhuma pagina encontrada";
                  endif;
                  wp_reset_query();
                  ?>
              </div>
              <div class="col-md-9">
                <?php the_content() ?>
              </div>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
    <?php endif; ?>
  </main>
<?php get_footer() ?>
