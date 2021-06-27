<?php


    function create_livre($nom_livre, $id_auteur, $avis, $note)
    {
        require __DIR__ . "/../database/conn.php";

        $req = $db->prepare("INSERT INTO livres (nom_livre, id_auteur, avis, note) VALUES (:nom_livre, :id_auteur, :avis, :note)");
        $req->bindValue(":nom_livre", $nom_livre, PDO::PARAM_STR);
        $req->bindValue(":id_auteur", $id_auteur, PDO::PARAM_INT);
        $req->bindValue(":avis", $avis, PDO::PARAM_STR);
        $req->bindValue(":note", $note, PDO::PARAM_STR);
        $req->execute();
        $req->closeCursor();
    }


    function update_livre($id_livre, $nom_livre, $id_auteur, $avis, $note)
    {
        require __DIR__ . "/../database/conn.php";

        $req = $db->prepare("UPDATE livres SET nom_livre = :nom_livre, id_auteur = :id_auteur, avis = :avis, note = :note WHERE id_livre = :id_livre");  
        $req->bindValue(":id_livre", $id_livre, PDO::PARAM_INT);     
        $req->bindValue(":nom_livre", $nom_livre, PDO::PARAM_STR);
        $req->bindValue(":id_auteur", $id_auteur, PDO::PARAM_INT);
        $req->bindValue(":avis", $avis, PDO::PARAM_STR);
        $req->bindValue(":note", $note, PDO::PARAM_FLOAT);
        $req->execute();
        $req->closeCursor();
    }


    // function delete_By_Id($table, $category_id)
    // {
    //     require __DIR__ . "/../database/conn.php";

    //     $req = $db->prepare("DELETE FROM {$table} WHERE id=:id");
    //     $req->bindValue(":id", $category_id, PDO::PARAM_INT);
    //     $req->execute();
    //     $req->closeCursor();
    // }







?>