<?php

class ColorController extends BaseController {

	public function index(){
		$colors = Color::where('approved',0)->orderBy('created_at','desc')->get();
		return View::make('index')->withPage('home')->withColors($colors);
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
		$color->code = $color_1.$color_2.$color_3.$color_4;
		$color->likes = 0;
		$color->approved = 0;
		$color->save();

		if($color){
			return Redirect::to('/')->with('msg_success','Thanks for your Colors :) , Your Monster is Waiting for Approval. It Will be ShowCased Soon!! ');
		}else{
			return Redirect::to('/')->with('msg_error','Something Went Wrong!! , Please Try Again ');
		}

	}

}