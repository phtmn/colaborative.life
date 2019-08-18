<?php

namespace App\Models;

use App\Scopes\Osc\OscScope;
use App\Scopes\User\UserScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projeto extends Model
{
    use SoftDeletes;

    // protected $fillable = ['user_id','uuid','osc_id','nome_projeto','descricao_resumida','responsavel_projeto','valor_projeto',
    //     'valor_meta','imagem','data_inicio','data_final','lei_incentivo','lei','ambito','artigo','num_registro1','num_registro2',
    //     'segmento','resumo','objetivos','justificativa','publico_alvo','impactos_esperados','contra_partidas','prop_nome',
    //     'prop_documento','prop_telefone1','prop_telefone2','prop_email1','prop_email2','banco_doacao','agencia_doacao','conta_doacao',
    //     'op_doacao','banco_patrocinio','agencia_patrocinio','conta_patrocinio','op_patrocinio','status','ativo','arquivo'];


    protected $fillable = ['user_id','uuid','osc_id','nome_projeto','data_dou','num_pronac','segmento','tipo_operacao','resumo','valor_meta','link_vesalic','banco','banco_ag','banco_cc'];    

    public function osc(){
        return $this->belongsTo(Osc::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    // public function bancoPatrocinio(){
    //     return $this->belongsTo(Banco::class,'banco_patrocinio_id')->first();
    // }
    // public function bancoDoacao(){
    //     return $this->belongsTo(Banco::class,'banco_doacao_id')->first();
    // }

}
