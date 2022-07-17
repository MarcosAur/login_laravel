<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    function index(){
        return view('tela-cadastro');
    }

    function cadastrarUsuario(){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $host = "localhost";
        $user = "teste";
        $dn_name = "sistema_login";
        $passwd = "1234";

        $conn = mysqli_connect($host,$user,$passwd,$dn_name);

        $mysql_query = "INSERT INTO usuario (email, senha)
                        VALUES
                        ('$email','$senha');";
        $result = mysqli_real_query($conn, $mysql_query);

        if ($result){
            return redirect()->route('cadastro-bem-sucedido');
        }else{
            echo "<script> alert('Cadastro mal sucedido') </script>";
            return view("tela-cadastro");
        }
    }
}
