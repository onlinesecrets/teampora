<html>
<head><title>Teampora: Kwekkwek Vendor</title>
	</head>

	<?php include(HEAD_PATH); ?>
	
	<body> 
		<div id="main" >
			
			<?php include(HEADER_PATH); ?>
			
				
			
				<div id="whole-content" class="center" style="margin-top:50px;">
					<div id="banner"  class="padding-centralized " style="" >
						<div class="one-of-one center" >
							<div id="" class="center" >						
								<ul id="slider" class="bxslider" >
									<?php foreach($images_path as $key => $value): ?>
										<li><img src="<?php echo $key; ?>" title="<?php echo $value; ?>" /> </li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
					
					<div id="content" class="padding-centralized">
						<h2> <p> Testimonials Corner </p> </h2>
							<div class="one-of-two panel-white n-border radius-4 ">
									<div class="one-of-two">
										<img src="<?php echo $t_pic; ?>" class="thumbnail" />
									</div>
										<div class="one-of-two border ">
										<p> Lorem Lorem sinta </p>
										<p> Lorem Lorem sinta </p>
										<p> Lorem Lorem sinta </p>
										<p> Lorem Lorem sinta </p>
									</div>
									
									<div class="three-of-two ">
										<p> Lorem Lorem sinta </p>
										<p> Lorem Lorem sinta </p>
										<p> Lorem Lorem sinta </p>
										<p> Lorem Lorem sinta </p>
										<p> Lorem Lorem sinta </p>
										<p> Lorem Lorem sinta </p>
										<p> Lorem Lorem sinta </p>
										<p> Lorem Lorem sinta </p>
									</div>
									
								
							</div>
						
					</div>
					
				</div>
				
			<?php include(FOOTER_PATH); ?>
			
		</div>
		
	
	</body>

</html>