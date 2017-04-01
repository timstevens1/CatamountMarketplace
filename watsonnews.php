<?php

function WatsonNews()
{
    $url = "https://gateway.watsonplatform.net/discovery/api/v1/environments/f7f9bb64-0747-45dd-bb4b-9ac5ee4c14e7/collections/bc727adc-7b96-48cf-a0b5-64d9e100a926/query?version=2016-11-07&query=relations.action.lemmatized:acquire&count=3&filter=entities.text:Vermont&return=text";

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "cf3a7560-62ef-40c9-8c20-4a4c7d412f5c:QV71KY3zEy0e");
    curl_setopt($curl, CURLOPT_VERBOSE, TRUE);
//curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

//echo 'Curl error: ' . curl_error($curl);

    curl_close($curl);

    $json = json_decode($result, TRUE);

    $classifiers = $json['results'];
    $classes = array();
    foreach ($classifiers as $index => $classifier) {
        $id = $classifier['id'];
        $text = $classifier['text'];
        $classes[$id] = $text;
    }

    return $classes;
}

/*
curl -u "{username}":"{password}" "https://gateway.watsonplatform.net/discovery/api/v1/environments/{environment_id}/collections/{collection_id}/query?version=2016-11-07&query=relations.action.lemmatized:acquire&count=15&filter=entities.text:IBM&return=text"
*/
