<?php get_header(); ?>

    <section class="main">
        <section class="left">
            <header>
                <span class="tagTitle">标签：<?php single_tag_title(); ?></span>
            </header>
            <ul class="postList">
                <?php
                $thumbSrc="";
                while ( have_posts() ) : the_post();
                    $postId=get_the_ID();

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
                    'prev_text'    => "上一页",
                    'next_text'    => "下一页",
                ));
            }
            ?>
        </section>

        <?php get_template_part("right"); ?>

    </section>

<?php get_footer(); ?>