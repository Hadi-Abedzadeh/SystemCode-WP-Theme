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
                <? if ( has_post_thumbnail() ) { the_post_thumbnail('full', array('title' => get_the_title(), 'alt' => get_the_title(),'width'=> '1000px'));}else{echo "<img src=".get_bloginfo( 'stylesheet_directory' ). '\assets\img\default.png'.">"; } ?>
            </div>
            <div>
              <div class="pull-right date">
                <span class="spDate"><?= get_the_date('Y/m/d')?></span>
              </div>

            </div>
            <div><span class="lead"><?the_title();?></span></div>
            <div class="content">
              <?= the_content();?>
            </div>
            <p></p><br>
            <div class="panel panel-default container">
              <div class="row panel-footer">
                <span class="pull-left"><a><span class="icon-pencil"> </span> نویسنده: <? the_author();?></a></span>

                <div class="text-right"><a>
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

          <?
// If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
          ;?>

          <?php
        }
      } else { ?>
        <div>
          <h1>موردی یافت نشد</h1>
        </div>
      <? } ?>
      </span>

    </div>
    <? get_sidebar()?>
  </div>
</div>
<? get_footer()?>

</body>
</html>