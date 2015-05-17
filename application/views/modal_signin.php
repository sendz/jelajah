<!-- Modals from Navbar -->
	<!-- Modal Sign In -->
	<div id="modal-signin" class="modal modal-fixed-footer">
		<?php echo form_open('auth/signin'); ?>
			<div class="modal-content">
				<div class="row">
					<div class="col s12">
						<h4>Sign In</h4>
					</div>
					<div class="input-field col s12">
						<!-- email form -->
						<?php
							echo form_label('Email','singin-email');
							$data_singin_email = array(
								  'name' 		=> 'singin-email'
								, 'id'			=> 'signin-email'
								, 'class'		=> 'validate'
								, 'type' 		=> 'email'
								, 'required'	=> 'required'
								);
							echo form_input($data_singin_email);
						?>
						<!-- end of email form -->
					</div>
					<div class="input-field col s12">
						<!-- password form -->
						<?php
							echo form_label('Password','singin-password');
							$data_singin_password = array(
								  'name'		=> 'signin-password'
								, 'id'			=> 'signin-password'
								, 'class'		=> 'validate'
								, 'type'		=> 'password'
								, 'required'	=> 'required'
								);
							echo form_input($data_singin_password);
						?>
						<!-- end of password form -->
					</div>
					<div class="col s12">
						<div class="row">
							<div class="col s6">
								<a href="#">Forgot password?</a>
							</div>
							<div class="col s6">
								<?php
									$data_singin_remember = array(
										  'name'		=> 'signin-remember'
										, 'id'			=> 'signin-remember'
										, 'type'		=> 'checkbox'
										, 'value'		=> 'signin-remember'				
										);
									echo form_input($data_singin_remember);
									echo form_label('Remember me','signin-remember');
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="waves-effect waves-light btn-flat">Sign In</button>
			</div>
		<?php echo form_close(); ?>
	</div>
