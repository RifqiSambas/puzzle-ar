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
					<?= form_open_multipart('site/upload') ?>
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


<script src="<?= base_url('assets/js/webcam.min.js') ?>"></script>
<script>
	Webcam.set({
		width: 320,
		height: 240,
		dest_width: 640,
		dest_height: 480,
		crop_width: 480,
		crop_height: 480,
		image_format: 'png',
	});

	Webcam.attach('#my_camera');

	function take_snapshot() {
		Webcam.snap(function(data_uri) {
			document.getElementById('image-tag').value = data_uri;
			document.getElementById('results').innerHTML =
				'<h2>Here is your large image:</h2>' +
				'<img src="' + data_uri + '"/>';
		});
	}
</script>
