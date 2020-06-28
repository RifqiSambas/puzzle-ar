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
	<div id="puzzle">
		<div class="box"><img alt="0"></div>
		<div class="box"><img alt="1"></div>
		<div class="box"><img alt="2"></div>
		<div class="box"><img alt="3"></div>
		<div class="box"><img alt="4"></div>
		<div class="box"><img alt="5"></div>
		<div class="box"><img alt="6"></div>
		<div class="box"><img alt="7"></div>
		<div class="box"><img alt="8"></div>
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
