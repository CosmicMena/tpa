<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>TPA | Agorra</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="formulario">
  <div class="bg">
      <h1>TPA - Em direito</h1>
      <form  method="POST" action="atualizar.php">
          <label for="titulo">Titulo</label>
          <input type="text" id="titulo" name="titulo">
          <label for="textoo">Texto</label>
          <input type="text" id="textoo" name="info" class="textop">
          <label for="controle">Controlar Rodapé</label>
          <input type="number" name="controle" id="controle" value="0">
          <input type="submit" name="enviar" value="Atualizar Rodapé">
      </form>
      
  </div>
</body>
</html>