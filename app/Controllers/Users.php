<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User;

class Users extends Controller{
    /** 
     * @var HTTP\IncomingRequest
    */
    protected $request;

    public function index(){
        $user = new User();
        $data['users'] = $user->orderBy('id','ASC')->findAll();
        $data['header']= view('template/header');
        $data['footer']= view('template/footer');

        return view('users/list', $data);
    }
    public function create(){
        $data['header']= view('template/header');
        $data['footer']= view('template/footer');
        return view('users/create', $data);
    }
    public function save(){
        $user = new User();
        $data = [
            'id' => $this->request->getVar('id'),
            'grado' => $this->request->getVar('grado'),
            'nombre' => $this->request->getVar('nombre'),
            'apellido_paterno' => $this->request->getVar('apellido_paterno'),
            'apellido_materno' => $this->request->getVar('apellido_materno'),
            'cumpleanos' => $this->request->getVar('cumpleanos'),
            'cargo' => $this->request->getVar('cargo'),
            'tipo' => $this->request->getVar('tipo'),
            'daua' => $this->request->getVar('daua'),
            'tel_cel_1' => $this->request->getVar('tel_cel_1'),
            'tel_cel_1_whats' => $this->request->getVar('tel_cel_1_whats'),
            'tel_cel_2' => $this->request->getVar('tel_cel_2'),
            'tel_cel_2_whats' => $this->request->getVar('tel_cel_2_whats'),
            'tel_casa' => $this->request->getVar('tel_casa'),
            'tel_oficina' => $this->request->getVar('tel_oficina'),
            'extension' => $this->request->getVar('extension'),
            'correo_institucional' => $this->request->getVar('correo_institucional'),
            'correo_personal' => $this->request->getVar('correo_personal'),
            'comision' => $this->request->getVar('comision'),
            'protesta' => $this->request->getVar('protesta'),
            'consejero_asociado' => $this->request->getVar('consejero_asociado'),
            'activo' => $this->request->getVar('activo'),
            'foto' => $this->request->getVar('foto')
        ];
        $user->insert($data);
        echo "Ingresado correctamente";
        return $this->response->redirect(site_url('/listar'));
    }
    public function delete($id=null){
        $user = new User();
        $user->where('id', $id)->delete($id);
        
        return $this->response->redirect(site_url('/listar'));
    }
    public function edit($id=null){
        $user = new User();
        $data['user']=$user->where('id', $id)->first();

        $data['header']= view('template/header');
        $data['footer']= view('template/footer');

        return view('users/edit', $data);
    }
    public function update(){
        $user = new User();
        $data = [
            'id' => $this->request->getVar('id'),
            'grado' => $this->request->getVar('grado'),
            'nombre' => $this->request->getVar('nombre'),
            'apellido_paterno' => $this->request->getVar('apellido_paterno'),
            'apellido_materno' => $this->request->getVar('apellido_materno'),
            'cumpleanos' => $this->request->getVar('cumpleanos'),
            'cargo' => $this->request->getVar('cargo'),
            'tipo' => $this->request->getVar('tipo'),
            'daua' => $this->request->getVar('daua'),
            'tel_cel_1' => $this->request->getVar('tel_cel_1'),
            'tel_cel_1_whats' => $this->request->getVar('tel_cel_1_whats'),
            'tel_cel_2' => $this->request->getVar('tel_cel_2'),
            'tel_cel_2_whats' => $this->request->getVar('tel_cel_2_whats'),
            'tel_casa' => $this->request->getVar('tel_casa'),
            'tel_oficina' => $this->request->getVar('tel_oficina'),
            'extension' => $this->request->getVar('extension'),
            'correo_institucional' => $this->request->getVar('correo_institucional'),
            'correo_personal' => $this->request->getVar('correo_personal'),
            'comision' => $this->request->getVar('comision'),
            'protesta' => $this->request->getVar('protesta'),
            'consejero_asociado' => $this->request->getVar('consejero_asociado'),
            'activo' => $this->request->getVar('activo'),
            'foto' => $this->request->getVar('foto')
        ];
        $id = $this->request->getVar('id');
        $user->update($id, $data);

        return $this->response->redirect(site_url('/listar'));
    }
}  