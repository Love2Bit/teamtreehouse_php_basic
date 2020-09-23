<?php 
    $tanya=readline("Pilih Mana (yes/no) ? ");

    if($tanya=="yes")
    {
        echo "Kamu memilih Yes";
    }elseif($tanya=="no")
    {
        echo "Kamu memilih No";
    }else{
        echo "Omae wa erabe dekimasen !!!!";
    }
echo PHP_EOL;
    $menu=readline("pilih angka 1");

    switch($menu)
    {
        case 1:
            echo "Anda memilih angka 1";
            break;
        default;
            echo "Omae wa erabi dekimasen !!!!";
    }

?>