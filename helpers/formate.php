<?php
/**
 * Format class
 */
class Formate
{
	
	public function formateDate($date){
		return date('Y/m/d H:i:s', strtotime($date));
	}

	public function shortText($text, $limit = 400){
        $text = $text. "";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strripos($text, ' '));
        $text = $text."........";
        return $text;
    }

    public function validation($data){
	    $data = trim($data);
	    $data = stripcslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
    }

    public function title(){
	    $path = $_SERVER['SCRIPT_FILENAME'];
	    $title = basename($path, '.php');
	    //$title = str_replace('_', ' ', $title);
	    if ($title == 'index'){
	        $title = 'home';
        }elseif ($title == 'contact'){
	        $title = 'conatct';
        }
	    return $title = ucfirst($title);
    }
}