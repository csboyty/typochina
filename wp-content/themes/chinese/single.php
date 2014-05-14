<?php
get_header();

$resourceId=5;
$resourceCategories=get_categories(array("parent"=>$resourceId,"hide_empty"=>false,'orderby'=>'id'));
$resourceCatArray=array();
foreach ($resourceCategories as $key=>$category) {
    array_push($resourceCatArray,$category->term_id);
}
?>

    <section class="main">
        <section class="left">
            <article class="postSingle">
                <?php while ( have_posts() ) : the_post(); ?>
                    <h2 class="title"><?php the_title(); ?></h2>
                    <p class="date"><?php the_date(); ?></p>
                    <?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>

                <a class="returnTop" id="returnTop" href="#header">回到顶部</a>
            </article>
            <nav class="postNav">
                <h3 class="postNavNext">
                    <?php next_post_link('%link', '下一篇：%title<span class="nextPostDate">%date</span>',
                        false, $resourceCatArray); ?>
                </h3>
            </nav>
        </section>


        <?php get_template_part("right"); ?>

    </section>

<?php get_footer(); ?>