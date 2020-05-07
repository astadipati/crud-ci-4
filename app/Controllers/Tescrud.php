<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_barang;

class Tescrud extends BaseController
{
	public function index()
	{
        $data['title'] = "Judule";
        $model = new M_barang();
        $data['product'] = $model->getProduct();
		return view('tes_view', $data);
	}

}
