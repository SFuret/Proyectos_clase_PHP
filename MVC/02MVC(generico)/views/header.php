<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?? 'Mi sitio'; ?></title>
</head>
<body>
    <header>
        <h1>Bienvenido a mi sitio web</h1>
        <nav>
            <a href="?controller=HomeController&action=default">Inicio</a>
            <a href="?controller=AboutController&action=default">Acerca de</a>
        </nav>
    </header>
