<div class="header">
	<div class="wrap">
		<div class="logo">
			<a href="<?php echo base_url() ?>"><img src="<?php echo base_url('asset/images/logo.jpg') ?>" title="pinbal" /></a>
		</div>
		<div class="nav-icon">
			 <a href="#" class="right_bt" id="activator"><span> </span> </a>
		</div>
		 <div class="box" id="box">
			 <div class="box_content">        					                         
				<div class="box_content_center">
				 	<div class="form_content">
						<div class="menu_box_list">
							<ul>
								<li><a href="<?php echo base_url('site'); ?>"><span>Home</span></a></li>
								<li><a href="<?php echo base_url('site/about'); ?>"><span>About</span></a></li>
								<div class="clear"> </div>
							</ul>
						</div>
						<a class="boxclose" id="boxclose"> <span> </span></a>
					</div>                                  
				</div> 	
			</div> 
		</div>       	  
		<div class="top-searchbar">
			<form method="get" action="<?php echo base_url('site/cari') ?>">
				<input type="text" name="q" <?php if (isset($search)) { echo "value = ".$search; } ?> />
				<input type="submit" value="" />
			</form>
		</div>
		
		<div class="userinfo">
			<div class="user">
				<ul>
					<?php if($this->session->status == 'login') { ?>
					<li><a href="<?php echo base_url('admin') ?>"><img src="<?php echo base_url('asset/images/user-pic.png') ?>" title="user-name" /><span>Admin</span></a></li>
					<?php } else { ?>
					<li><a href="<?php echo base_url('user/login') ?>"><img src="<?php echo base_url('asset/images/cicak.jpg') ?>" title="Login" /><span>Cicak-World.co</span></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
		
		<div class="clear"> </div>
	</div>
</div>