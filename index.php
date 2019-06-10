<?php

                  $url = 'https://raw.githubusercontent.com/mhassanweb/fakeserver/master/db1.json';
                  $crl = curl_init();
                  
                  curl_setopt($crl, CURLOPT_URL, $url);
                  curl_setopt($crl, CURLOPT_FRESH_CONNECT, true);
                  curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
                  $response = curl_exec($crl);
                  
                  $obj = json_decode($response);
$title=$obj->THC;
echo "<h1>"."$title";
                  curl_close($crl);



