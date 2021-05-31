<?php

require_once( __DIR__ . '/DAO.php');

class AgendaDAO extends DAO {

  public function selectAllItems(){
    $sql = "SELECT * FROM `agenda`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getAllPlaces(){
    $sql = "SELECT MIN(`id`) AS `id`, `place` FROM `agenda` GROUP BY `place`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getAllWhos(){
    $sql = "SELECT MIN(`id`) AS `id`, `who` FROM `agenda` GROUP BY `who`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectItemById($id){
    $sql = "SELECT * FROM `agenda` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectWithFilter($place = false,$who = ''){
    $sql = "SELECT * FROM `agenda` WHERE `place` LIKE :place";
    $bindValues = array();
    $bindValues[':place'] = '%' . $place . '%';

    if(!empty($who)){
      $sql .= " AND `who` = :who";
      $bindValues[':who'] = $who;
    }

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute($bindValues);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}
