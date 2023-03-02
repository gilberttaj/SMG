<?php /* Template Name: News Template */ ?>
<?php get_header(); ?>

<!-- <div class='flex w-[55%] mx-auto justify-between flex-wrap'> -->
    <!-- < ?php

        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        $posts_per_page = 8;

        $query = new WP_Query( array(
            'post_type' => 'news',          // name of post type.
            'posts_per_page' => $posts_per_page,
            'paged' => $paged
        ) );
        if ( $query->have_posts() ) {
        while ( $query->have_posts() ) : $query->the_post();
    ?>              
        <div class='w-[17%] bg-[yellow]'>
                    <p><?php echo get_the_title() ?></p>
                    <p><?php echo get_the_content() ?></p>
        </div>
    < ?php
        endwhile;
        
        wp_reset_query();
        ?>
    < ?php 
        // Display pagination links
        echo paginate_links( array('total' => $query->max_num_pages) );
        }
    ?> -->

    <!-- < ?php 
        $total_posts = wp_count_posts()->publish;
        echo $total_posts;
    ?>

</div> -->

<!-- HEADER Schedule -->
<div class="min-[751px]:mt-[76px] max-[750px]:mt-[64px] relative flex justify-center items-center">
    <div class="w-full">
        <img class="w-full lg:h-[350px] h-[320px]" src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/Group 11940.png" >
    </div>
    <div class="absolute top-0 h-full w-full flex justify-center items-center" data-aos="fade-up">
        <div class="text-center">
            <h1 class="text-[48px] font-bold josefin-sans text-white leading-[58.09px]">NEWS</h1>
            <p class="text-[20px] font-bold noto-sans text-white leading-[24.2px] tracking-[4px] ">ニュース</p>
        </div>
    </div>
</div>

<!-- BREADCRUMBS -->
<div class="min-[751px]:w-[52.5%] min-[751px]:mx-auto mt-4 max-[750px]:px-5">
    <p class="text-[12px] noto-sans leading-[18px] tracking-[3px] text-[#959595] max-[750px]:text-[18px] max-[750px]:leading-[27px]"><a href="<?= site_url()?>">ホーム</a>  >ニュース</p>
</div>


<!-- First TAB PANE -->
<div class="xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mx-auto mt-[114px] max-[750px]:mt-[44px]">
    <div class="flex font-bold noto-sans text-[20px] leading-[32px] tracking-[2px] text-center border-b-2 border-black  flex-wrap tab-news">
        <a href="<?= site_url('./news-page')?>?cat=all" class="w-[20%] max-[750px]:w-[50%] py-[25px] hover:text-white" id='newsLink1'>
            一覧
        </a>
        <a href="<?= site_url('./news-page')?>?cat=release" class="w-[20%] max-[750px]:w-[50%] py-[25px] hover:text-white hover:bg-black" id='newsLink2'>
            リリース
        </a>
        <a href="<?= site_url('./news-page')?>?cat=report"  class="w-[20%] max-[750px]:w-[33.33%] py-[25px] hover:bg-black hover:text-white" id='newsLink3'>
            レポート
        </a>
        <a href="<?= site_url('./news-page')?>?cat=events" class="w-[20%] max-[750px]:w-[33.33%] py-[25px] hover:bg-black hover:text-white" id='newsLink4'>
            イベント
        </a>
        <a href="<?= site_url('./news-page')?>?cat=interview"  class="w-[20%] max-[750px]:w-[33.33%] py-[25px] hover:bg-black hover:text-white" id='newsLink5'>
            インタビュー
        </a>
    </div>
</div>

<!-- Content -->
<div class="min-[1800px]:w-[50%] xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mt-[70px] max-[750px]:mt-[45px] mx-auto">
    <!-- Start of First Content -->
    <div>   
        <div class="flex gap-x-[30px] gap-y-[70px] mt-[70px] flex-wrap justify-center">
            <?php

                $queryString = $_SERVER['QUERY_STRING'];
                parse_str($queryString, $params);
                $cat = $params['cat'];

                $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                $posts_per_page = 9;

                if(!$cat || $cat == 'all'){
                    $query = new WP_Query( array(
                        'post_type' => 'news',          // name of post type.
                        'posts_per_page' => $posts_per_page,
                        'paged' => $paged,
                        'order' => 'ASC',
                    ) );
                }

                if($cat == 'release'){
                    $query = new WP_Query( array(
                        'post_type' => 'news',          // name of post type.
                        'posts_per_page' => $posts_per_page,
                        'paged' => $paged,
                        'order' => 'ASC',
                        'meta_key' => 'TYPE',
                        'meta_value' => 'リリース',

                    ) );
                }

                if($cat == 'report'){
                    $query = new WP_Query( array(
                        'post_type' => 'news',          // name of post type.
                        'posts_per_page' => $posts_per_page,
                        'paged' => $paged,
                        'order' => 'ASC',
                        'meta_key' => 'TYPE',
                        'meta_value' => 'レポート',

                    ) );
                }

                if($cat == 'events'){
                    $query = new WP_Query( array(
                        'post_type' => 'news',          // name of post type.
                        'posts_per_page' => $posts_per_page,
                        'paged' => $paged,
                        'order' => 'ASC',
                        'meta_key' => 'TYPE',
                        'meta_value' => 'イベント',

                    ) );
                }

                if($cat == 'interview'){
                    $query = new WP_Query( array(
                        'post_type' => 'news',          // name of post type.
                        'posts_per_page' => $posts_per_page,
                        'paged' => $paged,
                        'order' => 'ASC',
                        'meta_key' => 'TYPE',
                        'meta_value' => 'インタビュー',

                    ) );
                }


                if ( $query->have_posts() ) {
                while ( $query->have_posts() ) : $query->the_post();
            ?>  
                <div class="xl:w-[30%] min-[751px]:w-[43%] max-[750px]:w-full mb-[5px] bg-white">
                    <div class="relative overflow-hidden cursor-pointer">
                        <a href='<?= site_url()?>/news-detail?id=<?php echo get_the_ID()?>'>
                            <div class="transition duration-300 ease-in hover:scale-110">
                                <?php echo get_the_post_thumbnail() ?>
                                <div class="absolute top-0 w-full h-full">
                                    <div class="relative w-full h-full flex justify-center items-center">
                                        <div class="leading-[18px]">
                                            <span class='noto-sans text-white px-[20px] bg-[black] text-[10px] font-bold py-[8px]'>ご支給ください</span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>  
                        </a>    
                        <span class='absolute bottom-0 left-0 bg-[#E1007E] text-[12px] text-white noto-sans font-medium py-[5px] px-[15px] tracking-wider'><?php echo get_field('Tag')?></span>
                    </div>
                    <div class='p-[20px] shadow-lg'>
                        <div class='leading-[18px]'>
                            <span class='noto-sans text-[12px] text-[#808080] font-normal'><?php echo get_field('Date')?></span>
                            <span class='noto-sans text-[12px] text-[#D19F00] font-bold'><?php echo get_field('Type')?></span>
                        </div>
                        <div class='no-scroll noto-sans text-[14px] leading-[28px] font-medium tracking-[-1.5px] h-[78px] overflow-y-scroll mt-[18px]'>
                            <p class='leading-[28px]'><?php echo get_field('Content')?></p>
                            <!-- <p class='leading-[28px]'>います。コピーができ次第、差し替えますの</p>
                            <p class='leading-[28px]'>で今しばらくお待ちください。どうぞよろし</p>
                            <p>くお願いいたします。</p> -->
                    
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_query();
            ?>
        </div>
    </div>
    <!-- End Of First Content -->
</div>
<div class='pagination flex justify-center mt-[120px] josefin-sans text-[20px] font-bold'>
    <?php
               global $wp_query;
 
               $big = 999999999; // need an unlikely integer
            
               $pages = paginate_links( array(
                   'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                   'format'    => '?paged=%#%',
                   'current'   => max( 1, get_query_var('paged') ),
                   'total'     => $query->max_num_pages,
                   'type'      => 'array',
                   'prev_text' => __('&#8249;'),
                   'next_text' => __('&#8250;'),
                   'mid_size' => 5,
               ) );
            
               if ( is_array( $pages ) ) {
                   $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            
                   echo '<ul class="pagination">';
            
                   // Add first page link
                   if ( $paged > 1 ) {
                       echo '<li><a href="' . esc_url( get_pagenum_link( 1 ) ) . '">&laquo; ' . __('') . '</a></li>';
                   }
            
                   foreach ( $pages as $page ) {
                       if (strpos($page, 'current') !== false) {
                           echo '<li class="active">' . $page . '</li>';
                       } else {
                           echo '<li>' . $page . '</li>';
                       }
                   }
            
                   // Add last page link
                   if ( $paged < $query->max_num_pages ) {
                       echo '<li><a href="' . esc_url( get_pagenum_link( $query->max_num_pages ) ) . '">' . __('') . ' &raquo;</a></li>';
                   }
            
                   echo '</ul>';
               }
        }
    ?>
</div>  


<?php get_footer(); ?>


<script>
    $(document).ready(function(){
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        let string = urlParams.get('cat')


        if(string == 'all' || !string){
            $('#newsLink1').css('backgroundColor', '#000');
            $('#newsLink1').css('color', '#fff');
        }

        if(string == 'release'){
            $('#newsLink2').css('backgroundColor', '#000');
            $('#newsLink2').css('color', '#fff');
        }

        if(string == 'report'){
            $('#newsLink3').css('backgroundColor', '#000');
            $('#newsLink3').css('color', '#fff');
        }

        if(string == 'events'){
            $('#newsLink4').css('backgroundColor', '#000');
            $('#newsLink4').css('color', '#fff');
        }

        if(string == 'interview'){
            $('#newsLink5').css('backgroundColor', '#000');
            $('#newsLink5').css('color', '#fff');
        }
    });
</script>