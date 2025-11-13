# Lab7web

# LATIHAN
## PHP Dasar 
PHP Dasar dimulai sebagai fondasi untuk server-side scripting, yang berarti kode dijalankan di sisi server sebelum hasilnya dikirimkan ke browser pengguna. Konsep paling fundamental adalah menggunakan tag <?php dan ?> untuk menandai blok kode PHP. Di dalam blok ini, perintah seperti echo digunakan untuk menampilkan output berupa teks, yang kemudian disisipkan ke dalam struktur HTML, seperti contohnya "Hello World" dalam praktikum saya ini.

<img width="1149" height="576" alt="Screenshot 2025-11-13 211030" src="https://github.com/user-attachments/assets/00b73aef-2f4c-42bb-b13c-0e5f3902818b" />

## Variable PHP
Dalam PHP, Variabel digunakan untuk menyimpan informasi sementara, seperti angka, teks (string), atau data lainnya. Setiap variabel harus diawali dengan simbol $ (contoh: \$nama atau \$nim). Setelah didefinisikan, variabel dapat ditampilkan ke layar menggunakan echo, di mana operator titik (.) digunakan untuk menggabungkan variabel dengan string lain. Penting untuk diingat bahwa variabel di dalam tanda kutip ganda (") akan diinterpretasikan nilainya, sedangkan di dalam kutip tunggal (') akan dianggap sebagai teks biasa.
<img width="1093" height="634" alt="Screenshot 2025-11-13 211755" src="https://github.com/user-attachments/assets/2518eaf5-4dd8-4adc-8259-04d1af213a1b" />

## Predefine Variable $_GET
Variabel Superglobal adalah array bawaan PHP yang selalu tersedia. Salah satunya adalah $_GET, yang digunakan untuk mengambil data yang dikirimkan melalui URL (Query String). Data ini biasanya terlihat di URL setelah tanda tanya (?), misalnya latihan2.php?nama=Agung. Dengan menggunakan \$_GET['nama'], skrip PHP dapat menangkap nilai "Agung" dan memprosesnya, menjadikannya cara yang mudah untuk mengirimkan data sederhana antar halaman.

<img width="1170" height="472" alt="Screenshot 2025-11-13 212351" src="https://github.com/user-attachments/assets/68a221fd-dd34-478f-84d4-bc5fcde14592" />

## Membuat Form Input 
Untuk mengambil data dalam jumlah besar dan lebih terstruktur dari pengguna, digunakan Form Input HTML. Data yang diinputkan pengguna ini paling umum dikirim menggunakan metode POST, yang ditangani oleh variabel superglobal $_POST di sisi PHP. Setiap elemen input di HTML harus memiliki atribut name yang unik, karena nilai dari atribut inilah yang digunakan oleh $_POST sebagai kunci untuk mengambil data (contoh: \$_POST['nama']). Teknik ini sangat krusial karena data form adalah dasar dari sebagian besar aplikasi web yang interaktif.

<img width="1249" height="655" alt="Screenshot 2025-11-13 212904" src="https://github.com/user-attachments/assets/10b2b5e1-19b9-4f24-add0-b41ccbce0bcf" />

## Operator 
Operator digunakan untuk melakukan operasi pada nilai atau variabel. Dalam praktikum, contoh paling jelas adalah operator aritmatika dan penugasan. Operator aritmatika seperti penjumlahan, pengurangan, atau perkalian (*) digunakan untuk perhitungan, misalnya saat menghitung gaji bersih setelah dikurangi pajak. Sementara itu, operator penugasan (=) digunakan untuk memberikan nilai ke sebuah variabel (contoh: \$gaji = 1000000;).

<img width="1055" height="530" alt="Screenshot 2025-11-13 213225" src="https://github.com/user-attachments/assets/f3a4d402-673a-4b80-a4a2-d5dfdeaf3cb1" />

## Kondisi IF 
Kondisi if adalah struktur kontrol dasar yang memungkinkan program membuat keputusan. Logika ini memungkinkan eksekusi blok kode tertentu hanya jika persyaratan yang diberikan terpenuhi (TRUE). Struktur ini sering diperluas menjadi if...elseif...else untuk menangani beberapa kemungkinan: kode di blok if dijalankan jika kondisi pertama benar, kode di blok elseif dijalankan jika kondisi pertama salah tetapi kondisi kedua benar, dan kode di blok else dijalankan jika semua kondisi di atasnya salah.

<img width="977" height="635" alt="Screenshot 2025-11-13 213511" src="https://github.com/user-attachments/assets/feac49af-f823-40a3-bf97-36b52275589e" />

## Kondisi Switch
Sebagai alternatif yang lebih ringkas dari rangkaian if...elseif yang panjang, Kondisi switch digunakan untuk membandingkan satu variabel dengan banyak nilai yang mungkin (case). Jika variabel cocok dengan salah satu case, blok kode yang sesuai akan dieksekusi. Penggunaan perintah break setelah setiap case adalah hal yang wajib dilakukan untuk menghentikan eksekusi dan mencegah PHP melanjutkan ke case berikutnya (fall-through).

<img width="1102" height="643" alt="Screenshot 2025-11-13 214054" src="https://github.com/user-attachments/assets/d4cd1fd1-21db-4cd1-98fc-06ff99e9d95c" />

## Perulangan for
Perulangan for adalah struktur kontrol yang digunakan untuk menjalankan blok kode secara berulang dalam jumlah yang sudah diketahui atau telah ditentukan. Perulangan ini memiliki tiga bagian utama yang didefinisikan di awal: inisialisasi counter (contoh: \$i=1), kondisi pengulangan (contoh: \$i<=10), dan increment atau decrement (penambahan/pengurangan counter, contoh: \$i++).

<img width="1075" height="772" alt="Screenshot 2025-11-13 214319" src="https://github.com/user-attachments/assets/af01b150-3211-4b64-a84e-063ffe342d66" />

## Perulangan while 
Perulangan while juga menjalankan blok kode secara berulang, tetapi sifatnya lebih fleksibel. Perulangan ini akan terus berjalan selama kondisi yang ditentukan bernilai TRUE. Kondisi diperiksa di awal setiap putaran. Penting untuk memastikan bahwa ada logika di dalam blok while yang pada akhirnya akan membuat kondisi menjadi FALSE (seperti penambahan counter \$i++), agar perulangan tidak berjalan selamanya (infinite loop).

<img width="1215" height="735" alt="Screenshot 2025-11-13 214547" src="https://github.com/user-attachments/assets/328d4b9c-0f33-4cfc-9274-f0e4bbfa7d64" />

## Perulangan dowhile 
Perulangan do-while mirip dengan while, tetapi memiliki jaminan bahwa blok kode akan dieksekusi minimal satu kali sebelum kondisi diuji. Setelah eksekusi pertama, kondisi diuji di bagian while. Jika kondisi tersebut benar, perulangan berlanjut; jika salah, perulangan berhenti.

<img width="1115" height="686" alt="Screenshot 2025-11-13 214628" src="https://github.com/user-attachments/assets/4b214661-00e1-49e8-b610-ec82e4dc7e4c" />

# TUGAS
Tugas ini berfungsi sebagai penerapan semua konsep yang telah saya pelajari diatas. Tugas ini mengharuskan pembuatan program PHP yang menggunakan Form Input untuk mengambil data (Nama, Tanggal Lahir, Pekerjaan) dan kemudian mengaplikasikan logika untuk menghitung Umur (memanfaatkan fungsi tanggal) serta menggunakan Kondisi switch untuk menentukan besaran Gaji yang berbeda-beda sesuai dengan pilihan pekerjaan. Hasilnya adalah program yang tidak hanya menampilkan data, tetapi juga memprosesnya secara dinamis.

### CODENYA
<img width="2464" height="3712" alt="code1" src="https://github.com/user-attachments/assets/fdd136c4-254e-418c-97c9-7b55910f4b12" />

### OUTPUTNYA
<img width="650" height="726" alt="image" src="https://github.com/user-attachments/assets/d28c438a-ce19-4f30-b005-2919354af6a5" />


