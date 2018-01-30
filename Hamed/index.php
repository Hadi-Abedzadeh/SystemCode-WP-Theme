<? get_header() ?>

    <body dir="">
    <div style='height:60px!important;margin:0;' class="navbar navbar-default navbar-fixed">
        <ul style='margin-right:2px;' class="nav navbar-nav navbar-right">
            <li><a class="navbar-brand navTextHover" href="#contact-us">تماس با ما</a></li>
            <li><a class="navbar-brand navTextHover" href="#cooperation">همکاری</a></li>
            <li><a class="navbar-brand navTextHover" href="#">سوابق</a></li>
            <li><a class="navbar-brand navTextHover" href="#services">خدمات</a></li>
            <li><a class="navbar-brand navTextHover" href="#about-us">درباره ما</a></li>
            <li><a class="navbar-brand navTextHover" href="#">صفحه اصلی</a></li>
            <li><img style='margin:5px 5px 0 0;' src='<? bloginfo('template_url') ?>/assets/icons/logo.png' class='img-responsive'/></li>
        </ul>
    </div>


<?php layerslider(1) ?>

    <br>

    <div class='container'>
        <div id="about-us" class="row" style='padding:5px;'>
            <div class="col-lg-4 text-center box">
                <img src='<? bloginfo('template_url') ?>/assets/icons/loader.png' class='center-block img-responsive' width='30%'/>

                <? dynamic_sidebar('about_3');?>
            </div>

            <div class="col-lg-4 text-center box">
                <img src='<? bloginfo('template_url') ?>/assets/icons/helmet.png' class='center-block img-responsive' width='30%'/>
                <? dynamic_sidebar('about_2');?>
            </div>

            <div class="col-lg-4 text-center box">
                <img src='<? bloginfo('template_url') ?>/assets/icons/drawing.png' class='center-block img-responsive' width='30%'/>
                <? dynamic_sidebar('about_1');?>

            </div>
        </div>
    </div>

    <div class="container"><hr></div>


    <div class='container-fluid' style='background:#F3F3F7;'>
        <div class="container-fluid" id="services" style='padding:2px;'>
            <div class="col-lg-1"></div>

            <div class="col-lg-2 text-center heightBox"><img src='<? bloginfo('template_url') ?>/assets\icons\4-1.png' />
                <? dynamic_sidebar('service_4');?>
            </div>

            <div class="col-lg-2 text-center heightBox"><img src='<? bloginfo('template_url') ?>/assets\icons\3-1.png' />
                <? dynamic_sidebar('service_3');?>
            </div>

            <div class="col-lg-2 text-center heightBox"><img src='<? bloginfo('template_url') ?>/assets\icons\2-1.png' />
                <? dynamic_sidebar('service_2');?>
            </div>

            <div class="col-lg-2 text-center heightBox"><img src='<? bloginfo('template_url') ?>/assets\icons\1-1.png' />
                <? dynamic_sidebar('service_1');?>
            </div>
            <div class="col-lg-1"></div>

        </div>
    </div>


    <div class="container-fluid center-block">
        <div class="col-lg-12 text-right" style='font-size:25pt;'>:ایمنی یعنی</div>
        <div class="col-lg-1"></div>
        <div class='col-lg-3 col-md-4 col-sm-4'><img class='center-block img-responsive' src='<? bloginfo('template_url') ?>/assets/img/3_workplace-safety.png' /></div>
        <div class='col-lg-3 col-md-4 col-sm-4'><img class='center-block img-responsive' src='<? bloginfo('template_url') ?>/assets/img/3_workplace-safety.png' /></div>
        <div class='col-lg-3 col-md-4 col-sm-4'><img class='center-block img-responsive' src='<? bloginfo('template_url') ?>/assets/img/3_workplace-safety.png' /></div>
    </div>




    <div class="container"><hr></div>



    <div  class="container-fluid" style="padding:50px; background: #F8F9FB; ">
        <div class="roudMapImg">
            <div class="container-fluid">
                <div id="cooperation" class="col-lg-offset-1 col-lg-3 col-md-4 col-sm-3 text-center">
                    <ul class='ulpallet'>
                        <li class="lipallet top-li"></li>
                        <? dynamic_sidebar('cooperation_1');?>
                        <li class='lipallet'><hr></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                    <img style="padding-top: 10px; margin: 0 auto; min-width:20%;max-width:100%" src="<? bloginfo('template_url') ?>/assets/img/clipart-occupational-health.png" class="img-responsive" />
                </div>

                <div class="col-lg-3 col-md-4 col-sm-3 text-center">
                    <ul class='ulpallet'>
                        <li class="lipallet top-li"></li>
                        <? dynamic_sidebar('cooperation_2');?>
                        <li class='lipallet'><hr></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class='backImg'></div>
    <div class="container"><hr></div>

  <div class="container-fluid text-right" style="font-size:300%;color: #FFF; background: #210524; ">
        <br><br>
        <div class='container-fluid'>
            <div class='col-lg-3'></div>
            <div class='col-lg-6 text-center'>
                دارای گواهی نامه بین المللی "........" از کشور ....... با رعایت استاندارد های .........            </div>
            <div class='col-lg-3'></div>
        </div>

        <div class='row text-center'>
            <div class='col-lg-2 col-md-2 col-sm-2 col-xs-2'></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><img class='svgSize' src='<? bloginfo('template_url') ?>/assets/icons/svg/behpardakht.svg' /></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><img class='svgSize' src='<? bloginfo('template_url') ?>/assets/icons/svg/pardakht-saman.svg' /></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><img class='svgSize' src='<? bloginfo('template_url') ?>/assets/icons/svg/pecco.svg' /></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><img class='svgSize' src='<? bloginfo('template_url') ?>/assets/icons/svg/upjers.svg' /></div>
            <div class='col-lg-2 col-md-2 col-sm-2 col-xs-2'></div>
        </div>
    </div>

    <div class="container"><hr></div>



<? get_footer() ?>
<?php wp_footer() ?>


