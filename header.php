<!DOCTYPE html>
<html lang="jp">
    <head>
        <!-- 文字コード -->
        <meta charset="UTF-8">
    
        <!-- IEバグ回避用 -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
        <!-- 説明文 -->
        <meta name="description" content="">
    
        <!-- ビューポート -->
        <meta name="viewport" content="width=device-width,initial-scale=1">
    
        <!-- OGP -->
        <meta property="og:title" content="">
        <meta property="og:type" content="website">
        <meta property="og:description" content="">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="">
        <meta property="og:image" content="">
    
        <!-- Twitter OGP -->
        <meta name="twitter:card" content="summary_large_image">
    
        <!-- ファビコン -->
        
    
        <!-- Webフォント -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
        
    
        <!-- アイコンフォント -->

    
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@2.0.2/destyle.css">
        <!-- <link rel="stylesheet" href="./css/base.css">
        <link rel="stylesheet" href="./css/style.css"> -->


        <?php wp_head(); ?>
</head>

<body>
    <?php if(is_front_page()) {?>
    <!-- MV -->
    <div class="MV">
        <h1 class="maincopy sp_none">人を育て、<br>人と共に街をつくる会社。<br>「ありがとう」を込めて。</h1>
        <div class="promotion_video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/LiX0QzH9-5A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <!-- スマホ限定メインコピー -->
    <div class="sp_maincopy pc_none">
        <h1 class="sp_maincopy_text">人を育て、<br>人と共に街をつくる会社。<br>「ありがとう」を込めて。</h1>
    </div>

    <?php } ?>

    <!-- ヘッダー -->
    <header class="header">
        <div class="header_icon">
            <img src="<?= get_template_directory_uri(); ?>/image/header_logo.png" alt="会社アイコン" class="header_logo">
        </div>

        <nav class="header_nav">
            <ul class="header_list">
                <li><a href="#service">事業案内</a></li>
                <li><a href="#about">会社案内</a></li>
                <li><a href="#recruit">採用情報</a></li>
                <li><a href="#news&blog">ニュース & ブログ</a></li>
                <li><a href="">Q&A</a></li>
                <li style="color:#FFF832;"><a href="#contact">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>