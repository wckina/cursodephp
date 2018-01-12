<?php 
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use App\Models\Compra;

class ComprasController extends Controlle
{
	
	public function index(ServerRequestInterface $request, ResponseInterface $response)
	{
	    $compras = Compra::all();

	    $this->compras = $compras;

	    $listaHTML = ""; 
	    foreach ($compras as $key => $value) {
	    	$listaHTML.='<li>'.$value["titulo"]. '' . $value["descricao"]. '</li>';
	    }

	    return $this->view('home',$response);
	}

}

?>