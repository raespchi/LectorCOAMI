<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class metodosControlador extends Controller
{
    public $request;

	public function _construct(Request $request)
	{
		$this->request = $request;		
	}

    public function inicio(){
        return view('index');
    }

    public function ver(Request $request){       

        return view('visualizador',[
                    'rfc' => $request->rfc,
                    'tipo' =>$request->tipo,
                    'ano' => $request->ano,
                    'mes' =>$request->mes

                    ]);     
    }   
    
}
