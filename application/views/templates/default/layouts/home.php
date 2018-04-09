<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="<?php echo html_escape($layoutName); ?>">
	<div class="container-fluid" style="margin-top:100px; margin-bottom:100px;">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="row marg-y-50">
					<div class="col-lg-12">
						<form method="get" action="<?php echo site_url('home/search'); ?>" class="text-center">
							<input type="text" name="q" value="<?php echo (empty($_GET['q'])?'':$_GET['q']); ?>" class="form-control marg-bott-25" placeholder="Search">
							<button class="btn btn-outline-info btn-lg">
								<i class="fa fa-search"></i>
								Search
							</button>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<?php if( !empty($_GET['q']) ){ ?>
							<div class="text-center" style="font-style:italic;">
								<div>Search results: <?php echo empty($count)?0:html_escape($count); ?></div>
								<?php if($count <= 0){ ?>
									<label class="alert alert-info">Please refine your keywords or you can contact our customer service (555-555-555)</label>
								<?php } ?>
							</div>
						<?php } ?>
						<?php if( !empty($response) ){ ?>
							<?php foreach( $response as $value ){ ?>
								<div class="card" style="margin-bottom:10px;">
									<h5 class="card-header">
										<?php echo html_escape($value['chinese_simplified']); ?>
										<small><?php echo html_escape($value['chinese_pinyin']); ?></small>
									</h5>
									<div class="card-body">
										<h5 class="card-title">
											<?php echo html_escape($value['type']); ?>
										</h5>
										<p class="card-text">
											Lorem ipsum dolor sit amet, putant tritani eu pri, qui ne animal expetendis...
										</p>
										<a href="<?php echo site_url('place/view/'.$value['id']); ?>" class="btn btn-primary">Read more</a>
									</div>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
