<section class="container mt-4">
	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h1>Puzzle AR</h1>
				</div>
				<div class="card-body">
					<h5>situs ini adalah sebuah permainan puzzle berbasis web</h5>
					<p>Silahkan ambil gambar untuk dijadikan puzzle</p>
					<p><a href="">what's this? how to play? f.a.q, etc</a></p>
					<div id="my_camera"></div>
					<br>
					<?= form_open_multipart('puzzle/') ?>
					<input class="btn btn-primary" type=button value="Take Snapshot" onClick="take_snapshot()">
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div id="results">Your captured image will appear here...</div>
			<input type="hidden" name="image" id="image-tag">
			<input type="submit" value="submit">
			<?= form_close() ?>
		</div>
	</div>
</section>
