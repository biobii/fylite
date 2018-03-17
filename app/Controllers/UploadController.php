<?php

namespace App\Controllers;

use App\Core\FileUpload;

class UploadController extends Controller
{

    public function form()
    {
        $greet = 'Halo, test file upload';
        return view('upload', ['greet' => $greet]);
    }

    public function upload()
    {
        // csrf_check();

        // grab input file
        $data = inputFile('gambar');

        $file = new FileUpload('jpg,jpeg,png', '2000'); // type, size
        $result = $file->setFile($data)->setName('gambar-folder')
                        ->pathTo('photos')
                        ->upload();

        dump($file);
    }

}