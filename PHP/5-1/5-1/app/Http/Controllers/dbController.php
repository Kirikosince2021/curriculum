<?php

namespace App\Http\Controllers;
use App\Models\MainModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class dbController extends Controller
{
    public function index(Request $request) {
        $dataList = MainModel::all();
        return view('main',['dataList' => $dataList]);
    }
    public function input(Request $request) {
        $this->validate($request, MainModel::$rules);
        $mainModel = new MainModel;
        $form = $request->all();
        $form['user_id'] = Auth::user()->name;
        unset($form['_token']);
        $mainModel->fill($form)->save();
        return redirect('/main');
    }
    public function delete(Request $request) {
        MainModel::find($request->id)->delete();
        return redirect('/main');
    }
}
