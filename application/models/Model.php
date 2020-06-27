<?php

class Model extends CI_Model
{
	public function upload()
	{
		$folderPath = "assets/uploads/";
		$image_parts = explode(";base64,", $_POST['image']);
		$image_base64 = base64_decode($image_parts[1]);
		$fileName = 'model.png';
		$file = $folderPath . $fileName;
		file_put_contents($file, $image_base64);
	}

	public function split()
	{
		$width = 160;
		$height = 160;
		$source = @imagecreatefromjpeg("assets/uploads/model.png");
		$source_width = imagesx($source);
		$source_height = imagesy($source);

		$cnt = 0;
		for ($col = 0; $col < $source_width / $width; $col++) {
			for ($row = 0; $row < $source_height / $height; $row++) {
				$fn = $cnt++ . ".png";
				$im = @imagecreatetruecolor($width, $height);
				imagecopyresized(
					$im,
					$source,
					0,
					0,
					$col * $width,
					$row * $height,
					$width,
					$height,
					$width,
					$height
				);
				imagejpeg($im, 'assets/uploads/' . $fn);
				imagedestroy($im);
			}
		}
	}
}
