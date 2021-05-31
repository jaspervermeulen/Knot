<?php

require_once __DIR__ . '/Controller.php';

require_once __DIR__ . '/../dao/AgendaDAO.php';
require_once __DIR__ . '/../dao/MemberDAO.php';
require_once __DIR__ . '/../dao/TicketDAO.php';

class TicketController extends Controller {

  function __construct() {
    $this->AgendaDAO = new AgendaDAO();
    $this->MemberDAO = new MemberDAO();
    $this->TicketDAO = new TicketDAO();
  }

  public function regularticket() {
    $errors = array();
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertTicket') {
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
      }
    }

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertTicket') {
        if (empty($errors)) {
          $ticketInfo = $this->TicketDAO->insertRegular($_POST);
        }
      }
    }
    $this->set('tickets', $this->TicketDAO->selectAll());
    $this->set('page', 'Regular Ticket');
  }

  public function memberticket() {
    $errors = array();
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertTicket') {
        if (empty($_POST['firstname'])) {
          $errors['name'] = 'Gelieve een naam in te vullen';
        }
        if (empty($_POST['membernr'])) {
          $errors['membernr'] = 'Gelieve een achternaam in te vullen';
        }
      }
    }

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertTicket') {
        if (empty($errors)) {
          $ticketInfo = $this->TicketDAO->insertMember($_POST);
        }
      }
    }
    $this->set('tickets', $this->TicketDAO->selectAll());
    $this->set('page', 'Member Ticket');
  }

  public function studentticket() {
    $errors = array();
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertTicket') {
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
      }
    }

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertTicket') {
        if (empty($errors)) {
          $ticketInfo = $this->TicketDAO->insertStudent($_POST);
        }
      }
    }
    $this->set('tickets', $this->TicketDAO->selectAll());
    $this->set('page', 'Student Ticket');
  }
  
}
