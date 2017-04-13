<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
	/**
	 * @var UploadedFile
	 */
	public $imageFile;

	public function rules()
	{
		return [
				[['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
		];
	}

	public function upload()
	{
		$filename='';
		$rnd  = rand(0,9999);
		/* if ($this->validate()) {
			$filename=$rnd.'_'.$this->imageFile->baseName . '.' . $this->imageFile->extension;
			$this->imageFile->saveAs('uploads/' . $filename);
			chmod("uploads/".$filename, 775);
			return $filename;
		} else {
			return false;
		} */
		
		$filename=$rnd.'_'.$this->imageFile->baseName . '.' . $this->imageFile->extension;
		$this->imageFile->saveAs('uploads/event/' . $filename);
		chmod("uploads/event/".$filename, 775);
		
		
		return $filename;
	}
	
	public function noticeUpload(){
		$filename='';
		$rnd  = rand(0,9999);
		
		$filename=$rnd.'_'.$this->imageFile->baseName . '.' . $this->imageFile->extension;
		$this->imageFile->saveAs('uploads/notice/' . $filename);
		chmod("uploads/notice/".$filename, 775);
		
				
		return $filename;
	}
	
	public function cmsUpload(){
		$filename='';
		$rnd  = rand(0,9999);
		
		$filename=$rnd.'_'.$this->imageFile->baseName . '.' . $this->imageFile->extension;
		$this->imageFile->saveAs('uploads/cms/' . $filename);
		chmod("uploads/cms/".$filename, 777);
		
				
		return $filename;
	}
	
	public function clientlogoUpload(){
		$filename='';
		$rnd  = rand(0,9999);
	
		$filename=$rnd.'_'.$this->imageFile->baseName . '.' . $this->imageFile->extension;
		$this->imageFile->saveAs('uploads/clientlogo/' . $filename);
		chmod("uploads/clientlogo/".$filename, 777);
	
		return $filename;
	}
	
	public function sliderUpload(){
		$filename='';
		$rnd  = rand(0,9999);
	
		$filename=$rnd.'_'.$this->imageFile->baseName . '.' . $this->imageFile->extension;
		$this->imageFile->saveAs('uploads/slider/' . $filename);
		chmod("uploads/slider/".$filename, 777);
	
		return $filename;
	}
	
	
	
	public function eventdUpload(){
		$filename='';
		$rnd  = rand(0,9999);
	
		$filename=$rnd.'_'.$this->imageFile->baseName . '.' . $this->imageFile->extension;
		$this->imageFile->saveAs('uploads/events/' . $filename);
		chmod("uploads/events/".$filename, 777);
	
		return $filename;
	}
	
	
	public function productimgUpload(){
		$filename='';
		$rnd  = rand(0,9999);
	
		$filename=$rnd.'_'.$this->imageFile->baseName . '.' . $this->imageFile->extension;
		$this->imageFile->saveAs('uploads/product/' . $filename);
		chmod("uploads/product/".$filename, 777);
	
		return $filename;
	}
}