<?php
include '../todos/functions.php';
include '../todos/header.php';
//Obtendo os segundos desde 1º de Janeiro de 1970
//echo 'Echo time():<br>';
//echo time(), '<br>';

$minhaData = time();
//
////Formatando data, referência: https://www.php.net/manual/en/datetime.format.php
echo 'Echo date():<br>';
//echo date('d-m-y'), '<br>';
//echo date('D, d \d\e M \d\e Y'), '<br>';
//echo date('D, d \d\e M \d\e Y'), '<br>';
//echo 'Hora de Greenwich ', date('H:i'), '<br>';
//echo 'Hora de Greenwich ', date('P'), '<br>';
//
////Exemplo de formatação
setlocale(LC_TIME, 'pt_BR');
//echo 'Echo Usando date para formatar uma data criada com time():<br>';
$dataCriada = time() + (60*60*24*30); //Daqui a um mês
//echo date('D, d \d\e M \d\e Y e são H:i', $dataCriada), '<br>';
echo date('D, d \d\e M \d\e Y \e \sã\o H:i'), '<br>';
//
////Formatação strftime: https://www.php.net/manual/en/function.strftime.php
//echo 'Echo strftime():<br>';
//echo strftime('%A, %d de %B de %Y', $dataCriada), '<br>';
//
////Adicionando tempo
//$dataNova = strtotime('+1 month');
//echo 'Echo data criada com strtotime:<br>';
//echo strftime('%A, %d de %B de %Y', $dataNova), '<br>';
//echo strtotime('08 September 2020'), '<br>';
//echo strtotime('now'), '<br>';
//
////Os argumentos são ints em ordem hora, minutos, segundos, mês, dia, ano
//echo 'Echo data criada com mktime():<br>';
//$dataEspecifica = mktime(14, 22, 0, 6, 15, 1980);
//echo $dataEspecifica, '<br>';
//echo strftime('%A, %d de %B de %Y', $dataEspecifica), '<br>';
//
//
////Classe DateTime: https://www.php.net/manual/en/book.datetime.php
//
$agora = new DateTime();
//display_info($agora, 'Meu objeto');

//Usando a classe DateTimeZone para definir um Timezone: https://www.php.net/manual/en/class.datetimezone.php
//$fuso = new DateTimeZone('-0300');
//$fuso = new DateTimeZone('America/Sao_Paulo');
////Dando esse objeto $fuso como argumento do método settimezone
//$agora->setTimezone($fuso);
////especificando locale
//setlocale(LC_TIME, 'pt_BR');
//echo 'Echo DateTime() com fuso arrumado:<br>';
//echo $agora->format('H:i, D, d, M, Y'), '<br>';
//echo 'Echo strftime com $agora->getTimestamp() para funcionar o setlocale:<br>';
//echo strftime('%H:%M, %A, %d de %B de %Y', $agora->getTimestamp()), '<br>';
//echo 'Criando diretamente com o timezone<br>';
//$novo = new DateTime(null, $fuso);
//echo $novo->format('H:i, D, d, M, Y'), '<br>';

////Posso criar uma data mais para frente
//$semanaQueVem = new DateTime('+1 week');
////Uma data específica
//$especifico = new DateTime('1980-08-29 18:00:20');
//echo 'Semana que vem:<br>';
//echo $semanaQueVem->format('H:i, D, d, M, Y'), '<br>';
//echo 'Específico:<br>';
//echo $especifico->format('H:i, D, d, M, Y'), '<br>';

//Ou adicionar tempo a uma data que eu já tinha

//$agora->modify('+1 week');
//echo $agora->format('H:i, D, d, M, Y'), '<br>';

//echo '<br>Comparando datas<br>';
//$ontem = new DateTime('-1 day');
//$amanha = new DateTime('+1 day');
//$hoje = new DateTime();
//$dataPraComparacao1 = new DateTime('2020-08-18');
//$dataPraComparacao2 = new DateTime('2020-08-18');
////echo ($ontem < $amanha);
////echo '<br>';
////echo ($hoje < $ontem);
//
//echo ($ontem < $amanha ? 'Menor' : 'Maior');
//echo '<br>';
//echo ($hoje < $ontem ? 'Menor' : 'Maior');
//echo '<br>';
//echo ($dataPraComparacao1 == $dataPraComparacao2 ? 'Igual' : 'Diferente');
//echo '<br>';
//echo ($dataPraComparacao1 === $dataPraComparacao2 ? 'Igual estrito' : 'Diferente estrito');
//echo '<br>';
//
//
//echo '<br>Comparando com métodos de criação diferentes<br>';
//$dataStrtotime = strtotime('2020-08-18');
//echo ($dataPraComparacao1  === $dataStrtotime ? 'Igual estrito' : 'Diferente estrito');
//echo '<br>';
//echo ($dataPraComparacao1  == $dataStrtotime ? 'Igual' : 'Diferente');
//echo '<br>';
//echo '<br>';
//echo ($dataPraComparacao1  < $ontem ? 'Menor' : 'Maior');
//echo '<br>';
//
//display_info($dataPraComparacao1, 'DateTime data');
//display_info($dataPraComparacao1 , 'Strtotime Data');




include '../todos/footer.php';
?>