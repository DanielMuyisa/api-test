<?php
header("Content-Type: application/json");

if(!empty($_GET)) {
    if(!empty($_GET['label']) AND !empty($_GET['amount'])) {
        
        $label = htmlspecialchars($_GET['label']);
        $amount = htmlspecialchars($_GET['amount']);

        require_once "../db/db.php";

        $req=$pdo->prepare("INSERT INTO payment (label,amount) VALUES(?,?)");
        $req->execute([$label,$amount]);

        // create table of data
        function datas($label,$amount) {
            $datas['label'] = $label;
            $datas['amount'] = $amount;
        }

        $res_json = json_encode($datas);
        echo $res_json;


        // header("location: ../index.php?success");
        // exit();

    }
} else {
    header("location: ../index.php");
    exit();
}

?>