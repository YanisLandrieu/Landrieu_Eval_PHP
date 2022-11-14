<?php require_once __DIR__ . '/inc/header.php'; ?>
<?php require_once __DIR__ . '/functions.php';
$infos = get_all_link();
?>

<body>
    <header class="py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <h1 class="display-4 text-center">Gestionnaire de liens utiles</h1>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="mb-3">
              <form action="" method="post">
                <div class="row g-2">
                  <div class="col-md">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="title"
                        name="title"
                        placeholder="Stack overflow"
                      />
                      <label for="title">Titre</label>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-floating">
                      <input
                        type="url"
                        class="form-control"
                        id="url"
                        name="url"
                        placeholder="https://stackoverflow.com"
                      />
                      <label for="url">Lien</label>
                    </div>
                  </div>
                  <div class="col-md-auto d-flex">
                    <button class="btn btn-primary btn-lg">Ajouter</button>
                  </div>
                </div>
              </form>
            </div>
            <ul class="list-group">
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
              >
                <?php foreach ($infos as $links) : ?>
                <a href="<?= $links['url'] ?>"> MDN Web docs</a>
                <?php endforeach; ?>
                <span>
                  <i class="fa-regular fa-pen-to-square me-1 text-warning"></i>
                  <i class="fa-solid fa-trash ms-1 text-danger"></i>
                </span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
              >
                <a href="https://css-tricks.com">CSS tricks</a>
                <span>
                  <i class="fa-regular fa-pen-to-square me-1 text-warning"></i>
                  <i class="fa-solid fa-trash ms-1 text-danger"></i>
                </span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
              >
                <a href="https://www.awwwards.com">AWWARDS</a>
                <span>
                  <i class="fa-regular fa-pen-to-square me-1 text-warning"></i>
                  <i class="fa-solid fa-trash ms-1 text-danger"></i>
                </span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
              >
                <a href="https://eilgin.github.io/php-the-right-way"
                  >PHP the right way</a
                >
                <span>
                  <i class="fa-regular fa-pen-to-square me-1 text-warning"></i>
                  <i class="fa-solid fa-trash ms-1 text-danger"></i>
                </span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
              >
                <a href="https://beta.reactjs.org">React.JS New doc</a>
                <span>
                  <i class="fa-regular fa-pen-to-square me-1 text-warning"></i>
                  <i class="fa-solid fa-trash ms-1 text-danger"></i>
                </span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </main>
    <?php require_once __DIR__ . '/inc/footer.php'; ?>