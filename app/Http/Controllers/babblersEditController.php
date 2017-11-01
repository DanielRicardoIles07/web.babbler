<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use DB;


class babblersEditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){

        
        
        return view('babblers/completar_perfil');
    }
    
    public function store(DevelopersFormRequest $request){
        $user = Auth::user()->id;
        $babblers=Developersmodel::findOrFail($user);
            if (Input::hasFile('perfil')){
                $file=Input::file('perfil');
                $file->move(public_path().'/fotos_cuenta/',$file->getClientOriginalName());
                $babblers->photo_perfil=$file->getClientOriginalName();
            }
            if (Input::hasFile('portada')){
                $file=Input::file('portada');
                $file->move(public_path().'/fotos_cuenta/',$file->getClientOriginalName());
                $babblers->photo_portada=$file->getClientOriginalName();
            }
        $babblers->name = $request->get('names');
        $babblers->info_add = $request->get('info_add');
        $babblers->study_at = $request->get('study_at');
        $babblers->direction_study = $request->get('direction_study');
        $babblers->work_at = $request->get('work_at');
        $babblers->direction_work = $request->get('direction_work');
        $babblers->live_at = $request->get('live_at');
        $babblers->direction_live = $request->get('direction_live');
        $babblers->from_at = $request->get('from_at');
        $babblers->direction_from = $request->get('direction_from');
        $babblers->update();
    return Redirect()->back();
    
    }
}
