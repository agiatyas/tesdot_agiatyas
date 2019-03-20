		<!-- //market-->
		<div class="header"></div>
		<div class="market-updates">
			<?php if ($this->session->userdata('level')=="admin"): ?>

		<a href="<?=base_url()?>index.php/buku">
			<div class="col-sm-6 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"></i>
					</div>
					<div class="col-lg- market-update-left">
						<h3>DATA BUKU</h3>
						<p>CRUD Data Buku</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		</a>
	<div></div>
        <a href="<?=base_url()?>index.php/kategori">
        <div class="col-sm-6 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye" ></i>
					</div>
					<div class="col-lg- market-update-left">
						<h3>KATEGORI</h3>
						<p>CRUD Data Kategori Buku</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
        </a>
       
		<?php endif ?>
		<?php if ($this->session->userdata('level')=="kasir"): ?>
			<h2 class="w3ls_head">SELAMAT DATANG KASIR</h2>
			
        	<a href="<?=base_url()?>index.php/transaksi">
			<div class="col-lg-12 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users"> </i>
					</div>
					<div class="col-lg- market-update-left">
                        <h3>     TRANSAKSI </h3>
                        <p>    transaksi kasir</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
        </a>
		<?php endif ?>
		   <div class="clearfix"> </div>
		</div>

	<!-- galerry start -->
        
    </div>
    </div>
	<!-- 	galerry end -->

