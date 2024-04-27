<?php namespace classe;

    require('Tarefa.php');
    
    class Usuario{
        
        private $id;
        private $nome;
        private $idade;
        private $email;
        private $senha;
        private $tarefas;

        function __construct(string $nome, string  $idade,string $id, string  $email, string  $senha)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->id = $id;
            $this->email = $email;
            $this->senha = $senha;
            $this->tarefas = array();
        }

        function setNome(string $nome){
            $this->nome = $nome;
        }

        function getNome(){
            return $this->nome;
        }

        function setIdade(string $idade){
            $this->idade = $idade;
        }

        function getIdade(){
            return $this->idade;
        }

        function setId(string $id){
            $this->id = $id;
        }

        function getId(){
            return $this->id;
        }

        function setEmail(string $email){
            $this->email = $email;
        }

        function getEmail(){
            return $this->email;
        }

        function setSenha(string $senha){
            $this->senha = $senha;
        }
        
        function getSenha(){
            return $this->senha;
        }
        
        function setTarefa($tarefa){
            $this->tarefas[] = $tarefa;
        }   

        function getTarefa(){
            return $this->tarefas;
        }

        function __destruct()
        {
            echo "Fim";
        }
    }
?>