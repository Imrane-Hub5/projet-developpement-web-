<?php
require_once __DIR__ . '/../config/Database.php';

class OffreModel {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::connect();
    }

    public function getAllOffres($limit = 6) {
        $stmt = $this->pdo->prepare("SELECT * FROM offres ORDER BY created_at DESC LIMIT :limit");
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
