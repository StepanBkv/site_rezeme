<?php

  $mobphone = trim(strip_tags($_POST["mobphone"]));
  
  
  $mobphone_hash = array("+8(918-213-12-12)" => array("Хван", "Костя"),"+8(918-213-22-12)" => array("Иванов", "Иван"),"+8(911-213-12-12)" => array("Сидоров", "Петр"));
  
  if (preg_match("/^\+8\(\d{3}-\d{3}-\d{2}-\d{2}\)$/", $mobphone))
  {
    if (array_key_exists($mobphone, $mobphone_hash)){
        $name = $mobphone_hash[$mobphone][1];
        $surname = $mobphone_hash[$mobphone][0];

        echo 'Owner: '.$surname." ".$name."";
    }
   
  }
  else
  {
      echo "Неправильный формат телефона!"; 
  }

  
?>