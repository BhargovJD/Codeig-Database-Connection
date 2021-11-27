<?php

namespace App\Controllers;
use App\Models\EmpModel;

class EmpController extends BaseController
{
    public function display()
    {
        $model = new EmpModel();
        $data['employess']=$model->getAll();
        return view('emp_page.php',$data);
    }
}
