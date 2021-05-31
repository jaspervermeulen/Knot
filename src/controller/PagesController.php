<?php

require_once __DIR__ . '/Controller.php';

require_once __DIR__ . '/../dao/AgendaDAO.php';
require_once __DIR__ . '/../dao/MemberDAO.php';
require_once __DIR__ . '/../dao/ContactDAO.php';
require_once __DIR__ . '/../dao/ReviewDAO.php';

class PagesController extends Controller {

  function __construct() {
    $this->AgendaDAO = new AgendaDAO();
    $this->MemberDAO = new MemberDAO();
    $this->ContactDAO = new ContactDAO();
    $this->ReviewDAO = new ReviewDAO();
  }

  public function index() {
    $this->set('page', 'Home');
  }

  public function agenda() {
    $place = '';
    if (!empty($_GET['place'])) {
      $place = $_GET['place'];
    }
    $who = '';
    if(!empty($_GET['who'])){
      $who = $_GET['who'];
    }

    if(empty($_GET['place'])){
      $agendaItems = $this->AgendaDAO->selectAllItems();
    }else{
      $agendaItems = $this->AgendaDAO->selectWithFilter($place,$who);
    }
    
    if ($_SERVER['HTTP_ACCEPT'] == 'application/json') {
      $agendaItems = $this->AgendaDAO->selectAllItems();
      echo json_encode($agendaItems);
      exit();
    }
    
    $this->set('items', $agendaItems);
    
    $agendaPlaces = $this->AgendaDAO->getAllPlaces();
    $this->set('places', $agendaPlaces);

    $agendaWho = $this->AgendaDAO->getAllWhos();
    $this->set('whos', $agendaWho);

    $this->set('page', 'Agenda');
  }

  public function contact() {
    $errors = array();
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertMessage') {
        if (empty($_POST['name'])) {
          $errors['name'] = 'Gelieve een naam in te vullen';
        }
        if (empty($_POST['email'])) {
          $errors['email'] = 'Gelieve een email in te vullen';
        }
        if (empty($_POST['message'])) {
          $errors['message'] = 'Gelieve een bericht in te vullen';
        }
      }
    }

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertMessage') {
        if (empty($errors)) {
          $contactInfo = $this->ContactDAO->insert($_POST);
        }
      }
    }
    $this->set('members', $this->MemberDAO->selectAll());
    $this->set('page', 'Contact');
  }

  public function member() {
    $errors = array();
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertMember') {
        if (empty($_POST['firstname'])) {
          $errors['firstname'] = 'Gelieve een naam in te vullen';
        }
        if (empty($_POST['lastname'])) {
          $errors['lastname'] = 'Gelieve een achternaam in te vullen';
        }
        if (empty($_POST['address'])) {
          $errors['address'] = 'Gelieve een adres in te vullen';
        }
        if (empty($_POST['place'])) {
          $errors['place'] = 'Gelieve een plaats in te vullen';
        }
        if (empty($_POST['email'])) {
          $errors['email'] = 'Gelieve een email in te vullen';
        }
        if(empty($_POST['news'])){
          $_POST['news'] = 'off';
        }
      }
    }

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertMember') {
        if (empty($errors)) {
          
          $memberInfo = $this->MemberDAO->insert($_POST);
        }
      }
    }
    
    $this->set('members', $this->MemberDAO->selectAll());
    $this->set('page', 'Member');
  }

  public function tickets() {
    $this->set('page', 'Ticket');
  }
  
  public function detail() {
    $detail = $this->AgendaDAO->selectItemById($_GET['id']);
    $this->set('detail', $detail);
    $this->set('page', 'Details');
  }

  public function about() {
    $reviews = $this->ReviewDAO->selectAll();
    $this->set('reviews',$reviews);
    $this->set('page', 'About');
  }
}