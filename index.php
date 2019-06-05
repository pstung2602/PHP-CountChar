<?php
function countChar($str,$char){
    $count=0;
    $arr = str_split($str);
    for($i=0;$i<count($arr);$i++){
        if($char==$arr[$i]){
            $count++;
            echo "vi tri xuat hien: ".$i."<br>";
        }
    }
    return "so lan xuat hien: ".$count;

}
echo countChar("abcdefaa","a");

?>