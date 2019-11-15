<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfis')->insert([
            ['nome'=>'Investidor'],
            ['nome'=>'Osc (Organizacao da Sociedade Civil)'],
            ['nome'=>'Administrador'],
        ]);

        // DB::table('ambitos')->insert([
        //     ['nome'=>'Federal'],
        //     ['nome'=>'Estadual'],
        //     ['nome'=>'Municipal']
        // ]);

        // DB::table('instancias')->insert([
        //     ['nome'=>'Lei Rouanet'],
        //     ['nome'=>'Lei de Incentivo ao Esporte'],
        //     ['nome'=>'Lei de Incentivo a Criança e ao Adolescente'],
        // ]);

        // DB::table('imoveis_situacoes')->insert([
        //     ['descricao'=>'Alugada','pontuacao'=>2],
        //     ['descricao'=>'Outros', 'pontuacao'=>1],
        //     ['descricao'=>'Cedida Funcional', 'pontuacao'=> 5],
        //     ['descricao'=>'Própria/Quitada', 'pontuacao'=> 6],
        //     ['descricao'=>'Financiada', 'pontuacao'=> 3],
        // ]);

        // DB::table('investimentos_tipos')->insert([
        //     ['nome'=>'Doação'],
        //     ['nome'=>'Patrocínio'],
        //     ['nome'=>'Investimento']
        // ]);

        // DB::table('segmentos')->insert([
        //     ['nome'=>'Educação(Crianças/Jovens)'],
        //     ['nome'=>'Meio Ambiente'],
        //     ['nome'=>'Idosos'],
        //     ['nome'=>'Saúde'],
        //     ['nome'=>'Esportes'],
        //     ['nome'=>'Cultura']
        // ]);

        // DB::table('segmentos_atividades')->insert([
        //     ['descricao'=>'Agricultura','pontuacao'=>4],
        //     ['descricao'=>'Comércio','pontuacao'=>3],
        //     ['descricao'=>'Indústria','pontuacao'=>5],
        //     ['descricao'=>'Serviço','pontuacao'=>2],
        //     ['descricao'=>'Outros','pontuacao'=>1],
        // ]);
    }
}
