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
        $('#item-vfb-73').append('<img src="http://andrewdeitrick.com/wp-content/uploads/2014/01/Screen-Shot-2014-01-29-at-12.34.10-PM.png" width="450"/>');
        $('#item-vfb-74').append('<img src="http://andrewdeitrick.com/wp-content/uploads/2014/01/Screen-Shot-2014-01-29-at-12.34.19-PM.png" width="450"/>');
        $('#item-vfb-75').append('<img src="http://andrewdeitrick.com/wp-content/uploads/2014/01/Screen-Shot-2014-01-29-at-12.34.37-PM.png" width="450"/>');
        $('#item-vfb-76').append('<img src="http://andrewdeitrick.com/wp-content/uploads/2014/01/Screen-Shot-2014-01-29-at-12.34.27-PM.png" width="450"/>');
        $('#item-vfb-86').prepend('<img src="http://andrewdeitrick.com/wp-content/uploads/2014/01/SignRiderPoly.png" width="450"/>');
        $('#item-vfb-86').hide();




        $('.back').hide();
        $('.second_page').hide();
        $('.vfb-legend').hide();
        $('.vfb-section.vfb-section-2').hide();
        $('#item-vfb-68').hide();
        $('#item-vfb-67').hide();
        $('#item-vfb-73').hide();
        $('#item-vfb-74').hide();
        $('#item-vfb-75').hide();
        $('#item-vfb-76').hide();
        $('#item-vfb-85').hide();
        $('.pic').hide();
        $('.next').click(function(e) {
            $(this).hide();
            $('.back').show()
            $('.second_page').show();
            $('#item-vfb-68').show();
            $('#item-vfb-67').show();
            $('.vfb-section.vfb-section-2').show();
            $('.first_page').hide();
            $('#item-vfb-48').hide();
            $('#item-vfb-49').hide();
            $('#item-vfb-50').hide();
            $('#item-vfb-53').hide();
            $('#item-vfb-54').hide();
            $('#item-vfb-56').hide();
            $('#item-vfb-55').hide();
            $('#item-vfb-52').hide();
            $('#item-vfb-57').hide();
            $('#item-vfb-58').hide();
            $('#item-vfb-59').hide();
            $('#item-vfb-60').hide();
            $('#item-vfb-61').hide();
            $('#item-vfb-77').hide();
            $('#item-vfb-79').hide();
            $('#item-vfb-80').hide();
            $('#item-vfb-82').hide();
            $('#item-vfb-83').hide();
            $('#item-vfb-81').hide();
            $('#item-vfb-84').hide();
            $('#item-vfb-63').hide();
            $('#item-vfb-78').hide();
            $('#item-vfb-85').show();
            $('#item-vfb-86').show();




            /* Sign Photos */
            $('#item-vfb-73').show();

            $('#item-vfb-74').show();

            $('#item-vfb-75').show();

            $('#item-vfb-76').show();


            $('.pics').hide();
            $('.pic').show();
            $(".form").css('width', '100%');
            e.preventDefault();
        })
        $('.back').click(function(e) {
            $(this).hide();
            $('.second_page').hide();
            $('.first_page').show();
            $('.next').show();
            $('.vfb-section.vfb-section-2').hide();
            $('#item-vfb-48').show();
            $('#item-vfb-49').show();
            $('#item-vfb-50').show();
            $('#item-vfb-53').show();
            $('#item-vfb-52').show();
            $('#item-vfb-56').show();
            $('#item-vfb-54').show();
            $('#item-vfb-55').show();
            $('#item-vfb-57').show();
            $('#item-vfb-58').show();
            $('#item-vfb-59').show();
            $('#item-vfb-60').show();
            $('#item-vfb-61').show();
            $('#item-vfb-67').hide();
            $('#item-vfb-68').hide();
            $('#item-vfb-84').show();
            $('#item-vfb-63').show();
            $('#item-vfb-85').hide();
            $('#item-vfb-73').hide();
            $('#item-vfb-74').hide();
            $('#item-vfb-75').hide();
            $('#item-vfb-76').hide();
            $('#item-vfb-86').hide();

            $('#item-vfb-77').show();
            $('#item-vfb-79').show();
            $('#item-vfb-80').show();
            $('#item-vfb-82').show();
            $('#item-vfb-83').show();
            $('#item-vfb-81').show();
            $('#item-vfb-84').show();
            $('#item-vfb-63').show();
            $('#item-vfb-78').show();
            $(".form").css('width', '50%');

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
/* MLS # */
#item-vfb-48,
#item-vfb-77,
#item-vfb-78,
#item-vfb-79,
#item-vfb-80,
#item-vfb-82,
#item-vfb-81,
#item-vfb-83 {
    width: 20% !important;
    float: left;
    clear: none;
}
/* clear signs */
#item-vfb-73,
#item-vfb-74,
#item-vfb-75,
#item-vfb-76 {
    clear: right;
}
#item-vfb-73 select,
#item-vfb-74 select,
#item-vfb-75 select,
#item-vfb-76 select {
    width: 50px;
}

#item-vfb-68,
#item-vfb-67
 {
    width: 22% !important;
    font-size: 22px;
}
#item-vfb-67 {
    clear: left !important;
}
#item-vfb-67 {
    clear: none !important;
}

#item-vfb-85 {
    text-align: center;
    font-size: 20px;
    font-weight: bold;
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
