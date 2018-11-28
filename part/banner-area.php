			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">

							<h1 class="text-uppercase">
								<?php echo $sysconf['library_name']; ?>		
							</h1>
							<p class="pt-10 pb-10">
								<?php echo $sysconf['library_subname']; ?>
							</p>

							<form action="" method="get" class="search form" role="search">
					            <div class="input-group">
					                <input type="text" placeholder="<?php echo __('Ketik lah : kata kunci , judul atau pengarang di kotak ini dan enter'); ?>" class="s-search form-control" id="keyword" name="keywords" value="" lang="<?php echo $sysconf['default_lang']; ?>" aria-hidden="true" autocomplete="off">
					                <span class="input-group-btn">
					                    <button type="submit" name="search" value="search" class="btn btn-default primary-btn" type="button"> <i class="fa fa-search"></i> </button>
					                </span>
					            </div><!-- /input-group -->
					        </form>

						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->