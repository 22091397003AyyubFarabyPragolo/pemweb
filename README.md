# [pemweb][(https://22091397003ayyubfarabypragolo.github.io/pemweb/)]

html + css

Software Requirements Specification
for
WEBSITE PRIBADI
Version 1.0 approved
Prepared by 
Ayyub Faraby Pragolo (22091397003)
Ananda Mayang Septia (22091397015)
Shofiyun Nawal Fajriyah(22091397027)
D4 Manajemen Informatika
2022 A Fakultas Vokasi
Universitas Negeri Surabaya

2023

Table of Contents
Table of Contents	ii
Revision History	ii
1.	Introduction	1
1.1	Purpose	1
1.2	Document Conventions	1
1.3	Intended Audience and Reading Suggestions	1
1.4	Product Scope	1
1.5	References	1
2.	Overall Description	2
2.1	Product Perspective	2
2.2	Product Functions	2
2.3	User Classes and Characteristics	2
2.4	Operating Environment	2
2.5	Design and Implementation Constraints	2
2.6	User Documentation	2
2.7	Assumptions and Dependencies	3
3.	External Interface Requirements	3
3.1	User Interfaces	3
3.2	Hardware Interfaces	3
3.3	Software Interfaces	3
3.4	Communications Interfaces	3
4.	System Features	4
4.1	System Feature 1	4
4.2	System Feature 2 (and so on)	4
5.	Other Nonfunctional Requirements	4
5.1	Performance Requirements	4
5.2	Safety Requirements	5
5.3	Security Requirements	5
5.4	Software Quality Attributes	5
5.5	Business Rules	5
6.	Other Requirements	5
Appendix A: Glossary	5
Appendix B: Analysis Models	5
Appendix C: To Be Determined List	6


Revision History
Name
Date
Reason For Changes
Version




















Introduction
Purpose 
Dokumen ini berisi mengenai Spesifikasi Kebutuhan Perangkat Lunak mengenai web yang akan dirancang yaitu web pribadi. Tujuan dari penulisan ini adalah untuk mengetahui  kebutuhan apa saja yang dibutuhkan untuk melakukan pengembangan web pribadi tersebut lebih jelas dan terperinci. Dokumen ini diharapkan agar pengembangan dapat lebih terarah. Tujuan web ini dibuat adalah untuk membangun portofolio menjadi wadah pengembangan dan membantu mempromosikan terhadap calon klien 

1. 2    Document Conventions
<Describe any standards or typographical conventions that were followed when writing this SRS, such as fonts or highlighting that have special significance. For example, state whether priorities  for higher-level requirements are assumed to be inherited by detailed requirements, or whether every requirement statement is to have its own priority.>

1.3    Intended Audience and Reading Suggestions
Dokumen ini ditujukan kepada
Pengguna Web, agar pengguna web dapat mengetahui bagaimana cara pembuatan web pribadi sebagai wadah pengembangan dengan portofolio agar menarik  para klien.
Tokoh Publik, seperti penulis, seniman atau selebritas, dapat memanfaatkan website pribadi untuk berinteraksi dengan penggemar, berbagi konten eksklusif atau memberikan pembaruan tentang mereka
Pengajar atau seorang Ahli, web pribadi akan bermanfaat untuk pengajar atau seorang ahli dibidang tertentu untuk berbagi pengetahuan, artikel, tutorial atau sumber daya pendidikan.

1.4    Product Scope
Ruang lingkup Website Pribadi meliputi bagian-bagian yang terdapat dalam Website Pribadi yang telah dibuat. Berikut deskripsi singkat mengenai ruang lingkup Website Pribadi ini:
Halaman Utama, berisi tentang bagian-bagian yang terdapat dalam Website Pribadi.
Tentang Saya, berisi tentang informasi pemiliknya seperti, biodata, pekerjaan, karakteristik, pengalaman pekerjaan, minat, dan hobi. Tentang Saya ini juga berfungsi untuk identitas online.
Portofolio, untuk menampilkan kumpulan portofolio karya.
Blog, digunakan untuk menulis blog pribadi tentang berbagai topik seperti kesenian.
Kontak, Website Pribadi juga dapat berfungsi untuk menghubungi pemilik atau menjalin hubungan dengan orang lain.

References
<List any other documents or Web addresses to which this SRS refers. These may include user interface style guides, contracts, standards, system requirements specifications, use case documents, or a vision and scope document. Provide enough information so that the reader could access a copy of each reference, including title, author, version number, date, and source or location.>

Overall Description

Product Perspective
Website pribadi ini ialah sebuah website yang berisi tentang biodata admin. Website ini bertujuan untuk memperkenalkan biodata admin yang dapat membantu memudahkan pengunjung untuk mengetahui informasi mengenai admin seperti tentang saya(admin), portofolio dan lainnya. Tata letak website ini mudah dipahami karena navigasi yang jelas dan tak hanya itu di dalam web ini terdapat kontak untuk pertanyaan agar pengunjung dapat melakukan konsultasi di kontak tersebut
Product Functions
Fungsi utama dari website pribadi ini antara lain:
Personal Branding: website pribadi digunakan untuk memperkenalkan diri, riwayat pendidikan, pengalaman kerja, minat dan hobi. yang bertujuan untuk meningkatkan visibilitas dan reputasi di dunia online.
Portofolio Profesional: website pribadi digunakan untuk menampilkan portofolio karya atau pencapaian.
Penyampaian Informasi: website pribadi digunakan untuk berbagi informasi terkait bidang tertentu, bisa berupa blog pribadi.
Kontak dan jaringan: website pribadi dapat digunakan untuk menghubungi pemilik website untuk membantu membangun dan memperluas jaringan profesional dan personal.

User Classes and Characteristics
Admin
Memiliki akses dan kontrol penuh atas seluruh aspek website pribadi, termasuk konten, database, pengaturan, keamanan, fungsionalitas, serta memiliki hak dalam mengelola dan memodifikasi hal-hal yang ada di dalam website pribadi.
Pengunjung
Individu yang mengunjungi website pribadi untuk mencari informasi, membaca konten, atau menghubungi pemilik website pribadi.





Operating Environment
1. Sistem Operasi --> Smartphone ios maupun android dan laptop atau PC
2. Jaringan --> Terhubung dengan jaringan internet
3. Perangkat keras --> Smartphone dan PC
4. API --> WhatsApp Business API
5. Bahasa Pemrograman -->  HTML,CSS, dan JavaScript



Design and Implementation Constraints
Halangan atau tantangan dari website ini adalah perlu menggunakan jaringan internet untuk mengakses website ini, bila tidak ada jaringan internet maka website ini tidak akan bekerja 

User Documentation
Website pribadi ini akan tersedia halaman utama yang berisi tentang bagian-bagian yang terdapat dalam website, yaitu tentang saya yang berisi tentang biodata pemilik, portofolio menampilkan karya yang telah dibuat pemilik, blog menampilkan tentang informasi, dan kontak untuk menghubungi pemilik website pribadi. 

Assumptions and Dependencies
Menggunakan perangkat seluler agar bisa menjalankan website ini.
Membutuhkan koneksi internet untuk bisa menjalankan website ini.
Ketergantungan terhadap WhatsApp Business API untuk bisa menghubungi admin.









External Interface Requirements
User Interfaces

Antarmuka Halaman Home


  ![1](https://github.com/ayyubfaraby/pemweb/assets/144451923/2950895a-fda9-4319-ac29-b16304a66330)


Antarmuka Halaman Tentang saya


  ![image](https://github.com/ayyubfaraby/pemweb/assets/144451923/f8595bdb-0c71-451f-bdc5-a1092ae1bb83)


Antarmuka Halaman Portofolio


  ![image](https://github.com/ayyubfaraby/pemweb/assets/144451923/5f2b5ea8-c950-452e-a4ea-8d6e05bc5a34)


Antarmuka Halaman Blog


  ![image](https://github.com/ayyubfaraby/pemweb/assets/144451923/c5ea581b-958c-48fd-b2c8-8c6c99642d88)


Antarmuka Halaman Contact


  ![image](https://github.com/ayyubfaraby/pemweb/assets/144451923/3baebe94-e79a-4a37-9698-8ff821e8d658)


Hardware Interfaces
Website Pribadi ini membutuhkan perangkat seluler yang mendukung, seperti Android atau IOS, dan PC.
Software Interfaces

Visual Studio Code
Editor kode sumber ringan, kuat, dan dapat dikustomisasi.

HTML (HyperText Markup Language)
Bahasa markup untuk membuat struktur dan konten website.

CSS (Cascading Style Sheets)
Bahasa yang digunakan untuk mengatur tampilan dan desain website.

JavaScript
Bahasa pemrograman yang digunakan untuk interaktivitas dan logika di sisi klien (browser).

Web Hosting
Berfungsi untuk pengelolaan dan penyimpanan database

Communications Interfaces

Website Pribadi ini membutuhkan android, IOS, atau PC yang terhubung ke jaringan internet.

System Features

Home Page
  
  Halaman utama menampilkan berbagai fitur sebagai berikut:
Tentang Saya,
Portofolio,
Blog,
Contact

Tentang Saya

  Halaman ini berisi tentang informasi pemiliknya seperti, biodata, pekerjaan, karakteristik, pengalaman pekerjaan, minat, dan hobi. Tentang Saya ini juga berfungsi untuk identitas online.

Portofolio
  
  Halaman ini  menampilkan portofolio karya atau pencapaian.

Blog
  
  Halaman ini menampilkan berbagi informasi terkait bidang tertentu, bisa berupa blog pribadi.

Contact
  
  Halaman ini digunakan untuk menghubungi pemilik website untuk membantu membangun dan memperluas jaringan profesional dan personal.

Other Nonfunctional Requirements

Performance Requirements

Kinerja website akan lancar bila kecepatan internet pengguna stabil.

Website memberikan informasi tentang admin secara jelas.

Safety Requirements

Tingkat akses yang sesuai untuk setiap jenis pengguna dan batasi akses ke informasi hanya pada yang diperlukan.

Security Requirements

Menerapkan mekanisme dan otoritas yang kuat dan otoritas akses yang tepat untuk memastikan hanya pengguna yang berwenang yang dapat mengakses.

membatasi jumlah percobaan masuk yang gagal untuk mencegah serangan berulang-ulang

melakukan pembaruan perangkat lunak secara teratur untuk mengatasi kerentanan keamanan yang ditentukan

Software Quality Attributes
Keamanan (Security):

Perlindungan data pribadi pengguna

Performa (Performance):

Responsif dan cepat dalam memuat halaman dan konten.

Ketersediaan tinggi (uptime) untuk memastikan aksesibilitas kontinu.

Optimalisasi ukuran dan kecepatan loading halaman untuk mendukung pengalaman pengguna yang baik.

Ketersediaan (Availability):

Ketersediaan tinggi (99,9% atau lebih) untuk memastikan aksesibilitas yang maksimal.

Perencanaan untuk pemeliharaan terjadwal tanpa mengganggu layanan utama.

Reliabilitas (Reliability):

Ketahanan terhadap kegagalan server atau komponen lainnya.

Mudah Digunakan (Usability):

Antarmuka pengguna yang intuitif dan ramah pengguna.

Navigasi yang mudah dan efisien.

Other Requirements

Appendix B: Analysis Models

Use Case Diagram

![WhatsApp Image 2023-09-06 at 18 46 41](https://github.com/ayyubfaraby/pemweb/assets/124480416/c9a4493b-b75e-452e-830c-349f4b747322)

Flowchart 

![WhatsApp Image 2023-09-07 at 14 53 14 (1)](https://github.com/ayyubfaraby/pemweb/assets/124480416/14b9dd1a-fd27-4b36-9516-b9e9f27e7877)

Appendix C: To Be Determined List



PENJELASAN CODINGAN

A. Penjelasan HTML Laman ABOUT

  ![image](https://github.com/ayyubfaraby/pemweb/assets/144451923/aa1cfa91-62a5-4ee5-9106-ed0a5a103db2)

1. Pada bagian ini merupakan kerangka dasar atau kepala dari sebuah halaman web
2. pada baris "!DOCTYPE html" menunjukan bahwasanya dokumen ini berupa dokumen HTML
3. "html lang=”en”" elemen yang mengindikasi bahwa dokumen yang digunakan menggunakan bahasa inggris
4. "head" pada elemen ini memuat tentang informasi tentang dokumen yang dari eksternal seperti css
5. "meta charset=”UTF 8”" sebuah elemen yang mengindikasi penggunaan karakter encoding(proses konversi teks) UTF-8 (Unicode Transformation Format- 8-bit) yang mendukung untuk karakter internasional dalam dokumen
6. "meta name="viewport" content="width=device-width, initial-scale=1.0""  elemen yang dipakai untuk mengontrol tampilan laman web dan digunakan untuk mengatur lebar tampilan sesuai dengan lebar perangkat
7. "title>About</title" pada codingan ini adalah untuk menentukan judul apa yang akan digunakan dalam sebuah laman web yang akan ditampilkan dan pada penjelasan memberikan judul pada laman web ini adalah about
8. "link rel="stylesheet" href="style.css"" codingan yang digunakan untuk menggabungkan file eksternal  antara codingan CSS dan HTML 
9. lalu sebagai penutup pada bagian kepala HTML ini menggunakan "/head"

  ![image](https://github.com/ayyubfaraby/pemweb/assets/144451923/7d8b5734-ec55-4431-8176-2b9cd2557e87)

10. Pada bagian diatas adalah body atau isi dari sebuah laman webnya
11. Pada baris ke 9 untuk membuka isi
12. alu untuk elemen "ul" digunakan untuk membuat bullet dari sebuah daftar item
13. Untuk "li" elemen ini merupakan bagian dari sebuah daftar item yang nantinya akan diberikan sebuah bullet
14. Sedangkan untuk "a href" untuk berbagai halaman web seperti home, tentang saya, portofolio,blog dan contact ke dalam alamat URL tertentu
15. elemen "hr" digunakan untuk pemisah bagian seperti memisahkan bagian header dan konten utama
16. untuk elemen "br" digunakan untuk memberikan garis jeda kosong disana terdapat 2 garis jeda kosong karena menempatkan elemen "<br>" sebanyak 2 kali

  ![image](https://github.com/ayyubfaraby/pemweb/assets/144451923/3cb81f72-b4c8-4a37-b8b4-63b197d0f35e)

17. lalu pada baris ke 26 memiliki elemen "div" yang digunakan untuk mengelompokan sebuah konten atau isi yang akan ditampilkan menjadi 1 tempat blok yang sama dan memungkinkan untuk mengatur isi lebih baik
18. lalu untuk elemen "p class=”center-text”" untuk membuat sebuah paragraf menjadi di tengah

B.  Penjelasan HTML Laman BLOG

  ![image](https://github.com/ayyubfaraby/pemweb/assets/144451923/14c67890-4093-47bb-b2ec-f86eb29e86b0)

1. Pada bagian ini merupakan kerangka dasar atau kepala dari sebuah halaman web
2. pada baris "!DOCTYPE html" menunjukan bahwasanya dokumen ini berupa dokumen HTML
3. "html lang=”en”" elemen yang mengindikasi bahwa dokumen yang digunakan menggunakan bahasa inggris
4. "head" pada elemen ini memuat tentang informasi tentang dokumen yang dari eksternal seperti css
5. "meta charset=”UTF 8”" sebuah elemen yang mengindikasi penggunaan karakter encoding(proses konversi teks) UTF-8 (Unicode Transformation Format- 8-bit) yang mendukung untuk karakter internasional dalam dokumen
6. "meta name="viewport" content="width=device-width, initial-scale=1.0""  elemen yang dipakai untuk mengontrol tampilan laman web dan digunakan untuk mengatur lebar tampilan sesuai dengan lebar perangkat
7. "title>About</title" pada codingan ini adalah untuk menentukan judul apa yang akan digunakan dalam sebuah laman web yang akan ditampilkan dan pada penjelasan memberikan judul pada laman web ini adalah Blog
8. "link rel="stylesheet" href="style.css"" codingan yang digunakan untuk menggabungkan file eksternal  antara codingan CSS dan HTML 
9. lalu sebagai penutup pada bagian kepala HTML ini menggunakan "/head"

  ![image](https://github.com/ayyubfaraby/pemweb/assets/144451923/eeae87bf-4326-4d31-bccc-7ed3c3980864)

10. Pada bagian diatas adalah body atau isi dari sebuah laman webnya
11. Pada baris ke 8 untuk membuka isi 
12. lalu untuk elemen "ul" digunakan untuk membuat bullet dari sebuah daftar item
13. Untuk "li" elemen ini merupakan bagian dari sebuah daftar item yang nantinya akan diberikan sebuah bullet
14. Sedangkan untuk "a href" untuk berbagai halaman web seperti home, tentang saya, portofolio,blog dan contact ke dalam alamat URL tertentu
15. elemen "hr" digunakan untuk pemisah bagian seperti memisahkan bagian header dan konten utama
16. Lalu pada "div style=”text-align: center;” elemen ini digunakan untuk  membuat semua isi yang berada di dalam "div" menjadi di tengah secara horizontal
17. "h1" sebuah elemen dengan singkatan heading 1 yang digunakan untuk membuat judul halaman
18. Dengan elemen "img width="800" src="Gambar/blog.png" alt=""" kita bisa memasukan sumber gambar dan mengatur lebar gambar menjadi 800 piksel disitu terdapat elemen alt yang dimana elemen tersebut berfungsi untuk memberikan deskripsi singkat tentang apa yang di dalam gambar bila gambar tidak muncul

    ![image](https://github.com/ayyubfaraby/pemweb/assets/144451923/c0bc7acf-ce73-4e95-b8ff-a70c786cef36)
    
19. Pada gambar diatas merupakan isi dari laman web terdapat beberapa elemen seperti "p" yang berguna untuk sebagai penanda bahwa ini adalah sebuah paragraf yang nantinya akan diakhiri menggunakan elemen "/p"
20.lalu diberi jeda baris kosong menggunakan elemen "br"

  ![image](https://github.com/ayyubfaraby/pemweb/assets/144451923/cbc2e40d-c1bf-4cd2-8211-bb457acb3783)

21. Kode diatas adalah bagian akhir dari laman web terdapat beberapa elemen seperti "br" yang digunakan untuk memberi jeda kosong pada elemen
22. Sedangkan untuk "footer" digunakan untuk mendefinisikan footer halaman web
23. "hr" elemen garis horizontal untuk membuat garis pemisah

C.  Penjelasan HTML Laman CONTACT

  ![image](https://github.com/ayyubfaraby/pemweb/assets/144451923/8d1b3fad-cce4-4d55-8037-509ba85c6da6)
  
1. Pada bagian ini merupakan kerangka dasar atau kepala dari sebuah halaman web 
2. pada baris "!DOCTYPE html" menunjukan bahwasanya dokumen ini berupa dokumen HTML
3. "html lang=”en”" elemen yang mengindikasi bahwa dokumen yang digunakan menggunakan bahasa inggris
4. "head" pada elemen ini memuat tentang informasi tentang dokumen yang dari eksternal seperti css
5. "meta charset=”UTF 8”" sebuah elemen yang mengindikasi penggunaan karakter encoding(proses konversi teks) UTF-8 (Unicode Transformation Format- 8-bit) yang mendukung untuk karakter internasional dalam dokumen
6. "meta name="viewport" content="width=device-width, initial-scale=1.0"" elemen yang dipakai untuk mengontrol tampilan laman web dan digunakan untuk mengatur lebar tampilan sesuai dengan lebar perangkat
7. "title>About</title" pada codingan ini adalah untuk menentukan judul apa yang akan digunakan dalam sebuah laman web yang akan ditampilkan dan pada penjelasan memberikan judul pada laman web ini adalah contact
8. Sedangkan disitu terdapat "https://wa.me/0812345666" maka secara otomatis akan mengarahkan kedalam no Wa tersebut
9. "link rel="stylesheet" href="style.css"" codingan yang digunakan untuk menggabungkan file eksternal  antara codingan CSS dan HTML
10. lalu sebagai penutup pada bagian kepala HTML ini menggunakan "/head"

  D. Penjelasan HTML Laman INDEX
  
  ![index html 1](https://github.com/ayyubfaraby/pemweb/assets/124480416/37067c38-da58-4b42-8367-bbb1fc60c990)

1.	"!DOCTYPE html": Mendefinisikan versi HTML yang digunakan oleh halaman web ini. Dalam hal ini, itu adalah dokumen HTML versi standar.
2.	"html lang="en"": Membuka elemen HTML dan menentukan bahasa (English) yang akan digunakan dalam halaman web.
3.	"head": Bagian ini berisi informasi tentang dokumen seperti meta tag (seperti karakter set dan viewport), judul halaman, dan referensi ke file eksternal seperti stylesheet.
4.	"meta charset="UTF-8"": Menentukan karakter set yang akan digunakan, dalam hal ini UTF-8 (Unicode Transformation Format - 8 bit).
5.	"meta name="viewport" content="width=device-width, initial-scale=1.0"": Mengatur tampilan halaman agar sesuai dengan lebar perangkat dan menentukan skala awal halaman.
6.	"titleHalaman Utama/title": Menentukan judul halaman web yang akan muncul di bilah judul browser.
7.	"link rel="stylesheet" href="style.css"": Menghubungkan halaman dengan file eksternal style.css yang akan mengatur tata letak dan tampilan halaman.

![html index 2](https://github.com/ayyubfaraby/pemweb/assets/124480416/a9cd53dc-22fe-42cd-ba11-955af00b7787)

1.	"body": Bagian ini berisi konten utama dari halaman web.
2.	"ul": Membuat daftar tak terurut (unordered list).
3.	"li""a href="index.html"Home/a/li": Menambahkan item daftar dengan tautan ke halaman "index.html" dengan teks "Home".
4.	Item-item selanjutnya mengikuti pola yang serupa untuk menu navigasi.
5.	"hr": Memasukkan elemen garis horizontal sebagai pemisah antara menu navigasi dan konten utama.
6.	"div style="text-align: center;"": Membuat suatu div dengan penataan teks ke tengah.
7.	"h1""Selamat Datang Di Website Saya"/h1": Menampilkan judul besar.
8.	"img width="900" src="Gambar/kaws.jpg"": Menampilkan gambar dengan lebar 900 piksel dari lokasi file "Gambar/kaws.jpg".
9.	"h2"Brian Donnelly"/h2": Menampilkan subjudul.
10.	"br": Memasukkan jeda baris.
11.	"div class="container"": Membuat suatu div dengan kelas "container".
12.	"img width="400" src="Gambar/kaws 2.jpeg" alt=""": Menampilkan gambar dengan lebar 400 piksel dari lokasi file "Gambar/kaws 2.jpeg" dengan atribut alt kosong (teks alternatif).
13.	Item-item gambar selanjutnya mengikuti pola yang serupa.

    E. Penjelasan HTML Laman Portofolio
   	
   	![portofolio 1](https://github.com/ayyubfaraby/pemweb/assets/124480416/5e205947-6d95-4ca9-b5e7-113d64b4b337)
   	
1.	“!DOCTYPE html”: Mendefinisikan versi HTML yang digunakan (HTML5).
2.	“html lang="en"“: Memulai elemen HTML dengan atribut lang untuk menunjukkan bahasa (dalam hal ini bahasa Inggris).
3.	“head”: Bagian ini berisi elemen-elemen yang memberikan informasi mengenai dokumen HTML seperti meta informasi, judul halaman, dan tautan ke file eksternal (CSS).
4.	“meta charset="UTF-8"“: Menentukan pengkodean karakter UTF-8 untuk mendukung karakter internasional.
5.	“meta name="viewport" content="width=device-width, initial-scale=1.0"“: Menentukan cara halaman akan di-render pada perangkat yang berbeda.
6.	“link rel="stylesheet" href="style.css"“: Mengaitkan file CSS eksternal bernama "style.css" untuk mengatur gaya dan tata letak halaman.
7.	“title”Porto”/title”: Judul atau nama halaman yang akan ditampilkan di tab peramban.

  ![portofolio 2](https://github.com/ayyubfaraby/pemweb/assets/124480416/a0eaab2d-ebb2-42bb-b11e-0f7c4811b94f)

1.	“body”: Bagian ini berisi konten utama dari halaman web.
2.	“ul”: Membuat daftar tak terurut (unordered list) untuk menu navigasi.
3.	“li”“a href="index.html"“Home”/a”“/li”: Menambahkan item daftar dengan tautan ke halaman "index.html" dengan teks "Home".
4.	Item-item selanjutnya mengikuti pola yang serupa untuk menu navigasi.
5.	“hr”: Memasukkan elemen garis horizontal sebagai pemisah antara menu navigasi dan konten utama.
6.	“div class="container"“: Membuat suatu div dengan kelas "container".
7.	Item-item gambar berikut ini adalah gambar-gambar yang ditampilkan dalam div tersebut. Setiap gambar memiliki lebar 400 piksel dan atribut alt kosong (teks alternatif).

  F. Penjelasan CSS

  ![css 1](https://github.com/ayyubfaraby/pemweb/assets/124480416/a074b0ee-77cb-4458-8bf8-7f8d32f06055)

1.	body, ul: Ini adalah selektor CSS yang memilih elemen “body” dan “ul”. Hal ini berarti aturan yang didefinisikan akan berlaku untuk kedua elemen tersebut.
2.	margin: 0; padding: 0;: Ini adalah deklarasi properti CSS yang mengatur margin dan padding untuk elemen yang dipilih. Dalam hal ini, nilai 0 digunakan untuk menghapus atau menghilangkan margin dan padding default yang diterapkan oleh browser.

![css 2](https://github.com/ayyubfaraby/pemweb/assets/124480416/2aeca9b3-51f1-4e85-b6ef-5a34b04b7537)

1.	font-family: Arial, sans-serif;: Properti CSS ini mengatur jenis font yang akan digunakan untuk teks pada elemen “body”. Font pertama yang akan dicoba adalah "Arial", dan jika tidak tersedia, akan menggunakan font tanpa serif ("sans-serif") sebagai alternatif.
2.	background-color: #f0f0f0;: Properti CSS ini mengatur warna latar belakang (background color) untuk elemen “body”. Warna yang digunakan di sini adalah kode warna heksadesimal (#f0f0f0), yang mewakili warna abu-abu muda.

![css 3](https://github.com/ayyubfaraby/pemweb/assets/124480416/b8b7fd42-fe23-4914-bab9-b0d33d8723a7)

1.	header: Ini adalah selektor CSS yang memilih elemen “header”.
2.	background-color: #333;: Mengatur warna latar belakang elemen “header” menjadi abu-abu tua (#333).
3.	color: #fff;: Mengatur warna teks di dalam elemen “header” menjadi putih (#fff).
4.	text-align: center;: Mengatur teks di dalam elemen “header” agar berada di tengah (centered).
5.	padding: 10px 0;: Menentukan padding atas dan bawah sebesar 10 piksel dan padding kiri-kanan nol (0).
6.	h1: Ini adalah selektor CSS yang memilih elemen “h1”.
7.	font-size: 36px;: Mengatur ukuran font untuk elemen “h1” menjadi 36 piksel

![css 4](https://github.com/ayyubfaraby/pemweb/assets/124480416/45fe6659-cb29-4c4b-90df-53f4ec90c8b1)

1.	ul: Selektor CSS yang memilih elemen “ul”.
2.	background-color: #333;: Mengatur warna latar belakang elemen “ul” (menu navigasi) menjadi abu-abu tua (#333).
3.	list-style: none;: Menghilangkan gaya default daftar (seperti bulatan atau angka) dari elemen “ul”. Dalam hal ini, tidak akan ada tanda atau simbol yang menandai item daftar.
4.	text-align: center;: Mengatur teks di dalam elemen “ul” agar berada di tengah (centered).
5.	ul li: Selektor CSS yang memilih elemen “li” yang berada di dalam elemen “ul”. Ini akan mempengaruhi tampilan dari setiap item daftar dalam menu navigasi.
6.	display: inline;: Mengatur elemen “li” agar ditampilkan secara inline, sehingga item daftar akan tampil sejajar satu sama lain.
7.	margin-right: 20px;: Memberikan margin sebelah kanan sebesar 20 piksel antara setiap item daftar.
8.	ul li a: Selektor CSS yang memilih elemen “a” yang berada di dalam elemen “li” di dalam elemen “ul”. Ini akan mempengaruhi tampilan dari tautan (link) di dalam menu navigasi.
9.	text-decoration: none;: Menghilangkan dekorasi teks untuk tautan (misalnya, garis bawah).
10.	color: #fff;: Mengatur warna teks untuk tautan menjadi putih (#fff).
11.	font-weight: bold;: Mengatur tebal (bold) untuk teks tautan.

![css 5](https://github.com/ayyubfaraby/pemweb/assets/124480416/def756bc-3002-4d1c-865e-7f3e0e305347)

1.	.container: Ini adalah selektor CSS yang memilih elemen dengan kelas "container".
2.	display: flex;: Mengatur elemen "container" sebagai kontainer fleksibel, yang memungkinkan pengaturan tata letak menggunakan flexbox.
3.	justify-content: space-around;: Mengatur penyebaran item secara merata di sekitar kontainer, sehingga ada ruang yang seimbang antara item.
4.	flex-wrap: wrap;: Mengizinkan elemen "container" untuk membungkus item jika tidak cukup ruang, sehingga item akan melanjutkan ke baris atau kolom berikutnya.
5.	margin-top: 20px;: Menambahkan margin atas sebesar 20 piksel pada elemen "container".
6.	.container img: Ini adalah selektor CSS yang memilih elemen gambar (“img”) yang berada di dalam elemen dengan kelas "container".
7.	margin: 10px;: Menambahkan margin sebesar 10 piksel di sekitar setiap gambar.
8.	border: 2px solid #333;: Menambahkan bingkai (border) dengan ketebalan 2 piksel dan warna abu-abu tua (#333) pada setiap gambar.
9.	border-radius: 5px;: Mengatur sudut melengkung (radius sudut) pada bingkai gambar dengan radius 5 piksel.

![css 6](https://github.com/ayyubfaraby/pemweb/assets/124480416/b0683efe-60b4-4925-99ce-2dd50e84926a)

1.	footer: Ini adalah selektor CSS yang memilih elemen “footer”.
2.	background-color: #333;: Mengatur warna latar belakang elemen “footer” menjadi abu-abu tua (#333).
3.	color: #fff;: Mengatur warna teks di dalam elemen “footer” menjadi putih (#fff).
4.	text-align: center;: Mengatur teks di dalam elemen “footer” agar berada di tengah (centered).
5.	padding: 10px 0;: Menambahkan padding atas dan bawah sebesar 10 piksel dan padding kiri-kanan nol (0).

![css 7](https://github.com/ayyubfaraby/pemweb/assets/124480416/8cf6e2c4-775d-4f70-9ab9-5e19ccbc5b5e)

1.	.center-text: Ini adalah nama kelas CSS yang Anda tentukan untuk mengatur tampilan teks.
2.	text-align: center;: Mengatur teks agar berada di tengah.
3.	margin: 0 auto;: Memberikan margin nol (0) di atas dan bawah serta otomatis mengatur margin kiri dan kanan agar teks berada di tengah (dengan menggunakan "auto" pada margin horizontal).
4.	width: 50%;: Mengatur lebar elemen dengan kelas .center-text menjadi 50%. Anda dapat menyesuaikan nilai ini sesuai dengan lebar yang Anda inginkan.




















