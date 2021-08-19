<?php
$mobphone = $_POST['mphone'];


$mobphone_hash = array("+8(918-213-12-12)" => array("Хван", "Костя"),"+8(918-213-22-12)" => array("Иванов", "Иван"),"+8(911-213-12-12)" => array("Сидоров", "Петр"));

if (array_key_exists($mobphone, $mobphone_hash)){
    $name = $mobphone_hash[$mobphone][1];
    $surname = $mobphone_hash[$mobphone][0];

    echo array('name'=>$name,'surname'=>$surname)
}
else{
    echo "DON`T EXIST"
}
?>