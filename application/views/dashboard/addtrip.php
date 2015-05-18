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
            'id'    => 'add-detail-departure'
          , 'name'  => 'add-detail-departure'
          , 'type'  => 'text'
        );
        echo form_input($add_detail_departure);
      ?>
      </div>
      <div class='input-field col s12 m6'>
      <?php
        echo form_label('Arrival','add-detail-arrival');
        $add_detail_arrival = array(
            'id'      => 'add-detail-arrival'
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
        $add_detail_etd_date = array(
            'id'      => 'add-detail-etd-time'
          , 'name'    => 'add-detail-etd-time'
          , 'type'    => 'text'
          , 'class'   => 'timepicker'
        );
        echo form_input($add_detail_etd_date);
      ?>
      </div>
    </div>
    <?php
      echo form_close();
    ?>
  </div>
</main>
