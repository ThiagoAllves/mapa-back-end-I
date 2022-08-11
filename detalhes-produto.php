<html lang="en">
<?php
$produtos = [
  'prato1' => [
    'id' => 1,
    'titulo' => 'Carne de sol com mandioca',
    'descricao' => 'A carne de sol com mandioca é preparada na manteiga de garrafa e servida à mesa com mandioca frita ou cozida, uma combinação perfeita de sabor e simplicidade.',
    'img' => 'pd1.png',
  ],
  'prato2' => [
    'id' => 2,
    'titulo' => 'Peito de frango',
    'descricao' => 'O peito de frango defumado do Rancho permite ser fatiado, desfiado, ralado afim de compor saladas, patês, salpicão, cremes, tortas e tudo mais que sua imaginação criar.',
    'img' => 'pd2.png',
  ],
  'prato3' => [
    'id' => 3,
    'titulo' => 'Moqueca de Piratinga',
    'descricao' => 'A Moqueca de Piratinga do Rancho é uma deliciosa peixada, preparada na hora com legumes e hortaliças cultivadas em nossa casa e acompanhada de um delicioso pirão, arroz e salada.',
    'img' => 'pd3.jpeg',
  ],
  'prato4' => [
    'id' => 4,
    'titulo' => 'Lombo grelhado acebolado',
    'descricao' => 'Uma combinação muito saborosa é o Lombo grelhado acebolado, acompanhado de arroz, couve refogada e feijão tropeiro. Combinação típica da gastronomia,',
    'img' => 'pd4.png',
  ],
  'prato5' => [
    'id' => 5,
    'titulo' => 'Galinha ao molho',
    'descricao' => 'Prato galinha ao molho , delicioso e com muito nutrientes',
    'img' => 'pd5.jpeg',
  ],
];
if (isset($_GET['id'])) {
  $idProduto = $_GET['id'];
}
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link href="style.css" rel="stylesheet" />
  <title>Detalhes do prato - <?= $produtos['prato' . $idProduto]['titulo']; ?></title>
</head>

<body>
  <main>
    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sobre</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <section>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/<?= $produtos['prato' . $idProduto]['img']; ?>" class="d-block w-100" alt="imagem - <?= $produtos['prato' . $idProduto]['titulo']; ?>" />
            <div class="carousel-caption d-none d-md-block">
              <h5><?= $produtos['prato' . $idProduto]['titulo']; ?></h5>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container item-detalhes-produto">
      <div class="item img-detalhes-produto">
        <img src="img/<?= $produtos['prato' . $idProduto]['img']; ?>" class="d-block w-100" alt="imagem - <?= $produtos['prato' . $idProduto]['titulo']; ?>" />
      </div>
      <div class="item des-detalhes-produto">
        <h2><?= $produtos['prato' . $idProduto]['titulo']; ?></h2>
        <p>
          <?= $produtos['prato' . $idProduto]['descricao']; ?>
        </p>
        <button type="button" class="btn btn-success">Peça já</button>
      </div>
    </section>

    <section class="produtos">
      <h2>Outros Pratos</h2>
      <?php
      foreach ($produtos as $key => $value) : ?>
        <?php if ($value['id'] == $idProduto) continue; ?>
        <div class="card" style="width: 18rem">
          <img src="img/<?= $value['img']; ?>" class="card-img-top" alt="imagem <?= $value['titulo']; ?>" />
          <div class="card-body">
            <h5 class="card-title"><?= $value['titulo']; ?></h5>
            <p class="card-text">
              <?= $value['descricao']; ?>
            </p>
            <a href="detalhes-produto.php?id=<?= $value['id']; ?>" class="btn btn-primary">Saiba mais</a>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </section>

    <footer>
      <div class="links">
        <div class="item-l">
          <h3>Navegação</h3>

          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Sobre</a></li>
          </ul>
        </div>
        <div class="item-l">
          <h3>Contato</h3>

          <ul>
            <li><a href="#">Telefone: (11) 3429-6242</a></li>
            <li><a href="#">Celular: (11) 9 9927-2334</a></li>
            <li><a href="#">WhatsApp: (11) 9 9927-2334</a></li>
          </ul>
        </div>
        <div class="item-l">
          <h3>Endereço</h3>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3822.226927371576!2d-49.31715068449471!3d-16.66552398851491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef4489be9eec9%3A0x732f88ffdd033d56!2sAv.%20Anhanguera%20Q%201b%2C%200%20-%20Capuava%2C%20Goi%C3%A2nia%20-%20GO%2C%2074450-010!5e0!3m2!1spt-BR!2sbr!4v1660233130538!5m2!1spt-BR!2sbr" width="400" height="300" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      Thiago Victor Dos Santos Alves RA: 21000163-5 © Todos os direitos
      reservados
    </footer>
  </main>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>