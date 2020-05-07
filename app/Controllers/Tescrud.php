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
    public function add_new()
    {
        echo view('add_barang');
    }
 
    public function save()
    {
        $model = new M_barang();
        $data = array(
            'product_name'  => $this->request->getPost('product_name'),
            'product_price' => $this->request->getPost('product_price'),
        );
        $model->saveProduct($data);
        return redirect()->to('/tescrud');
    }

}
