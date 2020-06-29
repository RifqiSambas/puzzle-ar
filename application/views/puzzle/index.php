<div style='position: fixed; top: 10px; width:100%; text-align: center; z-index: 1;'>
	<div class="container">
		<div class="row">
			<form action="<?= base_url('puzzle/finish') ?>" method="post">
				<input class="btn btn-success" type="submit" value="selesai menyusun puzzle">
			</form>
			<div class="select ml-4">
				<label for="videoSource">Select Camera: </label><select id="videoSource"></select>
			</div>
		</div>
	</div>
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
<script>
	var videoSelect = document.querySelector("select#videoSource");
	var selectors = [videoSelect];

	function gotDevices(deviceInfos) {
		// Handles being called several times to update labels. Preserve values.
		var values = selectors.map(function(select) {
			return select.value;
		});
		selectors.forEach(function(select) {
			while (select.firstChild) {
				select.removeChild(select.firstChild);
			}
		});

		for (var i = 0; i !== deviceInfos.length; ++i) {
			var deviceInfo = deviceInfos[i];
			var option = document.createElement("option");
			option.value = deviceInfo.deviceId;

			if (deviceInfo.kind === "videoinput") {
				option.text = deviceInfo.label || "camera " + (videoSelect.length + 1);
				videoSelect.appendChild(option);
			} else {
				console.log("Some other kind of source/device: ", deviceInfo);
			}

			selectors.forEach(function(select, selectorIndex) {
				if (
					Array.prototype.slice.call(select.childNodes).some(function(n) {
						return n.value === values[selectorIndex];
					})
				) {
					select.value = values[selectorIndex];
				}
			});
		}
	}

	navigator.mediaDevices
		.enumerateDevices()
		.then(gotDevices)
		.catch(handleError);

	function gotStream(stream) {
		arToolkitSource.domElement.srcObject = stream; // make stream available to console
		// video.srcObject = stream;
		// Refresh button list in case labels have become available
		return navigator.mediaDevices.enumerateDevices();
	}

	function start() {
		if (window.stream) {
			window.stream.getTracks().forEach(function(track) {
				track.stop();
			});
		}
		var videoSource = videoSelect.value;
		var constraints = {
			video: {
				deviceId: videoSource ? {
					exact: videoSource
				} : undefined
			}
		};
		navigator.mediaDevices
			.getUserMedia(constraints)
			.then(gotStream)
			.then(gotDevices)
			.catch(handleError);
	}

	videoSelect.onchange = start;

	function handleError(error) {
		console.log("navigator.getUserMedia error: ", error);
	}

	start();
</script>
