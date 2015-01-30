<?php

class BaseController extends Controller {

	#PUBLIC LAYOUT
	protected $layout = '_layouts.master';
	protected $meta = '_layouts.meta';
	protected $header = '_layouts.header';
	protected $sidebar = '_layouts.sidebar';
	protected $footer = '_layouts.footer';

	#ADMIN LAYOUT
	protected $layout_admin = 'admin._layouts.master';
	protected $meta_admin = 'admin._layouts.meta';
	protected $header_admin = 'admin._layouts.header';
	protected $sidebar_admin = 'admin._layouts.sidebar';
	protected $footer_admin = 'admin._layouts.footer';

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if(Route::getCurrentRoute()->getPrefix() == 'kiadmin')
		{
			if ( ! is_null($this->layout))
			{
				$this->layout = View::make($this->layout_admin);
				$this->layout->meta = View::make($this->meta_admin);
				$this->layout->meta->title = 'KiLaravel CMS'; 
				$this->layout->header = View::make($this->header_admin);
				$this->layout->sidebar = View::make($this->sidebar_admin);
				$this->layout->footer = View::make($this->footer_admin);
			}
		}
		else
		{
			if ( ! is_null($this->layout))
			{
				$this->layout = View::make($this->layout);
				$this->layout->meta = View::make($this->meta);
				$this->layout->meta->title = 'KiLaravel'; 
				$this->layout->header = View::make($this->header);
				$this->layout->sidebar = View::make($this->sidebar);
				$this->layout->footer = View::make($this->footer);
			}
		}
	}

}
