<div class="outerbox">
    <!--It is the outerbox surrounding everything-->
    <?php get_header(); ?>
    <div class="Content">
        <div class="post-area">
        <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>
                      <div class="posts">
                <div class="title-post">
                    <?php echo get_avatar(get_the_author_meta( 'ID' ),                          40);?>&nbsp;&nbsp;<?php the_title()?>
                    <?php the_content("Looks Interesting? Wanna Read More ?"); ?>
                    </div>
                    </div>
                    <?php endwhile; ?>
        </div>
        <div class="sidebar-area">
        asdf
            <?php get_sidebar(); ?>
        </div>
    </div>


    <?php get_footer(); ?>
</div>