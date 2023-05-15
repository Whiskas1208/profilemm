<!DOCTYPE html>
<html>
<head>
    <?php
    include "connection.php";

    if (isset($_POST['simpan'])){
        mysqli_query($conn, "insert into customer set
        $nama_lengkap = '$_POST[nama_lengkap]',
        $umur = '$_POST[umur]',
        $jenis_kelamin = '$_POST[jenis_kelamin]',
        $kamar_tidur = '$_POST[kamar_tidur]',
        $kamar_mandi = '$_POST[kamar_mandi]',
        $lantai = '$_POST[lantai]',
        $luas_bangunan = '$_POST[luas_bangunan]',
        $luas_tanah = '$_POST[luas_tanah]',
        $furniture = '$_POST[furniture]'");

        $id = mysqli_insert_id($conn, "insert into customer values (NULL, '', '', '', )");
        header(`location: http://localhost/code/CODE/dinamic/page/result.php?id=$id`);
        exit();

    }

?>
	<title>Home</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style1.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>

<body>
<div class="content1">
	<header>
		<h1 class="judul1">Rumah seperti</h1>
        <h3 class="judul2">apa yang anda inginkan?</h3>
	</header>

    <div class="form1">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"><br>
        <label for="name" placeholder="Nama Lengkap">Nama Lengkap<br>
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required="required"><br>

        <label for="age" placeholder="Umur">Umur<br>
        <input type="text" name="umur" placeholder="Umur" required="required"><br>
    
        <label for="gender" placeholder="Jenis Kelamin">Jenis Kelamin<br>
        <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" required="required"><br>
    
        <label for="bedrom">Kamar Tidur</label><br>
        <input type="number" name="kamar_tidur" placeholder="Kamar Tidur" required="required"><br>

        <label for="bathroom">Kamar Mandi</label><br>
        <input type="number" name="kamar_mandi" placeholder="Kamar Mandi"required="required"><br>

        <label for="floor">Lantai</label><br>
        <input type="number" name="lantai" placeholder="Lantai" required="required"><br>

        <label for="lb">Luas Bangunan</label><br>
        <input type="number" name="luas_bangunan" placeholder="Luas Bangunan" required="required"><br>

        <label for="lt">Luas Tanah</label><br>
        <input type="number" name="luas_tanah" placeholder="Luas Tanah" required="required"><br>

        <label for="frnt">Beserta Furniture?</label><br>
        <input type="text" name="furniture" placeholder="Furniture" required="required"><br> 

        
        <td><input type="submit" value="Search" name="simpan"> </td>
</form>
</div>
</div>
</body>
</html>