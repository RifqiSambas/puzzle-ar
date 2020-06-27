<a-scene markers_start vr-mode-ui="enabled: false" color-space="sRGB" renderer="gammaOutput: true" embedded arjs='debugUIEnabled: false; sourceType: webcam; patternRatio: 0.85; trackingMethod: best;'>
	<a-assets>
		<img id="my-image0" src="<?= base_url('assets/uploads/0.png') ?>">
	</a-assets>

	<a-image src="#my-image0"></a-image>

	<a-entity id='userCamera' camera>
		<a-cursor> </a-cursor>
	</a-entity>
</a-scene>
