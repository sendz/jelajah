	<!-- Register Modal -->
	<div id="modal-register" class="modal">
		<?php echo form_open('auth/register'); ?>
		<div class="modal-content">
			<div class="row">
				<div class="col s12">
					<h4>Register</h4>
				</div>
				<div class="input-field col s12">
					<?php
						echo form_label('Full Name','register-user-fullname');
						$data_register_user_fullname = array(
							  'name'		=> 'register-user-fullname'
							, 'id'			=> 'register-user-fullname'
							, 'type'		=> 'text'
							, 'required'	=> 'required'
							, 'class'		=> 'validate'
							);
						echo form_input($data_register_user_fullname);
					?>
				</div>
				<div class="input-field col s12">
					<?php
						echo form_label('Email','register-email');
						$data_register_email = array(
							  'name'		=> 'register-email'
							, 'id'			=> 'register-email'
							, 'type'		=> 'email'
							, 'required'	=> 'required'
							, 'class'		=> 'validate'
							);
						echo form_input($data_register_email);
					?>
				</div>
				<div class="input-field col s12">
					<?php
						echo form_label('Password','register-password');
						$data_register_email = array(
							  'name' 		=> 'register-password'
							, 'id'			=> 'register-password'
							, 'type'		=> 'password'
							, 'required'	=> 'required'
							, 'class' 		=> 'validate'
							);
						echo form_input($data_register_email);
					?>
				</div>
				<div class="input-field col s12">
					<?php
						echo form_label('Confirm Password','register-confirm-password');
						$data_register_confirm_password = array(
							  'name'		=> 'register-confirm-password'
							, 'id'			=> 'register-confirm-password'
							, 'type'		=> 'password'
							, 'required'	=> 'required'
							, 'class'		=> 'validate'
							);
						echo form_input($data_register_confirm_password);
					?>
				</div>
				<div class="input-field col s12">
					<?php
						$data_register_tnc = array(
							  'type'		=> 'checkbox'
							, 'name'		=> 'register-tnc'
							, 'id'			=> 'register-tnc'
							, 'required'	=> 'required'
							, 'value'		=> 'register-tnc-agree'
							);
						echo form_input($data_register_tnc);
						echo form_label('By checking this checkbox, I agree to the <a href="#">Terms and Condition</a> of using this Application.','register-tnc');
					?>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="modal-action modal-close waves-effect waves-light btn-flat" type="submit">Register</button>
		</div>
		<?php echo form_close(); ?>
	</div>
	<!-- end of register modal -->