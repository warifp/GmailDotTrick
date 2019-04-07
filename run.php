<?php 
/** 
    @@AUTHOR = Wahyu Arif P
    @@CREATE = 07 April 2019
**/
echo "## Gmail Dot Trik\n";

echo "
########################################
Jangan lupa donasi!\n
> Paypal : paypal.me/wahyuarifpurnomo\n
> OVO\t: 087719090011\n
Terimakasih banyak yang sudah donasi :')
########################################\n\n";

echo "Email \t: ";
$email = trim(fgets(STDIN));

echo "Save \t: ";
$save = trim(fgets(STDIN));

$add="@gmail.com"; 
$l=strlen($email); 
if ($l>30){ 
    echo "Maaf, terlalu panjang [max 30].\n"; 
          } 
            $total=pow(2,$l-1); 
            $email_arr=str_split($email); 
            for($i=0;$i<$total;$i++){ 
                $w_arr=$email_arr; 
                $bits=$i; 
                $pos=0; 
                while($bits){ 
                    if ($bits&1){ 
                        $w_arr[$pos].="."; 
                    } 
                    $bits=$bits>>1; 
                    $pos++; 
    } 
    echo implode($w_arr).$add."\n";
    $file = fopen($save,"a+");
    fwrite($file, implode($w_arr).$add."\n");
    fclose($file);
}
echo "Selesai, file tesimpan di [$save]";