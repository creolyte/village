<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if( $this->session->flashdata('messages') != '' ){ ?>
	<?php foreach( $this->session->flashdata('messages') as $message ) { ?>
		<span class="alertMessage" data-type="<?php echo $message->type; ?>" data-title="<?php echo $message->title; ?>" data-content="<?php echo $message->content; ?>"></span>
	<?php } ?>
<?php } ?>

<div class="row" style="margin-bottom:55px;">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?php echo site_url(); ?>">Village</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<?php echo isset($html)? $html : ''; ?>