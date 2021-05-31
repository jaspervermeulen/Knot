<?php

require_once( __DIR__ . '/DAO.php');

class TicketDAO extends DAO {

    public function selectAll(){
      $sql = "SELECT * FROM `ticket`";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function insertRegular($data) {
      $sql = "INSERT INTO `ticket` (`type`,`name`,`address`, `place`,`email`,`membernr`) VALUES (:type, :name, :address, :place, :email, :membernr)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':type', 'Regular');
      $stmt->bindValue(':name', $data['firstname'] . ' ' . $data['lastname']);
      $stmt->bindValue(':address', $data['address']);
      $stmt->bindValue(':place', $data['place']);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':membernr', 'none');
      $stmt->execute();
    }

    public function insertMember($data) {
      $sql = "INSERT INTO `ticket` (`type`,`name`,`address`, `place`,`email`,`membernr`) VALUES (:type, :name, :address, :place, :email, :membernr)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':type', 'Member');
      $stmt->bindValue(':name', $data['firstname']);
      $stmt->bindValue(':address', 'none');
      $stmt->bindValue(':place', 'none');
      $stmt->bindValue(':email', 'none');
      $stmt->bindValue(':membernr', $data['membernr']);
      $stmt->execute();
    }

    public function insertStudent($data) {
      $sql = "INSERT INTO `ticket` (`type`,`name`,`address`, `place`,`email`,`membernr`) VALUES (:type, :name, :address, :place, :email, :membernr)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':type', 'Student');
      $stmt->bindValue(':name', $data['firstname'] . ' ' . $data['lastname']);
      $stmt->bindValue(':address', $data['address']);
      $stmt->bindValue(':place', $data['place']);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':membernr', 'none');
      $stmt->execute();
    }
}
