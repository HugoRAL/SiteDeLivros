<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="p-3 mb-2 bg-dark text-white">  
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/bootstrap.js"></script>
    <?php include_once("../php/header2.php");?>
    <h2 style="text-align: center;">Solo Leveling</h2>
    <h1 style="text-align: center;">Prólogo .Chaper 1</h1>
    <div style="margin: 5%">
        <p>Não importa se você é otimista ou pessimista, a vida de Derek Espósito não foi uma vida boa ou uma vida ruim. Foi apenas uma medíocre e insignificante existência.</p>
        <p>O pai dele era um cara bipolar e abusivo, capaz de desaparecer de seu quarto, por dias, durante sua fase depressiva. Ele se levantaria apenas para comer, usar o banheiro e para ter o ocasional ataque de raiva: “vou tornar a sua vida em uma vida miserável”.</p>
        <p>Na sua fase eufórica, ele trabalharia como um louco, mas não teria nenhum talento como um homem de negócios ou como um alpinista social*. Ele era incapaz de estabelecer boas conexões e ter sucesso ao mesmo tempo.</p>
        <p>(*N/T: Alpinista social é um termo que se refere a indivíduos que investem em relacionamentos com pessoas de maior poder aquisitivo com o objetivo de chegar as classes sociais mais altas e gozar de riqueza, prestígio ou poder.)</p>
        <?php
        if (isset($_SESSION["ID"])){
            echo"
            <p>No seu estado normal, nas poucas vezes que ele decidiu tomar seus remédios, ele era somente uma pessoa patética, que iria se levantar e ir trabalhar apenas para evitar a culpa e o rancor dos vizinhos e colegas.</p>
            <p>Porém, independente de sua condição mental, ele era um perfeito exemplo de pai abusivo, e seus filhos eram sempre uma desgraça em seus olhos.</p>
            <p>Eles nunca estudaram o suficiente, nunca foram disciplinados o suficiente ou sequer mostraram respeito o suficiente. E, se não bastasse isso, ele estava sempre lá para lembrá-los de como estavam errados.</p>
            <p>Ele gritava com eles pelo menor erro, constantemente lembrando-os de que eram apenas parasitas que sugavam seu trabalho duro.</p>
            <p>E, quando as palavras não eram suficientes, ou quando não correspondiam às suas expectativas com as notas ou tarefas escolares, não havia outro professor como seu cinto de couro.</p>
            <p>Assim, Derek e Carl tiveram que aprender rapidamente como se defenderem sozinhos, já que sua mãe distraída praticamente se esqueceu deles logo após o parto, quando passou a dedicar sua vida em busca de paz e sossego, ficando o mais longe possível das birras de seu cônjuge.</p>
            <p>Derek era dois anos mais velho e tentou desesperadamente cuidar de seu irmão mais novo, mas sem sucesso em suas tentativas.</p>
            <p>Eles cresceram assistindo e lendo histórias sobre heróis a proteger os fracos e a defender a justiça. Mas, nenhum herói apareceu para salvá-los.</p>
            <p>Todas as semanas, eles eram forçados a ir à igreja para adorar um indescritível deus benevolente e seu filho, o salvador de toda a humanidade. Mas, não importa o quanto eles oraram ou quão bons eles foram, nenhum milagre aconteceu.</p>
            ";
            include("../php/serv.php");
            include_once("../php/func.php");
            $Number = $_SESSION["ID"];
            $Chap = 1;
            $BookID = 8 ;
            AddHistoric($pdo,$BookID,$Number, $Chap);
        }else{
            echo "<a href='../login.php' style='text-decoration:none;text-align: center;' ><h1 style='color: #ff4136'> To continue reading you must Login </h1></a>";
        }

    ?>
    
    
    </div>

</body>
</html>