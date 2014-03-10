<?php
//controller buat front end koonema
class Pages extends BaseController {

	//layout template
	public $layout = 'layouts.default';

	//halaman homepage
	public function home()
	{
		//ambil 9 post terbaru
		$data['posts'] = Post::orderBy('id', 'DESC')->paginate(9);
		//offset page berikutnya buat pagination older post
		$data['next_offset'] = $data['posts']->getCurrentPage() + 1;
		//flag current page
		$data['current_offset'] = Input::get('page',1);
		
		//isi konten tengah
		$view = View::make('pages.home',$data);
		$this->layout->content = $view;

		//title, meta tags, meta desc
		$this->layout->title = "Koonema - Rumahnya Fans Drama Asia";
		$this->layout->description = "Koonema Rumahnya Drama Asia, tonton streaming drama korea, download subtitle indonesia drama korea, update drama korea terbaru,";
		$this->layout->keyword = "download subtitle indonesia,drama korea,drama terbaru,";

		//tambahan keyword drama
		$add_keyword = array();
		$recent_dramas = Drama::orderBy('id', 'DESC')->take(6)->get(); 
		foreach ($recent_dramas as $drama) {
			array_push($add_keyword, $drama['title']." sub indo");
		}
		$add_keyword = implode(",", $add_keyword);

		//title, meta tags, meta desc plus keywords
		$this->layout->description = $this->layout->description.$add_keyword;
		$this->layout->keyword = $this->layout->keyword.$add_keyword;
		
	}

	//halaman search kalau ketik di form pencarian (gada di navbar)
	public function search()
	{
		//tampung key
		$keyword = Input::get('s');
		//ambil 9 posting terbaru by keyword
		$data['posts'] = Post::orderBy('id', 'DESC')->where('title', 'LIKE', '%'.$keyword.'%')->paginate(1);

		//isi konten tengah
		$view = View::make('pages.home',$data);
		$this->layout->content = $view;

		//title, meta tags, meta desc
		$this->layout->title = "Koonema - Search '".$keyword."' - Rumahnya Fans Drama Asia";
		$this->layout->description = "Koonema Rumahnya Drama Asia, tonton streaming drama korea, download subtitle indonesia drama korea, update drama korea terbaru,";
		$this->layout->keyword = "download subtitle indonesia,drama korea,drama terbaru,";

		//tambahan keyword post pencarian
		$add_keyword = array();
		foreach ($data['posts'] as $post) {
			array_push($add_keyword, $post['title']);
		}
		$add_keyword = implode(",", $add_keyword);
		$this->layout->description = $this->layout->description.$add_keyword;
		$this->layout->keyword = $this->layout->keyword.$add_keyword;
	}

	//halaman drama
	public function dramas()
	{
		//tampung keyword
		$keyword = Input::get('k');

		//kalau keyword ada cari by keyword, kalo ga ambil latest drama
		if($keyword) $data['dramas'] = Drama::orderBy('id', 'DESC')->where('title', 'LIKE', '%'.$keyword.'%')->paginate(9); 
		else $data['dramas'] = Drama::orderBy('id', 'DESC')->paginate(9);

		//isi konten tengah
		$view = View::make('pages.drama',$data);
		$this->layout->content = $view;

		//title, meta tags, meta desc
		$this->layout->title = "Koonema - List Drama - Rumahnya Fans Drama Asia";
		$this->layout->description = "Koonema Rumahnya Drama Asia, tonton streaming drama korea, download subtitle indonesia drama korea, update drama korea terbaru,";
		$this->layout->keyword = "download subtitle indonesia,drama korea,drama terbaru,";

		//tambahan keyword drama
		$add_keyword = array();
		foreach ($data['dramas'] as $drama) {
			array_push($add_keyword, $drama['title']." sub indo");
		}
		$add_keyword = implode(",", $add_keyword);
		$this->layout->description = $this->layout->description.$add_keyword;
		$this->layout->keyword = $this->layout->keyword.$add_keyword;
	}

	//halaman join us
	public function join()
	{
		//isi konten tengah (konten edit sendiri di view nya)
		$view = View::make('pages.join');
		$this->layout->content = $view;

		//title, meta tags, meta desc
		$this->layout->title = "Koonema - Rumahnya Fans Drama Asia";
		$this->layout->description = "Koonema Rumahnya Drama Asia, tonton streaming drama korea, download subtitle indonesia drama korea, update drama korea terbaru,";
		$this->layout->keyword = "download subtitle indonesia,drama korea,drama terbaru,";

		//tambahan keyword drama
		$add_keyword = array();
		$recent_dramas = Drama::orderBy('id', 'DESC')->take(6)->get(); 
		foreach ($recent_dramas as $drama) {
			array_push($add_keyword, $drama['title']." sub indo");
		}
		$add_keyword = implode(",", $add_keyword);
		$this->layout->description = $this->layout->description.$add_keyword;
		$this->layout->keyword = $this->layout->keyword.$add_keyword;
	}

	//halaman kontak
	public function contact()
	{
		//isi konten tengah
		$view = View::make('pages.contact');
		$this->layout->content = $view;

		//title, meta tags, meta desc
		$this->layout->title = "Koonema - Rumahnya Fans Drama Asia";
		$this->layout->description = "Koonema Rumahnya Drama Asia, tonton streaming drama korea, download subtitle indonesia drama korea, update drama korea terbaru,";
		$this->layout->keyword = "download subtitle indonesia,drama korea,drama terbaru,";

		//tambahan keyword drama
		$add_keyword = array();
		$recent_dramas = Drama::orderBy('id', 'DESC')->take(6)->get(); 
		foreach ($recent_dramas as $drama) {
			array_push($add_keyword, $drama['title']." sub indo");
		}
		$add_keyword = implode(",", $add_keyword);
		$this->layout->description = $this->layout->description.$add_keyword;
		$this->layout->keyword = $this->layout->keyword.$add_keyword;
	}

	//post detail
	public function view($slug)
	{
		//get post detail
		$data['post'] = Post::where('slugtitle', '=', $slug)->firstOrFail();
		//potong setiap keywords
		$data['keywords'] = explode(",",$data['post']['keywords']);
		//related post
		$data['related_posts'] = Post::where('drama_id','=',$data['post']['drama_id'])
								->where('id','!=',$data['post']['id'])->orderBy('id','DESC')
								->take(5)->get();
		//get link sub&vid dr post
		$data['sub'] = $data['post']->links()->where('name','=','subtitle')->first();
		$data['vid'] = $data['post']->links()->where('name','=','dailymotion')->first();

		//isi konten tengah
		$view = View::make('pages.post',$data);
		$this->layout->content = $view;

		//title, meta tags, meta desc
		$this->layout->title = "Koonema - Rumahnya Fans Drama Asia";
		$this->layout->description = "Koonema Rumahnya Drama Asia, tonton streaming drama korea, download subtitle indonesia drama korea, update drama korea terbaru,";
		$this->layout->keyword = "download subtitle indonesia,drama korea,drama terbaru,";
	}

	//posts yang dipunyai sebuah drama 
	public function drama($slug)
	{
		//ambil 9 posting terbaru by keyword
		$drama = Drama::where('slugtitle','=',$slug)->first();
		$data['posts'] = Post::where('drama_id','=',$drama['id'])->paginate(1);

		//isi konten tengah
		$view = View::make('pages.home',$data);
		$this->layout->content = $view;

		//title, meta tags, meta desc
		$this->layout->title = "Koonema - Search '".$slug."' - Rumahnya Fans Drama Asia";
		$this->layout->description = "Koonema Rumahnya Drama Asia, tonton streaming drama korea, download subtitle indonesia drama korea, update drama korea terbaru,";
		$this->layout->keyword = "download subtitle indonesia,drama korea,drama terbaru,";

		//tambahan keyword post pencarian
		$add_keyword = array();
		foreach ($data['posts'] as $post) {
			array_push($add_keyword, $post['title']);
		}
		$add_keyword = implode(",", $add_keyword);
		$this->layout->description = $this->layout->description.$add_keyword;
		$this->layout->keyword = $this->layout->keyword.$add_keyword;
	}

	public function error()
	{
		//isi konten tengah
		$view = View::make('errors.missing');
		$this->layout->content = $view;

		//title, meta tags, meta desc
		$this->layout->title = "Koonema - List Drama - Rumahnya Fans Drama Asia";
		$this->layout->description = "Koonema Rumahnya Drama Asia, tonton streaming drama korea, download subtitle indonesia drama korea, update drama korea terbaru,";
		$this->layout->keyword = "download subtitle indonesia,drama korea,drama terbaru,";
	}


}
