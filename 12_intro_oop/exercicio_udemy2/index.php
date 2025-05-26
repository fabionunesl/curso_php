<?php

class Task {

    public $title;
    public $description;
    public $completed;

    // construtor para inicializar a tarefa

    public function __construct($title, $description) {
        
        $this->title = $title;
        $this->description = $description;
        $this->completed = false; // por padrão a tarefa começa como falso, ou seja, nao concluída

    }

    // marca como concluída
    public function markAsCompleted() {
        $this->completed = true;
    }

    //marca como nao concluída
    public function markAsIncomplete(){
        $this->completed = false;
    }


    //retorna título
    public function getTitle() {
        return $title->title;
    }

    //retorna a descrição
    public function getDescription() {
        return $this->completed;
    }

    //retorna se está concluída (true ou false)
    public function isCompleted() {
        return $this->completed;
    }
}

$task = new Task("Estudar", "Ver vídeos, exercícios, praticar.");
    
    echo "Título: " . $task->getTitle() . "<br><br>";
    echo "Descrição: " . $task->getDescription() . "<br><br>";
    echo "Concluída? " . ($task->isCompleted() ? "Sim" : "Não") . "<br><br>";

    //marca como concluída
    $task->markAsCompleted();

    echo "Concluída agora?" . ($task->isCompleted() ? "Sim" : "Não") . "<br><br>";