
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Controle de Estoque</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
            <nav class="navbar">
                <div class="logo">
                    <h2>CDE</h2>
                </div>
                <ul class="nav-links">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="cadastro.php">Cadastro</a></li>
                    <li><a href="medicamentos.php">Medicamentos</a></li>
                    <li><a href="relatorios.php">Relatórios</a></li>

                </ul>
                <div class="logout">
                    <a href="logout.php">Sair</a>
                </div>
            </nav>
            <div class="report-container">
        <h1>Formulário de Cadastro de Produtos</h1>
        <h2>Preencha os campos obrigatórios do formulário.</h2>
    </div>
</body>
</html>
<body>
<div class="report-container">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<form class="row g-3 needs-validation" novalidate>
<div class="col-md-5">
    <label for="validationCustom01" class="form-label">Nome do produto:</label>
    <input type="text" class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-5">
    <label for="validationCustom02" class="form-label">Fornecedor:</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label"> Responsável pelo cadastro:</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom02" class="form-label">Data:</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Tipo de medicamento:</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Selecione...</option>
      <option>Curativos</option>
      <option>Proteção individual</option>
      <option>Diagnóstivo</option>
      <option>Higiene</option>
      <option>Emergência</option>
      <option>Mobiliário</option>
      <option>Esterialização e limpeza</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
      Concorde com os termos e condições.
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button onclick="mostrarAnuncio()" class="btn btn-primary" type="submit">Enviar</button>
    <script>
        function mostrarAnuncio() {
            alert("Produto adicionado com sucesso!");
        }
    </script>
  </div>
</form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
