<?php

namespace App\Http\Controllers\Admin;

use App\Models\Investimento;
use App\Models\Projeto;
use App\Models\Recibo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\Message\Shortcode\Alert;

class RecibosController extends Controller
{
    public function index()
    {
        return view('admin.recibos.index', [
            'recibos' => Recibo::all()
          ]);
    }

    public function create()
    {
        return view('admin.recibos.create');
    }

    public function store(Request $request)
    {
        $recibo = new Recibo;

        $recibo->num_recibo = $request->num_recibo;
        $recibo->segmento_cultural = $request->segmento_cultural;
        $recibo->tipo_operacao = $request->tipo_operacao;
        $recibo->valor_incentivo = $request->valor_incentivo;
        $recibo->banco = $request->banco;
        $recibo->ag = $request->ag;
        $recibo->cc = $request->cc;
        $recibo->data_incentivo = $request->data_incentivo;
        $recibo->forma_incentivo = $request->forma_incentivo;
        $recibo->especificacao_doacao_patrocinio = $request->especificacao_doacao_patrocinio;
        $recibo->forma_avaliacao_doacao_patrocinio = $request->forma_avaliacao_doacao_patrocinio;
        $recibo->incentivador_nome = $request->incentivador_nome;
        $recibo->incentivador_cpf_cnpj = $request->incentivador_cpf_cnpj;
        $recibo->incentivador_cep = $request->incentivador_cep;
        $recibo->incentivador_logradouro = $request->incentivador_logradouro;
        $recibo->incentivador_bairro = $request->incentivador_bairro;
        $recibo->incentivador_cidade = $request->incentivador_cidade;
        $recibo->incentivador_uf = $request->incentivador_uf;
        $recibo->incentivador_telefone = $request->incentivador_telefone;
        $recibo->incentivador_tipo_telefone = $request->incentivador_tipo_telefone;
        $recibo->incentivador_grupo_empresarial = $request->incentivador_grupo_empresarial;
        $recibo->incentivador_nome_dirigente = $request->incentivador_nome_dirigente;
        $recibo->declarador_nome = $request->declarador_nome;
        $recibo->declarador_cpf = $request->declarador_cpf;
        $recibo->declarador_telefone = $request->declarador_telefone;
        $recibo->declarador_cargo = $request->declarador_cargo;
        $recibo->declarador_local = $request->declarador_local;
        $recibo->declarador_data = $request->declarador_data;
        $recibo->projeto_nome = $request->projeto_nome;
        $recibo->projeto_data = $request->projeto_data;
        $recibo->projeto_responsavel = $request->projeto_responsavel;
        $recibo->projeto_telefone = $request->projeto_telefone;
        $recibo->projeto_cep = $request->projeto_cep;
        $recibo->projeto_logradouro = $request->projeto_logradouro;
        $recibo->projeto_bairro = $request->projeto_bairro;
        $recibo->projeto_cidade = $request->projeto_cidade;
        $recibo->projeto_uf = $request->projeto_uf;
        $recibo->save();


        if ($recibo) {
            return redirect()->route('admin-recibos.index');
        }

        return redirect()->route('admin-recibos.create')->withInput($request->all());
    }

    public function createWithInvestimento($investimento_id)
    {
        return view('admin.recibos.createWithInvestimento');
    }


    public function storeWithInvestimento(Request $request, $investimento_id)
    {
        $investimento = Investimento::find($investimento_id);

        if ($investimento) {
            $recibo = new Recibo;

            $recibo->num_recibo = $request->num_recibo;
            $recibo->segmento_cultural = $request->segmento_cultural;
            $recibo->tipo_operacao = $request->tipo_operacao;
            $recibo->valor_incentivo = $request->valor_incentivo;
            $recibo->banco = $request->banco;
            $recibo->ag = $request->ag;
            $recibo->cc = $request->cc;
            $recibo->data_incentivo = $request->data_incentivo;
            $recibo->forma_incentivo = $request->forma_incentivo;
            $recibo->especificacao_doacao_patrocinio = $request->especificacao_doacao_patrocinio;
            $recibo->forma_avaliacao_doacao_patrocinio = $request->forma_avaliacao_doacao_patrocinio;
            $recibo->incentivador_nome = $request->incentivador_nome;
            $recibo->incentivador_cpf_cnpj = $request->incentivador_cpf_cnpj;
            $recibo->incentivador_cep = $request->incentivador_cep;
            $recibo->incentivador_logradouro = $request->incentivador_logradouro;
            $recibo->incentivador_bairro = $request->incentivador_bairro;
            $recibo->incentivador_cidade = $request->incentivador_cidade;
            $recibo->incentivador_uf = $request->incentivador_uf;
            $recibo->incentivador_telefone = $request->incentivador_telefone;
            $recibo->incentivador_tipo_telefone = $request->incentivador_tipo_telefone;
            $recibo->incentivador_grupo_empresarial = $request->incentivador_grupo_empresarial;
            $recibo->incentivador_nome_dirigente = $request->incentivador_nome_dirigente;
            $recibo->declarador_nome = $request->declarador_nome;
            $recibo->declarador_cpf = $request->declarador_cpf;
            $recibo->declarador_telefone = $request->declarador_telefone;
            $recibo->declarador_cargo = $request->declarador_cargo;
            $recibo->declarador_local = $request->declarador_local;
            $recibo->declarador_data = $request->declarador_data;
            $recibo->user_id = $investimento->projeto->user_id;
            $recibo->save();

            $investimento->recibo_id = $recibo->id;
            $investimento->save();

            if ($recibo) {
                return redirect()->route('admin-recibos.index');
            }
        }

        return redirect()->route('admin-recibos.createWithInvestimento', $investimento_id)->withInput($request->all());
    }
}
