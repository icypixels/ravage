  
</div>
<!-- END #wrapper -->

        <footer class="footer-container row-fluid">
                
                <!--Begin .copyright -->
                <div class="span8 no-bottom">
                
                        <p class="copyright">

                        <?php echo get_option(' icy_footer_text '); ?>

                        </p>
                <!--END copyright -->
                </div>

                <!--Start Zilla Social -->
                <div class="span4 no-bottom">
                    <?php if( function_exists('zilla_social') ) zilla_social(); ?>
                </div>
                <!--END Zilla Social -->

        </footer>

        <!-- Theme Hook -->
    	<?php wp_footer(); ?>


			
<!--END body-->
</body>
<!--END html-->
</html>