<?php
$nama = $_POST['nama'];
$alamat =nl2br ($_POST['alamat']);
$negeri = $_POST['negeri'];

#hobi 
/*if(isset($_POST ['membaca'])) {
    $membaca = $_POST ['membaca'];
}else {
    $m= '';
}
*/
$membaca = (isset( $_POST ['membaca']))?  $_POST ['membaca'] . ',': '';
$melancong =(isset( $_POST ['melancong']))?  $_POST ['melancong'].',': '';
$berenang = (isset( $_POST ['berenang']))?  $_POST ['berenang']: '';

$jantina = 'Perempuan' ;

$gagal = false;
if($nama == '' ) {
    $gagal = true;

}

if ($gagal) {
    ?>
    <script>
        alert('Sila isi semua butiran hingga lengkap ');
        window.location='/';
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendafataran</title>
    <style></style>
</head>
<body>
    <h1>Maklumat Pendaftaran</h1>

    <table>
        <tr>
            <td>Nama:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Alamat:</td>
            <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
            <td>Negeri:</td>
            <td><?php echo $negeri; ?></td>
        </tr>
        <tr>
            <td>Hobi:</td>
            <td><?php echo $membaca, $melancong ,$berenang; ?></td>
        </tr>
        <tr>
            <td>jantina:</td>
            <td><?php echo $jantina; ?></td>
        </tr>
    </table>
</body>
</html>