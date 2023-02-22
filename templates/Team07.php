<?php /* Template Name: Team 07 Template */ ?>
<?php get_header(); ?>

<!-- HEADER ABOUT -->
<div class="relative flex justify-center items-center">
    <div class="w-full">
        <img class="w-full lg:h-[350px] h-[320px] min-[751px]:hidden" src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/team_02/Group 12020.png" >
        <img class="w-full lg:h-[350px] h-[320px] max-[751px]:hidden" src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/team_02/Group 11942.png" >
    </div>
    <div class="absolute top-0 h-full w-full flex justify-center items-center">
        <div class="text-center">
            <h1 class="text-[48px] font-bold josefin-sans text-white leading-[58.09px]">TEAM</h1>
            <p class="text-[20px] font-bold noto-sans text-white leading-[24.2px] tracking-[4px] ">選手・チーム紹介</p>
        </div>
    </div>
</div>

<!-- BREADCRUMBS -->
<div class="min-[751px]:w-[52.5%] min-[751px]:mx-auto mt-4 max-[750px]:px-5">
    <p class="text-[12px] noto-sans leading-[18px] tracking-[3px] text-[#959595]"><a href="<?= site_url()?>">ホーム</a>  >選手・チーム紹介　　サテライト</p>
</div>

<!-- First TAB PANE -->
<div class="xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mx-auto mt-[114px] max-[750px]:mt-[44px]">
    <div class="flex font-bold noto-sans text-[20px] leading-[32px] tracking-[2px] text-center border-b-2 border-[#E1007E]  flex-wrap">
        <a href="<?= site_url('/team-05') ?>" class="w-[20%] max-[750px]:w-[50%] py-[25px] hover:bg-[#E1007E] hover:text-white">
            陸上競技
        </a>
        <a href="<?= site_url('/team-06') ?>" class="w-[20%] max-[750px]:w-[50%] py-[25px] hover:text-white hover:bg-[#E1007E]">
            トップチーム
        </a>
        <a href="<?= site_url('/team-07') ?>"  class="w-[20%] max-[750px]:w-[33.33%] py-[25px] bg-[#E1007E] text-white">
            サテライト
        </a>
        <a href="" class="w-[20%] max-[750px]:w-[33.33%] py-[25px] hover:bg-[#E1007E] hover:text-white">
            U-18
        </a>
        <a href="<?= site_url('/team-09') ?>"  class="w-[20%] max-[750px]:w-[33.33%] py-[25px] hover:bg-[#E1007E] hover:text-white">
            U-15
        </a>
    </div>
</div>

<!-- Second TAB PANE -->
<div class="xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mx-auto mt-[114px] max-[750px]:mt-[44px]">
    <div class="flex font-bold noto-sans text-[20px] leading-[32px] tracking-[2px] text-center flex-wrap border-collapse">
        <a href="#gk" class="flex flex-col text-[#004EA1] border-2 max-[750px]:border-b-0 border-r-0 border-[#004EA1] w-[20%] max-[750px]:w-[33.33%] py-[25px] hover:bg-[#004EA1] hover:text-white">
            GK
            <i class="fa-solid fa-chevron-down"></i>
        </a>
        <a href="#df" class="flex flex-col text-[#004EA1] border-2 max-[750px]:border-b-0 border-r-0 border-[#004EA1] w-[20%] max-[750px]:w-[33.33%] py-[25px] hover:bg-[#004EA1] hover:text-white">
            DF
            <i class="fa-solid fa-chevron-down"></i>
        </a>
        <a href="#mf" class="flex flex-col text-[#004EA1] border-2 min-[751px]:border-r-0 border-[#004EA1] w-[20%] max-[750px]:w-[33.33%] py-[25px] hover:bg-[#004EA1] hover:text-white">
            MF
            <i class="fa-solid fa-chevron-down"></i>
        </a>
        <a href="#fw" class="flex flex-col text-[#004EA1] border-2 min-[751px]:border-r-0 max-[750px]:border-r-0 border-[#004EA1] w-[20%] max-[750px]:w-[33.33%] py-[25px] hover:bg-[#004EA1] hover:text-white">
            FW
            <i class="fa-solid fa-chevron-down"></i>
        </a>
        <a href="#team_staff" class="flex flex-col text-[#004EA1] border-2 border-[#004EA1] w-[20%] max-[750px]:w-[33.33%] py-[25px] hover:bg-[#004EA1] hover:text-white">
            Team Staff
            <i class="fa-solid fa-chevron-down"></i>
        </a>
    </div>
</div>

<!-- GK CONTENT -->
<div class="relative overflow-hidden" id="gk">
    <!-- <img src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/left-blue.png" 
        class="absolute top-[35%] max-[750px]:hidden
        min-[751px]:max-lg:left-[-45%] lg:max-xl:left-[-25%] xl:max-2xl:left-[-15%]
        max-[750px]:top-[-5%] max-[750px]:left-[-72%] max-[700px]:left-[-76%] max-[650px]:left-[-80%]
    "> -->
    <div class="xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mx-auto min-[751px]:mt-[129px] max-[751px]:mt-[111px] relative">
        <div class="min-[751px]:w-[90%] mx-auto">
            <div class="font-bold">
                <span class="josefin-sans text-[64px] leading-[96px]">GK</span> 
                <span class="ml-[20px] text-[21px] leading-[42px]">ゴールキーパー</span>
            </div>
            <div class="flex flex-wrap min-[751px]:gap-[20px] max-[750px]:justify-between">
                <?php
                    $query = new WP_Query( array(
                        'post_type' => 'players', 
                        'order' => 'ASC',
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'players_cat',
                                'field' => 'gk7',
                                'terms' => 8
                            )
                        ),
                    ) );
                    
                    while ( $query->have_posts() ) : $query->the_post();
                ?> 
                    <div class="w-[30%] max-[750px]:w-[43%] mb-[41px]">
                        <div class="relative overflow-hidden cursor-pointer">
                            <div  class='transition duration-300 ease-in hover:scale-110'>
                                <?php echo get_the_post_thumbnail() ?>
                            </div>
                            <?php if( get_post_meta($post->ID, 'additional_info', true)) {?>
                                    <div class="absolute bg-[#E1007E] bottom-0">
                                        <p class="px-[16px] py-[7px] text-white text-[20px] tracking-[2px] leading-[32px]"><?php echo get_post_meta($post->ID, 'additional_info', true); ?></p>
                                    </div>
                            <?php }?>
                        </div>
                        <div class="flex mt-[30px]">
                            <div class="w-[25%] text-center">
                                <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px]"><?php echo get_post_meta($post->ID, 'jersey_no', true); ?></p>
                            </div>
                            <div class="ml-[14px]">
                                <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px]"><?php echo get_post_meta($post->ID, 'name_jap', true); ?></p>
                                <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px]"><?php echo get_post_meta($post->ID, 'name_eng', true); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>
            </div>
        </div>
    </div>
    <!-- <img src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/right-pink.png" 
        class="max-[750px]:hidden bottom-[0] right-0 absolute
            min-[751px]:max-lg:right-[-45%] lg:max-xl:right-[-25%] xl:max-2xl:right-[-15%]
            max-[750px]:right-[-72%] max-[700px]:right-[-76%] max-[650px]:right-[-80%] z-[-1]
    "> -->
</div>

<!-- DF CONTENT -->
<div class="relative overflow-hidden" id="df">
    <!-- <img src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/left-pink.png" 
        class="absolute bottom-[0] max-[750px]:hidden
        min-[751px]:max-lg:left-[-45%] lg:max-xl:left-[-25%] xl:max-2xl:left-[-15%]
        max-[750px]:top-[-5%] max-[750px]:left-[-72%] max-[700px]:left-[-76%] max-[650px]:left-[-80%]
    "> -->
    <div class="xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mx-auto relative">
        <div class="min-[751px]:w-[90%] mx-auto">
            <div class="font-bold">
                <span class="josefin-sans text-[64px] leading-[96px]">DF</span> 
                <span class="ml-[20px] text-[21px] leading-[42px]">ディフェンダー</span>
            </div>
            <div class="flex flex-wrap  min-[751px]:gap-[20px] max-[750px]:justify-between">
                <!-- START OF QUERY -->
                <?php
                    $query = new WP_Query( array(
                        'post_type' => 'players', 
                        'order' => 'ASC',
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'players_cat',
                                'field' => 'df7',
                                'terms' => 9
                            )
                        ),
                    ) );
                    
                    while ( $query->have_posts() ) : $query->the_post();
                ?> 
                    <div class="w-[30%] max-[750px]:w-[43%] mt-[41px]">
                        <div class="relative overflow-hidden cursor-pointer">
                            <div  class='transition duration-300 ease-in hover:scale-110'>
                                <?php echo get_the_post_thumbnail() ?>
                            </div>
                            <?php if( get_post_meta($post->ID, 'additional_info', true)) {?>
                                    <div class="absolute bg-[#E1007E] bottom-0">
                                        <p class="px-[16px] py-[7px] text-white text-[20px] tracking-[2px] leading-[32px]"><?php echo get_post_meta($post->ID, 'additional_info', true); ?></p>
                                    </div>
                            <?php }?>
                        </div>
                        <div class="flex mt-[30px]">
                            <div class="w-[25%] text-center">
                                <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px]"><?php echo get_post_meta($post->ID, 'jersey_no', true); ?></p>
                            </div>
                            <div class="ml-[14px]">
                                <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px]"><?php echo get_post_meta($post->ID, 'name_jap', true); ?></p>
                                <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px]"><?php echo get_post_meta($post->ID, 'name_eng', true); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>
                <!-- END OF QUERY -->
            </div>
        </div>
    </div>
</div>

<!-- MF CONTENT -->
<div class="relative overflow-hidden" id="mf">
    <div class="xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mx-auto min-[751px]:mt-[129px] max-[751px]:mt-[111px] relative">
        <div class="min-[751px]:w-[90%] mx-auto">
            <div class="font-bold">
                <span class="josefin-sans text-[64px] leading-[96px]">MF</span> 
                <span class="ml-[20px] text-[21px] leading-[42px]">ミッドフィルダー</span>
            </div>
            <div class="flex flex-wrap min-[751px]:gap-[20px] max-[750px]:justify-between">
                <!-- START OF QUERY -->
                <?php
                    $query = new WP_Query( array(
                        'post_type' => 'players', 
                        'order' => 'ASC',
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'players_cat',
                                'field' => 'mf7',
                                'terms' => 10
                            )
                        ),
                    ) );
                    
                    while ( $query->have_posts() ) : $query->the_post();
                ?> 
                    <div class="w-[30%] max-[750px]:w-[43%] mb-[41px]">
                        <div class="relative overflow-hidden cursor-pointer">
                            <div  class='transition duration-300 ease-in hover:scale-110'>
                                <?php echo get_the_post_thumbnail() ?>
                            </div>
                                <?php if( get_post_meta($post->ID, 'additional_info', true)) {?>
                                        <div class="absolute bg-[#E1007E] bottom-0">
                                            <p class="px-[16px] py-[7px] text-white text-[20px] tracking-[2px] leading-[32px]"><?php echo get_post_meta($post->ID, 'additional_info', true); ?></p>
                                        </div>
                                <?php }?>
                        </div>
                        <div class="flex mt-[30px]">
                            <div class="w-[25%] text-center">
                                <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px]"><?php echo get_post_meta($post->ID, 'jersey_no', true); ?></p>
                            </div>
                            <div class="ml-[14px]">
                                <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px]"><?php echo get_post_meta($post->ID, 'name_jap', true); ?></p>
                                <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px]"><?php echo get_post_meta($post->ID, 'name_eng', true); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>
                <!-- END OF QUERY -->
            </div>
        </div>
    </div>
</div>


<!-- FW CONTENT -->
<div class="relative overflow-hidden" id="fw">
    <!-- <img src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/left-pink.png" 
        class="absolute bottom-[0] max-[750px]:hidden
        min-[751px]:max-lg:left-[-45%] lg:max-xl:left-[-25%] xl:max-2xl:left-[-15%]
        max-[750px]:top-[-5%] max-[750px]:left-[-72%] max-[700px]:left-[-76%] max-[650px]:left-[-80%]
    "> -->
    <div class="xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mx-auto relative">
        <div class="min-[751px]:w-[90%] mx-auto">
            <div class="font-bold">
                <span class="josefin-sans text-[64px] leading-[96px]">FW</span> 
                <span class="ml-[20px] text-[21px] leading-[42px]">フォワード</span>
            </div>
            <div class="flex flex-wrap  min-[751px]:gap-[20px] max-[750px]:justify-between">
                <!-- START OF QUERY -->
                    <?php
                        $query = new WP_Query( array(
                            'post_type' => 'players', 
                            'order' => 'ASC',
                            'tax_query' => array(
                                array (
                                    'taxonomy' => 'players_cat',
                                    'field' => 'fw7',
                                    'terms' => 11
                                )
                            ),
                        ) );
                        
                        while ( $query->have_posts() ) : $query->the_post();
                    ?> 
                        <div class="w-[30%] max-[750px]:w-[43%] mt-[41px]">
                            <div class="relative overflow-hidden cursor-pointer">
                                <div  class='transition duration-300 ease-in hover:scale-110'>
                                    <?php echo get_the_post_thumbnail() ?>
                                </div>
                                <?php if( get_post_meta($post->ID, 'additional_info', true)) {?>
                                        <div class="absolute bg-[#E1007E] bottom-0">
                                            <p class="px-[16px] py-[7px] text-white text-[20px] tracking-[2px] leading-[32px]"><?php echo get_post_meta($post->ID, 'additional_info', true); ?></p>
                                        </div>
                                <?php }?>
                            </div>
                            <div class="flex mt-[30px]">
                                <div class="w-[25%] text-center">
                                    <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px]"><?php echo get_post_meta($post->ID, 'jersey_no', true); ?></p>
                                </div>
                                <div class="ml-[14px]">
                                    <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px]"><?php echo get_post_meta($post->ID, 'name_jap', true); ?></p>
                                    <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px]"><?php echo get_post_meta($post->ID, 'name_eng', true); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_query();
                    ?>
                <!-- END OF QUERY -->
            </div>
        </div>
    </div>
</div>

<!-- TEAM STAFF CONTENT -->
<div class="relative overflow-hidden" id="team_staff">
    <div class="xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mx-auto min-[751px]:mt-[129px] max-[751px]:mt-[111px] relative">
        <div class="min-[751px]:w-[90%] mx-auto">
            <div class="font-bold">
                <span class="josefin-sans text-[64px] leading-[96px]">Team Staff</span> 
                <span class="ml-[20px] text-[21px] leading-[42px]">チームスタッフ</span>
            </div>
            <div class="flex flex-wrap min-[751px]:gap-[20px] max-[750px]:justify-between">
                <!-- START OF QUERY -->
                <?php
                    $query = new WP_Query( array(
                        'post_type' => 'players', 
                        'order' => 'ASC',
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'players_cat',
                                'field' => 'ts7',
                                'terms' => 12
                            )
                        ),
                    ) );
                    
                    while ( $query->have_posts() ) : $query->the_post();
                ?> 
                    <div class="w-[30%] max-[750px]:w-[43%] mb-[41px]">
                        <div class="relative overflow-hidden cursor-pointer">
                            <div  class='transition duration-300 ease-in hover:scale-110'>
                                <?php echo get_the_post_thumbnail() ?>
                            </div>
                        </div>
                        <div class="noto-sans mt-[30px]">
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px]"><?php echo get_post_meta($post->ID, 'additional_info', true); ?></p>
                            <p class="font-medium text-[28px] leading-[42px] tracking-[2px]"><?php echo get_post_meta($post->ID, 'name_jap', true); ?></p>
                            <p class="font-bold text-[18px] josefin-sans leading-[27px] tracking-[2px]"><?php echo get_post_meta($post->ID, 'name_eng', true); ?></p>
                        </div>
                    </div>
                <?php
                        endwhile;
                        wp_reset_query();
                    ?>
                <!-- END OF QUERY -->
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>