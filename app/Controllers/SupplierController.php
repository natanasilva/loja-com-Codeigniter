<?php

namespace App\Controllers;

use App\Libraries\Datatables; // Datatables
use App\Controllers\LoginController;
use App\Models\SupplierModel;

class SupplierController extends BaseController
{
    
    private $model;
    
    public function __construct()
    {
        $this->model = new SupplierModel();
    }

    public function listSuppliers()
    {
        //$data['result'] = $this->model->find();        
        //return view('products/list', $data);
        
        # Verifica se existe alguem logado
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }
       	
        # Objetos criados para o controlador atual
        $datatable = new DataTables();

                
        # Rendereização dos escripts de JS E CSS
        $this->setJs($datatable->render()['js']);
        $this->setCss($datatable->render()['css']);
        $this->setJs(base_url() . "/public/services/example/index.js");

        $data['title'] = "Lista de Fornecedores";
        $data['result'] = $this->model->find();

        # Carregamento da view...
        echo $this->load("suppliers", "list", $data);    
    
    
    }

    public function editSupplier($id)
    {
        # Verifica se existe alguem logado
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }

        $data['title'] = "Edição de Fornecedores";
        $data['result'] = $this->model->find($id);        
        echo $this->load("suppliers", "update", $data); 
    }

    public function insertSupplier(){

        # Verifica se existe alguem logado
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }
        //return view("products/insert");
        $data['title'] = "Inserção de Fornecedores";
       
        # Carregamento da view...
        echo $this->load("suppliers", "insert", $data); 
    }

    public function save(){

        $request = \Config\Services::request();

        $data = $request->getPost();

        //var_dump($data);
        $this->model->save($data);

        $this->setMessage("success", "Fornecedor inserido/atualizado com sucesso!"); 

        return redirect()->to('fornecedores/lista');

    }

    public function deleteSupplier(){

        # Verifica se existe alguem logado
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }
        
        $request = \Config\Services::request();
        $data = $request->getPost();
        //$id = $data['id'];
        $this->model->delete($data['id']);
        $this->setMessage("success", "Fornecedor excluído com sucesso!"); 
        return redirect()->to('fornecedores/lista');
    }

}


