<?php /*Template Name: Landing*/ ?>
<?php get_header(); ?>

<div id="slider" class="hidden-xs">
    <?php putRevSlider( 'slider' ); ?>
</div>

<section id="cars">
    <?php
      $args = array(
        'post_type' => 'post',
        'orderby'=> 'title', 
        'order' => 'ASC'
      );
      $query = new WP_Query( $args );

      if ( $query->have_posts() ) : 
        while ( $query->have_posts() ) : 
          $query->the_post(); 
          $chassi = get_field('chassi');
          $cor = get_field('cor');
          $ano_fabricacao = get_field('ano_fabricacao');
          $ano_modelo = get_field('ano_modelo');
          $de = get_field('de');
          $por = get_field('por');
          $opcionais = get_field('opcionais');
          $de = get_field('de');
          $por = get_field('por');
          $vendido = get_field('vendido');
          $fotos = get_field('fotos');
    ?>

    <div class="box">
        <div class="info">
            <strong>Modelo:</strong> <?php the_title(); ?>
            <?php if($chassi) : ?>
            <span><strong>Chassi:</strong> <?php echo $chassi; ?></span>
            <?php endif; ?>
            <?php if($cor) : ?>
            <span><strong>Cor:</strong> <?php echo $cor; ?></span>
            <?php endif; ?>
            <?php if($ano_fabricacao) : ?>
            <span><strong>Ano:</strong> <?php echo $ano_fabricacao; ?>/<?php echo $ano_modelo; ?></span>
            <?php endif; ?>
            <?php if($por) : ?>
            <span><strong>Preço:</strong> <?php if($de) :  echo 'De: R$'. $de;  endif; ?> <br>
                Por: R$<?php echo $por; ?></span>
            <?php endif; ?>
            <?php if($opcionais) : ?>
            <strong>Opcionais:</strong>
            <div class="obs">
                <?php echo $opcionais; ?>
            </div>
            <?php endif; ?>
        </div>
        <div style="padding: 35px 0;">
            <?php the_post_thumbnail('medium'); ?>
        </div>
        <?php if($vendido) : ?>
        <div class="selo">
            <img src="<?php bloginfo('template_directory'); ?>/app/images/vendido.png" alt="<?php wp_title(); ?>">
        </div>
        <?php endif; ?>
        <a href="<?php the_permalink(); ?>" class="btn">Quero Comprar</a>
    </div>

    <?php 
        endwhile;
        endif;
      wp_reset_postdata();
    ?>
    </div>
</section>

<?php get_footer(); ?>