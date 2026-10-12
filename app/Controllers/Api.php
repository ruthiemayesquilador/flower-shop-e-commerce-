<?php

namespace App\Controllers;

use App\Models\Order_model;

class Api extends BaseController
{
    public function __construct()
    {
        $this->OrderModel = new Order_model();
    }

    public function order($id = null)
    {
        $method = $this->request->getMethod();

        if ($method == 'get') {
            if ($id) {
                $order_info = $this->OrderModel->getOrderInfoById($id);
                $respData = [
                    'meta' => ['code' => 200, 'message' => 'Get Order Record'],
                    'data' => ['order_info' => $order_info],
                ];
            } else {
                $order_info = $this->OrderModel->getOrderInfo();

                $respData = [
                    'meta' => ['code' => 200, 'message' => 'Get Order Record'],
                    'data' => ['order_info' => $order_info],
                ];
            }
        } else if ($method == 'post') {
            $postData = $this->request->getPost();

            if ($postData) {
                // Validate POST data
                // ...

                $result = $this->OrderModel->insertOrderRecord($postData);
                if ($result) {
                    $respData = [
                        'meta' => ['code' => 200, 'message' => 'Order Record Successfully Inserted!'],
                        'data' => '',
                    ];
                } else {
                    $respData = [
                        'meta' => ['code' => 500, 'message' => 'Error inserting Order Record'],
                        'data' => '',
                    ];
                }
            } else {
                $respData = [
                    'meta' => ['code' => 301, 'message' => 'Bad request. Data is Required'],
                ];
            }
        } else if ($method == 'put') {
            $postData = $this->request->getRawInput();

            if ($postData) {
                // Validate POST data
                // ...

                $id = $postData['id'];
                unset($postData['id']);
                $result = $this->OrderModel->updateOrderRecord($id, $postData);
                if ($result) {
                    $respData = [
                        'meta' => ['code' => 200, 'message' => 'Order Record Successfully Updated!'],
                        'data' => '',
                    ];
                } else {
                    $respData = [
                        'meta' => ['code' => 500, 'message' => 'Error updating Order Record'],
                        'data' => '',
                    ];
                }
            } else {
                $respData = [
                    'meta' => ['code' => 301, 'message' => 'Bad request. Data is Required'],
                ];
            }
        } else if ($method == 'delete') {
            $postData = $this->request->getRawInput();

            if ($postData && isset($postData['id'])) {
                $id = $postData['id'];
                $result = $this->OrderModel->deleteOrderRecord($id);
                if ($result) {
                    $respData = [
                        'meta' => ['code' => 200, 'message' => 'Order Record Successfully Deleted!'],
                        'data' => '',
                    ];
                } else {
                    $respData = [
                        'meta' => ['code' => 500, 'message' => 'Error deleting Order Record'],
                        'data' => '',
                    ];
                }
            } else {
                $respData = [
                    'meta' => ['code' => 301, 'message' => 'Bad request. ID is Required'],
                ];
            }
        }

        return $this->response->setJSON($respData);
    }
}
