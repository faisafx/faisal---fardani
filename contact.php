<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"/> 
    <link rel="shortout icon" type="x-icon" href="image/gambar3.jpg">


    <title>Web Faisal</title>
</head>
<body>
    <div class="home">
    <header>
   
        <nav>
            
           <a href="index.html">Home</a>
            <a href="about.html"> About</a>
            <a href="contact.php" class="active">Contact</a>
           <a href="https://docs.google.com/spreadsheets/d/1qOa83x5K5GpNuaL_pmsH0IShRK4uZMAnDUzPFT0mi04/edit?usp=drivesdk"> <i class="ri-file-download-fill"> </i>Unduh cv Saya</a>
        </nav>
    </header>

        <section class="kontak">
            <div class="kontak-section">
                <h1>Contact Me!</h1>
                <p>Kirim pesan kamu di formulir ini :</p>

                <form action="proseskirim.php" method="post" class="kontakform">

                 <label for="email">Email</label>
                   <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                    
                    <label for="pesan">Pesan</label>
                    <textarea id="pesan" name="pesan" placeholder="Tulis pesan Anda di sini..." rows="5" required></textarea>
                    
                    <button type="submit" class="submit">Kirim</button>
                    <?php if(isset($_GET['status'])): ?>
                        <?php
                        if($_GET['status'] == 'sukses'){
                            echo '<span class="berhasil">Pengiriman pesan anda berhasil!</span>';
                        } else {
                            echo '<span class="error">Pengiriman gagal!</span>';
                        }
                        ?>
                    <?php endif; ?>
                </form>
                </div>
               </section>
               </div>
             </body>
             </html>
