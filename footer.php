        </div> <!-- .ib-wrapper ends -->
        <footer class="ib-footer">
            
            <!-- <div class="ib-instagram-feed">
                <h2>Nava</h2>
                <a href="https://instagram.com/irisbergmann_photography" target="_blank">@irisbergmann_photography</a>
                <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'stillingar_vefsidan',
                        'p' => 'fotur'
                    ) );
                
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                ?>
                
                    <?php echo get_field('field_5c9bdf3231993'); // Headline ?>
                    
                <?php    


                        }
                    }
                    wp_reset_postdata();
                ?>
            </div> -->

            <!-- <div class="ib-footer-wp-menu">
                <?php
                    wp_nav_menu('2');
                ?>
            </div> -->
            <div class="copyright">
                <h4>&copy;<?php echo date("Y"); ?> | NAVA - Import / Export | Allur&nbsp;réttur áskilinn.</h4>
                <a href="https://740.is" target="_blank" style="font-size: 0.65em; text-decoration: none; color: #d2d2d2;">740.is</a>
		    </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html> 