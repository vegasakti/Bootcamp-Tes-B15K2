
<?php


function is_username_valid($username)
{
  $huruf_kecil = preg_match('/[a-z]/', $username);
  $huruf_besar = preg_match('/[A-Z]/', $username);
  $angka = preg_match('/[0-9]/', $username);
  $spesial_karakter = preg_match('/[^a-zA-Z\d]/', $username[0]);
  $panjang_karakter = strlen($username);

  if($huruf_kecil == FALSE)
  {
    $notif_username = "Username harus huruf kecil.";
  }
  elseif($huruf_besar == TRUE)
  {
    $notif_username = "Username tidak boleh ada huruf besar.";
  }
  elseif($angka == TRUE)
  {
    $notif_username = "Username tidak boleh ada angka.";
  }
  elseif($spesial_karakter == TRUE)
  {
    $notif_username = "Username tidak boleh ada karakter special.";
  }
  elseif($panjang_karakter <= 4 || $panjang_karakter >= 10)
  {
    $notif_username = "Username harus memiliki 5-9 karakter";
  }
  else
  {
    $notif_username = "Username: Selamat input username sudah diisi dengan benar";
  }

  return $notif_username;
}

function is_password_valid($password)
{
  $huruf_kecil = preg_match('/[a-z]/', $password);
  $huruf_besar = preg_match('/[A-Z]/', $password);
  $angka = preg_match('/[0-9]/', $password);
  $karakter_spesial = preg_match('/[^a-zA-Z\d]/', $password);
  $panjang_karakter = strlen($password);

  if($huruf_kecil == FALSE)
  {
    $notif_password = "Password harus ada min. 1 huruf kecil.";
  }
  elseif($huruf_besar == FALSE)
  {
    $notif_password = "Password harus ada min. 1 huruf besar.";
  }
  elseif($angka == FALSE)
  {
    $notif_password = "Password harus ada min. 1 angka.";
  }
  elseif($karakter_spesial == FALSE)
  {
    $notif_password = "Password harus ada min. 1 karakter spesial.";
  }
  elseif($panjang_karakter <= 7)
  {
    $notif_password = "Password harus memiliki min. 8 karakter";
  }
  else
  {
    $notif_password = "Password : Selamat input password sudah diisi dengan benar";
  }

  return $notif_password;
}

$username = "budidore";
$password = "@Budi123";

echo is_username_valid($username);
echo "<br>";
echo is_password_valid($password);

 ?>