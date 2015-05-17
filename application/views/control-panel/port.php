<main>
	<div class="row">
		<div class="col s11 offset-s1">
			<ul class="tabs">
				<li class="tab col s3"><a href="#airport">Airport</a></li>
				<li class="tab col s3"><a href="#trainstation">Train Station</a></li>
				<li class="tab col s3"><a href="#busstation">Bus Station</a></li>
				<li class="tab col s3"><a href="#seaport">Seaport</a></li>
			</ul>
		</div>
		<div id="airport" class="col s10 offset-s1">
			<table class="hoverable">
				<thead>
					<tr>
						<th>Code</th>
						<th>City</th>
						<th>Country</th>
						<th>Location</th>
						<th>Category</th>
						<th>Timezone</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
<?php
	if ($airport) {
		foreach ($airport as $data) {
			?>
					<tr>
						<td><?php echo $data->code; ?></td>
						<td><?php echo $data->city; ?></td>
						<td><?php echo $data->country; ?></td>
						<td><?php echo $data->location; ?></td>
						<td><?php echo $data->category; ?></td>
						<td><?php echo $data->timezone; ?></td>
						<td>
								<a class="waves-effect waves-dark btn-flat" href="<?php echo base_url() . index_page(); ?>/control-panel/port/edit/<?php echo $data->id; ?>">Edit</a>
								<a onclick="deleteThisThing(<?php echo $data->id; ?>)" class="waves-effect waves-dark btn-flat">Delete</a>
						</td>
					</tr>
			<?php
		}
	}
?>
				</tbody>
			</table>
		</div>
		<div id="trainstation" class="col s10 offset-s1">
			<table class="hoverable">
				<thead>
					<tr>
						<th>Code</th>
						<th>City</th>
						<th>Country</th>
						<th>Location</th>
						<th>Category</th>
						<th>Timezone</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
<?php
	if ($trainstation) {
		foreach ($trainstation as $data) {
			?>
					<tr>
						<td><?php echo $data->code; ?></td>
						<td><?php echo $data->city; ?></td>
						<td><?php echo $data->country; ?></td>
						<td><?php echo $data->location; ?></td>
						<td><?php echo $data->category; ?></td>
						<td><?php echo $data->timezone; ?></td>
						<td>
								<a class="waves-effect waves-dark btn-flat" href="<?php echo base_url() . index_page(); ?>/control-panel/port/edit/<?php echo $data->id; ?>">Edit</a>
								<a onclick="deleteThisThing(<?php echo $data->id; ?>)" class="waves-effect waves-dark btn-flat">Delete</a>
						</td>
					</tr>
			<?php
		}
	}
?>
				</tbody>
			</table>
		</div>
		<div id="busstation" class="col s10 offset-s1">
			<table class="hoverable">
				<thead>
					<tr>
						<th>Code</th>
						<th>City</th>
						<th>Country</th>
						<th>Location</th>
						<th>Category</th>
						<th>Timezone</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
<?php
	if ($busstation) {
		foreach ($busstation as $data) {
			?>
					<tr>
						<td><?php echo $data->code; ?></td>
						<td><?php echo $data->city; ?></td>
						<td><?php echo $data->country; ?></td>
						<td><?php echo $data->location; ?></td>
						<td><?php echo $data->category; ?></td>
						<td><?php echo $data->timezone; ?></td>
						<td>
								<a class="waves-effect waves-dark btn-flat" href="<?php echo base_url() . index_page(); ?>/control-panel/port/edit/<?php echo $data->id; ?>">Edit</a>
								<a onclick="deleteThisThing(<?php echo $data->id; ?>)" class="waves-effect waves-dark btn-flat">Delete</a>
						</td>
					</tr>
			<?php
		}
	}
?>
				</tbody>
			</table>
		</div>
		<div id="seaport" class="col s10 offset-s1">
			<table class="hoverable">
				<thead>
					<tr>
						<th>Code</th>
						<th>City</th>
						<th>Country</th>
						<th>Location</th>
						<th>Category</th>
						<th>Timezone</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
<?php
	if ($seaport) {
		foreach ($seaport as $data) {
			?>
					<tr>
						<td><?php echo $data->code; ?></td>
						<td><?php echo $data->city; ?></td>
						<td><?php echo $data->country; ?></td>
						<td><?php echo $data->location; ?></td>
						<td><?php echo $data->category; ?></td>
						<td><?php echo $data->timezone; ?></td>
						<td>
								<a class="waves-effect waves-dark btn-flat" href="<?php echo base_url() . index_page(); ?>/control-panel/port/edit/<?php echo $data->id; ?>">Edit</a>
								<a onclick="deleteThisThing(<?php echo $data->id; ?>)" class="waves-effect waves-dark btn-flat">Delete</a>
						</td>
					</tr>
			<?php
		}
	}
?>
				</tbody>
			</table>
		</div>
		<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
			<a class="btn-floating btn-large red">
				<i class="large mdi-content-add"></i>
			</a>
			<ul>
				<li><a class="btn-floating red" href="<?php echo base_url() . index_page(); ?>/control-panel/port/add/airport"><i class="large mdi-maps-local-airport"></i></a></li>
				<li><a class="btn-floating yellow darken-1" href="<?php echo base_url() . index_page(); ?>/control-panel/port/add/railstation"><i class="large mdi-maps-directions-train"></i></a></li>
				<li><a class="btn-floating green" href="<?php echo base_url() . index_page(); ?>/control-panel/port/add/busstation"><i class="large mdi-maps-directions-bus"></i></a></li>
				<li><a class="btn-floating blue" href="<?php echo base_url() . index_page(); ?>/control-panel/port/add/seaport"><i class="large mdi-maps-directions-ferry"></i></a></li>
			</ul>
		</div>
	</div>
</main>

<!-- modal -->
<div id="confirm-delete" class="modal">
	<div class="modal-content">
		<h4>Delete Confirmation</h4>
		<p>
			Are you sure you want to delete the data? This will not be undone
		</p>
	</div>
	<div class="modal-footer">
		<a href="#" id="delete-button" onclick="delete(id)" class="modal-action modal-close waves-effect waves-dark btn-flat">Confirm</a>
		<a href="#" class="modal-action modal-close waves-effect waves-dark btn-flat">Cancel</a>
	</div>
</div>
