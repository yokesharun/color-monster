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

		public function vote_color()
	{

		$color_id = Input::get('color_id');

			if($color_id != ""){
				$host_ip = gethostbyname($_SERVER['SERVER_NAME']);
				$ip_count = Love::where('ip_address',$host_ip)->where('color_id',$color_id)->count();
				if($ip_count == 0)	{
					$votes = new Love;
					$votes->color_id = $color_id;
					$votes->vote = 1;
					$votes->ip_address = $host_ip;
					$votes->save();
				}
				$count = Love::where('color_id',$color_id)->sum('vote');
				$response_array = array('success' => true,'color_id' => $color_id, 'vote' => $count);
				$response_code = 200;						

			}else{
		
				$response_array = array('success' => false,'error' => 'Color not found', 'error_code' => 415);
				$response_code = 200;
		
			}
			// SERVER_ADDR

		$response = Response::json($response_array, $response_code);
		return  $response;
	}

}