<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8'/>
  <title>All Tasks</title>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: [
          {
            title: 'Task 1',
            start: '2023-11-01'
          },
          {
            title: 'Task 2',
            start: '2023-11-05'
          },
          {
            title: 'Task 3',
            start: '2023-11-15'
          }
        ]
      });
      calendar.render();
    });
  </script>
  <link rel="stylesheet" href="/public/css/all_tasks.css">
</head>
<body>
  <div id="sidebar">
    <img src="public/img/logo.png" alt="Logo">
    <a href="#">Add Tasks</a>
    <a href="#">All Tasks</a>
    <a href="#">My Account</a>
    <a href="#">Logout</a>
  </div>
  <div id='calendar'></div>
</body>
</html>

