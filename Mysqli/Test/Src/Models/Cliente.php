<?php

namespace App\Models;

class Cliente{
    private $id;
    private $nome;
    private $endereco;
    private $email;
    private $dataNascimento;
    private $CPF;

    public function getHTTPMethods(){
        if (isset($_POST['id'])){
            $this->id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        }elseif (isset($_GET['id'])) {
            $this->id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            $this->id = 0;
        }
        if (isset($_POST['nome'])){
            $this->nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        }elseif (isset($_GET['nome'])) {
            $this->nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            $this->nome = '';
        }
        if (isset($_POST['endereco'])){
            $this->endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
        }elseif (isset($_GET['endereco'])) {
            $this->endereco = filter_input(INPUT_GET, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            $this->endereco = '';
        }
        if (isset($_POST['email'])){
            $this->email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        }elseif (isset($_GET['email'])) {
            $this->email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            $this->email = '';
        }
        if (isset($_POST['dataNascimento'])){
            $this->dataNascimento = filter_input(INPUT_POST, 'dataNascimento', FILTER_SANITIZE_SPECIAL_CHARS);
        }elseif (isset($_GET['dataNascimento'])) {
            $this->dataNascimento = filter_input(INPUT_GET, 'dataNascimento', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            $this->dataNascimento = null;
        }
        if (isset($_POST['CPF'])){
            $this->CPF = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_SPECIAL_CHARS);
        }elseif (isset($_GET['CPF'])) {
            $this->CPF = filter_input(INPUT_GET, 'CPF', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            $this->CPF = null;
        }
    }
}