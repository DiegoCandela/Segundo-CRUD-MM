<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Inicial</title>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center; /* Centrar horizontalmente el contenido */
            justify-content: center; /* Centrar verticalmente el contenido */
            min-height: 100vh; /* Asegurar que ocupe toda la altura de la vista */
        }
        .navbar {
            background-color: #333;
            text-align: center;
            padding: 40px 20px; /* Ajuste de padding */
            border-radius: 20px; /* Bordes redondeados */
            margin: 20px 0; /* Espacio superior e inferior */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Sombra para efecto flotante */
            display: flex;
            flex-direction: column;
            align-items: center; /* Centrar contenido */
            max-width: 800px; /* Máxima anchura del contenedor */
            width: 100%; /* Permitir que sea flexible */
        }
        .logo h1 {
            font-size: 1.5rem;
            color: white;
            margin: 0;
        }
        .navbar nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }
        .navbar nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 10px 15px;
            transition: background-color 0.3s ease;
        }
        .navbar nav ul li a:hover {
            background-color: #ff8780;
            border-radius: 5px;
        }
        .welcome-section {
            background-color: #ff8780;
            color: white;
            text-align: center;
            padding: 40px 20px; /* Ajuste de padding */
            border-radius: 20px; /* Bordes redondeados */
            margin: 20px 0; /* Espacio superior e inferior */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Sombra para efecto flotante */
            display: flex;
            flex-direction: column;
            align-items: center; /* Centrar contenido */
            max-width: 600px; /* Máxima anchura del contenedor */
            width: 100%; /* Permitir que sea flexible */
        }
        .welcome-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 600;
        }
        .welcome-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        .cta-button {
            background-color: white;
            color: #ff2d20;
            padding: 15px 30px;
            border-radius: 10px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .cta-button:hover {
            background-color: #f2f2f2;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 20px; /* Espacio superior para separar del contenido */
            width: 100%;
        }
        .footer p {
            font-size: 0.9rem;
            letter-spacing: 1px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .welcome-section h2 {
                font-size: 2rem;
            }
            .cta-button {
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <h1>Supermercado</h1>
        </div>
    </header>

    <section class="welcome-section">
        <h2>Bienvenido al panel de control</h2>
        <p>Gestiona y monitorea el supermercado de forma simple, intuitiva y eficaz.</p>
        <a href="admin" class="cta-button">Comenzar</a>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Todos los derechos reservados. Diseñado por Diego Candela.</p>
    </footer>
</body>
</html>
