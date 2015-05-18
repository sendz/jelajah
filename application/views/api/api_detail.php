<?php

  $json = array();
  $count = 0;
  if ($tripdetail) {
    foreach ($tripdetail as $data) {
      $json[$count]['id']           = $data->id;
      $json[$count]['unique_id']    = $data->unique;
      $json[$count]['title']        = $data->title;
      $json[$count]['description']  = $data->description;
      $count++;
    }
  }


  $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode(
          $json
        ));
