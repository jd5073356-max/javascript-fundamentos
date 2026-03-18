<!--importante este es el mismo codigo HTML pero lo que hice fue cambiarle la terminal a .php y agregarlo a una carpeta "xampp/htdocs/mi-blog/blog.php" y lo ejecute pues con apache dentro de la app de xampp-->
<!DOCTYPE html> <!-- Esto le dice al navegador "oye, esto es una página web" -->
<html lang="es"> 
<head> <!-- La cabeza de la página configuracion-->
  <meta charset="UTF-8"> <!-- Para que se vean bien las letras con tildes á é í -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Para que se vea bien en el celular -->
  <title>Mi Blog Personal</title> <!-- Esto es lo que aparece en la pestaña del navegador -->

  <style> /* pagina de diesño*/

    body { /* el cuerpo lo que se ven la pagina */
      font-family: Arial, sans-serif; /* tipo de letra*/
      background-color: #f2f2f2; /* El color de fondo este es gris clarito */
      color: #333333; /* El color del texto, casi negro */
      margin: 0; /* Le quito el espacio que el navegador pone por defecto */
      padding: 0; 
    }

    header { /*  título grande */
      background-color: #2c7be5; /* Azul bonito para el fondo */
      color: white; /* Las letras de adentro son blancas */
      text-align: center; /*  centrado  */
      padding: 20px; /* espacio */
    }

    header h1 { /* titulo */
      margin: 0; /* Sin espacio extra arriba ni abajo */
      font-size: 32px; /* Tamañoletra */
    }

    header p { /* El texto pequeño debajo del título */
      margin: 5px 0 0; /* Poquito espacio arriba */
      font-size: 14px; /* Letra más pequeña */
    }

    nav { /* La barra de navegacion */
      background-color: #1a5fbf; 
      text-align: center; 
      padding: 10px; /* Espacio*/
    }

    nav a { /* enlace */
      color: white; /* Las letras son blancas */
      text-decoration: none; /* quitar decoracion del texto */
      margin: 0 15px; /* Espacio entre enlace*/
      font-size: 15px;
    }

    nav a:hover { /* Esto pasa cuando el mouse pasa por encima del enlace */
      text-decoration: underline; /* se subraya cuando lo toco */
    }

    .contenedor { /* donde pongo la informacion como un  lienzo */
      width: 80%; /* Ocupa el 80% del ancho de la pantalla */
      margin: 30px auto; /* margen 30%*/
    }

    h2 { /* se repite */
      color: #2c7be5; /* se repite*/
      border-bottom: 2px solid #2c7be5; 
      padding-bottom: 5px; 
    }

    .articulo { /* La cajita blanca donde va cada artículo */
      background-color: white; /* Fondo blanco */
      padding: 20px; /* Espacio por adentro para que el texto no quede pegado */
      margin-bottom: 20px; /* Espacio entre una cajita y la siguiente */
      border-radius: 5px; /* Las esquinas redondeadas un poquito */
      border: 1px solid #dddddd; /* Un borde gris suavecito alrededor */
    }

    .articulo h3 { /* El título de cada artículo */
      margin-top: 0; /* Sin espacio arriba */
      color: #333;
    }

    .articulo p { /* El texto de cada artículo */
      font-size: 14px; /* Letra no muy grande */
      line-height: 1.6; /* Espacio entre líneas para que sea fácil de leer */
    }

    .articulo a { /* El enlace "Leer más" de cada artículo */
      color: #2c7be5; /* Azul */
      text-decoration: none; /* Sin subrayado */
      font-size: 14px;
    }

    .articulo a:hover { /* Cuando paso el mouse por "Leer más" */
      text-decoration: underline; /* Aparece el subrayado */
    }

    .fecha { /* El texto de la fecha del artículo */
      font-size: 12px; /* Letra pequeñita */
      color: #999999; /* Gris clarito para que no llame tanto la atención */
      margin-bottom: 8px;
    }

    .sobre-mi { /* La cajita de presentación personal */
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      border: 1px solid #dddddd;
      margin-bottom: 30px;
    }

    .sobre-mi img { /* Si le pongo una foto, así se va a ver */
      width: 100px; /* La foto mide 100 píxeles de ancho */
      height: 100px; /* Y 100 de alto, o sea es cuadrada */
      border-radius: 50%; /* Con 50% se vuelve redonda como un círculo */
      display: block;
      margin: 0 auto 10px; /* La centro en el medio */
      background-color: #ccc;
    }

    .sobre-mi p { /* El texto dentro de "Sobre mí" */
      text-align: center; /* Centrado */
      font-size: 14px;
    }

    table { /* La tabla donde muestro los temas del blog */
      width: 100%; /* Que ocupe todo el ancho disponible */
      border-collapse: collapse; /* Para que las líneas de la tabla no se dupliquen */
      background-color: white;
      margin-bottom: 30px;
    }

    table th { /* Los títulos de cada columna de la tabla */
      background-color: #2c7be5; /* Fondo azul */
      color: white; /* Letras blancas */
      padding: 10px; /* Espacio adentro */
      text-align: left; /* El texto va a la izquierda */
    }

    table td { /* Las celdas normales de la tabla */
      padding: 10px; /* Espacio adentro de cada celda */
      border-bottom: 1px solid #dddddd; /* Rayita gris abajo de cada fila */
      font-size: 14px;
    }

    table tr:hover { /* Cuando paso el mouse por una fila */
      background-color: #f9f9f9; /* Se pone un poquito más oscura */
    }

    footer { /* La parte de abajo de la página */
      background-color: #333333; /* Fondo gris oscuro */
      color: white; /* Letras blancas */
      text-align: center; /* Centrado */
      padding: 15px;
      font-size: 13px;
    }

    .boton { /* El botón de "Contactarme" */
      display: inline-block; /* Para que se comporte como un botón de verdad */
      background-color: #2c7be5; /* Fondo azul */
      color: white; /* Letras blancas */
      padding: 8px 16px; /* Espacio adentro del botón */
      border-radius: 4px; /* Esquinas redondeadas */
      text-decoration: none; /* Sin subrayado */
      font-size: 13px;
      margin-top: 10px;
    }

    .boton:hover { /* Cuando paso el mouse por el botón */
      background-color: #1a5fbf; /* Se pone más oscuro */
    }

  </style> /* Aquí termina todo el diseño */
</head>

<body> <!-- Aquí empieza lo que el usuario sí puede ver -->

  <!-- Encabezado: la parte de arriba con el nombre del blog -->
  <header>
    <h1>Mi Blog Personal</h1> <!-- Título grande -->
    <p>Tecnología, aprendizaje y más</p> <!-- Descripción pequeña -->
  </header>

  <!-- Navegación: los botones para moverse entre secciones -->
  <nav>
    <a href="#">Inicio</a> <!-- El # significa que el enlace todavía no va a ningún lado -->
    <a href="#">Artículos</a>
    <a href="#">Sobre mí</a>
    <a href="#">Contacto</a>
  </nav>

  <!-- Contenedor: la caja del medio donde va todo el contenido -->
  <div class="contenedor">

    <h2>Últimas publicaciones</h2> <!-- Título de sección -->

    <!-- Artículo 1: una cajita con título, fecha, texto y enlace -->
    <div class="articulo">
      <h3>¿Qué es la inteligencia artificial?</h3>
      <p class="fecha">📅 17 de marzo de 2026</p> <!-- La clase "fecha" le da el estilo gris pequeño -->
      <p>
        La inteligencia artificial es una rama de la informática que busca crear
        sistemas capaces de realizar tareas que normalmente requieren inteligencia
        humana, como reconocer voz, traducir idiomas o tomar decisiones.
      </p>
      <a href="#">Leer más →</a> <!-- Flecha decorativa con texto -->
    </div>

    <!-- Artículo 2 -->
    <div class="articulo">
      <h3>Mis primeros pasos con HTML y CSS</h3>
      <p class="fecha">📅 10 de marzo de 2026</p>
      <p>
        Aprender HTML fue más fácil de lo que pensaba. Con solo unas etiquetas
        básicas como &lt;h1&gt;, &lt;p&gt; y &lt;div&gt; ya puedes construir
        una página web desde cero.
        <!-- &lt; y &gt; son formas de escribir < y > sin que el navegador los confunda con código -->
      </p>
      <a href="#">Leer más →</a>
    </div>

    <!-- Artículo 3 -->
    <div class="articulo">
      <h3>Por qué estudiar programación en 2026</h3>
      <p class="fecha">📅 3 de marzo de 2026</p>
      <p>
        La programación es una habilidad del futuro. Cada vez más empleos
        requieren conocimientos básicos de tecnología, y aprender a programar
        te abre muchas puertas laborales.
      </p>
      <a href="#">Leer más →</a>
    </div>

    <!-- Tabla: sirve para mostrar información organizada en filas y columnas -->
    <h2>Temas del blog</h2>
    <table>
      <tr> <!-- tr significa "fila" -->
        <th>Categoría</th> <!-- th son los títulos de columna, van en negrilla solos -->
        <th>Cantidad de artículos</th>
        <th>Último artículo</th>
      </tr>
      <tr> <!-- Cada tr es una fila nueva -->
        <td>Tecnología</td> <!-- td es una celda normal de la tabla -->
        <td>5</td>
        <td>17 de marzo de 2026</td>
      </tr>
      <tr>
        <td>Programación</td>
        <td>3</td>
        <td>10 de marzo de 2026</td>
      </tr>
      <tr>
        <td>Diseño Web</td>
        <td>2</td>
        <td>3 de marzo de 2026</td>
      </tr>
      <tr>
        <td>Opinión</td>
        <td>1</td>
        <td>25 de febrero de 2026</td>
      </tr>
    </table>

    <!-- Sección sobre mí: presentación personal -->
    <h2>Sobre mí</h2>
    <div class="sobre-mi">
      <p><strong>¡Hola! Me llamo Juan.</strong></p> <!-- strong pone el texto en negrilla -->
      <p>
        Soy estudiante de tecnología y me apasiona aprender sobre programación
        y diseño web. Este blog es un espacio donde comparto lo que voy
        aprendiendo en mi proceso de formación.
      </p>
      <p style="text-align:center;"> <!-- style aquí adentro también funciona, se llama estilo en línea -->
        <a href="#" class="boton">Contactarme</a>
      </p>
    </div>

  </div> <!-- Aquí cierra el contenedor del medio -->

  <!-- Footer: la parte de abajo, como la firma de la página -->
  <footer>
    <p>© 2026 Mi Blog Personal — Hecho con HTML y CSS</p>
  </footer>

</body> <!-- fin visible -->
</html> <!-- fin codigo -->
