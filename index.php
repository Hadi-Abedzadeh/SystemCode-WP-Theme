<!-- Color-nice Blue: #02bff1-->
<? get_header() ?>
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <br>
      <?php if (have_posts()) {
        while (have_posts()) {
          the_post();
          ?>
          <div class="posts jumbotron">
            <div class="img">
              <a href="<? the_permalink() ?>">
               <? if ( has_post_thumbnail() ) { the_post_thumbnail('full', array('title' => get_the_title(), 'alt' => get_the_title(),'width'=> '1000px'));}else{echo "<img src=".get_bloginfo( 'stylesheet_directory' ). '\assets\img\default.png'.">"; } ?>
              </a>
            </div>
            <div>
                <div class="pull-right date">
                  <span class="spDate"><?= get_the_date('Y/m/d')?></span>
                </div>

            </div>
            <p><div><span class="lead"><a href="<? the_permalink() ?>"><?the_title();?></a></span></div></p>
            <div class="content">
              <?= wp_trim_excerpt();?>
            </div>
            <p></p><br>
            <div class="panel panel-default container">
              <div class="row panel-footer">
                <span class="pull-left"><a><span class="icon-pencil"> </span> نویسنده: <? the_author();?></a></span>
                <span class="pull-right"><a href="<? the_permalink() ?>">ادامه مطلب</a></span>

                <div class="text-center"><a>
                  <?= get_comments_number(get_the_ID());?>
                <span class="icon-bubbles"></span>
                  </a>
                </div>

              </div>
            </div>

            <div class="progress">
              <div class="progress-bar progress progress-striped active"
                   style="color:red;background:<?= rand_color() ?>;width: 100%"></div>
            </div>
            <div class=""><span class=''><?the_tags('کلمات کلیدی: ', ', ')?></span></div>
            <div class=""><span class=''>دسته: <?the_category(', ')?></span></div>


          </div>
        <?php }
      } else { ?>
        <div>
          <h1>موردی یافت نشد</h1>
        </div>
      <? } ?>
      </span>

      <div class="text-center">
        <? if(function_exists('wp_pagenavi')) wp_pagenavi(); else echo 'wp_pagenavi is not Installed';?>
      </div>


    </div>
    <? get_sidebar()?>
  </div>
</div>
<? get_footer()?>

</body>
</html>
