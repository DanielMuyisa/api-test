<?php
eader("Content-Type: application/json");

if(!empty($_POST)) {
    if(!empty($_POST['label']) AND !empty($_POST['amount'])) {
        $label = htmlspecialchars($_POST['label']);
        $amount = htmlspecialchars($_POST['amount']);

        require_once "../db/db.php";

        $req=$pdo->prepare("INSERT INTO payment (?,?) VALUES(?,?)");
        $req->execute([$label,$amount]);

        header("location: ../index.php?success");
        exit();

    }
} else {
    header("location: ../index.php");
    exit();
}

?>