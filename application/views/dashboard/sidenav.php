<?php
  $link_active = $this->uri->segment(2);
?>
<nav>
	<div class="nav-wrapper">
    <div class="container">
      <a href="#" data-activates="mobile-dashboard-nav" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
  	  <a href="#" class="brand-logo center">Jelajah</a>
      <ul class="side-nav fixed">
        <li class="logo">
          <a href="#" class="">
            <object>
              <h3>AVATAR</h3>
            </object>
          </a>
        </li>
        <li class="<?php if ($link_active=='trip') echo 'active';?>"><a href="#"><i class="mdi-maps-flight left"></i>Your Trip</a></li>
        <li class=""><a href="#"><i class="mdi-social-person left"></i>Your Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="mdi-navigation-close left"></i>Sign Out</a></li>
      </ul>
    </div>
	</div>
</nav>
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a <?php if ($link_active=='trip') echo "onClick='addTrip()'"; ?> class="btn-floating btn-large red">
    <i class="large mdi-content-add"></i>
  </a>
  <?php if ($link_active!='trip'): ?>
  <ul>
    <li><a class="btn-floating red" href="<?php echo base_url() . index_page(); ?>/control-panel/port/add/airport"><i class="large mdi-maps-local-airport"></i></a></li>
    <li><a class="btn-floating yellow darken-1" href="<?php echo base_url() . index_page(); ?>/control-panel/port/add/railstation"><i class="large mdi-maps-directions-train"></i></a></li>
    <li><a class="btn-floating green" href="<?php echo base_url() . index_page(); ?>/control-panel/port/add/busstation"><i class="large mdi-maps-directions-bus"></i></a></li>
    <li><a class="btn-floating blue" href="<?php echo base_url() . index_page(); ?>/control-panel/port/add/seaport"><i class="large mdi-maps-directions-ferry"></i></a></li>
  </ul>
  <?php endif; ?>
</div>
