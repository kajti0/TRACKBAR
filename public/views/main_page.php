<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <link rel="stylesheet" href="/public/css/main_page.css">
    <script src="https://kit.fontawesome.com/f6a8e7b339.js" crossorigin="anonymous"></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
</head>
<body>
<div id="sidebar">
    <img src="public/img/logo.png" alt="Logo">
    <a href="addTask">Add Tasks</a>
    <a href="all_tasks">All Tasks</a>
    <a href="#">My Account</a>
    <a href="logout">Logout</a>
</div>
<main>
    <header>
        <h1>Hi <?= $_SESSION['user_name'] ?? 'User'; ?>!</h1>
    </header>
    <div id="content">
        <div class="tasks">
            <?php foreach($tasks as $task): ?>
                <div id="task">
                    <div class="details">
                        <h2><?= $task->getTitle(); ?></h2>
                        <p><?= $task->getDescription(); ?></p>
                    </div>
                    <div class="interaction">
                        <i class="fa-solid fa-check"> Done!</i>
                        <i class="fa-solid fa-pen-to-square"> More info</i>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="weather">
            <div class="elfsight-app-1c164585-35c9-45f0-bcbd-e6d2ab7eebe7" data-elfsight-app-lazy></div>
        </div>
    </div>
</main>
</body>
</html>