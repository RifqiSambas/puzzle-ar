<script>
	Webcam.set({
		width: 320,
		height: 240,
		dest_width: 640,
		dest_height: 480,
		crop_width: 480,
		crop_height: 480,
		image_format: 'jpeg',
		jpeg_quality: 90
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
