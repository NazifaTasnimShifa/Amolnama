<div class="row">
	<div class="col-md-12 col-sm-12 clearfix" style="text-align:center;">
		<h2 style="font-weight:200; margin:0px;"><?php echo $system_name;?></h2>
    </div>
	<!-- Raw Links -->
	<div class="col-md-12 col-sm-12 clearfix ">
		
        <ul class="list-inline links-list pull-left">
        <!-- Language Selector -->			
           <li class="">
                    <a href="#">
                        	<i class="entypo-user"></i> <?php echo $this->session->userdata('login_type');?>
                    </a>
			</li>
        </ul>
        
        
		<ul class="list-inline links-list pull-right">
			
			
			<li>
				<a href="<?php echo base_url();?>index.php?login/logout">
					Logout <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
	</div>
	
</div>

<hr style="margin-top:0px;" />