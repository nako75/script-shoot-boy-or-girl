<?php
	error_reporting(0);
	$link = $_GET['for'];
	$link2 = $_GET['from'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title><?php echo $link; ?> Untukmu, Bacalah dari <?php echo $link2; ?></title>
</head>

<!--
Name :  YukiChan
Template: Nembak betina
Tanggal: 7 mei 2020

______________________________________
How To works??
*first using example here this : yoururl.co.li/?for=NamaCewek/Cowok yg lu suka&from=Nomer Hape Lu pake kode +62, +81 terserah atau tanpa + hanya 62.

*Example usage :

urlnya.com/?for=Mona&from=81806523588

_____________________________

-->

<body>
    <section>
        <div class="textme">
            <h1>Hallo <?php echo $link; ?></h1>
            <p>Saya suka sama kamu,apa kamu mau jadi pacar saya? </p>
<div class="jancok">


            <div class="wrap">
                <a href="#jawabanditerima" class="btn btn-big">Mau</a>
            </div>

            <!------------------------Jawaban Di Terima--------------------------------------------------->
            
            <div class="modal" id="jawabanditerima" arial-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-header">
                        <h2>Jawaban Dari <?php echo $link; ?> Iya </h2>
                        <p>Untuk <?php echo $link; ?> : Gua suka sama lu sudah lama uy , cuman baru hari ini
                            gua bisa mengutarakan isi hati gua, Watashi wa anata ga <?php echo $link; ?> ga sukidesu.
                            . Tolong kirim jawaban lu ya:D
                        </p>
                        <a href="#close" class="btn-close" arial-hidden="true">x</a> <!-- Ganti ke close-->
                    </div>
                    <div class="modal-body">
                        <img class="gambar1w" src="images/kucing.jpg">
                    </div>
                    <div class="modal-footer">
                        <a href="https://web.whatsapp.com/send?phone=<?php echo $link2; ?>&text=Saya <?php echo $link; ?> setuju dan saya menerima" class="btn">Kirim Jawaban</a> <!--ganti ke close-->
                        
                    </div>
                    
                    </div>

        <!------------------------Jawaban Di Tolak ------------------------------------------->

        <div class="wrap2">
            <a href="#jawabanditolak" class="btn btn-big2">Tidak</a>
        </div>

         <div class="modal2" id="jawabanditolak" arial-hidden="true">
            <div class="modal-dialog2">
                <div class="modal-header2">
                    <h2>Jawaban Dari <?php echo $link; ?> Tidak</h2>
                    <p>
                        Kalau lu nolak ya gpp :D , Eh kasih alasanya ya kalau lu nolak kenapa :D 
                        gua udah kasih tombol di bawah 
                    </p>
                    <a href="#close2" class="btn-close2" arial-hidden="true">x</a> <!-- Ganti ke close-->
                </div>
                <div class="modal-body2">
                    <img class="gambar1" src="images/buset.jpg" style="width:261px">
                </div>
                <div class="modal-footer2">
                    <a href="https://web.whatsapp.com/send?phone=<?php echo $link2; ?>&text=Saya <?php echo $link; ?> menolak dengan sebuah alasan" class="btn2">Kirim Jawaban</a> <!--ganti ke close-->
                </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
     </div>
    </div>
      </div>        
    </section>

    
</body>
</html>