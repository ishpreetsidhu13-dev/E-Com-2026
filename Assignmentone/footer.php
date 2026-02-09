    </div>
</main>

<!-- FOOTER -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-widgts">
            <?php if (is_active_sidebar('sidebar-1')) {
                dynamic_sidebar('sidebar-1');
            } else { ?>
                <div class="footer-abt">
                    <h3>About Me</h3>
                    <p>Only a web development student. It is on this blog that I record my achievements. Constructed through determination and much coffee.</p>
                </div>
            <?php } ?>
        </div>
        
        <p class="copyright">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. 
            Created with a lot of determination and with plenty of coffee.
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
