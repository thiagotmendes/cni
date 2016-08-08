<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php
	      if ( is_single() ) {
	        bloginfo('name'); echo " | "; single_post_title();
	      }elseif ( is_home() || is_front_page() ) {
	        bloginfo('name'); echo ' | ';
	        bloginfo('description');
	      }elseif ( is_page() ) {
	        single_post_title('');
	      }elseif ( is_search() ) {
	        bloginfo('name');
	        echo ' | Search results for ' . wp_specialchars($s);
	      }elseif ( is_404() ) {
	        bloginfo('name');
	        print ' | Not Found';
	      }else {
	        bloginfo('name');
	        wp_title('|');
	      }
      	?>
    </title>

    <!-- Bootstrap -->
    <?php wp_head() ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <header>
      <section class="barra-superior">
        <div class="container">
          <div class="pull-left links-superior">
            <!--<a href="#" target="_blank"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>-->
            <a href="https://www.facebook.com/cniconsultoriaenegociosinternacionais" target="_blank"> <i class="fa fa-facebook-official" aria-hidden="true"></i> </a>
            <a href="https://www.linkedin.com/company/9280856?trk=vsrp_companies_res_name&trkInfo=VSRPsearchId%3A2232478971470406368120%2CVSRPtargetId%3A9280856%2CVSRPcmpt%3Aprimary"
            target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
          </div>
          <div class="pull-right links-superior">
            <a href="<?php echo esc_url( home_url( 'responsabilidade-ambiental' ) ); ?>">
              <img src="<?php echo get_template_directory_uri() ?>/images/i1.png" alt="" /> Responsabilidade Ambiental
            </a>
            <a href="<?php echo esc_url( home_url( 'cambio' ) ); ?>">
              <img src="<?php echo get_template_directory_uri() ?>/images/i2.png" alt="" /> Câmbio
            </a>
            <a href="<?php echo esc_url( home_url( 'pesosmedidas-e-convencoes' ) ); ?>">
              <img src="<?php echo get_template_directory_uri() ?>/images/i3.png" alt="" /> Pesos, &nbsp;&nbsp;Medidas e convenções
            </a>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>
      </section>
      <nav class="navbar navbar-cni" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="" /> </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar">
            <?php
  		    	$args = array(
  		    		'menu' => 'principal',
  		    		'menu_class' => 'nav navbar-nav navbar-right',
  		    		'walker'	 => new wp_bootstrap_navwalker()
  		    	);
  		    	wp_nav_menu( $args );
            ?>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
