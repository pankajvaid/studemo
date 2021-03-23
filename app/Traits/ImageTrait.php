<?php 

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


trait ImageTrait
{
    
    public function hasImage($imageName) {
    	//print_r($imageName); die();
    	$img = explode("/", $imageName);
    	//print_r($img); die();
    	//echo $img[1]; die();
        return (Storage::disk('upload')->exists($img[1]) ? asset('storage/app/public/upload/Thumbnail') . "/" . $imageName : asset('storage/app/public/upload') . "/404.jpeg");
    }
    public function fileUpload($files, $is_array = false,$folder_name=null) {
	if ($is_array) {
		foreach ($files as $file) {
			$imageName = time() . rand(1, 99) . '.' . $file->getClientOriginalExtension();
			if (!file_exists(storage_path('app/public/upload/Thumbnail/'.$folder_name.'/'))) {
			 mkdir(storage_path('app/public/upload/Thumbnail/'.$folder_name.'/'), 0777, true);
			}
			$file->storeAs('public/upload', $imageName);
			Image::make($file)/*->resize(300, 200)*/->save(storage_path('app/public/upload/Thumbnail/'.$folder_name.'/' . $imageName));
			$imageName = $folder_name.'/'.$imageName;
			//return $imageName;
			$responce[] = ['name' => $imageName];
		}
		//echo "<pre>"; print_r($responce); die();
		return $responce;
	} else {
		//echo "<pre>"; print_r($files); die();

		$imageName = time() . rand(1, 99) . '.' . $files->getClientOriginalExtension();
		if (!file_exists(storage_path('app/public/upload/'.$folder_name.'/'))) {
		 mkdir(storage_path('app/public/upload/'.$folder_name.'/'), 0777, true);
		}
		$files->storeAs('public/upload', $imageName);
		
		 $imageName = $folder_name.'/'.$imageName;
		return $imageName;
	}
	}
}
