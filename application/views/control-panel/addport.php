<?php
	$action		= $this->uri->segment(3);
	$category = $this->uri->segment(4);
	if ($action=="edit")
	{
		if ($port)
		{
			foreach ($port as $data)
			{
				$category = $data->category;
				$id 			= $data->id;
				$code 		= $data->code;
				$city			= $data->city;
				$country	= $data->country;
				$location	= $data->location;
				$timezone	= $data->timezone;
			}
		}
		$goaction = "update/".$id;
		$title 		= "Edit port data with id:";
	}
	else
	{
		$id 				= "";
		$code 			= "";
		$city 			= "";
		$country 		= "";
		$location 	= "";
		$timezone 	= "";
		$goaction 	= "insert";
		$title 			= "Add";
	}
?>

<main>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h4><?php echo $title . " " . $category; ?></h4>
				<?php
					echo form_open("control-panel/port/".$goaction);
					echo form_hidden("port-add-category","$category");
				?>
				<div class="row">
					<div class="input-field col s12">
						<?php
							echo form_label('Port Code','port-add-code');
							$port_add_code = array(
								  'id'			=> 'port-add-code'
								, 'name'		=> 'port-add-code'
								, 'type'		=> 'text'
								, 'value'		=> $code
								);
							echo form_input($port_add_code);
						?>
					</div>
					<div class="input-field col s12">
						<?php
							echo form_label('City','port-add-city');
							$port_add_city = array(
								  'id'			=> 'port-add-city'
								, 'name'		=> 'port-add-city'
								, 'type'		=> 'text'
								, 'value'		=> $city
								);
							echo form_input($port_add_city);
						?>
					</div>
					<div class="input-field col s12">
						<?php
							echo country_dropdown('port-add-country', 'port-add-country', '',$country, array('US','ID','CA','GB'),TRUE);
							echo form_label('Country','port-add-country');
						?>
					</div>
					<div class="input-field col s12">
						<?php
							echo form_label('Location','port-add-location');
							$port_add_location = array(
								  'id'				=> 'port-add-location'
								, 'name'			=> 'port-add-location'
								, 'type'			=> 'textarea'
								, 'class'			=> 'materialize-textarea'
								, 'value'			=> $location
							);
							echo form_textarea($port_add_location);
						?>
					</div>
					<div class="input-field col s12">
						<?php
							echo form_label('Timezone','port-add-timezone');
							$port_add_timezone = array(
								  'id'					=> 'port-add-timezone'
								, 'name'				=> 'port-add-timezone'
								, 'type'				=> 'number'
								, 'value'				=> $timezone
							);
							echo form_input($port_add_timezone);
						?>
					</div>
					<div class="input-field col s12">
						<?php
							$port_add_submit = array(
								  'id'					=> 'port-add-submit'
								, 'type'				=> 'submit'
								, 'content'			=> '<i class="mdi-content-send right"></i>Add'
								, 'class'		=> 'btn right waves-effect waves-light'
							);
							echo form_button($port_add_submit);
						?>
					</div>
				</div>
				<?php
					echo form_close();
				?>
			</div>
		</div>
	</div>
</main>
