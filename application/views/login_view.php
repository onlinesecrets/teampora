<html>

	<?php include(HEAD_PATH); ?>
	
	<script type="text/javascript">
	$( document ).ready(function() {
		$('#inputEmail').popover();
		$('#inputPassword').popover();
	});
	</script>
	
	<body> 
		<div id="main" >
			
			<?php include(HEADER_PATH); ?>
			
				
			
				<div id="whole-content" class="center" style="margin-top:50px;">

				
					<div class="one-of-one background-silver-gradient" style="padding-top:50px;">
						<?php echo form_open($form_data['to'] , $form_data['attrib']); ?>
						<?php foreach($login_attrib as $key => $values): ?>
						  <div class="control-group">
							<label class="control-label" for="inputEmail"><?php echo $key; ?></label>
							<div class="controls">
								<input type="text"  id="<?php echo $values['id']; ?>" placeholder="<?php echo $values['placeholder']; ?>" 
										rel="<?php echo $values['rel']; ?>"
										data-title="<?php echo $values['data-title']; ?>"
										data-content="<?php echo $values['data-content']; ?>" />
							</div>
						  </div>
						  <?php endforeach; ?>

						  <div class="control-group">
							<div class="controls">
							  <label class="checkbox">
								<input type="checkbox"> Remember me
							  </label>
							  <button type="submit" class="btn btn-primary">Sign in</button>
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