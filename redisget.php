<?php 
   //Connecting to Redis server on localhost 
   $redis = new Redis(); 
   $redis->connect('redis', 6379); 
   echo "Connection to server sucessfully\n"; 
   //set the data in redis string 
   // Get the stored data and print it 
   //$example_data = $redis->get("testdata");
   $example_data = $redis->keys('*');
   print_r($example_data);
   print("<br>")
   foreach(array_keys($example_data) as $key)
   echo $redis->get($key) . "<br>";
?>