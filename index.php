<?php get_header(); ?>

<?php while (have_posts()) {
    the_post(); ?>

    <div class="blog-post">
        <h2 class="blog-post-title"> <?php the_title(); ?> </h2>
        <p class="blog-post-meta">
            <?php the_date(); ?> por <?php the_author(); ?>
        </p>

        <?= the_excerpt(); ?>

        <a href="<?= the_permalink(); ?>">Ver mas...</a>
    </div>
<?php } ?>


<div class="nav-previous alignleft"><?php previous_posts_link('Entradas más antiguas'); ?></div>
<div class="nav-next alignright"><?php next_posts_link('Entradas más recientes'); ?></div>

</div>
</div>
</main>
</body>
<footer class="blog-footer">
    <div class="contariner">
        <div class="row">
            <div class="col-md-6"><?php echo get_bloginfo("description") ?> </div>
            <div class="col-md-6">
              <?php get_footer()?>
            </div>
        </div>
    </div>
</footer>

</html>