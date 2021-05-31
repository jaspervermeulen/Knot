<?php

require_once( __DIR__ . '/DAO.php');

class ContactDAO extends DAO {

    public function selectAll(){
        $sql = "SELECT * FROM `contact`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
    
      public function insert($data) {
        $sql = "INSERT INTO `contact` (`name`, `email`, `message`) VALUES (:name, :email, :message)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':name', $data['name']);
        $stmt->bindValue(':email', $data['email']);
        $stmt->bindValue(':message', $data['message']);
        $stmt->execute();
      }
}
