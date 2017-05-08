<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Don't eat POO</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

<body>
<?php
class StrUtils {
    private $str="I'm so fucking happy I could shit rainbows !!!";

    public function __construct($str){
  $this->str = $str;
  }

  public function bold(){
    return "<strong>".$this->str."</strong><br>";
  }
  public function italic(){
    return "<i>".$this->str."</i><br>";
  }
  public function underline(){
    return "<u>".$this->str."</u><br>";
  }
  public function capitalize(){
    return ucwords($this->str)."<br>";
  }
  public function uglify(){
    $this->bold();
    $this->italic();
    $this->underline();
    return $this->capitalize();
  }
}

$phrase = new Strutils("J'aime les steacks de licornes sanguinolents !!!");
echo $phrase->bold();
echo $phrase->italic();
echo $phrase->underline();
echo $phrase->capitalize();
echo $phrase->uglify();

?>


</body>

</html>

