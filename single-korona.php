<?php get_header(); ?>
<div class="single-korony-panel">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
                <div class="single-korony-subpanel">
                    <h2 class="korony-single-title"><?php the_title(); ?></h2>
                    <div class="korony-content">
                        <div class="korony-sub-title">
                            <?php the_field("sub-title"); ?>
                        </div>
                        <div class="korony-height">
                            <?php the_field("height"); ?>
                        </div>
                        <?php 
                            $descriptions = get_field("descriptions");
                            if(is_array($descriptions)) : 
                                foreach ($descriptions as $value) : ?>
                                    <p class="korony-text">
                                        <?php echo($value["text"]); ?>
                                    </p>    
                                <?php endforeach; ?>
                            <?php 
                            elseif (!empty($descriptions)) : 
                                echo $descriptions;
                            endif;
                        ?>
                    </div>
                </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Brak wpisów w tej kategorii.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>