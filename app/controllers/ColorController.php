<?php

class ColorController extends BaseController {

	public function index(){
		return View::make('index')->withPage('home');
	}

	public function create(){
		return View::make('create')->withPage('create');
	}

	public function create_process(){
		$color_1 = ltrim (Input::get('color_1'), '#');
		$color_2 = ltrim (Input::get('color_2'), '#');
		$color_3 = ltrim (Input::get('color_3'), '#');
		$color_4 = ltrim (Input::get('color_4'), '#');

		$color = new Color;
		$color->color_1 = $color_1;
		$color->color_2 = $color_2;
		$color->color_3 = $color_3;
		$color->color_4 = $color_4;
		$color->id = $color_1.$color_2.$color_3.$color_4;
		$color->likes = 0;
		$color->approved = 0;
		$color->save();

	}

}