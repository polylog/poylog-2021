<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package polylog
 */

get_header();
?>


<style>
    body{overflow:hidden}footer{display:none}.main-error__container{width:100%}.main-error{height:100%;padding:0}.main-error-pr{height:100%}.main-error .blog__title-item{font-size:205px}.main-error h5{font-style:normal;font-weight:400;font-size:22px;line-height:140%;text-align:center;color:#000}.error-content__bottom a{font-style:normal;font-weight:400;font-size:22px;line-height:140%;text-align:center;color:#f93822;text-decoration:none}.error-content__bottom{position:absolute;bottom:60px;width:100%;text-align:center;padding:0;margin:0}.main-error__container{width:100%;height:100%;height:calc(100vh - 210px);display:flex;flex-direction:column;align-items:center;justify-content:center;flex-wrap:nowrap;position:relative}.error-content{margin-top:20px}.main-error .blog__title{margin-bottom:0;margin-top:-180px}.header{padding:100px 0 40px}
    @media (max-width: 1380px) {
        .main-error .blog__title-item{font-size: 164px;}
        .header {padding: 40px 0 40px;}
        .main-error .blog__title {margin-top: -200px;}
        .main-error__container {min-height: 700px;}

    }
    @media (min-width: 1025px) {
        .main-error .blog__title-item{
            margin-right: 15px;
        }
    }
    @media (max-width: 1024px) {
        .main-error .blog__title-item{
            font-size: 140px;
        }
        .header {
            padding: 20px 0 40px;
        }
        .main-error .blog__title {
            margin-top: -170px;
        }
        .main-error .blog__title-item{
            margin-right: 10px;
        }
    }
    @media (max-width: 800px) {
        .main-error__container {
            height: calc(100vh - 140px);
        }
    }
    @media (max-width: 767px) {
        .main-error .blog__title-item{
            font-size: 140px;
        }
        .main-error__container {
            min-height: auto;
        }
        .header {
            min-height: 100px;
        }
    }
    @media screen and (max-width: 900px) and (orientation: landscape) {
        .main-error__container {
            min-height: auto;
        }
        body {
            overflow: auto;
        }
        .header {
            min-height: 100px;
        }
        .main-error__container {
            height: calc(100vh - 100px);
        }

    }
    @media screen and (max-width: 770px) and (orientation: landscape) {
        body {
            overflow: auto;
        }
        .header {
            min-height: 100px;
        }
        .main-error__container {
            height: calc(100vh - 150px);
        }
        .main-error .blog__title-item{
            font-size: 110px;
        }
        .error-content{
            margin-top: 10px;
        }

    }
    @media screen and (max-width: 680px) and (orientation: landscape) {
        body {
            overflow: auto;
        }
        .main-error__container {
            height: auto;
        }
        .main-error .blog__title-item{
            font-size: 110px;
        }
        .error-content{
            margin-top: 10px;
        }
        .main-error h5{
            font-size: 20px;
            line-height: 140%;
        }
        .header {
            min-height: 180px;
        }
        .error-content__bottom {
            position: relative;
            bottom: 0;
            margin: 0;
            margin-top: 15px;
        }
        .error-content__bottom a {
            font-size: 20px;
        }


    }
    @media (max-height: 520px) {
        body {
            overflow: auto;
        }

    }
    @media (max-width: 480px) {
        .main-error .blog__title-item{
            font-size: 130px;
        }
        .main-error__container {
            height: calc(100vh - 160px);
        }
        .header {
            min-height: auto;
        }
    }
    @media (max-width: 420px) {
        .main-error .blog__title {
            margin-bottom: 0;
            margin-top: -130px;
        }
        .error-content__bottom {
            bottom: 80px;
        }
    }
    @media (max-width: 380px) {
        .error-content__bottom {
            bottom: 75px;
        }
        .main-error__container {
            height: calc(100vh - 150px);
        }
    }
    @media (max-width: 360px) {
        .error-content__bottom a{
            font-size: 20px;
            line-height: 1;
        }
        .main-error .blog__title {
            margin-bottom: 0;
            margin-top: -120px;
        }
        .error-content__bottom {
            bottom: 60px;
        }
    }
</style>

 <main class="main main-inner  main-error">
  <div class="privacy main-error-pr">
    <div class="main-error__container">
      <div class="blog__title main-error__title">
        <div class="blog__title-row marquee-item" data-marque-speed="30">
          <h1 class="blog__title-item marquee-item__child"><span>ОШИБКА</span> <span class="black">404</span> <span>ОШИБКА</span> <span class="black">404</span></h1>
        </div>
      </div>

      <div class="error-content">
        <div class="text-block" >
          <h5>Страницы не существует <br> или она была удалена</h5>
        </div>
      </div>

      <p class="error-content__bottom">
        <a href="<?php echo get_home_url(); ?>">Перейти на главную</a>
      </p>

    </div>
  </div>
</main>




<!--    <main class="main main-inner main-privacy">
    <div class="privacy">
      <div class="container">
        <h1 class="privacy__title">404</h1>
        <div class="privacy__content">
          <div class="text-block">
            <h2>Ничего не найдено!</h2>
            <p><a href="/">Вернуться на главную</a></p>
          </div>
        </div>
      </div>
    </div>
  </main> -->


<?php
get_footer();
