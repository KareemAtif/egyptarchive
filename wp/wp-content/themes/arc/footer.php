<?php
/**
* @package arc
* @since 2.0
* @name Footer Template
**/
 ?>
</main>
<?php if(!is_404()): ?>
 <footer class="text-center">
   <div class="col5 centered">
     <div class="header">
       <div class="logo">
         <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
           <img src="<?php echo esc_url(get_theme_mod('arc_logo')); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
         </a>
       </div>
     </div>
     <div class="body">
       <?php
       wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'main-menu', 'container' => false));
       wp_nav_menu(array('theme_location' => 'secondary', 'menu_class' => 'sec-menu', 'container' => false)); ?>   
     </div>
          <div class="footer">
       <?php get_template_part('temps/content', 'credit'); ?>
     </div>
   </div>
 </footer>
 <?php endif; ?>
 <?php wp_footer(); ?>
 </body>
 </html>
