<?php

namespace App\Controller;

use App\Model\Connect;

class Booking extends Controller
{
    public function __construct()
    {
        $connect = new Connect('localhost', 'camping','root', '');
        $this->pdo = $connect->getconnect();

        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }
    }

    public function postBook()
    {
        if(isset($_POST['name']) && isset($_POST['type']) && isset($_POST['start']) && isset($_POST['end'])){
            $name = $_POST['name'];
            $type = $_POST['type'];
            $start = $_POST['start'];
            $end = $_POST['end'];

            $table = $this->pdo->prepare('INSERT INTO reservations(name, type, date_debut, date_fin, id_utilisateur) VALUES("'.$name.'","'.$type.'","'.$start.'","'.$end.'","'.$_SESSION['id'].'")');
            $table->execute();

            $_SESSION['message'] = '<p class="connexion">Réservation effectuée</p>';
            header('location:profil');
        }

    }
}