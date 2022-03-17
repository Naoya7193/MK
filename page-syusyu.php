<?php get_header(); ?>

<!-- 変数処理 -->
<?php
$title = get_the_title();
?>


<!-- ページタイトル -->
<div class="page_title">
    <p class="page_sub_title">事業案内</p>
    <h2 class="page_main_title"> <?=$title?></h2>
</div>

<!-- MV -->
<div class="syusyu_mv wrapper">
    <h1 class="syusyu_maincopy">
        大阪を中心に幅広いエリアの
        <br>収集運搬ニーズに対応します。
    </h1>
</div>

<!-- 収集運搬業務 説明 -->
<p class="mv_text">
    収集運搬とは、廃棄物・資源を収集し指定の処分場・リサイクル施設へ運搬することです。
    <br>弊社では依頼受付から「手配」・「現場回収」・「収集運搬」・「中間処理」までを一貫で行うだけでなく、
    <br>それに付随する「マニフェスト処理」・「請求処理」まで、
    <br>責任をもって対応させていただくことをお約束いたします。
    <br>また弊社では、お客様にあった「リサイクル率向上のための分別」や「廃棄物削減」そして、
    <br>「より良い収集運搬」方法をご提案させていただきます。
</p>

<!-- サービス内容 -->
<div class="syusyu_service">
    <div class="syusyu_container wrapper">
        <div class="syusyu_box">
            <div class="syusyu_inner">
                <p class="syusyu_title">収集運搬対応エリア</p>
                <div class="syusyu_image"></div>
                <div class="syusyu_text_area">
                    <p class="syusyu_text">大阪を中心に幅広いエリアで収集運搬のご要望にお応えしております。詳しくはエリアマップをご覧ください。ピンク色の地域が常時対応エリアとなっております。エリア外でも対応できる場合がございますので、まずはお気軽にご相談ください。</p>
                    <a href="" class="syusyu_button">エリアマップはこちら</a>
                </div>
            </div>
        </div>

        <div class="syusyu_box reverse">
            <div class="syusyu_inner">
                <div class="syusyu_title">保有車両紹介</div>
                <div class="syusyu_image"></div>
                <div class="syusyu_text_area">
                    <p class="syusyu_text">紙くずや金属くずをはじめ、廃プラスチック類、木くず、がれき類、汚泥・廃油など、目的別・回収量に応じて多様な運搬車両を保有し、様々な産業廃棄物の運搬に対応。専門知識と資格を有したドライバーが責任を持って運搬いたします。</p>
                    <a href="" class="syusyu_button">産業廃棄物許可品目はこちら</a>
                </div>
            </div>

            <div class="syusyu_database_container">
                <div class="syusyu_database_box">
                    <p class="syusyu_database_title">車両一覧</p>
                    <table class="syusyu_database_table">
                        <thead>
                            <tr>
                                <th>名称</th>
                                <th>長さ（mm）</th>
                                <th>幅（mm）</th>
                                <th>高さ（mm）</th>
                                <th>最大積載量（kg）</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>8tクレーン</td>
                                <td>8,460</td>
                                <td>2,290</td>
                                <td>2,970</td>
                                <td>4,450</td>
                            </tr>
                            <tr>
                                <td>3tクレーン</td>
                                <td>6,230</td>
                                <td>2,090</td>
                                <td>2,800</td>
                                <td>3,150</td>
                            </tr>
                            <tr>
                                <td>4tアーム</td>
                                <td>5,910</td>
                                <td>2,200</td>
                                <td>2,710</td>
                                <td>3,850</td>
                            </tr>
                            <tr>
                                <td>2tアーム</td>
                                <td>4,700</td>
                                <td>1,690</td>
                                <td>1,980</td>
                                <td>2,000</td>
                            </tr>
                            <tr>
                                <td>2tダンプ</td>
                                <td>4,690</td>
                                <td>1,690</td>
                                <td>1,970</td>
                                <td>2,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="syusyu_database_box">
                    <p class="syusyu_database_title">保有容器一覧</p>
                    <table class="syusyu_database_table">
                        <thead>
                            <tr>
                                <th>名称</th>
                                <th>運搬可能車両</th>
                                <th>容器サイズ（E/D/H）外寸</th>
                                <th>設置（回収）条件</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>パレット大</td>
                                <td>4tユニック・2tユニック</td>
                                <td>1.7×1.5×1.1</td>
                                <td>電線・標識・旋回</td>
                            </tr>
                            <tr>
                                <td>パレット小</td>
                                <td>4tユニック・2tユニック</td>
                                <td>1.7×1.5×1.1</td>
                                <td>電線・標識・旋回</td>
                            </tr>
                            <tr>
                                <td>コンテナ8㎥</td>
                                <td>4tアーム</td>
                                <td>2.0×4.0×1.45</td>
                                <td>ガレキ3㎥・作業10メートル以上必要</td>
                            </tr>
                            <tr>
                                <td>コンテナ4㎥</td>
                                <td>2tアーム</td>
                                <td>1.7×3.0×1.1</td>
                                <td>ガレキ2㎥・作業8メートル以上必要</td>
                            </tr>
                            <tr>
                                <td>コンテナ5㎥</td>
                                <td>2tアーム</td>
                                <td>1.7×3.0×1.45</td>
                                <td>ガレキ2㎥・作業8メートル以上必要</td>
                            </tr>
                            <tr>
                                <td>フレコンバック1㎥</td>
                                <td>4tユニック・2tユニック</td>
                                <td></td>
                                <td>電線・標識・旋回</td>
                            </tr>
                            <tr>
                                <td>フレコンバック2㎥</td>
                                <td>4tユニック・2tユニック</td>
                                <td></td>
                                <td>電線・標識・旋回</td>
                            </tr>
                            <tr>
                                <td>フレコンバック3㎥</td>
                                <td>4tユニック・2tユニック</td>
                                <td></td>
                                <td>電線・標識・旋回</td>
                            </tr>
                            <tr>
                                <td>小袋0.06㎥</td>
                                <td>ALL</td>
                                <td></td>
                                <td>袋/15kgまで</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    
</div>


<?php get_footer(); ?>