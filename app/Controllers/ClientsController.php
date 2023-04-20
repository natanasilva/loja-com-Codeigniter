<?php

namespace App\Controllers;

use App\Libraries\Datatables; // Datatables
use App\Controllers\LoginController;
use App\Models\ClientsModel;

class ClientsController extends BaseController
{
    
    private $model;
    
    public function __construct()
    {
        $this->model = new ClientsModel();
    }

    public function listClients()
    {
        
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

        $data['title'] = "Lista de Clientes";
        $data['result'] = $this->model->find();

        # Carregamento da view...
        echo $this->load("clients", "list", $data);    
    
    
    }

    public function editClient($id)
    {
        # Verifica se existe alguem logado
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }
        
        $data['title'] = "Edição de Cliente";
        $data['result'] = $this->model->find($id);        
        echo $this->load("clients", "update", $data); 
    }

    public function insertClient(){

        # Verifica se existe alguem logado
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }

        //return view("products/insert");
        $data['title'] = "Inserção de Cliente";
       
        # Carregamento da view...
        echo $this->load("clients", "insert", $data); 
    }

    public function save(){

        $request = \Config\Services::request();

        $data = $request->getPost();

        //var_dump($data);
        $this->model->save($data);

        $this->setMessage("success", "Cliente inserido/atualizado com sucesso!"); 

        return redirect()->to('clientes/lista');

    }

    public function deleteClient(){

        # Verifica se existe alguem logado
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }
        
        $request = \Config\Services::request();
        $data = $request->getPost();
        //$id = $data['id'];
        $this->model->delete($data['id']);
        $this->setMessage("success", "Cliente excluído com sucesso!"); 
        return redirect()->to('clientes/lista');
    }

}


