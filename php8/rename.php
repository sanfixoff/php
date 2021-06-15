<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$folder = '/application/controllers'; //Папка с файлами
$array_file = scandir($root.$folder); //Масcив с именами файлов
foreach($array_file as $name_file){ // Наш цикл
    if (!is_dir($root.$folder.'/'.$name_file)){

            $new_name = strtolower($name_file); //Меняем название
            if(rename($root.$folder.'/'.$name_file, $root.$folder.'/'.$new_name)){ //Записываем новое имя
                echo "Файл $name_file переименован<br/>"; // это лог для удобства
            }else{
                echo "Ошибка переименования файла $name_file<br/>"; // это тоже
            }

    }
}
?>