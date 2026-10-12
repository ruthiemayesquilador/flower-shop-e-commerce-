<?php

namespace App\Controllers;

use App\Models\Order_model;

class Order extends BaseController
{
    public function __construct()
    {
        $this->OrderModel = new Order_model();
    }

    public function index()
    {
        $data['order_info'] = $this->OrderModel->getOrderInfo();
        echo view('template/flower', $data);
        $data['Title'] = 'flower_Ordering Title';
    }

    public function login()
    {
        $data['order_info'] = $this->OrderModel->getOrderInfo();
        echo view('order/login', $data);
    }
    

    public function order()
    {
        $data['order_info'] = $this->OrderModel->getOrderInfo();
        $data['Title'] = 'flower_Ordering Title';
        $data['Header'] = 'This is the new header';
        echo view('order/index', $data);
    }

    public function addRecord()
    {

        if ($this->request->getMethod() == "post") {
            $validation = \Config\Services::validation();

            $rules = [
                "txtFullName" => [
                    "label" => "Full Name",
                    "rules" => "required"
                ],
                "txtContactNumber" => [
                    "label" => "Contact Number",
                    "rules" => "required"
                ],
                "txtEmail" => [
                    "label" => "Email",
                    "rules" => "required|valid_email"
                ],
                "txtAddress" => [
                    "label" => "Address",
                    "rules" => "required"
                ],
                "txtOrders" => [
                    "label" => "Orders",
                    "rules" => "required"
                ],
                "txtPrice" => [
                    "label" => "Price",
                    "rules" => "required"
                ],
                "txtOrderDate" => [
                    "label" => "Order Date",
                    "rules" => "required"
                ],
                "txtOrderTime" => [
                    "label" => "Order Time",
                    "rules" => "required"
                ],
            ];

            if ($this->validate($rules)) {

                $postdata = array(
                    "full_name" => $this->request->getVar("txtFullName"),
                    "contact_number" => $this->request->getVar("txtContactNumber"),
                    "email" => $this->request->getVar("txtEmail"),
                    "address" => $this->request->getVar("txtAddress"),
                    "orders" => $this->request->getVar("txtOrders"),
                    "price" => $this->request->getVar("txtPrice"),
                    "order_date" => $this->request->getVar("txtOrderDate"),
                    "order_time" => $this->request->getVar("txtOrderTime"),
                );
                $result = $this->OrderModel->insertOrderRecord($postdata);

                if ($result == 1)
                    return redirect()->to('Order');
            } else {
                $data["validation"] = $validation->getErrors();
            }
        }

        $data['Title'] = 'flower_Ordering Title';
        $data['Header'] = 'This is the new header';
        echo view('order/addRecord', $data);
    }


    public function editRecord($id)
    {
        $data['order_info'] = $this->OrderModel->getOrderInfoById($id);

        if ($this->request->getMethod() == "post") {
            $validation = \Config\Services::validation();

            $rules = [
                "txtFullName" => [
                    "label" => "Full Name",
                    "rules" => "required"
                ],
                "txtContactNumber" => [
                    "label" => "Contact Number",
                    "rules" => "required"
                ],
                "txtEmail" => [
                    "label" => "Email",
                    "rules" => "required|valid_email"
                ],
                "txtAddress" => [
                    "label" => "Address",
                    "rules" => "required"
                ],
                "txtOrders" => [
                    "label" => "Orders",
                    "rules" => "required"
                ],
                "txtPrice" => [
                    "label" => "Price",
                    "rules" => "required"
                ],
                "txtOrderDate" => [
                    "label" => "Order Date",
                    "rules" => "required"
                ],
                "txtOrderTime" => [
                    "label" => "Order Time",
                    "rules" => "required"
                ],
            ];
            

            if ($this->validate($rules)) {

                $postdata = array(
                    "full_name" => $this->request->getVar("txtFullName"),
                    "contact_number" => $this->request->getVar("txtContactNumber"),
                    "email" => $this->request->getVar("txtEmail"),
                    "address" => $this->request->getVar("txtAddress"),
                    "orders" => $this->request->getVar("txtOrders"),
                    "price" => $this->request->getVar("txtPrice"),
                    "order_date" => $this->request->getVar("txtOrderDate"),
                    "order_time" => $this->request->getVar("txtOrderTime"),
                );
                
                $result = $this->OrderModel->updateOrderRecord($id, $postdata);


                if ($result == 1)
                    return redirect()->to('Order');
            } else {
                $data["validation"] = $validation->getErrors();
            }
        }

        $data['Title'] = 'flower_Ordering Title';
        $data['Header'] = 'This is the new Header';
        echo view('order/editRecord', $data);
    }

    public function deleteRecord($id)
    {
        $result = $this->OrderModel->deleteOrderRecord($id);

        if ($result == 1)
            return redirect()->to('Order');
    }
}
