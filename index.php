<div class="outerbox">
    <!--It is the outerbox surrounding everything-->
    <div class="foreffect">
    <?php get_header(); ?>
    </div>
    <div class="Content">
        <div class="post-area">
        <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>
                    <div class="posts">
                        <div class="title-post">
                            <div class="title-avatar">
                                <?php echo get_avatar(get_the_author_meta( 'ID' ),120);?>
                                <br> By <?php the_author(); ?>
                                <hr style="width:100%;margin-top:10%;margin-bottom:1%;">
                            </div>
                            <div class="title-text">
                                <h3><?php the_title()?></h3><br>
                                <hr style="margin-top:-30px"><?php comments_number( "No Comments <br> :(" ); ?>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="post-content-div">
                                <?php the_content("<span class='readmore'>Read More</span>"); ?>
                            </div>
                            <hr style="width:100%">
                            <div class="tags">
                                Category:- <?php echo get_the_category_list(__('  ,  ' , 'X1' )) ?><br>
                                Tags :- <?php echo get_the_tag_list(' ', __('  ,  ','X1')) ?><br>
                                Posted on :- <?php the_date(); ?>
                                <?php comments_template() ; ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
        </div>
        <div class="sidebar-area">
            <?php get_sidebar(); ?>
        </div>
    </div>


    <?php get_footer(); ?>
</div>