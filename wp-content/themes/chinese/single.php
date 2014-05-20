<?php
get_header();

$resourceId=5;
?>

    <section class="main">
        <section class="left">
            <article class="postSingle">
                <?php while ( have_posts() ) : the_post();
                    if(in_category($resourceId,$post)){
                        $postId=get_the_ID();
                        $backgroundSrc="";


                        if($background=get_post_meta($postId,"zy_background",true)){
                            $background=json_decode($background,true);
                            $backgroundSrc=$background["filepath"];
                        }
                    ?>

                        <img class="postBg" src="<?php echo $backgroundSrc; ?>">
                        <div class="postDownContainer">
                            <a target="_blank" href="<?php echo get_the_content(); ?>" class="postDownload">DOWNLOAD</a>
                            <!--<span class="postType <?php /*echo $typeClass; */?>">资源类型</span>-->
                        </div>

                    <?php
                    }else{
                    ?>
                        <h2 class="title"><?php the_title(); ?></h2>
                        <span class="tags"><?php the_tags("记录："); ?></span>
                        <span class="date"><?php the_date(); ?></span>
                        <?php the_content(); ?>
                    <?php
                    }
                    ?>
                <?php endwhile; // end of the loop. ?>

                <a class="returnTop" id="returnTop" href="#header">回到顶部</a>
            </article>
            <nav class="postNav">
                <h3 class="postNavNext">

                    <?php
                        $nextPost=get_next_post();
                        //print_r($nextPost);
                        $tagArray=get_the_tags($nextPost->ID);
                        //print_r($tagArray);
                        $tags=array();
                        $tagsString="";
                        if($tagArray&&count($tagArray)!=0){
                            foreach($tagArray as $tag){
                                array_push($tags,$tag->name);
                            }

                            $tagsString="记录：".implode(",",$tags);
                        }

                        next_post_link("%link", "下一篇：%title<span class='nextPostDate'>$tagsString</span>",true); ?>
                </h3>
            </nav>
        </section>


        <?php get_template_part("right"); ?>

    </section>

<?php get_footer(); ?>