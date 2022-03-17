    <!-- お問い合わせと採用情報 -->
    <div class="info flex">
        <div class="contact">
            <a href="" class="contact_link">
                <div class="contact_inner">
                    <p class="contact_title">お問い合わせ</p>
                    <p class="contact_text">収集運搬、遺品整理ついてのお問い合わせや<br>ご質問はこちらから。</p>
                </div>
                <div class="info_button"></div>
            </a>
        </div>

        <div class="recruit">
            <a href="" class="recruit_link">
                <div class="recruit_inner">
                    <p class="recruit_title">採用情報</p>
                    <p class="recruit_text">採用についてのお問い合わせはこちらから。</p>
                </div>
                <div class="info_button"></div>
            </a>
        </div>
    </div>

    <!-- マンガでわかる！！ページへのリンク -->
    <div class="commic">
        <a href="https://mkct.co.jp/lp/" class="commic_link"><img src="<?= get_template_directory_uri(); ?>/image/commic.png" alt="マンガでわかる！！ページへのリンク画像" class="commic_image"></a>
    </div>

    <!-- フッター -->
    <footer class="footer">
        <div class="footer_inner wrapper_sp">
            <div class="footer_box_left">
                <img src="<?= get_template_directory_uri(); ?>/image/footer_logo.png" alt="会社ロゴ画像" class="footer_icon sp_none">
                <a href="" class="footer_item">
                    <div class="footer_item_button"></div>
                    <p>プライバシーポリシー</p>
                </a>

                <p>©️ 株式会社エムケー</p>
            </div>

            <div class="footer_box_center sp_none">
                <nav class="footer_nav">
                    <a href="" class="footer_item">
                        <div class="footer_item_button"></div>
                        <p>事業案内（収集運搬事業/整理事業）</p>
                    </a>
    
                    <a href="" class="footer_item">
                        <div class="footer_item_button"></div>
                        <p>会社案内</p>
                    </a>
    
                    <a href="" class="footer_item">
                        <div class="footer_item_button"></div>
                        <p>採用情報</p>
                    </a>
    
                    <a href="" class="footer_item">
                        <div class="footer_item_button"></div>
                        <p>ニュース&ブログ</p>
                    </a>
    
                    <a href="" class="footer_item">
                        <div class="footer_item_button"></div>
                        <p>Q&A</p>
                    </a>
                </nav>
            </div>

            <div class="footer_box_right">
                <div class="footer_box_inner">
                    <p>株式会社エムケー</p>
                    <p>〒571-0016　大阪府門真市島頭2丁目13-18</p>
                    <p><a href="https://www.google.co.jp/maps/place/%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE%E3%82%A8%E3%83%A0%E3%82%B1%E3%83%BC/@34.7335278,135.6058532,17z/data=!3m1!4b1!4m5!3m4!1s0x60011fea834d90ad:0xb4afa853137f3334!8m2!3d34.7335234!4d135.6080472?hl=ja" class="google_map">＞ Googlemapで確認する</a></p>
                    <p>TEL:072-885-4156</p>

                    <div class="contact_button">
                        <a href="" class="button">お問い合わせはこちら</a>
                    </div>                        
                </div>
            </div>

            <img src="<?= get_template_directory_uri(); ?>/image/footer_logo.png" alt="スマホ用会社ロゴ画像" class="footer_icon_sp pc_none">
            
        </div>
    </footer>


    <?php wp_footer(); ?>
    
</body>