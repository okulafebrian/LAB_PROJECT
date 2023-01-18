<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{   
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'COOGER Set Sapu 2 pcs',
                'category_id' => '25',
                'description' => 'COOGER Set Sapu / Sapu dan Pengki / Broom Set / Pembersih Lantai 2 pcs, Sapu dan pengki set kombinasi rumah tangga lembut dapat menjangkau rambut dan terdapat sisir pada pengki sehingga dapat memisahkan rambut rontok pada sapu, di design dengan segala kemudahan untuk pengguna dan terbuat dari bahan berkualitas tinggi sehingga akan tahan lama.',
                'price' => '69900',
                'photo' => 'Bagus Sapu Lantai (Floor Broom) Tipe 339.jpg'
            ],
            [
                'name' => 'HOW TO WIN FRIENDS & INFLUENCE PEOPLE',
                'category_id' => '1',
                'description' => 'Nasihat-nasihat Dale Carnegie yang teruji waktu telah membawa takterhitung banyaknya orang mendaki tangga kesuksesan dalam kehidupanpribadi dan bisnis. Salah satu buku terlaris sepanjang masa yang menjadilandasan buku-buku laris lainnya, How to Win Friends & Influence People,akan memberi Anda: 6 cara untuk membuat orang menyukai Anda 12 cara untuk membuat orang menerima pemikiran Anda 9 cara untuk mengubah orang tanpa membuat mereka kesalDan lebih banyak lagi! Raih potensi maksimal Anda dengan buku wajibbaca di abad ke-21 ini, yang sudah terjual puluhan juta eksemplar!',
                'price' => '78400',
                'photo' => 'HOW TO WIN FRIENDS & INFLUENCE PEOPLE.jpg'
            ],
            [
                'name' => 'BUKU MEDITATIONS - MARCUS AURELIUS',
                'category_id' => '1',
                'description' => '"Di dalam jurnal pribadi Kaisar Marcus Aurelius ini kita belajar sosok manusia biasa yang harus melawan kecemasan, kekecewaan, kegetiran, dan hawa nafsu yang juga adalah perjuangan kita sehari-hari." Henry Manampiring, Penulis Filosofi Teras',
                'price' => '71200',
                'photo' => 'BUKU MEDITATIONS - MARCUS AURELIUS.png'
            ],
            [
                'name' => 'ASUS Vivobook Pro 14 OLED M3400QA-OLEDS752 - Solar Silver',
                'category_id' => '15',
                'description' => 'ASUS Vivobook Pro 14 OLED M3400QA-OLEDS752 - Solar Silver [AMD Ryzen™ 7 5800H / AMD Radeon™ Graphics / 16GB / 512GB / 14inch / WIN11 / OHS]',
                'price' => '11499000',
                'photo' => 'ASUS Vivobook Pro 14 OLED M3400QA-OLEDS752 - Solar Silver.jpg'
            ],
            [
                'name' => 'Logitech B170 Mouse Wireless - Black',
                'category_id' => '15',
                'description' => 'Colokkan saja receiver ke sebuah port USB di perangkatmu agar aktif dalam hitungan detik. Kontrol kursornya yang kecil dan mulus menjadikannya cocok untuk bekerja di ruang kecil dan meja yang penuh barang. Nikmatilah dunia wireless! TANGAN MANA PUN, DI MANA SAJA',
                'price' => '108000',
                'photo' => 'Logitech B170 Mouse Wireless - Black.jpg'
            ],
            [
                'name' => 'Monitor LED ACER XV242Y',
                'category_id' => '15',
                'description' => '<p>Brand Type : <strong>XV242YP</strong><br>Panel Size(Inch) : 24"<br>Panel Type : IPS Flat<br>Panel Resolution : 1920 x 1080<br>Aspect Ratio : 16:9 Wide<br><br>Brightness (cd/㎡) : 400<br>Refresh Rate(hz) : 165<br>Response Time (ms) : 2<br>Sync : Yes<br>Connectivity : HDMI 2.0 x2 + DP 1.2 x1<br>Speaker : Yes<br><br>Audio port : 1x 3.5mm Audio Out<br>VESA mounting (mm) : 100 x 100mm<br>Ergonomic Stand : Yes</p>',
                'price' => '2649900',
                'photo' => 'Monitor LED ACER XV242Y.jpg'
            ],
            [
                'name' => 'Logitech F310 Gamepad Joystick Wired untuk PC dan Android TV',
                'category_id' => '9',
                'description' => '<p>DUKUNGAN PERMAINAN YANG LUAS<br><br>Mainkan game populer dan klasik. Mainkan port konsol dengan pengendali gaya asli atau adopsi posisi yang lebih santai sambil menikmati permainan PC. F310 mudah diatur dan digunakan dengan game favoritmu berkat XInput/DirectInput1Membutuhkan instalasi software untuk mode DirectInput. —dua standar input yang paling umum ditemui.<br><br>STEAM BIG PICTURE<br><br>Mainkan pada TV-mu. Padukan F310 dengan Big Picture dan navigasi Steam, jelajahi web, nikmati permainan dan aktivitas lainnya dari kenyamanan sofa Anda. Bawalah seluruh koleksi permainan Steam ke ruang duduk, raih F310, duduk, dan nikmati.<br><br>TATA LETAK MIRIP KONSOL YANG FAMILIER<br><br>Ambil dan mainkan. Naluri Anda akan memandu aksi Anda pada tata letak yang familier. Anda akan siap bermain dalam sekejap mata. Diciptakan untuk pengalaman kendali mirip konsol dan inovasi dari rancangan tradisional, F310 sangat cocok.<br><br>D-PAD 4-TOMBOL EKSKLUSIF<br><br>D-pad standar terletak pada titik pivot tunggal, menyebabkan sulit dikendalikan. D-pad meluncur di atas empat tombol individual untuk nuansa sensitif yang responsif.</p>',
                'price' => '279000',
                'photo' => 'Logitech F310 Gamepad.jpg'
            ],
            [
                'name' => 'Apple MacBook Air M1 Chip 2020',
                'category_id' => '15',
                'description' => '<p>13-inch MacBook Air<br>Apple M1 chip with 8‑core CPU, 7‑core GPU, and 16‑core Neural Engine<br>8GB unified memory<br>256GB SSD storage<br>Retina display with True Tone<br>Magic Keyboard<br>Touch ID<br>Force Touch trackpad<br>Two Thunderbolt / USB 4 ports<br><br>In The Box :<br>MacBook Air M1<br>USB-C Charge Cable (2m)<br>30W USB-C Power Adapter</p>',
                'price' => '14249000',
                'photo' => 'Apple MacBook Air M1 Chip 2020.png'
            ],
            [
                'name' => 'Lenovo IdeaPad Slim 3 Celeron N4020',
                'category_id' => '15',
                'description' => 'Processor Intel Celeron N4020 (2C / 2T, 1.1 / 2.8GHz, 4MB) Graphics Integrated Intel UHD Graphics 600 Chipset Intel SoC Platform Memory 4GB Soldered DDR4-2400 Memory Slots Memory soldered to systemboard, no slots Max Memory 4GB soldered memory, not upgradable Storage 256GB SSD M.2 2242 PCIe 3.0x2 NVMe Storage Support "Up to 2 drives, 1x 2.5"" HDD + 1x M.2 2242/2280 SSD',
                'price' => '4099000',
                'photo' => 'Lenovo IdeaPad Slim 3 Celeron N4020.jpg'
            ],
            [
                'name' => 'HP ENVY X360',
                'category_id' => '15',
                'description' => '<p>Buat tanpa hambatan dengan HP Envy x360 13". Dengan layar yang dikalibrasi warna, Anda mendapatkan akurasi warna terbaik. Tetap produktif dengan masa pakai baterai yang lama dan Intel® Processor dan grafis. Gabungkan kekuatan perangkat dengan HP Palette. Tampil terbaik di2 dengan Filter Penampilan, Penyesuaian Lampu Latar &amp; Bingkai Otomatis. HP Envy x360 13.3 2-in-1 memungkinkan Anda menulis, membuat sketsa, streaming, atau mentransfer gambar di seluruh perangkat.<br><br>Grafis Intel® Iris® Xᵉ.<br>Performa impresif untuk berkreasi, bermain game, dan hiburan. Performa grafis tingkat baru dan visual yang tajam dan memukau – dengan kenyamanan laptop tipis &amp; ringan.</p>',
                'price' => '18999000',
                'photo' => 'HP ENVY X360.png'
            ],
            [
                'name' => 'MSI MPG ARTYMIS 343CQR MONITOR',
                'category_id' => '15',
                'description' => '<p>1000R Perfect Curved Screen - Perfectly fits the curvature of the human eye so that you can see the entire screen without any fatigue.<br><br>UWQHD High Resolution - Game titles will even look better, displaying more details due to the UWQHD resolution.<br><br>Smart Gaming – Pair with AI to Create A New Way of Gaming.<br><br>True Color Sync – With True Color Sync, you can maintain the same color display and avoid color differences between devices.<br><br>Rapid Boost (165Hz + 1ms) – Experience smooth gaming with a blazing fast refresh rate and response time, that gives you the upperhand in fast moving games.<br><br>HDR400 + 10 bits – It has passed the VESA HDR Display 400 Certification, meaning it can provide a display with the most realistic colors.<br><br>Gaming OSD App - Create the ultimate viewing settings for your game.<br><br>CEC Profile – Set up profiles for multiple sets of devices and can automatically detect your settings.<br><br>Mobile Projector–It is specially designed to display mobile phones with an 18:9 PBP screen on computer devices and keep it close to 16:9.</p>',
                'price' => '13160000',
                'photo' => 'MSI MPG ARTYMIS 343CQR MONITOR.jpg'
            ],
            [
                'name' => 'LENOVO IDEAPAD SLIM 1 14 RYZEN 3 7320U',
                'category_id' => '15',
                'description' => '<p>Spesifikasi unit :</p><ul><li>Processor : AMD Ryzen 3 7320U (4C / 8T, 2.4 / 4.1GHz, 2MB L2 / 4MB L3)</li><li>RAM : 8GB Soldered LPDDR5-5500, soldered memory, not upgradable</li><li>Storage : 512GBSSD M.2 2242 PCIe 4.0x4 NVMe</li><li>Storage Support : One drive, up to 1TB M.2 2242 SSD</li><li>VGA : Integrated AMD Radeon 610M Graphics</li><li>Display : 14" FHD (1920x1080) TN 220nits Anti-glare</li><li>Sistem Operasi : Windows 11 Home 64 Bit + Office Home and Student 2021</li><li>Warna : Cloud Grey/Sand</li><li>Kamera : HD 720p with Privacy Shutter</li><li>Audio : Stereo speakers, 1.5W x2, Dolby Audio</li></ul>',
                'price' => '7099000',
                'photo' => 'LENOVO IDEAPAD SLIM 1 14 RYZEN 3 7320U.jpg'
            ],
            [
                'name' => 'LENOVO YOGA 7i 16 TOUCH ARC A370',
                'category_id' => '15',
                'description' => '<p>Spesifikasi unit :<br><br>☑ Processor : Intel Core i7-12700H, 14C (6P + 8E) / 20T, P-core 2.3 / 4.7GHz, E-core 1.7 / 3.5GHz, 24MB<br>☑ RAM : 16GB Soldered LPDDR5-4800, soldered memory, not upgradable<br>☑ Storage : 1TB M.2 2242 PCIe 4.0x4 NVMe<br>☑ Storage Support : One drive, up to 1TB M.2 2242 SSD<br>☑ VGA : Intel Arc A370M 4GB GDDR6<br>☑ Display : 16" 2.5K (2560x1600) IPS 400nits Glossy, 100% sRGB, TÜV Low Blue Light, Dolby Vision, Touch<br>☑ Sistem Operasi : Windows 11 Home 64, English + Office Home and Student 2021<br>☑ Warna : Arctic Grey<br>☑ Kamera : FHD 1080p &amp; IR with Privacy Shutter</p>',
                'price' => '22999000',
                'photo' => 'LENOVO YOGA 7i 16 TOUCH ARC A370.jpg'
            ],
            [
                'name' => 'Apple Macbook Pro M2 2022',
                'category_id' => '15',
                'description' => '<p>In The Box :<br>- 13-inch MacBook Pro<br>- 67W USB-C Power Adapter<br>- USB-C Charge Cable (2 m)<br><br>Spesifikasi :<br>- M2 chip<br>- Memory 8GB<br>- 16-core Neural Engine<br>- 8-core CPU &amp; 10-core GPU<br>- 13.3-inch (diagonal) LED-backlit display<br>- Two Thunderbolt / USB 4 ports<br>- 3.5 mm headphone jack<br>- Backlit Magic Keyboard</p>',
                'price' => '19399000',
                'photo' => 'Apple Macbook Pro M2 2022.png'
            ],
            [
                'name' => 'Xiaomi Mi Desktop Monitor 27 inch Layar IPS 1080P',
                'category_id' => '15',
                'description' => '<p>Layar FHD Ultra Jernih<br>Untuk Anda yang ingin menikmati gambar yang indah dan detail saat bermain game-game single player maka Monitor ini dapat dinaikkan resolusinya hingga 1920 x 1080. Ditambah dengan layar berukuran besar 27 inch, permainan game Anda pasti akan lebih immersive.<br><br>Teknologi IPS<br>Monitor Redmi ini menggunakan panel IPS yang reproduksi warna dari monitor ini sangat akurat. View angle dari panel IPS ini juga sangat luas hingga 178 derajat.<br><br>75Hz Refresh Rate<br>Monitor ini mampu menghasilkan refresh rate 75Hz dengan response time 6ms GTG. Gambar yang dihasilkan lebih smooth dan tentunya mengurangi stutter dan ghosting.<br><br>Dudukan yang Dapat Disetel<br>Stand dari Monitor Redmi ini menggunakan ergonomic stand yang mana dapat diatur tinggi rendah, tilt dan rotate nya.</p>',
                'price' => '2070000',
                'photo' => 'Xiaomi Mi Desktop Monitor 27 inch Layar IPS 1080P.jpg'
            ],
            [
                'name' => 'Logitech M220 Mouse Wireless Silent Click - Rose',
                'category_id' => '15',
                'description' => '<p>Mouse wireless senyap, nyaman dan mudah dimudahkan<br><br>KESUNYIAN DI SETIAP KLIK<br>Lupakan tentang suara klik yang mengganggu. M220 mengurangi suara berisik lebih dari 90% sehingga menciptakan lingkungan yang lebih hening dan produktif untukmu dan orang-orang di sekelilingmu. Kontrol kursornya yang kecil dan mulus menjadikannya cocok untuk bekerja di ruang kecil dan meja yang penuh barang.<br><br>LEBIH SENYAP, LEBIH FOKUS<br>Tetap fokus pada pekerjaanmu tanpa gangguan suara. Teknologi SilentTouch dari Logitech mengurangi suara klik lebih dari 90%. Artinya, kamu bisa merasakan setiap klik, tanpa mendengar suara apa pun.<br><br>KUALITAS YANG BISA KAMU ANDALKAN<br>Mouse ini dibuat menggunakan standar kualitas tinggi sama yang menjadikan Logitech sebagai pemimpin global untuk mouse dan keyboard. Tahan lama dan andal, M220 juga dapat digunakan hingga maksimal 18 bulan tanpa mengganti baterai berkat tombol switch on/off dan mode auto-sleep penghemat daya.</p>',
                'price' => '165000',
                'photo' => 'Logitech M220 Mouse Wireless Silent Click - Rose.jpg'
            ],
            [
                'name' => 'Logitech Pebble M350 Mouse Wireless Bluetooth Slim Silent – Blueberry',
                'category_id' => '15',
                'description' => '<p>Logitech Pebble™ adalah mouse modern dengan silent click yang didesain untuk gaya hidup Anda yang terorganisir. Bentuk yang ramping terasa nyaman di tangan dan mudah pergi kemanapun. Penelusuran optik dengan tingkat presisi yang tinggi, serta scroll wheel karet yang lebih lebar menawarkan kinerja optimal dalam kemasan yang sederhana.<br><br>Daya tahan baterai 18 bulan (3) dan konektivitas ganda (BLUETOOTH® &amp; Receiver 2.4 GHz) memastikan pengalaman pengguna yang tidak merepotkan.</p>',
                'price' => '257000',
                'photo' => 'Logitech Pebble M350 Mouse Wireless Bluetooth Slim Silent – Blueberry.jpg'
            ],
            [
                'name' => 'Logitech MX Mechanical Mini Tactile Keyboard Wireless Bluetooth',
                'category_id' => '15',
                'description' => '<p>Memperkenalkan MX Mechanical Mini, keyboard minimalis dengan nuansa, presisi, dan kinerja luar biasa. Pengetikan mekanikal yang sederhana menghadirkan feedback yang memuaskan tipe tombol switch Tactile Quiet. Jemarimu akan meluncur mulus di permukaan tombol matte dan keycap dua warnanya memandu penglihatan guna memudahkanmu mengarahkan jemari dan tetap fokus dalam alur kerjamu.<br><br>MX Mechanical Mini dibuat untuk menghadirkan kenyamanan ergonomis dengan smart backlighting dan easy-switch, memungkinkanmu untuk terhubung ke maksimum 3 perangkat dan tetap fokus bekerja selama berjam-jam lamanya. Tombol backlit secara otomatis menyesuaikan agar sesuai dengan kondisi pencahayaan yang berubah-ubah.</p>',
                'price' => '2249000',
                'photo' => 'Logitech MX Mechanical Mini Tactile Keyboard Wireless Bluetooth.jpg'
            ],
            [
                'name' => 'Logitech K380 Keyboard Wireless Bluetooth Multi-Device – Sand',
                'category_id' => '15',
                'description' => '<p>K380 Multi Perangkat adalah keyboard Bluetooth® yang bisa kamu bawa ke mana saja, baik di dalam atau luar rumah. Dapatkan kenyamanan dan kemudahan mengetik di desktop komputer, smartphone, tablet, dan masih banyak lagi.*<br><br>Mengetik pada perangkat apa saja!<br>Terhubung dan mengetik dengan mudah, dengan : Windows, Mac, iPadOS, Chrome OS, Android, iOS, Apple TV<br><br>Tetap gaya dimanapun<br>Keyboard dengan desain minimalis dan modern</p>',
                'price' => '449000',
                'photo' => 'Logitech K380 Keyboard Wireless Bluetooth Multi-Device – Sand.jpg'
            ],
            [
                'name' => 'Logitech Signature K650 Keyboard Wireless Bluetooth Comfort - Hitam',
                'category_id' => '15',
                'description' => '<p>Mengetik dengan nyaman dan mampu menyelesaikan pekerjaan lebih banyak dengan Logitech Signature K650 Wireless Comfort Keyboard. Dilengkapi palm rest internal yang lembut dan tombol yang empuk, keyboard ini menghadirkan pengalaman mengetik yang lebih mudah sepanjang hari.<br><br>Sandaran keyboard menawarkan dua sudut kemiringan yang berbeda sehingga posisi mengetik bisa disesuaikan. Tata letak keyboardnya full-size memudahkan akses ke semua tombol dengan lebih tepat. Tombol pintas (shortcut) Logitech pun telah ditingkatkan, sehingga dapat menghemat waktu dengan adanya 24 perintah berbeda, termasuk mic mute dan unmute, screenshot serta navigasi website.<br><br>Dirancang untuk keserbagunaan, keyboard ini menawarkan dua opsi wireless yang berbeda untuk terhubung ke komputer, yaitu : bluetooth atau receiver USB Logi Bolt. Ditenagai oleh 2 baterai AA yang akan bertahan maksimum 36 bulan</p>',
                'price' => '615000',
                'photo' => 'Logitech Signature K650 Keyboard Wireless Bluetooth Comfort - Hitam.jpg'
            ],
            [
                'name' => 'Logitech F710 Gamepad Wireless untuk PC dan Android TV',
                'category_id' => '9',
                'description' => '<p>KONEKSI WIRELESS 2,4 GHZ<br><br>Pasang dan lupakan. Potong kabel dan nikmati kebebasan—bermain tanpa kabel. Masukkan saja receiver nano ke dalam port USB untuk transmisi data 2,4 GHz yang cepat tanpa adanya penundaan, koneksi yang terputus-putus atau gangguan.<br><br>DUAL VIBRATION FEEDBACK MOTOR1MEMBUTUHKAN INSTALASI SOFTWARE UNTUK MODE DIRECTINPUT.<br><br>Rasakan game-nya. Temukan level atau umpan balik baru yang dapat Anda rasakan pada setiap tumbukan, tabrakan, dan ledakan dalam permainan yang mendukung umpan balik getaran.<br><br>DUKUNGAN PERMAINAN YANG LUAS<br><br>Mainkan port konsol dengan pengendali gaya asli atau adopsi posisi yang lebih santai sambil menikmati permainan PC. F710 mudah diatur dan digunakan dengan permainan favorit Anda berkat XInput/DirectInput yang merupakan dua standar input yang paling umum.<br><br>STEAM BIG PICTURE<br><br>Mainkan pada TV-mu. Padukan F710 dengan Big Picture dan navigasi Steam, jelajahi web, bermain dan lebih banyak lagi dari kenyamanan sofa Anda. Bawa seluruh koleksi permainan Steam ke ruang duduk, raih F710, duduk, dan nikmati.<br><br>TATA LETAK MIRIP KONSOL YANG FAMILIER<br><br>Ambil dan mainkan. Naluri Anda akan memandu aksi Anda pada tata letak yang familier dan Anda akan siap bermain dalam sekejap mata. Diciptakan untuk pengalaman pengendalian mirip konsol dan inovasi dari rancangan tradisional, F710 sangat cocok.</p>',
                'price' => '569000',
                'photo' => 'Logitech F710 Gamepad Wireless untuk PC dan Android TV.jpg'
            ],
            [
                'name' => 'PS5 Playstation 5',
                'category_id' => '9',
                'description' => '<p>Specifications :</p><ul><li>CPU : 8x 8x Zen 2 Cores at 3.5 GHz</li><li>GPU : 10.28 TFLOPs, 36 CUs at 2.23 GHz</li><li>GPU Architecture : Custom RDNA 2</li><li>Memory/Interface : 16 GB GDDR6/256-bit</li><li>Memory Bandwidth : 448 Gbps</li><li>Internal Storage Custom : 825 GB SSD</li><li>IO Throughput : 5.56 Gbps (Raw), Typical 8-9 Gbps</li><li>Expendable Storage : NVMe SSD Slot</li><li>Optical Drive : 4K UHD Blu-ray Drive</li></ul>',
                'price' => '10350000',
                'photo' => 'PS5 Playstation 5.jpg'
            ],
            [
                'name' => 'Logitech G29 Driving Force Racing Wheel and Pedal for PC, PS4 and PS5',
                'category_id' => '9',
                'description' => '<p>Simulasi balapan memukau yang terasa sangat nyata. Dual-motor force feedback membuatmu merasakan setiap ban selip dan perubahan medan. Ball bearing baja yang kokoh pada poros kemudi menjadikannya tangguh dan tahan lama. Stainless steel paddle shifter dan pedal lantai menerapkan kekuatan yang akurat. Kemudi yang dibalut kulit sulaman tangan bagaikan kemudi mobil mewah. Helical gearing menghadirkan penggunaan yang mulus dan hening.</p>',
                'price' => '3959000',
                'photo' => 'Logitech G29 Driving Force Racing Wheel and Pedal for PC, PS4 and PS5.jpg'
            ],
            [
                'name' => 'Razer Kishi Universal Gaming Controller for Android - Gamepad Joystick',
                'category_id' => '9',
                'description' => '<p>MAKE YOUR MOVE<br>Bring your A-game anytime, anywhere. Introducing a universal mobile gaming controller that fits most smartphone devices, designed to bring console-level control to your on-the-go gaming. With this controller by your side, wherever you go, victory will follow.<br><br>CLICKABLE ANALOG THUMBSTICKS<br>Refine your aim and execution with a familiar console controller experience that provides tactile feedback, supported by an array of face and bumper buttons, as well as a D-pad for extra inputs.<br><br>UNIVERSAL FIT<br>The universal mobile controller’s flexible design allows it to be stretched and clamped on most phones, providing a secure hold that’ll never come loose while you game.<br><br>ULTRA-LOW LATENCY GAMEPLAY<br>Because it connects directly to your device’s charging port, this mobile controller is able to provide instant button response for smooth, seamless control.</p>',
                'price' => '989000',
                'photo' => 'Razer Kishi Universal Gaming Controller for Android - Gamepad Joystick.jpg'
            ],
            [
                'name' => 'Nintendo Switch Console OLED Pokemon Scarlet & Violet Edition',
                'category_id' => '9',
                'description' => '<p>The Nintendo Switch OLED Model: Pokémon Scarlet &amp; Violet Edition system features special illustrations of the Legendary Pokémon appearing in the Pokémon Scarlet and Pokémon Violet games, Koraidon and Miraidon, as well as the partner Pokémon Sprigatito, Fuecoco, and Quaxly.</p>',
                'price' => '5149000',
                'photo' => 'Nintendo Switch Console OLED Pokemon Scarlet & Violet Edition.jpg'
            ],
            [
                'name' => 'CRAYON SHINCHAN X TAHILALATS - KALIB Tas Selempang',
                'category_id' => '6',
                'description' => '<p>kalibre x shinchan tas selempang<br>Dimensi 20 cm x 17 cm x 7 cm<br>Volume 2L</p>',
                'price' => '255000',
                'photo' => 'CRAYON SHINCHAN X TAHILALATS - KALIB Tas Selempang.jpg'
            ],
            [
                'name' => 'CRAYON SHINCHAN X TAHILALATS - KALIBRE Topi',
                'category_id' => '6',
                'description' => '<p>kalibre x Shinchan<br>Diameter lingkar kepala 57 cm<br>All size</p>',
                'price' => '135000',
                'photo' => 'CRAYON SHINCHAN X TAHILALATS - KALIBRE Topi.jpg'
            ],
            [
                'name' => 'Jackersfield x Tahilalats x Shinchan Peace Sign Bowling Shirt Mustard',
                'category_id' => '6',
                'description' => '<p>Kolaborasi Jackersfield bersama Tahilalats dan Shinchan. Perpaduan terbaik dari kualitas material bahan &amp; jenis sablon. Karakter design yang menarik, hal tersebut yang menjadikan brand Jackersfield menjadi salah satu brand terbaik di Indonesia. Semua menggunakan material Katun Twill dan Bordir. Produk ini berlisensi resmi.<br><br>Size Chart : Terlampir dislide photo terakhir catalog<br><br>Bahan : Cotton Twill<br>Printed : Bordir</p>',
                'price' => '399000',
                'photo' => 'Jackersfield x Tahilalats x Shinchan Peace Sign Bowling Shirt Mustard.jpg'
            ],
            [
                'name' => 'CRAYON SHINCHAN X TAHILALATS - KALIBRE Waistbag',
                'category_id' => '6',
                'description' => '<p>kalibre x shinchan<br>dimensi : 40 cm x 15 cm x 8cm<br>volume 3L</p>',
                'price' => '235000',
                'photo' => 'CRAYON SHINCHAN X TAHILALATS - KALIBRE Waistbag.jpg'
            ],
            [
                'name' => 'Edwin Jeans Unisex 7.0 Limited Edition T-Shirt Rising Sun White SS',
                'category_id' => '6',
                'description' => '<p>“EDWIN Jeans hadir dengan koleksi Kaos Unisex dengan kualitas terbaik dan style masa kini.”<br><br>Deskripsi:<br>- Bahan: 100% Katun 20s<br>- Warna: Putih<br>- Fit: Slim fit<br>Lainya:<br>-Lengan Pendek<br>- Kerah Bulat<br>- Detail Sablon Semi Water Based<br>- 100% Anti luntur</p>',
                'price' => '69000',
                'photo' => 'Edwin Jeans Unisex 7.0 Limited Edition T-Shirt Rising Sun White SS.jpg'
            ],
            [
                'name' => 'Edwin Jeans Unisex 7.0 Limited Edition T-Shirt Koi Black SS',
                'category_id' => '6',
                'description' => '<p>“EDWIN Jeans hadir dengan koleksi Kaos Unisex dengan kualitas terbaik dan style masa kini.”<br><br>Deskripsi:<br>- Bahan: 100% Katun 20s<br>- Warna: Hitam<br>- Fit: Slim fit<br>Lainya:<br>-Lengan Pendek<br>- Kerah Bulat<br>- Detail Sablon Semi Water Based<br>- 100% Anti luntur</p>',
                'price' => '69000',
                'photo' => 'Edwin Jeans Unisex 7.0 Limited Edition T-Shirt Koi Black SS.jpg'
            ],
            [
                'name' => 'TOPI BUCKET - JIMMY AND MARTIN - TP031',
                'category_id' => '6',
                'description' => '<p>Bucket Hat Reversible Maroon-Cream<br><br>- Polar Fleece Fabric<br>- Reversible On Maroon &amp; Cream<br>- Embroidery Graphic 70s<br>- Woven Label Jimmy And Martin<br><br>Measurements:<br>- All Size Rounded Length 62 Cm</p>',
                'price' => '69965',
                'photo' => 'TOPI BUCKET - JIMMY AND MARTIN - TP031.jpg'
            ],
            [
                'name' => 'Ripple Summer Shirt in Green',
                'category_id' => '6',
                'description' => '<p>Antidot Studios x Novere<br>Summer To Remember<br><br>Ripple Summer Shirt in Green<br><br>All Size / Oversized Fit<br>Fit to XL<br>----------------<br>Chest 62 cm<br>Length 78 cm<br><br>Material : TENCEL™️ Carbon Zero</p>',
                'price' => '429000',
                'photo' => 'Ripple Summer Shirt in Green.jpg'
            ],
            [
                'name' => 'Ripple Summer Shirt in Cream',
                'category_id' => '6',
                'description' => '<p>Antidot Studios x Novere<br>Summer To Remember<br><br>Ripple Summer Shirt in Cream<br><br>All Size / Oversized Fit<br>Fit to XL<br>----------------<br>Chest 62 cm<br>Length 78 cm<br><br>Material : TENCEL™️ Carbon Zero</p>',
                'price' => '429000',
                'photo' => 'Ripple Summer Shirt in Cream.jpg'
            ],
            [
                'name' => 'Cloud Long Pants',
                'category_id' => '6',
                'description' => '<p>Antidot Studios x Novere<br>Summer To Remember<br><br>Cloud Long Pants<br><br>S/M<br>Length 92<br>Waist 74-90<br>Thigh 60<br><br>M/L<br>Length 100<br>Waist 78-98<br>Thigh 64<br><br>Material : TENCEL™️ Carbon Zero</p>',
                'price' => '369000',
                'photo' => 'Cloud Long Pants.jpg'
            ],
            [
                'name' => 'Cloud Short Pants - Grey',
                'category_id' => '6',
                'description' => '<p>Antidot Studios x Novere<br>Summer To Remember<br><br>Cloud Short Pants<br><br>S/M<br>Length 46 cm<br>Waist 74-90<br><br>M/L<br>Length 49 cm<br>Waist 78-94<br><br>Material : TENCEL™️ Carbon Zero</p>',
                'price' => '279000',
                'photo' => 'Cloud Short Pants - Grey.jpg'
            ],
            [
                'name' => 'Kaos Unisex Erigo T-Shirt Oversize Speed Ruler Black - S',
                'category_id' => '6',
                'description' => '<p>T-Shirt Oversize Erigo saat ini menjadi pilihan terbaik untuk tampil stylish dengan produk yang berkualitas tinggi dan berbagai pilihan warna. Dengan model oversize dan sablon timbul yang berkualitas, T-Shirt Oversize Erigo dapat menambahkan percaya dirimu untuk tampil lebih keren.<br><br>T-Shirt Oversize Erigo dapat digunakan dengan dipadukan outerwear ataupun tidak. Apapun pilihanmu, T-shirt Oversize dapat membuat tampilanmu lebih menarik.</p><p>Bahan : Cotton 20s<br>&nbsp;</p><p>Logo Erigo : High density print :</p><ul><li>Water base pasta / Oekotex</li><li>32 layer print</li><li>Coating layer</li><li>Transfer method</li><li>Fit oversize</li></ul>',
                'price' => '145000',
                'photo' => 'Kaos Unisex Erigo T-Shirt Oversize Speed Ruler Black - S.jpg'
            ],
            [
                'name' => 'Celana Unisex Erigo Jogger Pants Baines Katun Emerald - 28',
                'category_id' => '6',
                'description' => '<p>ogger Pants Erigo saat ini merupakan salah satu lini pakaian terbaik dan berkualitas tinggi di antara Local Brand Indonesia. Celana yang dibuat dengan bahan pilihan untuk membuatmu nyaman sepanjang hari! Jogger Pants Erigo memiliki pinggang elastis dengan tali serut yang dapat disesuaikan, bagian ujung celana yang elastis, saku di bagian belakang dan pinggul, dan variasi stripe yang simple. Padukan jogger pants-mu dengan slim fit t-shirt atau jacket untuk tampilan yang lebih stylish!<br><br><br>Untuk Model Pria: Tinggi 185-186 cm, Berat 75 kg, Menggunakan Ukuran XL<br>Untuk Model Wanita: Tinggi 168-170 cm, Berat 55 kg, Menggunakan Ukuran M<br><br>Bahan: Katun</p>',
                'price' => '145000',
                'photo' => 'Celana Unisex Erigo Jogger Pants Baines Katun Emerald - 28.jpg'
            ],
            [
                'name' => 'Celana Unisex Erigo Jogger Pants Alexi Katun Navy - 28',
                'category_id' => '6',
                'description' => '<p>Jogger Pants Erigo saat ini merupakan salah satu lini pakaian terbaik dan berkualitas tinggi di antara Local Brand Indonesia. Celana yang dibuat dengan bahan pilihan untuk membuatmu nyaman sepanjang hari! Jogger Pants Erigo memiliki pinggang elastis dengan tali serut yang dapat disesuaikan, bagian ujung celana yang elastis, saku di bagian belakang dan pinggul, dan variasi stripe yang simple. Padukan jogger pants-mu dengan slim fit t-shirt atau jacket untuk tampilan yang lebih stylish!<br><br><br>Untuk Model Pria: Tinggi 185-186 cm, Berat 75 kg, Menggunakan Ukuran XL<br>Untuk Model Wanita: Tinggi 168-170 cm, Berat 55 kg, Menggunakan Ukuran M<br><br>Bahan: Katun</p>',
                'price' => '145000',
                'photo' => 'Celana Unisex Erigo Jogger Pants Alexi Katun Navy - 28.jpg'
            ],
            [
                'name' => 'Celana Unisex Erigo Jogger Pants Cenora Katun Grey - 28',
                'category_id' => '6',
                'description' => '<p>Jogger Pants Erigo saat ini merupakan salah satu lini pakaian terbaik dan berkualitas tinggi di antara Local Brand Indonesia. Celana yang dibuat dengan bahan pilihan untuk membuatmu nyaman sepanjang hari! Jogger Pants Erigo memiliki pinggang elastis dengan tali serut yang dapat disesuaikan, bagian ujung celana yang elastis, saku di bagian belakang dan pinggul, dan variasi stripe yang simple. Padukan jogger pants-mu dengan slim fit t-shirt atau jacket untuk tampilan yang lebih stylish!<br><br>Untuk Model Pria: Tinggi 185-186 cm, Berat 75 kg, Menggunakan Ukuran XL<br>Untuk Model Wanita: Tinggi 168-170 cm, Berat 55 kg, Menggunakan Ukuran M<br><br>Bahan: Katun</p>',
                'price' => '145000',
                'photo' => 'Celana Unisex Erigo Jogger Pants Cenora Katun Grey - 28.jpg'
            ],
            [
                'name' => 'Batik Pria Lengan Panjang Katun Halus Solo Baju Batik Premium - S',
                'category_id' => '6',
                'description' => '<p>Reguler Fit<br>Ready Stock S-XXXL<br>Keterangan :<br>- Katun prima<br>- Bahan Halus<br>Keterangan S M L XL XXL XXXL<br>Lebar Dada 51 54 57 60 62 64<br>Lingkar Dada 102 108 114 120 124 128<br>Lebar Bahu 47 48 49 50 51 52<br>Panjang Kemeja 70 73 76 79 81 83<br>Panjang Lengan 56 58 60 62 64 66</p>',
                'price' => '185000',
                'photo' => 'Batik Pria Lengan Panjang Katun Halus Solo Baju Batik Premium - S.jpg'
            ],
            [
                'name' => 'Batik Pria Lengan Panjang Katun Halus Baju Batik Pria - S',
                'category_id' => '6',
                'description' => '<p>Reguler Fit<br>Ready Stock S-XXXL<br>Keterangan :<br>- Katun prima<br>- Bahan Halus<br>Keterangan S M L XL XXL XXXL<br>Lebar Dada 51 54 57 60 62 64<br>Lingkar Dada 102 108 114 120 124 128<br>Lebar Bahu 47 48 49 50 51 52<br>Panjang Kemeja 70 73 76 79 81 83<br>Panjang Lengan 56 58 60 62 64 66</p>',
                'price' => '185000',
                'photo' => 'Batik Pria Lengan Panjang Katun Halus Baju Batik Pria - S.jpg'
            ],
            [
                'name' => 'Sweater Korean Style Long Sleeve Fashion Dress TEAM STYLE',
                'category_id' => '7',
                'description' => '<p>Sweater Grosir Korean Style "<br><br>merupakan salah satu lini pakaian terbaik dan berkualitas tinggi dengan kualitas terbaik dan harga terjangkau . Dibuat dengan bahan cotton yang nyaman untuk menemani harimu dan memiliki<br>desain yang unik dan tidak pasaran . Dapatkan long lasting tee dengan warna cantik dan trend terkini untuk merasa muda selamanya!<br><br>Size / ukuran : All Size<br>LD : 90 - 120cm<br>Panjang : 72 cm<br>Lingkar Lengan : 40 cm<br>Warna : sesuai gambar</p>',
                'price' => '119000',
                'photo' => 'Sweater Korean Style Long Sleeve Fashion Dress TEAM STYLE.jpg'
            ],
            [
                'name' => 'Miyoshi Jeans MY17PA Skinny Jeans Dark Blue',
                'category_id' => '7',
                'description' => '<p>- Skinny jeans dengan detail cuff hemline<br>- Warna dark denim<br>- Mid rise<br>- Unlined<br>- Skinny fit<br>- Kancing dan resleting depan<br>- Material denim<br>- Tinggi model 174cm, mengenakan ukuran M</p>',
                'price' => '129900',
                'photo' => 'Miyoshi Jeans MY17PA Skinny Jeans Dark Blue.jpg'
            ],
            [
                'name' => 'Evercloth Reva Celana Batik Kulot Pendek Batik Cullote Bawahan Setelan',
                'category_id' => '7',
                'description' => '<p>Reva Cullote<br>Bahan : Katun Stretch<br>Panjang : 66 cm<br>Lingkar Pinggang : 72-100 cm<br>Ukuran : Allsize Fit to S-XL<br>Note :<br>- Pinggang Belakang ada Karet<br>- Ada kantong di kiri dan kanan<br>Toleransi Error Pengukuran : ±1-3 cm</p>',
                'price' => '130000',
                'photo' => 'Evercloth Reva Celana Batik Kulot Pendek Batik Cullote Bawahan Setelan.jpg'
            ],
            [
                'name' => 'SWEPO Basic Sweater Hard Pill To Swallow (Sablon) M-XXL',
                'category_id' => '7',
                'description' => '<p>SWEATERPOLOSID Basic Sweater Hard Pill To Swallow M-XXL (Pria &amp; Wanita)Size: M-XXL<br>Custom: Sablon<br>Material: Cotton Fleece</p>',
                'price' => '78500',
                'photo' => 'SWEPO Basic Sweater Hard Pill To Swallow (Sablon) M-XXL.jpg'
            ],
            [
                'name' => 'MINISO Tas Selempang Lipstik Rantai Wanita Sling Bag Lipstick Kecil - Merah Muda',
                'category_id' => '7',
                'description' => '<p>MINISO Tas Selempang Lipstik Rantai Wanita Sling Bag Lipstick Kecil<br>Tas selempang mini buat lipstik,barang-barang kecil atau HP! Cocok untuk acara formal maupun nonformal. Warna yang klasik dan elegan, bikin look Anda terlihat cantik dan fashion. Tas terbuat dari bahan kualitas premium yang cukup tahan lama.</p><p>Chain/rantai yang cantik dan berkelas<br>Bahan PVC yang premium, kualitas yang terbaik, cukup tahan lama.<br>Struktur wajar dan Kapasitas besar<br>Cocok untuk pesta,perjalanan, berbelanja.</p>',
                'price' => '45900',
                'photo' => 'MINISO Tas Selempang Lipstik Rantai Wanita Sling Bag Lipstick Kecil - Merah Muda.jpg'
            ],
            [
                'name' => 'MINISO Dompet Wanita Kecil Mini Pendek Wallet Simple - Merah Muda',
                'category_id' => '7',
                'description' => '<p>Parameter:<br>Berat: 77.2g<br>Size: 10.8 * 1.5 * 8.2cm<br><br>1.Di desiign dengan slot kecil untuk menyimpan kartu atau uang cash dan barang kecil lainnya<br>2.Mempunyai quality yang tinggi dompet MINISO ini sangat awet untuk dipakai<br>3.Sangat gampang untuk dibawa kemana mana<br>4.Ideal untuk menjadi kado ulang tahun, peringatan taunan untuk diberi kepada teman dan keluarga<br>5.Perfect untuk digunakan sehari hari atau untuk acara yang formal</p>',
                'price' => '59900',
                'photo' => 'MINISO Dompet Wanita Kecil Mini Pendek Wallet Simple - Merah Muda.jpg'
            ],
            [
                'name' => 'Hush Puppies Canvas Sling Bag 1 In Black',
                'category_id' => '7',
                'description' => '<p>Tote bag dengan kompartemen utama menggunakan magnet, tambahan 1 kantung kecil dibagian depan dan 2 kantung kecil dibagian dalam, material canvas yang kuat, serta bordir desain dibagian depan, dilengkapi dengan strap<br><br>LENGTH x HEIGHT x DEPTH x WIDTH<br>27 x 22 x 15 x 9 cm</p>',
                'price' => '299500',
                'photo' => 'Hush Puppies Canvas Sling Bag 1 In Black.jpg'
            ],
            [
                'name' => 'Tas Wanita Hush Puppies Gemmie Top Handle (L) Black',
                'category_id' => '7',
                'description' => '<p>Cowhide PU Top handle bag with double zips compartments with magnetic snap closure, Front and back slit pockets, Detachable/Adjustable long strap, Inner zip and slit pockets, Sateen Cotton with HP logo linning, Light gold plated hardware, HP lettering logo</p><p>Detail Size (cm) :<br>Tinggi = 21<br>Panjang = 31<br>Lebar = 11</p>',
                'price' => '1039200',
                'photo' => 'Tas Wanita Hush Puppies Gemmie Top Handle (L) Black.jpg'
            ],
            [
                'name' => 'Tas Wanita Hush Puppies Kerry Top Handle Beige',
                'category_id' => '7',
                'description' => '<p>Top handle with snap closure, two inner pockets left and right, adjustable and detachable straps, emboss logo HP<br><br>Brand : Hush Puppies<br>Color :<br>Material : Sack<br>Style :<br><br>Detail Size :<br>Tinggi x Panjangx Lebar<br>20 x 25.5 x 14</p>',
                'price' => '349500',
                'photo' => 'Tas Wanita Hush Puppies Kerry Top Handle Beige.jpg'
            ],
            [
                'name' => 'Hush Puppies Tas Wanita Perri Bucket (S) In Light Blue',
                'category_id' => '7',
                'description' => '<p>Embossed weaved PU matched with tone on tone Nappa PU Bucket bag, Drawstring closure, adjustable long strap, Inner slit pocket, sateen cotton HP logo linning, Light gold plated hardware, HP lettering logo<br><br>Brand : Hush Puppies<br>Color :<br>Material : Leather<br>Style : Bags<br><br>Ukuran produk :<br>Tinggi x Panjangx Lebar<br>14 x 21 x 9</p>',
                'price' => '539400',
                'photo' => 'Hush Puppies Tas Wanita Perri Bucket (S) In Light Blue.jpg'
            ],
            [
                'name' => 'Hush Puppies Modern Work Zip Boot In Frost Gray Nubuck',
                'category_id' => '7',
                'description' => '<p>Brand : Hush Puppies<br>Color :<br>Material :<br>Style : Boots<br><br>Detail Size :<br>Size 36 (050) = 22.5 cm<br>Size 37 (060) = 23.5 cm<br>Size 38 (070) = 24.5 cm<br>Size 39 (080) = 25.5 cm<br>Size 40 (090) = 26.5 cm</p>',
                'price' => '1199500',
                'photo' => 'Hush Puppies Modern Work Zip Boot In Frost Gray Nubuck.jpg'
            ],
            [
                'name' => 'Hush Puppies Modern Work Zip Boot In Taupe Nubuck',
                'category_id' => '7',
                'description' => '<p>Brand : Hush Puppies<br>Color :<br>Material :<br>Style : Boots<br><br>Detail Size :<br>Size 36 (050) = 22.5 cm<br>Size 37 (060) = 23.5 cm<br>Size 38 (070) = 24.5 cm<br>Size 39 (080) = 25.5 cm<br>Size 40 (090) = 26.5 cm</p>',
                'price' => '1199500',
                'photo' => 'Hush Puppies Modern Work Zip Boot In Taupe Nubuck.jpg'
            ],
            [
                'name' => 'Thesilversky Throwback 90s Edition Bucket Hat - Retro 90\'s',
                'category_id' => '7',
                'description' => '<p>Premium Japan Drill<br>Ukuran allsize remaja-dewasa<br>Unisex untuk cewe/cowo<br><br>Ukuran Allsize :<br>Tinggi total 13cm<br>lebar kepala 25<br>lebar bawah topi 32cm</p>',
                'price' => '45900',
                'photo' => 'Thesilversky Throwback 90s Edition Bucket Hat - Retro 90\'s.png'
            ],
            [
                'name' => 'WINOD Lalisa Flatshoes - Black, 37',
                'category_id' => '7',
                'description' => '<ul><li>Flatshoes winod dilapisi 3 layer premium foam anti bacterial. Yang membuat kaki anti lecet dan nyaman hingga pemakain 12 jam.</li><li>Anti bacterial tersebut yang menghambat perkembangan bakteri di kaki.</li><li>Alas super empuk, tidak akan kempes Karena menggunakan Double foam premium.</li></ul><p>Lalisa flatshoes adalah salah satu koleksi basic di flatshoes winod. bikin tambah cantik, unik, dan stylish.<br><br>Produk terbaru dengan Inovasi Unik Canvas mis Leather and Chain<br><br>Bahan :sintetis leathe premiumr and Chain Anti Karat<br>Sol : Non Slip</p>',
                'price' => '83700',
                'photo' => 'WINOD Lalisa Flatshoes - Black, 37.jpg'
            ],
            [
                'name' => 'Wangsit Hots Sbmptn Soshum 2023',
                'category_id' => '1',
                'description' => '<p>Penerimaan Mahasiswa baru perguruan tinggi dilaksanakan melalui tiga jalur, yaitu SNMPTN, SBMPTN, dan Seleksi Mandiri. Lembaga pemerintah yang menyelenggarakan seleksi masuk perguruan tinggi adalah LTMPT (Lembaga Tes Masuk Perguruan Tinggi). Selain itu, pemerintah mengeluarkan kebijakan SSO (Single Sign On) yang artinya seluruh peserta harus membuat akun LTMPT dengan melakukan registrasi.</p><p>Buku WANGSIT (Pawang Soal Sulit) HOTS SBMPTN Soshum 2023 ini hadir untuk membekali siswa dalam persiapan ujian masuk perguruan tinggi negeri. Materi dalam buku ini bahas secara mendalam ditambah dengan drilling soal per topik bahasan dan pembahasan yang mudah dipahami. Selain itu, buku ini juga dilengkapi dengan soal prediksi dan try out SBMPTN yang akurat sehingga dapat memberikan gambaran kepada siswa tentang soal yang akan diujikan. Menjadi mahasiswa di PTN ternama memang bukan hal yang mudah dan bukan hal yang perlu dikhawatirkan, yang terpenting adalah usaha dan doa untuk menggapai impian tersebut.<br><br>Selamat belajar dan semoga sukses!</p>',
                'price' => '180000',
                'photo' => 'Wangsit Hots Sbmptn Soshum 2023.jpg'
            ],
            [
                'name' => 'Wangsit Hots Sbmptn Saintek 2023',
                'category_id' => '1',
                'description' => '<p>Penerimaan Mahasiswa baru perguruan tinggi dilaksanakan melalui tiga jalur, yaitu SNMPTN, SBMPTN, dan Seleksi Mandiri. Lembaga pemerintah yang menyelenggarakan seleksi masuk perguruan tinggi adalah LTMPT (Lembaga Tes Masuk Perguruan Tinggi). Selain itu, pemerintah mengeluarkan kebijakan SSO (Single Sign On) yang artinya seluruh peserta harus membuat akun LTMPT dengan melakukan registrasi.</p><p><br>Buku WANGSIT (Pawang Soal Sulit) HOTS SBMPTN Saintek 2023 ini hadir untuk membekali siswa dalam persiapan ujian masuk perguruan tinggi negeri. Materi dalam buku ini bahas secara mendalam ditambah dengan drilling soal per topik bahasan dan pembahasan yang mudah dipahami. Selain itu, buku ini juga dilengkapi dengan soal prediksi dan try out SBMPTN yang akurat sehingga dapat memberikan gambaran kepada siswa tentang soal yang akan diujikan. Menjadi mahasiswa di PTN ternama memang bukan hal yang mudah dan bukan hal yang perlu dikhawatirkan, yang terpenting adalah usaha dan doa untuk menggapai impian tersebut.</p>',
                'price' => '180000',
                'photo' => 'Wangsit Hots Sbmptn Saintek 2023.jpg'
            ],
            [
                'name' => 'Jujutsu Kaisen 07',
                'category_id' => '1',
                'description' => '<p>Jari Sukuna dan objek terkutuk tingkat tinggi Jutai Kusozu yang disimpan di akademi jujutsu berhasil dicuri oleh Mahito. Kusozu pun menjelma jadi ancaman baru. Tanpa mengetahui bahaya tersebut, Itadori dan yang lainnya pergi untuk memusnahkan jurei yang muncul di pintu gerbang. Akan tetapi...!?</p><p><br>&nbsp;</p>',
                'price' => '20000',
                'photo' => 'Jujutsu Kaisen 07.jpg'
            ],
            [
                'name' => 'Demon Slayer - Kimetsu No Yaiba 09',
                'category_id' => '1',
                'description' => '<p>bersama "Otobashira" Tengen Uzui. Di sanalah ketiga istri Tengen yang juga "kunoichi", hilang kontak setelah menyusup untuk mengumpulkan informasi. Demi penyelidikan lebih lanjut, Tanjiro dan kawan-kawan harus menyusup dengan menyamar sebagai wanita...!! Tetapi lokasi iblisnya tetap belum ditemukan. Di tengah situasi membingungkan itu, tangan-tangan mematikan iblis menculik para "oiran"!! Mampukah Tanjiro dan kawan-kawan menemukan iblis tersebut!?</p>',
                'price' => '20000',
                'photo' => 'Demon Slayer - Kimetsu No Yaiba 09.jpg'
            ],
            [
                'name' => 'Home Sweet Loan Almira Bastari - Batch 2',
                'category_id' => '1',
                'description' => '<p>Empat orang yang berteman sejak SMA bekerja di perusahaan yang sama meski beda nasib. Di usia 31 tahun, mereka berburu rumah idaman yang minimal nyerempet Jakarta.<br>Kaluna, pegawai Bagian Umum, yang gajinya tak pernah menyentuh dua digit. Gadis ini kerja sampingan sebagai model bibir, bermimpi membeli rumah demi keluar dari situasi tiga kepala keluarga yang bertumpuk di bawah satu atap. Di tengah perjuangannya menabung, Kaluna dirongrong oleh kekasihnya untuk pesta pernikahan mewah.<br>Tanisha, ibu satu anak yang menjalani Long Distance Marriage, mencari rumah murah dekat MRT yang juga bisa menampung mertuanya.<br>Kamamiya, yang berambisi menjadi selebgram, mencari apartemen cantik untuk diunggah ke media sosial demi memenuhi gengsinya agar bisa menikah dengan pria kaya.<br>Danan, anak tunggal tanpa beban yang akhirnya berpikir untuk berhenti hura-hura, dan membeli aset agar bisa pensiun dengan tenang.<br>Apakah keempat sahabat ini berhasil menemukan rumah yang mampu mereka cicil? Dan apakah Kaluna bisa membentuk keluarga yang ia impikan?</p>',
                'price' => '71250',
                'photo' => 'Home Sweet Loan Almira Bastari - Batch 2.jpg'
            ],
            [
                'name' => 'Buku Top Rank Tes Skolastik SNBT 2023',
                'category_id' => '1',
                'description' => '<p>Top Rank Tes Skolastik Snbt 2023 Sesuai dengan PERMENDIKBUDRISTEK Nomor 48 Tahun 2022 TES SKOLASTIK: • Potensi Kognitif • Penalaran Matematika • Literasi dalam Bahasa Indonesia • Literasi dalam Bahasa Inggris Kisi-kisi Tes Skolastik SNBT 2023 sesuai dengan PERMENDIKBUDRISTEK Nomor 48 Tahun 2022 1. Potensi Kognitif Potensi Kognitif digunakan untuk menguji kemampuan berlogika dan menganalisis suatu masalah, terdiri atas: • Penalaran Logis • Penalaran Analitis • Penalaran Kognitif 2. Penalaran Matematika Terdiri atas: • Barisan Bilangan • Perbandingan, Aritmetika Sosial, dan Aljabar • Statistika dan Peluang • Fungsi, Persamaan Linier, dan Himpunan • Matematika Dasar 3. Literasi dalam Bahasa Indonesia 4. Literasi dalam Bahasa Inggris Buku TOP RANK TES SKOLASTIK 2023 memuat semua yang kamu butuhkan untuk menghadapi SNBT 2023, yaitu: 1. Pendalaman Materi Tes Skolastik, dilengkapi dengan Contoh Soal &amp; Pembahasan 2. Bank Soal Tes Skolastik Terlengkap plus Pembahasan 3. 3 Paket Tryout Tes Skolastik + Pembahasan 4. 3 Paket Ebook Tryout Tes Skolastik + Pembahasan 5. Ribuan Bank Soal Tes Skolastik + Pembahasan 6. Berbagai Bonus Aplikasi &amp; Tryout Online Pintar</p>',
                'price' => '100000',
                'photo' => 'Buku Top Rank Tes Skolastik SNBT 2023.jpg'
            ],
            [
                'name' => 'Akulah Ahlinya AI - Artificial Intelligence',
                'category_id' => '1',
                'description' => '<p>Apa kalian pernah mendengar tentang AI atau kecerdasan buatan? Saat ini, negara-negara di seluruh dunia sedang berlomba menciptakan perangkat berteknologi canggih dengan menerapkan kecerdasan buatan di dalamnya. Perangkat-perangkat ini sangat dekat dengan kehidupan kita sehari-hari, seperti mesin cuci, pendingin ruangan, televisi, bahkan mobil yang mengendarai secara otomatis. Layaknya manusia yang dapat berpikir, kecerdasan buatan diharapkan dapat meningkatkan kualitas hidup manusia agar menjadi lebih nyaman. Di sisi lain, kecerdasan buatan akan menggantikan manusia di berbagai jenis pekerjaan dan memunculkan jenis-jenis pekerjaan baru terkaitnya. Ayo, kenali lebih dalam tentang kecerdasan buatan dan temukan pekerjaan apa saja yang akan muncul di masa depan!</p><p>Job Series mengandung filsafat pendidikan akan berusaha mewujudkan mimpi dan harapan secara terus menerus sehingga mimpi bisa menjadi nyata. Dengan komik pendidikan karier untuk anak dan remaja ini, setiap bagiannya membantu mengerti tentang pekerjaan, kemudian dengan mandiri mendorong untuk menetapkan harapannya.</p>',
                'price' => '100000',
                'photo' => 'Akulah Ahlinya AI - Artificial Intelligence.jpg'
            ],
            [
                'name' => 'Kleaner Tornado Mop',
                'category_id' => '25',
                'description' => '<p>Kleaner Spin Mop hadir dengan design praktis sehingga mengepel jadi lebih cepat, efisien, dan mudah. Tangan tidak lagi kotor dan bebas dari bakteri karena tidak perlu bilas / peras manual.<br>&nbsp;</p><p>Fitur:</p><p>-Kain pel dari bahan Microfiber<br>-Pengering dan tongkat pel berbahan stainless steel<br>-Dilengkapi roda besar kokoh dan tarikan agar mudah dibawa<br>-Dilengkapi dengan botol sabun pembersih<br>-Tangan tidak kotor, bilas dan peras tanpa tangan basah<br>-Tersedia lubang pembuangan air kotor<br>-Tongkat pel dilengkapi klip kunci yang mudah dipakai untuk atur ketinggian<br>-Harga refill yang terjangkau</p>',
                'price' => '249000',
                'photo' => 'Kleaner Tornado Mop.jpg'
            ],
            [
                'name' => 'Guling Tidur Andalus Medium 100% Silicon Grade A',
                'category_id' => '25',
                'description' => '<p>Andalus Medium<br><br>Detail Produk:<br>- Cover : 100% Kain Cotton<br>- Isian : 100% Silicon HCS Grade A<br>- Ukuran : Bantal (48x65cm) &amp; Guling (30x86cm)<br>- Berat : B= 650g &amp; G= 700g<br><br>Fitur Produk:<br>- Anti Bakteri<br>- Tidak Berdebu<br>- Tidak Berbau<br>- Mudah dicuci<br><br>Kualitas Produk:<br>- Memiliki tingkat kepadatan yang tinggi<br>- Tingkat kekenyalan : Soft to Medium<br>- Memiliki karakter lembut dan lentur<br><br>Andalus Pillow merupakan bantal dan guling tidur berbagai jenis dengan kualitas premium. Produk ini diproduksi mandiri dan melewati proses quality control sehingga memiliki kualitas yang terjamin. Sangat nyaman digunakan dan dibuat sesuai standar kesehatan.</p>',
                'price' => '35000',
                'photo' => 'Guling Tidur Andalus Medium 100% Silicon Grade A.jpg'
            ],
            [
                'name' => 'Dunlopillo Memory Foam Countour Ergo Original 60x40 cm',
                'category_id' => '25',
                'description' => '<p>Ukuran : 60x40x12 cm<br>Bahan : Knitting<br>Cover : White ( Campur Motif )<br>Berat Bantal : +/- 1,2 Kg<br><br>Material memory foam seperti squishy menyesuaikan bentuk kepala dan leher masing-masing pemakai.<br><br>Apa kelebihan bantal Memory Foam dengan bantal lainnya ?<br>✔ Bantal Memory Foam anti bakteri, anti fungal/jamur, anti alergi, karena pori-pori nya<br>sangat kecil sehingga tidak menyimpan debu dan bakteri sehingga aman bahkan untuk orang<br>yang alergi debu sekalipun.<br>✔ Bantal Memory Foam baik untuk yang mempunyai masalah tulang punggung/leher.<br><br>Manfaat Bantal contour Memory Foam :<br>✔ Mengurangi masalah susah tidur dan diklaim mampu mengurangi dengkuran<br>✔ Mencegah masalah tulang leher akibat salah tidur<br>✔ Mengurangi sakit pada syaraf terjepit saat tidur</p>',
                'price' => '109000',
                'photo' => 'Dunlopillo Memory Foam Countour Ergo Original 60x40 cm.png'
            ],
            [
                'name' => 'Paket 2 Bantal Tidur Combo Pillow Sleepmax',
                'category_id' => '25',
                'description' => '<p>Sleep Max Combo Pillow adalah kualitas produk terbaik kami yang sudah kami rancang untuk dapat mendukung kualitas tidur anda sehari-hari menjadi lebih baik. Dan juga dibuat dengan material unggulan yang sudah kami pilihkan untuk kenyamanan diri anda pada saat beristirahat di rumah bersama keluarga tercinta.<br><br>Deskripsi Produk :<br>- Cover : Microtex yang halus dan nyaman serta membuat isi dakron dari Bantal tersebut tidak<br>akan keluar dari permukaan bahan<br>- Isi : 100% Premium Dakron terbaik tanpa campuran yang aman digunakan untuk kalangan<br>anak-anak hingga orang dewasa<br>- Ukuran : 45x65 Cm<br>- Berat : 650 gram<br>- Berat Total : 1.300 gram</p>',
                'price' => '58000',
                'photo' => 'Paket 2 Bantal Tidur Combo Pillow Sleepmax.jpg'
            ],
            [
                'name' => 'Rak Kamar Mandi Dinding Rak Bumbu Dapur Stainless Steel Rak Tempel',
                'category_id' => '25',
                'description' => '<p>Rak Gantung Kamar Mandi Berbahan Stainless, Lengkap dengan lem perekat jadi dapat dipasang tanpa bor.<br>&nbsp;</p><p>Dimensi Produk :<br>1 tingkat. P x L x T : 40cm x 15cm x 16cm<br>2 tingkat. P x L x T : 40cm x 15cm x 36cm<br>3 tingkat.P x L x T : 40cm x 15cm x 56cm<br>&nbsp;</p><p>Fitur Produk :</p><ul><li>Desain terampil, penampilan elegan, struktur stabil dan tahan benturan</li><li>Desain terpisah, posisi ketinggian dapat diatur, bisa dipasang sesuai keinginan.</li><li>Desain kait bergerak memungkinkan kait bergerak ke kiri dan kanan untuk memudahkan penyimpanan.</li><li>Penahan pagar pembatas untuk mencegah benda jatuh.</li><li>Sudut dipoles dan halus mencegah goresan tangan.</li><li>Bor / bebas bor 2 metode pemasangan.</li><li>Produk sudah termasuk lem.</li></ul>',
                'price' => '39000',
                'photo' => 'Rak Kamar Mandi Dinding Rak Bumbu Dapur Stainless Steel Rak Tempel.jpg'
            ],
            [
                'name' => 'HANDUK MICROFIBER NATUREHIKE NH20FS009 TRAVEL PORTABLE QUICK DRY',
                'category_id' => '25',
                'description' => '<p>Origin: CN(Origin)<br>Feature: Quick-Dry<br>Pattern: Plain Dyed<br>Material: Microfiber Fabric<br>Size: S: 100*30 cm L: 160*80cm<br>Weight: S: about 66.7g L: about 284.5g</p>',
                'price' => '81880',
                'photo' => 'HANDUK MICROFIBER NATUREHIKE NH20FS009 TRAVEL PORTABLE QUICK DRY.jpg'
            ],
            [
                'name' => 'IKEA IRJA Set Rel Batang Gorden Putih 140cm',
                'category_id' => '25',
                'description' => '<p>Biaya perakitan atau assembly : Rp.199.000<br><br>Anda mendapat set batang gorden lengkap dengan finial dengan desain hasil akhir yang ringan dan bergaya. Apabila batangnya terlalu panjang, dapat dipotong sesuai panjang yang diinginkan.<br><br>Bahan :<br>Batang/ Braket dinding: Baja, Dilapis serbuk berpigmen<br>Finial: Plastik polipropilena<br><br>Petunjuk perawatan<br>Vacuum clean.<br>Lap bersih dengan kain kering.</p>',
                'price' => '24900',
                'photo' => 'IKEA IRJA Set Rel Batang Gorden Putih 140cm.jpg'
            ],
            [
                'name' => 'Bean Bag Triangle Plus ISI Size Dewasa Motif Kotak Hitam',
                'category_id' => '25',
                'description' => '<p>Bean Bag Triangle Size Large Beanbag.Smoothies Motif Kotak Hitam PLUS ISI<br>- Mendapatkan 2 cover.<br>- Cover dalam kain satin.<br>- Cover luar kain katun halus.<br>- Zipper berkualitas.<br>- Jahitan sangat rapih.<br>- Isian bean bag 70% styrofoam dan 30% memoryfoam.<br>- Harga Ongkir sesuai aplikasi.<br>- Motif tidak mudah luntur.<br><br>Bahan kain:<br>Menggunakan kain katun pilihan, sehinga beanbag akan terasa halus<br>dan adem pastinya. Kain katun yang digunakan juga awet dan tidak<br>mudah robek.<br><br>Ukuran :<br>- Panjang : 120cm<br>- Lebar : 75cm<br>- Tinggi : 75cm</p>',
                'price' => '153000',
                'photo' => 'Bean Bag Triangle Plus ISI Size Dewasa Motif Kotak Hitam.jpg'
            ]
        ]);
    }
}
