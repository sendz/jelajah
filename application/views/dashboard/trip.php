<main>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <!-- Cards of Trip -->
        <div class="card-wrapper" ng-controller="TripDetailController" ng-init="unIque(<?php echo $this->uri->segment(4); ?>)">
          <div class="card white" ng-repeat="detail in details | filter:findTrip">
            <div class="card-content black-text">
              <span class="card-title black-text">
                {{detail.title}}
              </span>
              <p>
                {{detail.description}}
              </p>

            </div>
            <div class="card-action">
              <a href="#"></a>
              <a href="<?php echo base_url() . index_page(); ?>/dashboard/trip/detail/{{detail.unique_id}}" class="right">View</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Search Bar -->
    <div class="row">
      <div class="col s12">

    <nav>
      <div class="nav-wrapper">
        <form>
          <div class="input-field">
            <input id="search" type="search" required placeholder="Find Your Itinerary" ng-model="findTrip">
            <label for="search"><i class="mdi-action-search"></i></label>
            <i class="mdi-navigation-close"></i>
          </div>
        </form>
      </div>
    </nav>
    <!-- End of Search Bar -->
      </div>
    </div>
    <div class="row">
      <div class="col s12">

        <!-- Trip Detail -->
        <ul class="collapsible" data-collapsible="accordion">
          <li>
            <div class="collapsible-header">
              <span class="col s4">
                <i class="mdi-maps-flight left"></i>JOG - CGK | GA220
              </span>
              <span class="col s5">
                <i class="mdi-device-access-time left"></i>2015/05/20 12:00 - 2015/05/20 13:10
              </span>
              <span class="col s3 right">
                <a href="#" class="right"><i class="mdi-action-add-shopping-cart left"></i>Buy Ticket</a>
              </span>
            </div>
            <div class="collapsible-body">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </li>
          <li>
            <div class="collapsible-header">
              <span class="col s4">
                <i class="mdi-maps-directions-train left"></i>JKT - YK | Pasundan
              </span>
              <span class="col s5">
                <i class="mdi-device-access-time left"></i>2015/05/20 12:00 - 2015/05/20 13:10
              </span>
              <span class="col s3 right">
                <a href="#" class="right"><i class="mdi-action-add-shopping-cart left"></i>Buy Ticket</a>
              </span>
            </div>
            <div class="collapsible-body">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</main>

<div id="add-trip" class="modal">
      <?php
        $form_attribute = array(
            'class' => 'form'
          , 'id'    => 'form-add-trip'
        );
        echo form_open('',$form_attribute);
      ?>
  <div class="modal-content">
    <div class="row">
      <div class="col s12">
        <h4>Add new Trip</h4>
      </div>
      <div class="input-field col s12">
        <?php
          echo form_label('Title','add-trip-title');
          $add_trip_title = array(
              'name'      => 'add-trip-title'
            , 'id'        => 'add-trip-title'
            , 'type'      => 'text'
            , 'required'  => 'required'
          );
          echo form_input($add_trip_title);
        ?>
      </div>
      <div class="input-field col s12">
        <?php
          echo form_label('Description','add-trip-description');
          $add_trip_description = array(
              'name'      => 'add-trip-description'
            , 'id'        => 'add-trip-description'
            , 'class'     => 'materialize-textarea'
          );
          echo form_textarea($add_trip_description);
        ?>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <div class="col s12">
      <button type="submit" name="button-submit-trip" class="btn-flat waves-effect waves-light"><i class="mdi-content-send right"></i>Add Trip</button>
    </div>
  </div>
    <?php echo form_close(); ?>
</div>
<script charset="utf-8">
  var uniqueID = '<?php echo $this->uri->segment(4); ?>';
</script>
