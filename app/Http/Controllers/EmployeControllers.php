<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Services\EmployeService;
use Illuminate\Http\Request;

class EmployeControllers extends Controller
{
    public function listEmployes() {
        $service = new EmployeService();
        $employes = $service->getListEmployes();
        return view('listEmployes',compact('employes'));
    }
    public function addEmploye() {
        $employe = new Employe();
        return view('formEmploye', compact('employe'));
    }
    public function validEmploye(Request $request)
    {
        $id = $request->input('id');
        if($id)
        {
            $service = new EmployeService();
            $employe = $service->getEmploye($id);
        }
        else
        {
            $employe = new Employe();
        }

        $employe->civilite = $request->input('civil');
        $employe->prenom = $request->input('prenom');
        $employe->nom = $request->input('nom');
        $pwd = $request->input('mdp');
        if(strlen($pwd) > 0)
        {
            $employe->pwd = password_hash($request->input('mdp'), PASSWORD_DEFAULT);
        }
        $employe->profil = $request->input('profil');
        $employe->interet = $request->input('interet');
        $employe->message = $request->input('msg');

        $service->saveEmploye($employe);

        return view('home');
    }

    public function editEmploye($id) {
        $service = new EmployeService();
        $employe = $service->getEmploye($id);
        return view('formEmploye',compact('employe'));
    }

}
