<?php

use Illuminate\Support\Facades\File;

function fileUpload($fileRequest,$saveIn)
{
    $file = $fileRequest;
    $fileName = rand() . time() . '.' . $file->getClientOriginalExtension();
    $file->move(public_path($saveIn), $fileName);
    return $fileName;
}

function fileDelete($fileName,$path){
    File::delete(public_path($path.'/' . $fileName));
}
