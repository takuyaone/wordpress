<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>estra magazine</title>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
  <?php
  /*
Template Name: お問い合わせ
*/
  ?>
  <?php get_header(); ?>
  <div class="single-eyecatch eyecatch page-eyecatch">
    <?php echo get_the_post_thumbnail($post = 54); ?>
    <?php // 投稿のスラッグを取得
    $page = get_post(get_the_ID(53));
    $slug = $page->post_name;
    ?>
    <div class="page-title">
      <h1 class="page-title__h1"><?php echo $slug; ?></h1>
      　　　　
      <!-- 固定ページのタイトル -->
      <p class=></p>
    </div>
  </div>
  <div class="contact">
    <form class="form" method="post">
      
      <?php echo do_shortcode('[contact-form-7 id="53" title="お問い合わせフォーム"]'); ?>
    </form>
  </div>
  <?php get_footer(); ?>
  <footer id="footer">
    <div class="footer-nav__title">
      <a href="" class="article-logo">
        estra magazine
        <br />
        <span class="magazine-subtitle">
          学習方法を提案するメディア
        </span>
      </a>
    </div>
    <div class="footer-sns flex">
      <a href="" class="sns-icon first"><i class="fab fa-twitter"></i></a>
      <a href="" class="sns-icon"><i class="fab fa-facebook"></i></a>
      <a href="" class="sns-icon"><i class="fab fa-instagram"></i></a>
    </div>
    <div class="footer-content flex">
      <div class="footer-about">
        <h3>About</h3>
        <ul>
          <li>
            <a href="">お問い合わせ</a>
          </li>
          <li><a href="https://estra.jp">運営会社</a></li>
          <li><a href="https://coachtech.site">COACHTECH</a></li>
        </ul>
      </div>
    </div>
    <small>Copyright estra magazine 2020 All Rights Reserved.</small>
  </footer>
</body>

</html>