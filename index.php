<?php get_header(); ?>
        <div id="fb-root"></div>
        <script>
        // Facebook
        (function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=523675277677074"; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));
        // Twitter
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
        </script>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header class="video">
            <div class="title">
                <img src="<?php bloginfo('template_url'); ?>/img/siphon.png" alt="Siphon">
                <h1 class="tagline">Harness Nature. Save The World.</h1>
                <h4>A 2D Platformer that tests your puzzle-solving mettle.</h4>
            </div>
            <section class="sun">
              <h1>
                <span>Available</span><br>5.2.14
              </h1>
            </section>
            <video class="background" autoplay loop="true">
                <source src="<?php bloginfo('template_url'); ?>/video/waterfall.webm" type="video/webm">
                <source src="<?php bloginfo('template_url'); ?>/video/waterfall.mp4" type="video/mp4">
            </video>
        </header>
        <section class="social">
            <div class="container">
                <div class="col-md-12 clearfix">
                    <div>
                        <div class="fb-like" data-href="https://facebook.com/playsiphon" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                        <a href="https://twitter.com/playsiphon" class="twitter-follow-button" data-dnt="true" data-show-count="false">Follow @playsiphon</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="greenlight">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3">
                        <a href="http://steamcommunity.com/sharedfiles/filedetails/?id=211249666">
                            <img src="<?php bloginfo('template_url'); ?>/img/steam-greenlight.jpg" alt="Steam Greenlight" class="greenlight center-block">
                        </a>
                    </div>
                    <div class="col-xs-9">
                        <p>Check out Siphon on Steam Greenlight. With enough support, Steam will reach out to help us get our game on their platform.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <article>
                            <h1 class="tagline">The Story.</h1>
                            <p>Siphon revolves around a distant planet not too much unlike Earth. Rich and diverse locations await discovery. Environments range from dense jungles to the rocky peaks and crevasses of grandiose mountain ranges. Deep, dark cave systems perforate the world as well as murky, foul swamps and desolate wastelands. However, unlike Earth, this place’s beauty is being threatened by a parasitic race that intends to upset the very balance of the entire planet. All hope rests in the capable hands of Trella, a plant creature from a remote and peaceful plant village hidden in the thickest part of the jungle.</p>
                            <p>Trella fights through a variety of environments to hunt down and vanquish the source of the impending doom on her planet. She will use the very plants themselves to defend against this oppressive enemy. She will journey to the depths of the foul creatures’ lair. She will extinguish all who oppose. And after all the dust has settled and peace has been restored, maybe, just maybe, she will return to her peaceful village hidden in the trees . . . or maybe her journey has just begun.</p>
                        </article>
                    </div>
                    <div class="col-md-5 posts">
                        <h1 class="tagline">Our Blog.</h1>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="list-group">
                            <div class="gutter">
                                <small><?php the_time('F jS, Y') ?></small>
                            </div>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="list-group-item">
                                <h4 class="list-group-item-heading"><?php the_title(); ?></h4>
                                <h5>By <?php the_author(); ?></h5>
                            </a>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
            <div class="wall">
                <img class="rock-1" src="<?php bloginfo('template_url'); ?>/img/wall.png" alt="">
                <img class="rock-2" src="<?php bloginfo('template_url'); ?>/img/wall.png" alt="">
                <iframe width="853" height="480" src="//www.youtube.com/embed/j7fkXUyCeGg" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <article>
                            <h1 class="tagline">Getting Involved.</h1>
                            <p>Siphon is a Capstone project realized by students in the Interdisciplinary Film and Digital Media program at the University of New Mexico. Given our situations, we are always looking for helping hands.</p>
                            <p>If you are interested in developing an amazing 2D platformer, contact <a href="mailto:ifdmcapstone2013@gmail.com">Sophia Baldonado</a>, Siphon's Producer.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>
