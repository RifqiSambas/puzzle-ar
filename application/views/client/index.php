	<style>
		.box {
			float: left;
		}

		img {
			width: 150px;
			height: 150px;
		}

		#puzzle {
			font-size: 0;
			margin: 80px auto;
			padding: 5px;
			width: 460px;
		}
	</style>
	<script>
		window.onload = function() {
			// find the element that you want to drag.
			var box = document.getElementById('box');

			/* listen to the touchMove event,
			every time it fires, grab the location
			of touch and assign it to box */

			box.addEventListener('touchmove', function(e) {
				// grab the location of touch
				var touchLocation = e.targetTouches[0];

				// assign box new coordinates based on the touch.
				box.style.left = touchLocation.pageX + 'px';
				box.style.top = touchLocation.pageY + 'px';
			})

			/* record the position of the touch
			when released using touchend event.
			This will be the drop position. */

			box.addEventListener('touchend', function(e) {
				// current box position.
				var x = parseInt(box.style.left);
				var y = parseInt(box.style.top);
			})

		}
	</script>
	<div id="puzzle">
		<div id="box" class="box"><img alt="0"></div>
		<div id="box" class="box"><img alt="1"></div>
		<div id="box" class="box"><img alt="2"></div>
		<div id="box" class="box"><img alt="3"></div>
		<div id="box" class="box"><img alt="4"></div>
		<div id="box" class="box"><img alt="5"></div>
		<div id="box" class="box"><img alt="6"></div>
		<div id="box" class="box"><img alt="7"></div>
		<div id="box" class="box"><img alt="8"></div>
	</div>
	<script>
		var image = document.getElementsByTagName("img");
		var box = document.getElementsByClassName("box");

		image.draggable = true;

		var source = "";
		var nowImage;
		var nowImageBox;
		var thenImage;

		for (let i = 0; i < image.length; i++) {
			source = "<?= base_url('assets/marker/') ?>" + i + ".jpeg";
			image[i].setAttribute("src", source);
			image[i].onmousedown = function() {
				nowImage = this;
				nowImageBox = this.parentNode;
			}
			box[i].ondragover = function(event) {
				event.preventDefault(); // Remove the default behavior of ondragover events, which by default cannot place data or elements into other elements
			}
			box[i].ondrop = function(event) {
				thenImage = box[i].childNodes[0];
				box[i].appendChild(nowImage);
				nowImageBox.appendChild(thenImage);
			}
		}
	</script>
