<?php
abstract class Controller{
	private $layout = 'layout';
	protected function index(){}
	protected function loadView($file,$view,$data=array()){
            $this->data = $data;
            if($this->layout){
                ob_start();
                include "view/{$this->layout}.php";
                $contentPage = ob_get_clean();
            }
                ob_start();
                include "view/{$file}/{$view}.php";
                $content = ob_get_clean();
                echo str_replace("[VIEW]",$content,$contentPage);
	}
}
