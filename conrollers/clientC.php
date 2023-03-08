<?php
require_once "../models/config.php";

class ClientC {
    public function listClients (){
        $sql = "SELECT * FROM client ";

        $db = config::getConnexion();

        try {
            $query = $db->prepare($sql);

            $query->execute();
            $result=$query->fetchALL();
            return $result;

        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    public function deleteClient(){

    }
    public function addClient(){
        
    }
    public function updateClient(){
        
    }
}
?>