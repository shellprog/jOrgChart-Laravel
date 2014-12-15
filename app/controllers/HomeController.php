<?php

class HomeController extends BaseController {

	public function index()
	{

        $jorg = new KodeInfo\JOrgChart();
        $response = $jorg->getChart(1);

		return View::make('index',['tree'=>$response['tree_string']]);
	}

}
