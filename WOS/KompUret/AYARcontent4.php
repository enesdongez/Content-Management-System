<?php 

include 'mysql_connect.php';
$gelenkullaniciemail=$_SESSION["Kullaniciadi"];

$seed = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ'); 
shuffle($seed);
$kelime2 = '';
foreach (array_rand($seed, 5) as $k) $kelime2 .= $seed[$k];


foreach ($_COOKIE['sayfaEkle'] as $name => $value) {

  setcookie('sayfaEkle['.$name.']',$name,time()-3600); 

}


if(isset($_POST['sayfa_ekle'])){
  $file = $_FILES['content4_2resim'];
 

  $fileName2 = $_FILES['content4_2resim']['name'];
  $fileTmpName = $_FILES['content4_2resim']['tmp_name'];
  $fileSize = $_FILES['content4_2resim']['size'];
  $fileError = $_FILES['content4_2resim']['error'];
  $fileType = $_FILES['content4_2resim']['type'];
 
  $fileExt = explode('.', $fileName2);
  $fileActualExt = strtolower(end($fileExt));
 
  $allowed = array('jpg', 'jpeg', 'png');
  $error = fopen("ErrorLogs.txt", "a");
 
  if(in_array($fileActualExt, $allowed)){
      if($fileError === 0){
          if($fileSize < 1024*1024*10000){
              $fileNameNew = uniqid('', true).".".$fileActualExt;
              $fileDestination = "ajk1.png";
       

 
          }else{
              echo "Resim fazla büyük !";
              $txt = "Resim fazla büyük !\n";
              fwrite($error, $txt);
              fclose($error);
          }
      }else{
          echo "Resim yüklenirken hata oluştu !";
          $txt = "Resim yüklenirken hata oluştu !\n";
          fwrite($error, $txt);
          fclose($error);
      }
  }else{
      echo "Bu türdeki dosyaları yükleyemezsiniz !";
      $txt = "Bu türdeki dosyaları yükleyemezsiniz !\n";
      fwrite($error, $txt);
      fclose($error);
  }
}
if(isset($_POST['sayfa_ekle'])){

  $file = $_FILES['content4_3resim'];
 

 $fileName3 = $_FILES['content4_3resim']['name'];
 $fileTmpName = $_FILES['content4_3resim']['tmp_name'];
 $fileSize = $_FILES['content4_3resim']['size'];
 $fileError = $_FILES['content4_3resim']['error'];
 $fileType = $_FILES['content4_3resim']['type'];

 $fileExt = explode('.', $fileName3);
 $fileActualExt = strtolower(end($fileExt));

 $allowed = array('jpg', 'jpeg', 'png');
 $error = fopen("ErrorLogs.txt", "a");

 if(in_array($fileActualExt, $allowed)){
     if($fileError === 0){
         if($fileSize < 1024*1024*10000){
             $fileNameNew = uniqid('', true).".".$fileActualExt;
             $fileDestination = "ajk2.png";
      
    

         }else{
             echo "Resim fazla büyük !";
             $txt = "Resim fazla büyük !\n";
             fwrite($error, $txt);
             fclose($error);
         }
     }else{
         echo "Resim yüklenirken hata oluştu !";
         $txt = "Resim yüklenirken hata oluştu !\n";
         fwrite($error, $txt);
         fclose($error);
     }
 }else{
     echo "Bu türdeki dosyaları yükleyemezsiniz !";
     $txt = "Bu türdeki dosyaları yükleyemezsiniz !\n";
     fwrite($error, $txt);
     fclose($error);
 }

}
if(isset($_POST['sayfa_ekle'])){
 $file = $_FILES['content4_1resim'];
 

 $fileName4 = $_FILES['content4_1resim']['name'];
 $fileTmpName = $_FILES['content4_1resim']['tmp_name'];
 $fileSize = $_FILES['content4_1resim']['size'];
 $fileError = $_FILES['content4_1resim']['error'];
 $fileType = $_FILES['content4_1resim']['type'];

 $fileExt = explode('.', $fileName4);
 $fileActualExt = strtolower(end($fileExt));

 $allowed = array('jpg', 'jpeg', 'png');
 $error = fopen("ErrorLogs.txt", "a");

 if(in_array($fileActualExt, $allowed)){
     if($fileError === 0){
         if($fileSize < 1024*1024*10000){
             $fileNameNew = uniqid('', true).".".$fileActualExt;
             $fileDestination = "ajk3.png";
      


         }else{
             echo "Resim fazla büyük !";
             $txt = "Resim fazla büyük !\n";
             fwrite($error, $txt);
             fclose($error);
         }
     }else{
         echo "Resim yüklenirken hata oluştu !";
         $txt = "Resim yüklenirken hata oluştu !\n";
         fwrite($error, $txt);
         fclose($error);
     }
 }else{
     echo "Bu türdeki dosyaları yükleyemezsiniz !";
     $txt = "Bu türdeki dosyaları yükleyemezsiniz !\n";
     fwrite($error, $txt);
     fclose($error);
 }
}

if(isset($_POST['sayfa_ekle'])){
    $file = $_FILES['content4_1resim'];
    
   
    $fileName4 = $_FILES['content4_4resim']['name'];
    $fileTmpName = $_FILES['content4_4resim']['tmp_name'];
    $fileSize = $_FILES['content4_4resim']['size'];
    $fileError = $_FILES['content4_4resim']['error'];
    $fileType = $_FILES['content4_4resim']['type'];
   
    $fileExt = explode('.', $fileName4);
    $fileActualExt = strtolower(end($fileExt));
   
    $allowed = array('jpg', 'jpeg', 'png');
    $error = fopen("ErrorLogs.txt", "a");
   
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 1024*1024*10000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = "ajk4.png";
         
           
   
            }else{
                echo "Resim fazla büyük !";
                $txt = "Resim fazla büyük !\n";
                fwrite($error, $txt);
                fclose($error);
            }
        }else{
            echo "Resim yüklenirken hata oluştu !";
            $txt = "Resim yüklenirken hata oluştu !\n";
            fwrite($error, $txt);
            fclose($error);
        }
    }else{
        echo "Bu türdeki dosyaları yükleyemezsiniz !";
        $txt = "Bu türdeki dosyaları yükleyemezsiniz !\n";
        fwrite($error, $txt);
        fclose($error);
    }
   }


$deger6=$_POST["content4_arkaplan"];

$seed = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ'); 
shuffle($seed);
$kelime = '';
foreach (array_rand($seed, 5) as $k) $kelime .= $seed[$k];

$deger7="'$kelime'";
$deger8="$kelime";

$deger1=$_POST["content4_resim_genislik"];
$deger2=$_POST["content4_resim_yükseklik"];

if($_POST["content4_resim_daire"] == null)
      $deger3=" ";
else
      $deger3=$_POST["content4_resim_daire"];

if($_POST["content4_resim_golge"] == null)
      $deger4=" ";
else
      $deger4=$_POST["content4_resim_golge"];
      
$deger11=$_POST["content4_arkaplanbuton"];
$deger12=$_POST["content4_buton"];

setcookie("sayfaEkle[content4_arkaplan]",$deger6,time()+3600);
setcookie("sayfaEkle[content4_resimidhazir]",$deger7,time()+3600);
setcookie("sayfaEkle[content4_2resimidhazir]",$deger8,time()+3600);

setcookie("sayfaEkle[content4_resim_genislik]",$deger1,time()+3600);
setcookie("sayfaEkle[content4_resim_yükseklik]",$deger2,time()+3600);
setcookie("sayfaEkle[content4_resim_daire]",$deger3,time()+3600);
setcookie("sayfaEkle[content4_resim_golge]",$deger4,time()+3600);
setcookie("sayfaEkle[content4_arkaplanbuton]",$deger11,time()+3600);
setcookie("sayfaEkle[content4_buton]",$deger12,time()+3600);



header("Location: kompuret.php?KompanentEkle=39");

?>