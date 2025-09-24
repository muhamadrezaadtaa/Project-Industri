<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BiodatasController;
use App\Http\Controllers\PostsController;
use App\Models\Biodata;
use App\Models\Post;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
});

Route::get('/aboutin', function (){
    return '<h1> <center>  Selamat Datang di Halaman About  </center> </h1>';
});
Route::get('/profile', function (){
    return '<h1> <center> Selamat Datang di Halaman Profile </center> </h1>';
});
Route::get('/biodata/{nama_lengkap}/{tanggal_lahir}/{jenis_kelamin}/{tempat_lahir}/{alamat}/{agama}/{telepon}',
           function ($nama_lengkap,$tanggal_lahir,$jenis_kelamin,$tempat_lahir,$alamat,$agama,$telepon){
    return '<center><h1> Biodata </h1><br>'.
           ' Nama Lengkap  : '. $nama_lengkap  .' <br>'.
           ' Tanggal Lahir : '. $tanggal_lahir .' <br>'.
           ' Jenis Kelamin : '. $jenis_kelamin .' <br>'.
           ' Tempat Lahir  : '. $tempat_lahir  .' <br>'.
           ' Alamat        : '. $alamat        .' <br>'.
           ' Agama         : '. $agama         .' <br>'.
           ' Telepon       : '. $telepon       .' </center> <br>';
});
Route::get('/hitung/{bilangan}/{bilanggan}', function ($bilangan,$bilanggan){
    return ' <center> Bilangan 1 : '. $bilangan .'<br>'.
           'Bilangan 2 : '. $bilanggan .'<br>'.
           'Hasil      : '. $bilangan - $bilanggan .'<br> <center> ';
});
Route::get('/persegi/{sisi1}/{sisi2}', function ($sisi1,$sisi2){
    $hasil = $sisi1 * $sisi2 ;
    return '<center> <h3> Ini Bilangan Persegi </h3><br>'.
           'Rumus : Sisi x Sisi <br>'.
           'Sisi1 : '. $sisi1 .'<br>'.
           'Sisi2 : '. $sisi2 .'<br>'.
           'Hasil : '. $hasil .'<br> <center>';
});
Route::get('/persegipanjang/{panjang}/{lebar}', function ($panjang,$lebar){
    $hasil = $panjang * $lebar ;
    return '<center> <h3> Ini Bilangan Persegi Panjang </h3><br>'.
           'Rumus : Panjang x Lebar <br>'.
           'Panjang : '. $panjang .'<br>'.
           'Lebar : '. $lebar .'<br>'.
           'Hasil : '. $hasil .'<br> <center>';
});
Route::get('/segitiga/{alas}/{tinggi}', function ($alas,$tinggi){
    $hasil = 0.5 * $alas * $tinggi ;
    return '<center> <h3> Ini Bilangan Segitiga </h3><br>'.
           'Rumus : Alas x Tinggi <br>'.
           'Alas : '. $alas .'<br>'.
           'Tinggi : '. $tinggi .'<br>'.
           'Hasil : '. $hasil .'<br> <center>';
});
Route::get('/lingkaran/{jari_jari}', function ($jari_jari){
    $hasil = 3.14 * $jari_jari * $jari_jari ;
    return '<center> <h3> Ini Bilangan Lingkaran </h3><br>'.
           "Rumus : Jari-Jari x Jari-Jari <br>".
           'Jari-Jari : '. $jari_jari .'<br>'.
           'Hasil : '. $hasil .'<br> <center>';
});
Route::get('/jajan/{nama}/{no_telp}/{tanggal}/{jenis}/{menu}/{jumlah}', function ($nama,$no_telp,$tanggal,$jenis,$menu,$jumlah){

$harga = "";
if ($jenis == "Makanan") {
    if ($menu == "Batagor") {
        $harga = 20000;
    }else if ($menu == "Seblak") {
        $harga = 10000;
    }else if ($menu == "Pentol") {
        $harga = 15000;
    }else {
        return "Menu Tidak Ada!!!";
    }

}else if ($jenis == "Minuman") {
     if ($menu == "Kopi") {
        $harga = 5000 ;
    }else if ($menu == "Jus") {
        $harga = 10000 ;
    }else if ($menu == "Thai_tea") {
        $harga = 15000 ;
    }else {
        return "Menu Tidak Ada!!!";
    }
}else {
    return "Jenis Tidak Ada!!!";
}

$total = $harga * $jumlah;

if ($total >= 50000) {
    $diskon = $total * 0.10;
}else {
    $diskon = 0;
}

$total_bayar = $total - $diskon;

    return "<center> <h1> ~ Warung XI RPL 1 ~ </h1> <br>".
           "========================= <br>".
           "Nama Pemesan : $nama <br>".
           "No Telp : $no_telp <br>".
           "Tanggal Beli : $tanggal <br>".
           "Jenis : $jenis <br>".
           "Menu : $menu <br>".
           "Harga : $harga <br>".
           "Jumlah : $jumlah <br>".
           "========================= <br>".
           "Total : $total <br>".
           "Diskon : $diskon <br>".
           "========================= <br>".
           "Total Bayar : $total_bayar <br>".
           "~  Hatur Nuhun Tos Meser ~ <br>".
           "~ Tadina Mun Te Meser Dek di Tonjok ~<br> </center>";
});

// routing view

Route::get('halaman1', function (){

    $siswa = ["Reza","Ilham","Ipat","Rudy","Fadil","Jauf","Galang","Jihad","Teguh","Raka"];

    return view('tampil1', compact('siswa'));
});

Route::get('halaman2', function (){

     $hobi = ["Bersepeda","Main Roblox","Ngoding","Futsal","Badminton","Main Bola","Catur","Main Game","Ngurek","Mancing"];

    return view('tampil2', compact('hobi'));
});

Route::get('halaman3', function (){

     $idola = ["Ronaldo","Judika","Messi","Sule","Dedi","Windah","Komeng","Iko Uwais","Neymar","Adun Mancing"];

    return view('tampil3', compact('idola'));
});

Route::get('halaman4', function (){
    return view('tampil4');
}); 

// Route::get('post', function (){
// }); 

    // $post = Post::find(1);
    // $post->content = "belajar dengan giat lagi";
    // $post->save();
    // return $post;
    // return view('tampilan_post', compact('post'));

    // $post = Post::find(1);
    // $post->delete();
    // return $post;   

    // $post = new Post;
    // $post->title = "menjadi teman yang baik";
    // $post->content ="menjadi teman yang baik adalah hal fositif";
    // $post->save();
    // return $post;



Route::get('siswa', function (){

    $siswa = Siswa::find(1);
    return view('tampilan_siswa', compact('siswa'));

}); 

// sebut si guna korong

// Route::get('biodata', function (){

//     $biodata = Biodata::all();
//     return view('tampil_biodata', compact('biodata'));

    // menambahkan data
    // $biodata = new Biodata  ;
    // $biodata->nama_lengkap = "Yadi";
    // $biodata->jenis_kelamin ="laki-laki";
    // $biodata->tanggal_lahir ="2008-10-23";
    // $biodata->tempat_lahir ="bandung";
    // $biodata->agama ="islam";
    // $biodata->alamat ="cibogo";
    // $biodata->telepon="083997756709";
    // $biodata->email ="yad22@gmail.com";
    // $biodata->save();
    // return $biodata;

    // merubah data
    // $biodata = Biodata :: find(13);
    // $biodata-> tanggal_lahir = "2009-03-15";
    // $biodata-> save();
    // return $biodata;

    // menampilkan data tertentu
    // return $biodata = Biodata :: where('id','like','%3%')->get();

    // menghapus data
    // $biodata = Biodata :: find(1);
    // $biodata -> delete();
    // return $biodata;

// }); 

Route::get('post', [PostsController::class, 'tampil']);

Route::get('biodata', [BiodatasController::class, 'tampilkan']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product', [ProductController::class, 'index'])->name('product');

