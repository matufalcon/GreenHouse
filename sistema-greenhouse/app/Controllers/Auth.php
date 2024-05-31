<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function __construct()
    {
        helper(['form']);
        $this->session = session();
    }

    public function login()
    {
        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == 'POST') {
            // Reglas de validación
            $rules = [
                'email'    => 'required|valid_email',
                'contraseña' => 'required|min_length[8]',
            ];

            if ($this->validate($rules)) {
                $model = new UsuarioModel();
                $user = $model->where('email', $this->request->getVar('email'))->first();

                if ($user && password_verify($this->request->getVar('contraseña'), $user['contraseña'])) {
                    $this->session->set([
                        'userId' => $user['usuario-id'],
                        'userName' => $user['nombre'],
                        'userSurname' => $user['apellido'],
                        'userTel' => $user['telefono'],
                        'userEmail' => $user['email'],
                        'isLoggedIn' => true,
                    ]);
                    return redirect()->to(base_url());
                } else {
                    $data['validation'] = 'Email o contraseña incorrectos.';
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }
        echo view('header');
        echo view('navbar');
        echo view('login', $data);
        echo view('footer'); 
    }

    public function register()
    {
        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == 'POST') {
            // Reglas de validación
            $rules = [
                'nombre'     => 'required|min_length[3]|max_length[20]',
                'apellido'   => 'required|min_length[3]|max_length[20]',
                'telefono'   => 'required|min_length[10]|max_length[15]',
                'email'      => 'required|valid_email|is_unique[usuarios.email]',
                'contraseña' => 'required|min_length[8]',
                'password_confirm' => 'matches[contraseña]',
            ];

            if ($this->validate($rules)) {
                $model = new UsuarioModel();

                $newData = [
                    'nombre'     => $this->request->getVar('nombre'),
                    'apellido'   => $this->request->getVar('apellido'),
                    'telefono'   => $this->request->getVar('telefono'),
                    'email'      => $this->request->getVar('email'),
                    'contraseña' => password_hash($this->request->getVar('contraseña'), PASSWORD_DEFAULT),
                    'tipoUsuario-id' => 1 // Asumiendo que 1 es el tipo de usuario estándar
                ];

                $model->save($newData);
                return redirect()->to(base_url().'login');
            } else {
                $data['validation'] = $this->validator;
            }
        }
        echo view('header');
        echo view('navbar');
        echo view('register', $data);
        echo view('footer');     
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url());
    }
}
