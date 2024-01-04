<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz Zadania</title>
    <link rel="stylesheet" href="public/css/add_task.css">
</head>
<body>
<div id="sidebar">
    <img src="public/img/logo.png" alt="Logo">
    <a href="addTask">Add Tasks</a>
    <a href="main_page">Main Page</a>
    <a href="all_tasks">All Tasks</a>
    <a href="#">My Account</a>
    <a href="login">Logout</a>
</div>
<main>
<h2>Dodaj Nowe Zadanie</h2>

<form action="addTask" method="POST">
    <div class="messages">
        <?php
        if(isset($messages)){
            foreach($messages as $message) {
                echo $message;
            }
        }
        ?>
    </div>
    <label for="title">Tytuł zadania: <span style="color: red;">*</span></label>
    <input type="text" id="title" name="title" required>
    <br>

    <label for="description">Opis zadania:</label>
    <textarea id="description" name="description"></textarea>
    <br>

    <label for="due_at">Data zakończenia: <span style="color: red;">*</span></label>
    <input type="date" id="due_at" name="due_at" required>
    <br>

    <button type="submit">Dodaj Zadanie</button>
</form>
</main>

</body>
</html>

