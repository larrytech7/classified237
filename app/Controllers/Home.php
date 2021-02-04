<?php namespace App\Controllers;

use CodeIgniter\I18n\Time;

class Home extends BaseController
{
	public function __construct(){
        $this->title = 'Ads Classified';
    }

	public function index()
	{
        //@todo Get some random sponsored products to display
		return $this->view('home', ['page' => 'Home']);
	}

    /**
     * List all products paginated
     */
    public function products(){
        $page = $this->request->getGet('page');
        $size = $this->request->getGet('size');
    }

    public function product($id){
        $last_seen = new Time("-2 hours");
        $now = new Time('now', 'Africa/Douala');
        $diff = $now->difference($last_seen)->humanize();
        //get merchant's registered date
        $memberSignupDate = Time::parse(date('Y-m-d'))->getTimestamp();

        return $this->view('product_detail',
            [
                'page' => lang('app.app_product_detail_text', ['Iphone 11 Pro Max 256GB']),
                'last_seen' => lang('app.app_last_seen', [$diff]),
                'member_signup_date' => $memberSignupDate
            ]
        );
    }

    public function about(){
        return $this->view('about', ['page' => lang('app.app_about_text')]);
    }

	//--------------------------------------------------------------------

}
