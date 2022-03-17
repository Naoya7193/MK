<?php get_header(); ?>

<!-- ニュース -->
<div class="news">
    <div class="news_heading">
        <div class="news_title_inner">
            <p class="news_title">ニュース</p>
            <a href="" class="news_button"></a>
        </div>
        <div class="news_box">
            <time class="post_date" datetime="2021.00.00">2021.00.00</time>
            <p class="news_text">お知らせが表示されます。ダミー文章です年末年始は00日〜00日までとなります。</p>
        </div>
    </div>
</div>

<!-- メッセージ -->
<div class="message wrapper_sp">
    <div class="message_image_area">
        <a href="" class="section_button">詳しく見る</a>
    </div>

    <div class="message_area">
        <div class="message_inner">
            <p class="message_title">仕事を通じて、<br>地域の明日に貢献します。</p>
            <p class="message_text">
                助け合い、学び、喜び合い、未来を創造する。
                <br>これを弊社の基本理念とし、
                <br class="sp_none">より品質の高いサービスを提供するため、
                <br class="sp_none">社員一同が創意工夫しながら頑張っております。
                <br>また、社員が働きやすい職場づくりを目指すことで、
                <br class="sp_none">社員一人ひとりのライフプランを
                <br class="sp_none">構築していくことも心がけております。
                <br>これからも、お客様に満足していただけるよう、
                <br class="sp_none">日々の努力と工夫を怠らず、
                <br class="sp_none">明日に向かって精進してまいります。
            </p>
        </div>
    </div>
</div>

<!-- 事業案内 -->
<section class="service">
    <h2 class="section_title">事業案内</h2>
    <div class="service_container">

        <div class="service_01">
            <div class="service_wrapper">
                <div class="service_01_box wrapper_sp">
                    <div class="service_inner">
                        <p class="service_small_title">Service_01</p>
                        <p class="service_title">収集運搬事業</p>
                        <p class="service_text">大阪を中心とした幅広いエリアで、紙くずや金属くず、廃プラスチック類など、様々な産業廃棄物の運搬をしております。</p>

                        <a href="" class="section_button">詳しく見る</a>

                    </div>
                </div>
            </div>
        </div>

        <div class="service_02">
            <div class="service_wrapper">
                <div class="service_02_box wrapper_sp">
                    <div class="service_inner">
                        <p class="service_small_title">Service_02</p>
                        <p class="service_title">整理事業</p>
                        <p class="service_text">お片付けから、住空間整理、墓仕舞いなど、お客様に寄り添い、最後まで責任を持って対応させていただきます。</p>

                        <div class="service_button_box">
                            <a href="" class="section_button">資料を見る</a>
                            <a href="" class="section_button">詳しく見る</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ニュース&ブログ -->
<section class="news_blog">
    <h2 class="section_title">ニュース & ブログ</h2>

    <div class="blog_container flex">
        <a href="" class="blog_box">
            <img src="<?= get_template_directory_uri(); ?>/image/news01.png" alt="ニュースのサムネイル" class="news_thumbnail">
            <p class="blog_title">タイトルのみ表示ダミー文章です廃棄物・資源を収集し指定の処分場です。</p>
            <div class="blog_bottom">
                <time class="post_date">2021.00.00</time>
                <p class="read_more">READ MORE</p>
            </div>
        </a>

        <a href="" class="blog_box">
            <img src="<?= get_template_directory_uri(); ?>/image/news02.png" alt="ニュースのサムネイル" class="news_thumbnail">
            <p class="blog_title">タイトルのみ表示ダミー文章です廃棄物・資源を収集し指定の処分場です。</p>
            <div class="blog_bottom">
                <time class="post_date">2021.00.00</time>
                <p class="read_more">READ MORE</p>
            </div>
        </a>

        <a href="" class="blog_box">
            <img src="<?= get_template_directory_uri(); ?>/image/news03.png" alt="ニュースのサムネイル" class="news_thumbnail">
            <p class="blog_title">タイトルのみ表示ダミー文章です廃棄物・資源を収集し指定の処分場です。</p>
            <div class="blog_bottom">
                <time class="post_date">2021.00.00</time>
                <p class="read_more">READ MORE</p>
            </div>
        </a>
    </div>

    <a href="" class="section_button sp_none">一覧を見る</a>

</section>

<?php get_footer(); ?>
