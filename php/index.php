<?php
    $connection = mysqli_connect('db','root','12345','test');
    if($connection == false){
        echo "false bad requets to mysql<br>";
        echo mysqli_connect_error();
        exit();
    }
    $result = mysqli_query($connection, "SELECT * FROM `user`");

?>
<?
    $r1 = mysqli_fetch_assoc($result);
    $r2 = mysqli_fetch_assoc($result);
    $r3 = mysqli_fetch_assoc($result);
    print_r($r1['name'] . $r1['lastname']);
    print_r($r2['name'] . $r2['lastname']);
    print_r($r3['name'] . $r3['lastname']);

?>
<ul>
    <?php
    while(($user = mysqli_fetch_assoc($result))){
        echo'<li>' . $user['name'] . $user['lastname'] . '</li>';
    }
    ?>
</ul>

