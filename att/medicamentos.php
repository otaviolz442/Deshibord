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
        <h1>Formulário de Medicamentos</h1>
        <h2>Preencha os campos obrigatórios do formulário.</h2>
    </div>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Adicionar Produto</title>
</head>
<body>
<div class="report-container">
<form id="productForm" method="$_POST">
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
  <div class="col-md-5">
    <label for="validationCustomUsername" class="form-label"> Responsável pelo cadastro:</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
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
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>

<script>
document.getElementById("productForm").addEventListener("submit", function(event) {
  event.preventDefault();
  
  var productName = document.getElementById("validationCustom01").value;
  var productSupplier = document.getElementById("validationCustom02").value;
  var productResponsible = document.getElementById("validationCustomUsername").value;
  
  var table = document.getElementById("productTableBody");
  var newRow = table.insertRow();
  
  var idCell = newRow.insertCell(0);
  var nameCell = newRow.insertCell(1);
  var supplierCell = newRow.insertCell(2);
  var responsibleCell = newRow.insertCell(3);
  
  idCell.textContent = table.rows.length;
  nameCell.textContent = productName;
  supplierCell.textContent = productSupplier;
  responsibleCell.textContent = productResponsible;
  
  document.getElementById("validationCustom01").value = "";
  document.getElementById("validationCustom02").value = "";
  document.getElementById("validationCustomUsername").value = "";
});
</script>
</div>
</body>
</html>
<body>
<div class="report-container">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<table class="table caption-top">
  <caption>Itens e medicamentos</caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome do produto</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Responsável pelo cadastro</th>
    </tr>
  </thead>
  <tbody id="productTableBody">
    <tr>
      <th scope="row">1</th>
      <td>Gaze</td>
      <td>Fornecedor de Gazes LTDA</td>
      <td>@medica_julia</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Siringa</td>
      <td>Fornecedor de Siringas LTDA</td>
      <td>@doutor_claudio</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ibuprofeno</td>
      <td>Fornecedor de Ibuprofeno LTDA</td>
      <td>@dra_cristina</td>
    </tr>
  </tbody>
</table>
</div>
</body>
</body>
