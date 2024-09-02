<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REVISAO SINTAXE</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>

<div class="conteudo">
    <?php

            $nome=$_POST["nome"];
            $idade=$_POST["idade"];
            $salario= $_POST["sal"];
          
            if($nome == "" || $idade == "" || $salario== ""  || empty($_POST["temas"]))
            {
                echo "<script>
                    alert('preencha todos os campos');
                    history.back();
                    </script>";

            }
            else
            {
                if(!is_numeric($idade))
                {
                    echo "<script>
                    alert('Preencha com numero o campo idade');
                    history.back();
                    </script>";

                }
                else
                {
                    echo "<h4> No primeiro Ano você terá um aumento de 5%<br></h4>";
                    $sal = $salario + ($salario * 0.05);
                    $nsal = number_format($sal,"2", ",", ".");
                    echo "Seu novo salario em 2025 será = R$ $nsal<br><br><hr><br> <br>";

                    echo "<h4> E daqui a 10 anos seu salário poderá chegar em:<br></h4>";
                    for($i=1; $i< 11; $i++ )
                    {
                        $sal= $sal + ($sal * 0.02);

                    }
                    $nsal = number_format($sal,"2", ",", ".");
                    echo "R$ $nsal<br><br> <hr>";

                    echo "<h4> Seus temas preferidos são:<br></h4>";
                    echo "<ul>";

                    foreach($_POST['temas'] as $x) {
                            echo "<li>$x </li>";
                            if($x == "Finanças")
                            {
                                echo "<table border='1' bgcolor='darkseagreen'>
                                <th>SUB-AREAS DE FINANÇAS</th>
                                <tr><td> Contas a pagar e receber </td></tr>
                                <tr><td>Tesouraria </td> </tr>
                                <tr><td>Impostos </td></tr>
                                                       
                                </table><br> <br> ";
                            }
                            else if($x == "Contabilidade")
                            {
                                echo "<table border='1' bgcolor='darkseagreen'>
                                <th>SUB-AREAS DE CONTABILIDADE</th>
                                 <tr><td> Custos </td></tr>
                                <tr><td>Controller </td> </tr>
                                <tr><td>Auditoria </td></tr>
                                </table><br> <br> ";
                            }
                            else if($x == "Lógica")
                            {
                                echo "<table border='1' bgcolor='darkseagreen'>
                                <th>SUB-AREAS DE LÓGICA</th>
                                 <tr><td> Raciocínio Indutivo </td></tr>
                                <tr><td>Raciocínio Dedutivo </td> </tr>
                                <tr><td>Lógica Nebulosa</td></tr>
                                </table><br> <br> ";
                            }
                            else if($x == "Programação")
                            {
                                echo "<table border='1' bgcolor='darkseagreen'>
                                <th>SUB-AREAS DE PROGRAMAÇÃO</th>
                                 <tr><td> C# </td></tr>
                                <tr><td>PHP</td> </tr>
                                <tr><td>Java</td></tr>
                                </table><br> <br> ";
                            }

                        }   
                    echo "</ul>";
                  
           

                }
            }

            ?>

</div>
          
         
    <script src="javascript/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
