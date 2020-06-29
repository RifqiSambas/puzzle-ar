<div style='position: fixed; top: 10px; width:100%; text-align: center; z-index: 1;'>
	<form action="<?= base_url('puzzle/finish') ?>" method="post">
		<input class="btn btn-success" type="submit" value="selesai menyusun puzzle">
	</form>
</div>
<a-scene arjs='sourceType: webcam; detectionMode: mono_and_matrix; matrixCodeType: 3x3; debugUIEnabled: false;'>
	<?php for ($i = 0; $i < 9; $i++) { ?>
		<a-marker type="pattern" url="<?= base_url('assets/marker/pattern-0') . $i . '.patt' ?>">
			<a-plane id="logo" src="<?= base_url('assets/uploads/') . $i . '.png' ?>" position="0 0.5 0" rotation="-90 0 0" width="2.0" height="2.2">
			</a-plane>
		</a-marker>
	<?php } ?>
	<a-entity camera></a-entity>
</a-scene>
