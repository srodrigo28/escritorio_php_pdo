<?php
    // Conexão com base de dados
    $ligacao = mysqli_connect('localhost', 'root', '', 'base_dados');
    $ligacao->set_charset("utf8");
    // Buscar os dados
    $resultados = mysqli_query($ligacao, "SELECT * FROM financeiro");
    $codigos = [];
    $produtos = [];


    while($linha = mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
        $produtos[] = " '{$linha['produto']}' "; // exemplo string
        $valores[] = $linha['valor'];           // exemplo numeros
    }
    $produtos = implode(',', $produtos);
    $valores = implode(',', $valores);
?>

<!DOCTYPE html>
<html lang="en">
<?php include "head.php" ?>
<body>
    <div class="container">
        <div id="grafico"> </div>

        <script>
            let el = document.getElementById('grafico');
            let options = {
                title: {
                    text: "Gastos Março"
                },
                chart:{
                    type: "bar",
                    width: 700, height: 500
                },
                series:[
                    {
                        name: 'Total Gasto do Mês',
                        data: [800, 700, 902]
                    }
                ],
                xaxis: {
                    categories: ['LP Engenharia', 'Tauros', 'Seb App',]
                }
            };
            let chart = new ApexCharts(el, options);
            chart.render();
        </script>
        <?php include "menu.php" ?>
    </div>
</body>
</html>