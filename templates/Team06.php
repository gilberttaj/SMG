<?php /* Template Name: Team 06 Template */ ?>
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
    <p class="text-[12px] noto-sans leading-[18px] tracking-[3px] text-[#959595]"><a href="<?= site_url()?>">ホーム</a>  >選手・チーム紹介　>トップチーム</p>
</div>

<!-- First TAB PANE -->
<div class="xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mx-auto mt-[114px] max-[750px]:mt-[44px]">
    <div class="flex font-bold noto-sans text-[20px] leading-[32px] tracking-[2px] text-center border-b-2 border-[#E1007E]  flex-wrap">
        <a href="<?= site_url('/team-05') ?>" class="w-[20%] max-[750px]:w-[50%] py-[25px] hover:bg-[#E1007E] hover:text-white">
            陸上競技
        </a>
        <a href="<?= site_url('/team-06') ?>" class="w-[20%] max-[750px]:w-[50%] py-[25px] text-white bg-[#E1007E]">
            トップチーム
        </a>
        <a href="<?= site_url('/team-07') ?>"  class="w-[20%] max-[750px]:w-[33.33%] py-[25px] hover:bg-[#E1007E] hover:text-white">
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
                                'field' => 'gk6',
                                'terms' => 3
                            )
                        ),
                    ) );
                    
                    while ( $query->have_posts() ) : $query->the_post();
                ?>  
                    <div class="w-[30%] max-[750px]:w-[43%] mb-[41px]">
                        <div class="relative overflow-hidden cursor-pointer" data-remodal-target="player_1">
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
                                'field' => 'df6',
                                'terms' => 4
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
                <?php
                    $query = new WP_Query( array(
                        'post_type' => 'players', 
                        'order' => 'ASC',
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'players_cat',
                                'field' => 'mf6',
                                'terms' => 5
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
                                'field' => 'fw6',
                                'terms' => 6
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
                                'field' => 'ts6',
                                'terms' => 7
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
                <!-- <div class="w-[30%] max-[750px]:w-[43%] mb-[41px]">
                    <div class="relative" data-remodal-target="staff_1">
                        <img class="w-full" src="<?= site_url('/wp-content/themes/smg') ?>/assets/images/team_06/Component 64 – 1.png">
                    </div>
                    <div class="noto-sans mt-[30px]">
                        <p class="text-[18px] font-bold leading-[27px] tracking-[2px]">監督</p>
                        <p class="font-medium text-[28px] leading-[42px] tracking-[2px]">大槻 茂久</p>
                        <p class="font-bold text-[18px] josefin-sans leading-[27px] tracking-[2px]">Otsuki Shigehisa</p>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] mb-[41px]">
                    <div class="relative" data-remodal-target="staff_2">
                        <img class="w-full" src="<?= site_url('/wp-content/themes/smg') ?>/assets/images/team_06/Component 64 – 1.png">
                    </div>
                    <div class="noto-sans mt-[30px]">
                        <p class="text-[18px] font-bold leading-[27px] tracking-[2px]">監督</p>
                        <p class="font-medium text-[28px] leading-[42px] tracking-[2px]">大槻 茂久</p>
                        <p class="font-bold text-[18px] josefin-sans leading-[27px] tracking-[2px]">Otsuki Shigehisa</p>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] mb-[41px]">
                    <div class="relative">
                        <img class="w-full" src="<?= site_url('/wp-content/themes/smg') ?>/assets/images/team_06/Component 64 – 1.png">
                    </div>
                    <div class="noto-sans mt-[30px]">
                        <p class="text-[18px] font-bold leading-[27px] tracking-[2px]">監督</p>
                        <p class="font-medium text-[28px] leading-[42px] tracking-[2px]">大槻 茂久</p>
                        <p class="font-bold text-[18px] josefin-sans leading-[27px] tracking-[2px]">Otsuki Shigehisa</p>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] mb-[41px]">
                    <div class="relative">
                        <img class="w-full" src="<?= site_url('/wp-content/themes/smg') ?>/assets/images/team_06/Component 64 – 1.png">
                    </div>
                    <div class="noto-sans mt-[30px]">
                        <p class="text-[18px] font-bold leading-[27px] tracking-[2px]">監督</p>
                        <p class="font-medium text-[28px] leading-[42px] tracking-[2px]">大槻 茂久</p>
                        <p class="font-bold text-[18px] josefin-sans leading-[27px] tracking-[2px]">Otsuki Shigehisa</p>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] mb-[41px]">
                    <div class="relative">
                        <img class="w-full" src="<?= site_url('/wp-content/themes/smg') ?>/assets/images/team_06/Component 64 – 1.png">
                    </div>
                    <div class="noto-sans mt-[30px]">
                        <p class="text-[18px] font-bold leading-[27px] tracking-[2px]">監督</p>
                        <p class="font-medium text-[28px] leading-[42px] tracking-[2px]">大槻 茂久</p>
                        <p class="font-bold text-[18px] josefin-sans leading-[27px] tracking-[2px]">Otsuki Shigehisa</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

<!-- START OF REMODAL FOR GK TO FW -->
    <!-- START OF QUERY -->
        <div class="remodal px-5 mt-[32px]" data-remodal-id="player_1">
            <button data-remodal-action="close" class="remodal-close float-right"></button>
            <div class="modal-content ">
                <div class="flex">
                    <div class="w-[35%] mr-[26px]">
                        <div class="text-left">
                            <p class="text-[56px] leading-[60px] max-[600px]:text-[46px] max-[600px]:leading-[50px] font-bold josefin-sans">1</p>
                            <p class="text-[36px] leading-[42px] max-[600px]:text-[26px] max-[600px]:leading-[32px] tracking-[2px] font-medium noto-sans">伊能 真弥</p>
                            <p class="text-[18px] leading-[27px] max-[600px]:text-[15px] max-[600px]:leading-[22px] tracking-[2px] font-bold josefin-sans">Ino Maya</p>
                        </div>
                    </div>
                    <div class="w-[65%] text-left">
                        <div class="font-medium noto-sans leading-[28px] max-[600px]:leading-[24px]">
                            <p class="text-[20px] max-[600px]:text-[18px]">キャッチフレーズ</p>
                            <p class="text-[32px] max-[600px]:text-[24px] mt-[13px]">ニッタイの壁</p>
                        </div>
                    </div>
                </div>
                <div class="flex mt-[15px]">
                    <div class="w-[35%] mr-[26px]">
                        <img src="<?= site_url('/wp-content/themes/smg/assets/images/team_06/Group 9521.png') ?>">
                        <div class="mt-[10px] bg-[#E1007E] w-[70%]">
                            <p class="px-[10px] py-[7px] font-bold noto-sans text-[20px] 
                                leading-[32px] tracking-[2px] text-white 
                                max-[600px]:text-[15px] max-[600px]:leading-[28px] max-[400px]:text-[12px]
                                "> 
                                強化指定選手
                            </p>
                        </div>
                    </div>
                    <div class="w-[65%] text-left noto-sans font-medium text-[20px] leading-[30px] max-[600px]:text-[12px] leading-[20px]">
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                生年月日
                            </div>
                            <div class="w-[60%]">
                                2000/9/29
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                リーグ登録年数
                            </div>
                            <div class="w-[60%]">
                                6年
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                ポジション
                            </div>
                            <div class="w-[60%]">
                                GK
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                代表歴
                            </div>
                            <div class="w-[60%]">
                                U-19女子日本代表
                                U-20女子日本代表候補
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                前所属チーム
                            </div>
                            <div class="w-[60%]">
                                浦和レッドダイヤモンズ
                                レディースユース
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                昨年度出場回数
                            </div>
                            <div class="w-[60%]">
                                21試合
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                得点数
                            </div>
                            <div class="w-[60%]">
                                —
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                利き足
                            </div>
                            <div class="w-[60%]">
                                右
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                高校時代の出身
                                チーム／出身校
                            </div>
                            <div class="w-[60%]">
                                浦和レッドダイヤモンズ
                                レディースユース
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[40%] mr-[20px]">
                                ブログリレー
                            </div>
                            <div class="w-[60%]">
                                https://note.com/nssusmg/n/
                                nde7faaa6f9a0
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex mt-[49px] gap-[16px]">
                    <div>
                        <img src="<?= site_url('/wp-content/themes/smg/assets/images/team_06/2S3A1490.png') ?>">
                    </div>
                    <div>
                        <img src="<?= site_url('/wp-content/themes/smg/assets/images/team_06/2S3A3148.png') ?>">
                    </div>
                    <div>
                        <img src="<?= site_url('/wp-content/themes/smg/assets/images/team_06/2S3A7633.png') ?>">
                    </div>
                </div>
            </div>
        </div>
    <!-- END OF QUERY -->
<!-- END OF REMODAL FOR GK TO FW -->

<!-- START REMODAL FOR TEAM STAFF -->
    <!-- START OF TOP HEAD -->
        <div class="remodal px-5 mt-[32px]" data-remodal-id="staff_1">
            <button data-remodal-action="close" class="remodal-close float-right"></button>
            <div class="modal-content ">
                <div class="flex">
                    <div class="w-[35%] mr-[26px]">
                        <div class="text-left">
                            <p class="text-[29px] leading-[44px] max-[600px]:text-[24px] text-[#004EA1]
                                max-[600px]:leading-[32px] font-bold noto-sans">
                                監督
                            </p>
                            <p class="text-[36px] leading-[42px] max-[600px]:text-[26px] 
                                max-[600px]:leading-[32px] tracking-[2px] font-medium noto-sans">
                                大槻 茂久
                            </p>
                            <p class="text-[18px] leading-[27px] max-[600px]:text-[15px] 
                                max-[600px]:leading-[22px] tracking-[2px] font-bold josefin-sans">
                                Otsuki Shigehisa
                            </p>
                        </div>
                        <div class="mt-[15px]">
                            <img src="<?= site_url('/wp-content/themes/smg/assets/images/team_06/Group 9525.png') ?>">
                        </div>
                    </div>
                    <div class="w-[65%] text-left noto-sans font-medium text-[20px] leading-[30px] max-[600px]:text-[12px] leading-[20px]">
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[20%] mr-[10px]">
                                生年月日
                            </div>
                            <div class="w-[80%]">
                                2000/9/29
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[20%] mr-[10px]">
                                出身
                            </div>
                            <div class="w-[80%]">
                                京都府
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[20%] mr-[10px]">
                                経歴
                            </div>
                            <div class="w-[80%] flex">
                                <div class="w-[20%] mr-[10px]">
                                    2004年
                                </div>
                                <div class="w-[80%]">
                                    <p>日本体育大学学友会サッカー部卒業</p>
                                    <p>日本体育大学大学院に進学</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[20%] mr-[10px]"></div>
                            <div class="w-[80%] flex">
                                <div class="w-[20%] mr-[10px]">
                                    2005年
                                </div>
                                <div class="w-[80%]">
                                    ドイツスポーツ大学ケルンに2年間留学（SV Deuch05でプレー）
                                </div>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[20%] mr-[10px]"></div>
                            <div class="w-[80%] flex">
                                <div class="w-[20%] mr-[10px]">
                                    2008年
                                </div>
                                <div class="w-[80%]">
                                    <p>日本体育大学大学院卒業</p>
                                    <p>日本体育大学学友会サッカー部男子・女子部コーチ</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[20%] mr-[10px]"></div>
                            <div class="w-[80%] flex">
                                <div class="w-[20%] mr-[10px]">
                                    2013年
                                </div>
                                <div class="w-[80%]">
                                    神奈川大学体育会女子サッカー部監督・総監督
                                </div>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[20%] mr-[10px]"></div>
                            <div class="w-[80%] flex">
                                <div class="w-[20%] mr-[10px]">
                                    2021年
                                </div>
                                <div class="w-[80%]">
                                    日体大FIELDS横浜（なでしこリーグ1部）監督
                                </div>
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[20%] mr-[10px]"></div>
                            <div class="w-[80%] flex">
                                <div class="w-[20%] mr-[10px]">
                                    2022年
                                </div>
                                <div class="w-[80%]">
                                    日体大SMG横浜（チーム名称変更）・日本体育大学学友会サッカー部女子監督
                                </div>
                            </div>
                        </div>
                        <div class="flex py-[5px]">
                            <div class="w-[20%] mr-[10px]">
                                資格
                            </div>
                            <div class="w-[80%]">
                                <div>
                                    <p>オランダサッカー協会公認ユース</p>
                                    <p>コーチングライセンス</p>
                                </div>
                                <div class="mt-[12px]">
                                    <p>日本サッカー協会公認</p>
                                    <p>Ａ級ジェネラル</p>
                                </div>
                                <div class="mt-[12px]">
                                    <p>Ａ級U15</p>
                                </div>
                                <div class="mt-[12px]">
                                    <p>47FAインストラクター</p>
                                </div>
                                <div class="mt-[12px]">
                                    <p>ドイツライフキネティック</p>
                                    <p>公認トレーナー　など</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- END OF TOP HEAD -->

    <!-- START OF COACH AND DOCTOR -->
        <div class="remodal px-5 mt-[32px]" data-remodal-id="staff_2">
            <button data-remodal-action="close" class="remodal-close float-right"></button>
            <div class="modal-content ">
                <div class="text-left">
                    <p class="text-[29px] leading-[44px] max-[600px]:text-[24px] text-[#004EA1]
                        max-[600px]:leading-[32px] font-bold noto-sans">
                        コーチ
                    </p>
                    <p class="text-[36px] leading-[42px] max-[600px]:text-[26px] 
                        max-[600px]:leading-[32px] tracking-[2px] font-medium noto-sans">
                        有田 恭也
                    </p>
                    <p class="text-[18px] leading-[27px] max-[600px]:text-[15px] 
                        max-[600px]:leading-[22px] tracking-[2px] font-bold josefin-sans">
                        Arita Kyoya
                    </p>
                </div>
                <div class="flex">
                    <div class="w-[35%] mr-[26px]">
                        <div class="mt-[15px]">
                            <img src="<?= site_url('/wp-content/themes/smg/assets/images/team_06/Group 9525.png') ?>">
                        </div>
                    </div>
                    <div class="w-[65%] text-left noto-sans font-medium text-[20px] leading-[30px] max-[600px]:text-[12px] leading-[20px]">
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[25%] max-[500px]:w-[35%] mr-[20px]">
                                生年月日
                            </div>
                            <div class="w-[75%] max-[500px]:w-[65%]">
                                2000/9/29
                            </div>
                        </div>
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[25%] max-[500px]:w-[35%] mr-[20px]">
                                出身
                            </div>
                            <div class="w-[75%] max-[500px]:w-[65%]">
                                福井県
                            </div>
                        </div>
                        <!-- IF for staff doctor only or has 所属病院 -->
                        <div class="flex border-b border-[#707070] py-[5px]">
                            <div class="w-[25%] max-[500px]:w-[35%] mr-[20px]">
                                所属病院
                            </div>
                            <div class="w-[75%] max-[500px]:w-[65%]">
                                AR-Ex尾山台整形外科
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- END OF COACH AND DOCTOR -->
<!-- END OF REMODAL FOR TEAM STAFF -->

<?php get_footer(); ?>

