<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div aling="left"> 
      <form id='fquestion' name='fquestion' action='AddQuestion.php'>

        <p>
          <label for='email'> Dirección de Correo: </label>
          <input type='text' id='email' name='email'>
        </p>
        <p>
          <label for='question'> Enunciado de la pregunta: </label>
          <input type='text' id='question' name='question'>
        </p>
        <p>
          <label for='resp_ok'> Respuesta correcta: </label>
          <input type='text' id='resp_ok' name='resp_ok'>
        </p>
        <p>
          <label for='resp_mal1'> Respuesta incorrecta 1: </label>
          <input type='text' id='resp_mal1' name='resp_mal1'>
        </p>
        <p>
          <label for='resp_mal2'> Respuesta incorrecta 2: </label>
          <input type='text' id='resp_mal2' name='resp_mal2'>
        </p>
        <p>
          <label for='resp_mal3'> Respuesta incorrecta 3: </label>
          <input type='text' id='resp_mal3' name='resp_mal3'>
        </p>
        <p>
          <label for='tema'> Tema: </label>
          <input type='text' id='tema' name='tema'>
        </p>
        <p>
          <label for='complejidad'> Complejidad: </label>
          <input type='text' id='complejidad' name='complejidad'>
        </p>
        <input type='submit' value='preguntar' id='preguntar' onclick='return validarForm();'>

      </form>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
