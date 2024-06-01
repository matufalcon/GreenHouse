<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Usuario extends Controller
{
    public function __construct()
    {
        helper(['form']);
    }

    public function createLogin()
    {
        helper(['form', 'url']);
        echo view('header');
        echo view('navbar');
        echo view('login');
        echo view('footer'); 
    }

    public function createRegister()
    {
        helper(['form', 'url']);
        echo view('header');
        echo view('navbar');
        echo view('register');
        echo view('footer'); 
    }

    public function login()
    {
        $session = session();
        $model   = new UsuarioModel();
        $usuario = $this->request->getVar('usuario'); 
        $pass    = $this->request->getVar('contraseña');
        $data    = $model->where('usuario', $usuario)->first(); 
        if($data){
            $modelo      = $data['contraseña'];
            $verify_pass = password_verify($pass, $modelo);
            if($verify_pass){
                $ses_data = [
                    'id'        => $data['usuario-id'],
                    'nombre'    => $data['nombre'],
                    'apellido'  => $data['apellido'],
                    'email'     => $data['email'],
                    'usuario'   => $data['usuario'],
                    'tipoUsuario-id' => $data['tipoUsuario-id'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(base_url());
            }else{
               $session->setFlashdata('msg', 'Contraseña incorrecta'); 
               echo view('header');
               echo view('navbar');
               echo view('login');
               echo view('footer'); 
            }
        }else{
            $session->setFlashdata("msg", 'Usuario no encontrado');
            echo view('header');
            echo view('navbar');
            echo view('login');
            echo view('footer'); 
        }
    }

    public function register()
    {
        // Validar los datos del formulario
        $rules = $this->validate([
            'nombre'     => 'required|min_length[3]|max_length[20]',
            'apellido'   => 'required|min_length[3]|max_length[20]',
            'email'      => 'required|valid_email|is_unique[usuarios.email]',
            'usuario'    => 'required|min_length[5]|max_length[15]',
            'contraseña' => 'required|min_length[8]',
            'password_confirm' => 'required|matches[contraseña]'
        ]);
    
        if ($rules) {
            // Los datos del formulario son válidos, proceder con el registro
            $model = new UsuarioModel();
    
            $newData = [
                'nombre'     => $this->request->getVar('nombre'),
                'apellido'   => $this->request->getVar('apellido'),
                'email'      => $this->request->getVar('email'),
                'usuario'    => $this->request->getVar('usuario'),
                'contraseña' => password_hash($this->request->getVar('contraseña'), PASSWORD_DEFAULT),
                'tipoUsuario-id' => 2 
            ];
    
            $model->save($newData);
            return redirect()->to(base_url().'login');
        } else {
            // Mostrar mensajes de validación en caso de errores
            $data['validation'] = $this->validator;
        }

        echo view('header');
        echo view('navbar');
        echo view('register', $data);
        echo view('footer');     
    }
    

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url());
    }
}
