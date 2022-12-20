<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto PHP Fundamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-light">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Pricipal</span>
      </div>
    </nav>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome do Curso</th>
            <th scope="col">Carga Horária</th>
            <th scope="col">Versão da ferramenta</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($cursoRepositorio->todos() as $curso) : ?>
            <?php 
              if (!$curso->getStatus()) {
                continue;
              }
            ?>
            <tr>
              <th scope="row"><?= $curso->getNome() ?></th>
              <td><?= App\Uteis\Formatador::cargaHoraria($curso->getCargaHoraria()) ?></td>
              <td><?= $curso->getVersaoFerramenta() ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>