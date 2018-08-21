<?php
$age=41;
if ($age>18 && $age<65) {
    echo "Вам еще работать и работать";
} elseif ($age>1 && $age<17) {
    echo "a равен b";
} elseif ($age<1) {
    echo "Неизвестный возраст";
} else ($age>65){
    echo "Вам пора на пенсию";
}

?>