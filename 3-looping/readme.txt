## Dokumentasi ##

1.Pengertian looping di program
    looping adalah cara agar suatu kode bisa dijalankan berulang kali tanpa ditulis manual oleh programmer.
    sebagai contoh misal akan menampilkan teks 'hello' sebanyak 10 kali, daripada menuliskan echo 'hello' sebanyak 10 kali, lebih baik dibuat looping
    looping merupakan konsep yang penting karena sangat sering digunakan dalam berbagai hal, contohnya :
        - print data ke layar (sebelum nya dicontohkan echo 'hello'),
        - melakukan pengecekan data array
        - filter isi data array (contoh nya apabila ingin memisahkan bilangan ganjil dan genap) 
        - membuat program yang fleksibel karena proses nya berorientasi pada data
        - dll

    kode perulangan WAJIB memiliki akhir, karena apabila tidak di akhiri akan masuk pada sesuatu yang disebut ' infinite loop ' atau perulangan tanpa akhir,
    pada kondisi infinite loop kemungkinan program kita akan menghabiskan banyak ram dan CPU yang mempengaruhi harga bayar di server.


## penjelasan kode fungsi yang digunakan ##

1. for
    for merupakan salah satu kode di php untuk melakukan looping, cara kerja for adalah sebagai berikut :
        - for secara normal memerlukan 3 argument seperti berikut ' for($i=0; $i<5; $i++) ', fokus pada yang di dalam kurung...ada tiga karena dipisahnya dari tanda titik koma(;)
        - contoh argumen pertama adalah $i=0, ini adalah nilai awal yang diberikan sebagai acuan perulangan nya. ' $i=0 ' adalah contoh dan dapat dirubah rubah misal $abcd=34 atau $index=90 . namun yang paling umum digunakan adalah $i=0
        - argumen kedua memuat kondisi yang apabila terpenuhi maka perulangan akan dilanjutkan, contoh yang diberikan ' $i<5; ', jadi selama i kurang dari 5 perulangan akan dijalankan.
        - argumen terakhir adalah penambahan atau pengurangan variabel di argumen pertama pada setiap perulangan, contoh ' $i++ ', ini berarti variabel i akan ditambahkan nilainya sebanyak 1 pada setiap perulangan yang dijalankan.

    Perlu di ingat for adalah perulangan yang menangani argumen nya dengan angka, jadi terbatas pada apabila kita tahu seberapa banyak perulangan harus dijalankan, misal kita tahu sebuah perulangan maksimal akan dijalankan sebanyak 10 kali atau 100 kali.


2. while
    berbeda dengan for yang berorientasi pada angka, while berorientasi pada status yang true atau false,
    while menerima hanya 1 argumen saja while($status), selama status tersebut true, maka perulangan akan terus dijalankan.
    while sangat cocok digunakan apabila kita mengetahui sebuah perulangan akan berhenti saat sebuah kondisi yang tidak berurusan dengan angka terpenuhi,
    sebagai contoh apabila sebuah teks panjangnya 14 karakter.


3. strlen
    strlen adalah sebuah fungsi bawaan php yang dapat mengembalikan jumlah karakter dari suatu string, 
    contoh apabila ada string yang berisi 'aaa' maka hasil dari strlen nya adalah 3 karena karakter 'a' ada 3.
    berikut adalah yang termasuk karakter dalam string :
        - alphabet
        - simbol (@ , ' / . ! # % ^ & * ( ) [ ] = + _ - \ | ~ `  dll)
        - spasi


3. do while
    do while merupakan konsep yang didasarkan pada while, namun ada kalanya kita perlu sebuah perulangan dijalankan setidaknya 1 kali, walaupun status di while nya false sejak awal,
    do while memungkinkan hal tersebut karena perulangan akan dijalankan selama 1 kali lalu mengecek apakah perulangan akan dilanjutkan atau tidak.


4. foreach
    foreach merupakan sebuah perulangan yang digunakan dalam menangani array, karena cara kerja jadi foreach seperti berikut :
        - foreach menerima argument sebagai berikut foreach($array as $a) 
        - $array merupakan array yang akan dilakukan loopingnya, dan $a adalah variabel yang akan digunakan didalam kode perulangan nya untuk mendapatkan isi dari index tersebut (dijelakan pada point selanjutnya)
        - foreach akan memutari setiap index di array, mulai dari index 0 akan di simpan pada $a lalu menjalankan kode didalam perulangan, setelah selesai maka akan ke index 1..disimpan ke dalam $a dan seterusnya
        - foreach akan berhenti apabila sudah selesai melakukan perulangan pada index paling akhir di array tersebut
            
    
    //note alasan penggunaan argument ' as ', kalau pusing skip juga engga apa apa//

        penggunaan nya berdasarkan pada paradigma plural ke singular, contoh :
        putri punya 5 buku, di bahasa inggris penyebutan buku tadi karena jumlahnya lebih dari 1 atau jamak maka menggunakan plural. jadi disebut books
        karena cara kerja foreach yang memutari setiap index dan menyimpan isi nya ke variabel, maka jadi singular karna diambil 1 per 1
        jadi penggambaran nya foreach($books as $book)
         
    //=========end note=========// 


5. foreach($array as $key=>$value)
    dalam beberapa kasus kita memerlukan index yang saat ini dijadikan looping(index bisa berupa numerik atau assosiative).
    dengan memberikan bentuk argumen seperti ($array as $key=>$value) 
    kita dapat mengambil index tersebut dengan memanggil $key, sedangkan isi dari index tersebut akan disimpan pada $value