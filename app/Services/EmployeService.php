<?php

namespace App\Services;
use App\Models\Employe;
class EmployeService
{
    public function getListEmployes() {
        $liste = Employe::query()->select()->orderBy('nom')->get();
        return $liste;
    }

    public function saveEmploye(Employe $employe)
    {
        $employe->save();
    }
}
