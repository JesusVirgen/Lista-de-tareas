<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" defer src="./regist_serviceWorker.js"></script>
    <script type="module" defer src="./Service_Worker.js"></script>
    <title>Mi proyecto</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="manifest" href="./manifest.json" />
    <link rel="php" href="./serv.php">
    <script defer src="./main.js"></script>
    <meta name="theme-color" content="rgb(1, 20, 71)" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <meta name="theme-color" content="#2F3BA2">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" type="image/png" href="./imagenPWA/icon-500x500.png">
    <link rel="apple-touch-icon" href="./imagenPWA/icon-500x500.png">
    <link rel="apple-touch-startup-image" href="./imagenPWA/icon-500x500.png">

    <link rel="apple-touch-icon" href="./imagenPWA/icon-30x30.png" />
    <link rel="apple-touch-icon" href="./imagenPWA/icon-50x50.png" />
    <link rel="apple-touch-icon" href="./imagenPWA/icon-80x80.png" />
    <link rel="apple-touch-icon" href="./imagenPWA/icon-100x100.png" />
    <link rel="apple-touch-icon" href="./imagenPWA/icon-150x150.png" />
    <link rel="apple-touch-icon" href="./imagenPWA/icon-200x200.png" />
    <link rel="apple-touch-icon" href="./imagenPWA/icon-300x300.png" />
    <link rel="apple-touch-icon" href="./imagenPWA/icon-400x400.png" />
    <link rel="apple-touch-icon" href="./imagenPWA/icon-500x500.png" />
    <meta name="apple-mobile-web-app-status-bar" content="#db4938" />
</head>

<body>
    <h2>Lista de tareas</h2>
    <div class="wrapper">
        <div class="task-input">
            <input type="text" placeholder="Agrega nueva tarea">
        </div>
        <div class="controls">
            <div class="filters">
                <span class="active" id="all">Todas</span>
                <span id="pending">Pendientes</span>
                <span id="completed">Completadas</span>
            </div>
            <button class="clear-btn">Limpiar todo</button>
        </div>
        <ul class="task-box"></ul>
    </div>
</body>

</html>