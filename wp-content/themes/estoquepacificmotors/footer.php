<footer>
    <div class="container">
        <div class="col-md-12">
            <?php 
                query_posts('page_id=74'); 
                while (have_posts ()): the_post(); 
                the_content();
                endwhile; 
            ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script>
var SPMaskBehavior = function(val) {
    return val.replace(/\D/g, '').length === 11 ? '00000-0000' : '0000-00009';
},
spOptions = {
    onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
    }
};
jQuery('.phone').mask(SPMaskBehavior, spOptions);
</script>

</body>

</html>