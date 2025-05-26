<?php

class Contact {
    public $name;
    public $email;
    public $phone;

    public function __construct($name, $email, $phone) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    //retorna nome
    public function getName() {
        return $this->name;
    }

    //retorna endereço de email
    public function getEmail() {
        return $this->email;
    }

    //retorna teledone phone
    public function getPhone() {
        return $this->phone;
    }

    //atualiza o endereço de email
    public function setEmail($email) {
        return $this->email = $email;
    }

    //atualiza telefone
    public function setPhone($phone) {
        return $this->phone = $phone;
    }
}