<?php

require_once __DIR__.'/../repository/TaskRepository.php';

session_start();
$userId = $_SESSION['user_id'] ?? null;

if ($userId) {
    $taskRepository = new TaskRepository();
    $events = $taskRepository->getTasks($userId);

    $formattedEvents = [];
    foreach ($events as $event) {
        $formattedEvents[] = [
            'title' => $event->getTitle(),
            'start' => $event->getDueAt(),
        ];
    }

    echo json_encode($formattedEvents);
} else {
    echo json_encode([]);
}