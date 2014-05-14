<?php
    get_header();
    $videoResource=6;
    $textResource=7;
?>

    <section class="main">
        <section class="left">
            <ul class="postList">
                <?php
                $backgroundSrc="";
                $postId=0;
                $typeClass="";
                $category=null;
                while ( have_posts() ) : the_post();
                    $postId=get_the_ID();
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
                    <li class="post">
                        <img class="postBg" src="<?php echo $backgroundSrc; ?>">
                        <div class="postDownContainer">
                            <a target="_blank" href="<?php echo get_the_content(); ?>" class="postDownload">DOWNLOAD</a>
                            <span class="postType <?php echo $typeClass; ?>">资源类型</span>
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