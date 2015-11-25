<?php
class Pagina{
	//atributos
	public $nombre = "Desarrollo Web";
	public static $url = "www.google.es";

	//metodos

	public function bienvenida(){
		echo "Bienvenidos a <b>" . $this->nombre . ", la página es: " . self::$url;
	}

	public static function bienvenida2(){
		echo "bienvenidos a" . self::$nombre;
	}
}

class Web extends Pagina{

}
//los metodos estaticos se pueden usar sin instanciar el objeto
Web::bienvenida2();
?>