<?php
  date_default_timezone_set('Asia/Jakarta');
  $userkey  = "v8y5fm80p9zy1k8rzz";
  $passkey  = "gogoblicenter";
  $from     = $_GET['from'];
  $to       = $_GET['to'];
  if(empty($to)){
    echo "from dan to tidak diisi, maka akan di isi otomatis dengan : ";
    echo "from = ";
    echo $from = date("Y")."-".date("m")."-".date("d");
    echo "to = ";
    echo $to   = date("Y")."-".date("m")."-".date("d");
  }
  $url      = "http://gogobli.zenziva.com/api/outboxgetbydate.php?userkey=".$userkey."&passkey=".$passkey."&from=".$from."&to=".$to;

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
  $response = curl_exec($ch);

  if (curl_error($ch)) { die('Unable to connect: ' . curl_errno($ch) . ' - ' . curl_error($ch)); }
  curl_close($ch);
  $data = simplexml_load_string($response);
  var_dump($data);
  //haha
  //ulalaaa
  //cihuahua
?>
