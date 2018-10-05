<?php
// esta bien uncluir editar, eliminar y agregar en este controller o va en admincontroller?

require_once 'Models/PastasModel.php';
require_once 'Models/UserModel.php';
require_once 'Views/PastaView.php';
require_once 'Views/HomeView.php';



class PastasController {
    
    public function ShowAllDb()
    {
        $pastasModel = new PastasModel();
        $pastas = $pastasModel->GetAllDb();
        $view = new ViewHome();
        $view->showHome($pastas);
    }


    public function showAllPasta (){
        $pastamodel = new PastasModel();
        $pastas = $pastamodel->getAllPastas();
        $view = new PastaView();
        $view->showAll($pastas);

    }

    public function ShowOne($id_pasta)
    {
        $pastamodel=new PastasModel();
        $pasta=$pastamodel->getOne($id_pasta);
        $view=new PastaView();
        $view->showOne($pasta);

    }

}




