<?php 
    get_header();
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
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

<section class="section">
    <div class="inner">
        <h1><?php the_title(); ?></h1>
        <div class="galeria">
            <div class="box">
                <figure>
                    <?php the_post_thumbnail('large'); ?>
                </figure>
            </div>
            <div class="box">
                <div class="info">
                    <span><strong>Modelo:</strong> <?php the_title(); ?></span>
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
                    <span><strong>Opcionais:</strong></span>
                    <div class="obs">
                        <?php echo $opcionais; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if($vendido) : ?>
                <div class="selo">
                    <img src="<?php bloginfo('template_directory'); ?>/app/images/vendido.png" alt="<?php wp_title(); ?>">
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="fotos">
            <?php if($fotos) : foreach($fotos as $value) : ?>
                <figure>
                    <a href="<?php echo $value['imagem']['url']; ?>" data-fancybox="gallery">
                        <img src="<?php echo $value['imagem']['url']; ?>" alt="<?php wp_title(); ?>">
                    </a>
                </figure>
            <?php endforeach; endif; ?>
        </div>
    </div>
    <div class="form">
        <div class="inner">
            <h1>Quero Comprar!</h1>
            <?php echo do_shortcode('[contact-form-7 id="78" title="Cadastro"]'); ?>
        </div>
    </div>
</section>

<?php 
    endwhile; 
    endif;
    get_footer(); 
?>