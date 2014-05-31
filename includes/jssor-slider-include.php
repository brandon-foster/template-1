<!-- Jssor Slider Begin -->
<!-- You can move inline styles (except 'top', 'left', 'width' and 'height') to css file or css block. -->
<div id="slider1_container" style="position: relative; width: 720px; height: 480px; overflow: hidden; margin: 0 auto; border: 2px solid #3b3b3b;
">
    <!-- Loading Screen -->
    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
            background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
        </div>
        <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
            top: 0px; left: 0px;width: 100%;height:100%;">
        </div>
    </div>

    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 720px; height: 480px;
        overflow: hidden;">
        <div>
            <img u="image" src="img/01.jpg" />
            <img u="thumb" src="img/thumb-01.jpg" />
        </div>
        <div>
            <img u="image" src="img/02.jpg" />
            <img u="thumb" src="img/thumb-02.jpg" />
        </div>
        <div>
            <img u="image" src="img/03.jpg" />
            <img u="thumb" src="img/thumb-03.jpg" />
        </div>
        <div>
            <img u="image" src="img/04.jpg" />
            <img u="thumb" src="img/thumb-04.jpg" />
        </div>
        <div>
            <img u="image" src="img/05.jpg" />
            <img u="thumb" src="img/thumb-05.jpg" />
        </div>
        <div>
            <img u="image" src="img/06.jpg" />
            <img u="thumb" src="img/thumb-06.jpg" />
        </div>
        <div>
            <img u="image" src="img/07.jpg" />
            <img u="thumb" src="img/thumb-07.jpg" />
        </div>
        <div>
            <img u="image" src="img/08.jpg" />
            <img u="thumb" src="img/thumb-08.jpg" />
        </div>
        <div>
            <img u="image" src="img/09.jpg" />
            <img u="thumb" src="img/thumb-09.jpg" />
        </div>
        <div>
            <img u="image" src="img/10.jpg" />
            <img u="thumb" src="img/thumb-10.jpg" />
        </div>

        <div>
            <img u="image" src="img/11.jpg" />
            <img u="thumb" src="img/thumb-11.jpg" />
        </div>
        <div>
            <img u="image" src="img/12.jpg" />
            <img u="thumb" src="img/thumb-12.jpg" />
        </div>
        <div>
            <img u="image" src="img/13.jpg" />
            <img u="thumb" src="img/thumb-13.jpg" />
        </div>
        <div>
            <img u="image" src="img/14.jpg" />
            <img u="thumb" src="img/thumb-14.jpg" />
        </div>
    </div>
    
    <!-- Thumbnail Navigator Skin Begin -->
    <div u="thumbnavigator" class="jssort07" style="position: absolute; width: 720px; height: 100px; left: 0px; bottom: 0px; overflow: hidden; ">
        <div style=" background-color: #000; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>
        <!-- Thumbnail Item Skin Begin -->
        <style>
            /* jssor slider thumbnail navigator skin 07 css */
            /*
            .jssort07 .p            (normal)
            .jssort07 .p:hover      (normal mouseover)
            .jssort07 .pav          (active)
            .jssort07 .pav:hover    (active mouseover)
            .jssort07 .pdn          (mousedown)
            */
            .jssort07 .i {
                position: absolute;
                top: 0px;
                left: 0px;
                width: 99px;
                height: 66px;
                filter: alpha(opacity=80);
                opacity: .8;
            }

            .jssort07 .p:hover .i, .jssort07 .pav .i {
                filter: alpha(opacity=100);
                opacity: 1;
            }

            .jssort07 .o {
                position: absolute;
                top: 0px;
                left: 0px;
                width: 97px;
                height: 64px;
                border: 1px solid #000;
                transition: border-color .6s;
                -moz-transition: border-color .6s;
                -webkit-transition: border-color .6s;
                -o-transition: border-color .6s;
            }

            * html .jssort07 .o {
                /* ie quirks mode adjust */
                width /**/: 99px;
                height /**/: 66px;
            }

            .jssort07 .pav .o, .jssort07 .p:hover .o {
                border-color: #fff;
            }

            .jssort07 .pav:hover .o {
                border-color: #0099FF;
            }

            .jssort07 .p:hover .o {
                transition: none;
                -moz-transition: none;
                -webkit-transition: none;
                -o-transition: none;
            }
        </style>
        <div u="slides" style="cursor: move;">
            <div u="prototype" class="p" style="POSITION: absolute; WIDTH: 99px; HEIGHT: 66px; TOP: 0; LEFT: 0;">
                <thumbnailtemplate class="i" style="position:absolute;"></thumbnailtemplate>
                <div class="o">
                </div>
            </div>
        </div>
        <!-- Thumbnail Item Skin End -->
        <!-- Arrow Navigator Skin Begin -->
        <style>
                /* jssor slider arrow navigator skin 11 css */
                /*
            .jssora11l              (normal)
            .jssora11r              (normal)
            .jssora11l:hover        (normal mouseover)
            .jssora11r:hover        (normal mouseover)
            .jssora11ldn            (mousedown)
            .jssora11rdn            (mousedown)
            */
                .jssora11l, .jssora11r, .jssora11ldn, .jssora11rdn {
                    position: absolute;
                    cursor: pointer;
                    display: block;
                    background: url(img/a11.png) no-repeat;
                    overflow: hidden;
                }

                .jssora11l {
                    background-position: -11px -41px;
                }

                .jssora11r {
                    background-position: -71px -41px;
                }

                .jssora11l:hover {
                    background-position: -131px -41px;
                }

                .jssora11r:hover {
                    background-position: -191px -41px;
                }

                .jssora11ldn {
                    background-position: -251px -41px;
                }

                .jssora11rdn {
                    background-position: -311px -41px;
                }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora11l" style="width: 37px; height: 37px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora11r" style="width: 37px; height: 37px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
    </div>
    <!-- ThumbnailNavigator Skin End -->
    <a style="display: none" href="http://www.jssor.com">jQuery Carousel</a>
    <!-- Trigger -->
</div>
<!-- Jssor Slider End -->

