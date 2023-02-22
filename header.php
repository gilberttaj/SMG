<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="<?= site_url('/wp-content/themes/smg/') ?>assets/css/header.css">
  <link rel="stylesheet" href="<?= site_url('/wp-content/themes/smg/') ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= site_url('/wp-content/themes/smg/') ?>assets/css/bottomNav.css">
  <link rel="stylesheet" href="<?= site_url('/wp-content/themes/smg/') ?>assets/css/banner.css">
  <link rel="stylesheet" href="<?= site_url('/wp-content/themes/smg/') ?>assets/css/result.css">
  <link rel="stylesheet" href="<?= site_url('/wp-content/themes/smg/') ?>assets/css/schedule.css">
  <link rel="stylesheet" href="<?= site_url('/wp-content/themes/smg/') ?>assets/css/top.css">
  <link rel="stylesheet" href="<?= site_url('/wp-content/themes/smg/') ?>assets/css/newsCards.css">


  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

  <!-- SLICK JS -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
  <!-- {{-- REMODAL --}} -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.css" integrity="sha512-LVOzFPLcBUppn3NOx8FXJkh2TawWu/jk9ynbntKID6cjynQsfqmHlUbH72mjAwZXsu0LOLw26JoiC0qHJde70Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal-default-theme.min.css" integrity="sha512-jRxwiuoe3nt8lMSnOzNEuQ7ckDrLl31dwVYFWS6jklXQ6Nzl7b05rrWF9gjSxgOow5nFerdoN6CBB4gY5m5nDw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.js" integrity="sha512-eW+7mn1Hqoehrvza96oZlU3WiRw1g7Yenu7cnIw7rFP3GpRGm95IAIs6ifoNGZhD5iSEJEr5fV4yQpE+EFrUNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <?php if(is_page(13)){ ?>
    SCRIPTS FOR TEAM 2

    <?php
  } ?>

  <script>
      tailwind.config = {
          theme: {
              extend: {
                  colors: {
                      clifford: '#da373d',
                  },
                  screens: {
                      'smin-320': '321px',
                      'smin-375': '376px',
                      'smin-425': '426px',
                      'smin-640': '641px',
                      'smin-750': '751px',
                      'smin-1024': '1025px',
                  },
                  backgroundImage: {
                      'news': "url(' <?= site_url('/wp-content/themes/smg/') ?>assets/images/Path 34@2x.png')",
                      'news-card-1': "url(' <?= site_url('/wp-content/themes/smg/') ?>assets/images/Component 31 – 5@2x.png')",
                      'news-card-2': "url(' <?= site_url('/wp-content/themes/smg/') ?>assets/images/Component 32 – 7@2x.png')",
                      'news-card-3': "url(' <?= site_url('/wp-content/themes/smg/') ?>assets/images/Component 33 – 7@2x.png')",
                      'news-card-4': "url(' <?= site_url('/wp-content/themes/smg/') ?>assets/images/Component 34 – 6@2x.png')",
                      'linear-btn': "url(' <?= site_url('/wp-content/themes/smg/') ?>assets/images/Rectangle 81@2x.png')",
                      'about': "url(' <?= site_url('/wp-content/themes/smg/') ?>assets/images/Path 8062@2x.png'), url(' <?= site_url('/wp-content/themes/smg/') ?>assets/images/Path 8061@2x.png')",
                      'news-paraleft': "url(' <?= site_url('/wp-content/themes/smg/') ?>assets/images/Group 9513@2x.png')",
                      'community': "url(' <?= site_url('/wp-content/themes/smg/') ?>assets/images/Rectangle 231@2x.png')",
                      'community-trap': "url(' <?= site_url('/wp-content/themes/smg/') ?>assets/images/Path 65@2x.png')",
                      'aboutSP': "url(' <?= site_url('/wp-content/themes/smg/') ?>assets/images/Path 8099@2x.png'), url(' <?= site_url('/wp-content/themes/smg/') ?>assets/images/パス 52@2x.png')",
                  },
                  backgroundSize: {
                      'size-200': '500% 500%',
                      'about': '40% 76%, 26% 76%',
                      'news': '60% 100%',
                      'community': '100% 73%',
                      'aboutSP': '10.67% 28.9%, 26.67% 54.95%'
                      // bg-[length:40%_100%]
                  },
                  backgroundPosition: {
                      'pos-0': '0% 0%',
                      'pos-100': '100% 100%',
                      'news':'right bottom',
                      'about': 'left top, right bottom',
                      'aboutSP': 'left top 45px, right bottom',
                  },
              }
          }
      }
  </script>

</head>
<body>
<header id='header' class="fixed w-full top-[32px] bg-white z-[1]">
        <nav class="w-full flex flex-row smin-750:shadow-md">
            <div class="flex flex-row max-lg:h-20 max-smin-750:hidden w-[48%] max-xl:w-[50%]">
                <div class="nav-link text-[#004EA1] w-3/12 xl:py-4 smin-750:p-2 flex justify-center text-center items-center hover:bg-[#004EA1] hover:text-white cursor-pointer "> 
                    <h3 class="nav-title">ニュース</h3>
                </div>
                <div class="nav-link text-[#004EA1] w-3/12 xl:py-4 smin-750:p-2 flex justify-center text-center items-center hover:bg-[#004EA1] hover:text-white cursor-pointer"> 
                    <h3 class="nav-title">日体大SMG横浜とは</h3>
                </div>
                <div class="nav-link text-[#004EA1] w-3/12 xl:py-4 smin-750:p-2 flex justify-center text-center items-center hover:bg-[#004EA1] hover:text-white cursor-pointer"> 
                    <h3 class="nav-title">選手・チーム紹介</h3>
                </div>
                <div class="nav-link text-[#004EA1] w-3/12 xl:py-4 smin-750:p-2 flex justify-center text-center items-center hover:bg-[#004EA1] hover:text-white cursor-pointer"> 
                    <h3 class="nav-title">スケジュール一覧</h3>
                </div>
            </div>
            <div class="max-smin-750:w-[50%] max-smin-750:block hidden"></div>
            <div class="logo w-[176px] max-smin-750:w-[214px] z-10">
                <img src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/Component 36 – 1.png">
            </div>
            <div class="max-smin-750:w-[40%] max-smin-750:block hidden"></div>
            <div class="flex flex-row max-lg:h-20 max-smin-750:hidden w-[43%]">
                <div class="nav-link text-[#004EA1] w-3/12 xl:py-4 smin-750:p-2 flex justify-center text-center items-center hover:bg-[#004EA1] hover:text-white cursor-pointer"> <h3 class="nav-title">競技・試合結果</h3></div>
                <div class="nav-link text-[#004EA1] w-3/12 xl:py-4 smin-750:p-2 flex justify-center text-center items-center hover:bg-[#004EA1] hover:text-white cursor-pointer"> <h3 class="nav-title">地域活動・<p>プロジェクト</p></h3></div>
                <div class="nav-link text-[#004EA1] w-3/12 xl:py-4 smin-750:p-2 flex justify-center text-center items-center hover:bg-[#004EA1] hover:text-white cursor-pointer"> <h3 class="nav-title">サポーターズクラブ<p>BLUES</p></h3></div>
                <div class="nav-link text-[#004EA1] w-3/12 xl:py-4 smin-750:p-2 flex justify-center text-center items-center hover:bg-[#004EA1] hover:text-white cursor-pointer"> <h3 class="nav-title"><p>BLUES</p>オンラインショップ</h3></div>
            </div>
            <div class="nav-envelope flex justify-center items-center flex-col xl:w-[5%] w-[6%] max-lg:w-[8%] max-smin-750:hidden">
                <i class="fa-solid fa-envelope text-4xl max-lg:text-3xl text-white max:md-lg"></i>
                <p class="text-white smin-750:text-xs smin-750:max-lg:text-[11px]">お問合せ</p>
            </div>
            <div class="max-smin-750:block hidden">
                <div class="relative py-3 sm:max-w-xl mx-auto">
                    <nav x-data="{ open: false }">
                        <button class="nav-burger text-gray-500 w-10 h-10 relative focus:outline-none" @click="open = open">
                            <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                                <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                                <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                                <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                            </div>
                        </button>
                    </nav>
                </div>
            </div>
            
            <div>
                <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                <div class="sidebar sidebar-hidden">
                    <ul class="menu mt-[35%] max-sm:mt-[45%]" id="sidebar-menu">
                        <li><a href="#" >トップページ</a></li>
                        <li><a href="#" >ニュース   </a></li>
                        <li><a href="#" >日体大SMG横浜とは</a></li>
                        <li><a href="#" >チーム・選手紹介</a></li>
                        <li><a href="#" >スケジュール一覧</a></li>
                        <li><a href="#" >競技・試合結果</a></li>
                        <li><a href="#" >地域活動・プロジェクト</a></li>
                        <li><a href="#" >サポーターズクラブ BLUES</a></li>
                        <li><a href="#" >日本体育大学 女子サッカー部HP</a></li>
                        <li><a href="#" >BLUES オンラインショップ</a></li>
                        <li><a href="#" >プライバシーポリシー</a></li>
                        <li><a href="#" >お問合せ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="tp-margin">