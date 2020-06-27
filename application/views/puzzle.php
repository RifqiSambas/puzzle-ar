<html>
<!-- include A-Frame obviously -->
<script src="<?= base_url('assets/js') ?>/aframe.min.js"></script>
<!-- include ar.js for A-Frame -->
<script src="<?= base_url('assets/js') ?>/aframe-ar.js"></script>

<body style='margin : 0px; overflow: hidden;'>
	<a-scene embedded arjs>
		<a-image id="test" src="<?= base_url('assets/uploads/model0' . rand(0, 2) . '_0' . rand(0, 2) . '.png') ?>" position="0 0 0" rotation="-90 0 0"></a-image>
		<a-marker-camera preset='hiro'></a-marker-camera>
	</a-scene>
	<a-image id="test2" src="<?= base_url('assets/uploads/model0' . rand(0, 2) . '_0' . rand(0, 2) . '.png') ?>" position="0 0 0" rotation="-90 0 0"></a-image>
	<a-marker-camera preset='kanji'></a-marker-camera>
</body>

</html>
