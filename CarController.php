<?php
include('db.php');

$akcija = $_POST['akcija'];

if($akcija == 'dodaj_auto'){
    // Prepare the SQL statement
    try{
        $stmt = $pdo->prepare("INSERT INTO automobil (ime, mjenjac, audio, konjska_snaga, enterijer, krov, parking, ebd, slika, motor, sjedista, airbagovi, pogon, volan, esp, kamera, cijena, godiste, br_prozora, potrosnja, klima, abs, tempomat) 
                           VALUES (:ime, :mjenjac, :audio, :konjska_snaga, :enterijer, :krov, :parking, :ebd, :slika, :motor, :sjedista, :airbagovi, :pogon, :volan, :esp, :kamera, :cijena, :godiste, :br_prozora, :potrosnja, :klima, :abs, :tempomat)");

        $parking = $_POST['parkingRadios'] == 'yes' ? 1 : 0;
        $ebd = $_POST['ebdRadios'] == 'yes' ? 1 : 0;
        $esp = $_POST['espRadios'] == 'yes' ? 1 : 0;
        $kamera = $_POST['kameraRadios'] == 'yes' ? 1 : 0;
        $klima = $_POST['klimaRadios'] == 'yes' ? 1 : 0;
        $abs = $_POST['absRadios'] == 'yes' ? 1 : 0;
        $tempomat = $_POST['tempomatRadios'] == 'yes' ? 1 : 0;

        // Bind parameters
        $stmt->bindParam(':ime', $_POST['ime']);
        $stmt->bindParam(':mjenjac', $_POST['mjenjac']);
        $stmt->bindParam(':audio', $_POST['audio']);
        $stmt->bindParam(':konjska_snaga', $_POST['snaga']);
        $stmt->bindParam(':enterijer', $_POST['enterijer']);
        $stmt->bindParam(':krov', $_POST['krovRadios']);
        $stmt->bindParam(':parking', $parking);
        $stmt->bindParam(':ebd', $ebd);
        $stmt->bindParam(':slika', $_POST['base64_image'], PDO::PARAM_LOB);
        //$stmt->bindParam(':slika', $_POST['slika']);
        $stmt->bindParam(':motor', $_POST['motor']);
        $stmt->bindParam(':sjedista', $_POST['sjedista']);
        $stmt->bindParam(':airbagovi', $_POST['erbeg']);
        $stmt->bindParam(':pogon', $_POST['pogonRadios']);
        $stmt->bindParam(':volan', $_POST['volanRadios']);
        $stmt->bindParam(':esp', $esp);
        $stmt->bindParam(':kamera', $kamera);
        $stmt->bindParam(':cijena', $_POST['cijena']);
        $stmt->bindParam(':godiste', $_POST['godina']);
        $stmt->bindParam(':br_prozora', $_POST['prozor']);
        $stmt->bindParam(':potrosnja', $_POST['potrosnja']);
        $stmt->bindParam(':klima', $klima);
        $stmt->bindParam(':abs', $abs);
        $stmt->bindParam(':tempomat', $tempomat);

        $stmt->execute();

        echo json_encode(array(
            "success" => 1,
            "vars" => $_POST
        ));
    } catch (PDOException $e){
        echo json_encode(array(
            "success" => 1,
            "vars" => $e->getMessage()
        ));
    }

} else if ($akcija = "brisanje"){
    $id = $_POST['id'];
    try{
        $pdo->query("delete from automobil where id = $id");

        echo json_encode(array(
            "success" => 1,
            "vars" => $_POST
        ));
    } catch (PDOException $e){
        echo json_encode(array(
            "success" => 0,
            "vars" => $e->getMessage()
        ));
    }
}