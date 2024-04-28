<?php namespace classe;

    class Tarefa{
        
        private $id;
        private $titulo;

        public function __construct(int $id, $titulo)
        {
            $this->id = $id;
            $this->titulo = $titulo;
        }

        public function getId(){
            return $this->id;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function getTitulo(){
            return $this->titulo;
        }
    }
?>