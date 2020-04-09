<?php
header("Content-type: text/plain; charset=utf-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
sleep(1); // время ожидания
// echo "Ajax проработал запрос<br>";




while(list ($key, $val) = each ($_POST))
{

                $val = iconv("UTF-8","UTF-8", $_POST[$key]);
                echo "<p>".stripslashes($val)."</p>\n";
}
echo "<input type='button' value='Редактировать' onclick='edit(com)'>\n";
?>