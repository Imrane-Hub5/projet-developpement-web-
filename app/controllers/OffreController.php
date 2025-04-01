<?php
require_once 'app\config\config.php';

class OffreController {
    public function getAllOffres() {
        global $pdo;
        $sql = "SELECT offres.*, entreprises.nom AS entreprise_nom FROM offres 
                JOIN entreprises ON offres.entreprise_id = entreprises.id";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll();
    }
}

$controller = new OffreController();
$offres = $controller->getAllOffres();
?>
