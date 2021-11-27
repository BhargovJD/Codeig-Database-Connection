## Database Connection and Display Data

1.  Make connection in app/Config/Database.php file
        'username' => 'root',
        'database' => 'ci_crud',

2.  Make a model to connect a table(employees)
    EmpModel:

            <?php
            namespace App\Models;
            use CodeIgniter\Model;

            class EmpModel extends Model{
            protected $table = 'employees';
            function getAll(){
            return $this->findAll();
            }
            }

            ?>

3.  Make a Controller to work on Model
    EmpController:

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

4.  View
    emp_page.php:

        <h1>Emp page</h1>
        <?php
        echo'<pre>';
        print_r($employess);
        ?>

5.  Routes
    Routes.php:
        $routes->get('/emp', 'EmpController::display');
