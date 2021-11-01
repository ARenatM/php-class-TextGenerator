<?php

class TextGenerator{
    private $words = array();
    private $generated = "";
    function __construct($words = array()){
        if(!is_array($words)){
        }
        else{
            $this->setWords($words);
        }
    }
    public function setWords($words = array()){
        if(!is_array($words)){
        }
        else{
            for($i = 0; $i<count($words);$i++){
                $this->words[] = $words[$i];
            }
        }
    }
    public function generate($length){
        for($i = 0; $i<$length; $i++){
            $this->generated = $this->generated . " " . $this->words[random_int(0, count($this->words)-1)];
        }
        return $this->generated;
    }
}
$text = new TextGenerator([0=>"one", 1="two"]);
$text->setWords([0 => "three", 1=> "four"]);
var_dump($text->generate(3));
var_dump($text);

?>
