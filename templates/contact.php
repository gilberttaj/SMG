<?php /* Template Name: Contact Template */ ?>
<?php get_header(); ?>

<!-- <form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
    <br>

    <input type="submit" name="submit" value="Send">
</form> -->

<!-- HEADER Schedule -->
<div class="min-[751px]:mt-[76px] max-[750px]:mt-[64px] relative flex justify-center items-center">
    <div class="w-full">
        <img class="w-full lg:h-[350px] h-[320px]" src=" <?= site_url('/wp-content/themes/smg') ?>/assets/images/Group 11940.png" >
    </div>
    <div class="absolute top-0 h-full w-full flex justify-center items-center" data-aos="fade-up">
        <div class="text-center">
            <h1 class="text-[48px] font-bold josefin-sans text-white leading-[58.09px]">CONTACT</h1>
            <p class="text-[20px] font-bold noto-sans text-white leading-[24.2px] tracking-[4px] ">お問合せ</p>
        </div>
    </div>
</div>

<!-- BREADCRUMBS -->
<div class="min-[751px]:w-[60%] min-[751px]:mx-auto mt-4 max-[750px]:px-5">
    <p class="text-[12px] noto-sans leading-[18px] tracking-[3px] text-[#959595] max-[750px]:text-[18px] max-[750px]:leading-[27px]"><a href="<?= site_url()?>">ホーム</a> 　><a href="<?= site_url('news-page')?>">ニュース</a>　>大西若菜選手デザインのマフラータオルが完成！</p>
</div>

<div class="xl:w-[60%] lg:w-[70%] min-[751px]:w-[80%] max-[750px]:w-[90%] mx-auto min-[751px]:mt-[129px] max-[751px]:mt-[111px] relative mb-[230px] max-[750px]:mb-[200px]">
    <div class="min-[751px]:w-[90%] mx-auto">
        <div class="mt-[63px] text-[14px] font-medium leading-[28px] noto-sans">
            <p>必要事項をご記入いただき「送信」ボタンを押してください。</p>
            <ul class="pl-[25px] list-disc mt-[21px]">
                <li class="">お問合せ内容によっては、回答にお時間をいただく場合がございます。</li>
                <li class="mt-[11px]">送信いただくと自動返信にて当クラブよりメールをお送りします。そのメールが届かない場合は、ご入力いただいたメールアドレスが、誤っている可能性もございますのでご確認をお願いします。</li>
                <li class="mt-[11px]">当サイトは、ご利用者の個人情報について、ご利用者の承諾がない限り第三者に開示、提供を一切行いません。ご提供いただいた個人情報を取り扱うにあたり管理責任者を置いて、適切な管理を行っております。詳しくは「プライバシーポリシー」をご確認の上、各項目にご入力して送信をお願いいたします。</li>
            </ul>
        </div>

        <form class="mt-[21px]" action="<?= site_url('/wp-admin/admin-post.php')?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="make_payment">
            <div class="items-center noto-sans text-[14px] leading-[28px] font-medium">
                <div class="py-[30px] flex border-b border-[#B3B3B3] max-[750px]:flex-wrap max-[750px]:justify-between">
                    <label class="lg:w-[20%] min-[751px]:w-[25%]" for="inquiry">
                        お問合せ項目
                    </label>
                    <p class="bg-[#0476D9] w-[64px] text-center text-white">必須</p>
                    <input class="max-[750px]:mt-[40px] py-[11px] min-[751px]:ml-[40px] max-[750px]:w-full 
                        min-[751px]:flex-1 pl-[20px] border border-black rounded" placeholder="お選びください" type="text" id="inquiry" name="inquiry">
                </div>
                <div class="py-[30px] flex border-b border-[#B3B3B3] items-center max-[750px]:flex-wrap max-[750px]:justify-between">
                    <label class="lg:w-[20%] min-[751px]:w-[25%]" for="name">
                        お名前
                    </label>
                    <p class="bg-[#0476D9] w-[64px] text-center text-white">必須</p>
                    <input class="max-[750px]:mt-[40px] py-[11px] min-[751px]:ml-[40px] max-[750px]:w-full 
                        min-[751px]:flex-1 pl-[20px] border border-black rounded" placeholder="例）山田太郎" type="text" id="name" name="name">
                </div>
                <div class="py-[30px] flex border-b border-[#B3B3B3] items-center max-[750px]:flex-wrap max-[750px]:justify-between">
                    <label class="lg:w-[20%] min-[751px]:w-[25%]" for="name_furigana">
                        お名前（フリガナ）
                    </label>
                    <p class="bg-[#0476D9] w-[64px] text-center text-white">必須</p>
                    <input class="max-[750px]:mt-[40px] py-[11px] min-[751px]:ml-[40px] max-[750px]:w-full 
                        min-[751px]:flex-1 pl-[20px] border border-black rounded" placeholder="例）ヤマダタロウ" type="text" id="name_furigana" name="name_furigana">
                </div>
                <div class="py-[30px] flex border-b border-[#B3B3B3] items-center max-[750px]:flex-wrap max-[750px]:justify-between">
                    <label class="lg:w-[20%] min-[751px]:w-[25%]" for="email">
                        メールアドレス
                    </label>
                    <p class="bg-[#0476D9] w-[64px] text-center text-white">必須</p>
                    <input class="max-[750px]:mt-[40px] py-[11px] min-[751px]:ml-[40px] max-[750px]:w-full 
                        min-[751px]:flex-1 pl-[20px] border border-black rounded" placeholder="例）example@example.com" type="text" id="email" name="email">
                </div>
                <div class="py-[30px] flex border-b border-[#B3B3B3] items-center max-[750px]:flex-wrap max-[750px]:justify-between">
                    <label class="lg:w-[20%] min-[751px]:w-[25%]" for="number">
                        お電話番号
                    </label>
                    <p class="bg-[#0476D9] w-[64px] text-center text-white">必須</p>
                    <input class="max-[750px]:mt-[40px] py-[11px] min-[751px]:ml-[40px] max-[750px]:w-full 
                        min-[751px]:flex-1 pl-[20px] border border-black rounded" placeholder="例）0465-00-0000" type="text" id="number" name="number">
                </div>
                <div class="py-[30px] flex border-b border-[#B3B3B3] items-center max-[750px]:flex-wrap max-[750px]:justify-between">
                    <label class="lg:w-[20%] min-[751px]:w-[25%]" for="company">
                        企業名	
                    </label>
                    <p class="w-[64px] text-center border border-[#6E6E6E] text-[#6E6E6E]">任意</p>
                    <input class="max-[750px]:mt-[40px] py-[11px] min-[751px]:ml-[40px] max-[750px]:w-full 
                        min-[751px]:flex-1 pl-[20px] border border-black rounded" placeholder="例）株式会社〇〇" type="text" id="company" name="company">
                </div>
                <div class="py-[30px] border-b border-[#B3B3B3] items-center mt-[10px]">
                    <div class="flex leading-[28px] max-[750px]:leading-[32px] max-[750px]:flex-wrap max-[750px]:justify-between">   
                        <div class="lg:w-[20%] min-[751px]:w-[25%]">
                            <label class="">
                                住所	
                            </label>
                        </div>
                        <div class="w-[64px]">
                            <p class="text-center border border-[#6E6E6E] text-[#6E6E6E]">任意</p>
                        </div>
                        <div class="min-[751px]:flex-1 max-[750px]:w-full min-[751px]:ml-[40px] max-[750px]:mt-[40px]">
                            <div>
                                <label class="" for="postal_code">
                                    郵便番号	
                                </label>
                                <div class="flex flex-wrap min-[751px]:mt-[20px]">
                                    <input class="min-[751px]:mr-[30px] w-[184px] max-[750px]:w-full max-[750px]:mt-[32px] py-[11px] pl-[20px] border border-black rounded" placeholder="例）1111111" type="text" id="postal_code" name="postal_code">
                                    <p class="min-[751px]:flex-1 max-[750px]:mt-[11px]">※半角数字・ハイフン不要</p>
                                </div>
                            </div>
                            <div class="mt-[31px] max-[750px]:mt-[40px]">
                                <label class="" for="postal_code">
                                    郵便番号	
                                </label>
                                <div class="flex max-[900px]:flex-wrap min-[751px]:mt-[20px]">
                                    <input class="min-[751px]:mr-[30px] w-[184px] max-[750px]:w-full max-[750px]:mt-[32px] py-[11px] pl-[20px] border border-black rounded" placeholder="例）1111111" type="text" id="prefecture" name="prefecture">
                                    <input class="max-[900px]:mt-[20px] w-full max-[900px]:w-full max-[750px]:mt-[32px] py-[11px] pl-[20px] border border-black rounded" placeholder="例）1111111" type="text" id="municipality" name="municipality">
                                </div>
                            </div>
                            <div class="mt-[31px] max-[750px]:mt-[40px]">
                                <label class="" for="building_name">
                                    番地・建物名	
                                </label>
                                <div class="flex flex-wrap min-[751px]:mt-[20px]">
                                    <input class="w-full max-[750px]:mt-[32px] py-[11px] 
                                    pl-[20px] border border-black rounded" placeholder="例）3-1-1　○○マンション" type="text" id="building_name" name="building_name">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-[30px] flex border-b border-[#B3B3B3] items-start max-[750px]:flex-wrap max-[750px]:justify-between">
                    <label class="lg:w-[20%] min-[751px]:w-[25%]" for="name">
                        お問合せ内容
                    </label>
                    <p class="bg-[#0476D9] w-[64px] text-center text-white">必須</p>
                    <textarea class="max-[750px]:mt-[40px] py-[11px] min-[751px]:ml-[40px] max-[750px]:w-full 
                        min-[751px]:flex-1 pl-[20px] border border-black rounded"  rows="4" cols="50" placeholder="お問合せ内容をご記入ください" type="text" id="name" name="name"></textarea>
                </div>
                <div class="mt-[60px]">
                    <p>当サイトは、ご利用者の個人情報について、ご利用者の承諾がない限り第三者に開示、提供を一切行いません。</p>
                    <p>詳しくは「プライバシーポリシー」をご確認ください。</p>
                    <p class="mt-[21px]">個人情報の取扱いについて、同意の上送信します。（よろしければチェックを入れてください。）</p>
                </div>
                <div class="text-center mt-[62px]">
                    <p>□　プライバシーポリシーに同意する</p>
                </div>
                <div class='flex justify-center mt-[82px]'>
                    <div class='relative text-white transition-all duration-500 bg-gradient-to-r to-black via-white from-white bg-size-200 bg-pos-100 hover:bg-pos-0 hover:text-black hover:border-[1px] hover:border-[#000]'>
                        <input class='self-center w-[240px] h-[56px] flex justify-center items-center josefin-sans font-bold text-[14px]' type="submit" name="submit" value="SEND">
                        <div class='right-arrow'>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php get_footer(); ?>
