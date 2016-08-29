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
                                <h3><a href=" <?php the_permalink(); ?> "><?php the_title()?></a></h3><br>
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
<script>
$(window).resize(function(){
    var height = $(window).height();
    var width = $(window).width();
    var ratio = width/height;
    $("p").css("font-size",ratio*28);
    $(".readmore").css("font-size",ratio*26);
    $("h3>a").css("font-size",ratio*35);
    $(".avatar-120").css({"height":ratio*200, "width":ratio*200});
    $(".title-avatar").css("font-size",ratio*35);
    $(".title-text").css("font-size",ratio*35);
    $(".tags,div.tags>a").css("font-size",ratio*30);
});
var height = $(window).height();
var width = $(window).width();
var ratio = width/height;
$("p").css("font-size",ratio*28);
$(".readmore").css("font-size",ratio*26);
$("h3>a").css("font-size",ratio*35);
$(".avatar-120").css({"height":ratio*200, "width":ratio*200});
$(".title-avatar").css("font-size",ratio*35);
$(".title-text").css("font-size",ratio*35);
$(".tags,div.tags>a").css("font-size",ratio*30);
$(".post-content,.title-post").mouseover(function(){
    $('.sidebar-area').css("width","0px");
    setTimeout (function(){
            $('.sidebar-area').css("display","none");
    },500);
})
$(".post-content,.title-post").mouseout(function(){
    $('.sidebar-area').css("width","50%");
    setTimeout (function(){
        $('.sidebar-area').css("display","flex");
    },500);
})

</script>