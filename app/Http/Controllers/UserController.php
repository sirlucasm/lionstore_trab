<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function index(User $user)
    {
        $users = $user->all();
        return $users;
    }

    public function create(Request $params)
    {
        $params['birth_date'] = $params->year . '-' . $params->month . '-' . $params->day;
        $save = $this->user->insert([
            'full_name' => $params['full_name'],
            'email' => $params['email'],
            'password' => bcrypt($params['password']),
            'cpf_cnpj' => $params['cpf_cnpj'],
            'birth_date' => $params['birth_date'],
            'gender' => $params['gender']
        ]);
        if ($save) return redirect()->route('produtos.index')->with('success', 'Conta criada com sucesso!');
        return redirect()->route('criarConta')->with('error', 'Não foi possivel criar a sua conta');
    }

    public function edit(Request $params)
    {
        $user = Auth::user();
        $arr = [];
        $data = $params->only('email', 'full_name', 'cpf_cnpj');
        foreach ($data as $param) {
            if ($param) $arr = array_filter($data);
        }
        $save = $this->user::where('id', $user->id)->update($arr);
        if ($save) return redirect()->route('meuPerfil')->with('success', 'Informções salvas com sucesso.');
        return redirect()->route('meuPerfil')->with('error', 'Não foi possivel salvar as alterações.');
    }
}
