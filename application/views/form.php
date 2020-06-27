<section class="container mt-4">
	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h1>Puzzle AR</h1>
				</div>
				<div class="card-body">
					<h5>situs ini adalah sebuah permainan berbasis web</h5>
					<p>Silahkan ambil gambar untuk dijadikan puzzle</p>
					<div id="my_camera"></div>
					<br>
					<?= form_open_multipart('site/upload') ?>
					<input class="btn btn-primary" type=button value="Take Large Snapshot" onClick="take_snapshot()">
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


<!-- First, include the Webcam.js JavaScript Library -->
<script src="<?= base_url('assets/js/webcam.min.js') ?>"></script>
<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
	Webcam.set({
		// live preview size
		width: 320,
		height: 240,

		// device capture size
		dest_width: 640,
		dest_height: 480,

		// final cropped size
		crop_width: 480,
		crop_height: 480,

		// format and quality
		image_format: 'jpeg',
		jpeg_quality: 90
	});

	Webcam.attach('#my_camera');
</script>
<!-- Code to handle taking the snapshot and displaying it locally -->
<script language="JavaScript">
	function take_snapshot() {
		// take snapshot and get image data
		Webcam.snap(function(data_uri) {
			// display results in page
			document.getElementById('image-tag').value = data_uri;
			document.getElementById('results').innerHTML =
				'<h2>Here is your large image:</h2>' +
				'<img src="' + data_uri + '"/>';
		});
	}
</script>
