<?php

require_once( __DIR__ . '/DAO.php');

class ReviewDAO extends DAO {

    public function selectAll(){
      $sql = "SELECT * FROM `reviews`";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
