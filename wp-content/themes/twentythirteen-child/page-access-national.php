<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title>Welcome to Access National</title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script>
    $(document).ready(function() {
        $('.vfb-section.vfb-section-1').append('<a class="next" href="#">Next</a>');
        $('.vfb-section.vfb-section-1').append('<a class="back" href="#">Back</a>');
        $('.back').hide();
        $('.second_page').hide();
        $('.vfb-section.vfb-section-2').hide();
        $('#item-vfb-4').hide();
        $('#item-vfb-37').hide();
        $('#item-vfb-38').hide();
        $('#item-vfb-39').hide();
        $('#item-vfb-40').hide();
        $('#item-vfb-41').hide();
        $('#item-vfb-42').hide();
        $('.pic').hide();
        $('.next').click(function(e) {
            $(this).hide();
            $('.back').show()
            $('.second_page').show();
            $('.first_page').hide();
            $('.vfb-section.vfb-section-2').show();
            $('#item-vfb-37').show();
            $('#item-vfb-38').show();
            $('#item-vfb-39').show();
            $('#item-vfb-40').show();
            $('#item-vfb-41').show();
            $('#item-vfb-42').show();
            $('#item-vfb-4').show();
            $('#item-vfb-6').hide();
            $('#item-vfb-12').hide();
            $('#item-vfb-10').hide();
            $('#item-vfb-11').hide();
            $('#item-vfb-18').hide();
            $('#item-vfb-19').hide();
            $('#item-vfb-20').hide();
            $('#item-vfb-21').hide();
            $('#item-vfb-25').hide();
            $('#item-vfb-7').hide();
            $('#item-vfb-43').hide();
            $('.pics').hide();
            $('.pic').show();
            e.preventDefault();
        })
        $('.back').click(function(e) {
            $(this).hide();
            $('.second_page').hide();
            $('.first_page').show();
            $('.next').show();
            $('.vfb-section.vfb-section-2').hide();
            $('#item-vfb-37').hide();
            $('#item-vfb-38').hide();
            $('#item-vfb-39').hide();
            $('#item-vfb-40').hide();
            $('#item-vfb-41').hide();
            $('#item-vfb-42').hide();
            $('#item-vfb-4').hide();
            $('#item-vfb-6').show();
            $('#item-vfb-12').show();
            $('#item-vfb-10').show();
            $('#item-vfb-11').show();
            $('#item-vfb-25').show();
            $('#item-vfb-18').show();
            $('#item-vfb-19').show();
            $('#item-vfb-20').show();
            $('#item-vfb-21').show();
            $('#item-vfb-7').show();
            $('#item-vfb-43').show();
            $('.pic').hide();
            $('.pics').show();
            e.preventDefault();
        })
    })

    </script>
</head>
<style>
.next,
.back {
    color: #286434;
    padding: 5px 0px;
    background: #fff;
    border: 1px solid #000;
    border-radius: 5px;
    float: right;
    width: 100%;
    text-align: center;
}
.vfb-submit, input[type="submit"].vfb-submit {
    background: red;
    color: #fff;
    width: 100%;
    padding: 5px 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
    text-align: center;
}
body,
a,
h1,h2,h3,h4,h5,h6,
p {
    font-family: arial, sans-serif !important;
}
body {
    background: #fff;

}
.wrapper {
    width: 960px;
    margin: 0 auto;
}
.logo {
    height: 120px;
    float: left;
    margin: 40px 0 0 30px;
}
.snow {
    float: right;
    margin: 0px;
}
h1 {
    color: #286434;
    font-size: 24px;
}
h2,
h3 {
    color: #286434;
    font-size: 24px;
}
.form {
    width: 50%;
    float: left;
    margin-right: 20px;
}
.pics {
    width: 40%;
    margin-top: 20px;
    float: right;
}
.pic {
    margin-top: 20px;
    float: right;
}
#item-vfb-2 .vfb-legend,
.vfb-section.vfb-section-2 .vfb-span,
#item-vfb-27 .vfb-legend,
#item-vfb-27 .vfb-desc  {
    display: none !important;
}
.pics img {
    margin: 10px;
    border: 1px solid #000;
}
.footer {
    width: 930px;
    margin: 20px auto ;
    text-align: center;
    border: 1px solid #000;
    padding: 15px;
    overflow: hidden;
}
.footer p {
    margin: 0 auto;
}
.header {
    border: 1px solid #000;
    width: 960px;
    margin: 10px auto;
    overflow: hidden;
}
.float_left {
    float: left;
    /*height: 150px;*/
    width: 200px;
}
.float_right {
    float: right;
    /*height: 150px;*/
    width: 200px;
}
/* Customer service snippet */
#item-vfb-43 {
    font-weight: normal;
    background: none;
    text-align: center;
}
#item-vfb-43 h4 {
    font-size: 12px !important;

}
#access-national-1 label {
    font-size: 15px !important;
}
.footer .col {
    float: left;
    width: 24%;
    border-right: 1px solid #000;
}
.footer .col.last {
    border-right: none;
}
.footer .addresses {
    clear: both;
    margin-bottom: 20px;
    display: block;
    overflow: hidden;
}

/* Hide secret box */
.vfb-item.vfb-item-secret {
    display: none !important;
}
</style>
<body>
<div class="header">

<img src="<?php echo get_stylesheet_directory_uri() ?>/img/anmlogo.png" class="logo" alt="Access National Mortgage">
<img src="http://andrewdeitrick.com/wp-content/uploads/2014/01/winter.jpg" class="snow">
</div>
<div class="wrapper">

        <?php the_content(); ?>



</div>
<div class="footer">
    <p>*All loans are subject to approval. Fees and restrictions may apply.</p>
    <span class="float_left"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fdic.png" class="fdic"></span>
    <span class="float_right"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/equal.gif" class="equal"></span>

    <div class="addresses">

        <div class="col">
            <p>1800 Robert Fulton Drive</p>
            <p>Ste. 205</p>
            <p>Reston, VA 20191</p>
        </div>

        <div class="col">
            <p>8000 Towers Crescent Drive</p>
            <p>Ste. 600</p>
            <p>Vienna, VA 22182</p>
        </div>

        <div class="col">
            <p>17301 Valley Mall Road</p>
            <p>Ste. 595</p>
            <p>Hagerstown, MD 21740</p>
        </div>

        <div class="col last">
            <p>3261 Old Washington Road</p>
            <p>Ste. 3040</p>
            <p>Waldorf, MD 20602</p>
        </div>


    </div>
    <p>NMLS ID: 408540<p>
    <p>Copyright &copy; 2014 Access National Mortgage<p>
    <p>a division of Access National Bank</p>

</div>

</body>
