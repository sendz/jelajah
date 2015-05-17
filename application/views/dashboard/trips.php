<main>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h3>Your Trip</h3>
        <!-- Search Bar -->
        <nav>
          <div class="nav-wrapper">
            <form>
              <div class="input-field">
                <input id="search" type="search" required placeholder="Find Your Trip" ng-model="findTrip">
                <label for="search"><i class="mdi-action-search"></i></label>
                <i class="mdi-navigation-close"></i>
              </div>
            </form>
          </div>
        </nav>
        <!-- End of Search Bar -->

        <!-- Cards of Trip -->
        <div class="card-wrapper" ng-controller="TripListController">
          <div class="card white" ng-repeat="trip in trips | filter:findTrip">
            <div class="card-content black-text">
              <span class="card-title black-text">
                {{trip.title}}
              </span>
              <p>
                {{trip.description}}
              </p>
            </div>
            <div class="card-action">
              <a href="#"></a>
              <a href="#{{trip.unique_id}}" class="right">View</a>
            </div>
          </div>
        </div>
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
