<?php
    $senha = '24112007';

    // $data = date("Ymd");
    // echo $data;
    // echo "<br>";
    // $total = $senha+$data;

    $senha_cripto = md5($senha);

    echo $senha_cripto;

    //Senha: 56200228ac5b4f6c7fc13310751ee270

?>