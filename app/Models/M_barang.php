<?php namespace App\Models;
use CodeIgniter\Model;
 
class M_barang extends Model
{
    protected $table = 'product';
     
    public function getProduct($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['product_id' => $id]);
        }   
    }
 
}