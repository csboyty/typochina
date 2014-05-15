<aside class="right">
    <form role="search" method="get" id="searchform" class="hnid_search_form" action="<?php echo home_url(); ?>">
        <input type="text" name="s" class="searchInput" id="searchInput" placeholder="搜索...">
    </form>
    <div>
        <h2 class="rightItemTitle">记录</h2>
        <div class="tagList" id="tagList">
            <?php wp_tag_cloud(array(
                'smallest'=> 12,
                'largest' => 12,
                'unit' => 'px',
            ));?>
        </div>
    </div>
    <div>
        <h2 class="rightItemTitle">链接</h2>
        <ul class="linkList">
            <?php
                wp_list_bookmarks(array(
                    'title_li'=>null
                ));
            ?>
        </ul>
    </div>
</aside>