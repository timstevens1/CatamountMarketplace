<?php
//$file_path = the absolute location of the image or relative to this dir
//$classes = php array matching tags with likely score
function watsonClassify($file_path)
{
	if (!file_exists($file_path))
	{
		die("FILE NOT FOUND: $file_path");
	}
	$ch = curl_init();
	$api_key = "08e867c933e58221fce247bdc1147c9d36899e4a";
	$url = "https://gateway-a.watsonplatform.net/visual-recognition/api/v3/classify";
	$url .= "?";
	$url .= "api_key={$api_key}";
	$url .= "&version=2016-05-20";
	$img = "@$file_path";


	$s = file_get_contents($img);
	$data = array(
		"images_file" => $img,
		);
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_VERBOSE,TRUE);
	curl_setopt($ch, CURLOPT_SAFE_UPLOAD,FALSE);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);

	// in real life you should use something like:
	// curl_setopt($ch, CURLOPT_POSTFIELDS, 
	//          http_build_query(array('postvar1' => 'value1')));

	// receive server response ...
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$server_output = curl_exec ($ch);

	curl_close ($ch);

	// further processing ....
	//echo $server_output;
	$json = json_decode($server_output, TRUE);
	//var_dump($json);

	$classifiers = $json['images'][0]['classifiers'][0]['classes'];

	$classes = array();
	foreach($classifiers as $index => $classifier)
	{
	  $class = $classifier['class'];
	  $score = $classifier['score'];
	  $classes[$class] = $score;
	}

	return $classes;
}
// var_dump(watsonClassify("fruitbowl.jpg"));

/*{
  "url": "https://gateway-a.watsonplatform.net/visual-recognition/api",
  "note": "It may take up to 5 minutes for this key to become active",
  "api_key": "08e867c933e58221fce247bdc1147c9d36899e4a"
}*/
//curl -X POST -F "images_file=@fruitbowl.jpg" "https://gateway-a.watsonplatform.net/visual-recognition/api/v3/classify?api_key={08e867c933e58221fce247bdc1147c9d36899e4a}&version=2016-05-20"
