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
                <?php while ( have_posts() ) : the_post();
                    if(in_category($resourceCatArray,$post)){
                        $postId=get_the_ID();
                        $backgroundSrc="";
                        $category=get_the_category($postId);
                        //print_r($category);
                        if($category[0]->term_id==$videoResource){
                            $typeClass="video";
                        }else{
                            $typeClass="typo";
                        }

                        if($background=get_post_meta($postId,"zy_background",true)){
                            $background=json_decode($background,true);
                            $backgroundSrc=$background["filepath"];
                        }
                    ?>

                        <img class="postBg" src="<?php echo $backgroundSrc; ?>">
                        <div class="postDownContainer">
                            <a target="_blank" href="<?php echo get_the_content(); ?>" class="postDownload">DOWNLOAD</a>
                            <span class="postType <?php echo $typeClass; ?>">资源类型</span>
                        </div>

                    <?php
                    }else{
                    ?>
                        <h2 class="title"><?php the_title(); ?></h2>
                        <p class="date"><?php the_date(); ?></p>
                        <?php the_content(); ?>
                    <?php
                    }
                    ?>
                <?php endwhile; // end of the loop. ?>

                <a class="returnTop" id="returnTop" href="#header">回到顶部</a>
            </article>
            <nav class="postNav">
                <h3 class="postNavNext">
                    <?php next_post_link('%link', '下一篇：%title<span class="nextPostDate">%date</span>'); ?>
                </h3>
            </nav>
        </section>


        <?php get_template_part("right"); ?>

    </section>

<?php get_footer(); ?>