<section class="container mt-4">
	<div class="row">
		<div class="col-md-5">
			<div class="card">
				<div class="card-header">
					<h1>Puzzle AR</h1>
				</div>
				<div class="card-body">
					<h5>situs ini adalah sebuah permainan puzzle berbasis web</h5>
					<p>Silahkan ambil gambar untuk dijadikan puzzle</p>
					<p>
						<a href="https://github.com/rifqisambas/puzzle-ar/assets/marker">unduh marker</a> -
						<a href="<?= base_url('client') ?>">client marker</a>
					</p>
					<p><a href="">what's this? how to play? f.a.q, etc</a></p>
					<div id="my_camera"></div>
					<br>
					<?= form_open_multipart('puzzle/') ?>
					<input class="btn btn-primary" type=button value="Take Snapshot" onClick="take_snapshot()">
				</div>
			</div>
		</div>
		<div class="col-md-7">
			<div id="results">Gambar yang akan dijadikan puzzle akan tampil disini</div>
			<input type="hidden" name="image" id="image-tag">
			<br>
			<input class="btn btn-primary" type="submit" value="mulai permainan">
			<?= form_close() ?>
		</div>
	</div>
</section>
