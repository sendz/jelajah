<?php
$json = array();
$count = 0;
if ($airline) {
    foreach ($airline as $data) {
        $json[$count]['id']         = $data->id;
        $json[$count]['iata']       = $data->iata;
        $json[$count]['icao']       = $data->icao;
        $json[$count]['name']       = $data->name;
        $json[$count]['alias']      = $data->alias;
        $json[$count]['calsign']    = $data->callsign;
        $json[$count]['country']    = $data->country;
        $json[$count]['active']     = $data->active;
        $count++;
    }
}

$this->output
    ->set_content_type('application/json')
    ->set_output(json_encode(
        $json
    ));
