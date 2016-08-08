<?php /* template name: home */ ?>
<?php get_header() ?>

    <section>
      <?php echo do_shortcode('[rev_slider alias="home"]') ?>
    </section>

    <section class="box-apresenta">
      <div class="container">
        <p class="frase-pos-banner">
          <strong> Realizamos o seu projeto </strong> de exportação, <br>
          Garantindo sucesso no mercado internacional e nacional
        </p>
      </div>
    </section>

    <section class="sevicos inner">
      <div class="container">
        <h3 class="titulo-home"> Serviços </h3>
        <p align="center">
          Gestão de negócios internacionais: oferecemos serviços diferenciados no seguimento de fretes internacionais, com informações claras, objetivas e confiáveis.
        </p>
        <div class="row">
          <div class="col-md-3">
            <div class="ret-servicos auto">
              <a href="<?php echo esc_url( home_url( 'setor-automobilistico' ) ); ?>"></a>
            </div>
            <h3 class="titulo-home">
              Setor automobilístico
            </h3>
          </div>
          <div class="col-md-3">
            <div class="ret-servicos setconst">
              <a href="<?php echo esc_url( home_url( 'setor-de-construcao' ) ); ?>"></a>
            </div>
            <h3 class="titulo-home">
              Setor de construção
            </h3>
          </div>
          <div class="col-md-3">
            <div class="ret-servicos setener">
              <a href="<?php echo esc_url( home_url( 'setor-de-energia' ) ); ?>"></a>
            </div>
            <h3 class="titulo-home">
              Setor de <br> energia
            </h3>
          </div>
          <div class="col-md-3">
            <div class="ret-servicos agro">
              <a href="<?php echo esc_url( home_url( 'agronegocio' ) ); ?>"></a>
            </div>
            <h3 class="titulo-home">
              Agronegócio
            </h3>
          </div>
        </div>
      </div>
    </section>

    <section class="noticia-contato inner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 class="titulo-noticia"> Últimas Notícias </h3>
            <?php
            $argPost = array(
              'post_type'       => "post",
              'posts_per_page'  => 3
            );
            $postsHome = new wp_query($argPost);
            if ($postsHome->have_posts()):
              while($postsHome->have_posts()): $postsHome->the_post();
            ?>
            <div class="row noticia-home">
              <div class="col-md-3">
                <?php if (has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
                    </a>
                <?php endif; ?>
              </div>
              <div class="col-md-9">
                <h4> <a href="#"> <?php the_title() ?> </a> </h4>
                <?php the_excerpt_limit(20) ?>
              </div>
            </div>
            <?php
              endwhile;
            endif;
            ?>

          </div>
          <div class="col-md-6">
            <h4 class="titulo-home"> Entre em contato </h4>
            <div class="box-formcontato">
              <?php echo do_shortcode('[contact-form-7 id="32" title="Formulário de contato 1"]') ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="representacao inner">
      <div class="container">
        <h3 class="titulo-home"> Representações </h3>
        <div class="logos">
          <?php
          $page_id = 14;
          $page_data = get_page ( $page_id );
          $content = $page_data->post_content;
          $title = $page_data->post_title;
           remove_filter ('the_content','wpautop');
          echo apply_filters( 'the_content', $page_data->post_content );
          ?>
        </div>
      </div>
    </section>
<?php get_footer() ?>
