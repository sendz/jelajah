<?php
  $json = array();
  $count = 0;
  if ($airport) {
    foreach ($airport as $data) {
      $json[$count]['id']         = $data->id;
      $json[$count]['iata']       = $data->iata;
      $json[$count]['icao']       = $data->icao;
      $json[$count]['name']       = $data->port_name;
      $json[$count]['city']       = $data->city_name;
      $json[$count]['country']    = $data->country;
      $json[$count]['latitude']   = $data->latitude;
      $json[$count]['longitude']  = $data->longitude;
      $json[$count]['elevation']  = $data->elev;
      $json[$count]['utc']        = $data->utc;
      $json[$count]['dst']        = $data->dst;
      $json[$count]['timezone']   = $data->timezone;
      $count++;
    }
  }

  $this->output
       ->set_content_type('application/json')
       ->set_output(json_encode(
         $json
       ));
