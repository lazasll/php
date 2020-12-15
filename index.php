//1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
//если $a и $b положительные, вывести их разность;
//если $а и $b отрицательные, вывести их произведение;
//если $а и $b разных знаков, вывести их сумму;
//Ноль можно считать положительным числом.

<?php
    $a = rand();
    $b = rand();
    
    if ($a>=0 && $b>=0){
        echo $raznost = $a - $b;
    }
    if ($a<0 && $b<0){
        echo $proiz = $a * $b;
    }
    
    if ($a>=0 && $b<0 || $a<0 && b>=0 ){
        echo $summ = $a + $b;
    }



    //2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
    $a = rand(0, 15);
        switch ($a){
            case 0: echo ($a);
            case 1: echo ($a++);
            case 2: echo ($a++);
            case 3: echo ($a++);
            case 4: echo ($a++);
            case 5: echo ($a++);
            case 6: echo ($a++);
            case 7: echo ($a++);
            case 8: echo ($a++);
            case 9: echo ($a++);
            case 10: echo ($a++);
            case 11: echo ($a++);
            case 12: echo ($a++);
            case 13: echo ($a++);
            case 14: echo ($a++);
            case 15: echo ($a);
            }

      //3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.   
            function mum ($a, $b){
                return($a + $b);
            }
            echo mum(8, 2);

           
  function mum ($a, $b){  
      return($a - $b);
  }
  echo mum(8, 2);
  
  function mum ($a, $b){
      return($a * $b);
  }
  echo mum(8, 2);
 
  function mum ($a, $b){
      return($a / $b);
  }
  echo mum(8, 2);
  
  //4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
  function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		case sum: 
			echo ($arg1 + $arg2);
		case subtraction:
			echo ($arg1 - $arg20;
		case multiply:
			echo ($arg1 * $arg20; 
		case divide:
			echo ($arg1 / $arg2);
		}
	}
	echo mathOperation(10, 1, sum);