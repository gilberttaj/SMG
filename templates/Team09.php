<?php /* Template Name: Team 09 Template */ ?>
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
        <a href="<?= site_url('/team-07') ?>"  class="w-[20%] max-[750px]:w-[33.33%] py-[25px] hover:bg-[#E1007E] hover:text-white">
            サテライト
        </a>
        <a href="" class="w-[20%] max-[750px]:w-[33.33%] py-[25px] hover:bg-[#E1007E] hover:text-white">
            U-18
        </a>
        <a href="<?= site_url('/team-09') ?>"  class="w-[20%] max-[750px]:w-[33.33%] py-[25px] bg-[#E1007E] text-white">
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
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">1</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">小野寺 倫乃</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Onodera Rino</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">21</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">鋤柄 香怜</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Sukigara Karen</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">53</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">金沢 咲季</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Kanazawa Saki</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">58</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">鈴木 　優</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Suzuki Yuu</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">95</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">五十嵐 凛</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Igarashi Rin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DF CONTENT -->
<div class="relative overflow-hidden" id="df">
    <!-- <img src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/left-blue.png" 
        class="absolute top-[35%] max-[750px]:hidden
        min-[751px]:max-lg:left-[-45%] lg:max-xl:left-[-25%] xl:max-2xl:left-[-15%]
        max-[750px]:top-[-5%] max-[750px]:left-[-72%] max-[700px]:left-[-76%] max-[650px]:left-[-80%]
    "> -->
    <div class="xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mx-auto min-[751px]:mt-[129px] max-[751px]:mt-[111px] relative">
        <div class="min-[751px]:w-[90%] mx-auto">
            <div class="font-bold">
                <span class="josefin-sans text-[64px] leading-[96px]">DF</span> 
                <span class="ml-[20px] text-[21px] leading-[42px]">ディフェンダー</span>
            </div>
            <div class="flex flex-wrap min-[751px]:gap-[20px] max-[750px]:justify-between">
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">23</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">岩上 花香</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Iwagami Hanaka</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">31</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">朝長 菜帆</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Tomnaga Naho</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">33</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">昆野 千聖</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Konno Chisato</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">34</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">市川 菜結</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Ichikawa Nayu</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">36</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">木下 唯愛</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Kinoshita Yuna</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">39</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">高橋 こころ</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Takahashi Kokoro</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">45</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">松田 羽菜</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Matsuda Hana</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">47</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">鈴木 沙空</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Suzuki Sara</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">49</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">長坂 莉々子</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Nagasaka Ririko</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">50</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">榊山 育麦</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Sakakiyama Hagumu</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">52</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">小山 莉桜</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Koyama Rio</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">54</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">関杉 彩芽</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Sekisugi Ayame</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">55</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">杉山 桃佳</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Sugiyama Momoka</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">72</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">五十嵐 舞</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Igarashi Mai</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">74</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">佐藤 和奏</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Sato Wakana</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">75</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">藤沢 あこ</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Fujisawa Ako</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">89</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">高橋　 梢</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Takahashi Kozue</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">91</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">田中 つぼみ</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Tanaka Tsubomi</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">93</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">高田　 恵</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Takada Megumi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MF CONTENT -->
<div class="relative overflow-hidden" id="mf">
    <!-- <img src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/left-blue.png" 
        class="absolute top-[35%] max-[750px]:hidden
        min-[751px]:max-lg:left-[-45%] lg:max-xl:left-[-25%] xl:max-2xl:left-[-15%]
        max-[750px]:top-[-5%] max-[750px]:left-[-72%] max-[700px]:left-[-76%] max-[650px]:left-[-80%]
    "> -->
    <div class="xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mx-auto min-[751px]:mt-[129px] max-[751px]:mt-[111px] relative">
        <div class="min-[751px]:w-[90%] mx-auto">
            <div class="font-bold">
                <span class="josefin-sans text-[64px] leading-[96px]">MF</span> 
                <span class="ml-[20px] text-[21px] leading-[42px]">ミッドフィルダー</span>
            </div>
            <div class="flex flex-wrap min-[751px]:gap-[20px] max-[750px]:justify-between">
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]" data-remodal-target="leader_1">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">20</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">福田 千晴</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Fukuda Chiharu</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]" data-remodal-target="leader_2">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">22</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">甲斐 渚紗</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Kai Nagisa</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">24</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">木南 亜希</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Kinami Aki</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">26</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">中島 虹架</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Nakajima Nika</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">27</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">服部 友香</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Hattori Yuuka</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">28</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">阿部 小陽</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Abe Koharu</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">29</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">飯本 遥月</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Iimoto Hazuki</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">32</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">村松 麻希</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Muramatsu Maki</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">35</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">中村　 結</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Nakamura Yuu</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">37</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">和里田 聡香</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Warita Satoka</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">40</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">横山 ゆず希</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Yokoyama Yuzuki</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">41</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">市瀬 未央</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Ichinose Mio</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">42</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">天野　 遥</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Amano Haruka</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">44</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">濱田 空夏</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Hamada Sorana</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">48</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">石井 梨乃</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Ishii Rino</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">57</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">鶴岡 茉緒</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Tsuruoka Mao</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">58</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">鈴木　 優</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Suzuki Yuu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FW CONTENT -->
<div class="relative overflow-hidden" id="fw">
    <div class="xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mx-auto min-[751px]:mt-[129px] max-[751px]:mt-[111px] relative">
        <div class="min-[751px]:w-[90%] mx-auto">
            <div class="font-bold">
                <span class="josefin-sans text-[64px] leading-[96px]">FW</span> 
                <span class="ml-[20px] text-[21px] leading-[42px]">ゴールキーパー</span>
            </div>
            <div class="flex flex-wrap min-[751px]:gap-[20px] max-[750px]:justify-between">
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] max-[600px]:text-[50px] nax-[500px]:text-[40px]">25</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">高梨 夢花</p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] max-[600px]:text-[15px] max-[500px]:text-[14px]">Takanashi Yumeka</p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] 
                                max-[600px]:text-[50px] nax-[500px]:text-[40px]">43</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium 
                                min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">
                                内田 朱里愛
                            </p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] 
                                max-[600px]:text-[15px] max-[500px]:text-[14px]">
                                Uchida Jyuria
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] 
                                max-[600px]:text-[50px] nax-[500px]:text-[40px]">46</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium 
                                min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">
                                土屋 美月
                            </p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] 
                                max-[600px]:text-[15px] max-[500px]:text-[14px]">
                                Tsuchiya Mizuki
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] 
                                max-[600px]:text-[50px] nax-[500px]:text-[40px]">51</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium 
                                min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">
                                出口 莉子
                            </p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] 
                                max-[600px]:text-[15px] max-[500px]:text-[14px]">
                                Deguchi Riko
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] 
                                max-[600px]:text-[50px] nax-[500px]:text-[40px]">52</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium 
                                min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">
                                小山 莉桜
                            </p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] 
                                max-[600px]:text-[15px] max-[500px]:text-[14px]">
                                Koyama Rio
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] 
                                max-[600px]:text-[50px] nax-[500px]:text-[40px]">56</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium 
                                min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">
                                福田 明以
                            </p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] 
                                max-[600px]:text-[15px] max-[500px]:text-[14px]">
                                Fukuda Mei
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] 
                                max-[600px]:text-[50px] nax-[500px]:text-[40px]">59</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium 
                                min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">
                                高田 理央
                            </p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] 
                                max-[600px]:text-[15px] max-[500px]:text-[14px]">
                                Takada Rio
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] 
                                max-[600px]:text-[50px] nax-[500px]:text-[40px]">84</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium 
                                min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">
                                鈴木 心暖
                            </p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] 
                                max-[600px]:text-[15px] max-[500px]:text-[14px]">
                                Suzuki Konon
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] 
                                max-[600px]:text-[50px] nax-[500px]:text-[40px]">85</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium 
                                min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">
                                田邊 心花
                            </p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] 
                                max-[600px]:text-[15px] max-[500px]:text-[14px]">
                                Tanabe Konoka
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] max-[750px]:w-[50%]">
                    <div class="flex mt-[30px]">
                        <div class="w-[25%] text-center">
                            <p class="text-[64px] josefin-sans font-bold leading-[96px] min-[751px]:max-[900px]:text-[50px] 
                                max-[600px]:text-[50px] nax-[500px]:text-[40px]">86</p>
                        </div>
                        <div class="ml-[14px]">
                            <p class="text-[28px] noto-sans leading-[42px] tracking-[2px] font-medium 
                                min-[751px]:max-[900px]:text-[20px] max-[600px]:text-[20px] max-[500px]:text-[15px]">
                                佐藤 かりん
                            </p>
                            <p class="text-[18px] font-bold leading-[27px] tracking-[2px] min-[751px]:max-[900px]:text-[15px] 
                                max-[600px]:text-[15px] max-[500px]:text-[14px]">
                                Sato Karin
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Staff Content -->
<!-- FW CONTENT -->
<div class="relative overflow-hidden" id="fw">
    <div class="xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mx-auto min-[751px]:mt-[129px] max-[751px]:mt-[111px] relative">
        <div class="min-[751px]:w-[90%] mx-auto">
            <div class="font-bold">
                <span class="josefin-sans text-[64px] leading-[96px]">Team Staff</span> 
                <span class="ml-[20px] text-[21px] leading-[42px]">チームスタッフ</span>
            </div>
            <div class="flex flex-wrap min-[751px]:gap-[20px] max-[750px]:justify-between">
                <div class="w-[30%] max-[750px]:w-[43%] mb-[41px]">
                    <div class="noto-sans mt-[30px]">
                        <p class="text-[18px] font-bold leading-[27px] tracking-[2px]">U-15監督</p>
                        <p class="font-medium text-[28px] leading-[42px] tracking-[2px]">●● ●●</p>
                        <p class="font-bold text-[18px] josefin-sans leading-[27px] tracking-[2px]">Abcde Fghi</p>
                    </div>
                </div>
                <div class="w-[30%] max-[750px]:w-[43%] mb-[41px]">
                    <div class="noto-sans mt-[30px]">
                        <p class="text-[18px] font-bold leading-[27px] tracking-[2px]">U-15監督</p>
                        <p class="font-medium text-[28px] leading-[42px] tracking-[2px]">●● ●●</p>
                        <p class="font-bold text-[18px] josefin-sans leading-[27px] tracking-[2px]">Abcde Fghi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="remodal" data-remodal-id="leader_1">
    <button data-remodal-action="close" class="remodal-close float-right"></button>
    <div class="modal-content">
        LEADER 1
    </div>
</div>
<div class="remodal" data-remodal-id="leader_2">
    <button data-remodal-action="close" class="remodal-close float-right"></button>
    <div class="modal-content">
        LEADER 2
    </div>
</div> -->
<?php get_footer(); ?>