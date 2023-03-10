<?php /* Template Name: Homepage Template */ ?>
<?php get_header(); ?>

<div id="top" class=''>
    <div class='flex flex-col smin-750:flex-row'>
        <div id="banner-image" class='w-[100%] smin-750:w-[80%] overflow-hidden max-[750px]:h-screen'>
            <div class="overlay_image_slide fade relative w-full bg-img-1">
                <div class='h-full flex'>
                    <div class='self-end ml-[140px] mb-[95px] max-[750px]:ml-[20px] max-[750px]:mb-[30px]'>
                        <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/Path 11990 new.png' />
                    </div>
                </div>
            </div>
            <div class="overlay_image_slide fade w-full bg-img-2">
                <div class='h-full flex'>
                    <div class='slide-2 self-end ml-auto mr-[78px] mb-[45px] max-[750px]:ml-[20px] max-[750px]:mb-[30px]'>
                        <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/Path 11990 new.png' />
                    </div>
                </div>
            </div>
            <div class="overlay_image_slide fade w-full bg-img-3">
                <div class='h-full flex relative'>
                    <div class='slide-2 self-end ml-auto mr-[115px] mb-[200px] max-[750px]:ml-[20px] max-[750px]:mb-[30px]'>
                        <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/Path 11990 new.png' />
                    </div>
                </div>
            </div>
            <div class="overlay_image_slide fade w-full  bg-img-4">
                <div class='h-full flex relative'>
                    <div class='slide-2 self-end ml-[105px] mb-[225px] max-[750px]:ml-[20px] max-[750px]:mb-[30px]'>
                        <img src='<?= site_url('/wp-content/themes/smg') ?>/assets/images/Path 11990 new.png' />
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:center" class='mt-[20px] smin-750:hidden block'>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <!-- ****************************************************** START OF RESULTSP *************************************************************** -->
        <div class="min-[1800px]:w-[50%] xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mt-[70px] mx-auto smin-750:hidden block">
            <div class="font-bold text-center">
                <p class="josefin-sans text-[32px] leading-[16px] max-[750px]:text-[44px] max-[750px]:leading-[32px]">RESULT</p>
                <p class="text-[10px] leading-[16px] tracking-[4px] mt-[4px] max-[750px]:text-[20px] max-[750px]:leading-[32px]">競技・試合結果</p>
            </div> 
            <div class="top_result_slider mt-[30px] row">
                <div class="flex flex-col bg-[#666666] h-[200px] max-[750px]:h-[380px] max-[500px]:h-[400px] max-[375px]:h-[360px] py-[24px] px-[12px]">
                    <div class="font-bold text-center">
                        <p class="text-white josefin-sans text-[24px] max-[750px]:text-[50px] leading-[18px] max-[750px]:leading-[38px] tracking-[2px] max-[375px]:text-[40px]">
                            04.20 
                            <span class="text-[14px] josefin-sans max-[750px]:text-[29px] leading-[18px] max-[750px]:leading-[38px] tracking-[2px]">SUN</span>
                        </p>
                        <p class="mt-[4px] noto-sans text-[16px] max-[750px]:text-[33px] leading-[16px] max-[750px]:leading-[33px] tracking-[2px] text-[#D19F00] max-[375px]:text-[25px]
                        max-[375px]:leading-[20px]
                        ">試合終了</p>
                        <p class="text-white mt-[4px] noto-sans text-[12px max-[750px]:text-[25px] leading-[16px] max-[750px]:leading-[33px] tracking-[2px]
                        max-[550px]:mb-[15px] 
                        max-[375px]:text-[20px] 
                        ">なでしこリーグ第0節</p>
                    </div>
                    <div class="flex flex-row justify-between xl:w-[85%] lg:w-full min-[451px]:w-[85%] mx-auto mt-[8px] 2xl:mr-[25px] xl:mr-[30px]">
                        <div class="flex flex-col items-center">
                            <span class='text-white josefin-sans text-[32px] leading-[16px] tracking-[2px] 
                            font-bold max-[750px]:text-[67px] max-[750px]:leading-[34px]
                            max-[375px]:text-[55px]'>1</span>
                            <span class='!mt-[20px] text-white noto-sans text-[12px] font-bold mt-[2px] 
                            max-[750px]:text-[24px] max-[750px]:leading-[32px] tracking-[2px] leading-[16px]
                            max-[500px]:text-[18px]
                            max-[375px]:text-[16px]
                            '>日体大SMG</span>
                            <span class='text-white noto-sans text-[12px] font-bold 
                            max-[750px]:text-[24px] max-[750px]:leading-[32px] tracking-[2px] leading-[16px]
                            max-[500px]:text-[18px]
                            max-[375px]:text-[16px]
                            '>横浜</span>
                        </div>
                        <div class="flex flex-col items-center text-[#B1B1B1] font-bold mt-[2px] max-[750px]:mt-[10px] 2xl:mr-[25px] xl:mr-[15px] min-[751px]:mr-[30px] mr-[50px]">
                            <span class='josefin-sans text-[24px] leading-[16px] tracking-[2px] max-[750px]:text-[51px] max-[750px]:leading-[34px]
                            max-[375px]:text-[35 px]'>VS</span>
                            <span class='mt-[10px] noto-sans text-[12px] leading-[18px] tracking-[2px] max-[750px]:text-[25px] max-[750px]:leading-[38px]
                            max-[375px]:text-[20px]'>HOME</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class='text-white josefin-sans text-[32px] leading-[16px] tracking-[2px] 
                            font-bold max-[750px]:text-[67px] max-[750px]:leading-[34px]
                            max-[375px]:text-[55px] '>0</span>
                            <span class='!mt-[35px] text-white noto-sans text-[12px] font-bold mt-[2px] 
                            max-[750px]:text-[24px] max-[750px]:leading-[32px] tracking-[2px] leading-[16px]
                            max-[500px]:text-[18px]
                            max-[375px]:text-[16px]
                            '>名古屋</span>
                        </div>
                    </div>
                    <div class="border-t-2 border-white text-center mt-[25px]">
                    <p class='text-white leading-[18px] tracking-[2px] noto-sans text-[12px] font-bold mt-[10px] 
                    max-[750px]:text-[25px] max-[750px]:leading-[38px]
                    max-[550px]:text-[20px]
                    max-[425px]:text-[14px]
                    '>会場：神奈川県立保土ヶ谷公園サッカー場</p>
                    </div>
                </div>
                <div class="flex flex-col bg-[#333333] h-[200px] max-[750px]:h-[350px] max-[500px]:h-[380px] py-[24px] px-[12px]">
                    <div class="font-bold text-center">
                        <p class="text-white josefin-sans text-[24px] max-[750px]:text-[50px] leading-[18px] max-[750px]:leading-[38px] tracking-[2px]">
                            04.20 
                            <span class="text-[14px] josefin-sans max-[750px]:text-[29px] leading-[18px] max-[750px]:leading-[38px] tracking-[2px]">SUN</span>
                        </p>
                        <p class="mt-[4px] noto-sans text-[16px] max-[750px]:text-[33px] leading-[16px] max-[750px]:leading-[33px] tracking-[2px] text-[#D19F00]">試合終了</p>
                        <p class="text-white mt-[4px] noto-sans text-[12px max-[750px]:text-[25px] leading-[16px] max-[750px]:leading-[33px] tracking-[2px]">U15リーグ第0節</p>
                    </div>
                    <div class="flex flex-row justify-between xl:w-[85%] lg:w-full min-[451px]:w-[85%] mx-auto mt-[8px] 2xl:ml-[25px] xl:ml-[30px]">
                        <div class="flex flex-col items-center">
                            <span class='text-white josefin-sans text-[32px] leading-[16px] tracking-[2px] 
                            font-bold max-[750px]:text-[67px] max-[750px]:leading-[34px]'>0</span>
                            <span class='text-white noto-sans text-[12px] font-bold mt-[2px] 
                            max-[750px]:text-[24px] max-[750px]:leading-[32px] tracking-[2px] leading-[16px]
                            '>名古屋</span>
                        </div>
                        <div class="flex flex-col items-center text-[#B1B1B1] font-bold mt-[2px] max-[750px]:mt-[10px] 2xl:ml-[25px] xl:ml-[15px] min-[751px]:ml-[30px] ml-[50px]">
                            <span class='josefin-sans text-[24px] leading-[16px] tracking-[2px] max-[750px]:text-[51px] max-[750px]:leading-[34px]'>VS</span>
                            <span class='noto-sans text-[12px] leading-[18px] tracking-[2px] max-[750px]:text-[25px] max-[750px]:leading-[38px]'>AWAY</span>
                        </div>
                        <div class="flex flex-col items-center">
                        
                            <span class='text-white josefin-sans text-[32px] leading-[16px] tracking-[2px] 
                            font-bold max-[750px]:text-[67px] max-[750px]:leading-[34px]'>1</span>
                            <span class='text-white noto-sans text-[12px] font-bold mt-[2px] 
                            max-[750px]:text-[24px] max-[750px]:leading-[32px] tracking-[2px] leading-[16px]
                            '>日体大SMG</span>
                            <span class='text-white noto-sans text-[12px] font-bold 
                            max-[750px]:text-[24px] max-[750px]:leading-[32px] tracking-[2px] leading-[16px]
                            '>横浜</span>
                        </div>
                    </div>
                    <div class="border-t-2 border-white text-center mt-[10px]">
                    <span class='text-white leading-[18px] tracking-[2px] noto-sans text-[12px] font-bold mt-[2px] 
                    max-[750px]:text-[25px] max-[750px]:leading-[38px]
                    '>会場：神奈川県立保土ヶ谷公園サッカー場</span>
                    </div>
                </div>
                <div class="flex flex-col bg-[#666666] h-[200px] max-[750px]:h-[350px] max-[500px]:h-[380px] py-[24px] px-[12px]">
                    <div class="font-bold text-center">
                        <p class="text-white josefin-sans text-[24px] max-[750px]:text-[50px] leading-[18px] max-[750px]:leading-[38px] tracking-[2px]">
                            04.20 
                            <span class="text-[14px] josefin-sans max-[750px]:text-[29px] leading-[18px] max-[750px]:leading-[38px] tracking-[2px]">SUN</span>
                        </p>
                        <p class="mt-[4px] noto-sans text-[16px] max-[750px]:text-[33px] leading-[16px] max-[750px]:leading-[33px] tracking-[2px] text-[#D19F00]">試合終了</p>
                        <p class="text-white mt-[4px] noto-sans text-[12px max-[750px]:text-[25px] leading-[16px] max-[750px]:leading-[33px] tracking-[2px]">U18リーグ第0節</p>
                    </div>
                    <div class="flex flex-row justify-between xl:w-[85%] lg:w-full min-[451px]:w-[85%] mx-auto mt-[8px] 2xl:mr-[25px] xl:mr-[30px]">
                        <div class="flex flex-col items-center">
                            <span class='text-white josefin-sans text-[32px] leading-[16px] tracking-[2px] 
                            font-bold max-[750px]:text-[67px] max-[750px]:leading-[34px]'>1</span>
                            <span class='text-white noto-sans text-[12px] font-bold mt-[2px] 
                            max-[750px]:text-[24px] max-[750px]:leading-[32px] tracking-[2px] leading-[16px]
                            '>日体大SMG</span>
                            <span class='text-white noto-sans text-[12px] font-bold 
                            max-[750px]:text-[24px] max-[750px]:leading-[32px] tracking-[2px] leading-[16px]
                            '>横浜U18</span>
                        </div>
                        <div class="flex flex-col items-center text-[#B1B1B1] font-bold mt-[2px] max-[750px]:mt-[10px] 2xl:mr-[25px] xl:mr-[15px] min-[751px]:mr-[30px] mr-[50px]">
                            <span class='josefin-sans text-[24px] leading-[16px] tracking-[2px] max-[750px]:text-[51px] max-[750px]:leading-[34px]'>VS</span>
                            <span class='noto-sans text-[12px] leading-[18px] tracking-[2px] max-[750px]:text-[25px] max-[750px]:leading-[38px]'>HOME</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class='text-white josefin-sans text-[32px] leading-[16px] tracking-[2px] 
                                font-bold max-[750px]:text-[67px] max-[750px]:leading-[34px]'>0
                            </span>
                            <span class='text-white noto-sans text-[12px] font-bold mt-[2px] 
                                max-[750px]:text-[24px] max-[750px]:leading-[32px] tracking-[2px] leading-[16px]
                            '>名古屋</span>
                        </div>
                    </div>
                    <div class="border-t-2 border-white text-center mt-[10px]">
                    <span class='text-white leading-[18px] tracking-[2px] noto-sans text-[12px] font-bold mt-[2px] 
                    max-[750px]:text-[25px] max-[750px]:leading-[38px]
                    '>会場：神奈川県立保土ヶ谷公園サッカー場</span>
                    </div>
                </div>
                <div class="flex flex-col bg-[#666666] h-[200px] max-[750px]:h-[350px] max-[500px]:h-[380px] py-[24px] px-[12px]">
                    <div class="font-bold text-center">
                        <p class="text-white josefin-sans text-[24px] max-[750px]:text-[50px] leading-[18px] max-[750px]:leading-[38px] tracking-[2px]">
                            04.20 
                            <span class="text-[14px] josefin-sans max-[750px]:text-[29px] leading-[18px] max-[750px]:leading-[38px] tracking-[2px]">SUN</span>
                        </p>
                        <p class="mt-[4px] noto-sans text-[16px] max-[750px]:text-[33px] leading-[16px] max-[750px]:leading-[33px] tracking-[2px] text-[#D19F00]">試合終了</p>
                        <p class="text-white mt-[4px] noto-sans text-[12px max-[750px]:text-[25px] leading-[16px] max-[750px]:leading-[33px] tracking-[2px]">なでしこリーグ第0節</p>
                    </div>
                    <div class="flex flex-row justify-between xl:w-[85%] lg:w-full min-[451px]:w-[85%] mx-auto mt-[8px] 2xl:mr-[25px] xl:mr-[30px]">
                        <div class="flex flex-col items-center">
                            <span class='text-white josefin-sans text-[32px] leading-[16px] tracking-[2px] 
                            font-bold max-[750px]:text-[67px] max-[750px]:leading-[34px]'>1</span>
                            <span class='text-white noto-sans text-[12px] font-bold mt-[2px] 
                            max-[750px]:text-[24px] max-[750px]:leading-[32px] tracking-[2px] leading-[16px]
                            '>日体大SMG</span>
                            <span class='text-white noto-sans text-[12px] font-bold 
                            max-[750px]:text-[24px] max-[750px]:leading-[32px] tracking-[2px] leading-[16px]
                            '>横浜</span>
                        </div>
                        <div class="flex flex-col items-center text-[#B1B1B1] font-bold mt-[2px] max-[750px]:mt-[10px] 2xl:mr-[25px] xl:mr-[15px] min-[751px]:mr-[30px] mr-[50px]">
                            <span class='josefin-sans text-[24px] leading-[16px] tracking-[2px] max-[750px]:text-[51px] max-[750px]:leading-[34px]'>VS</span>
                            <span class='noto-sans text-[12px] leading-[18px] tracking-[2px] max-[750px]:text-[25px] max-[750px]:leading-[38px]'>HOME</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class='text-white josefin-sans text-[32px] leading-[16px] tracking-[2px] 
                            font-bold max-[750px]:text-[67px] max-[750px]:leading-[34px]'>0</span>
                            <span class='text-white noto-sans text-[12px] font-bold mt-[2px] 
                            max-[750px]:text-[24px] max-[750px]:leading-[32px] tracking-[2px] leading-[16px]
                            '>名古屋</span>
                        </div>
                    </div>
                    <div class="border-t-2 border-white text-center mt-[10px]">
                    <span class='text-white leading-[18px] tracking-[2px] noto-sans text-[12px] font-bold mt-[2px] 
                    max-[750px]:text-[25px] max-[750px]:leading-[38px]
                    '>会場：神奈川県立保土ヶ谷公園サッカー場</span>
                    </div>
                </div>
                <div class="flex flex-col bg-[#333333] h-[200px] max-[750px]:h-[350px] max-[500px]:h-[380px] py-[24px] px-[12px]">
                    <div class="font-bold text-center">
                        <p class="text-white josefin-sans text-[24px] max-[750px]:text-[50px] leading-[18px] max-[750px]:leading-[38px] tracking-[2px]">
                            04.20 
                            <span class="text-[14px] josefin-sans max-[750px]:text-[29px] leading-[18px] max-[750px]:leading-[38px] tracking-[2px]">SUN</span>
                        </p>
                        <p class="mt-[4px] noto-sans text-[16px] max-[750px]:text-[33px] leading-[16px] max-[750px]:leading-[33px] tracking-[2px] text-[#D19F00]">試合終了</p>
                        <p class="text-white mt-[4px] noto-sans text-[12px max-[750px]:text-[25px] leading-[16px] max-[750px]:leading-[33px] tracking-[2px]">U15リーグ第0節</p>
                    </div>
                    <div class="flex flex-row justify-between xl:w-[85%] lg:w-full min-[451px]:w-[85%] mx-auto mt-[8px] 2xl:ml-[25px] xl:ml-[30px]">
                        <div class="flex flex-col items-center">
                            <span class='text-white josefin-sans text-[32px] leading-[16px] tracking-[2px] 
                            font-bold max-[750px]:text-[67px] max-[750px]:leading-[34px]'>0</span>
                            <span class='text-white noto-sans text-[12px] font-bold mt-[2px] 
                            max-[750px]:text-[24px] max-[750px]:leading-[32px] tracking-[2px] leading-[16px]
                            '>名古屋</span>
                        </div>
                        <div class="flex flex-col items-center text-[#B1B1B1] font-bold mt-[2px] max-[750px]:mt-[10px] 2xl:ml-[25px] xl:ml-[15px] min-[751px]:ml-[30px] ml-[50px]">
                            <span class='josefin-sans text-[24px] leading-[16px] tracking-[2px] max-[750px]:text-[51px] max-[750px]:leading-[34px]'>VS</span>
                            <span class='noto-sans text-[12px] leading-[18px] tracking-[2px] max-[750px]:text-[25px] max-[750px]:leading-[38px]'>AWAY</span>
                        </div>
                        <div class="flex flex-col items-center">
                        
                            <span class='text-white josefin-sans text-[32px] leading-[16px] tracking-[2px] 
                            font-bold max-[750px]:text-[67px] max-[750px]:leading-[34px]'>1</span>
                            <span class='text-white noto-sans text-[12px] font-bold mt-[2px] 
                            max-[750px]:text-[24px] max-[750px]:leading-[32px] tracking-[2px] leading-[16px]
                            '>日体大SMG</span>
                            <span class='text-white noto-sans text-[12px] font-bold 
                            max-[750px]:text-[24px] max-[750px]:leading-[32px] tracking-[2px] leading-[16px]
                            '>横浜</span>
                        </div>
                    </div>
                    <div class="border-t-2 border-white text-center mt-[10px]">
                    <span class='text-white leading-[18px] tracking-[2px] noto-sans text-[12px] font-bold mt-[2px] 
                    max-[750px]:text-[25px] max-[750px]:leading-[38px]
                    '>会場：神奈川県立保土ヶ谷公園サッカー場</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****************************************************** END OF RESULTSP *************************************************************** -->
        
        <!-- ****************************************************** START OF resultPC *************************************************************** -->
        <div id="result-pc-section" class='h-[10%] smin-750:w-[20%] smin-750:block hidden relative min-w-[300px]'>
            <div id='result-pc-title' class=''>
                <div class='p-[20px] flex flex-col bg-[#004EA1] leading-[16px]'>
                    <span class='josefin-sans text-[22px] font-bold text-white'>RESULT</span>
                    <span class='noto-sans text-[10px] font-bold text-white'>競技・試合結果</span>
                </div>
            </div>
            <div id='result-pc-content' class='flex flex-col gap-[10px] result-content-vh'>
                <div class='h-[100%] my-auto flex flex-col gap-y-[10px] top-vertical-slider'>
                    <div class='card bg-[#666666] w-[90%] m-auto'>
                        <div class=''>
                            <div class='flex justify-center gap-[10px] pt-[10px] leading-[18px]'>
                                <span class='text-white text-[24px] josefin-sans font-bold self-center'>04.20 </span>
                                <span class='text-white text-[14px] josefin-sans font-bold self-center'>SUN</span>
                            </div>
                            <div class='flex justify-center leading-[16px] mt-[10px]'>
                                <span class='text-[#D19F00] noto-sans text-[16px] font-bold'>試合終了</span>
                            </div>
                            <div class='flex justify-center leading-[16px] my-[5px]'>
                                <span class='text-white noto-sans text-[12px] font-bold'>なでしこリーグ第0節</span>
                            </div>
                            <div class='flex flex-row justify-between mb-[10px] leading-[16px]'>
                                <div class='flex flex-col items-center w-[33.33%]'>
                                    <span class='text-white josefin-sans text-[32px] font-bold'>1</span>
                                    <span class='text-white noto-sans text-[12px] font-bold mt-[10px]'>日体大SMG</span>
                                    <span class='text-white noto-sans text-[12px] font-bold'>横浜</span>
                                </div>
                                <div class='flex flex-col items-center self-center w-[33.33%]'>
                                    <span class='text-[#B1B1B1] josefin-sans text-[24px] font-bold'>VS</span>
                                    <span class='text-[#B1B1B1] josefin-sans text-[12px] font-bold mt-[10px]'>HOME</span>
                                </div>
                                <div class='flex flex-col items-center w-[33.33%] self-center mt-[-10px]'>
                                    <span class='text-white josefin-sans text-[32px] font-bold self-center'>0</span>
                                    <span class='text-white noto-sans text-[12px] font-bold mt-[20px]'>名古屋</span>
                                </div>
                            </div>
                            <hr class='border-t-[2px] border-white w-[90%] m-auto' />
                            <div class='pb-[20px] text-center leading-18px'>
                                <span class='text-white noto-sans text-[12px] font-bold'>会場：神奈川県立保土ヶ谷公園サッカー場</span>
                            </div>
                        </div>
                    </div>
                    <div class='card bg-[#333333] w-[90%] m-auto'>
                        <div class=''>
                            <div class='flex justify-center gap-[10px] pt-[10px] leading-[18px]'>
                                <span class='text-white text-[24px] josefin-sans font-bold self-center'>04.20 </span>
                                <span class='text-white text-[14px] josefin-sans font-bold self-center'>SUN</span>
                            </div>
                            <div class='flex justify-center leading-[16px] mt-[10px]'>
                                <span class='text-[#D19F00] noto-sans text-[16px] font-bold'>試合終了</span>
                            </div>
                            <div class='flex justify-center leading-[16px] my-[5px]'>
                                <span class='text-white noto-sans text-[12px] font-bold'>なでしこリーグ第0節</span>
                            </div>
                            <div class='flex flex-row justify-between mb-[10px] leading-[16px]'>
                                <div class='flex flex-col items-center w-[33.33%]'>
                                    <span class='text-white josefin-sans text-[32px] font-bold'>1</span>
                                    <span class='text-white noto-sans text-[12px] font-bold mt-[10px]'>日体大SMG</span>
                                    <span class='text-white noto-sans text-[12px] font-bold'>横浜</span>
                                </div>
                                <div class='flex flex-col items-center self-center w-[33.33%]'>
                                    <span class='text-[#B1B1B1] josefin-sans text-[24px] font-bold'>VS</span>
                                    <span class='text-[#B1B1B1] josefin-sans text-[12px] font-bold mt-[10px]'>HOME</span>
                                </div>
                                <div class='flex flex-col items-center w-[33.33%] self-center mt-[-10px]'>
                                    <span class='text-white josefin-sans text-[32px] font-bold self-center'>0</span>
                                    <span class='text-white noto-sans text-[12px] font-bold mt-[20px]'>名古屋</span>
                                </div>
                            </div>
                            <hr class='border-t-[2px] border-white w-[90%] m-auto' />
                            <div class='pb-[20px] text-center leading-18px'>
                                <span class='text-white noto-sans text-[12px] font-bold'>会場：神奈川県立保土ヶ谷公園サッカー場</span>
                            </div>
                        </div>
                    </div>
                    <div class='card bg-[#666666] w-[90%] m-auto'>
                        <div class=''>
                            <div class='flex justify-center gap-[10px] pt-[10px] leading-[18px]'>
                                <span class='text-white text-[24px] josefin-sans font-bold self-center'>04.20 </span>
                                <span class='text-white text-[14px] josefin-sans font-bold self-center'>SUN</span>
                            </div>
                            <div class='flex justify-center leading-[16px] mt-[10px]'>
                                <span class='text-[#D19F00] noto-sans text-[16px] font-bold'>試合終了</span>
                            </div>
                            <div class='flex justify-center leading-[16px] my-[5px]'>
                                <span class='text-white noto-sans text-[12px] font-bold'>なでしこリーグ第0節</span>
                            </div>
                            <div class='flex flex-row justify-between mb-[10px] leading-[16px]'>
                                <div class='flex flex-col items-center w-[33.33%]'>
                                    <span class='text-white josefin-sans text-[32px] font-bold'>1</span>
                                    <span class='text-white noto-sans text-[12px] font-bold mt-[10px]'>日体大SMG</span>
                                    <span class='text-white noto-sans text-[12px] font-bold'>横浜</span>
                                </div>
                                <div class='flex flex-col items-center self-center w-[33.33%]'>
                                    <span class='text-[#B1B1B1] josefin-sans text-[24px] font-bold'>VS</span>
                                    <span class='text-[#B1B1B1] josefin-sans text-[12px] font-bold mt-[10px]'>HOME</span>
                                </div>
                                <div class='flex flex-col items-center w-[33.33%] self-center mt-[-10px]'>
                                    <span class='text-white josefin-sans text-[32px] font-bold self-center'>0</span>
                                    <span class='text-white noto-sans text-[12px] font-bold mt-[20px]'>名古屋</span>
                                </div>
                            </div>
                            <hr class='border-t-[2px] border-white w-[90%] m-auto' />
                            <div class='pb-[20px] text-center leading-18px'>
                                <span class='text-white noto-sans text-[12px] font-bold'>会場：神奈川県立保土ヶ谷公園サッカー場</span>
                            </div>
                        </div>
                    </div>

                    <div class='card bg-[#333333] w-[90%] m-auto'>
                        <div class=''>
                            <div class='flex justify-center gap-[10px] pt-[10px] leading-[18px]'>
                                <span class='text-white text-[24px] josefin-sans font-bold self-center'>04.20 </span>
                                <span class='text-white text-[14px] josefin-sans font-bold self-center'>SUN</span>
                            </div>
                            <div class='flex justify-center leading-[16px] mt-[10px]'>
                                <span class='text-[#D19F00] noto-sans text-[16px] font-bold'>試合終了</span>
                            </div>
                            <div class='flex justify-center leading-[16px] my-[5px]'>
                                <span class='text-white noto-sans text-[12px] font-bold'>なでしこリーグ第0節</span>
                            </div>
                            <div class='flex flex-row justify-between mb-[10px] leading-[16px]'>
                                <div class='flex flex-col items-center w-[33.33%]'>
                                    <span class='text-white josefin-sans text-[32px] font-bold'>1</span>
                                    <span class='text-white noto-sans text-[12px] font-bold mt-[10px]'>日体大SMG</span>
                                    <span class='text-white noto-sans text-[12px] font-bold'>横浜</span>
                                </div>
                                <div class='flex flex-col items-center self-center w-[33.33%]'>
                                    <span class='text-[#B1B1B1] josefin-sans text-[24px] font-bold'>VS</span>
                                    <span class='text-[#B1B1B1] josefin-sans text-[12px] font-bold mt-[10px]'>HOME</span>
                                </div>
                                <div class='flex flex-col items-center w-[33.33%] self-center mt-[-10px]'>
                                    <span class='text-white josefin-sans text-[32px] font-bold self-center'>0</span>
                                    <span class='text-white noto-sans text-[12px] font-bold mt-[20px]'>名古屋</span>
                                </div>
                            </div>
                            <hr class='border-t-[2px] border-white w-[90%] m-auto' />
                            <div class='pb-[20px] text-center leading-18px'>
                                <span class='text-white noto-sans text-[12px] font-bold'>会場：神奈川県立保土ヶ谷公園サッカー場</span>
                            </div>
                        </div>
                    </div>

                    <div class='card bg-[#333333] w-[90%] m-auto'>
                        <div class=''>
                            <div class='flex justify-center gap-[10px] pt-[10px] leading-[18px]'>
                                <span class='text-white text-[24px] josefin-sans font-bold self-center'>04.20 </span>
                                <span class='text-white text-[14px] josefin-sans font-bold self-center'>SUN</span>
                            </div>
                            <div class='flex justify-center leading-[16px] mt-[10px]'>
                                <span class='text-[#D19F00] noto-sans text-[16px] font-bold'>試合終了</span>
                            </div>
                            <div class='flex justify-center leading-[16px] my-[5px]'>
                                <span class='text-white noto-sans text-[12px] font-bold'>なでしこリーグ第0節</span>
                            </div>
                            <div class='flex flex-row justify-between mb-[10px] leading-[16px]'>
                                <div class='flex flex-col items-center w-[33.33%]'>
                                    <span class='text-white josefin-sans text-[32px] font-bold'>1</span>
                                    <span class='text-white noto-sans text-[12px] font-bold mt-[10px]'>日体大SMG</span>
                                    <span class='text-white noto-sans text-[12px] font-bold'>横浜</span>
                                </div>
                                <div class='flex flex-col items-center self-center w-[33.33%]'>
                                    <span class='text-[#B1B1B1] josefin-sans text-[24px] font-bold'>VS</span>
                                    <span class='text-[#B1B1B1] josefin-sans text-[12px] font-bold mt-[10px]'>HOME</span>
                                </div>
                                <div class='flex flex-col items-center w-[33.33%] self-center mt-[-10px]'>
                                    <span class='text-white josefin-sans text-[32px] font-bold self-center'>0</span>
                                    <span class='text-white noto-sans text-[12px] font-bold mt-[20px]'>名古屋</span>
                                </div>
                            </div>
                            <hr class='border-t-[2px] border-white w-[90%] m-auto' />
                            <div class='pb-[20px] text-center leading-18px'>
                                <span class='text-white noto-sans text-[12px] font-bold'>会場：神奈川県立保土ヶ谷公園サッカー場</span>
                            </div>
                        </div>
                    </div>

                    <div class='card bg-[#333333] w-[90%] m-auto'>
                        <div class=''>
                            <div class='flex justify-center gap-[10px] pt-[10px] leading-[18px]'>
                                <span class='text-white text-[24px] josefin-sans font-bold self-center'>04.20 </span>
                                <span class='text-white text-[14px] josefin-sans font-bold self-center'>SUN</span>
                            </div>
                            <div class='flex justify-center leading-[16px] mt-[10px]'>
                                <span class='text-[#D19F00] noto-sans text-[16px] font-bold'>試合終了</span>
                            </div>
                            <div class='flex justify-center leading-[16px] my-[5px]'>
                                <span class='text-white noto-sans text-[12px] font-bold'>なでしこリーグ第0節</span>
                            </div>
                            <div class='flex flex-row justify-between mb-[10px] leading-[16px]'>
                                <div class='flex flex-col items-center w-[33.33%]'>
                                    <span class='text-white josefin-sans text-[32px] font-bold'>1</span>
                                    <span class='text-white noto-sans text-[12px] font-bold mt-[10px]'>日体大SMG</span>
                                    <span class='text-white noto-sans text-[12px] font-bold'>横浜</span>
                                </div>
                                <div class='flex flex-col items-center self-center w-[33.33%]'>
                                    <span class='text-[#B1B1B1] josefin-sans text-[24px] font-bold'>VS</span>
                                    <span class='text-[#B1B1B1] josefin-sans text-[12px] font-bold mt-[10px]'>HOME</span>
                                </div>
                                <div class='flex flex-col items-center w-[33.33%] self-center mt-[-10px]'>
                                    <span class='text-white josefin-sans text-[32px] font-bold self-center'>0</span>
                                    <span class='text-white noto-sans text-[12px] font-bold mt-[20px]'>名古屋</span>
                                </div>
                            </div>
                            <hr class='border-t-[2px] border-white w-[90%] m-auto' />
                            <div class='pb-[20px] text-center leading-18px'>
                                <span class='text-white noto-sans text-[12px] font-bold'>会場：神奈川県立保土ヶ谷公園サッカー場</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- ****************************************************** END OF resultPC *************************************************************** -->
    </div>
    <div style="text-align:center" class='mt-[20px] smin-750:block hidden absolute left-[48%]'>
        <span class="pc-dot"></span>
        <span class="pc-dot"></span>
        <span class="pc-dot"></span>
        <span class="pc-dot"></span>
    </div>
</div>

<!-- ****************************************************** NEWS *************************************************************** -->

    <div id='news'>
        <div class='flex flex-col smin-750:flex-row'>
            <div class='w-[60%] smin-750:w-[80%] bg-news mt-[100px] bg-no-repeat smin-750:block hidden min-w-[60%]'>
                <div class='mt-[50px] ml-[calc(50vw-70px)] flex flex-col w-[150px]'>
                    <span class='josefin-sans text-[48px] font-bold text-white'>NEWS</span>
                    <span class='noto-sans text-[20px] font-bold text-white text-center'>ニュース</span>
                </div>
                <div class='w-[90%] mx-auto'>
                    <div class="team_02_slider-full row mt-[30px]">
                        <div class="news-slide mb-[5px] bg-white">
                            <div class="relative">
                                <img class="w-full" src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/team_02/new1.png">
                                <div class="absolute top-0 w-full h-full">
                                    <div class="relative w-full h-full flex justify-center items-center">
                                        <div class="leading-[18px]">
                                            <span class='noto-sans text-white px-[20px] bg-[black] text-[10px] font-bold py-[8px]'>ご支給ください</span>
                                        </div>
                                        <span class='absolute bottom-0 left-0 bg-[#E1007E] text-[12px] text-white noto-sans font-medium py-[5px] px-[15px] tracking-wider'>日体大SMG横浜</span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class='p-[20px] shadow-lg'>
                                <div class='leading-[18px]'>
                                    <span class='noto-sans text-[12px] text-[#808080] font-normal'>2022.00.00</span>
                                    <span class='noto-sans text-[12px] text-[#D19F00] font-bold'>レポート</span>
                                </div>
                                <div class='no-scroll noto-sans text-[14px] leading-[28px] font-medium tracking-[-1.5px] h-[78px] overflow-y-scroll mt-[18px]'>
                                    <p class='leading-[28px]'>この文章はダミーのコピーを仮に流し込んで</p>
                                    <p class='leading-[28px]'>います。コピーができ次第、差し替えますの</p>
                                    <p class='leading-[28px]'>で今しばらくお待ちください。どうぞよろし</p>
                                    <p>くお願いいたします。</p>
                            
                                </div>
                            </div>
                        </div>
                        <div class="news-slide mb-[5px] bg-white">
                            <div class="relative">
                                <img class="w-full" src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/team_02/new2.png">
                                <div class="absolute top-0 w-full h-full">
                                    <div class="relative w-full h-full flex justify-center items-center">
                                        <div class="leading-[18px]">
                                            <span class='noto-sans text-white px-[20px] bg-[black] text-[10px] font-bold py-[8px]'>ご支給ください</span>
                                        </div>
                                        <span class='absolute bottom-0 left-0 bg-[#E1007E] text-[12px] text-white noto-sans font-medium py-[5px] px-[15px] tracking-wider'>日体大SMG横浜</span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class='p-[20px] shadow-md'>
                                <div class='leading-[18px]'>
                                    <span class='noto-sans text-[12px] text-[#808080] font-normal'>2022.00.00</span>
                                    <span class='noto-sans text-[12px] text-[#D19F00] font-bold'>レポート</span>
                                </div>
                                <div class='no-scroll noto-sans text-[14px] leading-[28px] font-medium tracking-[-1.5px] h-[78px] overflow-y-scroll mt-[18px]'>
                                    <p class='leading-[28px]'>この文章はダミーのコピーを仮に流し込んで</p>
                                    <p class='leading-[28px]'>います。コピーができ次第、差し替えますの</p>
                                    <p class='leading-[28px]'>で今しばらくお待ちください。どうぞよろし</p>
                                    <p>くお願いいたします。</p>
                                </div>
                            </div>
                        </div>
                        <div class="news-slide mb-[5px] bg-white">
                            <div class="relative">
                                <img class="w-full" src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/team_02/new3.png">
                                <div class="absolute top-0 w-full h-full">
                                    <div class="relative w-full h-full flex justify-center items-center">
                                        <div class="leading-[18px]">
                                            <span class='noto-sans text-white px-[20px] bg-[black] text-[10px] font-bold py-[8px]'>ご支給ください</span>
                                        </div>
                                        <span class='absolute bottom-0 left-0 bg-[#E1007E] text-[12px] text-white noto-sans font-medium py-[5px] px-[15px] tracking-wider'>日体大SMG横浜</span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class='p-[20px] shadow-md'>
                                <div class='leading-[18px]'>
                                    <span class='noto-sans text-[12px] text-[#808080] font-normal'>2022.00.00</span>
                                    <span class='noto-sans text-[12px] text-[#D19F00] font-bold'>レポート</span>
                                </div>
                                <div class='no-scroll noto-sans text-[14px] leading-[28px] font-medium tracking-[-1.5px] h-[78px] overflow-y-scroll mt-[18px]'>
                                    <p class='leading-[28px]'>この文章はダミーのコピーを仮に流し込んで</p>
                                    <p class='leading-[28px]'>います。コピーができ次第、差し替えますの</p>
                                    <p class='leading-[28px]'>で今しばらくお待ちください。どうぞよろし</p>
                                    <p>くお願いいたします。</p>
                                </div>
                            </div>
                        </div>
                        <div class="news-slide mb-[5px] bg-white">
                            <div class="relative">
                                <img class="w-full" src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/team_02/new4.png">
                                <div class="absolute top-0 w-full h-full">
                                    <div class="relative w-full h-full flex justify-center items-center">
                                        <div class="leading-[18px]">
                                            <span class='noto-sans text-white px-[20px] bg-[black] text-[10px] font-bold py-[8px]'>ご支給ください</span>
                                        </div>
                                        <span class='absolute bottom-0 left-0 bg-[#E1007E] text-[12px] text-white noto-sans font-medium py-[5px] px-[15px] tracking-wider'>日体大SMG横浜</span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class='p-[20px] shadow-md'>
                                <div class='leading-[18px]'>
                                    <span class='noto-sans text-[12px] text-[#808080] font-normal'>2022.00.00</span>
                                    <span class='noto-sans text-[12px] text-[#D19F00] font-bold'>レポート</span>
                                </div>
                                <div class='no-scroll noto-sans text-[14px] leading-[28px] font-medium tracking-[-1.5px] h-[78px] overflow-y-scroll mt-[18px]'>
                                    <p class='leading-[28px]'>この文章はダミーのコピーを仮に流し込んで</p>
                                    <p class='leading-[28px]'>います。コピーができ次第、差し替えますの</p>
                                    <p class='leading-[28px]'>で今しばらくお待ちください。どうぞよろし</p>
                                    <p>くお願いいたします。</p>
                                </div>
                            </div>
                        </div>
                        <div class="news-slide mb-[5px] bg-white">
                            <div class="relative">
                                <img class="w-full" src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/team_02/new5.png">
                                <div class="absolute top-0 w-full h-full">
                                    <div class="relative w-full h-full flex justify-center items-center">
                                        <div class="leading-[18px]">
                                            <span class='noto-sans text-white px-[20px] bg-[black] text-[10px] font-bold py-[8px]'>ご支給ください</span>
                                        </div>
                                        <span class='absolute bottom-0 left-0 bg-[#E1007E] text-[12px] text-white noto-sans font-medium py-[5px] px-[15px] tracking-wider'>日体大SMG横浜</span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class='p-[20px] shadow-md'>
                                <div class='leading-[18px]'>
                                    <span class='noto-sans text-[12px] text-[#808080] font-normal'>2022.00.00</span>
                                    <span class='noto-sans text-[12px] text-[#D19F00] font-bold'>レポート</span>
                                </div>
                                <div class='no-scroll noto-sans text-[14px] leading-[28px] font-medium tracking-[-1.5px] h-[78px] overflow-y-scroll mt-[18px]'>
                                    <p class='leading-[28px]'>この文章はダミーのコピーを仮に流し込んで</p>
                                    <p class='leading-[28px]'>います。コピーができ次第、差し替えますの</p>
                                    <p class='leading-[28px]'>で今しばらくお待ちください。どうぞよろし</p>
                                    <p>くお願いいたします。</p>
                            
                                </div>
                            </div>
                        </div>
                        <div class="news-slide mb-[5px] bg-white">
                            <div class="relative">
                                <img class="w-full" src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/team_02/new4.png">
                                <div class="absolute top-0 w-full h-full">
                                    <div class="relative w-full h-full flex justify-center items-center">
                                        <div class="leading-[18px]">
                                            <span class='noto-sans text-white px-[20px] bg-[black] text-[10px] font-bold py-[8px]'>ご支給ください</span>
                                        </div>
                                        <span class='absolute bottom-0 left-0 bg-[#E1007E] text-[12px] text-white noto-sans font-medium py-[5px] px-[15px] tracking-wider'>日体大SMG横浜</span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class='p-[20px] shadow-md'>
                                <div class='leading-[18px]'>
                                    <span class='noto-sans text-[12px] text-[#808080] font-normal'>2022.00.00</span>
                                    <span class='noto-sans text-[12px] text-[#D19F00] font-bold'>レポート</span>
                                </div>
                                <div class='no-scroll noto-sans text-[14px] leading-[28px] font-medium tracking-[-1.5px] h-[78px] overflow-y-scroll mt-[18px]'>
                                    <p class='leading-[28px]'>この文章はダミーのコピーを仮に流し込んで</p>
                                    <p class='leading-[28px]'>います。コピーができ次第、差し替えますの</p>
                                    <p class='leading-[28px]'>で今しばらくお待ちください。どうぞよろし</p>
                                    <p>くお願いいたします。</p>
                            
                                </div>
                            </div>
                        </div>
                        <div class="news-slide mb-[5px] bg-white">
                            <div class="relative">
                                <img class="w-full" src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/team_02/new1.png">
                                <div class="absolute top-0 w-full h-full">
                                    <div class="relative w-full h-full flex justify-center items-center">
                                        <div class="leading-[18px]">
                                            <span class='noto-sans text-white px-[20px] bg-[black] text-[10px] font-bold py-[8px]'>ご支給ください</span>
                                        </div>
                                        <span class='absolute bottom-0 left-0 bg-[#E1007E] text-[12px] text-white noto-sans font-medium py-[5px] px-[15px] tracking-wider'>日体大SMG横浜</span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class='p-[20px] shadow-md'>
                                <div class='leading-[18px]'>
                                    <span class='noto-sans text-[12px] text-[#808080] font-normal'>2022.00.00</span>
                                    <span class='noto-sans text-[12px] text-[#D19F00] font-bold'>レポート</span>
                                </div>
                                <div class='no-scroll noto-sans text-[14px] leading-[28px] font-medium tracking-[-1.5px] h-[78px] overflow-y-scroll mt-[18px]'>
                                    <p class='leading-[28px]'>この文章はダミーのコピーを仮に流し込んで</p>
                                    <p class='leading-[28px]'>います。コピーができ次第、差し替えますの</p>
                                    <p class='leading-[28px]'>で今しばらくお待ちください。どうぞよろし</p>
                                    <p>くお願いいたします。</p>
                            
                                </div>
                            </div>
                        </div>
                        <div class="news-slide mb-[5px] bg-white">
                            <div class="relative">
                                <img class="w-full" src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/team_02/new2.png">
                                <div class="absolute top-0 w-full h-full">
                                    <div class="relative w-full h-full flex justify-center items-center">
                                        <div class="leading-[18px]">
                                            <span class='noto-sans text-white px-[20px] bg-[black] text-[10px] font-bold py-[8px]'>ご支給ください</span>
                                        </div>
                                        <span class='absolute bottom-0 left-0 bg-[#E1007E] text-[12px] text-white noto-sans font-medium py-[5px] px-[15px] tracking-wider'>日体大SMG横浜</span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class='p-[20px] shadow-md'>
                                <div class='leading-[18px]'>
                                    <span class='noto-sans text-[12px] text-[#808080] font-normal'>2022.00.00</span>
                                    <span class='noto-sans text-[12px] text-[#D19F00] font-bold'>レポート</span>
                                </div>
                                <div class='no-scroll noto-sans text-[14px] leading-[28px] font-medium tracking-[-1.5px] h-[78px] overflow-y-scroll mt-[18px]'>
                                    <p class='leading-[28px]'>この文章はダミーのコピーを仮に流し込んで</p>
                                    <p class='leading-[28px]'>います。コピーができ次第、差し替えますの</p>
                                    <p class='leading-[28px]'>で今しばらくお待ちください。どうぞよろし</p>
                                    <p>くお願いいたします。</p>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ****************************************************** END OF newsCards *************************************************************** -->
                </div>
                <div class='ml-[calc(50vw-105px)] mt-[90px] max-[992px]:ml-[calc(50vw-165px)] '>
                    <button class='relative text-white transition-all duration-500 bg-gradient-to-r to-black via-white from-white bg-size-200 bg-pos-100 hover:bg-pos-0 hover:text-black hover:border-[1px] hover:border-[#000]'>
                        <a class='self-center w-[240px] h-[56px] flex justify-center items-center josefin-sans font-bold text-[14px]' href='./news-page'>VIEW ALL</a>
                        <div class='right-arrow'>
                        </div>
                    </button>

                </div>
            </div>

            <div class='smin-750:w-[20%] smin-750:block hidden relative min-w-[300px]'>
                <!-- ****************************************************** START OF newsPC *************************************************************** -->
                <div id='news-pc-title' class=''>
                    <div class='p-[20px] flex flex-col bg-[#004EA1] pb-[40px] leading-[16px] h-[100px]'>
                        <span class='josefin-sans text-[22px] font-bold text-white'>SCHEDULE</span>
                        <span class='noto-sans text-[10px] font-bold text-white'>スケジュール一覧</span>
                    </div>
                </div>
                <div id='news-pc-content' class='flex flex-col gap-[10px] overflow-y-scroll'>
                    <div class='card bg-[#F7F7F7] mt-[18px] w-[90%] m-auto'>
                        <div class='h-[107px]'>
                            <div class='noto-sans text-[12px] text-white font-bold leading-[16px] text-center bg-[#004EA1] py-[5px]'>
                                日体大SMG横浜
                            </div>
                            <div class='text-center leading-[18px] mt-[5px]'>
                                <span class='josefin-sans text-[24px] font-bold'>04.21</span>
                                <span class='josefin-sans text-[10px] font-bold'>SUN</span>
                                <span class='josefin-sans text-[14px] font-bold'>14:00 Kick off</span>
                            </div>
                            <div class='noto-sans text-[10px] font-bold leading-[16px] text-center font-bold'>
                                日体大SMG横浜
                            </div>
                            <div class='noto-sans text-[14px] font-bold leading-[14px] text-center font-bold'>
                                vs 名古屋
                            </div>
                            <div class='noto-sans text-[10px] font-bold leading-[16px] text-center font-bold' z>
                                会場：神奈川県立保土ヶ谷公園サッカー場
                            </div>
                        </div>
                    </div>

                    <div class='card bg-[#F7F7F7] mt-[18px] w-[90%] m-auto'>
                        <div class='h-[107px]'>
                            <div class='noto-sans text-[12px] text-white font-bold leading-[16px] text-center bg-[#004EA1] py-[5px]'>
                                日体大SMG横浜
                            </div>
                            <div class='text-center leading-[18px] mt-[5px]'>
                                <span class='josefin-sans text-[24px] font-bold'>04.21</span>
                                <span class='josefin-sans text-[10px] font-bold'>SUN</span>
                                <span class='josefin-sans text-[14px] font-bold'>14:00 Kick off</span>
                            </div>
                            <div class='noto-sans text-[10px] font-bold leading-[16px] text-center font-bold'>
                                日体大SMG横浜
                            </div>
                            <div class='noto-sans text-[14px] font-bold leading-[14px] text-center font-bold'>
                                vs 名古屋
                            </div>
                            <div class='noto-sans text-[10px] font-bold leading-[16px] text-center font-bold' z>
                                会場：神奈川県立保土ヶ谷公園サッカー場
                            </div>
                        </div>
                    </div>

                    <div class='card bg-[#F7F7F7] mt-[18px] w-[90%] m-auto'>
                        <div class='h-[107px]'>
                            <div class='noto-sans text-[12px] text-white font-bold leading-[16px] text-center bg-[#004EA1] py-[5px]'>
                                日体大SMG横浜
                            </div>
                            <div class='text-center leading-[18px] mt-[5px]'>
                                <span class='josefin-sans text-[24px] font-bold'>04.21</span>
                                <span class='josefin-sans text-[10px] font-bold'>SUN</span>
                                <span class='josefin-sans text-[14px] font-bold'>14:00 Kick off</span>
                            </div>
                            <div class='noto-sans text-[10px] font-bold leading-[16px] text-center font-bold'>
                                日体大SMG横浜
                            </div>
                            <div class='noto-sans text-[14px] font-bold leading-[14px] text-center font-bold'>
                                vs 名古屋
                            </div>
                            <div class='noto-sans text-[10px] font-bold leading-[16px] text-center font-bold' z>
                                会場：神奈川県立保土ヶ谷公園サッカー場
                            </div>
                        </div>
                    </div>

                    <div class='card bg-[#F7F7F7] mt-[18px] w-[90%] m-auto'>
                        <div class='h-[107px]'>
                            <div class='noto-sans text-[12px] text-white font-bold leading-[16px] text-center bg-[#004EA1] py-[5px]'>
                                日体大SMG横浜
                            </div>
                            <div class='text-center leading-[18px] mt-[5px]'>
                                <span class='josefin-sans text-[24px] font-bold'>04.21</span>
                                <span class='josefin-sans text-[10px] font-bold'>SUN</span>
                                <span class='josefin-sans text-[14px] font-bold'>14:00 Kick off</span>
                            </div>
                            <div class='noto-sans text-[10px] font-bold leading-[16px] text-center font-bold'>
                                日体大SMG横浜
                            </div>
                            <div class='noto-sans text-[14px] font-bold leading-[14px] text-center font-bold'>
                                vs 名古屋
                            </div>
                            <div class='noto-sans text-[10px] font-bold leading-[16px] text-center font-bold' z>
                                会場：神奈川県立保土ヶ谷公園サッカー場
                            </div>
                        </div>
                    </div>

                    <div class='card bg-[#F7F7F7] mt-[18px] w-[90%] m-auto'>
                        <div class='h-[107px]'>
                            <div class='noto-sans text-[12px] text-white font-bold leading-[16px] text-center bg-[#004EA1] py-[5px]'>
                                日体大SMG横浜
                            </div>
                            <div class='text-center leading-[18px] mt-[5px]'>
                                <span class='josefin-sans text-[24px] font-bold'>04.21</span>
                                <span class='josefin-sans text-[10px] font-bold'>SUN</span>
                                <span class='josefin-sans text-[14px] font-bold'>14:00 Kick off</span>
                            </div>
                            <div class='noto-sans text-[10px] font-bold leading-[16px] text-center font-bold'>
                                日体大SMG横浜
                            </div>
                            <div class='noto-sans text-[14px] font-bold leading-[14px] text-center font-bold'>
                                vs 名古屋
                            </div>
                            <div class='noto-sans text-[10px] font-bold leading-[16px] text-center font-bold' z>
                                会場：神奈川県立保土ヶ谷公園サッカー場
                            </div>
                        </div>
                    </div>

                    <div class='card bg-[#F7F7F7] mt-[18px] w-[90%] m-auto'>
                        <div class='h-[107px]'>
                            <div class='noto-sans text-[12px] text-white font-bold leading-[16px] text-center bg-[#004EA1] py-[5px]'>
                                日体大SMG横浜
                            </div>
                            <div class='text-center leading-[18px] mt-[5px]'>
                                <span class='josefin-sans text-[24px] font-bold'>04.21</span>
                                <span class='josefin-sans text-[10px] font-bold'>SUN</span>
                                <span class='josefin-sans text-[14px] font-bold'>14:00 Kick off</span>
                            </div>
                            <div class='noto-sans text-[10px] font-bold leading-[16px] text-center font-bold'>
                                日体大SMG横浜
                            </div>
                            <div class='noto-sans text-[14px] font-bold leading-[14px] text-center font-bold'>
                                vs 名古屋
                            </div>
                            <div class='noto-sans text-[10px] font-bold leading-[16px] text-center font-bold' z>
                                会場：神奈川県立保土ヶ谷公園サッカー場
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ****************************************************** END OF newsPC *************************************************************** -->

            </div>
        </div>
        <!-- ***************************** START schedule SP **************************** -->
        <div class="min-[1800px]:w-[50%] xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mt-[70px] mx-auto smin-750:hidden block">
            <div class="font-bold text-center">
                <p class="josefin-sans text-[32px] leading-[16px]">SCHEDULE</p>
                <p class="text-[10px] leading-[16px] tracking-[4px] mt-[4px]">スケジュール一覧</p>
            </div>
            <div class="top_result_slider row mt-[30px]">
                <div class="h-[200px] ">
                    <div class="font-bold text-center bg-[#004EA1] leading-[21px] tracking-[2px] text-white py-[10px]">
                        <p>なでしこリーグ 第00節</p>
                    </div>
                    <div class="flex flex-col py-[24px] px-[12px] bg-[#F7F7F7]">
                        <div class="font-bold text-center">
                            <div class='flex justify-center'>
                                <p class="josefin-sans text-[32px] leading-[18px] tracking-[2px] max-[500px]:text-[30px]">
                                    04.20 
                                    <span class="text-[14px] josefin-sans leading-[18px] tracking-[2px]">SUN</span>
                                </p>
                                <p class="noto-sans text-[18px] leading-[18px] tracking-[2px]">14:00 Kick off</p>
                            </div>
                            <div class='noto-sans text-[21px] font-bold leading-[34px] mt-[5px] max-[500px]:text-[14px]'>日体大SMG横浜</div>
                            <p class="mt-[4px] noto-sans text-[24px] leading-[24px] tracking-[2px] mt-[10] max-[500px]:text-[14px]">vs 名古屋</p>
                        </div>
                        <div class="text-center mt-[10px]">
                            <span class='leading-[18px] 2xl:tracking-[2px] tracking-[1px] noto-sans text-[21px] font-bold mt-[2px] max-[500px]:text-[14px]'>会場：神奈川県立保土ヶ谷公園サッカー場</span>
                        </div>
                    </div>
                </div>
                <div class="h-[200px] ">
                    <div class="font-bold text-center bg-[#004EA1] leading-[21px] tracking-[2px] text-white py-[10px]">
                        <p>なでしこリーグ 第00節</p>
                    </div>
                    <div class="flex flex-col py-[24px] px-[12px] bg-[#F7F7F7]">
                        <div class="font-bold text-center">
                            <p class="josefin-sans text-[32px] leading-[18px] tracking-[2px]">
                                04.20 
                                <span class="text-[14px] josefin-sans leading-[18px] tracking-[2px]">SUN</span>
                            </p>
                            <p class="mt-[4px] noto-sans text-[18px] leading-[18px] tracking-[2px]">14:00 Kick off</p>
                            <p class="mt-[4px] noto-sans text-[24px] leading-[24px] tracking-[2px]">vs 名古屋</p>
                        </div>
                        <div class="text-center mt-[10px]">
                            <span class='leading-[18px] 2xl:tracking-[2px] tracking-[1px] noto-sans text-[12px] font-bold mt-[2px]'>会場：神奈川県立保土ヶ谷公園サッカー場</span>
                        </div>
                    </div>
                </div>
                <div class="h-[200px] ">
                    <div class="font-bold text-center bg-[#004EA1] leading-[21px] tracking-[2px] text-white py-[10px]">
                        <p>なでしこリーグ 第00節</p>
                    </div>
                    <div class="flex flex-col py-[24px] px-[12px] bg-[#F7F7F7]">
                        <div class="font-bold text-center">
                            <p class="josefin-sans text-[32px] leading-[18px] tracking-[2px]">
                                04.20 
                                <span class="text-[14px] josefin-sans leading-[18px] tracking-[2px]">SUN</span>
                            </p>
                            <p class="mt-[4px] noto-sans text-[18px] leading-[18px] tracking-[2px]">14:00 Kick off</p>
                            <p class="mt-[4px] noto-sans text-[24px] leading-[24px] tracking-[2px]">vs 名古屋</p>
                        </div>
                        <div class="text-center mt-[10px]">
                            <span class='leading-[18px] 2xl:tracking-[2px] tracking-[1px] noto-sans text-[12px] font-bold mt-[2px]'>会場：神奈川県立保土ヶ谷公園サッカー場</span>
                        </div>
                    </div>
                </div>
                <div class="h-[200px] ">
                    <div class="font-bold text-center bg-[#004EA1] leading-[21px] tracking-[2px] text-white py-[10px]">
                        <p>なでしこリーグ 第00節</p>
                    </div>
                    <div class="flex flex-col py-[24px] px-[12px] bg-[#F7F7F7]">
                        <div class="font-bold text-center">
                            <p class="josefin-sans text-[32px] leading-[18px] tracking-[2px]">
                                04.20 
                                <span class="text-[14px] josefin-sans leading-[18px] tracking-[2px]">SUN</span>
                            </p>
                            <p class="mt-[4px] noto-sans text-[18px] leading-[18px] tracking-[2px]">14:00 Kick off</p>
                            <p class="mt-[4px] noto-sans text-[24px] leading-[24px] tracking-[2px]">vs 名古屋</p>
                        </div>
                        <div class="text-center mt-[10px]">
                            <span class='leading-[18px] 2xl:tracking-[2px] tracking-[1px] noto-sans text-[12px] font-bold mt-[2px]'>会場：神奈川県立保土ヶ谷公園サッカー場</span>
                        </div>
                    </div>
                </div>
                <div class="h-[200px] ">
                    <div class="font-bold text-center bg-[#004EA1] leading-[21px] tracking-[2px] text-white py-[10px]">
                        <p>なでしこリーグ 第00節</p>
                    </div>
                    <div class="flex flex-col py-[24px] px-[12px] bg-[#F7F7F7]">
                        <div class="font-bold text-center">
                            <p class="josefin-sans text-[32px] leading-[18px] tracking-[2px]">
                                04.20 
                                <span class="text-[14px] josefin-sans leading-[18px] tracking-[2px]">SUN</span>
                            </p>
                            <p class="mt-[4px] noto-sans text-[18px] leading-[18px] tracking-[2px]">14:00 Kick off</p>
                            <p class="mt-[4px] noto-sans text-[24px] leading-[24px] tracking-[2px]">vs 名古屋</p>
                        </div>
                        <div class="text-center mt-[10px]">
                            <span class='leading-[18px] 2xl:tracking-[2px] tracking-[1px] noto-sans text-[12px] font-bold mt-[2px]'>会場：神奈川県立保土ヶ谷公園サッカー場</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***************************** END schedule SP **************************** -->
    </div>


<!-- ****************************************************** ABOUT US *************************************************************** -->
    <div id="aboutUs" class='mt-[130px]'>
        <div class='bg-about bg-no-repeat smin-750:block hidden'>
            <div class='flex flex-col justify-center items-center'>
                <div class='josefin-sans text-[48px] font-bold mt-[20px]'>ABOUT US</div>
                <div class='noto-sans text-[20px] font-bold leading-[16px] tracking-[4px]'>日体大SMG横浜とは</div>
            </div>

            <div class='mt-[70px] flex'>
                <div class='w-[50%]'>
                    <div class=''>
                        <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/AdobeStock_243140979_Preview@2x.png' class='w-full h-full' />
                    </div>
                    <div class='w-[100%] flex flex justify-end mt-[80px]'>
                        <div class='w-[46%]'>
                            <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/IMG_0764@2x.png' class='w-full h-full' />
                        </div>
                    </div>
                </div>
                <div class='w-[50%]'>
                    <div class='w-[60%] max-[1440px]:w-[70%] max-[1024px]:w-[90%] mb-[270px] ml-[45px]'>
                        <div class='noto-sans text-[36px] font-semibold tracking-[5px] leading-[72px] mr-[20px] '>
                            総合型地域スポーツクラブへ
                        </div>
                        <div class='noto-sans text-[36px] font-semibold tracking-[5px] leading-[72px] mr-[20px] '>
                            日体大ＳＭＧ横浜
                        </div>
                        <div class='noto-sans text-[16px] font-semibold leading-[40px] mt-[60px] mr-[20px] '>
                            <div>
                                2022シーズンより、新富士病院グループ（ＳＭＧ）と
                            </div>
                            <div>
                                トップパートナー契約を結び、
                            </div>
                            <div>
                                クラブ名を「日体大ＳＭＧ横浜」に変更し
                            </div>
                            <div>
                                新たなスタートを切りました。
                            </div>
                            <div>
                                伝統ある女子サッカーチームは、
                            </div>
                            <div>
                                なでしこリーグ1部に所属するTOPチームと、
                            </div>
                            <div>
                                関東女子サッカーリーグ2部のサテライトチーム、
                            </div>
                            <div>
                                横浜市北部エリアを中心とする中学校・高校の選手たちで
                            </div>
                            <div>
                                構成されるU-18、U-15チームの、
                            </div>
                            <div>
                                総勢約150名の女子サッカークラブチームです。
                            </div>
                            <div>
                                また2022年より陸上混成種目の大玉華鈴選手が所属し、
                            </div>
                            <div>
                                総合型地域スポーツクラブへと進化を続けています。
                            </div>
                        </div>

                        <div class='mt-[80px]'>
                            <button class='relative text-white transition-all duration-500 bg-gradient-to-r to-black via-white from-white bg-size-200 bg-pos-100 hover:bg-pos-0 hover:text-black hover:border-[1px] hover:border-[#000]'>
                                <a class='self-center w-[240px] h-[56px] flex justify-center items-center josefin-sans font-bold text-[14px]' href='./about-us'>VIEW ALL</a>
                                <div class='right-arrow'>
                                </div>
                            </button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class='smin-750:hidden block'>
            <!-- ****************************************************** START OF aboutUsSP *************************************************************** -->
            <div class='bg-aboutSP bg-no-repeat'>
                <div class='text-center josefin-sans text-[44px] font-bold'>ABOUT US</div>
                <div class='text-center noto-sans text-[20px] font-bold leading-[32px] tracking-[8px]'>日体大SMG横浜とは</div>
                <div class='mt-[40px]'>
                    <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/AdobeStock_243140979_Preview@2x.png' class='w-full' />
                </div>
                <div class=''>
                    <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/AdobeStock_361330155_Preview@2x.png' class='w-full' />
                </div>

                <div class='mt-[50px] mx-[35px] noto-sans text-[40px] font-semibold tracking-[5px] leading-[60px]'>
                    <div>総合型地域スポーツクラブへ</div>
                    <div>日体大ＳＭＧ横浜</div>
                </div>
                <div class='mt-[40px] mx-[35px] font-bold text-[24px] leading-[48px]'>
                    <div>
                        2022シーズンより、新富士病院グループ（SMG）とトップパートナー契約を結び、クラブ名を「日体大SMG横浜」に変更し新たなスタートを切りました。
                    </div>
                    <div>
                        伝統ある女子サッカーチームは、なでしこリーグ1部に所属するTOPチームと、関東女子サッカーリーグ2部のサテライトチーム、横浜市北部エリアを中心とする中学校・高校の選手たちで構成されるU-18、U-15チームの、総勢約150名の女子サッカークラブチームです。
                    </div>
                    <div>
                        また2022年より陸上混成種目の大玉華鈴選手が所属し、総合型地域スポーツクラブへと進化を続けています。
                    </div>
                </div>
                <div class='flex justify-center mt-[75px] pb-[80px]'>
                    <button class='relative text-white transition-all duration-500 bg-gradient-to-r to-black via-white from-white bg-size-200 bg-pos-100 hover:bg-pos-0 hover:text-black'>
                        <a href='./about-us' class='self-center w-[240px] h-[56px] flex justify-center items-center josefin-sans font-bold text-[14px]'>VIEW ALL</a>
                        <div class='right-arrow'>
                        </div>
                    </button>
                </div>
            </div>
            <!-- ****************************************************** END OF aboutUsSP *************************************************************** -->
        </div>
    </div>


    <!-- ****************************************************** TEAM *************************************************************** -->
    <div id='team' class='mt-[60px]'>

        <div class='smin-750:block hidden'>
            <div class='text-center josefin-sans text-[48px] font-bold'>TEAM</div>
            <div class='text-center noto-sans text-[16px] leading-[20px] font-bold tracking-[4px]'>選手・チーム紹介</div>

            <div class='mt-[50px] flex justify-between max-[1280px]:flex-col'>
                <div class='w-[50%] max-[1440px]:w-[100%] relative max-[1280px]:w-[70%] max-[992px]:w-[75%] max-[911px]:w-[80%] max-[854px]:w-[85%]
        max-[804px]:w-[90%]
        max-[759px]:w-[94%]'>
                    <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/Group 9513@2x.png' />
                    <div class='absolute w-[42.5%] h-[78.5%] top-[10%] max-[1853px]:top-[7%] right-[-1px] pr-[105px] max-[1900px]:pr-[95px] max-[1853px]:pr-[83px] max-[1796px]:pr-[72px] max-[1744px]:pr-[50px]
            max-[1695px]:pr-[83px] max-[1600px]:pr-[75px] max-[1531px]:pr-[90px] max-[1487px]:pr-[70px] max-[1440px]:pr-[42px]
            max-[1280px]:pr-[80px]
            max-[1175px]:pr-[60px]
            max-[1108px]:pr-[50px]'>
                        <div class='noto-sans text-[18px] text-white font-bold tracking-[-3px] mt-[40px] ml-[15px] max-[1695px]:text-[14px] max-[1280px]:text-[18px] max-[1280px]:mt-[40px]
                max-[1074px]:text-[16px]'>なでしこリーグ</div>
                        <div class='noto-sans text-[28px] text-white font-bold leading-[46px] ml-[15px] tracking-[10px] max-[1695px]:leading-[30px] max-[1695px]:text-[25px] max-[1600px]:text-[20px] max-[1531px]:text-[18px] max-[1531px]:leading-[25px]
                            max-[1280px]:text-[24px] max-[1280px]:leading-[46px]
                            max-[1074px]:text-[20px] max-[1074px]:leading-[40px]
                            max-[1024px]:leading-[20px]'>日体大SMG横浜</div>
                        <div class='noto-sans text-[14px] text-white font-medium mt-[25px] leading-[28px] ml-[15px] max-[1695px]:leading-[20px] max-[1531px]:text-[12px] max-[1487px]:mt-[10px]
                            max-[1280px]:text-[14px] max-[1280px]-leading-[28px] max-[1280px]:mt-[25px]
                            max-[1074px]:text-[12px] max-[1074px]:leading-[20px] max-[1074px]:mt-[20px]'>
                            日本体育大学 横浜･健志台キャンパスを活動
                            拠点とし、なでしこリーグ1部に所属する女
                            子サッカークラブ。「強く・逞しく・美し
                            く」をスローガンとし、地域の皆さまに必要
                            とされるクラブを目指して、活動の幅を広げ
                            ています。
                        </div>
                        <div class='mt-[30px] ml-[15px]'>
                            <button class='relative flex justify-center text-white view-hover hover:text-[#D19F00]'>
                                <a class='self-center josefin-sans font-bold text-[14px]' href='./team-02'>VIEW MORE</a>
                                <div class='team-right-arrow'>

                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class='relative w-[50%] mt-[60px] max-[1440px]:w-[100%] max-[1280px]:self-end max-[1280px]:w-[70%] max-[992px]:w-[75%] max-[911px]:w-[80%] max-[854px]:w-[85%]
        max-[804px]:w-[90%]
        max-[759px]:w-[94%]'>
                    <div class='absolute w-[42.5%] h-[89%] top-[11%] right-[50.5%] pr-[90px]
            max-[1829px]:pr-[90px]
            max-[1745px]:pr-[70px]
            max-[1331px]:pr-[50px]'>
                        <div class='noto-sans text-[18px] text-white font-bold tracking-[-3px] mt-[40px] ml-[15px] max-[1695px]:text-[14px] max-[1280px]:text-[18px] max-[1280px]:mt-[40px]
                max-[1074px]:text-[16px]
                max-[1745px]:mt-[30px]'>陸上競技（混成競技）</div>
                        <div class='noto-sans text-[28px] text-white font-bold leading-[46px] ml-[15px] tracking-[10px] max-[1695px]:leading-[30px] max-[1695px]:text-[25px] max-[1600px]:text-[20px] max-[1531px]:text-[18px] max-[1531px]:leading-[25px]
                            max-[1280px]:text-[24px] max-[1280px]:leading-[46px]
                            max-[1074px]:text-[20px] max-[1074px]:leading-[40px]
                            max-[1024px]:leading-[20px]'>大玉 華鈴選手</div>
                        <div class='noto-sans text-[14px] text-white font-medium mt-[25px] leading-[28px] ml-[15px] max-[1695px]:leading-[20px] max-[1531px]:text-[12px] max-[1487px]:mt-[10px]
                            max-[1280px]:text-[14px] max-[1280px]-leading-[28px] max-[1280px]:mt-[25px]
                            max-[1074px]:text-[12px] max-[1074px]:leading-[20px] max-[1074px]:mt-[20px]'>
                            女子混成競技の一つ、七種競技で、日本歴代トップクラスの成績を残し、2022年に日本体育大学を卒業後、日体大SMG横浜に所属。大学時代には陸上部主将を務め、日本インカレ3年連続優勝と、女子陸上界の期待の星として注目を集めています。
                        </div>
                        <div class='mt-[30px] ml-[15px]
                            max-[1800px]:mt-[20px]
                            max-[1331px]:mt-[15px]'>
                            <button class='relative flex justify-center text-white hover:text-[#D19F00]'>
                                <a class='self-center josefin-sans font-bold text-[14px]' href='./team-03'>VIEW MORE</a>
                                <div class='team-right-arrow'>

                                </div>
                            </button>
                        </div>
                    </div>
                    <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/Group 9514@2x.png' />
                </div>

            </div>

            <div class='w-[62.5%] max-[1440px]:w-[80%] m-auto mt-[300px] flex flex-wrap relative'>
                <div class='absolute top-[74.6%] left-[28.5%] bg-[#004EA1] w-[43.33%] max-[1024px]:w-[60%] max-[1024px]:left-[20.5%]'>
                    <div class='text-center mt-[30px] text-white noto-sans text-[22px] font-bold'>サテライト／U-18／U-15</div>
                    <div class='mt-[20px] mx-[35px] text-white noto-sans text-[14px] font-medium leading-[28px]'>
                        アマチュアトップリーグで活躍する選手たちを間近で感じながら、未来への飛躍に向けて活動するチーム。サッカー経験や身体能力等による篩い分けを行わず、初心者でも参加できることを大切にしています。
                    </div>
                    <div class='mt-[30px] mx-[35px] mb-[40px]'>
                        <button class='relative flex justify-center text-white hover:text-[#D19F00]'>
                            <a class='self-center josefin-sans font-bold text-[14px]' href='./team-04'>VIEW MORE</a>
                            <div class='team-right-arrow'>
                            </div>
                        </button>
                    </div>
                </div>
                <div class='w-[33.33%] h-full'>
                    <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/Group 90@2x.png' class='w-full h-full' />
                </div>
                <div class='w-[33.33%] h-full'>
                    <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/Group 76@2x.png' class='w-full h-full' />
                </div>
                <div class='w-[33.33%] h-full'>
                    <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/Group 88@2x.png' class='w-full h-full' />
                </div>
            </div>

        </div>

        <div class='smin-750:hidden block'>
            <!-- ****************************************************** START OF teamSP *************************************************************** -->
            <div>
                <div class='josefin-sans text-[44px] font-bold text-center'>TEAM</div>
                <div class='noto-sans text-[20px] font-bold text-center leading-[32px] tracking-[6px]'>日体大SMG横浜とは</div>
                <div class='w-[100vw] mt-[40px]'>
                    <div class='relative'>
                        <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/sp_news1.png' class='' />
                        <div class='absolute top-[76%] right-0 w-[76%] z-[10]'>
                            <div class="box-news left-skew">
                                <div class='mt-[30px] ml-[20px] noto-sans text-[20px] text-white font-bold pt-[30px] max-[400px]:pt-[15px] max-[400px]:text-[16px]'>
                                    なでしこリーグ
                                </div>
                                <div class='noto-sans ml-[20px] text-[32px] text-white font-bold leading-[64px] tracking-[5px] max-[550px]:leading-[40px] max-[400px]:leading-[25px] max-[400px]:text-[25px]'>
                                    日体大SMG横浜
                                </div>
                                <div class='mx-[20px] mt-[15px] noto-sans text-[24px] text-white font-medium leading-[36px] max-[645px]:text-[20px] max-[550px]:text-[16px] max-[425px]:leading-[35px] max-[400px]:leading-[30px]'>
                                    <div>
                                        日本体育大学 横浜･健志台キャンパスを活動拠点とし、なでしこリーグ1部に所属する女子サッカークラブ。
                                    </div>
                                    <div>
                                        「強く・逞しく・美しく」をスローガンとし、地域の皆さまに必要とされるクラブを目指して、活動の幅を広げています。
                                    </div>
                                </div>

                                <div class='mt-[30px] ml-[20px] mb-[30px]'>
                                    <button class='relative flex justify-center text-white pb-[30px] hover:text-[#D19F00]'>
                                        <a class='self-center josefin-sans font-semi text-[25px]' href='./team-02'>VIEW MORE</a>
                                        <div class='team-sp-right-arrow'>

                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='h-[88.3vh] w-[100vw] mt-[440px] relative mt-[440px]'>
                    <div class='relative'>
                        <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/sp_news2.png' class='' />
                        <div class='absolute top-[76%] right-0 w-[76%] z-[10]'>
                            <div class="box-news left-skew skew-pink">
                                <div class='mt-[30px] ml-[20px] noto-sans text-[20px] text-white font-bold pt-[30px] max-[400px]:pt-[15px] max-[400px]:text-[16px]'>
                                    陸上競技（混成競技）
                                </div>
                                <div class='noto-sans ml-[20px] text-[32px] text-white font-bold leading-[64px] tracking-[5px] max-[550px]:leading-[40px] max-[400px]:leading-[25px] max-[400px]:text-[25px]'>
                                    大玉 華鈴選手
                                </div>
                                <div class='mx-[20px] mt-[15px] noto-sans text-[24px] text-white font-medium leading-[36px] max-[645px]:text-[20px] max-[550px]:text-[16px] max-[425px]:leading-[35px] max-[400px]:leading-[30px]'>
                                    <div>
                                        女子混成競技の一つ、七種競技で、日本歴代トップクラスの成績を残し、2022年に日本体育大学を卒業後、日体大SMG横浜に所属。大学時代には陸上部主将を務め、日本インカレ3年連続優勝と、女子陸上界の期待の星として注目を集めています。
                                    </div>
                                </div>

                                <div class='mt-[30px] ml-[20px] mb-[30px]'>
                                    <button class='relative flex justify-center text-white pb-[30px] hover:text-[#D19F00]'>
                                        <a class='self-center josefin-sans font-semi text-[25px]' href='./team-03'>VIEW MORE</a>
                                        <div class='team-sp-right-arrow'>

                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='mt-[50px] flex'>
                    <div>
                        <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/Group 90@2x.png' class='w-full h-full' />
                    </div>
                    <div>
                        <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/Group 76@2x.png' class='w-full h-full' />
                    </div>
                </div>
                <div class='flex justify-center'>
                    <div class='w-[50%]'>
                        <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/Group 88@2x.png' class='w-full h-full' />
                    </div>
                </div>
                <div class='flex justify-center'>
                    <div class='w-[90%] bg-[#004EA1]'>
                        <div class='mt-[25px] justify-center noto-sans text-[32px] font-bold text-white text-center'>
                            サテライト／U-18／U-15
                        </div>
                        <div class='mt-[12px] mx-[40px] text-white noto-sans text-[24px] font-medium leading-[36px]'>
                            アマチュアトップリーグで活躍する選手たちを間近で感じながら、未来への飛躍に向けて活動するチーム。サッカー経験や身体能力等による篩い分けを行わず、初心者でも参加できることを大切にしています。
                        </div>
                        <div class='mt-[35px] mb-[35px] ml-[40px]'>
                            <button class='relative flex justify-center text-white hover:text-[#D19F00]'>
                                <a class='self-center josefin-sans font-bold text-[14px]' href='./team-04'>VIEW MORE</a>
                                <div class='team-right-arrow'>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ****************************************************** END OF teamSP *************************************************************** -->
        </div>

        <div class='mt-[250px] max-[1600px]:mt-[300px] max-[1440px]:mt-[350px] max-[750px]:mt-[70px] flex justify-center'>
            <button class='relative text-white transition-all duration-500 bg-gradient-to-r to-black via-white from-white bg-size-200 bg-pos-100 hover:bg-pos-0 hover:text-black hover:border-[1px] hover:border-[#000]'>
                <a class='self-center w-[240px] h-[56px] flex justify-center items-center josefin-sans font-bold text-[14px]' href='./team-01'>VIEW ALL</a>
                <div class='right-arrow'>
                </div>
            </button>
        </div>
    </div>


    <!-- ****************************************************** COMMUNITY *************************************************************** -->
    <div id='community' class='mt-[100px] h-[1080px] bg-community bg-no-repeat max-[750px]:mb-[200px]'>
        <div class='flex justify-center'>
            <div class='text-center josefin-sans text-[48px] font-bold mt-[80px]'>
                COMMUNITY
            </div>
        </div>
        <div class='text-center leading-[16px] noto-sans text-[20px] font-bold tracking-[4px]'>地域活動・プロジェクト</div>
        <div class='mt-[50px] text-center noto-sans text-[36px] font-medium tracking-[5px]'>地域とともに未来を駆ける</div>
        <div class='mt-[40px] text-center noto-sans text-[16px] font-medium leading-[32px]'>
            <div>幼い子どもから高齢者まで、地域の皆さま、企業、学校、行政をつなげる役割として、</div>
            <div> 地域のくらしをより豊かにできるチームを目指し、</div>
            <div> 様々な活動を行ってまいります。</div>
        </div>

        <div class='mt-[80px] w-[100%] max-[750px]:overflow-x-scroll'>
            <div class='w-[68%] max-[1440px]:w-[80%] max-[1280px]:w-[90%] flex justify-between m-auto max-[750px]:w-[192%]'>
                <div class='w-[29.5%] max-[1100px]:w-[31.5%] bg-[#D19F00]'>
                    <div class='relative'>
                        <img src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/Group 93@2x.png" class='w-full h-full max-[750px]:hidden block'>
                        <img src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/IMG_7247.png" class='h-full max-[750px]:block hidden'>
                        <div class='absolute h-[42px] w-[60%] bottom-[-21px] left-[-1px]'>
                            <div class='relative bg-[#FFFFFF] h-full w-full trapezoid flex justify-center'>
                                <span class='text-[#D19F00] text-center josefin-sans text-[24px] max-[1024px]:text-[20px] z-[100] font-bold self-center'>VISION</span>
                            </div>
                        </div>
                    </div>
                    <div class=''>
                        <div class='mt-[35px] mx-[30px] noto-sans text-[22px] font-bold text-white text-center'>
                            総合型地域スポーツクラブを⽬指して
                        </div>
                        <div class='mt-[20px] mx-[20px] pb-[15px]'>
                            <button class='relative flex justify-center text-white hover:text-[#000]'>
                                <a class='self-center josefin-sans font-bold text-[14px]' href='./community?params=vision' id='vision'>VIEW MORE</a>
                                <div class='team-right-arrow'>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class='w-[29.5%] max-[1100px]:w-[31.5%] bg-[#D19F00]'>
                    <div class='relative'>
                        <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/Group 95@2x.png' class='w-full h-full max-[750px]:hidden block' />
                        <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/IMG_3009.png' class='w-full h-full max-[750px]:block hidden' />
                        <div class='absolute h-[42px] w-[60%] bottom-[-21px] left-[-1px]'>
                            <div class='relative bg-[#FFFFFF] h-full w-full trapezoid flex justify-center'>
                                <span class='text-[#D19F00] text-center josefin-sans text-[24px] max-[1024px]:text-[20px] z-[100] font-bold self-center'>ACTIVITY</span>
                            </div>
                        </div>
                    </div>
                    <div class=''>
                        <div class='mt-[50px] mx-[30px] noto-sans text-[22px] font-bold text-white text-center'>
                            地域活動レポート
                        </div>
                        <div class='mt-[30px] mx-[20px] pb-[15px]'>
                            <button class='relative flex justify-center text-white hover:text-[#000]'>
                                <a class='self-center josefin-sans font-bold text-[14px]' href='./community?params=activity'>VIEW MORE</a>
                                <div class='team-right-arrow'>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class='w-[29.5%] max-[1100px]:w-[31.5%] bg-[#D19F00]'>
                    <div class='relative'>
                        <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/Group 97@2x.png' class='w-full h-full max-[750px]:hidden block' />
                        <img src=' <?= site_url('/wp-content/themes/smg') ?>/assets/images/IMG_6603.png' class='w-full h-full max-[750px]:block hidden' />
                        <div class='absolute h-[42px] w-[60%] bottom-[-21px] left-[-1px]'>
                            <div class='relative bg-[#FFFFFF] h-full w-full trapezoid flex justify-center'>
                                <span class='text-[#D19F00] text-center josefin-sans text-[24px] max-[1024px]:text-[20px] z-[100] font-bold self-center'>WELLNESS</span>
                            </div>
                        </div>
                    </div>
                    <div class=''>
                        <div class='mt-[50px] mx-[30px] noto-sans text-[22px] font-bold text-white text-center'>
                            地域の健康をつくる
                        </div>
                        <div class='mt-[30px] mx-[20px] pb-[15px]'>
                            <button class='relative flex justify-center text-white hover:text-[#000]'>
                                <a class='self-center josefin-sans font-bold text-[14px]' href='./community?params=wellness'>VIEW MORE</a>
                                <div class='team-right-arrow'>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='mt-[70px] flex justify-center'>
            <button class='relative text-white transition-all duration-500 bg-gradient-to-r to-black via-white from-white bg-size-200 bg-pos-100 hover:bg-pos-0 hover:text-black hover:border-[1px] hover:border-[#000]'>
                <a class='self-center w-[240px] h-[56px] flex justify-center items-center josefin-sans font-bold text-[14px]' href='./community'>VIEW ALL</a>
                <div class='right-arrow'>

                </div>
            </button>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            $(".team_02_slider-full").slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                infinite: false,
                autoplay: false,
                autoplaySpeed: 2000,
                speed: 1000,
                responsive: [{
                        breakpoint: 1281,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 1025,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 751,
                        settings: {
                            slidesToShow: 1,
                            centerMode: true,
                        }
                    },
                ]
            });
            $(".top-news").slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                infinite: false,
                autoplay: false,
                autoplaySpeed: 2000,
                speed: 1000,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 751,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                ]
            });
        });
    </script>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("overlay_image_slide");
            let dots = document.getElementsByClassName("dot");
            let pcDot = document.getElementsByClassName("pc-dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" slider-active", "");
                pcDot[i].className = pcDot[i].className.replace(" slider-active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " slider-active";
            pcDot[slideIndex - 1].className += " slider-active";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
        }
    </script>

    <script>
            var maxHeight = -1;
            $('.slick-slide').each(function() {
            if ($(this).height() > maxHeight) {
                maxHeight = $(this).height();
            }
            });
            $('.slick-slide').each(function() {
            if ($(this).height() < maxHeight) {
                $(this).css('margin', Math.ceil((maxHeight-$(this).height())/2) + 'px 0');
            }
            });

        $('.top-vertical-slider').slick({
            dots: false,
            infinite: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            vertical: true,
            verticalSwiping: true,
            adaptiveHeight: true,
        });
    </script>

    <?php get_footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $("#vision").click(function() {
            console.log('vision')
        });
    </script>



<script>
    $(document).ready(function() {
        $(".top-news").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            infinite: false,
            autoplay: false,
            autoplaySpeed: 2000,
            speed: 1000,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 751,
                    settings: {
                        slidesToShow: 1,
                    }
                },
            ]
        });
    });
</script>


<script>
    $(document).ready(function() {
    $(".top_result_slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        infinite: false,
        autoplay:false,
        autoplaySpeed:2000,
        speed: 1000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 751,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });
})

</script>