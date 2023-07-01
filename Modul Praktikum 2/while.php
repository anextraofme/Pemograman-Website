<?php

//contoh 1
$i = 1;
while ($i <=10) {
    echo $i++;
}
echo "<br><br>";

//contoh 2
$i =1;
while ($i <= 10) {
echo "$i";
$i++;
}
echo "<br><br>";
//di saya kalau pakai endwhile; erorr jadinya saya ubah menjadi seperti ini

//contoh 3
$i =1;
while ($i <= 6) {
    echo "<h$i>Heading $i</h$i>";
    $i++;
}
?>