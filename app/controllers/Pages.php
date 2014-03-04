<?php

class Pages extends BaseController {

	public $layout = 'layouts.default';

	public function home()
	{
		$data['posts'] = Post::orderBy('id', 'DESC')->paginate(9);
		$data['next_offset'] = $data['posts']->getCurrentPage() + 1;
		if(Input::get('page')){ $data['current_offset'] = Input::get('page'); }
		else{ $data['current_offset'] = 1; }
		$view = View::make('pages.home',$data);
		$this->layout->title = "Koonema - Rumahnya Fans Drama Asia";
		$this->layout->description = "Koonema Rumahnya Drama Asia";
		$this->layout->keyword = "Rumahnya oii";
		$this->layout->content = $view;
	}

	public function search()
	{
		$keyword = Input::get('s');
		$data['posts'] = Post::orderBy('id', 'DESC')->where('title', 'LIKE', '%'.$keyword.'%')->paginate(9);
		
		$view = View::make('pages.home',$data);
		$this->layout->title = "Koonema - Rumahnya Fans Drama Asia";
		$this->layout->description = "Koonema Rumahnya Drama Asia";
		$this->layout->keyword = "Rumahnya oii";
		$this->layout->content = $view;
	}

	public function drama()
	{
		$keyword = Input::get('k');
		if($keyword) $data['dramas'] = Drama::orderBy('id', 'DESC')->where('title', 'LIKE', '%'.$keyword.'%')->paginate(9); 
		else $data['dramas'] = Drama::orderBy('id', 'DESC')->paginate(9);
		$view = View::make('pages.drama',$data);
		$this->layout->title = "Koonema - Rumahnya Fans Drama Asia";
		$this->layout->description = "Koonema Rumahnya Drama Asia";
		$this->layout->keyword = "Rumahnya oii";
		$this->layout->content = $view;
	}

	public function join()
	{
		$view = View::make('pages.join');
		$this->layout->title = "Koonema - Rumahnya Fans Drama Asia";
		$this->layout->description = "Koonema Rumahnya Drama Asia";
		$this->layout->keyword = "Rumahnya oii";
		$this->layout->content = $view;
	}

	public function contact()
	{
		$view = View::make('pages.contact');
		$this->layout->title = "Koonema - Rumahnya Fans Drama Asia";
		$this->layout->description = "Koonema Rumahnya Drama Asia";
		$this->layout->keyword = "Rumahnya oii";
		$this->layout->content = $view;
	}

	public function test()
	{
		$view = View::make('pages.join');
		$this->layout->title = "Koonema - Rumahnya Fans Drama Asia";
		$this->layout->description = "Koonema Rumahnya Drama Asia";
		$this->layout->keyword = "Rumahnya oii";
		$this->layout->content = $view;
	}

}
