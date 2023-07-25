<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download_lampiran_bimbingan($filename)
    {
        $filePath = storage_path('app/public/ongoing-files/' . $filename);

        return response()->download($filePath, $filename);
    }

    public function download_lampiran_tutor($filename)
    {
        $filePath = storage_path('app/public/tutor_files/' . $filename);

        return response()->download($filePath, $filename);
    }
}
