<style>
	.box {
		float: left;
	}

	img {
		width: 150px;
		height: 150px;
		border: 5px solid white;
	}

	#puzzle {
		font-size: 0;
		margin: 40px auto;
		padding: 5px;
		width: 460px;
	}
</style>

<div class="container text-center">
	<div class="row">
		<div class="col-md-12">
			<br>
			<br>
			<h2>
				Selamat anda telah menyelesaikan puzzle!
			</h2>
		</div>
		<div class="col-md-12">
			<div id="puzzle">
				<div id="box" class="box">
					<img src="<?= base_url('assets/uploads/0.png') ?>" />
					<img src="<?= base_url('assets/uploads/3.png') ?>" />
					<img src="<?= base_url('assets/uploads/6.png') ?>" />
					<img src="<?= base_url('assets/uploads/1.png') ?>" />
					<img src="<?= base_url('assets/uploads/4.png') ?>" />
					<img src="<?= base_url('assets/uploads/7.png') ?>" />
					<img src="<?= base_url('assets/uploads/2.png') ?>" />
					<img src="<?= base_url('assets/uploads/5.png') ?>" />
					<img src="<?= base_url('assets/uploads/8.png') ?>" />
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<br>
			<br>
			<form action="<?= base_url() ?>" method="post">
				<input class="btn btn-primary" type="submit" value="kembali ke halaman awal">
			</form>
		</div>
	</div>
</div>
