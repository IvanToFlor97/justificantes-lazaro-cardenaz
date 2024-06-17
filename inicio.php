<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    <div class="watermark"></div>
    <div class="Opciones">
        <div class="Alumno">
            <a href="/Pagina/Alumnos/index.php">
                <img src="img/png-transparent-lecture-teacher-student-business-logo-teacher-blue-text-class.png" alt="Alumno">
                <h1>Alumno</h1>
            </a>
        </div>
        <div class="Docente">
            <a href="/Pagina/Docentes/index.php">
            <img src="img/png-clipart-computer-icons-teacher-professor-education-lecturer-teacher-angle-logo-thumbnail.png" alt="Docente">
            <h1>Docente</h1></a>
        </div>
    </div>
</body>
<style>body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
    position: relative;
    background-color: rgb(197, 213, 231);
}

.watermark {
    position: absolute;
    top: 50%;
    left: 65%;
    transform: translate(-50%, -50%);
    opacity: 0.1;
    background-image: url('img/escudo minerva BUAP.png');
    background-size: contain;
    background-repeat: no-repeat;
    width: 70%;
    height: 90%;
    z-index: -1; /* Ensure the watermark is behind other content */
}

.Opciones {
    display: flex;
    gap: 20px;
    position: relative;
    z-index: 1;
}

.Alumno, .Docente {
    width: 250px;
    text-align: center;
    margin: 100px;
    border: 5px solid rgba(0, 0, 0, 0.253);
    border-radius: 10%;
}

.Alumno img {
    width: 250px;
    height: auto;
    display: block;
    margin: 0 auto;
}

.Docente img {
    width: 150px;
    height: auto;
    display: block;
    margin: 0 auto;
}

.Alumno a, .Docente a {
    text-decoration: none;
    color: black;
}

h1 {
    margin-top: 10px;
}
</style>

</html>
