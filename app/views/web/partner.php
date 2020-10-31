<!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Kerjasama Mesjid</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->

	<!-- Start Sample Area -->
	<section class="sample-text-area">
		<div class="container box_1170">
			<!-- <h3 class="text-heading">Text Sample</h3> -->
			<p class="sample-text">
				<b>Zakatin</b> telah berkerjasama dengan beberapa desa dalam memfasilitasi kaum muslimin dalam menunaikan zakatnya. Berikut adalah daftar mesjid-mesjid yang telah berkerjasama dengan <b>Zakatin</b>.

			</p>
			<div class="section-top-border">
				<div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
							<div class="serial">#</div>
							<div class="country">Mesjid</div>
							<div class="visit">Alamat</div>
							<div class="visit">RT</div>
							<div class="percentage">RW</div>
						</div>
						<?php 
						$no=1;
						foreach ($data['mesjid'] as $dt) : ?>
						<div class="table-row">
							<div class="serial"><?= $no++;?></div>
							<div class="country"><?= $dt['nama_mesjid'];?></div>
							<div class="visit"><?= $dt['alamat_mesjid'];?></div>
							<div class="visit"><?= $dt['RT'];?></div>
							<div class="percentage"><?= $dt['RW'];?></div>
						</div>
						<?php endforeach;?>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Sample Area -->