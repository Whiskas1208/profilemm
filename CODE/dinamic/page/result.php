<!DOCTYPE html>
<html>
<head>
	<title>MTPB</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style2.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script> 
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
</head>


<?php
include "connection.php";
function ambil_datacustomer() {
    $ambildata1 = mysqli_query(conn, "select id_nama from customer");
    while ($_POST[id_nama] = mysqli_fetch_array($ambildata1))
    {
        $ambil[] = $d;
    }
    return $ambil;
}
class Fungsi_Model extends PM_Model {
        function ambil_house(){
            $this = mysqli_query(conn, "select from house");
            $query = $this;
            foreach ($query->result() as $row){
            $id_rumah = $row->$id_rumah;
            $kamar_tidur = $row->kamar_tidur;
            $kamar_mandi = $row->kamar_mandi;
            $lantai = $row->lantai;
            $luas_bangunan = $row->luas_bangunan;
            $luas_tanah = $row->luas_tanah;
            $furniture = $row->furniture;

            $gap_kamartidur = $kamar_tidur-$_POST[kamar_tidur];
            $gap_kamarmandi = $kamar_mandi-$_POST[kamar_mandi];
            $gap_lantai = $lantai-$_POST[$lantai];
            $gap_luasbangunan = $luas_bangunan-$_POST[$luas_bangunan];
            $gap_luastanah = $luas_tanah-$_POST[$luas_tanah];
            

            if ($gap_kamartidur<=0) {
                $bobot_kamartidur = $gap_kamartidur+5;
            }
            else {
                if ($gap_kamartidur==1) {
                    $bobot_kamartidur=4.5;
                }elseif($gap_kamartidur==2) {
                    $bobot_kamartidur=3.5;
                }elseif($gap_kamartidur==3) {
                    $bobot_kamartidur=2.5;
                }elseif($gap_kamartidur==4) {
                    $bobot_kamartidur==1.5;
                }
            }

            if ($gap_kamarmandi<=0) {
                $bobot_kamarmandi = $gap_kamarmandi+5;
            }
            else {
                if ($gap_kamarmandi==1) {
                    $bobot_kamarmandi=4.5;
                }elseif($gap_kamarmandi==2) {
                    $bobot_kamarmandi=3.5;
                }elseif($gap_kamarmandi==3) {
                    $bobot_kamarmandi=2.5;
                }elseif($gap_kamarmandi==4) {
                    $bobot_kamarmandi=1.5;
                }
            }

            if ($gap_lantai<=0) {
                $bobot_lantai = $gap_lantai+5;
            }
            else {
                if ($gap_lantai==1) {
                    $bobot_lantai=4.5;
                }elseif($gap_lantai==2) {
                    $bobot_lantai=3.5;
                }elseif($gap_lantai==3) {
                    $bobot_lantai=2.5;
                }elseif($gap_lantai==4) {
                    $bobot_lantai=1.5;
                }
            }

            if ($gap_luasbangunan<=0) {
                $bobot_luasbangunan = $gap_luasbangunan+5;
            }
            else {
                if ($gap_luasbangunan==1) {
                    $bobot_luasbangunan=4.5;
                }elseif($gap_luasbangunan==2) {
                    $bobot_luasbangunan=3.5;
                }elseif($gap_luasbangunan==3) {
                    $bobot_luasbangunan=2.5;
                }elseif($gap_luasbangunan==4) {
                    $bobot_luasbangunan=1.5;
                }
            }

            if ($gap_luastanah<=0) {
                $bobot_luastanah = $gap_luastanah+5;
            }
            else {
                if ($gap_luastanah==1) {
                    $bobot_luastanah=4.5;
                }elseif($gap_luastanah==2) {
                    $bobot_luastanah=3.5;
                }elseif($gap_luastanah==3) {
                    $bobot_luastanah=2.5;
                }elseif($gap_luastanah==4) {
                    $bobot_luastanah=1.5;
                }
            }

            if ($gap_furniture<=0) {
                $bobot_furniture = $gap_furniture+5;
            }
            else {
                if ($gap_furniture="Yes") {
                    $bobot_furniture=4.5;
                }elseif($gap_furniture== "No") {
                    $bobot_furniture=2.5;
                }
            }

            
            $core_interior = ($bobot_kamartidur+$bobot_kamarmandi)/2;
            $sec_interior = ($bobot_lantai+$bobot_luasbangunan)/2;
            $main = 0.6*$core_interior + 0.4*$sec_interior;
    
            $core_factorin = ($bobot_luastanah+$bobot_furniture)/2;
            $outmain = $core_factorin;
    
            $total = ($main + $outmain)/2;

            $house[] = array(
                'kamar_tidur' => $kamar_tidur,
                'kamar_mandi' => $kamar_mandi,
                'lantai' => $lantai,
                'luas_bangunan' => $luas_bangunan,
                'luas_tanah' => $luas_tanah,
                'furniture' => $furniture,
                'gap_kamartidur' => $gap_kamartidur,
                'gap_kamarmandi' => $gap_kamarmandi,
                'gap_lantai' => $gap_lantai,
                'gap_luasbangunan' => $gap_luasbangunan,
                'gap_lunastanah' => $gap_luastanah,
                'gap_furniture' => $gap_furniture,
                'bobot_kamartidur' => $bobot_kamartidur,
                'bobot_kamarmandi' => $bobot_kamarmandi,
                'bobot_lantai' => $bobot_lantai,
                'bobot_luasbangunan' => $bobot_luasbangunan,
                'bobot_luastanah' => $bobot_luastanah,
                'bobot_furniture' => $bobot_furniture,
                'core_interior' => $core_interior,
                'sec_interior' => $sec_interior,
                'core_factorin' => $core_factorin,
                'main' => $main,
                'outmain' => $outmain,
                'total' => $total
            );
            }
            return $house;
        }

        function lihat_house($house){
            $query = $this->db->query("SELECT * FROM customer WHERE id_rumah='"$id_rumah"'");
    foreach ($query->result() as $row){
            $kamar_tidur = $row->kamar_tidur;
            $kamar_mandi = $row->kamar_mandi;
            $lantai = $row->lantai;
            $luas_bangunan = $row->luas_bangunan;
            $luas_tanah = $row->luas_tanah;
            $furniture = $row->furniture;
            $lokasi = $row->lokasi;
        }
        $house[] = array(
                'kamar_tidur' => $kamar_tidur,
                'kamar_mandi' => $kamar_mandi,
                'lantai' => $lantai,
                'luas_bangunan' => $luas_bangunan,
                'luas_tanah' => $luas_tanah,
                'furniture' => $furniture,
                'lokasi' => $lokasi
        );

        return $house;
    }
}

?>
<body>

<div class="content1">
	<header>
        <h1 class="title1">Here's The Result</h1>
        <h3 class="description2">Apakah sudah sesuai dengan keinginan anda?</h3>
    </header>

    

    <div class="button3">
    <form method="post">
<button type="submit" name="submit">Wanna Look For Another House?
</button>
</form>
</div>

</div>
</body>
</html>
