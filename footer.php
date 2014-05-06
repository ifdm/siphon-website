        <footer>
            <?php wp_footer(); ?>
            <section class="container">
                <div class="row">
                    <div class="col-md-12">
                        <article>
                            <ul>
                                <li>Nathan Spencer</li>
                                <li>Jeannette Arroyo</li>
                                <li>Michelle De La Garza</li>
                                <li>Stephanie Galliart</li>
                                <li>Maryse Ayub</li>
                                <li>Ezra Stallings</li>
                                <li>Kyle Leisker-Krohn</li>
                                <li>Nolan Blankenship</li>
                                <li>Bj<a href="http://trey.io/idk.png">&#248;</a>rn Swenson</li>
                                <li>Graciela Ruiz</li>
                                <li>Evan Slagle</li>
                                <li>Sophia Baldonado</li>
                                <li>Trey Cordova</li>
                            </ul>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-right">
                        <p class="text-muted">All Rights Reserved. Copyright &copy; 2013, Interdisciplinary Film and Digital Media, University of New Mexico.</p>
                    </div>
                </div>
            </section>
        </footer>

        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-37381091-2']);
        _gaq.push(['_trackPageview']);
        
        var downloads = document.getElementsByClassName('sun')[0];
        downloads.onclick = function(e) {
            var href;

            if(e.target.tagName.toLowerCase() !== 'a') href = e.target.parentNode.href;
            else href = e.target.href;

            setTimeout(function(){ _gaq.push(['_trackEvent','Download','<?php echo get_operating_system(); ?>',href]); }, 150);
        };

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
        </script>
    </body>
</html>