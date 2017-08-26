<?php
    // Commands
		$name = "commands";
    curl_setopt($curl, CURLOPT_URL, "${protocol}://${url}/dbquery?table=command&getSortedRows&order=ASC");
    $results = json_decode(curl_exec($curl));
    $results = json_encode($results);

    // write to a file
    $fp = fopen("${outputFolder}${name}.json", 'w');
    fwrite($fp, $results);
    fclose($fp);
    unset($results);
