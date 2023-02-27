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
        <a href="<?= site_url('/team-08') ?>" class="w-[20%] max-[750px]:w-[33.33%] py-[25px] hover:bg-[#E1007E] hover:text-white">
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
                                'terms' => 10
                            )
                        ),
                    ) );
                    
                    while ( $query->have_posts() ) : $query->the_post();
                ?> 
                    <div class="w-[30%] max-[750px]:w-[43%] mb-[41px]">
                        <div class="relative overflow-hidden cursor-pointer" data-remodal-target="player_<?php echo get_the_ID() ?>">
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
                                'terms' => 11
                            )
                        ),
                    ) );
                    
                    while ( $query->have_posts() ) : $query->the_post();
                ?> 
                    <div class="w-[30%] max-[750px]:w-[43%] mt-[41px]">
                        <div class="relative overflow-hidden cursor-pointer" data-remodal-target="player_<?php echo get_the_ID() ?>">
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
                                'terms' => 13
                            )
                        ),
                    ) );
                    
                    while ( $query->have_posts() ) : $query->the_post();
                ?> 
                    <div class="w-[30%] max-[750px]:w-[43%] mb-[41px]">
                        <div class="relative overflow-hidden cursor-pointer" data-remodal-target="player_<?php echo get_the_ID() ?>">
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
                                    'terms' => 12
                                )
                            ),
                        ) );
                        
                        while ( $query->have_posts() ) : $query->the_post();
                    ?> 
                        <div class="w-[30%] max-[750px]:w-[43%] mt-[41px]">
                            <div class="relative overflow-hidden cursor-pointer" data-remodal-target="player_<?php echo get_the_ID() ?>">
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
                        'post_type' => 'staff', 
                        'order' => 'ASC',
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'staff_cat',
                                'field' => 'サテライト',
                                'terms' => 17
                            )
                        ),
                    ) );
                    
                    while ( $query->have_posts() ) : $query->the_post();
                ?> 
                    <div class="w-[30%] max-[750px]:w-[43%] mb-[41px]">
                        <div class="relative overflow-hidden cursor-pointer" data-remodal-target="staff_<?php echo get_the_ID() ?>">
                            <div  class='transition duration-300 ease-in hover:scale-110'>
                                <?php echo get_the_post_thumbnail() ?>
                            </div>
                        </div>
                        <div class="noto-sans mt-[30px]">
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px]"><?php echo get_field('Position')?></p>
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


<!-- START OF REMODAL FOR GK TO FW -->
    <!-- START OF QUERY -->
        <!-- START Modal for GK -->
    <!-- START OF QUERY -->
    <?php
        $query = new WP_Query( array(
            'post_type' => 'players', 
            'order' => 'ASC',
            'tax_query' => array(
                array (
                    'taxonomy' => 'players_cat',
                    'field' => 'gk7',
                    'terms' => 10
                )
            ),
        ) );
        
        while ( $query->have_posts() ) : $query->the_post();
    ?>  
        <div class="remodal px-5 mt-[32px]" data-remodal-id="player_<?php echo get_the_ID() ?>">
            <button data-remodal-action="close" class="remodal-close float-right"></button>
            <div class="modal-content ">
                <div class="flex">
                    <div class="w-[35%] mr-[26px]">
                        <div class="text-left">
                            <p class="text-[56px] leading-[60px] max-[600px]:text-[46px] max-[600px]:leading-[50px] font-bold josefin-sans"><?php echo get_field('jersey_no')?></p>
                            <p class="text-[36px] leading-[42px] max-[600px]:text-[26px] max-[600px]:leading-[32px] tracking-[2px] font-medium noto-sans"><?php echo get_post_meta($post->ID, 'name_jap', true); ?></p>
                            <p class="text-[18px] leading-[27px] max-[600px]:text-[15px] max-[600px]:leading-[22px] tracking-[2px] font-bold josefin-sans"><?php echo get_field('name_eng')?></p>
                        </div>
                    </div>
                    <div class="w-[65%] text-left">
                        <?php if( get_field('キャッチフレーズ')) {?>
                            <div class="font-medium noto-sans leading-[28px] max-[600px]:leading-[24px]">
                                <p class="text-[20px] max-[600px]:text-[18px]">キャッチフレーズ</p>
                                <p class="text-[32px] max-[600px]:text-[24px] mt-[13px]"><?php echo get_field('キャッチフレーズ')?></p>
                            </div>
                        <?php  }?>
                    </div>
                </div>
                <div class="flex mt-[15px]">
                    <div class="w-[35%] mr-[26px]">
                        <?php echo get_the_post_thumbnail() ?>
                        <?php if( get_field('additional_info')) {?>
                            <div class="mt-[10px] bg-[#E1007E] w-[70%]">
                                <p class="px-[10px] py-[7px] font-bold noto-sans text-[20px] 
                                    leading-[32px] tracking-[2px] text-white 
                                    max-[600px]:text-[15px] max-[600px]:leading-[28px] max-[400px]:text-[12px]
                                    "> 
                                    <?php echo get_field('additional_info')?>
                                </p>
                            </div>
                        <?php }?>
                    </div>
                    <div class="w-[65%] text-left noto-sans font-medium text-[20px] leading-[30px] max-[600px]:text-[12px] leading-[20px]">
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                生年月日
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('生年月日')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                リーグ登録年数
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('リーグ登録年数')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                ポジション
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('ポジション')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                代表歴
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('代表歴')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                前所属チーム
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('前所属チーム')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                昨年度出場回数
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('昨年度出場回数')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                得点数
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('得点数')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                利き足
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('利き足')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                高校時代の出身
                                チーム／出身校
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('高校時代の出身_チーム／出身校')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                ブログリレー
                            </div>
                            <div class="w-[60%] break-all">
                                <?php echo get_field('ブログリレー')?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex mt-[49px] gap-[16px]">
                    <div>
                        <?php $image1 = get_field('image_1'); ?>
                        <img src="<?php echo $image1;?>">
                    </div>
                    <div>
                        <?php $image2 = get_field('image_2'); ?>
                            <img src="<?php echo $image2;?>">
                        </div>
                    <div>
                        <?php $image3 = get_field('image_3'); ?>
                            <img src="<?php echo $image3;?>">
                        </div>
                </div>
            </div>
        </div>
    <?php
            endwhile;
            wp_reset_query();
    ?>
<!-- START Modal for GK -->

<!-- START Modal for DF -->
    <!-- START OF QUERY -->
    <?php
        $query = new WP_Query( array(
            'post_type' => 'players', 
            'order' => 'ASC',
            'tax_query' => array(
                array (
                    'taxonomy' => 'players_cat',
                    'field' => 'df7',
                    'terms' => 11
                )
            ),
        ) );
        
        while ( $query->have_posts() ) : $query->the_post();
    ?>  
        <div class="remodal px-5 mt-[32px]" data-remodal-id="player_<?php echo get_the_ID() ?>">
            <button data-remodal-action="close" class="remodal-close float-right"></button>
            <div class="modal-content ">
                <div class="flex">
                    <div class="w-[35%] mr-[26px]">
                        <div class="text-left">
                            <p class="text-[56px] leading-[60px] max-[600px]:text-[46px] max-[600px]:leading-[50px] font-bold josefin-sans"><?php echo get_field('jersey_no')?></p>
                            <p class="text-[36px] leading-[42px] max-[600px]:text-[26px] max-[600px]:leading-[32px] tracking-[2px] font-medium noto-sans"><?php echo get_post_meta($post->ID, 'name_jap', true); ?></p>
                            <p class="text-[18px] leading-[27px] max-[600px]:text-[15px] max-[600px]:leading-[22px] tracking-[2px] font-bold josefin-sans"><?php echo get_field('name_eng')?></p>
                        </div>
                    </div>
                    <div class="w-[65%] text-left">
                        <?php if( get_field('キャッチフレーズ')) {?>
                            <div class="font-medium noto-sans leading-[28px] max-[600px]:leading-[24px]">
                                <p class="text-[20px] max-[600px]:text-[18px]">キャッチフレーズ</p>
                                <p class="text-[32px] max-[600px]:text-[24px] mt-[13px]"><?php echo get_field('キャッチフレーズ')?></p>
                            </div>
                        <?php  }?>
                    </div>
                </div>
                <div class="flex mt-[15px]">
                    <div class="w-[35%] mr-[26px]">
                        <?php echo get_the_post_thumbnail() ?>
                        <?php if( get_field('additional_info')) {?>
                            <div class="mt-[10px] bg-[#E1007E] w-[70%]">
                                <p class="px-[10px] py-[7px] font-bold noto-sans text-[20px] 
                                    leading-[32px] tracking-[2px] text-white 
                                    max-[600px]:text-[15px] max-[600px]:leading-[28px] max-[400px]:text-[12px]
                                    "> 
                                    <?php echo get_field('additional_info')?>
                                </p>
                            </div>
                        <?php }?>
                    </div>
                    <div class="w-[65%] text-left noto-sans font-medium text-[20px] leading-[30px] max-[600px]:text-[12px] leading-[20px]">
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                生年月日
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('生年月日')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                リーグ登録年数
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('リーグ登録年数')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                ポジション
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('ポジション')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                代表歴
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('代表歴')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                前所属チーム
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('前所属チーム')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                昨年度出場回数
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('昨年度出場回数')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                得点数
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('得点数')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                利き足
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('利き足')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                高校時代の出身
                                チーム／出身校
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('高校時代の出身_チーム／出身校')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                ブログリレー
                            </div>
                            <div class="w-[60%] break-all">
                                <?php echo get_field('ブログリレー')?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex mt-[49px] gap-[16px]">
                    <div>
                        <?php $image1 = get_field('image_1'); ?>
                        <img src="<?php echo $image1;?>">
                    </div>
                    <div>
                        <?php $image2 = get_field('image_2'); ?>
                            <img src="<?php echo $image2;?>">
                        </div>
                    <div>
                        <?php $image3 = get_field('image_3'); ?>
                            <img src="<?php echo $image3;?>">
                        </div>
                </div>
            </div>
        </div>
    <?php
            endwhile;
            wp_reset_query();
    ?>
<!-- END Modal for DF -->

<!-- START Modal for MF -->
    <!-- START OF QUERY -->
    <?php
        $query = new WP_Query( array(
            'post_type' => 'players', 
            'order' => 'ASC',
            'tax_query' => array(
                array (
                    'taxonomy' => 'players_cat',
                    'field' => 'mf7',
                    'terms' => 13
                )
            ),
        ) );
        
        while ( $query->have_posts() ) : $query->the_post();
    ?>  
        <div class="remodal px-5 mt-[32px]" data-remodal-id="player_<?php echo get_the_ID() ?>">
            <button data-remodal-action="close" class="remodal-close float-right"></button>
            <div class="modal-content ">
                <div class="flex">
                    <div class="w-[35%] mr-[26px]">
                        <div class="text-left">
                            <p class="text-[56px] leading-[60px] max-[600px]:text-[46px] max-[600px]:leading-[50px] font-bold josefin-sans"><?php echo get_field('jersey_no')?></p>
                            <p class="text-[36px] leading-[42px] max-[600px]:text-[26px] max-[600px]:leading-[32px] tracking-[2px] font-medium noto-sans"><?php echo get_post_meta($post->ID, 'name_jap', true); ?></p>
                            <p class="text-[18px] leading-[27px] max-[600px]:text-[15px] max-[600px]:leading-[22px] tracking-[2px] font-bold josefin-sans"><?php echo get_field('name_eng')?></p>
                        </div>
                    </div>
                    <div class="w-[65%] text-left">
                        <?php if( get_field('キャッチフレーズ')) {?>
                            <div class="font-medium noto-sans leading-[28px] max-[600px]:leading-[24px]">
                                <p class="text-[20px] max-[600px]:text-[18px]">キャッチフレーズ</p>
                                <p class="text-[32px] max-[600px]:text-[24px] mt-[13px]"><?php echo get_field('キャッチフレーズ')?></p>
                            </div>
                        <?php  }?>
                    </div>
                </div>
                <div class="flex mt-[15px]">
                    <div class="w-[35%] mr-[26px]">
                        <?php echo get_the_post_thumbnail() ?>
                        <?php if( get_field('additional_info')) {?>
                            <div class="mt-[10px] bg-[#E1007E] w-[70%]">
                                <p class="px-[10px] py-[7px] font-bold noto-sans text-[20px] 
                                    leading-[32px] tracking-[2px] text-white 
                                    max-[600px]:text-[15px] max-[600px]:leading-[28px] max-[400px]:text-[12px]
                                    "> 
                                    <?php echo get_field('additional_info')?>
                                </p>
                            </div>
                        <?php }?>
                    </div>
                    <div class="w-[65%] text-left noto-sans font-medium text-[20px] leading-[30px] max-[600px]:text-[12px] leading-[20px]">
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                生年月日
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('生年月日')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                リーグ登録年数
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('リーグ登録年数')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                ポジション
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('ポジション')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                代表歴
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('代表歴')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                前所属チーム
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('前所属チーム')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                昨年度出場回数
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('昨年度出場回数')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                得点数
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('得点数')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                利き足
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('利き足')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                高校時代の出身
                                チーム／出身校
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('高校時代の出身_チーム／出身校')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                ブログリレー
                            </div>
                            <div class="w-[60%] break-all">
                                <?php echo get_field('ブログリレー')?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex mt-[49px] gap-[16px]">
                    <div>
                        <?php $image1 = get_field('image_1'); ?>
                        <img src="<?php echo $image1;?>">
                    </div>
                    <div>
                        <?php $image2 = get_field('image_2'); ?>
                            <img src="<?php echo $image2;?>">
                        </div>
                    <div>
                        <?php $image3 = get_field('image_3'); ?>
                            <img src="<?php echo $image3;?>">
                        </div>
                </div>
            </div>
        </div>
    <?php
            endwhile;
            wp_reset_query();
    ?>
<!-- END Modal for MF -->

<!-- START Modal for FW -->
    <!-- START OF QUERY -->
    <?php
        $query = new WP_Query( array(
            'post_type' => 'players', 
            'order' => 'ASC',
            'tax_query' => array(
                array (
                    'taxonomy' => 'players_cat',
                    'field' => 'fw7',
                    'terms' => 12
                )
            ),
        ) );
        
        while ( $query->have_posts() ) : $query->the_post();
    ?>  
        <div class="remodal px-5 mt-[32px]" data-remodal-id="player_<?php echo get_the_ID() ?>">
            <button data-remodal-action="close" class="remodal-close float-right"></button>
            <div class="modal-content ">
                <div class="flex">
                    <div class="w-[35%] mr-[26px]">
                        <div class="text-left">
                            <p class="text-[56px] leading-[60px] max-[600px]:text-[46px] max-[600px]:leading-[50px] font-bold josefin-sans"><?php echo get_field('jersey_no')?></p>
                            <p class="text-[36px] leading-[42px] max-[600px]:text-[26px] max-[600px]:leading-[32px] tracking-[2px] font-medium noto-sans"><?php echo get_post_meta($post->ID, 'name_jap', true); ?></p>
                            <p class="text-[18px] leading-[27px] max-[600px]:text-[15px] max-[600px]:leading-[22px] tracking-[2px] font-bold josefin-sans"><?php echo get_field('name_eng')?></p>
                        </div>
                    </div>
                    <div class="w-[65%] text-left">
                        <?php if( get_field('キャッチフレーズ')) {?>
                            <div class="font-medium noto-sans leading-[28px] max-[600px]:leading-[24px]">
                                <p class="text-[20px] max-[600px]:text-[18px]">キャッチフレーズ</p>
                                <p class="text-[32px] max-[600px]:text-[24px] mt-[13px]"><?php echo get_field('キャッチフレーズ')?></p>
                            </div>
                        <?php  }?>
                    </div>
                </div>
                <div class="flex mt-[15px]">
                    <div class="w-[35%] mr-[26px]">
                        <?php echo get_the_post_thumbnail() ?>
                        <?php if( get_field('additional_info')) {?>
                            <div class="mt-[10px] bg-[#E1007E] w-[70%]">
                                <p class="px-[10px] py-[7px] font-bold noto-sans text-[20px] 
                                    leading-[32px] tracking-[2px] text-white 
                                    max-[600px]:text-[15px] max-[600px]:leading-[28px] max-[400px]:text-[12px]
                                    "> 
                                    <?php echo get_field('additional_info')?>
                                </p>
                            </div>
                        <?php }?>
                    </div>
                    <div class="w-[65%] text-left noto-sans font-medium text-[20px] leading-[30px] max-[600px]:text-[12px] leading-[20px]">
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                生年月日
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('生年月日')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                リーグ登録年数
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('リーグ登録年数')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                ポジション
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('ポジション')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                代表歴
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('代表歴')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                前所属チーム
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('前所属チーム')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                昨年度出場回数
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('昨年度出場回数')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                得点数
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('得点数')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                利き足
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('利き足')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                高校時代の出身
                                チーム／出身校
                            </div>
                            <div class="w-[60%]">
                                <?php echo get_field('高校時代の出身_チーム／出身校')?>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                ブログリレー
                            </div>
                            <div class="w-[60%] break-all">
                                <?php echo get_field('ブログリレー')?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex mt-[49px] gap-[16px]">
                    <div>
                        <?php $image1 = get_field('image_1'); ?>
                        <img src="<?php echo $image1;?>">
                    </div>
                    <div>
                        <?php $image2 = get_field('image_2'); ?>
                            <img src="<?php echo $image2;?>">
                        </div>
                    <div>
                        <?php $image3 = get_field('image_3'); ?>
                            <img src="<?php echo $image3;?>">
                        </div>
                </div>
            </div>
        </div>
    <?php
            endwhile;
            wp_reset_query();
    ?>
<!-- END Modal for FW -->



    <!-- END OF QUERY -->
<!-- END OF REMODAL FOR GK TO FW -->

<!-- START REMODAL FOR TEAM STAFF -->

    <!-- START OF COACH AND DOCTOR -->
        <!-- START OF QUERY -->
        <?php
            $query = new WP_Query( array(
                'post_type' => 'staff', 
                'order' => 'ASC',
            ) );
        
            while ( $query->have_posts() ) : $query->the_post();
        ?>  
            <div class="remodal px-5 mt-[32px]" data-remodal-id="staff_<?php echo get_the_ID() ?>">
                <button data-remodal-action="close" class="remodal-close float-right"></button>
                <div class="modal-content ">
                    <div class="text-left">
                        <p class="text-[29px] leading-[44px] max-[600px]:text-[24px] text-[#004EA1]
                            max-[600px]:leading-[32px] font-bold noto-sans">
                            <?php echo get_field('specific_position') != 'None' ? get_field('specific_position') : '' ?><?php echo get_field('Position')?>
                        </p>
                        <p class="text-[36px] leading-[42px] max-[600px]:text-[26px] 
                            max-[600px]:leading-[32px] tracking-[2px] font-medium noto-sans">
                            <?php echo get_field('name_jap')?>
                        </p>
                        <p class="text-[18px] leading-[27px] max-[600px]:text-[15px] 
                            max-[600px]:leading-[22px] tracking-[2px] font-bold josefin-sans">
                            <?php echo get_field('name_eng')?>
                        </p>
                    </div>
                    <div class="flex">
                        <div class="w-[35%] mr-[26px]">
                            <div class="mt-[15px]">
                                <?php echo get_the_post_thumbnail() ?>
                            </div>
                        </div>
                        <?php 

                        ?>
                        <div class="w-[65%] text-left noto-sans font-medium text-[20px] leading-[30px] max-[600px]:text-[12px] leading-[20px]">
                            <?php if( get_field('Position') == 'コーチ' || get_field('Position') == 'チームドクター') {?>
                                <div class="flex border-b border-[#707070] py-[5px]">
                                    <?php if( get_field('Position') == 'コーチ') {?>
                                        <div class="w-[25%] max-[500px]:w-[35%] mr-[20px]">
                                            生年月日
                                        </div>
                                        <div class="w-[75%] max-[500px]:w-[65%]">
                                            <?php echo get_field('生年月日')?>
                                        </div>
                                    <?php }elseif(get_field('Position') == 'チームドクター'){ ?>
                                        <div class="<?php echo get_field('Position') == 'コーチ' ? 'w-[25%]' : 'w-[40%]' ?> max-[500px]:w-[35%] mr-[20px]">
                                            専門診療科目
                                        </div>
                                        <div class="<?php echo get_field('Position') == 'コーチ' ? 'w-[75%]' : 'w-[60%]' ?> max-[500px]:w-[65%]">
                                            <?php echo get_field('専門診療科目')?>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="flex border-b border-[#707070] py-[5px]">
                                    <div class="<?php echo get_field('Position') == 'コーチ' ? 'w-[25%]' : 'w-[40%]' ?> max-[500px]:w-[35%] mr-[20px]">
                                        出身
                                    </div>
                                    <div class="<?php echo get_field('Position') == 'コーチ' ? 'w-[75%]' : 'w-[60%]' ?> max-[500px]:w-[65%]">
                                        <?php echo get_field('出身')?>
                                    </div>
                                </div>

                                <?php if(get_field('Position') == 'チームドクター'){ ?>
                                    <div class="flex border-b border-[#707070] py-[5px]">
                                        <div class="w-[40%] max-[500px]:w-[35%] mr-[20px]">
                                            所属病院
                                        </div>
                                        <div class="w-[60%] max-[500px]:w-[65%]">
                                            <?php echo get_field('所属病院')?>
                                        </div>
                                    </div>
                                <?php }?>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            endwhile;
            wp_reset_query();
        ?>
    <!-- END OF COACH AND DOCTOR -->
<!-- END OF REMODAL FOR TEAM STAFF -->

<?php get_footer(); ?>