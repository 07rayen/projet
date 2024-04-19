<?php
include 'connection.php';
include 'model/evaluations.php';

class evaluationsC
{
    function AfficherEvaluations(){
        $sql = "SELECT * FROM evaluations";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMessage());
        }
    }

    function SupprimerEvaluation($idEva){
        $sql = "DELETE FROM evaluations WHERE idEva=:idEva";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idEva', $idEva);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMessage());
        }
    }

    function AjouterEvaluation($evaluation){
        $sql = "INSERT INTO evaluations (titreEva, duree, descE) VALUES (:titreEva, :duree, :descE)";
        $db = Config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                'titreEva' => $evaluation->getTitreEva(),
                'duree' => $evaluation->getDuree(),
                'descE' => $evaluation->getDescE()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function RecupererEvaluation($idEva){
        $sql = "SELECT * FROM evaluations WHERE idEva = :idEva";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute(['idEva' => $idEva]);
            $evaluation = $query->fetch();
            return $evaluation;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function ModifierEvaluation($evaluation, $idEva){
        try {
            $db = config::getConnexion();
            $query = $db->prepare('UPDATE evaluations SET titreEva = :titreEva, duree = :duree, descE = :descE WHERE idEva = :idEva');
            $query->execute([
                'titreEva' => $evaluation->getTitreEva(),
                'duree' => $evaluation->getDuree(),
                'descE' => $evaluation->getDescE(),
                'idEva' => $idEva
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>
