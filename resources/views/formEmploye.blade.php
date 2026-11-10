@extends("layouts.master")

@section('content')
    <form method="POST" action="{{url('/validerEmploye')}}">
        {{csrf_field()}}

        <h1>Ajout d'un employé</h1>
        <div class="col-md-12 card card-body bg-light">
            <div class="form-group">
                <label class="col-md-3">Civilité</label>
                <div class="col-md-6">
                    <p><input type="radio" name="civi" value="Mme">Madame</p>
                    <p><input type="radio" name="civi" value="M">Monsieur</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3">Nom : </label>
                <div class="col-md-6">
                    <input type="text" name="nom" value="" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-6">Prénom : </label>
                <div class="col-md-6">
                    <input type="text" name="prenom" value="" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3">Mot de passe : </label>
                <div class="col-md-6">
                    <input type="password" name="mdp" value="" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-6">Profil : Vous êtes</label>
                <div class="col-md-6">
                    <select class="form-select" name="profil">
                        <option value="parti">Un particulier</option>
                        <option value="profe" selected>Un professionnel</option>
                        <option value="insti">Un institutionnel</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-6">Quel type de présentation recherchez vous?</label>
                <div class="col-md-6">
                    <p><input type="checkbox" name="interet" value="localtion"/>Location de mobilier</p>
                    <p><input type="checkbox" name="interet" value="achat"/>Achat de mobilier</p>
                </div>
            </div>
        <div class="form-group">
            <div class="col-md-12 col-md-offset-3">
                <button type="submit" class="btn btn-primary">
                    Valider
                </button>
                <button type="button" class="btn btn-secondary"
                        onclick="if (confirm('Annuler la saisie ?')) window.location='{{url('/')}}';">
                    Annuler
                </button>
            </div>
        </div>
        </div>
    </form>

@endsection
