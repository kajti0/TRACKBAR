<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Task.php';
require_once __DIR__.'/../repository/TaskRepository.php';

class TaskController extends AppController
{
    private $message = [];
    private $taskRepository;

    public function __construct()
    {
        parent::__construct();
        $this->taskRepository = new TaskRepository();
    }

    public function addTask()
    {
        if ($this->isPost()) {

            $task = new Task($_POST['title'], $_POST['description'], $_POST['due_at'], $_SESSION['user_id']);
            $this->taskRepository->addTask($task);
            return $this->render('main_page', ['messages' => $this->message]);
        }
        return $this->render('add_task', ['messages' => $this->message]);
    }

    public function main_page()
    {
        session_start();
        $userId = $_SESSION['user_id'] ?? null;
        $tasks = $this->taskRepository->getTasks($userId);
        $this->render('main_page',['tasks'=>$tasks]);
    }
    
}