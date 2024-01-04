<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Task.php';

class TaskRepository extends Repository
{
    public function getTask(int $id): ?Task
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.tasks WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $task = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($task == false) {
            return null;
        }

        return new Task(
            $task['title'],
            $task['description'],
            $task['due_at']
        );
    }

    public function addTask(Task $task): void
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO tasks (title, description, due_at, id_created_by)
            VALUES (?, ?, ?, ?)
        ');
        session_start();
        $stmt->execute([
            $task->getTitle(),
            $task->getDescription(),
            $task->getDueAt(),
            $_SESSION['user_id']
        ]);
    }

    public function getTasks($userId): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare(
            'SELECT * FROM tasks where id_created_by = :userId'
        );

        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->execute();
        $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($tasks as $task){
            $result[] = new Task(
                $task['title'],
                $task['description'],
                $task['due_at']
            );
        }

        return $result;

    }
}