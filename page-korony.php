<?php get_header(); ?>
<div class="page-korony-panel">
    <?php 
        $args = array(
        'post_type'      => 'korona', 
        'posts_per_page' => -1
        );

        $cpt_query = new WP_Query($args);
    ?>

    <?php if($cpt_query->have_posts()) : ?>
        <?php while($cpt_query->have_posts()) : $cpt_query->the_post(); ?>
            <div class="korony-post-panel">
                <h2 class="korony-post-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                <div class="korony-post-thumbnail">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
