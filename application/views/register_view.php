<html>

	<?php include(HEAD_PATH); ?>
	
	<script type="text/javascript">
	$( document ).ready(function() {
		$('#inputEmail').popover();
		$('#inputPassword').popover();
		$('#confirmPassword').popover();
		
		$("#register-form").validate();
		$('#register-form').on('submit' , function(){
			alert($('#register-form').valid());
		});
		
	});
	</script>
	
	<body> 
		<div id="main" >
			
			<?php include(HEADER_PATH); ?>
			
				
			
				<div id="whole-content" class="center" style="margin-top:50px;">

				
					<div class="one-of-one background-silver-gradient" style="padding-top:50px;">
						<?php echo form_open($form_data['to'] , $form_data['attrib']); ?>
						<?php foreach($register_attrib as $key => $values): ?>
						  <div class="control-group">
							<label class="control-label" for="inputEmail"><?php echo $key; ?></label>
							<div class="controls">
								<input  
										type="<?php echo $values['type']; ?>"
										id="<?php echo $values['id']; ?>" placeholder="<?php echo $values['placeholder']; ?>" 
										rel="<?php echo $values['rel']; ?>"
										data-title="<?php echo $values['data-title']; ?>" 
										data-content="<?php echo $values['data-content']; ?>" 
										class="<?php echo $values['class']; ?>"
										
										<?php echo isset($values['equalTo'])? 'equalTo="' . $values['equalTo'] . ' "' : ''; ?>
										/>
							</div>
							
						  </div>
						  <?php endforeach; ?>

						  <div class="control-group">
							<div class="controls">
							  <button type="submit" class="btn btn-primary">Sign up</button>
							</div>
						  </div>
						<?php echo form_close(); ?>
					
					</div>
						<div id="banner">
						</div>
				</div>
				
			<?php include(FOOTER_PATH); ?>
		</div>
		
		
	</body>
</html>