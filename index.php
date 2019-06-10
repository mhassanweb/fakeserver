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


?>
                  <?php
                  $servername = "localhost";
                  $username = "username";
                  $password = "password";
                  $dbname = "myDBPDO";
                  
                  try {
                      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                      // set the PDO error mode to exception
                      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                      $sql = "INSERT INTO MyGuests (firstname, lastname, email)
                      VALUES ('John', 'Doe', 'john@example.com')";
                      // use exec() because no results are returned
                      $conn->exec($sql);
                      echo "New record created successfully";
                      }
                  catch(PDOException $e)
                      {
                      echo $sql . "<br>" . $e->getMessage();
                      }
                  
                  $conn = null;
                  ?>
