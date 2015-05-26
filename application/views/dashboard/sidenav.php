<?php
  $sidenav_active = $this->uri->segment(2);
  $link_active = $this->uri->segment(3);
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
        <li class="<?php if ($sidenav_active=="trip") echo "active";?>"><a href="<?php echo base_url() . index_page();?>/dashboard/trip"><i class="mdi-maps-flight left"></i>Your Trip</a></li>
        <li class=""><a href="#"><i class="mdi-social-person left"></i>Your Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="mdi-navigation-close left"></i>Sign Out</a></li>
      </ul>
    </div>
	</div>
</nav>
<?php if ($this->uri->segment(3)!='add'): ?>
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a <?php if ($link_active!='detail') echo "onClick='addTrip()'"; ?> class="btn-floating btn-large red">
    <i class="large mdi-content-add"></i>
  </a>
  <?php if ($link_active=='detail'): ?>
  <ul>
    <li><a class="btn-floating tooltipped red" data-position="left" data-tooltip="Flight" href="<?php echo base_url() . index_page(); ?>/dashboard/trip/add/air"><i class="large mdi-maps-local-airport"></i></a></li>
    <li><a class="btn-floating tooltipped yellow darken-1" data-position="left" data-tooltip="Train" href="<?php echo base_url() . index_page(); ?>/dashboard/trip/add/train"><i class="large mdi-maps-directions-train"></i></a></li>
    <li><a class="btn-floating tooltipped green" data-position="left" data-tooltip="Bus" href="<?php echo base_url() . index_page(); ?>/dashboard/trip/add/bus"><i class="large mdi-maps-directions-bus"></i></a></li>
    <li><a class="btn-floating tooltipped blue" data-position="left" data-tooltip="Ship" href="<?php echo base_url() . index_page(); ?>/dashboard/trip/add/sea"><i class="large mdi-maps-directions-ferry"></i></a></li>
    <li><a class="btn-floating tooltipped green darken-2" data-position="left" data-tooltip="Place" href="<?php echo base_url() . index_page(); ?>/dashboard/trip/add/place"><i class="large mdi-maps-terrain"></i></a></li>
  </ul>
  <?php endif; ?>
</div>
<?php endif; ?>
