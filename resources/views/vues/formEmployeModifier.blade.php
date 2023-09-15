@extends('layouts.master')
@section('content')
    <di>

        <br> <br>
        <br> <br>
        <div class="blanc"></div>
        <h1> Modification d'un employé</h1>
    </di>
    <div class="well">
    {!! Form ::open(array('route'=> array('postmodifierEmploye',$unEmploye->numEmp),'methode' => 'post'))!!}
        <div class="col-md-12 col-sm-12 well well-md">
            <center><h1> </h1></center>
            <div class="form_horizontal">
                <div class="form-group">
            </div>
            </div>


            <label class="col-md-3 col-sm-3 control-label">Civilité</label>
            <div class="col-md-2 col-sm-2">
                <input type="radio" name="civilite" value="Mme" @if ($unEmploye->civilite == "Mme") checked="checked" @endif />
                Madame
            </div>
            <div class="col-md-2 col-sm-2">
                <input type="radio" name="civilite" value="Mlle" @if ($unEmploye->civilite == "Mlle") checked="checked" @endif />
                Mademoiselle
            </div>
            <div class="col-md-2 col-sm-2">
                <input type="radio" name="civilite" value="Mr" @if ($unEmploye->civilite == "Mr") checked="checked" @endif />
                Monsieur
            </div>





            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Nom :</label>
                <div class="col-md-2 col-sm-2">
                    <input type="text" name="nom" value="{{ $unEmploye->nom }}" class="form-control" required />
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Prénom :</label>
                <div class="col-md-2 col-sm-2">
                    <input type="text" name="prenom" value="{{ $unEmploye->prenom }}" class="form-control" required />
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Mot de passe :</label>
                <div class="col-md-2 col-sm-2">
                    <input type="password" name="passe" value="{{ $unEmploye->passe }}" class="form-control" required />
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 col-sm-2 control-label">
                    Vous êtes
                </label>
                <div class="col-md-3 col-sm-3">
                    Profil :
                </div>
                <div class="col-md-7 col-sm-7">
                    <select name="profil">
                        @if ($SunEmploye->profil == 'parti')
                            <option value="parti" selected="selected">Un particulier</option>
                        @else
                            <option value="parti">Un particulier</option>
                        @endif
                        @if ($SunEmploye->profil == 'profe')
                            <option value="profe" selected="selected">Un professionnel</option>
                        @else
                            <option value="profe">Un professionnel</option>
                        @endif
                        @if ($SunEmploye->profil == 'insti')
                            <option value="insti" selected="selected">Un institutionnel</option>
                        @else
                            <option value="insti">Un institutionnel</option>
                        @endif
                    </select>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Quel type de prestation recherchez-vous ?</label>
                <div class="col-md-3 col-sm-3">
                    @if ($SunEmploye->interet == 'loc')
                        <input type="checkbox" name="interet" value="loc" checked="checked" /> Location de mobilier
                    @else
                        <input type="checkbox" name="interet" value="loc" /> Location de mobilier
                    @endif
                </div>
                <div class="col-md-3 col-sm-3">
                    @if ($SunEmploye->interet == 'achat')
                        <input type="checkbox" name="interet" value="achat" checked="checked" /> Achat de mobilier
                    @else
                        <input type="checkbox" name="interet" value="achat" /> Achat de mobilier
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Votre message :</label>
                <div class="col-md-3 col-sm-3">
                    <p>
                        <textarea name="le-message" rows="6" cols="40">{{ $SunEmploye->message or '' }}</textarea>
                    </p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                    <button type="submit" class="btn btn-default btn-primary">
                        <span class="glyphicon glyphicon-ok"></span> Valider
                    </button>
                    &nbsp;
                    <button type="button" class="btn btn-default btn-primary" onclick="javascript:if (confirm('Vous êtes sûr ?'))
                        window.location = '{{ url('/') }}'">
                        <span class="glyphicon glyphicon-remove"></span> Annuler </button>

                </div>
            </div>

        </div>

        </div>
    </div>
