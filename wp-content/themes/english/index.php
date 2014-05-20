<?php
get_header();

//获取页码
$currentPageNumber=get_query_var('paged')?get_query_var('paged'):1;
?>

   <section class="main" id="main">
       <section class="left">
            <ul class="postList">
            <?php
            $currentCount=0;
            $backgroundSrc="";
            $thumbSrc="";
            while ( have_posts() ) : the_post();
                $postId=get_the_ID();

                    if($currentCount==0&&$currentPageNumber==1){
                        if($background=get_post_meta($postId,"zy_background",true)){
                            $background=json_decode($background,true);
                            $backgroundSrc=$background["filepath"];
                        }
                        ?>
                        <li class="topPost">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo $backgroundSrc; ?>">
                                <span class="topPostDate">NEWS</span>
                                <div class="topPostDetail">
                                    <h2 class="topPostTitle"><?php the_title(); ?></h2>
                                    <p class="topPostExcerpt"><?php echo get_the_excerpt(); ?></p>
                                </div>
                            </a>
                        </li>
                    <?php
                    }else{
                        if(has_post_thumbnail($postId)){
                            $thumbnailId=get_post_thumbnail_id($postId);
                            if(wp_get_attachment_metadata($thumbnailId)){

                                //如果存在保存媒体文件信息的metadata，那么系统是可以获取出缩略图的
                                $thumbSrc= wp_get_attachment_image_src($thumbnailId,"post-thumbnail");
                                $thumbSrc=$thumbSrc[0];
                            }
                        }
                        ?>
                        <li class="post">
                            <div class="postThumbContainer">
                                <span class="postDate"><?php echo get_the_date(); ?></span>
                                <img class="postThumb" src="<?php echo $thumbSrc; ?>">
                            </div>
                            <div class="postDetail">
                                <h2 class="postTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="postExcerpt"><?php echo get_the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="postMore">阅读更多</a>
                            </div>
                        </li>
                    <?php
                    }

                    $currentCount++;
                ?>


            <?php endwhile; ?>
            </ul>

            <!-- 分页-->
            <?php
                global $wp_query;
                $total = $wp_query->max_num_pages;
                if ($total > 1) {
                    if (!$current_page = get_query_var('paged')) {
                        $current_page = 1;
                    }
                    //获取路径
                    $permalink_structure = get_option('permalink_structure');
                    $format = empty($permalink_structure) ? '&page=%#%' : '/page/%#%/';
                    echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => $format,
                        'current' => $current_page,
                        'total' => $total, 'mid_size' => 4,
                        'type' => 'list',
                        'prev_text'    => "Prev",
                        'next_text'    => "Next",
                    ));
                }
            ?>
       </section>

       <?php get_template_part("right"); ?>

   </section>

<?php get_footer(); ?>