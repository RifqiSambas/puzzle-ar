<script src="<?= base_url('assets/js/aframe.min.js') ?>"></script>
<script src="<?= base_url('assets/js/aframe-ar.js') ?>"></script>
<script>
	var markersURLArray = [];
	var markersNameArray = [];
	var imageURLArray = [];

	AFRAME.registerComponent('markers_start', {
		init: function() {
			console.log('Add markers to the scene');
			var sceneEl = document.querySelector('a-scene');

			for (var i = 0; i < 9; i++) {
				var url = "<?= base_url('assets/barcodes/0') ?>" + i + ".png";

				markersURLArray.push(url);
				markersNameArray.push('Marker_' + i);
			}

			for (var j = 0; j < 9; j++) {
				var markerEl = document.createElement('a-assets');
			}

			for (var k = 0; k < 9; k++) {
				var markerEl = document.createElement('a-marker');
				markerEl.setAttribute('type', 'pattern');
				markerEl.setAttribute('url', markersURLArray[k]);
				markerEl.setAttribute('id', markersNameArray[k]);
				markerEl.setAttribute('registerevents', '');
				sceneEl.appendChild(markerEl);

				var imageEl = document.createElement('a-image');
				var imageSrc = "<?= base_url('assets/uploads/') ?>" + k + ".png";

				imageEl.setAttribute('src', imageSrc);
				imageEl.setAttribute('position', '0 0 0');
				imageEl.setAttribute('rotation', '-90 0 0');
				imageEl.setAttribute('id', markersNameArray[k]);

				markerEl.appendChild(imageEl);
			}
		}
	});

	AFRAME.registerComponent('registerevents', {
		init: function() {
			const marker = this.el;

			marker.addEventListener("markerFound", () => {
				var markerId = marker.id;
				console.log('Marker Found: ', markerId);
			});

			marker.addEventListener("markerLost", () => {
				var markerId = marker.id;
				console.log('Marker Lost: ', markerId);
			});
		},
	});
</script>
