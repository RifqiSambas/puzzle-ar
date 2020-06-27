<a-scene embedded artoolkit='sourceType: webcam; detectionMode: mono_and_matrix; matrixCodeType: 3x3;'>

	<form action="" method="post">
		<?php for ($i = 0; $i < 9; $i++) { ?>
			<a-marker type="pattern" url="<?= base_url('assets/marker/pattern-0') . $i . '.patt' ?>">
				<a-plane id="logo" src="<?= base_url('assets/uploads/') . $i . '.png' ?>" position="0 0.5 0" rotation="-90 0 0" width="2.0" height="2.2">
				</a-plane>
			</a-marker>
		<?php } ?>
		<a-entity camera></a-entity>
	</form>
</a-scene>
