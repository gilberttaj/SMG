<?php /* Template Name: News Detail Template */ ?>
<?php get_header(); ?>

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
<div class="min-[751px]:w-[60%] min-[751px]:mx-auto mt-4 max-[750px]:px-5">
    <p class="text-[12px] noto-sans leading-[18px] tracking-[3px] text-[#959595]"><a href="<?= site_url()?>">ホーム</a> 　><a href="<?= site_url('news-page')?>">ニュース</a>　>大西若菜選手デザインのマフラータオルが完成！</p>
</div>
<?php 
    $queryString = $_SERVER['QUERY_STRING'];
    parse_str($queryString, $params);
    $newsId = $params['id'];
    echo($newsId);
?>

<div class="xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mx-auto min-[751px]:mt-[129px] max-[751px]:mt-[111px] relative mb-[230px] max-[750px]:mb-[200px]">
    <div class="min-[751px]:w-[90%] mx-auto">
        <div>
            <p class="noto-sans text-[18px] leading-[27px] tracking-[3px] text-[#808080]">2022.00.00</p>
        </div>

        <div class="mt-[21px] flex">
            <a href="" class="w-[112px] h-[24px] flex justify-center items-center bg-[#004EA1] text-white
                text-[12px] font-medium leading-[18px] tracking-[2px]">
                なでしこ
            </a>
            <a href="" class="ml-[10px] w-[112px] h-[24px] flex justify-center items-center bg-[#D19F00] text-white
                text-[12px] font-medium leading-[18px] tracking-[2px]">
                グッズ
            </a>
        </div>

        <div class="mt-[40px] noto-sans text-[28px] font-medium leading-[42px]">
            <p>大西若菜選手デザインの</p>
            <p>マフラータオルが完成！</p>
        </div>

        <div class="mt-[44px]">
            <img src="<?= site_url('/wp-content/themes/smg/assets/images/news/Group 11939.png')?>" alt="">
        </div>

        <div class="mt-[46.2px] text-[14px] font-medium leading-[28px] noto-sans">
            <p>
                この文章はダミーのコピーを仮に流し込んでいます。コピーができ次第、差し替えますので今しばらくお待ちください。どうぞよろし
                くお願いいたします。
            </p>
                
            <p class="mt-[20px]">
                この文章はダミー用に入れており、レイアウト上の文字数やコピーが入った時の雰囲気を見るための物で、実際には内容に合わせた文
                章がはいります。現段階では制作中なので、とりあえずこのダミー文章が入っている次第です。この文章はダミー用に入れており、レ
                イアウト上の文字数やコピーが入った時の雰囲気を見るための物で、実際には内容に合わせた文章がはいります。
            </p>
        </div>

        <?php
        $args = array(
        'post_type' => 'news',
        'p' => $newsId
        );

        $query = new WP_Query( $args );

        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
        ?>
        <div class="mt-[40px]">
            <?php echo get_the_post_thumbnail() ?>
        </div>
        <?php
    }

wp_reset_postdata(); // Restore global post data
}
?>

        <div class="mt-[46.2px] text-[14px] font-medium leading-[28px] noto-sans">
            <p>
                この文章はダミーのコピーを仮に流し込んでいます。コピーができ次第、差し替えますので今しばらくお待ちください。どうぞよろしくお願いいたします。
            </p>
                
            <p class="mt-[20px]">
                この文章はダミー用に入れており、レイアウト上の文字数やコピーが入った時の雰囲気を見るための物で、実際には内容に合わせた文章がはいります。現段
                階では制作中なので、とりあえずこのダミー文章が入っている次第です。この文章はダミー用に入れており、レイアウト上の文字数やコピーが入った時の雰
                を見るための物で、実際には内容に合わせた文章がはいります。
            </p>
        </div>

        <div class="
            mt-[129px] max-[750px]:mt-[102px]
            xl:w-[50%] min-[750px]:w-[60%] w-[60%] max-[500px]:w-[70%]
            mx-auto
            ">
            <a href="<?= site_url('/community')?>" class="border-solid hover:bg-[#004EA1] hover:text-white text-[#004EA1] border-4 border-[#004EA1] flex flex-col items-center justify-center rounded-[60px] xl:h-[120px] h-[100px]">
                <p class="font-bold text-[40px] max-[750px]:text-[35px] max-[750px]:[30px] josefin-sans max-[400px]:text-[28px]">COMMUNITY</p>
                <p class="noto-sans font-bold text-[20px] max-[750px]:text-[16px] max-[500px]:text-[15px] tracking-[2px] leading-[16px] max-[400px]:text-[12px]">地域活動・プロジェクト</p>
            </a>
        </div>

        <div class="mt-[80px] flex justify-center max-[750px]:justify-end w-full">
            <a  href="" class="border border-black flex items-center justify-center w-[240px] max-[750px]:w-[200px] max-[750px]:h-[88px] h-[80px] 
                text-[20px] noto-sans font-bold leading-[32px] tracking-[2px]">
                一覧に戻る
            </a>
            <a  href="" class="ml-[45px] border border-black flex items-center justify-center w-[240px] max-[750px]:w-[200px] max-[750px]:h-[88px] h-[80px] 
                text-[20px] noto-sans font-bold leading-[32px] tracking-[2px]">
                一覧に戻る
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>