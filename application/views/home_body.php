	<!-- Parallax 
		do we need parallax? yes, we do
	-->
	<!-- Our magic starts here -->
	<div class="parallax-container" id="parallax-one">
		<div class="parallax">
			<img src="<?php echo base_url() . '/uilibs/media/image/snapshot1.png';?>">
			<div class="">
				<h3>This is caption</h3>
			</div>
		</div>
	</div>
	<!-- Section One -->
	<div class="container">
		<div class="col s12">
			<!-- Content for section-one -->
			<section class="section white" id="section-one">
				<div class="row">
<?php 
if ($query) :
	foreach ($query as $item) :
		if ($item->row=="section-one") :?>
					<div class="col s12 m4" id="<?php echo $item->section; ?>">
						<h4><?php echo $item->title; ?></h4>
						<?php echo $item->content;?>
						<div class="clearfix">
							<?php echo $item->custom; ?>
						</div>
					</div>

<?php
		endif;
	endforeach;
endif;
?>
				</div>
			</section>
		</div>
	</div>
	<div class="parallax-container" id="parallax-two">
		<div class="parallax">
			<img src="<?php echo base_url() . '/uilibs/media/image/snapshot1.png';?>">
		</div>
	</div>
	<div class="red lighten-2 grey-text text-lighten-4">
		<div class="container">
			<div class="col s12">
				<section class="section" id="section-two">

					<div class="row">
<?php 
if ($query) :
	foreach ($query as $item) :
		if ($item->row=="section-two") :?>
					<div class="col s12 m4" id="<?php echo $item->section; ?>">
						<h4><?php echo $item->title; ?></h4>
						<?php echo $item->content;?>
						<div class="clearfix">
							<?php echo $item->custom; ?>
						</div>
					</div>

<?php
		endif;
	endforeach;
endif;
?>
					</div>
				</section>
			</div>
		</div>
	</div>
	
	<div class="parallax-container" id="parallax-three">
		<div class="parallax">
			<img src="<?php echo base_url() . '/uilibs/media/image/snapshot1.png';?>">
		</div>
	</div>
	
	<div class="red darken-2 grey-text text-lighten-5">
		<div class="container">
			<div class="col s12">
				<section class="section" id="three">
					<div class="row">
<?php 
if ($query) :
	foreach ($query as $item) :
		if ($item->row=="section-three") :?>
					<div class="col s12 m4" id="<?php echo $item->section; ?>">
						<h4><?php echo $item->title; ?></h4>
						<?php echo $item->content;?>
						<div class="clearfix">
							<?php echo $item->custom; ?>
						</div>
					</div>

<?php
		endif;
	endforeach;
endif;
?>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- And the magic end here -->
	<div class="red darken-4 grey-text text-lighten-5">
		<div class="container">
			<div class="col s12">
				<section class="section" id="footer">
					<p class="center">&copy; 2015 - Jelajah</p>
				</section>
			</div>
		</div>
	</div>