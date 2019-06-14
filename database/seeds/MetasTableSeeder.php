<?php

use Illuminate\Database\Seeder;

class MetasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ODS 1
        DB::table('metas')->insert([
            [
                'objetivo_id'   => 1,  //codigo ods
                'codigo'        => '1.1',
                'descricao'     => 'Até 2030, erradicar a pobreza extrema para todas as pessoas em todos os lugares, atualmente medida como pessoas vivendo com menos de US$ 1,25 por dia'
            ],
            [
                'objeito_id'    => 1,
                'codigo'        => '1.2',
                'descricao'     => 'Até 2030, reduzir pelo menos à metade a proporção de homens, mulheres e crianças, de todas as idades, que vivem na pobreza, em todas as suas dimensões, de acordo com as definições nacionais'
            ],
            [
                'objetivo_id'   => 1,
                'codigo'        => '1.3',
                'descricao'     => 'Implementar, em nível nacional, medidas e sistemas de proteção social apropriados, para todos, incluindo pisos, e até 2030 atingir a cobertura substancial dos pobres e vulneráveis'
            ],
            [
                'objetivo_id'   => 1,
                'codigo'        => '1.4',
                'descricao'     => 'Até 2030, garantir que todos os homens e mulheres, particularmente os pobres e vulneráveis, tenham direitos iguais aos recursos econômicos, bem como acesso a serviços básicos, propriedade e controle sobre a terra e outras formas de propriedade, herança, recursos naturais, novas tecnologias apropriadas e serviços financeiros, incluindo microfinanças'
            ],
            [
                'objetivo_id'   => 1,
                'codigo'        => '1.5',
                'descricao'     => 'Até 2030, construir a resiliência dos pobres e daqueles em situação de vulnerabilidade, e reduzir a exposição e vulnerabilidade destes a eventos extremos relacionados com o clima e outros choques e desastres econômicos, sociais e ambientais'
            ],
            [
                'objetivo_id'   => 1,
                'codigo'        => '1.a',
                'descricao'     => 'Garantir uma mobilização significativa de recursos a partir de uma variedade de fontes, inclusive por meio do reforço da cooperação para o desenvolvimento, de forma a proporcionar meios adequados e previsíveis para que os países em desenvolvimento, em particular os países de menor desenvolvimento relativo, implementem programas e políticas para acabar com a pobreza em todas as suas dimensões'
            ],
            [
                'objetivo_id'   => 1,
                'codigo'        => '1.b',
                'descricao'     => 'Criar marcos políticos sólidos, em níveis nacional, regional e internacional, com base em estratégias de desenvolvimento a favor dos pobres e sensíveis a gênero, para apoiar investimentos acelerados nas ações de erradicação da pobreza'
            ]
            
        ]);

         //ODS 2
         DB::table('metas')->insert([
            [
                'objetivo_id'   => 2,  //codigo ods
                'codigo'        => '2.1',
                'descricao'     => 'Até 2030, acabar com a fome e garantir o acesso de todas as pessoas, em particular os pobres e pessoas em situações vulneráveis, incluindo crianças, a alimentos seguros, nutritivos e suficientes durante todo o ano.'
            ],
            [
                'objeito_id'    => 2,
                'codigo'        => '2.2',
                'descricao'     => 'Até 2030, acabar com todas as formas de desnutrição, inclusive pelo alcance até 2025 das metas acordadas internacionalmente sobre desnutrição crônica e desnutrição em crianças menores de cinco anos de idade, e atender às necessidades nutricionais de meninas adolescentes, mulheres grávidas e lactantes e pessoas idosas.'
            ],
            [
                'objetivo_id'   => 2,
                'codigo'        => '2.3',
                'descricao'     => 'Até 2030, dobrar a produtividade agrícola e a renda dos pequenos produtores de alimentos, particularmente das mulheres, povos indígenas, agricultores familiares, pastores e pescadores, inclusive por meio de acesso seguro e igual à terra, outros recursos produtivos e insumos, conhecimento, serviços financeiros, mercados e oportunidades de agregação de valor e de emprego não-agrícola'
            ],
            [
                'objetivo_id'   => 2,
                'codigo'        => '2.4',
                'descricao'     => 'Até 2030, garantir sistemas sustentáveis de produção de alimentos e implementar práticas agrícolas robustas, que aumentem a produtividade e a produção, que ajudem a manter os ecossistemas, que fortaleçam a capacidade de adaptação às mudança do clima, às condições meteorológicas extremas, secas, inundações e outros desastres, e que melhorem progressivamente a qualidade da terra e do solo.'
            ],
            [
                'objetivo_id'   => 2,
                'codigo'        => '2.5',
                'descricao'     => 'Até 2020, manter a diversidade genética de sementes, plantas cultivadas, animais de criação e domesticados e suas respectivas espécies selvagens, inclusive por meio de bancos de sementes e plantas diversificados e adequadamente geridos em nível nacional, regional e internacional, e garantir o acesso e a repartição justa e equitativa dos benefícios decorrentes da utilização dos recursos genéticos e conhecimentos tradicionais associados, conforme acordado internacionalmente.'
            ],
            [
                'objetivo_id'   => 2,
                'codigo'        => '2.a',
                'descricao'     => 'Aumentar o investimento, inclusive por meio do reforço da cooperação internacional, em infraestrutura rural, pesquisa e extensão de serviços agrícolas, desenvolvimento de tecnologia, e os bancos de genes de plantas e animais, de maneira a aumentar a capacidade de produção agrícola nos países em desenvolvimento, em particular nos países de menor desenvolvimento relativo.'
            ],
            [
                'objetivo_id'   => 2,
                'codigo'        => '2.b',
                'descricao'     => 'Corrigir e prevenir as restrições ao comércio e distorções nos mercados agrícolas mundiais, inclusive por meio da eliminação paralela de todas as formas de subsídios à exportação e todas as medidas de exportação com efeito equivalente, de acordo com o mandato da Rodada de Desenvolvimento de Doha'
            ],
            [
                'objetivo_id'   => 2,
                'codigo'        => '2.c',
                'descricao'     => 'Adotar medidas para garantir o funcionamento adequado dos mercados de commodities de alimentos e seus derivados, e facilitar o acesso oportuno à informação de mercado, inclusive sobre as reservas de alimentos, a fim de ajudar a limitar a volatilidade extrema dos preços dos alimentos'
            ]
            
        ]);

         //ODS 3
         DB::table('metas')->insert([
            [
                'objetivo_id'   => 3,  //codigo ods
                'codigo'        => '3.1',
                'descricao'     => 'Até 2030, reduzir a taxa de mortalidade materna global para menos de 70 mortes por 100.000 nascidos vivos'
            ],
            [
                'objeito_id'    => 3,
                'codigo'        => '3.2',
                'descricao'     => 'Até 2030, acabar com as mortes evitáveis de recém-nascidos e crianças menores de 5 anos, com todos os países objetivando reduzir a mortalidade neonatal para pelo menos até 12 por 1.000 nascidos vivos e a mortalidade de crianças menores de 5 anos para pelo menos até 25 por 1.000 nascidos vivos'
            ],
            [
                'objetivo_id'   => 3,
                'codigo'        => '3.3',
                'descricao'     => 'Até 2030, acabar com as epidemias de AIDS, tuberculose, malária e doenças tropicais negligenciadas, e combater a hepatite, doenças transmitidas pela água, e outras doenças transmissíveis'
            ],
            [
                'objetivo_id'   => 3,
                'codigo'        => '3.4',
                'descricao'     => 'Até 2030, reduzir em um terço a mortalidade prematura por doenças não transmissíveis por meio de prevenção e tratamento, e promover a saúde mental e o bem-estar'
            ],
            [
                'objetivo_id'   => 3,
                'codigo'        => '3.5',
                'descricao'     => 'Reforçar a prevenção e o tratamento do abuso de substâncias, incluindo o abuso de drogas entorpecentes e uso nocivo do álcool'
            ],
            [
                'objetivo_id'   => 3,
                'codigo'        => '3.6',
                'descricao'     => 'Até 2020, reduzir pela metade as mortes e os ferimentos globais por acidentes em estradas'
            ],
            [
                'objetivo_id'   => 3,
                'codigo'        => '3.7',
                'descricao'     => 'Até 2030, assegurar o acesso universal aos serviços de saúde sexual e reprodutiva, incluindo o planejamento familiar, informação e educação, bem como a integração da saúde reprodutiva em estratégias e programas nacionais'
            ],
            [
                'objetivo_id'   => 3,
                'codigo'        => '3.8',
                'descricao'     => 'Atingir a cobertura universal de saúde, incluindo a proteção do risco financeiro, o acesso a serviços de saúde essenciais de qualidade e o acesso a medicamentos e vacinas essenciais seguros, eficazes, de qualidade e a preços acessíveis para todos'
            ],
            [
                'objetivo_id'   => 3,
                'codigo'        => '3.9',
                'descricao'     => '	Até 2030, reduzir substancialmente o número de mortes e doenças por produtos químicos perigosos e por contaminação e poluição do ar, da água e do solo'
            ],
            [
                'objetivo_id'   => 3,
                'codigo'        => '3.a',
                'descricao'     => 'Fortalecer a implementação da Convenção-Quadro para o Controle do Tabaco da Organização Mundial de Saúde em todos os países, conforme apropriado'
            ],
            [
                'objetivo_id'   => 3,
                'codigo'        => '3.b',
                'descricao'     => 'Apoiar a pesquisa e o desenvolvimento de vacinas e medicamentos para as doenças transmissíveis e não transmissíveis, que afetam principalmente os países em desenvolvimento, proporcionar o acesso a medicamentos e vacinas essenciais a preços acessíveis, de acordo com a Declaração de Doha sobre o Acordo TRIPS e Saúde Pública, que afirma o direito dos países em desenvolvimento de utilizarem plenamente as disposições do Acordo sobre os Aspectos dos Direitos de Propriedade Intelectual Relacionados ao Comércio (TRIPS, na sigla em inglês) sobre flexibilidades para proteger a saúde pública e, em particular, proporcionar o acesso a medicamentos para todos'
            ],
            [
                'objetivo_id'   => 3,
                'codigo'        => '3.c',
                'descricao'     => 'Aumentar substancialmente o financiamento da saúde e o recrutamento, desenvolvimento, treinamento e retenção do pessoal de saúde nos países em desenvolvimento, especialmente nos países de menor desenvolvimento relativo e nos pequenos Estados insulares em desenvolvimento'
            ],
            [
                'objetivo_id'   => 3,
                'codigo'        => '3.d',
                'descricao'     => 'reforçar a capacidade de todos os países, particularmente os países em desenvolvimento, para o alerta precoce, redução de riscos e gerenciamento de riscos nacionais e globais à saúde.'
            ],
            
        ]);

        //ODS 4
        DB::table('metas')->insert([
            [
                'objetivo_id'   => 4,  //codigo ods
                'codigo'        => '4.1',
                'descricao'     => 'Até 2030, garantir que todas as meninas e meninos completem o ensino primário e secundário livre, equitativo e de qualidade, que conduza a resultados de aprendizagem relevantes e eficazes'
            ],
            [
                'objeito_id'    => 4,
                'codigo'        => '4.2',
                'descricao'     => 'Até 2030, garantir que todos os meninos e meninas tenham acesso a um desenvolvimento de qualidade na primeira infância, cuidados e educação pré-escolar, de modo que estejam prontos para o ensino primário'
            ],
            [
                'objetivo_id'   => 4,
                'codigo'        => '4.3',
                'descricao'     => 'Até 2030, assegurar a igualdade de acesso para todos os homens e mulheres à educação técnica, profissional e superior de qualidade, a preços acessíveis, incluindo universidade'
            ],
            [
                'objetivo_id'   => 4,
                'codigo'        => '4.4',
                'descricao'     => 'Até 2030, aumentar substancialmente o número de jovens e adultos que tenham habilidades relevantes, inclusive competências técnicas e profissionais, para emprego, trabalho decente e empreendedorismo'
            ],
            [
                'objetivo_id'   => 4,
                'codigo'        => '4.5',
                'descricao'     => 'Até 2030, eliminar as disparidades de gênero na educação e garantir a igualdade de acesso a todos os níveis de educação e formação profissional para os mais vulneráveis, incluindo as pessoas com deficiência, povos indígenas e as crianças em situação de vulnerabilidade'
            ],
            [
                'objetivo_id'   => 4,
                'codigo'        => '4.6',
                'descricao'     => 'Até 2030, garantir que todos os jovens e uma substancial proporção dos adultos, homens e mulheres, estejam alfabetizados e tenham adquirido o conhecimento básico de matemática'
            ],
            [
                'objetivo_id'   => 4,
                'codigo'        => '4.7',
                'descricao'     => 'Até 2030, garantir que todos os alunos adquiram conhecimentos e habilidades necessárias para promover o desenvolvimento sustentável, inclusive, entre outros, por meio da educação para o desenvolvimento sustentável e estilos de vida sustentáveis, direitos humanos, igualdade de gênero, promoção de uma cultura de paz e não-violência, cidadania global, e valorização da diversidade cultural e da contribuição da cultura para o desenvolvimento sustentável'
            ],
            [
                'objetivo_id'   => 4,
                'codigo'        => '4.a',
                'descricao'     => 'Construir e melhorar instalações físicas para educação, apropriadas para crianças e sensíveis às deficiências e ao gênero e que proporcionem ambientes de aprendizagem seguros, não violentos, inclusivos e eficazes para todos'
            ],
            [
                'objetivo_id'   => 4,
                'codigo'        => '4.b',
                'descricao'     => 'Até 2020 substancialmente ampliar globalmente o número de bolsas de estudo disponíveis para os países em desenvolvimento, em particular, os países de menor desenvolvimento relativo, pequenos Estados insulares em desenvolvimento e os países africanos, para o ensino superior, incluindo programas de formação profissional, de tecnologia da informação e da comunicação, programas técnicos, de engenharia e científicos em países desenvolvidos e outros países em desenvolvimento'
            ],
            [
                'objetivo_id'   => 4,
                'codigo'        => '4.c',
                'descricao'     => 'Até 2030, substancialmente aumentar o contingente de professores qualificados, inclusive por meio da cooperação internacional para a formação de professores, nos países em desenvolvimento, especialmente os países de menor desenvolvimento relativo e pequenos Estados insulares em desenvolvimento'
            ]
                     
        ]);

        //ODS 5
        DB::table('metas')->insert([
            [
                'objetivo_id'   => 5,  //codigo ods
                'codigo'        => '5.1',
                'descricao'     => 'Acabar com todas as formas de discriminação contra todas as mulheres e meninas em toda parte'
            ],
            [
                'objeito_id'    => 5,
                'codigo'        => '5.2',
                'descricao'     => 'Eliminar todas as formas de violência contra todas as mulheres e meninas nas esferas públicas e privadas, incluindo o tráfico e exploração sexual e de outros tipos'
            ],
            [
                'objetivo_id'   => 5,
                'codigo'        => '5.3',
                'descricao'     => 'Eliminar todas as práticas nocivas, como os casamentos prematuros, forçados e de crianças e mutilações genitais femininas'
            ],
            [
                'objetivo_id'   => 5,
                'codigo'        => '5.4',
                'descricao'     => 'Reconhecer e valorizar o trabalho de assistência e doméstico não remunerado, por meio da disponibilização de serviços públicos, infraestrutura e políticas de proteção social, bem como a promoção da responsabilidade compartilhada dentro do lar e da família, conforme os contextos nacionais'
            ],
            [
                'objetivo_id'   => 5,
                'codigo'        => '5.5',
                'descricao'     => 'Garantir a participação plena e efetiva das mulheres e a igualdade de oportunidades para a liderança em todos os níveis de tomada de decisão na vida política, econômica e pública'
            ],
            [
                'objetivo_id'   => 5,
                'codigo'        => '5.6',
                'descricao'     => 'Assegurar o acesso universal à saúde sexual e reprodutiva e os direitos reprodutivos, como acordado em conformidade com o Programa de Ação da Conferência Internacional sobre População e Desenvolvimento e com a Plataforma de Ação de Pequim e os documentos resultantes de suas conferências de revisão'
            ],
            [
                'objetivo_id'   => 5,
                'codigo'        => '5.a',
                'descricao'     => 'Empreender reformas para dar às mulheres direitos iguais aos recursos econômicos, bem como o acesso a propriedade e controle sobre a terra e outras formas de propriedade, serviços financeiros, herança e os recursos naturais, de acordo com as leis nacionais'
            ],
            [
                'objetivo_id'   => 5,
                'codigo'        => '5.b',
                'descricao'     => 'Aumentar o uso de tecnologias de base, em particular as tecnologias de informação e comunicação, para promover o empoderamento das mulheres'
            ],
            [
                'objetivo_id'   => 5,
                'codigo'        => '5.c',
                'descricao'     => 'Adotar e fortalecer políticas sólidas e legislação aplicável para a promoção da igualdade de gênero e o empoderamento de todas as mulheres e meninas, em todos os níveis'
            ]
                                 
        ]);

         //ODS 6
         DB::table('metas')->insert([
            [
                'objetivo_id'   => 6,  //codigo ods
                'codigo'        => '6.1',
                'descricao'     => 'Até 2030, alcançar o acesso universal e equitativo à água potável, segura e acessível para todos'
            ],
            [
                'objeito_id'    => 6,
                'codigo'        => '6.2',
                'descricao'     => 'Até 2030, alcançar o acesso a saneamento e higiene adequados e equitativos para todos, e acabar com a defecação a céu aberto, com especial atenção para as necessidades das mulheres e meninas e daqueles em situação de vulnerabilidade'
            ],
            [
                'objetivo_id'   => 6,
                'codigo'        => '6.3',
                'descricao'     => 'Até 2030, melhorar a qualidade da água, reduzindo a poluição, eliminando despejo e minimizando a liberação de produtos químicos e materiais perigosos, reduzindo à metade a proporção de águas residuais não tratadas, e aumentando substancialmente a reciclagem e reutilização segura globalmente'
            ],
            [
                'objetivo_id'   => 6,
                'codigo'        => '6.4',
                'descricao'     => 'Até 2030, aumentar substancialmente a eficiência do uso da água em todos os setores e assegurar retiradas sustentáveis e o abastecimento de água doce para enfrentar a escassez de água, e reduzir substancialmente o número de pessoas que sofrem com a escassez de água'
            ],
            [
                'objetivo_id'   => 6,
                'codigo'        => '6.5',
                'descricao'     => 'Até 2030, implementar a gestão integrada dos recursos hídricos em todos os níveis, inclusive via cooperação transfronteiriça, conforme apropriado'
            ],
            [
                'objetivo_id'   => 6,
                'codigo'        => '6.6',
                'descricao'     => 'Até 2020, proteger e restaurar ecossistemas relacionados com a água, incluindo montanhas, florestas, zonas úmidas, rios, aquíferos e lagos'
            ],
            [
                'objetivo_id'   => 6,
                'codigo'        => '6.a',
                'descricao'     => 'Até 2030, ampliar a cooperação internacional e o apoio ao desenvolvimento de capacidades para os países em desenvolvimento em atividades e programas relacionados a água e ao saneamento, incluindo a coleta de água, a dessalinização, a eficiência no uso da água, o tratamento de efluentes, a reciclagem e as tecnologias de reuso'
            ],
            [
                'objetivo_id'   => 6,
                'codigo'        => '6.b',
                'descricao'     => 'Apoiar e fortalecer a participação das comunidades locais, para melhorar a gestão da água e do saneamento'
            ]
                                 
        ]);

        //ODS 7
        DB::table('metas')->insert([
            [
                'objetivo_id'   => 7,  //codigo ods
                'codigo'        => '7.1',
                'descricao'     => 'Até 2030, assegurar o acesso universal, confiável, moderno e a preços acessíveis a serviços de energia'
            ],
            [
                'objeito_id'    => 7,
                'codigo'        => '7.2',
                'descricao'     => 'Até 2030, aumentar substancialmente a participação de energias renováveis na matriz energética global'
            ],
            [
                'objetivo_id'   => 7,
                'codigo'        => '7.3',
                'descricao'     => 'Até 2030, dobrar a taxa global de melhoria da eficiência energética'
            ],
            [
                'objetivo_id'   => 7,
                'codigo'        => '7.a',
                'descricao'     => 'Até 2030, reforçar a cooperação internacional para facilitar o acesso a pesquisa e tecnologias de energia limpa, incluindo energias renováveis, eficiência energética e tecnologias de combustíveis fósseis avançadas e mais limpas, e promover o investimento em infraestrutura de energia e em tecnologias de energia limpa'
            ],
            [
                'objetivo_id'   => 7,
                'codigo'        => '7.b',
                'descricao'     => 'Até 2030, expandir a infraestrutura e modernizar a tecnologia para o fornecimento de serviços de energia modernos e sustentáveis para todos nos países em desenvolvimento, particularmente nos países de menor desenvolvimento relativo, nos pequenos Estados insulares em desenvolvimento e nos países em desenvolvimento sem litoral, de acordo com seus respectivos programas de apoio'
            ]
                              
        ]);

         //ODS 8
         DB::table('metas')->insert([
            [
                'objetivo_id'   => 8,  //codigo ods
                'codigo'        => '8.1',
                'descricao'     => 'Sustentar o crescimento econômico per capita, de acordo com as circunstâncias nacionais e, em particular, pelo menos um crescimento anual de 7% do produto interno bruto nos países de menor desenvolvimento relativo'
            ],
            [
                'objeito_id'    => 8,
                'codigo'        => '8.2',
                'descricao'     => 'Atingir níveis mais elevados de produtividade das economias, por meio da diversificação, modernização tecnológica e inovação, inclusive por meio de um foco em setores de alto valor agregado e intensivos em mão-de-obra'
            ],
            [
                'objetivo_id'   => 8,
                'codigo'        => '8.3',
                'descricao'     => 'Promover políticas orientadas para o desenvolvimento, que apoiem as atividades produtivas, geração de emprego decente, empreendedorismo, criatividade e inovação, e incentivar a formalização e o crescimento das micro, pequenas e médias empresas, inclusive por meio do acesso a serviços financeiros'
            ],
            [
                'objetivo_id'   => 8,
                'codigo'        => '8.4',
                'descricao'     => 'Melhorar progressivamente, até 2030, a eficiência dos recursos globais no consumo e na produção, e empenhar-se para dissociar o crescimento econômico da degradação ambiental, de acordo com o "Plano Decenal de Programas Sobre Produção e Consumo Sustentáveis”, com os países desenvolvidos assumindo a liderança'
            ],
            [
                'objetivo_id'   => 8,
                'codigo'        => '8.5',
                'descricao'     => 'Até 2030, alcançar o emprego pleno e produtivo e trabalho decente todas as mulheres e homens, inclusive para os jovens e as pessoas com deficiência, e remuneração igual para trabalho de igual valor'
            ],
            [
                'objetivo_id'   => 8,
                'codigo'        => '8.6',
                'descricao'     => 'Até 2020, reduzir substancialmente a proporção de jovens sem emprego, educação ou formação'
            ],
            [
                'objetivo_id'   => 8,
                'codigo'        => '8.7',
                'descricao'     => 'Tomar medidas imediatas e eficazes para erradicar o trabalho forçado, acabar com a escravidão moderna e o tráfico de pessoas e assegurar a proibição e eliminação das piores formas de trabalho infantil, incluindo recrutamento e utilização de crianças-soldado, e até 2025 acabar com o trabalho infantil em todas as suas formas'
            ],
            [
                'objetivo_id'   => 8,
                'codigo'        => '8.8',
                'descricao'     => 'Proteger os direitos trabalhistas e promover ambientes de trabalho seguros e protegidos para todos os trabalhadores, incluindo os trabalhadores migrantes, em particular as mulheres migrantes, e pessoas com emprego precário'
            ],
            [
                'objetivo_id'   => 8,
                'codigo'        => '8.9',
                'descricao'     => 'Até 2030, conceber e implementar políticas para promover o turismo sustentável, que gera empregos, promove a cultura e os produtos locais'
            ],
            [
                'objetivo_id'   => 8,
                'codigo'        => '8.10',
                'descricao'     => 'Fortalecer a capacidade das instituições financeiras nacionais para incentivar a expansão do acesso aos serviços bancários, financeiros, e de seguros para todos'
            ],
            [
                'objetivo_id'   => 8,
                'codigo'        => '8.a',
                'descricao'     => 'Aumentar o apoio da Iniciativa de Ajuda para o Comércio (Aid for Trade) para os países em desenvolvimento, particularmente os países de menor desenvolvimento relativo, inclusive por meio do Quadro Integrado Reforçado para a Assistência Técnica Relacionada com o Comércio para os países de menor desenvolvimento relativo'
            ],
            [
                'objetivo_id'   => 8,
                'codigo'        => '8.b',
                'descricao'     => 'Até 2020, desenvolver e operacionalizar uma estratégia global para o emprego dos jovens e implementar o Pacto Mundial para o Emprego da Organização Internacional do Trabalho'
            ]
                                
        ]);

        //ODS 9
        DB::table('metas')->insert([
            [
                'objetivo_id'   => 9,  //codigo ods
                'codigo'        => '9.1',
                'descricao'     => 'Desenvolver infraestrutura de qualidade, confiável, sustentável e robusta, incluindo infraestrutura regional e transfronteiriça, para apoiar o desenvolvimento econômico e o bem-estar humano, com foco no acesso equitativo e a preços acessíveis para todos'
            ],
            [
                'objeito_id'    => 9,
                'codigo'        => '9.2',
                'descricao'     => 'Promover a industrialização inclusiva e sustentável e, até 2030, aumentar significativamente a participação da indústria no emprego e no produto interno bruto, de acordo com as circunstâncias nacionais, e dobrar sua participação nos países de menor desenvolvimento relativo'
            ],
            [
                'objetivo_id'   => 9,
                'codigo'        => '9.3',
                'descricao'     => 'Aumentar o acesso das pequenas indústrias e outras empresas, particularmente em países em desenvolvimento, aos serviços financeiros, incluindo crédito acessível e sua integração em cadeias de valor e mercados'
            ],
            [
                'objetivo_id'   => 9,
                'codigo'        => '9.4',
                'descricao'     => 'Até 2030, modernizar a infraestrutura e reabilitar as indústrias para torná-las sustentáveis, com eficiência aumentada no uso de recursos e maior adoção de tecnologias e processos industriais limpos e ambientalmente adequados; com todos os países atuando de acordo com suas respectivas capacidades'
            ],
            [
                'objetivo_id'   => 9,
                'codigo'        => '9.5',
                'descricao'     => 'Fortalecer a pesquisa científica, melhorar as capacidades tecnológicas de setores industriais em todos os países, particularmente nos países em desenvolvimento, inclusive, até 2030, incentivando a inovação e aumentando substancialmente o número de trabalhadores de pesquisa e desenvolvimento por milhão de pessoas e os gastos público e privado em pesquisa e desenvolvimento'
            ],
            [
                'objetivo_id'   => 9,
                'codigo'        => '9.a',
                'descricao'     => 'Facilitar o desenvolvimento de infraestrutura sustentável e robusta em países em desenvolvimento, por meio de maior apoio financeiro, tecnológico e técnico aos países africanos, aos países de menor desenvolvimento relativo, aos países em desenvolvimento sem litoral e aos pequenos Estados insulares em desenvolvimento'
            ],
            [
                'objetivo_id'   => 9,
                'codigo'        => '9.b',
                'descricao'     => 'Apoiar o desenvolvimento tecnológico, a pesquisa e a inovação nacionais nos países em desenvolvimento, inclusive garantindo um ambiente político propício para, entre outras coisas, diversificação industrial e agregação de valor às commodities'
            ],
            [
                'objetivo_id'   => 9,
                'codigo'        => '9.c',
                'descricao'     => 'Aumentar significativamente o acesso às tecnologias de informação e comunicação e se empenhar para procurar ao máximo oferecer acesso universal e a preços acessíveis à internet nos países menos desenvolvidos, até 2020'
            ]
                            
        ]);

        //ODS 10
        DB::table('metas')->insert([
            [
                'objetivo_id'   => 10,  //codigo ods
                'codigo'        => '10.1',
                'descricao'     => 'Até 2030, progressivamente alcançar e sustentar o crescimento da renda dos 40% da população mais pobre a uma taxa maior que a média nacional'
            ],
            [
                'objeito_id'    => 10,
                'codigo'        => '10.2',
                'descricao'     => 'Até 2030, empoderar e promover a inclusão social, econômica e política de todos, independentemente da idade, sexo, deficiência, raça, etnia, origem, religião, condição econômica ou outra'
            ],
            [
                'objetivo_id'   => 10,
                'codigo'        => '10.3',
                'descricao'     => 'Garantir a igualdade de oportunidades e reduzir as desigualdades de resultado, inclusive por meio da eliminação de leis, políticas e práticas discriminatórias e promover legislação, políticas e ações adequadas a este respeito'
            ],
            [
                'objetivo_id'   => 10,
                'codigo'        => '10.4',
                'descricao'     => 'Adotar políticas, especialmente fiscal, salarial e políticas de proteção social, e alcançar progressivamente uma maior igualdade'
            ],
            [
                'objetivo_id'   => 10,
                'codigo'        => '10.5',
                'descricao'     => 'Melhorar a regulamentação e monitoramento dos mercados e instituições financeiras globais, e fortalecer a implementação de tais regulamentações'
            ],
            [
                'objetivo_id'   => 10,
                'codigo'        => '10.6',
                'descricao'     => 'Assegurar uma representação e voz mais forte dos países em desenvolvimento em tomadas de decisão nas instituições econômicas e financeiras internacionais globais, a fim de garantir instituições mais eficazes, críveis, responsáveis e legítimas'
            ],
            [
                'objetivo_id'   => 10,
                'codigo'        => '10.7',
                'descricao'     => 'Facilitar a migração e a mobilidade ordenada, segura, regular e responsável de pessoas, inclusive por meio da implementação de políticas de migração planejadas e bem geridas'
            ],
            [
                'objetivo_id'   => 10,
                'codigo'        => '10.a',
                'descricao'     => 'Implementar o princípio do tratamento especial e diferenciado para países em desenvolvimento, em particular os países de menor desenvolvimento relativo, em conformidad e com os acordos da Organização Mundial do Comércio'
            ],
            [
                'objetivo_id'   => 10,
                'codigo'        => '10.b',
                'descricao'     => 'Incentivar a assistência oficial ao desenvolvimento e fluxos financeiros, incluindo o investimento externo direto, para os Estados onde a necessidade é maior, em particular os países de menor desenvolvimento relativo, os países africanos, os pequenos Estados insulares em desenvolvimento e os países em desenvolvimento sem litoral, de acordo com seus planos e programas nacionais'
            ],
            [
                'objetivo_id'   => 10,
                'codigo'        => '10.c',
                'descricao'     => 'Até 2030, reduzir para menos de 3% os custos de transação de remessas dos migrantes e eliminar “corredores de remessas” com custos superiores a 5%'
            ]
                            
        ]);

        //ODS 11
        DB::table('metas')->insert([
            [
                'objetivo_id'   => 11,  //codigo ods
                'codigo'        => '11.1',
                'descricao'     => 'Até 2030, garantir o acesso de todos a habitação segura, adequada e a preço acessível, e aos serviços básicos e urbanizar as favelas'
            ],
            [
                'objeito_id'    => 11,
                'codigo'        => '11.2',
                'descricao'     => 'Até 2030, proporcionar o acesso a sistemas de transporte seguros, acessíveis, sustentáveis e a preço acessível para todos, melhorando a segurança rodoviária por meio da expansão dos transportes públicos, com especial atenção para as necessidades das pessoas em situação de vulnerabilidade, mulheres, crianças, pessoas com deficiência e idosos 	'
            ],
            [
                'objetivo_id'   => 11,
                'codigo'        => '11.3',
                'descricao'     => 'Até 2030, aumentar a urbanização inclusiva e sustentável, e a capacidade para o planejamento e a gestão participativa, integrada e sustentável dos assentamentos humanos, em todos os países'
            ],
            [
                'objetivo_id'   => 11,
                'codigo'        => '11.4',
                'descricao'     => 'Fortalecer esforços para proteger e salvaguardar o patrimônio cultural e natural do mundo'
            ],
            [
                'objetivo_id'   => 11,
                'codigo'        => '11.5',
                'descricao'     => 'Até 2030, reduzir significativamente o número de mortes e o número de pessoas afetadas por catástrofes e diminuir substancialmente as perdas econômicas diretas causadas por elas em relação ao produto interno bruto global, incluindo os desastres relacionados à água, com o foco em proteger os pobres e as pessoas em situação de vulnerabilidade'
            ],
            [
                'objetivo_id'   => 11,
                'codigo'        => '11.6',
                'descricao'     => 'Até 2030, reduzir o impacto ambiental negativo per capita das cidades, inclusive prestando especial atenção à qualidade do ar, gestão de resíduos municipais e outros'
            ],
            [
                'objetivo_id'   => 11,
                'codigo'        => '11.7',
                'descricao'     => 'Até 2030, proporcionar o acesso universal a espaços públicos seguros, inclusivos, acessíveis e verdes, em particular para as mulheres e crianças, pessoas idosas e pessoas com deficiência'
            ],
            [
                'objetivo_id'   => 11,
                'codigo'        => '11.a',
                'descricao'     => 'Apoiar relações econômicas, sociais e ambientais positivas entre áreas urbanas, periurbanas e rurais, reforçando o planejamento nacional e regional de desenvolvimento'
            ],
            [
                'objetivo_id'   => 11,
                'codigo'        => '11.b',
                'descricao'     => 'Até 2020, aumentar substancialmente o número de cidades e assentamentos humanos adotando e implementando políticas e planos integrados para a inclusão, a eficiência dos recursos, mitigação e adaptação à mudança do clima, a resiliência a desastres; e desenvolver e implementar, de acordo com o Marco de Sendai para a Redução do Risco de Desastres 2015-2030, o gerenciamento holístico do risco de desastres em todos os níveis'
            ],
            [
                'objetivo_id'   => 11,
                'codigo'        => '11.c',
                'descricao'     => 'Apoiar os países menos desenvolvidos, inclusive por meio de assistência técnica e financeira, para construções sustentáveis e robustas, utilizando materiais locais'
            ]
                            
        ]);

        //ODS 12
        DB::table('metas')->insert([
            [
                'objetivo_id'   => 12,  //codigo ods
                'codigo'        => '12.1',
                'descricao'     => 'Implementar o Plano Decenal de Programas Sobre Produção e Consumo Sustentáveis, com todos os países tomando medidas, e os países desenvolvidos assumindo a liderança, tendo em conta o desenvolvimento e as capacidades dos países em desenvolvimento'
            ],
            [
                'objeito_id'    => 12,
                'codigo'        => '12.2',
                'descricao'     => 'Até 2030, alcançar gestão sustentável e uso eficiente dos recursos naturais'
            ],
            [
                'objetivo_id'   => 12,
                'codigo'        => '12.3',
                'descricao'     => 'Até 2030, reduzir pela metade o desperdício de alimentos per capita mundial, em nível de varejo e do consumidor, e reduzir as perdas de alimentos ao longo das cadeias de produção e abastecimento, incluindo as perdas pós-colheita'
            ],
            [
                'objetivo_id'   => 12,
                'codigo'        => '12.4',
                'descricao'     => 'Até 2020, alcançar o manejo ambientalmente adequado dos produtos químicos e de todos os resíduos, ao longo de todo o ciclo de vida destes, de acordo com os marcos internacionalmente acordados, e reduzir significativamente a liberação destes para o ar, água e solo, para minimizar seus impactos negativos sobre a saúde humana e o meio ambiente'
            ],
            [
                'objetivo_id'   => 12,
                'codigo'        => '12.5',
                'descricao'     => 'Até 2030, reduzir substancialmente a geração de resíduos por meio da prevenção, redução, reciclagem e reuso'
            ],
            [
                'objetivo_id'   => 12,
                'codigo'        => '12.6',
                'descricao'     => 'Incentivar as empresas, especialmente as empresas grandes e transnacionais, a adotar práticas sustentáveis e a integrar informações de sustentabilidade em seu ciclo de relatórios'
            ],
            [
                'objetivo_id'   => 12,
                'codigo'        => '12.7',
                'descricao'     => 'Promover práticas de compras públicas sustentáveis, de acordo com as políticas e prioridades nacionais'
            ],
            [
                'objetivo_id'   => 12,
                'codigo'        => '12.8',
                'descricao'     => 'Até 2030, garantir que as pessoas, em todos os lugares, tenham informação relevante e conscientização sobre o desenvolvimento sustentável e estilos de vida em harmonia com a natureza'
            ],
            [
                'objetivo_id'   => 12,
                'codigo'        => '12.a',
                'descricao'     => 'Apoiar países em desenvolvimento para que fortaleçam suas capacidades científicas e tecnológicas em rumo à padrões mais sustentáveis de produção e consumo'
            ],
            [
                'objetivo_id'   => 12,
                'codigo'        => '12.b',
                'descricao'     => 'Desenvolver e implementar ferramentas para monitorar os impactos do desenvolvimento sustentável para o turismo sustentável que gera empregos, promove a cultura e os produtos locais'
            ],
            [
                'objetivo_id'   => 12,
                'codigo'        => '12.c',
                'descricao'     => 'Racionalizar subsídios ineficientes aos combustíveis fósseis, que encorajam o consumo exagerado, eliminando as distorções de mercado, de acordo com as circunstâncias nacionais, inclusive por meio da reestruturação fiscal e a eliminação gradual desses subsídios prejudiciais, caso existam, para refletir os seus impactos ambientais, tendo plenamente em conta as necessidades específicas e condições dos países em desenvolvimento e minimizando os possíveis impactos adversos sobre o seu desenvolvimento de maneira que proteja os pobres e as comunidades afetadas'
            ]
                            
        ]);

        //ODS 13
        DB::table('metas')->insert([
            [
                'objetivo_id'   => 13,  //codigo ods
                'codigo'        => '13.1',
                'descricao'     => 'Reforçar a resiliência e a capacidade de adaptação a riscos relacionados ao clima e às catástrofes naturais em todos os países *'
            ],
            [
                'objeito_id'    => 13,
                'codigo'        => '13.2',
                'descricao'     => 'Integrar medidas da mudança do clima nas políticas, estratégias e planejamentos nacionais'
            ],
            [
                'objetivo_id'   => 13,
                'codigo'        => '13.3',
                'descricao'     => 'Melhorar a educação, aumentar a conscientização e a capacidade humana e institucional sobre mitigação global do clima, adaptação, redução de impacto, e alerta precoce à mudança do clima'
            ],
            [
                'objetivo_id'   => 13,
                'codigo'        => '13.a',
                'descricao'     => 'Implementar o compromisso assumido pelos países desenvolvidos partes da Convenção Quadro das Nações Unidas sobre Mudança do Clima para a meta de mobilizar conjuntamente US$ 100 bilhões por ano até 2020, de todas as fontes, para atender às necessidades dos países em desenvolvimento, no contexto de ações significativas de mitigação e transparência na implementação; e operacionalizar plenamente o Fundo Verde para o Clima, por meio de sua capitalização, o mais cedo possível'
            ],
            [
                'objetivo_id'   => 13,
                'codigo'        => '13.b',
                'descricao'     => 'Promover mecanismos para a criação de capacidades para o planejamento relacionado à mudança do clima e à gestão eficaz, nos países menos desenvolvidos, inclusive com foco em mulheres, jovens, comunidades locais e marginalizadas'
            ]
                                   
        ]);

        //ODS 14
        DB::table('metas')->insert([
            [
                'objetivo_id'   => 14,  //codigo ods
                'codigo'        => '14.1',
                'descricao'     => 'Até 2025, prevenir e reduzir significativamente a poluição marinha de todos os tipos, especialmente a advinda de atividades terrestres, incluindo detritos marinhos e a poluição por nutrientes'
            ],
            [
                'objeito_id'    => 14,
                'codigo'        => '14.2',
                'descricao'     => 'Até 2020, gerir de forma sustentável e proteger os ecossistemas marinhos e costeiros para evitar impactos adversos significativos, inclusive por meio do reforço da sua capacidade de resiliência, e tomar medidas para a sua restauração, a fim de assegurar oceanos saudáveis e produtivos'
            ],
            [
                'objetivo_id'   => 14,
                'codigo'        => '14.3',
                'descricao'     => 'Minimizar e enfrentar os impactos da acidificação dos oceanos, inclusive por meio do reforço da cooperação científica em todos os níveis'
            ],
            [
                'objetivo_id'   => 14,
                'codigo'        => '14.4',
                'descricao'     => 'Até 2020, efetivamente regular a coleta, e acabar com a sobrepesca, ilegal, não reportada e não regulamentada e as práticas de pesca destrutivas, e implementar planos de gestão com base científica, para restaurar populações de peixes no menor tempo possível, pelo menos a níveis que possam produzir rendimento máximo sustentável, como determinado por suas características biológicas'
            ],
            [
                'objetivo_id'   => 14,
                'codigo'        => '14.5',
                'descricao'     => 'Até 2020, conservar pelo menos 10% das zonas costeiras e marinhas, de acordo com a legislação nacional e internacional, e com base na melhor informação científica disponível'
            ],
            [
                'objetivo_id'   => 14,
                'codigo'        => '14.6',
                'descricao'     => 'Até 2020, proibir certas formas de subsídios à pesca, que contribuem para a sobrecapacidade e a sobrepesca, e eliminar os subsídios que contribuam para a pesca ilegal, não reportada e não regulamentada, e abster-se de introduzir novos subsídios como estes, reconhecendo que o tratamento especial e diferenciado adequado e eficaz para os países em desenvolvimento e os países de menor desenvolvimento relativo deve ser parte integrante da negociação sobre subsídios à pesca da Organização Mundial do Comércio'
            ],
            [
                'objetivo_id'   => 14,
                'codigo'        => '14.7',
                'descricao'     => 'Até 2030, aumentar os benefícios econômicos para os pequenos Estados insulares em desenvolvimento e os países de menor desenvolvimento relativo, a partir do uso sustentável dos recursos marinhos, inclusive por meio de uma gestão sustentável da pesca, aquicultura e turismo'
            ],
            [
                'objetivo_id'   => 14,
                'codigo'        => '14.a',
                'descricao'     => 'Aumentar o conhecimento científico, desenvolver capacidades de pesquisa e transferir tecnologia marinha, tendo em conta os critérios e orientações sobre a Transferência de Tecnologia Marinha da Comissão Oceanográfica Intergovernamental, a fim de melhorar a saúde dos oceanos e aumentar a contribuição da biodiversidade marinha para o desenvolvimento dos países em desenvolvimento, em particular os pequenos Estados insulares em desenvolvimento e os países de menor desenvolvimento relativo'
            ],
            [
                'objetivo_id'   => 14,
                'codigo'        => '14.b',
                'descricao'     => 'Proporcionar o acesso dos pescadores artesanais de pequena escala aos recursos marinhos e mercados'
            ],
            [
                'objetivo_id'   => 14,
                'codigo'        => '14.c',
                'descricao'     => 'Assegurar a conservação e o uso sustentável dos oceanos e seus recursos pela implementação do direito internacional, como refletido na Convenção das Nações Unidas sobre o Direito do Mar,, que provê o arcabouço legal para a conservação e utilização sustentável dos oceanos e dos seus recursos, conforme registrado no parágrafo 158 do “Futuro Que Queremos”'
            ]
                            
        ]);

        //ODS 15
        DB::table('metas')->insert([
            [
                'objetivo_id'   => 15,  //codigo ods
                'codigo'        => '15.1',
                'descricao'     => 'Até 2020, assegurar a conservação, recuperação e uso sustentável de ecossistemas terrestres e de água doce interiores e seus serviços, em especial, florestas, zonas úmidas, montanhas e terras áridas, em conformidade com as obrigações decorrentes dos acordos internacionais'
            ],
            [
                'objeito_id'    => 15,
                'codigo'        => '15.2',
                'descricao'     => 'Até 2020, promover a implementação da gestão sustentável de todos os tipos de florestas, deter o desmatamento, restaurar florestas degradadas e aumentar substancialmente o florestamento e o reflorestamento globalmente'
            ],
            [
                'objetivo_id'   => 15,
                'codigo'        => '15.3',
                'descricao'     => 'Até 2030, combater a desertificação, e restaurar a terra e o solo degradado, incluindo terrenos afetados pela desertificação, secas e inundações, e lutar para alcançar um mundo neutro em termos de degradação do solo'
            ],
            [
                'objetivo_id'   => 15,
                'codigo'        => '15.4',
                'descricao'     => 'Até 2030, assegurar a conservação dos ecossistemas de montanha, incluindo a sua biodiversidade, para melhorar a sua capacidade de proporcionar benefícios, que são essenciais para o desenvolvimento sustentável'
            ],
            [
                'objetivo_id'   => 15,
                'codigo'        => '15.5',
                'descricao'     => 'Tomar medidas urgentes e significativas para reduzir a degradação de habitat naturais, estancar a perda de biodiversidade e, até 2020, proteger e evitar a extinção de espécies ameaçadas'
            ],
            [
                'objetivo_id'   => 15,
                'codigo'        => '15.6',
                'descricao'     => 'Garantir uma repartição justa e equitativa dos benefícios derivados da utilização dos recursos genéticos, e promover o acesso adequado aos recursos genéticos'
            ],
            [
                'objetivo_id'   => 15,
                'codigo'        => '15.7',
                'descricao'     => 'Tomar medidas urgentes para acabar com a caça ilegal e o tráfico de espécies da flora e fauna protegidas, e abordar tanto a demanda quanto a oferta de produtos ilegais da vida selvagem'
            ],
            [
                'objetivo_id'   => 15,
                'codigo'        => '15.8',
                'descricao'     => 'Até 2020, implementar medidas para evitar a introdução e reduzir significativamente o impacto de espécies exóticas invasoras em ecossistemas terrestres e aquáticos, e controlar ou erradicar as espécies prioritárias'
            ],
            [
                'objetivo_id'   => 15,
                'codigo'        => '15.9',
                'descricao'     => 'Até 2020, integrar os valores dos ecossistemas e da biodiversidade ao planejamento nacional e local, nos processos de desenvolvimento, nas estratégias de redução da pobreza, e nos sistemas de contas'
            ],
            [
                'objetivo_id'   => 15,
                'codigo'        => '15.a',
                'descricao'     => 'Mobilizar e aumentar significativamente, a partir de todas as fontes, os recursos financeiros para a conservação e o uso sustentável da biodiversidade e dos ecossistemas'
            ],
            [
                'objetivo_id'   => 15,
                'codigo'        => '15.b',
                'descricao'     => 'Mobilizar significativamente os recursos de todas as fontes e em todos os níveis, para financiar o manejo florestal sustentável e proporcionar incentivos adequados aos países em desenvolvimento, para promover o manejo florestal sustentável, inclusive para a conservação e o reflorestamento'
            ],
            [
                'objetivo_id'   => 15,
                'codigo'        => '15.c',
                'descricao'     => 'Reforçar o apoio global para os esforços de combate à caça ilegal e ao tráfico de espécies protegidas, inclusive por meio do aumento da capacidade das comunidades locais para buscar oportunidades de subsistência sustentável'
            ]

        ]);

        //ODS 16
        DB::table('metas')->insert([
            [
                'objetivo_id'   => 16,  //codigo ods
                'codigo'        => '16.1',
                'descricao'     => 'Reduzir significativamente todas as formas de violência e as taxas de mortalidade relacionada, em todos os lugares'
            ],
            [
                'objeito_id'    => 16,
                'codigo'        => '16.2',
                'descricao'     => 'Acabar com abuso, exploração, tráfico e todas as formas de violência e tortura contra crianças'
            ],
            [
                'objetivo_id'   => 16,
                'codigo'        => '16.3',
                'descricao'     => 'Promover o Estado de Direito, em nível nacional e internacional, e garantir a igualdade de acesso à justiça, para todos'
            ],
            [
                'objetivo_id'   => 16,
                'codigo'        => '16.4',
                'descricao'     => 'Até 2030, reduzir significativamente os fluxos financeiros e de armas ilegais, reforçar a recuperação e devolução de recursos roubados, e combater todas as formas de crime organizado'
            ],
            [
                'objetivo_id'   => 16,
                'codigo'        => '16.5',
                'descricao'     => 'Reduzir substancialmente a corrupção e o suborno em todas as suas formas'
            ],
            [
                'objetivo_id'   => 16,
                'codigo'        => '16.6',
                'descricao'     => 'Desenvolver instituições eficazes, responsáveis e transparentes em todos os níveis'
            ],
            [
                'objetivo_id'   => 16,
                'codigo'        => '16.7',
                'descricao'     => 'Garantir a tomada de decisão responsiva, inclusiva, participativa e representativa em todos os níveis'
            ],
            [
                'objetivo_id'   => 16,
                'codigo'        => '16.8',
                'descricao'     => 'Ampliar e fortalecer a participação dos países em desenvolvimento nas instituições de governança global'
            ],
            [
                'objetivo_id'   => 16,
                'codigo'        => '16.9',
                'descricao'     => 'Até 2030, fornecer identidade legal para todos, incluindo o registro de nascimento'
            ],
            [
                'objetivo_id'   => 16,
                'codigo'        => '16.10',
                'descricao'     => 'Assegurar o acesso público à informação e proteger as liberdades fundamentais, em conformidade com a legislação nacional e os acordos internacionais'
            ],
            [
                'objetivo_id'   => 16,
                'codigo'        => '16.a',
                'descricao'     => 'Fortalecer as instituições nacionais relevantes, inclusive por meio da cooperação internacional, para a construção de capacidades em todos os níveis, em particular nos países em desenvolvimento, para a prevenção da violência e o combate ao terrorismo e ao crime'
            ],
            [
                'objetivo_id'   => 16,
                'codigo'        => '16.b',
                'descricao'     => 'Promover e fazer cumprir leis e políticas não discriminatórias para o desenvolvimento sustentável'
            ]
                                       
        ]);

        //ODS 17
        DB::table('metas')->insert([
            [
                'objetivo_id'   => 17,  //codigo ods
                'codigo'        => '17.1',
                'descricao'     => 'Fortalecer a mobilização de recursos internos, inclusive por meio do apoio internacional aos países em desenvolvimento, para melhorar a capacidade nacional para arrecadação de impostos e outras receitas'
            ],
            [
                'objeito_id'    => 17,
                'codigo'        => '17.2',
                'descricao'     => 'Países desenvolvidos implementarem plenamente os seus compromissos em matéria de assistência oficial ao desenvolvimento, inclusive o compromisso apresentado por vários países desenvolvidos de alcançar a meta de 0,7% da renda nacional bruta para assistência oficial ao desenvolvimento (RNB/AOD) aos países em desenvolvimento, e 0,15 a 0,20% da RNB/AOD para os países de menor desenvolvimento relativo; provedores de AOD são encorajados a considerarem definir uma meta para prover pelo menos 0,20% da RNB/AOD para os países de menor desenvolvimento relativo'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.3',
                'descricao'     => 'Mobilizar recursos financeiros adicionais para os países em desenvolvimento a partir de múltiplas fontes'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.4',
                'descricao'     => 'Ajudar os países em desenvolvimento a alcançar a sustentabilidade da dívida de longo prazo, por meio de políticas coordenadas destinadas a promover o financiamento, a redução e a reestruturação da dívida, conforme apropriado, e tratar da dívida externa dos países pobres altamente endividados para reduzir o superendividamento'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.5',
                'descricao'     => 'Adotar e implementar regimes de promoção de investimentos para os países de menor desenvolvimento relativo'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.6',
                'descricao'     => 'Melhorar a cooperação regional e internacional Norte-Sul, Sul-Sul e triangular e o acesso à ciência, tecnologia e inovação, e aumentar o compartilhamento de conhecimentos em termos mutuamente acordados, inclusive por meio de uma melhor coordenação entre os mecanismos existentes, particularmente no nível das Nações Unidas, e por meio de um mecanismo global de facilitação de tecnologia global'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.7',
                'descricao'     => 'Promover o desenvolvimento, a transferência, a disseminação e a difusão de tecnologias ambientalmente corretas para os países em desenvolvimento, em condições favoráveis, inclusive em condições concessionais e preferenciais, conforme mutuamente acordado'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.8',
                'descricao'     => 'Operacionalizar plenamente o Banco de Tecnologia e o mecanismo de desenvolvimento de capacidades em ciência, tecnologia e inovação para os países de menor desenvolvimento relativo até 2017, e aumentar o uso de tecnologias capacitadoras, em particular tecnologias de informação e comunicação'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.9',
                'descricao'     => 'Reforçar o apoio internacional para a implementação eficaz e orientada do desenvolvimento de capacidades em países em desenvolvimento, a fim de apoiar os planos nacionais para implementar todos os objetivos de desenvolvimento sustentável, inclusive por meio da cooperação Norte-Sul, Sul-Sul e triangular'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.10',
                'descricao'     => 'Promover um sistema multilateral de comércio universal, baseado em regras, aberto, não discriminatório e equitativo no âmbito da Organização Mundial do Comércio, inclusive por meio da conclusão das negociações no âmbito de sua Agenda de Desenvolvimento de Doha'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.11',
                'descricao'     => 'Aumentar significativamente as exportações dos países em desenvolvimento, em particular com o objetivo de duplicar a participação dos países de menor desenvolvimento relativo nas exportações globais até 2020'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.12',
                'descricao'     => 'Concretizar a implementação oportuna de acesso a mercados livres de cotas e taxas, de forma duradoura, para todos os países de menor desenvolvimento relativo, de acordo com as decisões da Organização Mundial do Comércio, inclusive por meio de garantias de que as regras de origem preferenciais aplicáveis às importações provenientes de países de menor desenvolvimento relativo sejam transparentes e simples, e contribuam para facilitar o acesso ao mercado Questões sistêmicas'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.13',
                'descricao'     => 'Aumentar a estabilidade macroeconômica global, inclusive por meio da coordenação e da coerência de políticas'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.14',
                'descricao'     => 'Aumentar a coerência das políticas para o desenvolvimento sustentável'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.15',
                'descricao'     => 'Respeitar o espaço político e a liderança de cada país para estabelecer e implementar políticas para a erradicação da pobreza e o desenvolvimento sustentável'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.16',
                'descricao'     => 'Reforçar a parceria global para o desenvolvimento sustentável complementada por parcerias multissetorias, que mobilizem e compartilhem conhecimento, experiência, tecnologia e recursos financeiros para apoiar a realização dos objetivos do desenvolvimento sustentável em todos os países, particularmente nos países em desenvolvimento'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.17',
                'descricao'     => 'Incentivar e promover parcerias públicas, público-privadas, privadas, e com a sociedade civil eficazes, a partir da experiência das estratégias de mobilização de recursos dessas parcerias Dados, monitoramento e prestação de contas'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.18',
                'descricao'     => 'Até 2020, reforçar o apoio ao desenvolvimento de capacidades para os países em desenvolvimento, inclusive para os países de menor desenvolvimento relativo e pequenos Estados insulares em desenvolvimento, para aumentar significativamente a disponibilidade de dados de alta qualidade, atuais e confiáveis, desagregados por renda, gênero, idade, raça, etnia, status migratório, deficiência, localização geográfica e outras características relevantes em contextos nacionais'
            ],
            [
                'objetivo_id'   => 17,
                'codigo'        => '17.19',
                'descricao'     => 'Até 2030, valer-se de iniciativas existentes, para desenvolver medidas do progresso do desenvolvimento sustentável que complementem o produto interno bruto e apoiar o desenvolvimento de capacidades em estatística nos países em desenvolvimento'
            ]
                                       
        ]);

        

        




    }
}
