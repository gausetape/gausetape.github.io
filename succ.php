<style>
    test {
    font-size: 50vw;
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
}

</style>
<p>
<?php

$my_num = (hexdec(substr((md5($_SERVER['REMOTE_HOST'].date('Y-m-d'))),0,1)));

if ($my_num < 8){
    echo '<body style="background-color: red;">';
    $ans = "No";
}else{
    echo '<body style="background-color: green;">';
   $ans = "Yes";
}

echo '<test><b>'.$ans.'<b></test>';


?>
