<?php get_header(); ?>
<script>
$(document).ready(function() {

    $('a').click(function(){
        var distance = $(this).attr('href')
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 500);
        return false;
    });
    var width = $(document).width() / 2;
    $('.mandala').css({"left": width, "width": width});

    $('.gradient').click(function() {
        $(this).toggleClass('full_size');
        $(this).next().toggleClass('full_size');
    });

});

</script>
<div class="mandala"></div>

<div class="page_wrap">
    <div id="first_stop">
        <div class="first_stop section">

            <div class="left_half">
                <p class="introduction">Hello, my name is <span>McCartney Bohn
                </span> and I design and build awesome websites and applications.</p>
                <p class="text">My specialties include WordPress websites, responsive design, and general front end development. I also have experience with Ruby on Rails, PhoneGap, and a variety of Javascript libraries.</p>
                <p class="text">I’m currently accepting full-time work offers as well as freelance work. Find my <a href="#contact">contact information here.</a></p>
                <p class="text">Click <a href="http://andrewdeitrick.com/wp-content/themes/__AndrewDeitrickPortfolio/andrew_deitrick_resume.pdf">here</a> to download my resume.</p>
                <a class="started blue_button" href="#second_stop">Let's Get Started</a>
            </div><!-- .left_half -->

        </div><!-- .first_stop -->
    </div>

    <div id="second_stop">
        <div class="second_stop section">

            <h2 class="featured_work river_color">River and Rail Restaurant <span>WordPress Development, jQuery, CSS3</span></h2>

            <div class="excerpt">
                <p class="text about_this">About this project:</p>
                <p class="text">This was a project in partnership with Escape Creative out of Richmond, Virginia. I was responsible for taking a Photoshop file and bringing it to life on the web.</p>
                <p class="text">The site features a jQuery tab-menu, CSS3 transitions, and implementation with the Open Table software.</p>

            <a href="#third_stop" class="blue_button">More Work</a>


            </div>
            <div class="featured_image">

                <div class="gradient"></div>
                <div class="work_pic rr"></div>
            </div>
            <a href="#third_stop" class="mobile_hide blue_button">More Work</a>

        </div><!-- .second_stop -->
    </div><!-- #second_stop -->


    <div id="third_stop">
        <div class="third_stop section">

            <h2 class="featured_work mason_blue">Sleep Better Virginia <span>WordPress Development &amp; Design, jQuery</span></h2>

            <div class="excerpt">
                <p class="text about_this">About this project:</p>
                <p class="text">This was a project in partnership with Escape Creative out of Richmond, Virginia. My contributions include the design and WordPress Development.</p>
                <p class="text">The site features a jQuery slider and CSS3 transitions.</p>

                <a href="#responsive_portfolio" class="blue_button">Continue</a>


            </div>

            <div class="featured_image">
                <div class="gradient"></div>
                <div class="work_pic emason"></div>
            </div>

            <a href="#responsive_portfolio" class="mobile_hide blue_button">Continue</a>


        </div><!-- .third_stop -->
    </div><!-- #third_stop -->

    <div id="responsive_portfolio">
        <div class="responsive_portfolio section">

            <h2 class="featured_work">McCartneyBohn.com <span>Responsive Design</span></h2>

            <div class="excerpt">
                <p class="text about_this">About this project:</p>
                <p class="text">When redesigning my personal portfolio, I was sure to include responsive styles for mobile and tablets.</p>
                <p class="text"> The responsive design on this site is custom built, although  I have experience using responsive frameworks such as Bootstrap and Foundation.</p>
                <a href="#contact" class="blue_button">Continue</a>

            </div>

            <div class="featured_image">
                <div class="mobile_pic portfolio2"></div>
                <div class="mobile_pic portfolio"></div>
            </div>

            <a href="#contact" class="mobile_hide blue_button">Continue</a>


        </div><!-- repsonsive_portfolio section -->
    </div><!-- #responsive_portfolio -->




    <div id="contact">
        <div class="contact section">
            <h2 class="featured_work">About me</h2>

            <div class="left_half">

                <p class="text">My name is McCartney Bohn and I build a wide range of things for the web. My specialities include front-end design and development, WordPress, and responsive design. I also have experience with PhoneGap for iOS applications and programming in Ruby on Rails.</p>
                <p class="text">When I'm not writing code, I enjoy spending time outdoors, hiking, playing golf &amp; ice hockey, and reading. Fun fact, I once walked 500-miles across Spain with only a backpack on the <a href="http://en.wikipedia.org/wiki/Way_of_St._James" target="_blank">Camino de Santiago</a>.</p>
                <p class="text">I'm currently accepting full-time offers as well as freelance contracts. Download my <a href="http://andrewdeitrick.com/wp-content/themes/__AndrewDeitrickPortfolio/andrew_deitrick_resume.pdf">resume</a> or get in touch with my here.</p>
                    <div class="social_container">
                        <a class="twitter social" href="http://twitter.com/d_trickk" target="_blank"></a>
                        <a class="github social" href="http://github.com/deitrick" target="_blank"></a>
                        <a class="linkedin social" href="http://www.linkedin.com/pub/andrew-deitrick/28/1b0/109/" target="_blank"></a>
                    </div>
            </div><!-- .left_half -->

            <div class="right_half">
                <div id="wufoo-z7x3k1">
                Fill out my <a href="https://dtrick.wufoo.com/forms/z7x3k1">online form</a>.
                </div>
                <script type="text/javascript">var z7x3k1;(function(d, t) {
                var s = d.createElement(t), options = {
                'userName':'dtrick',
                'formHash':'z7x3k1',
                'autoResize':true,
                'height':'497',
                'async':true,
                'header':'show',
                'ssl':false};
                s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
                s.onload = s.onreadystatechange = function() {
                var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
                try { z7x3k1 = new WufooForm();z7x3k1.initialize(options);z7x3k1.display(); } catch (e) {}};
                var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
})(document, 'script');</script>


            </div><!-- .right_half -->


        </div><!-- #fourth_stop -->

    </div><!-- .section -->

</div><!-- .page_wrap -->


<?php get_footer(); ?>
