<?php

class Client{
    private int $idClient ;
    private string $lastName;
    private string $firstName;
    private string $address;
    private \DateTime $dob;

    public function getIdC (){
        return self::$idClient;
    }
    public function getLastNameC (){
        return self::$lastName;
    }
    public function getFirstNameC (){
        return self::$firstName;
    }
    public function getAddressC (){
        return self::$address;
    }
    public function getDobC (){
        return self::$dob;
    }
    public function __construct(int $idClient=0,string $firstName='',string $lasttName='',string $address='',\DateTime $dob=new DateTime("now")){
        $this->idClient=$idClient;
        $this->lastName=$lasttName;
        $this->firstName=$firstName;
        $this->address=$address;
        $this->dob=$dob;
    }


}

?>