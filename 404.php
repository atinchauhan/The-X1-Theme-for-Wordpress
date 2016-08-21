<div class="outerbox">
<div class="foreffect">
<?php get_header(); ?>
</div>

    <div class="not-found-area">
        <div class="not-found-text">
        <h1 id="not-found-text">Sorry Buddy :(<br> But there is Nothing Here</h1>
        </div>
        <div class="not-found-extra">
        <h1><a href="<?php echo home_url( '/' ); ?>" id="not-found-home-button">Let's Go Home</a></h1><br>
        <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
        <span id="tags">Tags:- &nbsp;&nbsp;&nbsp;&nbsp;<?php wp_tag_cloud( 'smallest=18' ); ?></span><br>
        <?php get_search_form() ; ?>
        </div>
    </div>
<?php get_footer(); ?>
<script>
$(function(){
    $('h2.widgettitle').after("<hr class='recent_post_title_id'>");
    $('div.widget_recent_entries').append("<hr class='recent_post_title_id'><br>");
})
</script>
</div>
