
  <?php

$url = "https://api.duda.co/api/sites/multiscreen/eeadd5a0/collection";
 

//create a new cURL resource
$ch = curl_init($url);

//setup request to send json via POST

$payload = '{"name":"Treatment","fields":[{"name":"traetment_name","type":"text"},{"name":"category","type":"text"}]}';

//attach encoded JSON string to the POST fields


//set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_HTTPHEADER, array("authorization", "Basic YjE3MDY5OTQ6aFJRWG9QWDN2Zmlv"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            $payload);
//return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute the POST request
$result = curl_exec($ch);
echo "<pre>";
print_r($result);
die;
//close cURL resource
curl_close($ch);

?>