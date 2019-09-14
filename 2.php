$pass="paswdT6Sa";
$uppercase = preg_match('@[A-Z]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
$number    = preg_match('@[0-9]@', $pass);

if(!$uppercase || !$lowercase || !$number || strlen($pass)<=9 && ($pass)<=5 ){
    echo "password harus lebih dari 6 -9 karakter, mengandung huruf BESAR, huruf kecil dan angka";
}else{
    echo "password memenuhi kriteria";
}

$username="okiRi453@"
$uppercase = preg_match('@[A-Z]@', $username);
$lowercase = preg_match('@[a-z]@', $username);
$number    = preg_match('@[0-9]@', $username);

if(!$uppercase || !$lowercase || !$number || strlen($pass)<=8){
    echo "username harus lebih dari 6 karakter, mengandung huruf BESAR, huruf kecil dan angka";
}else{
    echo "username memenuhi kriteria";
}