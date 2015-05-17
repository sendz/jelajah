<?php
	$section = $this->uri->segment(4);
?>
<main>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h4>Edit for <?php echo $section; ?></h4>
				<?php if($query): foreach($query as $item): ?>
				<?php echo form_open("control-panel/frontpage/update/"); ?>
				<?php echo form_hidden("frontpage-edit-section","$section"); ?>
				<?php echo form_hidden("frontpage-edit-row","$item->row"); ?>
				<div class="row">
					<div class="input-field col s12 m6">
						<?php
							echo form_label('Author','frontpage-edit-author');
							$frontpage_edit_author = array(
								  'id'			=> 'frontpage-edit-author'
								, 'name'		=> 'frontpage-edit-author'
								, 'type'		=> 'text'
								, 'value'		=> 'Super Admin'
								, 'readonly'	=> 'readonly'
								);
							echo form_input($frontpage_edit_author);
						?>
					</div>
					<div class="input-field col s12 m6">
						<?php
							$date = date(DATE_W3C);
							echo form_label('Date','frontpage-edit-date');
							$frontpage_edit_date = array(
								  'id'			=> 'frontpage-edit-date'
								, 'name'		=> 'frontpage-edit-date'
								, 'type'		=> 'text'
								, 'value'		=> $date
								, 'readonly'	=> 'readonly'
								);
							echo form_input($frontpage_edit_date);
						?>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<?php
							echo form_label('Title','frontpage-edit-title');
							$frontpage_edit_title = array(
								  'id'		=> 'frontpage-edit-title'
								, 'name'	=> 'frontpage-edit-title'
								, 'type'	=> 'text'
								, 'class'	=> 'validate'
								, 'value'	=> $item->title
								);
							echo form_input($frontpage_edit_title);
						?>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<?php
							if ($section=="parallax-one"||$section=="parallax-two"||$section=="parallax-three")
							{
								echo '<div class="file-field input-field">';
								$frontpage_edit_file_name = array(
									  'class'	=> 'file-path validate'
									, 'type'	=> 'text'
									);
								echo form_input($frontpage_edit_file_name);
								echo '<div class="btn">';
								echo '<span>Browse File</span>';
								$frontpage_edit_file = array(
									  'id'		=> 'frontpage-edit-file'
									, 'name'	=> 'frontpage-edit-file'
									#, 'value'	=> $item->content
									);
								echo form_upload($frontpage_edit_file);
								echo '</div>';
								echo '</div>';
							} else {
								echo form_label('Content','frontpage-edit-content');
								$frontpage_edit_content = array(
									  'id'		=> 'frontpage-edit-content'
									, 'name'	=> 'frontpage-edit-content'
									, 'type'	=> 'textarea'
									, 'class'	=> 'validate materialize-textarea'
									, 'value'	=> $item->content
									);
								echo form_textarea($frontpage_edit_content);
							}
						?>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<?php
							echo form_label('Custom, you can add HTML tag here to display under the content','frontpage-edit-custom');
							$frontpage_edit_custom = array(
								  'id'		=> 'frontpage-edit-custom'
								, 'name'	=> 'frontpage-edit-custom'
								, 'type'	=> 'textarea'
								, 'class'	=> 'validate materialize-textarea'
								, 'value'	=> $item->custom
								);
							echo form_textarea($frontpage_edit_custom);
						?>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6">
						<?php
							$checked = $item->show;
							$frontpage_edit_show_options = array(
								  'published'	=> 'Publish'
								, 'draft'		=> 'Draft'
								);
							echo form_dropdown('frontpage-edit-show',$frontpage_edit_show_options,$checked);
							echo form_label('Status');
						?>
					</div>
					<div class="input-field col s12 m6">
						<?php
							$frontpage_edit_submit = array(
								  'id' 			=> 'frontpage-edit-submit'
								, 'type'		=> 'submit'
								, 'content'		=> '<i class="mdi-content-send right"></i>update'
								, 'class'		=> 'btn right waves-effect waves-light'
								);
							echo form_button($frontpage_edit_submit);
						?>
					</div>
				</div>
				<?php echo form_close(); ?>
				<?php endforeach; endif; ?>
			</div>
		</div>
	</div>
</main>