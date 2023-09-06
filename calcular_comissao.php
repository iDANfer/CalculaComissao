<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cálculo</title>
</head>
<body>
    <h1>Resultado do Cálculo</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $salario_fixo = floatval($_GET["salario_fixo"]);
        $vendas = floatval($_GET["vendas"]);
        
        // Calcula a comissão (4% das vendas)
        $comissao = $vendas * 0.04;
        
        // Calcula o salário final (salário fixo + comissão)
        $salario_final = $salario_fixo + $comissao;
        
        echo "Comissão: R$" . number_format($comissao, 2, ',', '.') . "<br>";
        echo "Salário Final: R$" . number_format($salario_final, 2, ',', '.');
    } else {
        echo "Ocorreu um erro ao processar o formulário.";
    }
    ?>
</body>
</html>