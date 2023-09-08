## Dokumentasi ##

1. variabel
    variabel adalah sebuah tempat yang nanti nya dapat diisi oleh nilai, satu variabel dapat diisi dengan 1 nilai saja,
    jadi variabel tidak bisa menampung nilai 'yaser' dan 90 secara bersamaan.
    variabel diPHP bisa diisi dengan berbagai jenis tipe data, contohnya :
        - string (contoh : "yaser rayhan" )
        - number (contoh : 10 atau 10.56 )
        - boolean (contoh : false atau true )
     
    variabel memiliki beberapa aturan sebagai berikut :
        1. variable adalah tempat menyimpan data
        2. variable bisa diisi dengan tipe data apapun
        3. variable diawali dengan tanda $
        4. variable tidak boleh diawali dengan angka, tapi boleh mengandung angka. Contoh: $1nama (salah), $nama1 (benar)
        5. variable bersifat case sensitive. Contoh: $nama dan $Nama adalah variable yang berbeda
        6. variable tidak boleh mengandung spasi. Contoh: $nama saya (salah), $nama_saya (benar, disebut snake case), $namaSaya (benar, disebut camel case)
        6. variable tidak boleh mengandung karakter spesial, kecuali underscore (_). Contoh: $nama@ (salah), $nama_saya (benar)
        7. variable boleh diawali dengan underscore (_). Contoh: $_nama (benar)
        8. variable boleh diawali dengan angka, jika diawali dengan underscore. Contoh: $_1nama (benar)
        9. variable bisa diisi dengan cara langsung atau diisi nanti
        10. variable bisa diisi dengan variable lain

    (note : engga usah dihapalin, yang penting dari nomer 4 sampai 6)


2. concatenasi
    concatenasi juga dapat digunakan untuk mengabungkan nilai dari dua buah variabel yang isinya string


3. array
    array adalah sebuah tempat yang bisa menyimpan banyak nilai dalam satu waktu, tipe data dalam array bisa bercampur, jadi tidak terikat untuk satu isi.
    aturan penamaan pada array sama dengan variabel.
    apabila ingin mengambil salah satu nilai didalam array bisa menggunakan indexnya, 
    ada dua jenis array di php yang dibedakan dari penggunaan index nya :

        1. array numerik
            array numerik dapat dikenali dengan nilai index nya yang menggunakan angka,
            array numerik memulai index nya dari angka 0, 
            contoh pengambilan data array numerik adalah $bulan[0]; atau $bulan[8];

        2. array assosiative
            berbeda dengan numerik yang menggunakan angka, assosiative bisa ditentukan sendiri index nya,
            contoh array assosiative adalah $profil['nama']; atau $profil['umur'];

    kedua jenis array memiliki fungsi nya masing-masing, tidak jarang keduanya dicampurkan (akan dijelaskan lebih lanjut pada array multidimensi)


4. var_dump
    sebagai mana dijelaskan pada pertemuan 1 bahwa echo tidak dapat menampilkan seluruh isi array,
    maka fungsi yang dapat melakukan hal tersebut adalah var_dump.
    var_dump akan menampilkan beberapa informasi saat digunakan :
        1. array(4)                     = angka yang ada didalam kurung adalah jumlah data data array tersebut.
        2. [0]=> int(123)               = angka didalam kurung kotak adalah index, int adalah tipe data dari value dan yang ada didalam kurung adalah isi/nilai dari index tersebut.
        3. [1]=> string(7) "tulisan"    = pada kasus value string sedikit berbeda, angka dalam kurung adalah jumlah karakter yang ada di value, sedangkan valuenya adalah yang ada didalam kutip dua.
    
