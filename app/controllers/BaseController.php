<?php

class BaseController extends Controller {

	protected $currentUser;

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	protected function currentUser()
	{
		if (! $this->currentUser) {
            $this->currentUser = Auth::user();
        }

        return $this->currentUser;
	}

}
