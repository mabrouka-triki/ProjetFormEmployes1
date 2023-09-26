<?php

namespace App\Http\Controllers;


use App\dao\ServiceEmploye;
use App\Exceptions\MonException;
use App\Http\Controllers\Exception;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;


class EmployeControleur extends Controller
{
    public function postAjouterEmploye()
    {

        try {
            $civilite = Request::input("civilite");
            $prenom = Request::input("prenom");
            $nom = Request::input("nom");
            $pwd = Request::input("passe");
            $profil = Request::input("profil");
            $interet = Request::input("interet");
            $message = Request::input("le-message");

            $unEmployeService = new ServiceEmploye();
            $unEmployeService->ajoutEmploye($civilite, $prenom, $nom, $pwd, $profil, $interet, $message);

            return view("home");
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }

    }
    public function listerEmployes(){
        $unEmployeService = new ServiceEmploye();
        try {
            $mesEmployes = $unEmployeService->getListeEmployes();




        }catch (\App\Exceptions\MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        } catch (Exception $e){
            $monErreur=$e->getMessage();
            return view('vues\error', compact('monErreur'));
        }
        return view('vues/formEmployeLister', compact('mesEmployes'));
    }

    public function postmodificationEmploye($id = null)
    {
        $code = $id;
        $civilite = \Input::input("civilite");
        $nom = \Input::input("nom");
        $prenom = \Input::input("prenom");
        $passe = \Input::input("passe");
        $profil = \Input::input("profil");
        $interet = \Input::input("interet");
        $message = \Input::input("Le-message");

        try {
            $SunEmployeService = new ServiceEmploye();
            $SunEmployeService->modificationEmploye($id, $civilite, $nom, $prenom, $passe, $profil, $interet, $message);
            return view('home');
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
    }
    public function modifier($id)
    {
        try {
            $unEmployeService = new ServiceEmploye();
            $unEmploye = $unEmployeService->getEmploye($id);

            return view('vues/formEmployeModifier', compact('unEmploye'));

        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
    }

}
