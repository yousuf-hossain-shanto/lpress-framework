<?php

if (! function_exists('view')) {

	function view( $view, $data = array(), $return = false )

	{

		$compilar = new App\Classes\View(DIR_VIEW, DIR_CACHE);

		if ($return) {
			return $compilar->view()->make($view, $data)->render();
		} else {
			echo $compilar->view()->make($view, $data)->render();
		}

		return;

	}
}