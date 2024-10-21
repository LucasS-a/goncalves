<?php
namespace App\Controllers;

use App\DB\Models\User as userModel;

use function App\helpers\redirect;

class User
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new userModel;
    }

    public function update($request, $response, $arg)
    {        
        $userDatas = $request->getParsedBody();

        $this->userModel->update('id', $arg['id'], $userDatas);

        return redirect($response, '/admin/users');
    }

    public function insert($request, $response, $arg)
    {
        $userDatas = $request->getParsedBody();

        $this->userModel->create($userDatas);

        return redirect($response, '/admin/users');
    }

    public function delete($request, $response, $arg)
    {
        $this->userModel->delete(['id' => $arg['id']]);

        return redirect($response, '/admin/users');
    }


}