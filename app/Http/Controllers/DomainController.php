<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DomainController extends Controller
{
    public function index(Request $request)
    {

        $flash = $request->session()->has('flash_message') ? $request->session()->get('flash_message') : null;
        $domains = DB::table('domains')->get();

        return view('domains.index', compact('domains', 'flash'));
    }

    public function show($id)
    {
        $domain = DB::table('domains')->find($id);
        return view('domains.show', compact('domain'));
    }

    public function store(Request $request)
    {
        $name = parse_url($request->domain['name'])['host'];
        $request->session()->flash('flash_message', ['message' => "Второй раз добавить домен {$name} невозможно", 'class' => 'alert-danger']);
        $isDomain = DB::table('domains')->where('name', $name)->first() ? true : false;

        if (!$isDomain) {
            DB::table('domains')->insert(
                [
                    'name' =>  $name,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]
            );
            $request->session()->flash('flash_message', ['message' => "Домен {$name} успешно добавлен", 'class' => 'alert-success']);
        }

        return redirect()->route('domains.index');
    }
}
