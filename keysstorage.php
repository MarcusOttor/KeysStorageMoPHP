<?php
$url = "http://iqrhguhasdgfauehgf2468tgf.esy.es/index.php";
$data = array('package' => $_POST['app'], 'type' => $_POST['key']);

echo httpPost($url, $data);

function httpPost($url, $data)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}
?>