<?php

require_once( __DIR__ . '/DAO.php');

class MemberDAO extends DAO {

    public function selectAll(){
        $sql = "SELECT * FROM `member`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
    
      public function insert($data) {
        $sql = "INSERT INTO `member` (`firstname`, `lastname`, `address`, `place`,`email`,`news`) VALUES (:firstname, :lastname, :address, :place, :email, :news)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':firstname', $data['firstname']);
        $stmt->bindValue(':lastname', $data['lastname']);
        $stmt->bindValue(':address', $data['address']);
        $stmt->bindValue(':place', $data['place']);
        $stmt->bindValue(':email', $data['email']);
        $stmt->bindValue(':news', $data['news']);
        $stmt->execute();
      }
}
