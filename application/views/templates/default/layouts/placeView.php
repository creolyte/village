<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="<?php echo html_escape($layoutName); ?>">
	<div class="container-fluid" style="margin-top:100px; margin-bottom:100px;">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="row">
					<div class="col-lg-12">
						<div class="card" style="margin-bottom:10px;">
							<h5 class="card-header">
								<?php echo html_escape($place['chinese_simplified']); ?>
								<small><?php echo html_escape($place['chinese_pinyin']); ?></small>
							</h5>
							<div class="card-body">
								<h5 class="card-title">
									<?php echo html_escape($place['type']); ?>
								</h5>
								<p class="card-text">
									Lorem ipsum dolor sit amet, putant tritani eu pri, qui ne animal expetendis...
								</p>
								<div class="row form-group">
									<label for="inputPassword3" class="col-sm-4">Province Code:</label>
									<div class="col-sm-8">
										<?php echo html_escape($place['province_code']); ?>
									</div>
								</div>
								<div class="row form-group">
									<label for="inputPassword3" class="col-sm-4">City Code:</label>
									<div class="col-sm-8">
										<?php echo html_escape($place['pref_city_code']); ?>
									</div>
								</div>
								<div class="row form-group">
									<label for="inputPassword3" class="col-sm-4">District / County Code:</label>
									<div class="col-sm-8">
										<?php echo html_escape($place['district_county_code']); ?>
									</div>
								</div>
								<div class="row form-group">
									<label for="inputPassword3" class="col-sm-4">Town / Sub-district Code:</label>
									<div class="col-sm-8">
										<?php echo html_escape($place['town_subdistrict_code']); ?>
									</div>
								</div>
								<div class="row form-group">
									<label for="inputPassword3" class="col-sm-4">Village Code:</label>
									<div class="col-sm-8">
										<?php echo html_escape($place['village_code']); ?>
									</div>
								</div>
								<div class="row form-group">
									<label for="inputPassword3" class="col-sm-4">Previously Known As:</label>
									<div class="col-sm-8">
										<?php echo html_escape($place['previously_known_as']); ?>
									</div>
								</div>
								<div class="row form-group">
									<label for="inputPassword3" class="col-sm-4">Previously Administered As:</label>
									<div class="col-sm-8">
										<?php echo html_escape($place['previously_administered']); ?>
									</div>
								</div>
								<a href="<?php echo site_url('/'); ?>" class="btn btn-outline-primary">
									<i class="fas fa-chevron-left"></i>
									Back
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
