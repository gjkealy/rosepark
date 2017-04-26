<header class="banner">
  <nav class="navbar navbar-toggleable-sm navbar-light bg-faded">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav mr-auto']);
          endif;
          ?>
      </div>
    </div>
  </nav>
</header>
