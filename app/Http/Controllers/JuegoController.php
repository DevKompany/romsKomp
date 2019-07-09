<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juego;
use Config;
use Input;
use Image;
use Redirect;
use File;
use Validator;


class JuegoController extends Controller
{
	public function create(Request $request){


		$this->validate($request, [
			'nombre' 		=> 'required',
			'desc'	 		=> 'required',
			'enlace1' 		=>	'required',
			'enlace2' 		=>	'required',
			'enlace3' 		=>	'required',
			'imagen3' 		=>	'image|mimes:jpg,jpeg,bmp,gif,png|max:'.Config::get('app.photo_max_size'),
			'imagen2' 		=>	'image|mimes:jpg,jpeg,bmp,gif,png|max:'.Config::get('app.photo_max_size'),
			'imagen3' 		=>	'image|mimes:jpg,jpeg,bmp,gif,png|max:'.Config::get('app.photo_max_size'),
			'plataforma'	=>	'required',
			'puntuacion'	=>  'required',
		]);
		$nombre = $request->input('nombre');
		$nombre = str_replace(' ', '', $nombre);


		$img1 = Image::make($request->file('imagen1'));
		$img2 = Image::make($request->file('imagen2'));
		$img3 = Image::make($request->file('imagen3'));

		$nombreImg1 = $nombre.'1.'.$request->file('imagen1')->getClientOriginalExtension();
		$nombreImg2 = $nombre.'2.'.$request->file('imagen2')->getClientOriginalExtension();
		$nombreImg3 = $nombre.'3.'.$request->file('imagen3')->getClientOriginalExtension();

		$rutaImg1 = Config::get('app.url_juegos_img').'/'.$nombreImg1;
		$rutaImg2 = Config::get('app.url_juegos_img').'/'.$nombreImg2;
		$rutaImg3 = Config::get('app.url_juegos_img').'/'.$nombreImg3;

		$img1->save($rutaImg1, 100);
		$img2->save($rutaImg2, 100);
		$img3->save($rutaImg3, 100);

		$juego = new Juego(array(
			'nombre' 		=> $request->input('nombre'),
			'desc'			=> $request->input('desc'),
			'enlace1' 		=> $request->input('enlace1'),
			'enlace2' 		=> $request->input('enlace2'),
			'enlace3' 		=> $request->input('enlace3'),
			'img1' 			=> $rutaImg1,
			'img2' 			=> $rutaImg2,
			'img3' 			=> $rutaImg3,
			'plataforma'	=> $request->input('plataforma'),
			'puntuacion'	=> $request->input('puntuacion'),
			'descargas' 	=> 0,
		));

		if($juego->save()){
			return redirect('/subirJuego')->with('send', 'Juego añadidio con exito');
		}else{
			return redirect('/subirJuego')->with('send', 'Fallo al añadir el juego');
		}
	}
}
