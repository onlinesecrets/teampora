
	<div id="header-main" class="background-p-orange-gradient" >
		<div id="header-main-upper" >
			<div id="" class="one-of-two">
				
             <img src="<?php echo $teamporalogo; ?>" class="thumbnail" />
					
			</div>
			
		</div>
		
		<div id="header-main-lower" class="background-blue-gradient">

		</div>
		
			<div class="navbar">
              <div class="navbar-inner">
                <div class="container">
                  <ul class="nav">
					<?php foreach($navigation as $key => $values ): ?>
					 <li class="<?php echo $values[1]; ?>"> <?php echo anchor($key , $values[0]); ?> </li>
					<?php endforeach; ?>
                  </ul>
				  
				  <?php if(isset($other_nav) ): ?>
					<?php foreach($other_nav as $key => $values): ?>
					  <ul class="nav pull-right">
						<li class="<?php echo $values[1]; ?>">  <?php echo anchor($key , $values[0]  ); ?>  </li>
					  </ul>
					 <?php endforeach; ?>
				  <?php endif; ?>
				  
                </div>
              </div>
            </div>
	</div>