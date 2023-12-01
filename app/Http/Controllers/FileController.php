<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'ktm' => 'required|mimes:pdf|max:2048'
        ]);

        
        // dd($request->file());
        if($request->file('ktm')) {
            $pdfFile = $request->file('ktm');
            $fileName = time() . '.' . $pdfFile->extension();

            // $pdfFile->move(public_path('pdf'), $fileName);
            // dd("public/pdf/". $fileName);

            $path = $pdfFile->storeAs('public/ktm', $fileName);
            // dd(Storage::url($path));
            // redirect to status page
            return redirect()->route('status');
            // return back()
            // ->with('success','File has been uploaded.')
            // ->with('file', $fileName);
        }
    }
}
