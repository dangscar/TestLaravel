<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;
use Illuminate\Support\Facades\File as HandleFile;

class FileUploadController extends Controller
{
    function index() {
        // $file = File::find(6);
        // HandleFile::delete(public_path($file->file_path));
        // $file->delete();
        $files = File::all();
        return view('file-upload', ['files' => $files]);
    }

    function store(Request $request) {
        $request->validate([ 'file' => 'required|file|mimes:jpg,png,pdf|max:2048', ]);
        // $file = Storage::disk('local')->put('/', $request->file('file'));
        // dd($file);

        // $file = $request->file('file')->store('/', 'local');
        //$file = $request->file('file')->store('/', 'public');

        $file = $request->file('file');
        $customName = 'laravel_'.Str::uuid();
        $ext = $file->getClientOriginalExtension();
        $fileName = $customName.'.'.$ext;
        $path = $file->storeAs('/', $fileName, 'dir_public');

        //$file = $request->file('file')->store('/', 'dir_public');

        $fileStore = new File();
        // $fileStore->file_path = '/uploads/'.$file;
        $fileStore->file_path = '/uploads/'.$path;
        $fileStore->save();
        dd($fileStore->file_path);
    }

    function download() {
        return Storage::disk('public')->download('ewiu299iWBG56q9QDCxlrvK9mOWZLff9sKQfxW3Y.png');
    }
}
