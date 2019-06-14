<?php

use Illuminate\Database\Seeder;
use App\Models\Objetivo;
class ObjetivosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ODS 1
        Objetivo::create([
            'numeral'       => 1,
            'descricao'     => 'Erradicação da Probreza',
            'link'          => 'http://www.agenda2030.com.br/ods/1/',
            'img_p'         => asset('vendor/site/images/ods1.png'),
            'img_m'         => asset('vendor/site/images/ods1.png'),
            'img_g'         => asset('vendor/site/images/ods1.png'),
        ]);

        //ODS 2
        Objetivo::create([
            'numeral'       => 2,
            'descricao'     => 'Fome Zero e Agricultura Sustentável',
            'link'          => 'http://www.agenda2030.com.br/ods/2/',
            'img_p'         => asset('vendor/site/images/ods2.png'),
            'img_m'         => asset('vendor/site/images/ods2.png'),
            'img_g'         => asset('vendor/site/images/ods2.png'),
        ]);

        //ODS 3
        Objetivo::create([
            'numeral'       => 3,
            'descricao'     => 'Saúde e Bem Estar',
            'link'          => 'http://www.agenda2030.com.br/ods/3/',
            'img_p'         => asset('vendor/site/images/ods3.png'),
            'img_m'         => asset('vendor/site/images/ods3.png'),
            'img_g'         => asset('vendor/site/images/ods3.png'),
        ]);

        //ODS 4
        Objetivo::create([
            'numeral'       => 4,
            'descricao'     => 'Educação de Qualidade',
            'link'          => 'http://www.agenda2030.com.br/ods/4/',
            'img_p'         => asset('vendor/site/images/ods4.png'),
            'img_m'         => asset('vendor/site/images/ods4.png'),
            'img_g'         => asset('vendor/site/images/ods4.png'),
        ]);

        //ODS 5
        Objetivo::create([
            'numeral'       => 5,
            'descricao'     => 'Igualdade de Gênero',
            'link'          => 'http://www.agenda2030.com.br/ods/5/',
            'img_p'         => asset('vendor/site/images/ods5.png'),
            'img_m'         => asset('vendor/site/images/ods5.png'),
            'img_g'         => asset('vendor/site/images/ods5.png'),
        ]);

        //ODS 6
        Objetivo::create([
            'numeral'       => 6,
            'descricao'     => 'Água Potável e Saneamento',
            'link'          => 'http://www.agenda2030.com.br/ods/6/',
            'img_p'         => asset('vendor/site/images/ods6.png'),
            'img_m'         => asset('vendor/site/images/ods6.png'),
            'img_g'         => asset('vendor/site/images/ods6.png'),
        ]);

        //ODS 7
        Objetivo::create([
            'numeral'       => 7,
            'descricao'     => 'Energia Acessível e Limpa',
            'link'          => 'http://www.agenda2030.com.br/ods/7/',
            'img_p'         => asset('vendor/site/images/ods7.png'),
            'img_m'         => asset('vendor/site/images/ods7.png'),
            'img_g'         => asset('vendor/site/images/ods7.png'),
        ]);

        //ODS 8
        Objetivo::create([
            'numeral'       => 8,
            'descricao'     => 'Trabalho Decente e Crescimento Econômico',
            'link'          => 'http://www.agenda2030.com.br/ods/8/',
            'img_p'         => asset('vendor/site/images/ods8.png'),
            'img_m'         => asset('vendor/site/images/ods8.png'),
            'img_g'         => asset('vendor/site/images/ods8.png'),
        ]);

        //ODS 9
        Objetivo::create([
            'numeral'       => 9,
            'descricao'     => 'Indústria, Inovação e Infraestrutura',
            'link'          => 'http://www.agenda2030.com.br/ods/9/',
            'img_p'         => asset('vendor/site/images/ods9.png'),
            'img_m'         => asset('vendor/site/images/ods9.png'),
            'img_g'         => asset('vendor/site/images/ods9.png'),
        ]);

        //ODS 10
        Objetivo::create([
            'numeral'       => 10,
            'descricao'     => 'Redução da Desigualdades',
            'link'          => 'http://www.agenda2030.com.br/ods/10/',
            'img_p'         => asset('vendor/site/images/ods10.png'),
            'img_m'         => asset('vendor/site/images/ods10.png'),
            'img_g'         => asset('vendor/site/images/ods10.png'),
        ]);

        //ODS 11
        Objetivo::create([
            'numeral'       => 11,
            'descricao'     => 'Cidades e Comunidades Sustentáveis',
            'link'          => 'http://www.agenda2030.com.br/ods/11/',
            'img_p'         => asset('vendor/site/images/ods11.png'),
            'img_m'         => asset('vendor/site/images/ods11.png'),
            'img_g'         => asset('vendor/site/images/ods11.png'),
        ]);

        //ODS 12
        Objetivo::create([
            'numeral'       => 12,
            'descricao'     => 'Consumo e Produção Responsáveis',
            'link'          => 'http://www.agenda2030.com.br/ods/12/',
            'img_p'         => asset('vendor/site/images/ods12.png'),
            'img_m'         => asset('vendor/site/images/ods12.png'),
            'img_g'         => asset('vendor/site/images/ods12.png'),
        ]);

        //ODS 13
        Objetivo::create([
            'numeral'       => 13,
            'descricao'     => 'Ação Contra a Mudança Global do Clima',
            'link'          => 'http://www.agenda2030.com.br/ods/13/',
            'img_p'         => asset('vendor/site/images/ods13.png'),
            'img_m'         => asset('vendor/site/images/ods13.png'),
            'img_g'         => asset('vendor/site/images/ods13.png'),
        ]);

        //ODS 14
        Objetivo::create([
            'numeral'       => 14,
            'descricao'     => 'Vida na Água',
            'link'          => 'http://www.agenda2030.com.br/ods/14/',
            'img_p'         => asset('vendor/site/images/ods14.png'),
            'img_m'         => asset('vendor/site/images/ods14.png'),
            'img_g'         => asset('vendor/site/images/ods14.png'),
        ]);

        //ODS 15
        Objetivo::create([
            'numeral'       => 15,
            'descricao'     => 'Vida Terrestre',
            'link'          => 'http://www.agenda2030.com.br/ods/15/',
            'img_p'         => asset('vendor/site/images/ods15.png'),
            'img_m'         => asset('vendor/site/images/ods15.png'),
            'img_g'         => asset('vendor/site/images/ods15.png'),
        ]);

        //ODS 16
        Objetivo::create([
            'numeral'       => 16,
            'descricao'     => 'Paz, Justiça e Instituições Eficazes',
            'link'          => 'http://www.agenda2030.com.br/ods/16/',
            'img_p'         => asset('vendor/site/images/ods16.png'),
            'img_m'         => asset('vendor/site/images/ods16.png'),
            'img_g'         => asset('vendor/site/images/ods16.png'),
        ]);

        //ODS 17
        Objetivo::create([
            'numeral'       => 17,
            'descricao'     => 'Parcerias e Meios de Implementação',
            'link'          => 'http://www.agenda2030.com.br/ods/17/',
            'img_p'         => asset('vendor/site/images/ods17.png'),
            'img_m'         => asset('vendor/site/images/ods17.png'),
            'img_g'         => asset('vendor/site/images/ods17.png'),
        ]);


    }
}
