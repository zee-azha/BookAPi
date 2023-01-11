<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Subject;

class ContactController extends ResourceController
{
    public function index()
    {
        $model = new Subject();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
    // mendapatkan data tertentu
    public function show($title = null)
    {
        $model = new Subject();
        $data = $model->getWhere(['title' => $title])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Data Found with title '.$title);
        }
    }
    // create a book
    public function create()
    {
        $model = new Subject();
        $data = [
            'title' => $this->request->getPost('title'),
            'year' => $this->request->getPost('year'),
            'author' => $this->request->getPost('author'),
            'publisher' => $this->request->getPost('publisher'),
            'status' => $this->request->getPost('status'),
            'price' => $this->request->getPost('price')
        ];
        $model->insert($data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'Data Saved'
            ]
        ];
        return $this->respondCreated($response);
    }
    // update Book
    public function update($id = null)
    {
        $model = new Subject();
        $json = $this->request->getJSON();
        if($json){
            $data = [
                'title' => $json->title,
                'year' => $json->year,
                'author' => $json->author,
                'publisher' => $json->publisher,
                'status' => $json->status,
                'price' => $json->price
            ];
        }else{
            $input = $this->request->getRawInput();
            $data = [
                'title' => $input['title'],
                'year' => $input['year'],
                'author' => $input['author'],
                'publisher' => $input['publisher'],
                'status' => $input['status'],
                'price' => $input['price']
            ];
        }
    // update ke Database
        $model->update($id, $data);
        $response = [
            'status' => 200,
            'error' => null,
            'messages' => [
            'success' => 'Data Updated'
            ]
        ];
        return $this->respond($response);
    }
// delete subject
        public function delete($id = null)
        {
            $model = new Subject();
            $data = $model->find($id);
            if($data){
                $model->delete($id);
                $response = [
                    'status' => 200,
                    'error' => null,
                    'messages' => [
                    'success' => 'Data Deleted'
                    ]
                ];
                return $this->respondDeleted($response);
            }else{
                return $this->failNotFound('No Data Found with id '.$id);
            }
        }


}
