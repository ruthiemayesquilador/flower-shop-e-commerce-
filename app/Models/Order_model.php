<?php
namespace App\Models;
use CodeIgniter\Model;

class Order_model extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $allowedFields = ['full_name', 'contact_number', 'email', 'address','orders','price', 'order_date', 'order_time'];

    function getOrderInfo(){
        return $this->findAll();
    }

    function getOrderInfoById($id){
        return $this->find($id);
    }

    function insertOrderRecord($data){
        return $this->insert($data);
    }

    function updateOrderRecord($id, $data){
        return $this->update($id, $data);
    }
    
    

    function deleteOrderRecord($id){
        return $this->delete($id);
    }
}
