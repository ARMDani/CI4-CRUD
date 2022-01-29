<?php

// halaman controler ini memuat halaman 
// view yang statik seperti home, about dan kontak

namespace App\Controllers;

class Chok extends BaseController
{
    public function index()
    {
        // disini kita akan mengirimkan data kepada setiap view seperti
        // home about dan contact, disetiap view berbeda-beda title nya jadi
        // kita akan membuat satu data di controler untuk bisa digunakan oleh setiap view

        //    kemudian kita akan membuat variabel yang bernama
        //    $data yang isinya erey kemudian buat q nya yang akan dimasukan sebagai title view nya
        $data = [
            'title' => 'Home | SukaBaca'

        ];

        // untuk memanggil view ada beberapa cara yaitu
        // return untuk memanggil satu view dalam satu method
        // echo untuk memanggil beberapa view dalam satu function atau method
        // echo view('layout/header', $data);
        // jadi kita gunakan saja return karena kita hanya memanggil satu view
        return view('Chok/home', $data);
        // echo view('layout/footer');
    }
    public function about()
    {
        $data = [
            'title' => 'About | SukaBaca'

        ];


        // untuk memanggil view ada beberapa cara yaitu
        // return untuk memanggil satu view dalam satu method
        // echo untuk memanggil beberapa view dalam satu function atau view
        // echo view('layout/header', $data);
        // jadi kita akan gunakan saja return karena kita hanya memangil satu view
        return view('Chok/about', $data);
        // echo view('layout/footer');
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us'
        ];
        return view('Chok/contact', $data);
    }
}
