<main>
  <div class='container'>
    <?php
      echo form_open();
    ?>
    <div class='row'>
      <div class='input-field col s12 m6'>
      <?php
        echo form_label('Departure','add-detail-departure');
        $add_detail_departure = array(
            'id'        => 'add-detail-departure'
          , 'class'     => 'typeahead'
          , 'name'      => 'add-detail-departure'
          , 'type'      => 'text'
          //, 'ng-model'  => 'AirportKeyword'
        );
        echo form_input($add_detail_departure);
      ?>
      </div>
      <div class='input-field col s12 m6'>
      <?php
        echo form_label('Arrival','add-detail-arrival');
        $add_detail_arrival = array(
            'id'      => 'add-detail-arrival'
          , 'class'   => 'typeahead'
          , 'name'    => 'add-detail-arrival'
          , 'type'    => 'text'
        );
        echo form_input($add_detail_arrival);
      ?>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m4">
      <?php
        echo form_label('Date to Depart','add-detail-etd');
        $add_detail_etd = array(
            'id'      => 'add-detail-etd'
          , 'name'    => 'add-detail-etd'
          , 'type'    => 'text'
          , 'class'   => 'datepicker'
        );
        echo form_input($add_detail_etd);
      ?>
      </div>
      <div class="input-field col s12 m2">
      <?php
        echo form_label('Time','add-detail-etd-time');
        $add_detail_etd_time = array(
            'id'      => 'add-detail-etd-time'
          , 'name'    => 'add-detail-etd-time'
          , 'type'    => 'text'
          , 'class'   => 'timepicker'
        );
        echo form_input($add_detail_etd_time);
      ?>
      </div>
      <div class="input-field col s12 m4">
      <?php
        echo form_label('Date to Arrive','add-detail-eta');
        $add_detail_eta = array(
            'id'      => 'add-detail-eta'
          , 'name'    => 'add-detail-eta'
          , 'type'    => 'text'
          , 'class'   => 'datepicker'
        );
        echo form_input($add_detail_eta);
      ?>
      </div>
      <div class="input-field col s12 m2">
      <?php
        echo form_label('Time','add-detail-eta-time');
        $add_detail_eta_time = array(
            'id'      => 'add-detail-eta-time'
          , 'name'    => 'add-detail-eta-time'
          , 'type'    => 'text'
          , 'class'   => 'timepicker'
        );
        echo form_input($add_detail_eta_time);
      ?>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6">
      <?php
        #echo form_label('Carrier (Airline or Transporter Name)','add-detail-carrier');
        $add_detail_carrier = array(
            'id'      => 'add-detail-carrier'
          , 'name'    => 'add-detail-carrier'
          , 'type'    => 'text'
          , 'class'   => 'airlinetypeahead'
          , 'placeholder' => 'Carrier (Airline or Transporter Name)'
        );
        echo form_input($add_detail_carrier);
      ?>
      </div>
      <div class="input-field col s12 m3">
      <?php
        echo form_label('Flight Number *if any','add-detail-flight-number');
        $add_detail_flight_number = array(
            'id'      => 'add-detail-flight-number'
          , 'name'    => 'add-detail-flight-number'
          , 'type'    => 'text'
        );
        echo form_input($add_detail_flight_number);
      ?>
      </div>
      <div class="input-field col s12 m3">
      <?php
        echo form_label('Booking Code *if any','add-detail-booking-code');
        $add_detail_booking_code = array(
            'id'      => 'add-detail-booking-code'
          , 'name'    => 'add-detail-booking-code'
          , 'type'    => 'text'
        );
        echo form_input($add_detail_booking_code);
      ?>
      </div>
      <div class="input-field col s12">
      <?php
        echo form_label('Itinerary notes and description','add-detail-note');
        $add_detail_note = array(
            'id'      => 'add-detail-note'
          , 'name'    => 'add-detail-note'
          , 'class'   => 'materialize-textarea'
        );
        echo form_textarea($add_detail_note);
      ?>
      </div>
      <div class="input-field col s12">
        <button class="btn-flat waves-effect waves-light grey-text left" id="add-detail-cancel" name="add-detail-cancel" onClick="historyBack()">Cancel</button>
        <button class="btn waves-effect waves-light right" id="add-detail-submit" name="add-detail-submit" type="submit">Save Itinerary</button>
      </div>
    </div>
    <?php
      echo form_close();
    ?>
  </div>
</main>
