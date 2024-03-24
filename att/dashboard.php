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

    <div class="content">
  
    </div>

</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico e Tabela</title>
  
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
 
        #chart-container {
            width: 600px;
            height: 400px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
<div class="report-container">
    <div id="chart-container">
        <canvas id="myChart"></canvas> 
    </div>
    <script>

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Curativos', 'Proteção Indivudual', 'Diagnostico','Higiene', 'Emergência'],
                datasets: [{
                    label: 'Medicamentos',
                    data: [150, 200, 180,200,120], 
                    backgroundColor: [
                        'rgba(127,255,0, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(0, 0, 0, 1)',
                        'rgba(0, 0, 0, 1)',
                        'rgba(0, 0, 0, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Funcional</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <style>
        #tabela_vendas_wrapper {
            width: 80% auto;
            margin: 20px auto;
        }
    </style>
</head>
<body>
<div class="report-container">
    <table id="tabela_vendas" class="display">
        <thead>
            <tr>
                <th>Nome do produto</th>
                <th>Fornecedor</th>
                <th>Tipo do medicamentos</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>Gaze</td>
            <td>Fornecedor de Gazes LTDA</td>
            <td>Curativos</td>
            <td>20/03/2024</td>
            </tr>
            <tr>
            <td>Siringa</td>
            <td>Fornecedor de Siringas LTDA</td>
            <td>Diagnostico</td>
            <td>23/01/2023</td>
            </tr>
            <tr>
            <td>Ibuprofeno</td>
            <td>Fornecedor de Ibuprofeno LTDA</td>
            <td>Remedios</td>
            <td>02/02/2024</td>
            </tr>
            <tr>
            <td>Analgésicos</td>
            <td>Fornecedor de Analgésicos LTDA</td>
            <td>Remedios</td>
            <td>20/03/2024</td>
            </tr>
            <tr>
            <td>Antibióticos</td>
            <td>Fornecedor de Antibióticos LTDA</td>
            <td>Remedios</td>
            <td>10/02/2024</td>
            </tr>
            <tr>
            <td>Anti-inflamatórios</td>
            <td>Fornecedor de Anti-inflamatórios LTDA</td>
            <td>Remedios</td>
            <td>20/02/2024</td>
            </tr>
            <tr>
            <td>Antidepressivos</td>
            <td>Fornecedor de Antidepressivos LTDA</td>
            <td>Remedios</td>
            <td>01/01/2024</td>
            </tr>
            <tr>
            <td>Antialérgicos</td>
            <td>Fornecedor de Antialérgicos LTDA</td>
            <td>Remedios</td>
            <td>09/02/2024</td>
            </tr>
            <tr>
            <td>Antipiréticos</td>
            <td>Fornecedor de Antipiréticos LTDA</td>
            <td>Remedios</td>
            <td>27/01/2024</td>
            </tr>
            <tr>
            <td>Antiespasmódicos</td>
            <td>Fornecedor de Antiespasmódicos LTDA</td>
            <td>Remedios</td>
            <td>24/03/2024</td>
            </tr>
            <tr>
            <td>Anti-hipertensivos</td>
            <td>Fornecedor de Anti-hipertensivos LTDA</td>
            <td>Remedios</td>
            <td>01/03/2024</td>
            </tr>
            </tbody>
            <tfoot>
                <td colspan="3" style="text-align: right;"><strong>Atualizado:</strong></td>
                <td><strong>20/03/2024</strong></td>
            </tr>
        </tfoot>
    </table>

    <script>
        $(document).ready( function () {
            $('#tabela_vendas').DataTable();
        });
    </script>
</div>
</body>
</html>
<footer>
  <style>
    footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

.footer-content {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.footer-logo img {
    width: 100px;
    height: auto;
}

.footer-info p {
    margin: 5px 0;
}

.footer-social a {
    margin: 0 10px;
}

.footer-social img {
    width: 30px;
    height: 30px;
}

    </style>
    <div class="footer-content">
        <div class="footer-logo">
            <img src="img/logo-proz.png" alt="Logo da Empresa">
        </div>
        <div class="footer-info">
            <p>Controle de Estoque</p>
            <p>Endereço: Av. Proz, 1234</p>
            <p>Telefone: (00) 1234-5678</p>
        </div>
        <div class="footer-social">
            <a href="#"><img src="img/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="img/twiter.png" alt="Twitter"></a>
            <a href="#"><img src="img/instagram.png" alt="Instagram"></a>
        </div>
    </div>
  
</footer>