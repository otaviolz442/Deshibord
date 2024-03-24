<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios</title>
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
        <h1>Relatórios</h1>
        <div class="report-list">
            <?php

            $reports = array(
                array("id" => 1, "title" => "Relatório Mensal", "date" => "15/03/2024"),
                array("id" => 2, "title" => "Relatório Trimestral", "date" => "30/03/2024"),
                array("id" => 3, "title" => "Relatório Anual", "date" => "01/04/2024")
            );


            foreach ($reports as $report) {
                echo '<div class="report">';
                echo '<h2>' . $report["title"] . '</h2>';
                echo '<p>Data de publicação: ' . $report["date"] . '</p>';
                echo '<a href="view_report.php?id=' . $report["id"] . '">Visualizar</a>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
