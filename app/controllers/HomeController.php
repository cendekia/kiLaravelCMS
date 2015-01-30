<?php

class HomeController extends BaseController {
#PUBLIC AREA
	
	/**
	 * Home page
	 * GET /pages
	 *
	 * @return Response
	 */

	public function index()
	{

		$this->layout->content = View::make('home.index');
	}


#END OF PUBLIC AREA


#ADMIN AREA

	/**
	 * Dashboard Admin
	 * GET /pages
	 *
	 * @return Response
	 */

	public function indexAdmin()
	{
		
		$this->layout->content = View::make('admin.home.index');
	}

#END OF ADMIN AREA
}
