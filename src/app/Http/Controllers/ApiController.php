<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;



abstract class ApiController
{
    protected $model;

    public function get(Request $request)
    {
        $limit = (int) $request->get('limit', 100);
		$offset = (int) $request->get('offset', 0);
        $result = $this->model->limit($limit)->offset($offset)->get();
        return $this->sendResponse($result, 'OK',200);

    }

    public function detail(string $objectName = null)    
    {

    }

    public function update()
    {
    }
    public function delete()
    {
    }
    public function create()
    {
    }
}
