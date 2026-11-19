<?php
// data/content.php
$site_data = [
    'info' => [
        'name' => 'Capivara Rota de Aventura',
        'whatsapp' => '5512992163832',
        'insta' => 'capivararota.trekking',
        'email' => 'contato@capivararota.com.br',
        'tagline' => 'Educação Ambiental e Trekking Autêntico'
    ],
    'parceiros' => [
    'hotel-donati' => [
        'nome' => 'Hotel Donati',
        'logo' => 'assets/img/parceiros/hotel-donati-logo.png.webp',
        'regiao' => 'Parque Nacional Itatiaia',
        'categoria' => 'Hospedagem',
        'descricao' => 'Localizado no coração do Parque Nacional de Itatiaia, o Hotel Donati oferece a estrutura perfeita para descanso após as travessias.',
        'cupom' => '', // Opcional
        'link_loja' => 'https://hoteldonati.com.br/', // Opcional
        'endereco' => 'Estrada do Hotel Donati, s/n - Itatiaia, RJ',
    ],
    
],
    'roteiros' => [
        'pedra-da-mina' => [
            'titulo' => 'Pedra da Mina',
            'subtitulo' => 'O topo da Serra da Mantiqueira',
            'imagem_hero' => 'pedra-da-mina-01.avif',
            'imagem_hero_mobile' => 'pedra-da-mina-mobile-01.avif',
            'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro Predra da Mina.',
            'local' => 'mantiqueira', 
            'tipo'  => ['montanhas'], 
            'galeria' => [ // <--- AGORA ESTÁ NO ESCOPO CORRETO DO PHP
                'pedra-da-mina-01.avif',
        'pedra-da-mina-02.avif',
        'pedra-da-mina-03.avif',
        'pedra-da-mina-04.avif',
        'pedra-da-mina-05.avif',
        'pedra-da-mina-06.avif',
        'pedra-da-mina-07.avif',
        'pedra-da-mina-08.avif',
        'pedra-da-mina-09.avif'
    ],
            // <--- ADICIONE ESTE ARRAY COM AS FOTOS VERTICAIS PARA CELULAR (na mesma ordem):
    'dificuldade' => 'DIFÍCIL/PESADO',
    'nivel_tecnico' => 'DIFÍCIL',
    'nivel' => 'avancado',
    'distancia' => '23km',
    'duracao' => '2 dias / 1 noite',
    'ponto_encontro' => 'Passa Quatro - MG',
    'preco' => 'R$ 1.829,00',
    'resumo' => 'A Pedra da Mina, com 2798 metros, é o ponto culminante da Serra da Mantiqueira. Uma jornada técnica e de alta intensidade.',
    
    'descricao_longa' => "
        <p class='mb-4'>Pedra da Mina</p>

<p class='mb-4'>Alta montanha na Serra da Mantiqueira</p>

<p class='mb-4'>Com 2.798 metros de altitude, a Pedra da Mina é o ponto culminante da Serra da Mantiqueira e um dos grandes objetivos do montanhismo brasileiro.</p>

<p class='mb-4'>A ascensão pelo Paiolinho é uma rota exigente, com aproximadamente 9 km e 1.400 metros de desnível positivo até o cume. O percurso apresenta terreno irregular e trechos de maior dificuldade, exigindo preparo físico e experiência em montanhismo.</p>

<p class='mb-4'>Uma experiência de alta montanha</p>

<p class='mb-4'>O roteiro é realizado em 2 dias, com caminhada em ambiente de montanha e variações de terreno e clima.</p>

<p class='mb-4'>No cume, a altitude proporciona uma ampla visão da Mantiqueira e das montanhas do entorno.</p>

<p class='mb-4'>Experiência Capivara</p>

<p class='mb-4'>A Pedra da Mina exige planejamento, preparo e experiência. A condução considera as características do percurso, as condições encontradas no dia e o perfil do grupo.</p>

<p class='mb-4'>Indicado para montanhistas com ótimo preparo físico e experiência compatível com uma ascensão de alta montanha.</p>

<p class='mb-4'>Consulte a próxima data e as condições da experiência.</p>
    ",

    'itinerario' => [
        'Primeiro Dia' => 'Recomenda-se chegada em Passa Quatro - MG;',
        'Segundo Dia' => '05:00h - Café da manhã na pousada;<br>
                        06:00h - Encontro com o guia, embarque no transporte e partida sentido Paiolinho;<br>
                        07:00h - Chegada na base, organizar equipamentos e início da trilha;<br>
                        14:00h - Chegada e montagem de acampamento;<br>
                        15:00h - Desfrutar;<br>
                        19:00h - Jantar - dormir.',
        'Terceiro Dia' => '04:00h - Alvorada e nascer do sol;<br>
                        06:00h - Café da manhã;<br>
                        07:30h - Desmontar acampamento e início da descida;<br>
                        13:30h - Chegada a base e retorno ao Hostel;<br>
                        14:00h - Recomenda-se almoço na base (NÃO INCLUSO).'
    ],

    'o_que_inclui' => [
        'Guia com certificação internacional WFA',
        'Auxiliar de guia (a partir do 5º participante)',
        '01 Jantar na montanha + Café',
        'Transfer ida e volta da pousada',
        'Seguro individual contra acidentes',
        '01 pernoite em quarto coletivo (noite anterior)'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'INGRESSOS DE ACESSO AO COMPLEXO',
        'Bebidas e carregador de mochilas',
        'Equipamentos não listados'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 dias:</strong> Taxa de 10% (adm)</li>
            <li><strong>Até 15 dias:</strong> Taxa de 30% (adm + reserva + logística)</li>
            <li><strong>Até 7 dias:</strong> Taxa de 50% (adm + logística)</li>
            <li><strong>Não comparecimento:</strong> Não há devolução.</li>
            <li><strong>NÃO COMPARECIMENTO no dia do evento:</strong> Não há devolução do investimento.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
<br>
O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
<br>
1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
<br>
2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
<br>
3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
<br>
Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'marins-itaguare' => [
    'titulo' => 'TRAVESSIA MARINS x ITAGUARÉ',
    'subtitulo' => 'A trilha mais técnica e deslumbrante do Brasil',
    'imagem_hero' => 'marins-itaguare-capa.webp', 
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro TRAVESSIA MARINS x ITAGUARÉ.',
            'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'marins-itaguare-001.webp',
        'marins-itaguare-002.webp',
        'marins-itaguare-003.webp',
        'marins-itaguare-004.webp',
        'marins-itaguare-005.webp',
        'marins-itaguare-006.webp',
        'marins-itaguare-007.webp',
        'marins-itaguare-008.webp',
        'marins-itaguare-009.webp',
        'marins-itaguare-010.webp',
        'marins-itaguare-011.webp',
        'marins-itaguare-012.webp',
        'marins-itaguare-013.webp',
        'marins-itaguare-014.webp',
        'marins-itaguare-015.webp',
        'marins-itaguare-016.webp',
        'marins-itaguare-017.webp',
        'marins-itaguare-018.webp',
        'marins-itaguare-019.webp',
        'marins-itaguare-020.webp',
        'marins-itaguare-021.webp',
        'marins-itaguare-022.webp',
        'marins-itaguare-023.webp',
        'marins-itaguare-024.webp',
        'marins-itaguare-025.webp',
        'marins-itaguare-026.webp',
        'marins-itaguare-027.webp',
        'marins-itaguare-028.webp',
        'marins-itaguare-029.webp',
        'marins-itaguare-030.webp',
        'marins-itaguare-031.webp'
    ],
    'dificuldade' => 'ALTA (INTENSIDADE)',
    'nivel_tecnico' => 'DIFÍCIL',
    'nivel' => 'avancado',
    'distancia' => '23km',
    'duracao' => '3 dias / 2 noites',
    'ponto_encontro' => 'Guaratinguetá - SP',
    'preco' => 'R$ 1.829,00',
    'destaque_home' => true,
    'resumo' => 'Considerada a trilha mais técnica da Mantiqueira, esta jornada épica testará sua paixão pelas montanhas com paisagens de tirar o fôlego.',
    
    'descricao_longa' => "
        <p class='mb-4'>Travessia Marins x Itaguaré</p>

<p class='mb-4'>Alta montanha e terreno técnico na Mantiqueira</p>

<p class='mb-4'>A Travessia Marins x Itaguaré percorre uma das cristas mais conhecidas da Serra da Mantiqueira, conectando dois importantes cumes da região.</p>

<p class='mb-4'>O percurso combina caminhada em altitude, trechos de terreno rochoso e scrambling, com passagens em que o uso das mãos é necessário para progredir.</p>

<p class='mb-4'>Uma travessia de montanha</p>

<p class='mb-4'>A rota apresenta grande variação de relevo, trechos técnicos e exposição ao ambiente de altitude. As condições de clima e terreno podem alterar significativamente a dificuldade do percurso.</p>

<p class='mb-4'>É uma experiência indicada para montanhistas com ótimo preparo físico e experiência prévia em terrenos técnicos.</p>

<p class='mb-4'>Experiência Capivara</p>

<p class='mb-4'>Planejamento, condução e segurança fazem parte da experiência, considerando as características da rota, as condições encontradas e o perfil do grupo.</p>

<p class='mb-4'>A proposta é percorrer a crista da Mantiqueira com conhecimento e autonomia, respeitando os limites do ambiente e de cada participante.</p>

<p class='mb-4'>Consulte a próxima data e as condições da Travessia Marins x Itaguaré.</p>
    ",

    'itinerario' => [
        'Primeiro Dia' => 'Recomenda-se chegada em Guaratinguetá-SP para pernoite pré-expedição.',
        'Segundo Dia' => '06:00h - Café da manhã na pousada;<br>
                        06:30h - Encontro com o guia, embarque no transporte e partida;<br>
                        07:00h - Partida em direção à Base Marins - início da trilha;<br>
                        08:00h - Chegada início da trilha, briefing, organizar tudo e iniciar o trekking;<br>
                        12:00h - Chegada e montagem de acampamento;<br>
                        16:00h - Ataque ao cume do Marins;<br>
                        17:30h -  Por do sol e inicio da descida;<br>
                        19:00h - Jantar - dormir.',
        'Terceiro Dia' => '05:00h - Alvorada e café da manhã;<br>
                            06:00h - Desmontar barraca e arrumar mochila;<br>
                            07:00h - Início da caminhada em direção ao Itaguaré;<br>
                            14:00 - Testa do taguaré;<br>
                            16:00h - Ataque ao falso cume do Itaguaré;<br>
                            19:00h - Jantar e dormir.',
        'Quarto Dia' => '05:00h - Alvorada e café da manhã;<br>
                        07:30h - Desmontar barraca e arrumar mochila;<br>
                        08:30h - Início da caminhada em direção a Base;<br>
                        12:30h - Chegada a base do Itaguaré;<br>
                        13:00h - Início do retorno a pousada;<br>
                        14:00h - Chegada na pousada e fim das operações;'
    ],

    'o_que_inclui' => [
        'Guia com certificação internacional WFA (Primeiros Socorros)',
        'Segundo Guia a partir do 4º participante',
        'Café durante o roteiro',
        'Transfer ida e volta a partir da pousada',
        'Seguro individual contra acidentes pessoais',
        '01 pernoite em quarto coletivo na noite anterior'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'Bebidas e lanches extras',
        'Carregador de mochilas particular',
        'Nenhum outro equipamento não listado no item incluso'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 dias:</strong> Taxa de 10% (adm)</li>
            <li><strong>Até 15 dias:</strong> Taxa de 30% (adm + reserva + logística)</li>
            <li><strong>Até 7 dias:</strong> Taxa de 50% (adm + logística)</li>
            <li><strong>Não comparecimento:</strong> Não há devolução.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
<br>
O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
<br>
1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
<br>
2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
<br>
3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
<br>
Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
            'desafio-mantiqueira' => [
    'titulo' => 'DESAFIO MANTIQUEIRA',
    'subtitulo' => 'Marins x Itaguaré + Serra Fina (6 Dias)',
     'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro DESAFIO MANTIQUEIRA.',
    'imagem_hero' => 'desafio-mantiqueira-01.avif', 
                'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'desafio-mantiqueira-01.avif',
        'desafio-mantiqueira-02.avif',
        'desafio-mantiqueira-03.avif',
        'desafio-mantiqueira-04.avif',
        'desafio-mantiqueira-05.avif',
        'desafio-mantiqueira-06.avif',
        'desafio-mantiqueira-07.avif',
        'desafio-mantiqueira-08.avif',
        'desafio-mantiqueira-09.avif',
        'desafio-mantiqueira-10.avif',
        'desafio-mantiqueira-11.avif',
        'desafio-mantiqueira-12.avif',
        'desafio-mantiqueira-13.avif',
        'desafio-mantiqueira-14.avif'
    ],
    'dificuldade' => 'EXTREMA / PESADA',
    'nivel_tecnico' => 'DIFÍCIL',
    'nivel' => 'avancado',
    'distancia' => '75km (aprox.)',
    'duracao' => '6 dias / 5 noites',
    'ponto_encontro' => 'Guaratinguetá - SP',
    'preco' => 'R$ 3.259,00',
    'destaque_home' => true,
    'resumo' => 'A maior aventura de trekking da Mantiqueira. Combine as duas travessias mais icônicas do Brasil em uma expedição épica de 6 dias contínuos.',
    
    'descricao_longa' => "
        <p class='mb-4'>Prepare-se para a maior aventura de trekking da Mantiqueira! O Desafio Mantiqueira combina duas das mais icônicas travessias de montanha do Brasil em uma expedição épica de 6 dias contínuos.</p>
        <p class='mb-4'><strong>O Que Esperar:</strong><br>
        Dia 1-2: Inicie sua jornada com a Travessia Marins x Itaguaré, uma introdução desafiadora às paisagens deslumbrantes da Serra da Mantiqueira.<br>
        Dia 3-6: Em seguida, mergulhe na lendária Serra Fina para mais 4 dias de pura emoção e superação em um dos trekkings mais exigentes do país.</p>
        <p class='mb-4'><strong>Diferenciais:</strong> Esta é uma expedição para grupos exclusivos de apenas 6 pessoas, garantindo segurança e foco total na travessia do 'Auge do Trekking' brasileiro.</p>
        <p>Altamente recomendado para montanhistas experientes, prontos para encarar terrenos técnicos, desníveis acentuados e longas jornadas com mochila cargueira.</p>
    ",

    'itinerario' => [
        'Dia 1-2' => '<strong>Travessia Marins x Itaguaré:</strong> Início da jornada com ascensão técnica, cristas de rocha e acampamentos estratégicos para aclimatação.',
        'Dia 3-6' => '<strong>Travessia Serra Fina:</strong> Imersão total na rota mais exigente do país. Passagem pelos principais cumes e finalização da logística completa de 6 dias.',
        'Final' => 'Retorno à pousada em Guaratinguetá-SP para encerramento e celebração da conquista.'
    ],

    'o_que_inclui' => [
        'Guia com certificação internacional WFA (Áreas Remotas)',
        'Segundo Guia a partir do 5º participante',
        '05 Jantares completos na montanha',
        'Café durante todo o trajeto',
        'Transfer ida e volta a partir da pousada',
        'Seguro individual contra acidentes pessoais',
        '01 pernoite em quarto coletivo na noite anterior'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia (cidades)',
        'INGRESSOS DE ACESSO SERRA FINA',
        'Bebidas extras e carregador de mochilas',
        'Equipamentos de uso pessoal não listados'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 dias:</strong> Taxa de 10% (adm)</li>
            <li><strong>Até 15 dias:</strong> Taxa de 30% (adm + reserva + logística)</li>
            <li><strong>Até 7 dias:</strong> Taxa de 50% (adm + logística)</li>
            <li><strong>Não comparecimento:</strong> Não há devolução.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
<br>
O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
<br>
1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
<br>
2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
<br>
3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
<br>
Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
            'baependi-aiuruoca' => [
    'titulo' => 'BAEPENDI X AIURUOCA',
    'subtitulo' => 'Viva a Mantiqueira: Natureza, História e Pura Emoção',
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro BAEPENDI X AIURUOCA.',
    'imagem_hero' => 'baependi-aiuruoca-01.avif', 
                'local' => 'papagaio', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'baependi-aiuruoca-01.avif',
        'baependi-aiuruoca-02.avif',
        'baependi-aiuruoca-03.avif',
        'baependi-aiuruoca-04.avif',
        'baependi-aiuruoca-05.avif',
        'baependi-aiuruoca-06.avif',
        'baependi-aiuruoca-07.avif',
        'baependi-aiuruoca-08.avif',
        'baependi-aiuruoca-09.avif',
        'baependi-aiuruoca-10.avif',
        'baependi-aiuruoca-11.avif',
        'baependi-aiuruoca-12.avif',
        'baependi-aiuruoca-13.avif',
        'baependi-aiuruoca-14.avif',
        'baependi-aiuruoca-15.avif'
    ],
    'dificuldade' => 'FÁCIL/MODERADO',
    'nivel_tecnico' => 'FÁCIL/MODERADO',
    'nivel' => 'intermediario',
    'distancia' => '32km (aprox.)',
    'duracao' => '3 dias / 2 noites',
    'ponto_encontro' => 'Caxambu - MG',
    'preco' => 'R$ 2.109,00',
    'resumo' => 'Uma travessia inesquecível entre Baependi e Aiuruoca, passando por cachoeiras cristalinas, cânions imponentes e campos de altitude.',
    
    'descricao_longa' => "
        <p class='mb-4'>Viva a Mantiqueira: Natureza, História e Pura Emoção<br><br>
De Baependi a Aiuruoca, você vai se conectar com a natureza e a rica história dessa região.<br><br>
Descubra Tesouros Escondidos<br><br>

Nossos roteiros cuidadosamente planejados te levarão a:<br><br>

Cachoeiras cristalinas: Cachoeira da Juju e a incrível Cachoeira dos Garcias.<br>

Cânions imponentes: O impressionante Cânion do Cavalo Baio.<br>

Campos de altitude: Explore ecossistemas únicos e paisagens deslumbrantes.<br>

Rica biodiversidade: Observe a vida selvagem em seu habitat natural.<br> <br>

Sua Aventura Começa Agora!<br><br>

Seja você um trilheiro experiente ou alguém em busca de uma grande aventura, a travessia Baependi x Aiuruoca é para você. Momentos inesquecíveis esperam!<br>
Pronto para essa expedição? Fale com a Capivara Rota e comece a planejar sua jornada épica na Serra da Mantiqueira. Deixe-nos te guiar!<br>",

    'itinerario' => [
        'Primeiro Dia' => 'Recomenda-se chegada em Caxambu/MG para pernoite pré-expedição.',
        'Segundo Dia' => '06:00h - Café da manhã na pousada;<br>
                          06:30h - Encontro com o guia e partida para o início da trilha;<br>
                          08:30h - Início da caminhada em direção ao Charco;<br>
                          13:00h - Visita à Cachoeira do Charco;<br>
                          16:00h - Montagem do Acampamento Charco;<br>
                          19:00h - Jantar e dormir.',
        'Terceiro Dia' => '05:00h - Alvorada e café da manhã;<br>
                          07:30h - Desmontar barraca e arrumar mochila;<br>
                          08:30h - Início da caminhada rumo ao Retiro dos Pedros;<br>
                          12:30h - Passagem pelo Morro da Canjica;<br>
                          16:00h - Acampamento Retiro dos Pedros;<br>
                          19:00h - Jantar e dormir.',
        'Quarto Dia' => '05:00h - Alvorada e café da manhã;<br>
                         07:30h - Desmontar barraca e arrumar mochila;<br>
                         08:30h - Caminhada em direção ao Pico do Papagaio;<br>
                         12:30h - Ataque ao cume do Pico do Papagaio;<br>
                         16:00h - Visita à Cachoeira dos Garcias;<br>
                         19:00h - Chegada na pousada e fim das operações.'
    ],

    'o_que_inclui' => [
        'Guia com certificação internacional WFA (Primeiros Socorros)',
        'Auxiliar de guia a partir do 4º participante',
        '02 Jantares na montanha',
        'Café durante o roteiro',
        'Transfer ida e volta a partir da pousada em Caxambu/MG',
        'Seguro individual contra acidentes pessoais',
        '01 pernoite em quarto coletivo na noite anterior'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'Bebidas e lanches de trilha extras',
        'Carregador de mochilas',
        'Equipamentos pessoais não listados'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 dias:</strong> Taxa de 10% (adm)</li>
            <li><strong>Até 15 dias:</strong> Taxa de 30% (adm + reserva + logística)</li>
            <li><strong>Até 7 dias:</strong> Taxa de 50% (adm + logística)</li>
            <li><strong>Não comparecimento:</strong> Não há devolução.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
<br>
O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
<br>
1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
<br>
2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
<br>
3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
<br>
Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
            'cachoeiras-mambucaba' => [
    'titulo' => 'CACHOEIRAS MAMBUCABA',
    'subtitulo' => 'Explore o Sertão de Mambucaba em Angra dos Reis',
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro CACHOEIRAS MAMBUCABA.',
    'imagem_hero' => 'mambucaba-01.avif', 
                'local' => 'bocaina', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['cachoeiras', 'praias'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'mambucaba-01.avif',
        'mambucaba-02.avif',
        'mambucaba-03.avif'
    ],
    'dificuldade' => 'FÁCIL/MODERADO',
    'nivel_tecnico' => 'FÁCIL',
    'nivel' => 'iniciante',
    'distancia' => '12km (Total)',
    'duracao' => '1 dia (Bate e Volta)',
    'ponto_encontro' => 'Guaratinguetá - SP',
    'preco' => 'R$ 1.469,00',
    'resumo' => 'Desvende um paraíso secreto: explore as cachoeiras Camisa e Andorinhas em meio à exuberante Mata Atlântica e trechos históricos da Trilha do Ouro.',
    
    'descricao_longa' => "
        <p class='mb-4'>Trilha Cachoeiras. Desvende um paraíso secreto: explore as cachoeiras Camisa e Andorinhas em Angra dos Reis com a <strong>Capivara Rota</strong>!</p>
        <p class='mb-4'>Uma jornada única, pertinho da natureza e da história.</p>
<p class='mb-4'>Por que essa aventura é pra você?</p>
<ul>
<li>Trilha do Ouro: Caminhe por um trecho histórico, sinta a energia do passado.</li>
<li>Mata Atlântica Viva: Cachoeiras em meio a uma natureza exuberante, um cenário que parece jurássico!</li>
<li>Fácil de Aproveitar: Trilha leve a moderada, ideal para todos.</li>
<li>Grupo Exclusivo: Apenas 4 participantes, atenção total para você.</li>
<li>Conforto Total: Transporte seguro de Guaratinguetá/SP.</li>
<li>Cachoeiras Incríveis: Mergulhe e relaxe em águas cristalinas, ainda pouco exploradas.</li>
 </ul>
 <br>
<p class='mb-4'><strong>Vagas limitadas! Garanta sua experiência única no Sertão de Mambucaba.</strong></p>
<p class='mb-4'>Pronto para essa aventura com a Capivara Rota?</p>
    ",

    'itinerario' => [
        '03:00h' => 'Encontro em Guaratinguetá/SP e embarque sentido Angra dos Reis/RJ.',
        '05:30h' => 'Chegada na Ponte de Arame (Angra dos Reis) e início da caminhada.',
        '07:30h' => 'Chegada e banho na Cachoeira das Andorinhas.',
        '09:30h' => 'Exploração da Cachoeira da Camisa.',
        '12:30h' => 'Início do retorno para o transporte.',
        '14:30h' => 'Embarque na Ponte de Arame sentido Guaratinguetá/SP.',
        '17:30h' => 'Chegada em Guaratinguetá e encerramento das operações.'
    ],

    'o_que_inclui' => [
        'Transporte privativo IDA e VOLTA (Base: Guaratinguetá/SP)',
        'Guia com certificação internacional WFA (Áreas Remotas)',
        'Auxiliar de guia para grupos acima de 04 pessoas',
        'Seguro individual contra acidentes pessoais',
        'Café ao longo do trekking',
        '01 Pernoite em quarto coletivo na noite anterior'
    ],

    'nao_inclui' => [
        'Snacks e lanchinhos de trilha (orientamos o que levar)',
        'Refeições extras não citadas',
        'Carregador de equipamentos pessoal',
        'Qualquer item não relacionado no campo Incluso'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 dias:</strong> Taxa de 10% (adm)</li>
            <li><strong>Até 15 dias:</strong> Taxa de 30% (adm + reserva + logística)</li>
            <li><strong>Até 7 dias:</strong> Taxa de 50% (adm + logística)</li>
            <li><strong>Não comparecimento:</strong> Não há devolução.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
<br>
O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
<br>
1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
<br>
2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
<br>
3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
<br>
Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
            'cachoeiras-mantiqueira' => [
    'titulo' => 'CACHOEIRAS MANTIQUEIRA',
    'subtitulo' => 'Explore a diversidade da "Serra que Chora"',
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro CACHOEIRAS MANTIQUEIRA.',
    'imagem_hero' => 'mantiqueira-cachoeiras-01.avif', 
                'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas', 'cachoeiras'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'mantiqueira-cachoeiras-01.avif',
        'mantiqueira-cachoeiras-02.avif',
        'mantiqueira-cachoeiras-03.avif',
        'mantiqueira-cachoeiras-04.avif',
        'mantiqueira-cachoeiras-05.avif',
        'mantiqueira-cachoeiras-06.avif',
        'mantiqueira-cachoeiras-07.avif',
        'mantiqueira-cachoeiras-08.avif'
    ],
    'dificuldade' => 'FÁCIL/MODERADO',
    'nivel_tecnico' => 'FÁCIL',
    'nivel' => 'iniciante',
    'distancia' => 'Variável',
    'duracao' => '2 dias / 1 noites',
    'ponto_encontro' => 'Guaratinguetá - SP',
    'preco' => 'R$ 2.169,00',
    'resumo' => 'Um roteiro flexível que explora os melhores complexos de cachoeiras da Mantiqueira, como Boa Esperança, Janela da Mantiqueira e Andorinhão.',
    
    'descricao_longa' => "
        <p class='mb-4'>A Serra da Mantiqueira abriga inúmeras cachoeiras incriveis, e esse roteiro é pensando na diversidade que a Serra que Chora oferece.</p>
<p class='mb-4'>Com a ideia de explorar a diversidade da região, o roteiro é pensado nas possibilidades como:</p>

<p class='mb-4'>- Complexo Boa Esperança - Delfim Moreira - MG;</p>

<p class='mb-4'>- Complexo Janela da Mantiqueira - Piquete - SP;</p> 

<p class='mb-4'>- Complexo Capela do Jacu - Lavrinhas - SP; </p>

<p class='mb-4'>- Complexo Andorinhão - Passa Quatro - MG;  </p>

<p class='mb-4'>Além deste, diversos outros estão disponíveis. (A consultar). </p>

<p class='mb-4'>Nosso dia a dia começa na cidade de Guaratinguetá - SP onde o grupo será recebido em uma pousada local, o café da manhã está incluso. Após o café partimos em veículos particulares sentido o roteiro preterido no evento. </p>

<p class='mb-4'>Serão 02 dias e diversas cachoeiras de tirar o folego no coração da Mãetiqueira! Vamos juntos crianças!</p>
    ",

    'itinerario' => [
        'Dia 1' => 'Recomenda-se chegada na Pousada Vista Alegre (Guaratinguetá-SP) para recepção e pernoite.',
        'Dia 2' => '06:30h - Café da manhã na pousada;<br>
                    06:30h - Encontro com o guia, embarque no transporte e partida sentido atrativo;<br>
                    08:00h - Chegada na base, organizar equipamentos e início da trilha;<br>
                    11:00h - Inicio do retorno;<br>
                    17:30h - Por do sol;<br>
                    19:00h - Jantar - dormir.',
        'Dia 3' => '05:00h - Alvorada;<br>
                    06:30h - Café da manhã;<br>
                    07:00h - Encontro com o Guia e embarque;<br>
                    07:30 - Inicio do trajeto sentido Base;<br>
                    08:30h - Chegada a base e inicio da caminhada;<br>
                    11:30h - Inicio do retorno para almoço;<br>
                    13:00h - Almoço e retorno ao ponto de encontro; <br>
                    15:00h - Chegada a pousada e fim das operações.'
    ],

    'o_que_inclui' => [
        'Guia com certificação internacional WFA',
        'Segundo Guia a partir do 5º participante',
        '02 Almoços durante o roteiro',
        'Café durante as trilhas',
        'Transfer ida e volta a partir da pousada',
        'Seguro individual contra acidentes pessoais',
        '01 pernoite em quarto coletivo na noite anterior',
        '01 pernoite em quarto coletivo durante o roteiro'
    ],

    'nao_inclui' => [
        'Refeições antes e depois do roteiro (cidade)',
        'Bebidas e gastos extras na pousada',
        'Carregador de mochilas',
        'Equipamentos pessoais de banho e trilha'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 dias:</strong> Taxa de 10% (adm)</li>
            <li><strong>Até 15 dias:</strong> Taxa de 30% (adm + reserva + logística)</li>
            <li><strong>Até 7 dias:</strong> Taxa de 50% (adm + logística)</li>
            <li><strong>Não comparecimento:</strong> Não há devolução.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
<br>
O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
<br>
1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
<br>
2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
<br>
3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
<br>
Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'cachoeiras-gomeral' => [
    'titulo' => 'CACHOEIRAS GOMERAL - GUARATINGUETÁ SP',
    'subtitulo' => 'Circuito de águas cristalinas na Serra da Mantiqueira',
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro CACHOEIRAS GOMERAL - GUARATINGUETÁ SP.',
    'imagem_hero' => 'cachoeiras-gomeral-05.avif', 
    'imagem_hero_mobile' => 'cachoeiras-gomeral-05.webp',
            'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas', 'cachoeiras'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'cachoeiras-gomeral-01.avif',
        'cachoeiras-gomeral-02.avif',
        'cachoeiras-gomeral-03.avif',
        'cachoeiras-gomeral-04.avif',
        'cachoeiras-gomeral-05.avif',
        'cachoeiras-gomeral-06.avif',
        'cachoeiras-gomeral-07.avif',
        'cachoeiras-gomeral-08.avif',
        'cachoeiras-gomeral-09.avif',
        'cachoeiras-gomeral-10.avif',
        'cachoeiras-gomeral-11.avif',
        'cachoeiras-gomeral-12.avif',
        'cachoeiras-gomeral-13.avif',
        'cachoeiras-gomeral-14.avif',
        'cachoeiras-gomeral-15.avif'
    ],
        'galeria_mobile' => [
            'cachoeiras-gomeral-01.webp',
        'cachoeiras-gomeral-02.webp',
        'cachoeiras-gomeral-03.webp',
        'cachoeiras-gomeral-04.webp',
        'cachoeiras-gomeral-05.webp',
        'cachoeiras-gomeral-06.webp',
        'cachoeiras-gomeral-07.webp',
        'cachoeiras-gomeral-08.webp',
        'cachoeiras-gomeral-09.webp',
        'cachoeiras-gomeral-10.webp',
        'cachoeiras-gomeral-11.webp',
        'cachoeiras-gomeral-12.webp',
        'cachoeiras-gomeral-13.webp',
        'cachoeiras-gomeral-14.webp',
        'cachoeiras-gomeral-15.webp'
        ],
    'dificuldade' => 'FÁCIL/MODERADO',
    'nivel_tecnico' => 'FÁCIL/MODERADO',
    'nivel' => 'iniciante',
    'distancia' => '15km (aprox.)',
    'duracao' => '2 dias / 1 noites',
    'ponto_encontro' => 'Guaratinguetá - SP',
    'preco' => 'R$ 1.789,00',
    'resumo' => 'Uma jornada inesquecível pelo Circuito Cachoeiras do Gomeral. Dois dias de pura imersão entre a Pedra Grande, o Vale Encantado e quedas d\'água mágicas.',
    
    'descricao_longa' => "
        <p class='mb-4'>Cachoeiras do Gomeral</p>

<p class='mb-4'>Montanha, cachoeiras e cultura da Mantiqueira</p>

<p class='mb-4'>O Circuito Cachoeiras do Gomeral percorre diferentes ambientes da Serra da Mantiqueira, combinando trilhas, cachoeiras e paisagens rurais da região.</p>

<p class='mb-4'>Em 2 dias de experiência, o roteiro pode incluir locais como Pedra Grande, Cachoeira do Onça, Cachoeira das Bromélias, Cachoeira do Espigão e Vale Encantado, de acordo com a programação e as condições do território.</p>

<p class='mb-4'>Uma experiência na Mantiqueira</p>

<p class='mb-4'>As caminhadas passam por diferentes terrenos e permitem conhecer a natureza e a relação das comunidades com a região.</p>

<p class='mb-4'>O roteiro inclui hospedagem local e contato com a gastronomia da Mantiqueira, integrando caminhada, descanso e conhecimento do território.</p>

<p class='mb-4'>Experiência Capivara</p>

<p class='mb-4'>Planejamento, condução, segurança e conhecimento da região fazem parte da experiência.</p>

<p class='mb-4'>A programação é definida considerando as condições de acesso, clima e perfil do grupo.</p>

<p class='mb-4'>Consulte a próxima data e os atrativos programados para o Circuito Cachoeiras do Gomeral.</p>
    ",

    'itinerario' => [
        'Primeiro Dia' => 'Recomenda-se chegada em Guaratinguetá/SP para pernoite pré-expedição.',
        'Segundo Dia' => '06:30h - Café da manhã;<br>
                          07:30h - Partida sentido Circuito das Cachoeiras;<br>
                          08:00h - Chegada e início da trilha;<br>
                          10:00h - Café servido no local;<br>
                          12:30h - Almoço;<br>
                          15:30h - Saída sentido Mirante para o pôr do sol;<br>
                          19:00h - Jantar e pernoite.',
        'Terceiro Dia' => '06:30h - Café da manhã;<br>
                            07:30h - Saída sentido Cachoeiras;<br>
                            09:30h - Complexo de Cachoeiras;<br>
                            10:00 - Café da manhã no local;<br>
                            12:00h - Retorno;<br>
                            15:30h - Almoço;<br>
                            16:30h - Fim das operações.'
    ],

    'o_que_inclui' => [
        'Guia com certificação internacional WFA (Áreas Remotas)',
        'Auxiliar de guia a partir do 4º participante',
        '01 Jantar na montanha/pousada',
        'Café durante o roteiro',
        'Transfer ida e volta a partir da pousada',
        'Seguro individual contra acidentes pessoais',
        '01 pernoite em quarto coletivo na noite anterior'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia (não citadas)',
        'Bebidas e gastos extras',
        'Carregador de mochilas',
        'Equipamentos pessoais não listados'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 dias:</strong> Taxa de 10% (adm)</li>
            <li><strong>Até 15 dias:</strong> Taxa de 30% (adm + reserva + logística)</li>
            <li><strong>Até 7 dias:</strong> Taxa de 50% (adm + logística)</li>
            <li><strong>Não comparecimento:</strong> Não há devolução.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
<br>
O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
<br>
1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); picadas de animais peçonhentos; exaustão física; hipóxia em altitude, entre outros.
<br>
2. Situações meteorológicas: Mudanças bruscas do tempo, chuva forte, descargas elétricas e névoa atrapalhando a visibilidade.
<br>
3. Demora de resgate: Percurso em local remoto e de difícil acesso. A CONTRATADA não possui equipe exclusiva para resgate (feito por Bombeiros ou Defesa Civil se necessário)."
],
        'janela-da-mantiqueira' => [
    'titulo' => 'CACHOEIRAS JANELA DA MANTIQUEIRA',
    'subtitulo' => 'Seis saltos e vistas épicas na Serra da Mantiqueira',
    'imagem_hero' => 'janela-mantiqueira-01.avif', 
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro CACHOEIRAS JANELA DA MANTIQUEIRA.',
            'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas', 'cachoeiras'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'janela-mantiqueira-01.avif',
        'janela-mantiqueira-02.avif',
        'janela-mantiqueira-03.avif',
        'janela-mantiqueira-04.avif',
        'janela-mantiqueira-05.avif',
        'janela-mantiqueira-06.avif',
        'janela-mantiqueira-07.avif',
        'janela-mantiqueira-08.avif',
        'janela-mantiqueira-09.avif',
        'janela-mantiqueira-10.avif'
    ],
    'dificuldade' => 'FÁCIL',
    'nivel_tecnico' => 'FÁCIL',
    'nivel' => 'iniciante',
    'distancia' => '8km (aprox.)',
    'duracao' => '1 dia (Bate e Volta)',
    'ponto_encontro' => 'Guaratinguetá - SP',
    'preco' => 'R$ 1.149,00',
    'resumo' => 'Explore seis cachoeiras incríveis no Complexo do Marins e conquiste a vista panorâmica de tirar o fôlego da Janela da Mantiqueira.',
    
    'descricao_longa' => "
        <p class='mb-4'>Prepare-se: Janela da Mantiqueira te espera! Seis saltos, vistas épicas, pura emoção na serra.</p>

<p class='mb-4'>Sua Aventura Épica Começa Agora</p>

<p class='mb-4'>A Janela da Mantiqueira, no Complexo Cachoeiras do Marins, é seu convite para a natureza selvagem. Se você já tem experiência em trilhas e ama o desafio, este lugar é para você!</p>

<p class='mb-4'>O Que Esperar</p>

<p class='mb-4'>Comece no Poço do Curiaco, explore seis cachoeiras incríveis e suba até o topo. A recompensa? Uma vista panorâmica de tirar o fôlego da Janela da Mantiqueira! Cada passo vale a pena.</p>

<p class='mb-4'>Próximo Passo:</p>

<p class='mb-4'>Quer viver essa emoção? Reserve agora sua expedição com a Capivara Rota e descubra este segredo da Serra da Mantiqueira. Garanta sua vaga!</p>
    ",

    'itinerario' => [
        'Horários' => '06:00h - Encontro com o guia em Guaratinguetá/SP;<br>
                        06:30h - Saída sentido Complexo do Curiaco - Piquete/SP;<br>
                        08:00h - Chegada ao complexo e inicio do trajeto;<br>
                        12:30h - Café da manhã na Janela;<br>
                        13:30h – Inicio da descida e retorno;<br>
                        15:00h – Chegada ao complexo e inicio do retorno para Guaratinguetá/SP;<br>
                        17:00h - Chegada em Guaratinguetá/SP e fim das operações.'
    ],

    'o_que_inclui' => [
        'Transporte privativo IDA E VOLTA a partir de Guaratinguetá/SP',
        'Guia com certificação em primeiros socorros em áreas remotas',
        'Segundo Guia para grupos acima de 04 pessoas',
        'Seguro individual contra acidentes pessoais',
        'Café ao longo do trekking'
    ],

    'nao_inclui' => [
        'Snacks/lanchinhos de trilha (orientamos o que levar)',
        'Carregador',
        'Qualquer outro item não relacionado em "Inclui"'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 dias:</strong> Taxa de 10% (adm)</li>
            <li><strong>Até 15 dias:</strong> Taxa de 30% (adm + reserva + logística)</li>
            <li><strong>Até 7 dias:</strong> Taxa de 50% (adm + logística)</li>
            <li><strong>Não comparecimento:</strong> Não há devolução.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'itatiaia-parte-baixa' => [
    'titulo' => 'CACHOEIRAS ITATIAIA - PARTE BAIXA',
    'subtitulo' => 'Desperte seus sentidos no primeiro Parque Nacional do Brasil',
    'imagem_hero' => 'itatiaia-baixa-01.avif', 
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro CACHOEIRAS ITATIAIA - PARTE BAIXA.',
            'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas', 'cachoeiras'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'itatiaia-baixa-01.avif',
        'itatiaia-baixa-02.avif',
        'itatiaia-baixa-03.avif',
        'itatiaia-baixa-04.avif',
        'itatiaia-baixa-05.avif',
        'itatiaia-baixa-06.avif',
        'itatiaia-baixa-07.avif',
        'itatiaia-baixa-08.avif',
        'itatiaia-baixa-09.avif',
        'itatiaia-baixa-10.avif',
        'itatiaia-baixa-11.avif'
    ],
    'dificuldade' => 'FÁCIL',
    'nivel_tecnico' => 'FÁCIL',
    'nivel' => 'iniciante',
    'distancia' => '10km (Total aprox.)',
    'duracao' => '2 dias / 1 noite',
    'ponto_encontro' => '<a href="https://www.hoteldonati.com.br" target="_blank" rel="noopener noreferrer" class="underline hover:text-emerald-400 transition">Hotel Donati - Parque Nacional Itatiaia</a>',
    'preco' => 'R$ 2.589,00',
    'resumo' => 'Um paraíso de cachoeiras na Parte Baixa de Itatiaia. Passeio leve e revigorante, ideal para famílias e iniciantes que buscam conexão com a natureza.',
    
    'descricao_longa' => "
        <p class='mb-4'>Trilhas e trekking. Desperte seus sentidos na natureza! A Capivara Rota te leva ao Parque Nacional de Itatiaia, um paraíso de cachoeiras na Parte Baixa. Ideal para quem busca um passeio leve e revigorante, perfeito para famílias e iniciantes.</p>

<p class='mb-4'>O que você vai amar:</p>

<p class='mb-4'>- Poço do Maromba: Mergulho refrescante.</p>
<p class='mb-4'>- Véu da Noiva: Queda d'água deslumbrante.</p>
<p class='mb-4'>- Itaporani e Poronga: Mais belezas naturais para explorar.</p>
<p class='mb-4'>- Itupi: A joia do Rio Campo Belo.</p>

<p class='mb-4'>Tudo isso pertinho do Centro de Visitantes, onde você aprende sobre a história do parque e o montanhismo.</p> 

<p class='mb-4'>Venha viver essa experiência e criar memórias inesquecíveis. Garanta seu lugar com a Capivara Rota e conecte-se com a natureza!</p>
<p class='mb-4'>Faça sua reserva no <a href='https://hoteldonati.com.br/' target='_blank' rel='noopener noreferrer' class='text-emerald-700 font-bold underline hover:text-emerald-600 transition'>Hotel Donati - Parque Nacional Itatiaia</a>
</p>
    ",

    'itinerario' => [
        'Primeiro Dia' => '06:00h - Encontro com o guia em Itatiaia/RJ;<br>
                          06:30h - Saída sentido Parque Nacional Itatiaia;<br>
                          07:30h - Chegada ao Parque em direção ao Hotel Donati;<br>
                          08:30h - Saída sentido Mirante do último Adeus;<br>
                          09:00h – Saída sentido Circuito Cachoeiras Parte Baixa;<br>
                          15:00h – Almoço e retorno ao Hotel;<br>
                          19:00h - Jantar.',
        'Segundo Dia' => '06:30h - Alvorada;<br>
                            07:00h - Café da manhã;<br>
                            07:30h - Saída sentido Circuito das Cachoeiras;<br>
                            08:00h - Cachoeiras; <br>
                            12:00h - Almoço;<br>
                            15:00h - Retorno Hotel Donati;<br>
                            17:00h - Fim das operações.'
    ],

    'o_que_inclui' => [
        '01 Hospedagem no Hotel Donati',
        'Transporte privativo IDA E VOLTA a partir do Hotel Donati',
        'Guia com certificação em Primeiros Socorros em Áreas Remotas (WFA)',
        'Segundo Guia para grupos acima de 05 pessoas',
        'Seguro individual contra acidentes pessoais',
        'Café ao longo do trekking',
        '02 Almoços no Hotel Donati'
    ],

    'nao_inclui' => [
        'Snacks/lanchinhos de trilha (orientamos o que levar)',
        'Carregador de mochilas',
        'Qualquer outro item não descrito acima'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 dias:</strong> Taxa de 10% (adm)</li>
            <li><strong>Até 15 dias:</strong> Taxa de 30% (adm + reserva + logística)</li>
            <li><strong>Até 7 dias:</strong> Taxa de 50% (adm + logística)</li>
            <li><strong>Não comparecimento:</strong> Não há devolução.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'saco-bravo' => [
    'titulo' => 'CACHOEIRA SACO BRAVO',
    'subtitulo' => 'O encontro único entre a cachoeira e o mar em Paraty',
    'imagem_hero' => 'saco-bravo-01.avif', 
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro CACHOEIRA SACO BRAVO.',
            'local' => 'juatinga', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['cachoeiras'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'saco-bravo-01.avif',
        'saco-bravo-02.avif',
        'saco-bravo-03.avif',
        'saco-bravo-04.avif',
        'saco-bravo-05.avif',
        'saco-bravo-06.avif',
        'saco-bravo-07.avif',
        'saco-bravo-08.avif',
        'saco-bravo-09.avif',
        'saco-bravo-10.avif',
        'saco-bravo-11.avif',
        'saco-bravo-12.avif'
    ],
    'dificuldade' => 'FÁCIL/MODERADO',
    'nivel_tecnico' => 'FÁCIL',
    'nivel' => 'intermediario',
    'distancia' => '8km (Total aprox.)',
    'duracao' => '2 dias / 1 noites',
    'ponto_encontro' => 'Paraty - RJ',
    'preco' => 'R$ 1.909,00',
    'resumo' => 'Uma piscina natural de frente para o oceano na Reserva da Juatinga. Uma aventura única que combina trilha na mata, cultura caiçara e um cenário inesquecível.',
    
    'descricao_longa' => "
    <p class='mb-4'>Mar, floresta e território caiçara</p>
<p class='mb-4'>Na Reserva Ecológica da Juatinga, em Paraty, a Cachoeira do Saco Bravo reúne Mata Atlântica, água doce e mar em uma das paisagens mais marcantes da região.</p>
<p class='mb-4'>O acesso é feito por uma trilha de aproximadamente 3 km por trecho, com cerca de 3 horas de caminhada na ida. O percurso possui trechos de subida, descida e terreno irregular, exigindo preparo físico e atenção.</p>
<p class='mb-4'>A experiência vai além da caminhada. Durante o percurso, conhecemos aspectos da natureza, da história e da cultura do território caiçara, sempre com respeito às características e regras da área protegida.</p>
<p class='mb-4'>Informações</p>
<p class='mb-4'>Local: Reserva Ecológica da Juatinga — Paraty, RJ</p>
<p class='mb-4'>Duração: 2 dias / 1 noite</p>
<p class='mb-4'>Trilha: aproximadamente 3 km por trecho</p>
<p class='mb-4'>Tempo: cerca de 3 horas na ida</p>
<p class='mb-4'>Dificuldade: Média/Difícil</p>
<p class='mb-4'>Preparo físico: Recomendado</p>
<p class='mb-4'>Área: Protegida</p>
<p class='mb-4'>Experiência Capivara</p>
<p class='mb-4'>Planejamento, condução, segurança e conhecimento do território fazem parte da experiência.</p>
<p class='mb-4'>Reserve sua vaga e consulte a próxima data disponível.</p>
    ",

    'itinerario' => [
        'Primeiro Dia' => 'Recomenda-se chegada em Paraty-RJ para pernoite pré-roteiro.',
        'Segundo Dia' => '07:30h - Encontro com o guia, embarque sentido Ponta Negra;<br>
                        08:30h - Chegada em Ponta Negra, organizar equipamentos e início da trilha sentido Praia do Sono;<br>
                        09:00h - Cachoeira das Galhetas;<br>
                        11:30h - Praia do Sono;<br>
                        13:00h - Almoço; <br>
                        16:00h - Retorno;<br>
                        19:00h - Jantar - dormir.',
        'Terceiro Dia' => '06:00h - Alvorada e café da manhã;<br>
                            07:00h - Organizar equipamentos para retorno pós-atividade;<br>
                            07:30h - Café da manhã;<br>
                            08:30h - Início da caminhada sentido Saco Bravo;<br>
                            11:30h - Cachoeira do Saco Bravo;<br>
                            13:00h - Retorno;<br>
                            15:30h - Almoço;<br>
                            16:30 - Embarque sentido Cais;<br>
                            17:30h - Chegada ao estacionamento e fim das atividades;'
    ],

    'o_que_inclui' => [
        'Transporte em barco "voadeira" privativo IDA E VOLTA',
        'Guia com certificação internacional WFA (Primeiros Socorros)',
        'Segundo Guia para grupos acima de 04 pessoas',
        '01 Almoço completo em Ponta Negra',
        'Seguro individual contra acidentes pessoais',
        'Café ao longo do trekking'
    ],

    'nao_inclui' => [
        'Pouso na noite anterior ao início do roteiro',
        'Snacks e lanchinhos de trilha (orientamos o que levar)',
        'Carregador de mochilas particular',
        'Qualquer outro item não relacionado no campo Incluso'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 dias:</strong> Taxa de 10% (adm)</li>
            <li><strong>Até 15 dias:</strong> Taxa de 30% (adm + reserva + logística)</li>
            <li><strong>Até 7 dias:</strong> Taxa de 50% (adm + logística)</li>
            <li><strong>Não comparecimento:</strong> Não há devolução.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'vivencia-juatinga' => [
    'titulo' => 'VIVÊNCIA JUATINGA',
    'subtitulo' => 'Aventura e Alma na Reserva da Juatinga',
    'imagem_hero' => 'vivencia-juatinga-01.avif', 
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro VIVÊNCIA JUATINGA.',
            'local' => 'juatinga', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['praias', 'florestas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'vivencia-juatinga-01.avif',
        'vivencia-juatinga-02.avif',
        'vivencia-juatinga-03.avif',
        'vivencia-juatinga-04.avif',
        'vivencia-juatinga-05.avif',
        'vivencia-juatinga-06.avif',
        'vivencia-juatinga-07.avif',
        'vivencia-juatinga-08.avif',
        'vivencia-juatinga-09.avif',
        'vivencia-juatinga-10.avif',
        'vivencia-juatinga-11.avif',
        'vivencia-juatinga-12.avif'
    ],
    'dificuldade' => 'MODERADO',
    'nivel_tecnico' => 'MODERADO',
    'nivel' => 'iniciante',
    'distancia' => 'Variável',
    'duracao' => '2 dias / 1 noite (Atividade)',
    'ponto_encontro' => 'Paraty - RJ',
    'preco' => 'R$ 1.899,00',
    'destaque_home' => true,        
    'resumo' => 'Uma imersão profunda na Reserva da Juatinga. Descubra praias secretas, cachoeiras e a autêntica cultura caiçara em um dos cenários mais preservados da Costa Verde.',
    
    'descricao_longa' => "
        <p class='mb-4'>Reserva da Juatinga</p>

<p class='mb-4'>Mar, Mata Atlântica e cultura caiçara</p>

<p class='mb-4'>A Reserva Ecológica da Juatinga reúne montanhas, floresta, praias, cachoeiras e comunidades caiçaras em um dos territórios mais preservados da Costa Verde.</p>

<p class='mb-4'>Conhecer a Juatinga é percorrer esse território por diferentes caminhos, combinando trilhas, mar e contato com a cultura local.</p>

<p class='mb-4'>Uma experiência de imersão</p>

<p class='mb-4'>Cada roteiro revela uma parte diferente da reserva: praias acessíveis por trilha ou barco, caminhos pela Mata Atlântica, cachoeiras, montanhas e comunidades que mantêm sua relação histórica com o território.</p>

<p class='mb-4'>A experiência também inclui conhecer a história, os costumes e os sabores da cultura caiçara, respeitando o modo de vida local e as características da área protegida.</p>

<p class='mb-4'>Quando ir</p>

<p class='mb-4'>A Juatinga pode ser visitada durante todo o ano. As condições de chuva, mar e trilha influenciam diretamente a experiência e devem ser consideradas no planejamento de cada roteiro.</p>

<p class='mb-4'>Experiência Capivara</p>

<p class='mb-4'>Planejamento, condução, segurança e conhecimento do território fazem parte da experiência.</p>

<p class='mb-4'>Os roteiros são definidos de acordo com o percurso, as condições encontradas e o perfil do grupo, do primeiro contato com a natureza a experiências que exigem maior preparo.</p>

<p class='mb-4'>Consulte as experiências disponíveis na Reserva da Juatinga e encontre o roteiro adequado para você.</p>
    ",

    'itinerario' => [
        'Primeiro Dia' => 'Recomenda-se chegada em Paraty-RJ para pernoite pré-atividade.',
        'Segundo Dia' => '07:30h - Encontro com o guia, embarque em carro e barco até o atrativo escolhido;<br>
                          08:00h - Chegada na base, organização de equipamentos e início da trilha;<br>
                          12:00h - Pausa para almoço caiçara;<br>
                          16:00h - Retorno à base para contemplação do pôr do sol;<br>
                          19:00h - Jantar e pernoite.',
        'Terceiro Dia' => '06:00h - Alvorada e café da manhã;<br>
                          07:00h - Organização de equipamentos para o retorno;<br>
                          08:30h - Início das atividades do dia (praias/cachoeiras);<br>
                          12:30h - Almoço de despedida;<br>
                          15:00h - Retorno à base para resgate de equipamentos e embarque sentido Cais;<br>
                          16:30h - Chegada ao estacionamento e fim das atividades.'
    ],

    'o_que_inclui' => [
        'Guia com certificação internacional WFA (Primeiros Socorros)',
        'Auxiliar de guia a partir do 5º participante',
        '01 Jantar na montanha/base',
        'Café durante o roteiro',
        'Transfer ida e volta a partir da pousada (Carro/Barco)',
        'Seguro individual contra acidentes pessoais',
        '01 pernoite em quarto coletivo na noite anterior'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da vivência',
        'Bebidas extras e lanches de trilha',
        'Carregador de mochilas particular',
        'Nenhum outro equipamento não listado no item Incluso'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 dias:</strong> Taxa de 10% (adm)</li>
            <li><strong>Até 15 dias:</strong> Taxa de 30% (adm + reserva + logística)</li>
            <li><strong>Até 7 dias:</strong> Taxa de 50% (adm + logística)</li>
            <li><strong>Não comparecimento:</strong> Não há devolução.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'pico-tira-chapeu' => [
    'titulo' => 'PICO TIRA CHAPÉU',
    'subtitulo' => 'Sua porta de entrada para o acampamento selvagem na Bocaina',
    'imagem_hero' => 'tira-chapeu-01.avif',
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro PICO TIRA CHAPÉU.',
            'imagem_hero_mobile' => 'tira-chapeu-mobile-01.webp',
            'local' => 'bocaina', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'tira-chapeu-01.avif',
        'tira-chapeu-02.avif',
        'tira-chapeu-03.avif',
        'tira-chapeu-04.avif',
        'tira-chapeu-05.avif',
        'tira-chapeu-06.avif',
        'tira-chapeu-07.avif',
        'tira-chapeu-08.avif',
        'tira-chapeu-09.avif',
        'tira-chapeu-10.avif',
        'tira-chapeu-11.avif'
    ],
            'galeria_mobile' => [
        'tira-chapeu-mobile-01.webp',
        'tira-chapeu-mobile-13.webp',
        'tira-chapeu-mobile-14.webp',
                'tira-chapeu-mobile-01.webp',
                'tira-chapeu-mobile-02.webp',
                'tira-chapeu-mobile-03.webp',
                'tira-chapeu-mobile-04.webp',
                'tira-chapeu-mobile-05.webp',
                'tira-chapeu-mobile-06.webp',
                'tira-chapeu-mobile-07.webp',
                'tira-chapeu-mobile-08.webp',
                'tira-chapeu-mobile-09.webp',
                'tira-chapeu-mobile-10.webp',
                'tira-chapeu-mobile-11.webp',
                'tira-chapeu-mobile-15.webp',
                'tira-chapeu-mobile-12.webp'
                ],
    'dificuldade' => 'FÁCIL/MODERADO',
    'nivel_tecnico' => 'FÁCIL',
    'nivel' => 'iniciante',
    'distancia' => '10km (aprox.)',
    'duracao' => '2 dias / 1 noite',
    'ponto_encontro' => 'Guaratinguetá - SP',
    'preco' => 'R$ 1.469,00',
    'destaque_home' => true,
    'resumo' => 'Conquiste o ponto culminante da Serra da Bocaina (2088m). O roteiro ideal para quem quer evoluir no montanhismo e viver a experiência real de um acampamento selvagem.',
    
    'descricao_longa' => "
        <p class='mb-4'>Pico do Tira Chapéu, com seus 2088m, é seu convite pra um acampamento selvagem inesquecível.</p>

<p class='mb-4'>Sua Aventura Começa Aqui</p>

<p class='mb-4'>Chega de camping comum. No Tira Chapéu, você migra pro acampamento selvagem de um jeito fácil e emocionante. Pra quem tá começando ou quer evoluir, este é o lugar. Aqui, a dificuldade é leve a moderada, perfeita pra você se desafiar e se conectar com a natureza sem complicação técnica.</p>

<p class='mb-4'>Conquiste o Topo e as Estrelas</p>

<p class='mb-4'>Você no topo da Bocaina, vendo a Mantiqueira e a Baía de Angra dos Reis. É um visual pra guardar! E a noite? Prepare-se pra um céu espetacular, milhões de estrelas como você nunca viu.</p>

<p class='mb-4'>Autonomia e Liberdade</p>

<p class='mb-4'>No Tira Chapéu, não tem estrutura. Isso significa autonomia total na sua aventura. Você leva o que precisa e vive a verdadeira experiência selvagem. É o passo ideal pra sair do básico e virar um campista experiente.</p>

<p class='mb-4'>Venha Viver Essa Experiência</p>

<p class='mb-4'>- Pico culminante do Parque Nacional Serra da Bocaina (2088m)</p>

<p class='mb-4'>- Vistas incríveis da Mantiqueira e Angra</p>

<p class='mb-4'>- Perfeito pra iniciantes no acampamento selvagem</p>

<p class='mb-4'>- Céu noturno espetacular</p>

<p class='mb-4'>- Sua transição pro próximo nível</p>

<p class='mb-4'>Bora pro Tira Chapéu? Reserve já sua vaga com a Capivara Rota e viva essa magia!</p>
    ",

    'itinerario' => [
        'Primeiro Dia' => 'Recomenda-se chegada na Pousada Vista Alegre (Guaratinguetá-SP) para pernoite pré-expedição.',
        'Segundo Dia' => '05:30h - Café da manhã na pousada;<br>
                          06:30h - Encontro com o guia e partida sentido Base Tira Chapéu;<br>
                          08:00h - Chegada na base, organização de equipamentos e início da trilha;<br>
                          12:00h - Chegada ao cume e montagem do acampamento selvagem;<br>
                          17:30h - Contemplação do pôr do sol;<br>
                          19:00h - Jantar na montanha e descanso.',
        'Terceiro Dia' => '05:00h - Alvorada para ver o sol nascer no cume;<br>
                          06:30h - Café da manhã e fotos;<br>
                          07:30h - Desmontagem do acampamento (Leave No Trace);<br>
                          08:30h - Início do retorno sentido base;<br>
                          13:30h - Chegada à base e transporte;<br>
                          14:30h - Retorno à pousada e fim das operações;<br>
                          15:00h - Recomenda-se almoço antes de pegar estrada (NÃO INCLUSO).'
    ],

    'o_que_inclui' => [
        'Guia com certificação internacional WFA (Primeiros Socorros)',
        'Auxiliar de guia a partir do 4º participante',
        '01 Jantar na montanha',
        'Café durante o roteiro',
        'Transfer ida e volta a partir da pousada',
        'Seguro individual contra acidentes pessoais',
        '01 pernoite em quarto coletivo na noite anterior'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia (cidade)',
        'Bebidas extras e carregador de mochilas',
        'Equipamentos de camping pessoal (barraca, saco de dormir, etc)',
        'Nenhum outro item não listado no campo Incluso'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 DIAS úteis antes do evento:</strong> você será taxado em 10% do valor do roteiro para cobrir taxas administrativas;</li>
            <li><strong>Até 15 DIAS úteis antes do evento:</strong> você será taxado em 30% do valor do roteiro para cobrir taxas administrativas, multas de reservas e despesas de logística;</li>
            <li><strong>Até 7 DIAS úteis antes do evento:</strong> você será taxado em 50% do valor do roteiro para cobrir taxas administrativas, multas de reservas e de logística;</li>
            <li><strong>NÃO COMPARECIMENTO no dia do evento:</strong> Não há devolução do investimento.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'trilha-do-ouro' => [
    'titulo' => 'TRILHA DO OURO',
    'subtitulo' => 'A Trilha do Ouro (2 Dias), Travessia no Parque Nacional da Serra da Bocaina.',
    'imagem_hero' => 'trilha-ouro-01.avif',
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro TRILHA DO OURO.',
            'local' => 'bocaina', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['florestas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'trilha-ouro-01.avif',
        'trilha-ouro-02.avif',
        'trilha-ouro-03.avif',
        'trilha-ouro-04.avif',
        'trilha-ouro-05.avif',
        'trilha-ouro-06.avif',
        'trilha-ouro-07.avif',
        'trilha-ouro-08.avif',
        'trilha-ouro-09.avif',
        'trilha-ouro-10.avif',
        'trilha-ouro-11.avif',
        'trilha-ouro-12.avif',
        'trilha-ouro-13.avif'
    ],
    'dificuldade' => 'MODERADO/DIFÍCIL',
    'nivel_tecnico' => 'FÁCIL/MODERADO',
    'nivel' => 'intermediario',
    'distancia' => '50km (Total aprox.)',
    'duracao' => '2 dias / 1 noites',
    'ponto_encontro' => 'Guaratinguetá-SP',
    'preco' => 'R$ 2.239,00',
    'destaque_home' => true,
    'resumo' => 'Uma viagem no tempo pela Serra da Bocaina. Siga os passos da história por calçamentos do século XIX e cachoeiras deslumbrantes como a do Veado.',
    
    'descricao_longa' => "
        <p class='mb-4'>Trilha do Ouro</p>

<p class='mb-4'>História, Mata Atlântica e o Caminho de Mambucaba</p>

<p class='mb-4'>A Trilha do Ouro, também conhecida como Caminho de Mambucaba, atravessa a Serra da Bocaina entre São José do Barreiro, em São Paulo, e Mambucaba, em Angra dos Reis, no Rio de Janeiro.</p>

<p class='mb-4'>O percurso passa por trechos históricos do antigo caminho utilizado para o transporte de mercadorias entre o interior e o litoral, incluindo o calçamento de pedra construído no século XIX.</p>

<p class='mb-4'>Uma experiência entre história e natureza</p>

<p class='mb-4'>A caminhada atravessa a Mata Atlântica acompanhando o Rio Mambucaba e seus cursos d'água, com passagens por cachoeiras e áreas preservadas da Serra da Bocaina.</p>

<p class='mb-4'>A experiência também inclui contato com a história da região e a possibilidade de conhecer estruturas e formas de vida associadas ao território, com pernoite e alimentação em hospedagem local.</p>

<p class='mb-4'>O percurso</p>

<p class='mb-4'>Dia 1: saída de São José do Barreiro e início da caminhada pelo Caminho de Mambucaba. Pernoite em hospedagem local, com jantar e café da manhã.</p>

<p class='mb-4'>Dia 2: continuação da travessia por trechos de Mata Atlântica, passando pela Cachoeira do Veado e seguindo em direção a Mambucaba, em Angra dos Reis.</p>

<p class='mb-4'>Experiência Capivara</p>

<p class='mb-4'>Planejamento, condução, segurança e conhecimento do território acompanham o percurso.</p>

<p class='mb-4'>A travessia exige preparo físico para caminhadas prolongadas em terreno irregular e condições naturais variáveis.</p>

<p class='mb-4'>Consulte a próxima data e as condições da Trilha do Ouro.</p>
    ",

    'itinerario' => [
        'Primeiro dia' => 'Recomenda-se chegada em Guaratinguetá/SP',
        'Segundo dia' => '04:00h – Saída Sentido São José do Barreiro – PNSB;<br>
                          06:00h – Café da manhã em São José do Barreiro;<br>
                          06:30h – Saída sentido PNSB;<br>
                          07:30h – Chegada no PNSB e início da caminhada;<br>
                          12:00h – Cachoeiras;<br>
                          17:00h – Chegada na Pousada Barreirinha;<br>
                          19:30h – Jantar;',
        'Terceiro Dia' => '05:00h – Despertar;<br>
                          05:30h – Café da manhã;<br>
                          06:30h – Inicio da Caminhada sentido Mambucaba;<br>
                          09:00h – Cachoeira do Veado;<br>
                          11:30h – Retomar caminhada sentido Ponte de Arame;<br>
                          17:00h – Ponte de Arame – Mambucaba – Angra;<br>
                          20:00h - Chegada em Guaratinguetá-SP e fim das operações.'
    ],

    'o_que_inclui' => [
        'Pouso 01 noite CASA colono com jantar e café da manhã',
        'Pouso na noite ANTERIOR em quarto coletivo',
        'Guia com certificação em Primeiros Socorros em Áreas Remotas',
        'Transfer IDA E VOLTA a partir da pousada em Guaratinguetá/SP e Ponte de arame em Angra dos Reis/RJ',
        'Segundo Guia para grupos acima de 05 pessoas',
        'Seguro individual contra acidentes pessoais',
        'Café ao longo do trekking'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'Bebidas e gastos extras',
        'Equipamentos de uso pessoal não listados'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 dias:</strong> Taxa de 10% (adm)</li>
            <li><strong>Até 15 dias:</strong> Taxa de 30% (adm + reserva + logística)</li>
            <li><strong>Até 7 dias:</strong> Taxa de 50% (adm + logística)</li>
            <li><strong>Não comparecimento:</strong> Não há devolução.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'travessia-juatinga-completa' => [
    'titulo' => 'TRAVESSIA JUATINGA',
    'subtitulo' => 'Travessia Juatinga. Pico Pão de Açúcar x Cachoeira Saco Bravo',
    'imagem_hero' => 'juatinga-completa-01.avif',
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro TRAVESSIA JUATINGA.',
            'imagem_hero_mobile' => 'juatinga-completa-mobile-001.webp',
            'local' => 'juatinga', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['praias', 'florestas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'juatinga-completa-01.avif',
        'juatinga-completa-02.avif',
        'juatinga-completa-03.avif',
        'juatinga-completa-04.avif',
        'juatinga-completa-05.avif',
        'juatinga-completa-06.avif',
        'juatinga-completa-07.avif',
        'juatinga-completa-08.avif',
        'juatinga-completa-09.avif',
        'juatinga-completa-10.avif',
        'juatinga-completa-11.avif',
        'juatinga-completa-11.avif',
        'juatinga-completa-12.avif'
    ],
            'galeria_mobile' => [
        'juatinga-completa-mobile-001.webp',
        'juatinga-completa-mobile-002.webp',
        'juatinga-completa-mobile-003.webp',
        'juatinga-completa-mobile-004.webp',
        'juatinga-completa-mobile-005.webp',
        'juatinga-completa-mobile-006.webp',
        'juatinga-completa-mobile-007.webp',
        'juatinga-completa-mobile-008.webp',
        'juatinga-completa-mobile-009.webp',
        'juatinga-completa-mobile-010.webp',
        'juatinga-completa-mobile-011.webp',
        'juatinga-completa-mobile-012.webp',
        'juatinga-completa-mobile-013.webp',
        'juatinga-completa-mobile-014.webp',
        'juatinga-completa-mobile-015.webp',
        'juatinga-completa-mobile-016.webp',
        'juatinga-completa-mobile-017.webp',
        'juatinga-completa-mobile-018.webp',
        'juatinga-completa-mobile-019.webp',
        'juatinga-completa-mobile-020.webp',
        'juatinga-completa-mobile-021.webp',
        'juatinga-completa-mobile-022.webp',
        'juatinga-completa-mobile-023.webp',
        'juatinga-completa-mobile-024.webp',
        'juatinga-completa-mobile-025.webp',
        'juatinga-completa-mobile-026.webp',
        'juatinga-completa-mobile-027.webp',
        'juatinga-completa-mobile-028.webp',
        'juatinga-completa-mobile-029.webp',
        'juatinga-completa-mobile-030.webp',
        'juatinga-completa-mobile-031.webp',
        'juatinga-completa-mobile-032.webp'
        ],
    'dificuldade' => 'FÁCIL/MODERADO',
    'nivel_tecnico' => 'FÁCIL',
    'nivel' => 'intermediario',
    'distancia' => '40km (Total aprox.)',
    'duracao' => '4 dias / 3 noites',
    'ponto_encontro' => 'Paraty-RJ',
    'preco' => 'R$ 3.309,00',
    'destaque_home' => true,
    'resumo' => 'Viva a Costa Verde do Rio como nunca! Um clássico do trekking com 4 dias de imersão na natureza e cultura caiçara, do Pão de Açúcar à Cachoeira do Saco Bravo.',
    
    'descricao_longa' => "
        <p class='mb-4'>Quatro dias de imersão em território caiçara</p>

<p class='mb-4'>A Travessia Juatinga percorre diferentes ambientes da Reserva Ecológica da Juatinga, em Paraty, conectando Mata Atlântica, montanhas, praias, comunidades caiçaras e trechos percorridos pelo mar.</p>

<p class='mb-4'>São 4 dias de caminhada e imersão no território, passando por lugares como Itaoca, Martins de Sá, Saco do Mamanguá e Cachoeira do Saco Bravo, de acordo com o roteiro e as condições da região.</p>

<p class='mb-4'>Uma travessia além da caminhada</p>

<p class='mb-4'>O percurso combina trilhas, mar, hospedagem e alimentação em estruturas locais, proporcionando contato direto com a realidade das comunidades que vivem na reserva.</p>

<p class='mb-4'>A experiência inclui conhecimento sobre o território, sua natureza, história e cultura caiçara, sempre considerando as características de uma área protegida.</p>

<p class='mb-4'>Experiência Capivara</p>

<p class='mb-4'>Planejamento, condução, segurança e conhecimento da região acompanham todo o percurso.</p>

<p class='mb-4'>A travessia exige preparo físico e disposição para caminhadas em terrenos variados. O ritmo e a programação são definidos considerando as condições do território e o perfil do grupo.</p>

<p class='mb-4'>Consulte a próxima data e as condições da Travessia Juatinga.</p>
    ",

    'itinerario' => [
        'PRIMEIRO DIA' => 'Recomenda-se chegada em Paraty/RJ;',
        'SEGUNDO DIA' => '06:30h - Chegada na Vila de Oratório onde os carros ficarão em estacionamento privativo e encontro com o guia. Um veículo privativo seguirá até Parati-Mirim com o grupo e equipamentos. De lá, partiremos em barco "voadeira" até a Praia do Cruzeiro, no Saco do Mamanguá. Faremos trilha estilo hiking, com mochila de ataque;<br>
                          07:30h - Início da trilha Pão de Açúcar;<br>
                          09:30h - Partiremos em barco "voadeira" até a Praia Grande da Cajaíba;<br>
                          10:00h -  Início da caminhada com mochila leve entre a Grande da Cajaíba e o Pouso da Cajaíba;<br>
                          15:00h – Chegada no Pouso da Cajaíba para curtir a praia;<br>
                          19:00h - Jantar.',
        'TERCEIRO DIA' => '07:00h - Café da manhã;<br>
                          08:00h - Início da caminhada em direção à Martins de Sá;<br>
                          11:00h - Martin de Sá - curtição;<br>
                          13:00h - Saída Martin de Sá em direção à Cairuçu das Pedras;<br>
                          16:30h – Chegada no Cairuçu – acesso a praia após avaliação do mar;<br>
                          19:00h - Jantar.',
        'QUARTO DIA' => '07:00h - Café da manhã;<br>
                         08:30h - Início da caminhada em direção à Ponta Negra;<br>
                         13:30h - Chegada em Ponta Negra – aproveitar a praia;<br>
                         19:00h - Janta.',
        'QUINTO DIA' => '05:00h - Café da Manhã;<br>
                         06:00h - Saída sentido Saco Bravo;<br>
                         09:30h - Chegada Cachoeira Saco Bravo;<br>
                         11:30h -  Saída Cachoeira Saco Bravo;<br>
                         15:00h - Almoço;<br>
                         16:00h - Barco "voadeira" sentido Condomínio Laranjeiras e Vila Oratório;<br>
                         17:00h - Chegada ao estacionamento e final da operação.'
    ],

    'o_que_inclui' => [
        'Transporte privativo: Oratória x Parati-Mirim',
        'Transporte em barco "voadeira" privativo: Parati-Mirim x Saco de Mamanguá (Pão de Açúcar, Cajaíba, Ponta Negra e Laranjeiras)',
        'Pouso 03 noites casa caiçara',
        'Guia com certificação em Primeiros Socorros em Áreas Remotas',
        'Segundo Guia para grupos acima de 04 pessoas',
        'Três jantares, três cafés da manhã e um almoço em Ponta Negra (último dia)',
        'Seguro individual contra acidentes pessoais',
        'Café ao longo do trekking'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'Bebidas e carregador de mochilas',
        'Nenhum outro equipamento não listado no item incluso'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 dias:</strong> Taxa de 10% (adm)</li>
            <li><strong>Até 15 dias:</strong> Taxa de 30% (adm + reserva + logística)</li>
            <li><strong>Até 7 dias:</strong> Taxa de 50% (adm + logística)</li>
            <li><strong>Não comparecimento:</strong> Não há devolução.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'agulhas-prateleiras' => [
    'titulo' => 'PICO AGULHAS NEGRAS x PICO PRATELEIRAS',
    'subtitulo' => 'Descubra a grandiosidade do Brasil.',
    'imagem_hero' => 'agulhas-prateleiras-01.avif', 
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro PICO AGULHAS NEGRAS x PICO PRATELEIRAS.',
            'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'agulhas-prateleiras-01.avif',
        'agulhas-prateleiras-02.avif',
        'agulhas-prateleiras-03.avif',
        'agulhas-prateleiras-04.avif'
    ],
    'dificuldade' => 'MODERADO',
    'nivel_tecnico' => 'MODERADO/DIFÍCIL',
    'nivel' => 'intermediario',
    'distancia' => 'Variável (Ataque aos cumes)',
    'duracao' => '2 dias / 1 noites',
    'ponto_encontro' => 'Guaratinguetá-SP',
    'preco' => 'R$ 2.149,00',
    'resumo' => 'Explore o primeiro Parque Nacional do Brasil. Um cenário de tirar o fôlego com as famosas Agulhas Negras e o imponente Maciço das Prateleiras.',
    
    'descricao_longa' => "
        <p class='mb-4'>Descubra a grandiosidade do Brasil.</p>
        <p class='mb-4'>O Parque Nacional do Itatiaia te espera. Um cenário de tirar o fôlego, com as famosas Agulhas Negras e o imponente Maciço das Prateleiras.</p>
        <p class='mb-4'>Com a Capivara Rota, sua jornada é exclusiva. Criamos o roteiro perfeito para seu grupo, com segurança e todo o suporte.</p>
        <p>Sua aventura começa aqui. Explore o primeiro Parque Nacional do Brasil de um jeito só seu.</p>
    ",

    'itinerario' => [
        'PRIMEIRO DIA' => 'Recomenda-se chegada em Guaratinguetá/SP;',
        'SEGUNDO DIA' => '05:00h - Café da manhã na pousada;<br>
                          06:00h - Encontro com o guia, embarque no transporte e partida sentido Portaria PNI;<br>
                          07:00h - Chegada na portaria, organizar equipamentos para início da trilha;<br>
                          08:00h - Saida sentido Agulhas;<br>
                          12:00h - Cume Cruzeiro - Ataque ao livro sujeito a avaliação;<br>
                          15:30h - Retorno ao abrigo Rebouças e retorno para o Hostel;<br>
                          17:30h - Chegada ao Hostel;<br>
                          19:00h - Jantar - dormir.',
        'TERCEIRO DIA' => '05:30h - Alvorada e café da manhã;<br>
                          06:30h - Saída sentido Portaria do PNI;<br>
                          07:30h - Chegada na porta, organizar equipamentos e partir sentido Patreleiras;<br> 
                          10:30h - Cume Patreleiras;<br>
                          12:30h - Inicio de retorno sentido Abrigo Rebouças;<br>
                          14:00h - Chegada ao Abrigo e retorno ao hostel;<br>
                          15:00h - Chegada ao hostel e fim das operações;<br>
                          17:00h - Recomenda-se almoço na região! (NÃO INCLUSO).'
    ],

    'o_que_inclui' => [
        'Guia com certificação internacional em Primeiros Socorros - WFA',
        'Auxiliar de guia a partir do 4º participante',
        '01 (UM) Jantar na montanha',
        'Café durante o roteiro',
        'Transfer ida e volta a partir do hostel',
        'Seguro individual contra acidentes pessoais',
        'Ingresso de acesso ao Parque Nacional do Itatiaia',
        '02 pernoites em quarto coletivo durante o evento'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'Bebidas e carregador de mochilas',
        'Nenhum outro equipamento não listado no item “incluso”'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 dias:</strong> Taxa de 10% (adm)</li>
            <li><strong>Até 15 dias:</strong> Taxa de 30% (adm + reserva + logística)</li>
            <li><strong>Até 7 dias:</strong> Taxa de 50% (adm + logística)</li>
            <li><strong>Não comparecimento:</strong> Não há devolução.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'meia-serra-fina-01-dia' => [
    'titulo' => 'MEIA SERRA FINA 01 DIA',
    'subtitulo' => 'A Meia Serra Fina em 1 dia com a Capivara Rota é a experiência épica que você busca.',
    'imagem_hero' => 'meia-serra-fina-01.avif', 
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro MEIA SERRA FINA 01 DIA.',
            'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'meia-serra-fina-01.avif',
        'meia-serra-fina-02.avif',
        'meia-serra-fina-03.avif',
        'meia-serra-fina-04.avif',
        'meia-serra-fina-05.avif',
        'meia-serra-fina-06.avif',
        'meia-serra-fina-07.avif',
        'meia-serra-fina-08.avif',
        'meia-serra-fina-09.avif',
        'meia-serra-fina-10.avif',
        'meia-serra-fina-11.avif'
    ],
    'dificuldade' => 'DIFÍCIL',
    'nivel_tecnico' => 'DIFÍCIL',
    'nivel' => 'avancado',
    'distancia' => '20 km',
    'duracao' => '1 dias / 1 noite (Total com pernoite em Passa Quatro)',
    'ponto_encontro' => 'Passa Quatro-MG',
    'preco' => 'R$ 1.559,00',
    'resumo' => 'Enfrente um dos maiores desafios do montanhismo brasileiro: 20 km de trilha técnica na Serra da Mantiqueira, atingindo os principais picos da Serra Fina em um único dia.',
    
    'descricao_longa' => "
        <p class='mb-4'>A Meia Serra Fina em 1 dia com a Capivara Rota é a experiência épica que você busca. Enfrente um dos maiores desafios do montanhismo brasileiro: 20 km de trilha técnica na Serra da Mantiqueira.</p>
        <p class='mb-4'>Conquiste picos icônicos como o Quartzito, Passo dos Anjos, Capim Amarelo, Melano e o imponente Teto da Mantiqueira, culminando na Pedra da Mina, o ponto mais alto da Mantiqueira.</p>
        <p class='mb-4'>Por que escolher a Capivara Rota?<br>
        Desafio Intenso: Supere seus limites em uma aventura de alto nível.<br>
        Beleza Selvagem: Explore paisagens intocadas e memoráveis.<br>
        Cumes Conquistados: Atinga os principais picos da Serra Fina em um dia.</p>
        <p class='mb-4'>Conecte-se com a natureza e sua força interior. Viva uma experiência inesquecível.</p>
        <p>Agende agora sua aventura. Deixe a Capivara Rota guiar você ao topo!</p>
    ",

    'itinerario' => [
        'PRIMEIRO DIA' => 'Recomenda-se chegada em Passa Quatro - MG;',
        'SEGUNDO DIA' => '04:30h – Café da manhã;<br>
                          05:30h – Saída no 4x4:<br>
                          06:00h – Chegada na Toca do Lobo - Início da caminhada;<br>
                          09:30h – Cume Capim Amarelo;<br>
                          13:30h – Pedra da Mina;<br>
                          17:00h – Base Paiolinho.'
    ],

    'o_que_inclui' => [
        '01 diária em hostel (quarto coletivo) em Passa Quatro - MG',
        'Transporte IDA E VOLTA a partir de Passa Quatro',
        'Guia com certificação em primeiros socorros em áreas remotas',
        'Segundo Guia a partir do 5º participante',
        'Lanche na Pedra da Mina',
        'Seguro contra acidentes pessoais',
        'Banho no final da trilha'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'INGRESSOS DE ACESSO AO COMPLEXO',
        'Bebidas e carregador de mochilas'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 DIAS úteis antes do evento:</strong> você será taxado em 10% do valor do roteiro para cobrir taxas administrativas;</li>
            <li><strong>Até 15 DIAS úteis antes do evento:</strong> você será taxado em 30% do valor do roteiro para cobrir taxas administrativas, multas de reservas e despesas de logística;</li>
            <li><strong>Até 7 DIAS úteis antes do evento:</strong> você será taxado em 50% do valor do roteiro para cobrir taxas administrativas, multas de reservas e de logística;</li>
            <li><strong>NÃO COMPARECIMENTO no dia do evento:</strong> Não há devolução do investimento.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate and acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'marins-bate-volta' => [
    'titulo' => 'PICO DOS MARINS BATE E VOLTA',
    'subtitulo' => 'Pico dos Marins em 1 dia com a Capivara Rota!',
    'imagem_hero' => 'marins-bate-volta-01.avif', 
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro PICO DOS MARINS BATE E VOLTA.',
            'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'marins-bate-volta-01.avif',
        'marins-bate-volta-02.avif',
        'marins-bate-volta-03.avif',
        'marins-bate-volta-04.avif',
        'marins-bate-volta-05.avif',
        'marins-bate-volta-06.avif'
    ],
    'dificuldade' => 'MODERADO',
    'nivel_tecnico' => 'MODERADO',
    'nivel' => 'intermediario',
    'distancia' => '7 km (subida)',
    'duracao' => '1 dias / 1 noite (Total com pernoite em Guaratinguetá)',
    'ponto_encontro' => 'Guaratinguetá-SP',
    'preco' => 'R$ 949,00',
    'resumo' => 'O Pico dos Marins te chama. Com mais de 2.400 metros, uma trilha intensa, vistas de tirar o fôlego e um desafio para aventureiros.',
    
    'descricao_longa' => "
        <p class='mb-4'>O Pico dos Marins te chama. Com mais de 2.400 metros, é um dos maiores do Brasil, na divisa entre São Paulo e Minas. Uma trilha intensa, vistas de tirar o fôlego e um desafio para aventureiros.</p>
        
        <p class='mb-4'>Sua Aventura Começa Agora<br>
        Nossa expedição de 1 dia é para quem busca superação. A trilha tem 7 km de subida íngreme, com pedras e trechos técnicos. Exige preparo, mas a recompensa é imensa.</p>
        
        <p class='mb-4'>Prepare-se para o Desafio<br>
        O Pico dos Marins é um lugar selvagem. Não há estrutura. O clima muda rápido, podendo chegar a -10°C. Por isso, a preparação é chave!</p>
        
        <p class='mb-4'>Sua Segurança, Nossa Prioridade<br>
        A Capivara Rota garante sua aventura segura:<br>
        Guias experientes: Certificados em primeiros socorros em áreas remotas.<br>
        Apoio extra: Segundo guia a partir do 4º participante.<br>
        Checklist completo: Saiba o que levar e o que não levar.</p>
        
        <p class='mb-4'>Tudo que você precisa saber<br>
        Vamos te dar todas as dicas de vestuário, hidratação, alimentação e segurança. Assim, sua experiência será completa e protegida.</p>
        
        <p>Pronto para ir além?<br>
        Agende sua vaga e viva essa aventura com a Capivara Rota!</p>
    ",

    'itinerario' => [
        'PRIMEIRO DIA' => 'Recomenda-se chegada em Guaratinguetá/SP;',
        'SEGUNDO DIA' => '11:30h - Refeição pousada;<br>
                          00:30h - Encontro com o guia, embarque no transporte e partida sentido Base Marins;<br>
                          01:30h - Chegada na base, organizar equipamentos e início da trilha;<br>
                          05:00h - Cume Marins;<br>
                          06:30h - Inicio de retorno sentido Base;'
    ],

    'o_que_inclui' => [
        'Guia com certificação internacional em Primeiros Socorros - WFA',
        'Auxiliar de guia a partir do 5º participante',
        'Café durante o roteiro',
        'Transfer ida e volta a partir da pousada',
        'Seguro individual contra acidentes pessoais',
        '01 pernoite em quarto coletivo na noite anterior'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'Bebidas e carregador de mochilas',
        'Nenhum outro equipamento não listado no item “incluso”'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 DIAS úteis antes do evento:</strong> você será taxado em 10% do valor do roteiro para cobrir taxas administrativas;</li>
            <li><strong>Até 15 DIAS úteis antes do evento:</strong> você será taxado em 30% do valor do roteiro para cobrir taxas administrativas, multas de reservas e despesas de logística;</li>
            <li><strong>Até 7 DIAS úteis antes do evento:</strong> você será taxado em 50% do valor do roteiro para cobrir taxas administrativas, multas de reservas e de logística;</li>
            <li><strong>NÃO COMPARECIMENTO no dia do evento:</strong> Não há devolução do investimento.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'marins-itaguare-01-dia' => [
    'titulo' => 'TRAVESSIA MARINS x ITAGUARÉ 01 DIA',
    'subtitulo' => 'Travessia Marins x Itaguaré com a Capivara Rota!',
    'imagem_hero' => 'marins-itaguare-1d-01.avif', 
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro TRAVESSIA MARINS x ITAGUARÉ 01 DIA.',
            'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'marins-itaguare-1d-01.avif',
        'marins-itaguare-1d-02.avif',
        'marins-itaguare-1d-03.avif',
        'marins-itaguare-1d-04.avif',
        'marins-itaguare-1d-05.avif',
        'marins-itaguare-1d-06.avif',
        'marins-itaguare-1d-07.avif',
        'marins-itaguare-1d-08.avif',
        'marins-itaguare-1d-09.avif',
        'marins-itaguare-1d-10.avif',
        'marins-itaguare-1d-11.avif',
        'marins-itaguare-1d-12.avif'
    ],
    'dificuldade' => 'ALTA',
    'nivel_tecnico' => 'DIFÍCIL',
    'nivel' => 'avancado',
    'distancia' => '23km (aprox.)',
    'duracao' => '1 dias / 1 noite (Total com pernoite em Guaratinguetá)',
    'ponto_encontro' => 'Guaratinguetá-SP',
    'preco' => 'R$ 1.829,00',
    'resumo' => 'Considerada por muitos a trilha mais técnica e deslumbrante do Brasil, esta jornada épica na Serra da Mantiqueira vai testar sua paixão por montanhas.',
    
    'descricao_longa' => "
        <p class='mb-4'>Travessia Marins x Itaguaré com a Capivara Rota!</p>
        
        <p class='mb-4'>O Desafio Épico<br>
        Com mais de 2.000 metros de elevação, você vai encarar um misto de caminhada e escalada em rochas, exigindo preparo e foco. Cada passo é uma conquista, e suas mãos serão aliadas indispensáveis, junto aos bastões de caminhada. É uma experiência intensa, mas que recompensa com paisagens de tirar o fôlego e uma sensação de superação inigualável.</p>
        
        <p class='mb-4'>Sua Aventura, Nosso Suporte<br>
        Com a Capivara Rota, você terá o suporte completo para dominar a Marins x Itaguaré. Esta travessia é para poucos, mas a experiência que ela oferece é para a vida toda.</p>
        
        <p>Pronto para transformar seu espírito e conquistar o topo?</p>
    ",

    'itinerario' => [
        'PRIMEIRO DIA' => 'Recomenda-se chegada em Guaratinguetá/SP;',
        'SEGUNDO DIA' => '00:30h - Encontro com o guia, embarque no transporte e partida sentido Base Marins;<br>
                          01:30h - Chegada na base, organizar equipamentos e início da trilha;<br>
                          05:00h - Cume Marins;<br>
                          11:30h - Cume Marinzinho;<br>
                          14:30h - Pedra Redonda;<br>
                          19:00h - Base Itaguaré e retorno para Guaratinguetá/SP;<br>
                          20:30h - Chegada na pousada e fim das operações.'
    ],

    'o_que_inclui' => [
        'Guia com certificação internacional em Primeiros Socorros em Áreas Remotas',
        'Segundo Guia a partir do 4º participante',
        'Café durante o roteiro',
        'Transfer IDA E VOLTA a partir da pousada',
        'Seguro individual contra acidentes pessoais',
        '01 pernoite em quarto coletivo na noite anterior'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'Bebidas e carregador de mochilas',
        'Nenhum outro equipamento não listado no item “incluso”'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 DIAS úteis antes do evento:</strong> você será taxado em 10% do valor do roteiro para cobrir taxas administrativas;</li>
            <li><strong>Até 15 DIAS úteis antes do evento:</strong> você será taxado em 30% do valor do roteiro para cobrir taxas administrativas, multas de reservas e despesas de logística;</li>
            <li><strong>Até 7 DIAS úteis antes do evento:</strong> você será taxado em 50% do valor do roteiro para cobrir taxas administrativas, multas de reservas e de logística;</li>
            <li><strong>NÃO COMPARECIMENTO no dia do evento:</strong> Não há devolução do investimento.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reaction alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'serra-fina-01-dia' => [
    'titulo' => 'SERRA FINA 01 DIA',
    'subtitulo' => 'Serra Fina em um dia!',
    'imagem_hero' => 'serra-fina-1d-01.avif',
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro SERRA FINA 01 DIA.',
            'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'serra-fina-1d-01.avif',
        'serra-fina-1d-02.avif',
        'serra-fina-1d-03.avif',
        'serra-fina-1d-04.avif',
        'serra-fina-1d-05.avif',
        'serra-fina-1d-06.avif',
        'serra-fina-1d-07.avif',
        'serra-fina-1d-08.avif',
        'serra-fina-1d-09.avif',
        'serra-fina-1d-10.avif',
        'serra-fina-1d-11.avif',
        'serra-fina-1d-12.avif',
        'serra-fina-1d-13.avif'
    ],
    'dificuldade' => 'ALTA',
    'nivel_tecnico' => 'DIFÍCIL',
    'nivel' => 'avancado',
    'distancia' => 'Aprox. 30km (Travessia completa)',
    'duracao' => '1 dias / 1 noite (Total com pernoite em Passa Quatro)',
    'ponto_encontro' => 'Passa Quatro-MG',
    'preco' => 'R$ 2.149,00',
    'resumo' => 'A Capivara Rota te desafia para a travessia mais difícil do Brasil. Conquiste a Pedra da Mina e o Pico dos Três Estados em uma jornada intensa e épica.',
    
    'descricao_longa' => "
        <p class='mb-4'>A Capivara Rota te desafia para a travessia mais difícil do Brasil. Uma aventura intensa, feita para quem busca adrenalina e paisagens incríveis.</p>
        
        <p class='mb-4'><strong>O que te espera?</strong><br>
        Conquiste a Pedra da Mina (4º pico mais alto do Brasil) e o Pico dos Três Estados (10º).<br>
        Desafio Puro: Pouca água, subidas íngremes e frio intenso. Cada passo é uma superação.<br>
        Aventura Leve: Mochila de ataque, estratégia e preparo para o clima rigoroso.</p>
        
        <p class='mb-4'><strong>Sua recompensa?</strong><br>
        Vistas que te deixarão sem fôlego, a emoção de superar seus limites e a marca de ter conquistado um dos maiores desafios do montanhismo brasileiro.</p>
        
        <p class='mb-4'>Pronto para essa experiência?</p>
        <p>Fale com a Capivara Rota e prepare-se para sua aventura inesquecível!</p>
    ",

    'itinerario' => [
        'PRIMEIRO DIA' => 'Recomenda-se chegada em Passa Quatro - MG;',
        'SEGUNDO DIA' => '04:00h – Saída no 4x4:<br>
                          05:00h – Chegada na Toca do Lobo - Início da caminhada;<br>
                          09:30h – Cume Capim Amarelo;<br>
                          11:30h – Pedra da Mina;<br>
                          14:30h – Três Estados;<br>
                          17:00h – Nativa Serra Fina;'
    ],

    'o_que_inclui' => [
        '01 diária em hostel (quarto coletivo) em Passa Quatro - MG',
        'Transporte IDA E VOLTA a partir de Passa Quatro',
        'Um guia com certificação em primeiros socorros em áreas remotas',
        'Segundo Guia a partir do 4º participante',
        'Lanche na Pedra da Mina',
        'Seguro contra acidentes pessoais'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'INGRESSOS DE ACESSO AO COMPLEXO',
        'Bebidas e carregador de mochilas',
        'Nenhum outro equipamento não listado no item “incluso”'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 DIAS úteis antes do evento:</strong> você será taxado em 10% do valor do roteiro para cobrir taxas administrativas;</li>
            <li><strong>Até 15 DIAS úteis antes do evento:</strong> você será taxado em 30% do valor do roteiro para cobrir taxas administrativas, multas de reservas e despesas de logística;</li>
            <li><strong>Até 7 DIAS úteis antes do evento:</strong> você será taxado em 50% do valor do roteiro para cobrir taxas administrativas, multas de reservas e de logística;</li>
            <li><strong>NÃO COMPARECIMENTO no dia do evento:</strong> Não há devolução do investimento.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'travessia-rancho-caido' => [
    'titulo' => 'TRAVESSIA RANCHO CAÍDO',
    'subtitulo' => 'Travessia Rancho Caído: Sua Aventura no Itatiaia',
    'imagem_hero' => 'rancho-caido-01.avif', 
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro TRAVESSIA RANCHO CAÍDO.',
            'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'rancho-caido-01.avif',
        'rancho-caido-02.avif',
        'rancho-caido-03.avif'
    
    ],
    'dificuldade' => 'FÁCIL/MODERADO',
    'nivel_tecnico' => 'FÁCIL/MODERADO',
    'nivel' => 'iniciante',
    'distancia' => '24 km',
    'duracao' => '2 dias / 1 noites',
    'ponto_encontro' => 'Guaratinguetá-SP',
    'preco' => 'R$ 1.939,00',
    'resumo' => 'Descubra o Itatiaia de um jeito único! Nossa Travessia Rancho Caído, com 2 dias, liga a parte alta do parque à charmosa Visconde de Mauá.',
    
    'descricao_longa' => "
        <p class='mb-4'>Travessia Rancho Caído: Sua Aventura no Itatiaia</p>
        
        <p class='mb-4'>Descubra o Itatiaia de um jeito único! Nossa Travessia Rancho Caído, com 2 dias, liga a parte alta do parque à charmosa Visconde de Mauá. É ideal para quem começa no montanhismo ou busca novas paisagens.</p>
        
        <p class='mb-4'>Belezas que Encantam<br>
        Em 24 km, veja o Vale dos Dinossauros e a nascente do Rio Preto. O ponto alto é o Vale do Aiuruoca, com a nascente mais alta do Brasil e a cachoeira de 30 metros a 2400m de altitude – um espetáculo! Conheça também os Ovos da Galinha e tenha uma vista incrível do Agulhas Negras.</p>
        
        <p class='mb-4'>Viva a Natureza<br>
        Serão 2 dias de imersão, com 1 noite de acampamento selvagem sob um céu estrelado. Desconecte-se, relaxe e sinta a energy das montanhas.</p>
        
        <p class='mb-4'>O que esperar:<br>
        Vistas panorâmicas de tirar o fôlego.<br>
        Caminhada desafiadora, mas que vale a pena.<br>
        Paz e momentos de pura contemplação.<br>
        A emoção de acampar em meio à natureza.</p>
        
        <p>Sua aventura te espera!<br>
        Pronto para viver essa experiência? Garanta já sua vaga e comece a planejar sua Travessia Rancho Caído!</p>
    ",

    'itinerario' => [
        'PRIMEIRO DIA' => 'Recomenda-se chegada em Guaratinguetá/SP; ',
        'SEGUNDO DIA' => '05:30h - Café da manhã no hostel;<br>
                          06:00h - Encontro com o guia, embarque no transporte e partida sentido Portaria do Parque;<br>
                          07:00h - Chegada no parque, organizar equipamentos e início da trilha;<br>
                          14:00h - Chegada e montagem de acampamento;<br>
                          18:30h - Por do sol;<br>
                          19:00h - Jantar - dormir.' ,
        'TERCEIRO DIA' => '05:30h - Alvorada e café da manhã;<br>
                          07:30h - Desmontar acampamento;<br>
                          08:30 - Inicio de retorno sentido Mauá;<br>
                          14:00h - Chegada em Mauá ;<br>
                          14:30h - Recomenda-se almoço (NÃO INCLUSO).'
    ],

    'o_que_inclui' => [
        'Guia com certificação internacional em Primeiros Socorros - WFA',
        'Auxiliar de guia a partir do 4º participante',
        'Café durante o roteiro',
        'Transfer ida e volta a partir da pousada',
        'Seguro individual contra acidentes pessoais',
        '01 pernoite em quarto coletivo na noite anterior'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'Bebidas e carregador de mochilas',
        'Nenhum outro equipamento não listado no item “incluso”'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 DIAS úteis antes do evento:</strong> você será taxado em 10% do valor do roteiro para cobrir taxas administrativas;</li>
            <li><strong>Até 15 DIAS úteis antes do evento:</strong> você será taxado em 30% do valor do roteiro para cobrir taxas administrativas, multas de reservas e despesas de logística;</li>
            <li><strong>Até 7 DIAS úteis antes do evento:</strong> você será taxado em 50% do valor do roteiro para cobrir taxas administrativas, multas de reservas e de logística;</li>
            <li><strong>NÃO COMPARECIMENTO no dia do evento:</strong> Não há devolução do investimento.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar in queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'pico-do-itaguare' => [
    'titulo' => 'PICO DO ITAGUARÉ',
    'subtitulo' => 'Pico do Itaguaré: 2308m de pura emoção na Serra da Mantiqueira.',
    'imagem_hero' => 'pico-itaguare-01.avif', 
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro PICO DO ITAGUARÉ.',
            'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'pico-itaguare-01.avif',
        'pico-itaguare-02.avif',
        'pico-itaguare-03.avif',
        'pico-itaguare-04.avif',
        'pico-itaguare-05.avif',
        'pico-itaguare-06.avif',
        'pico-itaguare-07.avif',
        'pico-itaguare-08.avif',
        'pico-itaguare-09.avif',
        'pico-itaguare-10.avif',
        'pico-itaguare-11.avif',
        'pico-itaguare-12.avif',
        'pico-itaguare-13.avif',
        'pico-itaguare-14.avif',
        'pico-itaguare-15.avif'
    ],
    'dificuldade' => 'MODERADO/DIFÍCIL',
    'nivel_tecnico' => 'MODERADO/DIFÍCIL',
    'nivel' => 'intermediario',
    'distancia' => 'Aprox. 14km (Total)',
    'duracao' => '2 dias / 1 noites',
    'ponto_encontro' => 'Passa Quatro - MG',
    'preco' => 'R$ 1.559,00',
    'resumo' => 'Conhecido como o "Gigante Adormecido", o Itaguaré é um convite irrecusável. A jornada culmina em uma emocionante escalada nas rochas com uma vista lá do topo simplesmente indescritível!',
    
    'descricao_longa' => "
        <p class='mb-4'>Pico do Itaguaré: 2308m de pura emoção na Serra da Mantiqueira.</p>
        
        <p class='mb-4'><strong>Sua Aventura Épica te Espera</strong><br>
        Conhecido como o \"Gigante Adormecido\" em São Paulo e a \"Pedra Sagrada\" em Minas, o Itaguaré é um convite irrecusável. A jornada começa em meio à mata exuberante, revelando a beleza natural a cada passo.</p>
        
        <p class='mb-4'><strong>Conquiste o Cume</strong><br>
        A aventura culmina em uma emocionante escalada nas rochas, com total segurança: equipamentos e guias experientes garantem sua subida. A vista lá do topo? Simplesmente indescritível!</p>
        
        <p class='mb-4'><strong>Viva Essa Experiência Única</strong><br>
        Venha com a Capivara Rota desvendar a beleza e a energia do Gigante Adormecido. Agende sua expedição e crie memórias inesquecíveis.</p>
        
        <p>Pronto para o desafio? Agende sua ascensão ao Pico do Itaguaré!</p>
    ",

    'itinerario' => [
        'PRIMEIRO DIA' => 'Recomenda-se chegada em Passa Quatro/MG;',
        'SEGUNDO DIA' => '05:30h - Café da manhã na pousada;<br>
                          06:30h - Encontro com o guia, embarque no transporte e partida sentido Base Itaguaré;<br>
                          08:00h - Chegada na base, organizar equipamentos e início da trilha;<br>
                          12:00h - Chegada e montagem do acampamento;<br>
                          16:00h - Ataque ao cume - sob avaliação;<br>
                          17:30h - Por do sol e início da descida;<br>
                          19:00h - Jantar - dormir.',
        'TERCEIRO DIA' => '05:00h - Alvorada;<br>
                          06:30h - Café da manhã;<br>
                          07:30h - Desmontar acampamento;<br>
                          08:30 - Inicio de retorno sentido Base;<br>
                          12:30h - Chegada a base;<br>
                          14:30h - Chegada na pousada e fim das operações;<br>
                          15:00h - Recomenda-se almoço antes de pegar estrada (NÃO INCLUSO).'
    ],

    'o_que_inclui' => [
        'Guia com certificação internacional em Primeiros Socorros - WFA',
        'Auxiliar de guia a partir do 5º participante',
        'Café durante o roteiro',
        'Transfer ida e volta a partir da pousada',
        'Seguro individual contra acidentes pessoais',
        '01 pernoite em quarto coletivo na noite anterior'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'Bebidas e carregador de mochilas',
        'Nenhum outro equipamento não listado no item “incluso”'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 DIAS úteis antes do evento:</strong> você será taxado em 10% do valor do roteiro para cobrir taxas administrativas;</li>
            <li><strong>Até 15 DIAS úteis antes do evento:</strong> você será taxado em 30% do valor do roteiro para cobrir taxas administrativas, multas de reservas e despesas de logística;</li>
            <li><strong>Até 7 DIAS úteis antes do evento:</strong> você será taxado em 50% do valor do roteiro para cobrir taxas administrativas, multas de reservas e de logística;</li>
            <li><strong>NÃO COMPARECIMENTO no dia do evento:</strong> Não há devolução do investimento.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'parque-nacional-itatiaia' => [
    'titulo' => 'PARQUE NACIONAL ITATIAIA',
    'subtitulo' => 'Itatiaia com Capivara Rota: Sua Aventura Começa Aqui!',
    'imagem_hero' => 'parque-itatiaia-01.avif', 
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro PARQUE NACIONAL ITATIAIA.',
            'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'parque-itatiaia-001.webp',
        'parque-itatiaia-002.webp',
        'parque-itatiaia-003.webp',
        'parque-itatiaia-004.webp',
        'parque-itatiaia-005.webp',
        'parque-itatiaia-006.webp',
        'parque-itatiaia-007.webp',
        'parque-itatiaia-008.webp',
        'parque-itatiaia-009.webp',
        'parque-itatiaia-010.webp',
        'parque-itatiaia-011.webp',
        'parque-itatiaia-012.webp',
        'parque-itatiaia-013.webp',
        'parque-itatiaia-014.webp',
        'parque-itatiaia-015.webp',
        'parque-itatiaia-016.webp',
        'parque-itatiaia-017.webp',
        'parque-itatiaia-018.webp',
        'parque-itatiaia-019.webp',
        'parque-itatiaia-020.webp',
        'parque-itatiaia-021.webp'
    ],
    'dificuldade' => 'FÁCIL/MODERADO',
    'nivel_tecnico' => 'FÁCIL/MODERADO',
    'nivel' => 'iniciante',
    'distancia' => 'Variável (conforme atrativos selecionados)',
    'duracao' => '2 dias / 1 noites',
    'ponto_encontro' => 'Guaratinguetá-SP',
    'preco' => 'R$ 1.819,00',
    'destaque_home' => true,
    'resumo' => 'Prepare-se para viver o Parque Nacional do Itatiaia como nunca! Com a Capivara Rota, você explora o primeiro Parque Nacional do Brasil, um lugar mágico onde a natureza esculpiu paisagens de tirar o fôlego.',
    
    'descricao_longa' => "
        <p class='mb-4'>Itatiaia com Capivara Rota: Sua Aventura Começa Aqui!</p>
        
        <p class='mb-4'>Prepare-se para viver o Parque Nacional do Itatiaia como nunca! Com a Capivara Rota, você explora o primeiro Parque Nacional do Brasil, um lugar mágico onde a natureza esculpiu paisagens de tirar o fôlego.</p>
        
        <p class='mb-4'>Por que escolher a Capivara Rota?<br>
        Nossos roteiros são perfeitos para você, mesmo que seja iniciante no montanhismo. Você escolhe seu ritmo e descobre o que mais te encanta, com total flexibilidade.</p>
        
        <p class='mb-4'>Destaques da sua aventura:<br>
        Base Pico das Agulhas Negras (2791m): Deixe-se surpreender pelo quinto ponto mais alto do Brasil. Uma vista imponente e inesquecível!<br>
        Outras formações incríveis: Explore a Base do Prateleiras, Morro do Couto, Pedra do Sino e Pedra do Altar. Cada pico, uma nova perspectiva e paisagens de cair o queixo.<br>
        Belezas naturais exclusivas: Conheça os curiosos Ovos da Galinha e a grandiosa Cachoeira Aiuruoca, a cachoeira em maior altitude do Brasil.<br>
        Com a Capivara Rota, sua experiência no Itatiaia é única: aventura, natureza exuberante e a segurança de guias experientes.</p>
        
        <p class='mb-4'>Pronto para sua jornada?<br>
        Comece sua aventura no montanhismo em um dos lugares mais deslumbrantes do Brasil.</p>
        
        <p>Agende agora sua visita ao Parque Nacional do Itatiaia com a Capivara Rota e sinta a magia das montanhas!</p>
    ",

    'itinerario' => [
        'PRIMEIRO DIA' => 'Recomenda-se chegada em Guaratinguetá/SP;',
        'SEGUNDO DIA' => '05:00h - Café da manhã na pousada;<br>
                          06:00h - Encontro com o guia, embarque no transporte e partida sentido Portaria PNI;<br>
                          07:00h - Chegada na portaria, organizar acampamento e equipamentos para início da trilha;<br>
                          08:00h - Saida sentido atrativo;<br>
                          16:00h - Retorno ao acampamento Rebouças;<br>
                          17:30h - Chegada ao acampamento Rebouças;<br>
                          19:00h - Jantar - dormir.',
        'TERCEIRO DIA' => '05:30h - Alvorada e café da manhã;<br>
                          07:00h - Inicio da atividade;<br>
                          13:30h - Retorno ao acampamento Rebouças;<br>
                          14:30h - Desmontar acampamento;<br>
                          15:30 - Inicio de retorno sentido Hostel Picus;<br>
                          16:30h - Chegada ao hostel e fim das operações;<br>
                          17:00h - Recomenda-se almoço na região! (NÃO INCLUSO).'
    ],

    'o_que_inclui' => [
        'Guia com certificação em Primeiros Socorros em Áreas Remotas',
        'Segundo Guia a partir do 5º participante',
        '01 (UM) Jantar na montanha',
        'Café durante o roteiro',
        'Transfer IDA E VOLTA a partir da pousada',
        'Seguro individual contra acidentes pessoais',
        'Ingresso de acesso ao Parque Nacional do Itatiaia',
        '01 pernoite em quarto coletivo na noite anterior'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'Bebidas e carregador de mochilas',
        'Nenhum outro equipamento não listado no item “incluso”'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 DIAS úteis antes do evento:</strong> você será taxado em 10% do valor do roteiro para cobrir taxas administrativas;</li>
            <li><strong>Até 15 DIAS úteis antes do evento:</strong> você será taxado em 30% do valor do roteiro para cobrir taxas administrativas, multas de reservas e despesas de logística;</li>
            <li><strong>Até 7 DIAS úteis antes do evento:</strong> você será taxado em 50% do valor do roteiro para cobrir taxas administrativas, multas de reservas e de logística;</li>
            <li><strong>NÃO COMPARECIMENTO no dia do evento:</strong> Não há devolução do investimento.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surprised por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'travessia-ruy-braga' => [
    'titulo' => 'TRAVESSIA RUY BRAGA',
    'subtitulo' => 'Travessia Ruy Braga: Desafie-se no Itatiaia com a Capivara Rota',
    'imagem_hero' => 'ruy-braga-01.avif', 
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro TRAVESSIA RUY BRAGA.',
            'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'ruy-braga-01.avif',
        'ruy-braga-02.avif',
        'ruy-braga-03.avif',
        'ruy-braga-04.avif',
        'ruy-braga-05.avif',
        'ruy-braga-06.avif',
        'ruy-braga-07.avif',
        'ruy-braga-08.avif',
        'ruy-braga-09.avif',
        'ruy-braga-10.avif',
        'ruy-braga-11.avif',
        'ruy-braga-12.avif',
        'ruy-braga-13.avif',
        'ruy-braga-14.avif'
    ],
    'dificuldade' => 'FÁCIL/MODERADA',
    'nivel_tecnico' => 'FÁCIL',
    'nivel' => 'iniciante',
    'distancia' => '19 km',
    'duracao' => '2 dias / 1 noites',
    'ponto_encontro' => 'Guaratinguetá-SP',
    'preco' => 'R$ 2.109,00',
    'resumo' => 'Prepare-se para viver uma experiência inesquecível! A Travessia Ruy Braga é mais que uma trilha de 19 km: é sua chance de se conectar com a natureza selvagem do primeiro Parque Nacional do Brasil, o Itatiaia.',
    
    'descricao_longa' => "
        <p class='mb-4'>Prepare-se para viver uma experiência inesquecível! A Travessia Ruy Braga é mais que uma trilha de 19 km: é sua chance de se conectar com a natureza selvagem do primeiro Parque Nacional do Brasil, o Itatiaia.</p>
        
        <p class='mb-4'>Por que essa travessia é pra você?<br>
        Jornada Épica: Explore a grandiosidade da Serra da Mantiqueira, dos campos de altitude à densa floresta, e descubra a beleza única do Itatiaia.<br>
        Conexão Profunda: Sinta a natureza em cada passo. Respire ar puro, admire paisagens que tiram o fôlego e encontre a paz nas montanhas.<br>
        Desafio com Recompensa: Essa travessia exige preparo, mas cada gota de suor será recompensada com vistas espetaculares e a satisfação de superar seus limites.<br>
        Segurança Garantida: Com a Capivara Rota, sua aventura é segura e bem planejada. Nossos guias experientes conhecem cada detalhe da Mantiqueira.</p>
        
        <p class='mb-4'>O que te espera?<br>
        Do alto da montanha: Vistas panorâmicas e horizontes sem fim na Parte Alta, entre Minas Gerais e Rio de Janeiro.<br>
        Floresta encantada: Um mergulho na floresta nebular, com sua vegetação exótica e ambiente mágico.<br>
        Cachoeiras refrescantes: No final da jornada, as cachoeiras da Parte Baixa são o prêmio perfeito para relaxar e se reconectar.</p>
        
        <p class='mb-4'>Pronto para transformar sua perspectiva e viver essa aventura?<br>
        Não espere mais! Garanta sua vaga na Travessia Ruy Braga com a Capivara Rota e comece sua jornada nas montanhas do Itatiaia.</p>
        
        <p>Agende agora e descubra a magia que só a natureza pode oferecer!</p>
    ",

    'itinerario' => [
        'PRIMEIRO DIA' => 'Recomenda-se chegada em Guaratinguetá/SP;',
        'SEGUNDO DIA' => '06:00h - Café da manhã;<br>
                          06:30h - Encontro com o guia, embarque no transporte e partida sentido Portaria do Parque;<br>
                          08:00h - Chegada no parque, organizar equipamentos e início da trilha;<br>
                          14:00h - Chegada e montagem de acampamento;<br>
                          18:30h - Por do sol;<br>
                          19:00h - Jantar - dormir.',
        'TERCEIRO DIA' => '05:30h - Alvorada e café da manhã;<br>
                          07:30h - Desmontar acampamento;<br>
                          08:30 - Inicio de retorno sentido Itatatia/RJ;<br>
                          14:00h - Chegada no Poço do Maromba - Parte Baixa. Itatiaia/RJ ;<br>
                          14:30h - Recomenda-se almoço (NÃO INCLUSO).'
    ],

    'o_que_inclui' => [
        'Guia com certificação em Primeiros Socorros em Áreas Remotas',
        'Pernoite em pousada local com café da manhã',
        'Segundo Guia a partir do 5º participante',
        'Café durante o roteiro',
        'Ingresso de acesso ao Parque Nacional de Itatiaia',
        'Transfer 4x4 privativo IDA E VOLTA a partir do ponto de encontro',
        'Seguro individual contra acidentes pessoais'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'Bebidas e carregador de mochilas',
        'Nenhum outro equipamento não listado no item “incluso”'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 DIAS úteis antes do evento:</strong> você será taxado em 10% do valor do roteiro para cobrir taxas administrativas;</li>
            <li><strong>Até 15 DIAS úteis antes do evento:</strong> você será taxado em 30% do valor do roteiro para cobrir taxas administrativas, multas de reservas e despesas de logística;</li>
            <li><strong>Até 7 DIAS úteis antes do evento:</strong> você será taxado em 50% do valor do roteiro para cobrir taxas administrativas, multas de reservas e de logística;</li>
            <li><strong>NÃO COMPARECIMENTO no dia do evento:</strong> Não há devolução do investimento.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'serra-fina' => [
    'titulo' => 'SERRA FINA',
    'subtitulo' => 'Serra Fina: Supere Seus Limites. Conquiste o Brasil.',
    'imagem_hero' => 'serra-fina-01.avif', 
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro SERRA FINA.',
            'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'serra-fina-01.avif',
        'serra-fina-02.avif',
        'serra-fina-03.avif',
        'serra-fina-04.avif',
        'serra-fina-05.avif',
        'serra-fina-06.avif',
        'serra-fina-07.avif',
        'serra-fina-08.avif',
        'serra-fina-09.avif',
        'serra-fina-10.avif',
        'serra-fina-11.avif',
        'serra-fina-12.avif',
        'serra-fina-13.avif'
    ],
    'dificuldade' => 'ALTA',
    'nivel_tecnico' => 'DIFÍCIL',
    'nivel' => 'avancado',
    'distancia' => 'Aprox. 30km (Travessia clássica)',
    'duracao' => '4 dias / 3 noites',
    'ponto_encontro' => 'Passa Quatro - MG',
    'preco' => 'R$ 2.199,00',
    'destaque_home' => true,
    'resumo' => 'Sinta a montanha como nunca antes. A Travessia Serra Fina é o teste definitivo, feita para quem busca mais que uma aventura, busca uma superação.',
    
    'descricao_longa' => "
        <p class='mb-4'>Serra Fina: Supere Seus Limites. Conquiste o Brasil.</p>
        
        <p class='mb-4'>Sinta a montanha como nunca antes. A Travessia Serra Fina é o teste definitivo, feita para quem busca mais que uma aventura, busca uma superação. Imagine o cume, o vento, a vista... e você, sabendo que chegou lá.<br>
        Essa é a Serra Fina.</p>
        
        <p class='mb-4'><strong>Por Que Serra Fina?</strong><br><br>
        É simples: ela desafia você.<br>
        Água escassa: planeje cada gota.<br>
        Subidas íngremes: prepare as pernas.<br>
        Frio extremo: durma nos cumes, sinta a natureza no seu limite.</p>
        
        <p class='mb-4'><strong>Suas Conquistas Épicas</strong><br>
        Cada passo vale a pena. Acampe em dois dos picos mais altos do Brasil:<br>
        Pedra da Mina (2798m): o 4º maior do país. Vistas que prendem a respiração.<br>
        Pico dos Três Estados (2665m): o 10º maior. Conecte-se com três estados de uma vez.</p>
        
        <p class='mb-4'><strong>Sua Segurança, Nossa Prioridade.</strong><br>
        Com a Capivara Rota, você vai preparado. Nossos guias experientes, equipamentos top e planejamento preciso garantem sua jornada. Porque na Serra Fina, segurança é tudo.</p>
        
        <p class='mb-4'><strong>O Desafio Te Espera</strong><br>
        A Serra Fina transforma. Exige respeito, preparo e vontade. Se você quer ir além, ter memórias que duram, essa é a sua travessia.</p>
        
        <p>Pronto para ir? Fale com a Capivara Rota. Sua expedição inesquecível começa agora.</p>
    ",

    'itinerario' => [
        'PRIMEIRO DIA' => 'Recomenda-se chegada em Passa Quatro - MG;',
        'SEGUNDO DIA' => '05:00h – Café da manhã;<br>
                          06:00h – Saída no 4x4:<br>
                          07:30h – Chegada na Toca do Lobo - Início da caminhada;<br>
                          14:30h – Cume Capim Amarelo;<br>
                          16:30h – Chegada ao acampamento Maracanã;<br>
                          19:00h – Jantar.',
        'TERCEIRO DIA' => '06:00h – Café da manhã;<br>
                           07:00h – Desmontar acampamento;<br>
                           07:45h – Saída em direção à Pedra da Mina;<br>
                           16:30h – Acampamento Cume Pedra da Mina;<br>
                           19:00h – Jantar.',
        'QUARTO DIA' => '05:00h – Despertar e café a manhã;<br>
                         06:00h – Nascer do sol;<br>
                         06:30h – Desmontar acampamento;<br>
                         07:00h – Saída em direção ao Pico dos Três Estados;<br>
                         14:00h – Acampamento Cume Pico dos Três Estados;<br>
                         19:00h – Jantar.',
        'QUINTO DIA' => '05:30h – Nascer do sol;<br>
                         06:00h – Café da manhã;<br>
                         07:00h – Desmontar acampamento;<br>
                         07:45h – Saída em direção ao Nativa Serra Fina;<br>
                         05:00h – Nativa Serra Fina e retorno a Passa Quatro;<br>
                         17:30h – Chegada em Passa Quatro e final da operation.'
    ],

    'o_que_inclui' => [
        '01 diária em quarto coletivo em Passa Quatro - MG',
        'Transporte IDA E VOLTA a partir de Passa Quatro',
        'Guia com certificação em Primeiros Socorros em Áreas Remotas',
        'Segundo Guia a partir do 5º participante',
        '03 jantares na montanha',
        'Utensílios de cozinha de uso coletivo (gás, panelas, fogareiros, cafeteira)',
        'Seguro contra acidentes pessoais'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'INGRESSOS DE ACESSO AO COMPLEXO',
        'Bebidas e carregador de mochilas',
        'Nenhum outro equipment não listado no item “incluso”'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 DIAS úteis antes do evento:</strong> você será taxado em 10% do valor do roteiro para cobrir taxas administrativas;</li>
            <li><strong>Até 15 DIAS úteis antes do evento:</strong> você será taxado em 30% do valor do roteiro para cobrir taxas administrativas, multas de reservas e despesas de logística;</li>
            <li><strong>Até 7 DIAS úteis antes do evento:</strong> você será taxado em 50% do valor do roteiro para cobrir taxas administrativas, multas de reservas e de logística;</li>
            <li><strong>NÃO COMPARECIMENTO no dia do evento:</strong> Não há devolução do investimento.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'cachoeiras-da-bocaina' => [
    'titulo' => 'CACHOEIRAS DA BOCAINA',
    'subtitulo' => 'O Parque Nacional da Serra da Bocaina (PNSB) é uma das maiores áreas protegidas da Mata Atlântica.',
    'imagem_hero' => 'cachoeiras-bocaina-01.avif',
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro CACHOEIRAS DA BOCAINA.',
            'local' => 'bocaina', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas', 'cachoeiras'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'cachoeiras-bocaina-01.avif',
        'cachoeiras-bocaina-02.avif',
        'cachoeiras-bocaina-03.avif',
        'cachoeiras-bocaina-04.avif',
        'cachoeiras-bocaina-05.avif',
        'cachoeiras-bocaina-06.avif',
        'cachoeiras-bocaina-07.avif',
        'cachoeiras-bocaina-08.avif'
    ],
    'dificuldade' => 'BAIXA',
    'nivel_tecnico' => 'FÁCIL/MODERADO',
    'nivel' => 'iniciante',
    'distancia' => 'Variável (conforme atrativos)',
    'duracao' => '2 dias / 1 noites',
    'ponto_encontro' => 'Guaratinguetá-SP',
    'preco' => 'R$ 2.639,00',
    'resumo' => 'Esse roteiro é pensando para quem deseja desfrutar do calor e conforto que as montanhas oferecem, com toda a essência que a região oferece, seja por meio da população local com sua cultura e costumes, ou através do incontáveis atrativos.',
    
    'descricao_longa' => "
        <p class='mb-4'>O Parque Nacional da Serra da Bocaina (PNSB) é uma das maiores áreas protegidas da Mata Atlântica. Localiza-se em trecho da Serra do Mar, na divisa entre os estados do Rio de Janeiro e São Paulo. Em suas extremidades, na chamada Zona de Amortecimento, que serve como um cinturão de proteção a Serra da Bocaina oferece diversos atrativos que irão surpreender qualquer visitante.</p>
        
        <p class='mb-4'>Além das incontáveis cachoeiras, a região abriga fauna, flora e uma topografia única que oferece praticidade, e diversas vezes fácil acesso.</p>
        
        <p class='mb-4'>Mas não se engane, a Serra da Bocaina é uma imensidão de morros que se perdem por entre o horizonte sem fim que ali habita.</p>
        
        <p class='mb-4'>Esse roteiro é pensando para quem deseja desfrutar do calor e conforto que as montanhas oferecem, com toda a essência que a região oferece, seja por meio da população local com sua cultura e costumes, ou através do incontáveis atrativos.</p>
        
        <p>Traga sua família, o roteiro é realizado com pernoite nas Cabanas da Bocaina, e de lá iremos explorar a imensidão dos Vales Rochosos.</p>
    ",

    'itinerario' => [
        'PRIMEIRO DIA' => 'Recomenda-se chegada as Cabanas da Bocaina;',
        'SEGUNDO DIA' => '07:30h - Encontro com o guia e início da trilha para o atrativo escolhido;<br>
                          12:00h - Pausa para Almoço/Lanche de trilha;<br>
                          16:00h - Retorno a base e por do sol;<br>
                          19:00h - Jantar - dormir.',
        'TERCEIRO DIA' => '06:00h - Alvorada e café da manhã;<br>
                          07:00h - Organizar equipamentos para retorno pós-atividade;<br> 
                          08:30h - Início da atividade;<br>
                          12:30h - Almoço/Lanche de trilha;<br>
                          15:00h - Retorno a base para resgatar os equipamentos;<br>
                          16:30h - Chegada as Cabanas e fim das atividades;'
    ],

    'o_que_inclui' => [
        'Guia com certificação em Primeiros Socorros em Áreas Remotas',
        'Segundo Guia a partir do 5º participante',
        '02 (DOIS) Jantares na montanha',
        'Café durante o trajeto',
        'Transfer IDA e VOLTA a partir da pousada',
        'Seguro individual contra acidentes pessoais',
        '01 pernoite em quarto coletivo na noite anterior'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'Bebidas e carregador de mochilas',
        'Nenhum outro equipamento não listado no item “incluso”'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 DIAS úteis antes do evento:</strong> você será taxado em 10% do valor do roteiro para cobrir taxas administrativas;</li>
            <li><strong>Até 15 DIAS úteis antes do evento:</strong> você será taxado em 30% do valor do roteiro para cobrir taxas administrativas, multas de reservas e despesas de logística;</li>
            <li><strong>Até 7 DIAS úteis antes do evento:</strong> você será taxado em 50% do valor do roteiro para cobrir taxas administrativas, multas de reservas e de logística;</li>
            <li><strong>NÃO COMPARECIMENTO no dia do evento:</strong> Não há devolução do investimento.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'pico-dos-marins' => [
    'titulo' => 'PICO DOS MARINS',
    'subtitulo' => 'A trilha do Pico dos Marins',
    'imagem_hero' => 'pico-marins-001.webp', 
    'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre o roteiro PICO DOS MARINS.',
            'local' => 'mantiqueira', // Opções: mantiqueira, bocaina, papagaio, juatinga
            'tipo'  => ['montanhas'],  // Opções: cachoeiras, montanhas, florestas, praias
    'galeria' => [
        'pico-marins-001.webp',
        'pico-marins-002.webp',
        'pico-marins-003.webp',
        'pico-marins-005.webp',
        'pico-marins-006.webp',
        'pico-marins-007.webp',
        'pico-marins-008.webp',
        'pico-marins-009.webp',
        'pico-marins-010.webp',
        'pico-marins-011.webp',
        'pico-marins-012.webp',
        'pico-marins-013.webp'
        
    ],
    'dificuldade' => 'MODERADO',
    'nivel_tecnico' => 'MODERADO',
    'nivel' => 'intermediario',
    'distancia' => '15 km',
    'duracao' => '2 dias / 1 noites',
    'ponto_encontro' => 'Guaratinguetá-SP',
    'preco' => 'R$ 1.459,00',
    'destaque_home' => true,
    'resumo' => 'Sinta a emoção de conquistar um dos picos mais altos do Brasil. O Pico dos Marins, com seus 2.420 metros, te espera para uma aventura inesquecível na Serra da Mantiqueira.',
    
    'descricao_longa' => "
        <p class='mb-4'>A trilha do Pico dos Marins</p>
        
        <p class='mb-4'>Sinta a emoção de conquistar um dos picos mais altos do Brasil. O Pico dos Marins, com seus 2.420 metros, te espera para uma aventura inesquecível na Serra da Mantiqueira.</p>
        
        <p class='mb-4'><strong>Sua Trilha, Sua Conquista</strong><br>
        Percorra 7 km de trilha desafiadora, ganhando 900 metros de elevação até o cume. Cada passo vale a pena pela vista espetacular do Vale do Paraíba e da Mantiqueira.</p>
        
        <p class='mb-4'><strong>Natureza Pura, Preparo Essencial</strong><br>
        No Marins, a natureza é selvagem e as condições climáticas podem ser extremas (até -10°C). Por isso, o equipamento certo é crucial.</p>
        
        <p class='mb-4'><strong>Capivara Rota: Sua Aventura Segura</strong></p>
        
        <p class='mb-4'>Nós cuidamos de tudo! Fornecemos a lista completa do que levar (roupas térmicas, saco de dormir 0°C, barraca resistente, lanterna, água e comida). Nossos guias experientes garantem sua segurança e uma experiência memorável.</p>
        
        <p class='mb-4'><strong>Pronto para o Cume?</strong><br>
        A aventura te chama. Conquiste o Pico dos Marins com a Capivara Rota!<br>
        Entre em contato e agende sua expedição.</p>
    ",

    'itinerario' => [
        'PRIMEIRO DIA' => 'Recomenda-se chegada em Guaratinguetá/SP;',
        'SEGUNDO DIA' => '06:30h - Café da manhã;<br>
                          07:00h - Encontro com o guia, embarque no transporte e partida sentido Base Marins;<br>
                          08:30h - Chegada na base, organizar equipamentos e início da trilha;<br>
                          13:30h - Chegada e montagem de acampamento;<br>
                          16:00h - Ataque ao cume - sob avaliação;<br>
                          17:30h - Por do sol e início da descida;<br>
                          19:00h - Jantar - dormir.',
        'TERCEIRO DIA' => '04:00h - Alvorada e ataque ao cume;<br>
                          06:30h - Descida e café da manhã;<br>
                          07:30h - Desmontar acampamento;<br>
                          08:30 - Inicio de retorno sentido Base;<br>
                          12:30h - Chegada a base;<br>
                          13:00h - Recomenda-se almoço na base (NÃO INCLUSO).'
    ],

    'o_que_inclui' => [
        'Guia com certificação em Primeiros Socorros Áreas Remotas',
        'Segundo Guia a partir do 5º participante',
        '01 (UM) Jantar na montanha',
        'Café durante o roteiro',
        'Transfer IDA e VOLTA a partir da pousada',
        'Seguro individual contra acidentes pessoais',
        '01 pernoite em quarto coletivo na noite anterior'
    ],

    'nao_inclui' => [
        'Refeições antes e depois da travessia',
        'Bebidas e carregador de mochilas',
        'Nenhum outro equipamento não listado no item “incluso”'
    ],

    'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 DIAS úteis antes do evento:</strong> você será taxado em 10% do valor do roteiro para cobrir taxas administrativas;</li>
            <li><strong>Até 15 DIAS úteis antes do evento:</strong> você será taxado em 30% do valor do roteiro para cobrir taxas administrativas, multas de reservas e despesas de logística;</li>
            <li><strong>Até 7 DIAS úteis antes do evento:</strong> você será taxado em 50% do valor do roteiro para cobrir taxas administrativas, multas de reservas e de logística;</li>
            <li><strong>NÃO COMPARECIMENTO no dia do evento:</strong> Não há devolução do investimento.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
],
        'ciclotravessia-serra-da-bocaina' => [
        'titulo' => 'CicloTravessia Serra da Bocaina',
        'subtitulo' => '100 quilômetros nas montanhas, entre florestas, estrada rural, cachoeiras e histórias',
        'whatsapp' => '', // Número do parceiro com DDD (só números)
        'mensagem_whatsapp' => 'Olá! Gostaria de saber mais sobre a CicloTravessia Serra da Bocaina.',
        'categoria' => 'bocaina', // Opções de filtro: mantiqueira, bocaina, papagaio, juatinga
        'tipo' => 'florestas',     // Opções de filtro: cachoeiras, montanhas, florestas, praias
        'dificuldade' => 'Moderado / Intenso',
        'nivel' => 'intermediario',
        'distancia' => '100km',
        'duracao' => '2 dias / 1 noite',
        'preco' => 'R$ 2.359,00',
        'ponto_encontro' => 'Pernoite em pousada inclusa na noite anterior - a verificar disponibilidade de qual vai receber.',
        'imagem_hero' => 'ciclotravessia-bocaina-capa.webp',
        'imagem_hero_mobile' => 'ciclotravessia-bocaina-capa.webp', // Opcional (se houver foto vertical)
        'resumo' => 'O Parque Nacional da Serra da Bocaina (PNSB) é uma das maiores áreas protegidas da Mata Atlântica, localizado na divisa entre os estados do Rio de Janeiro e São Paulo.',
        'descricao_longa' => "<p class='mb-4'>A travessia que liga São José do Barreiro-SP a Arapei-SP, cidades que compõem o território do Parque Nacional Serra da Bocaina, onde a Trilha do Ouro percorre boa parte do trajeto da pedalada de 2 dias que parte do centro histórico, na praça da Igreja e, segue até a pousada Barreirinha, onde passaremos a noite para no dia seguinte, seguir sentido Arapei-SP.</p>
<p class='mb-4'> A proposta é subir os 25km de estrada que ligam a portaria administrativa do Parque, a chamada Portaria das Garrafas, onde efetivamente inicia o acesso da área protegida do Parque. </p>
<p class='mb-4'> Serão 100 quilômetros entre floresta, estrada rural, cachoeiras, histórias, cultura e comida local para uma imersão dentro do Parque Nacional Serra da Bocaina. <br>
  O caminho apresenta desnível acumulado significativo, em torno de 5500 acumulado, ou seja, sobe e desce muito. </p>
<p class='mb-4'> É preciso boa experiência com mountain bike e bom preparo físico. </p>
<p class='mb-4'> Os equipamentos precisam estar bem ajustados e em bons condições.</p>",
        'galeria' => [
            'ciclotravessia-bocaina-001.webp',
            'ciclotravessia-bocaina-002.webp',
            'ciclotravessia-bocaina-003.webp',
            'ciclotravessia-bocaina-004.webp',
            'ciclotravessia-bocaina-005.webp',
            'ciclotravessia-bocaina-006.webp',
            'ciclotravessia-bocaina-007.webp',
            'ciclotravessia-bocaina-008.webp',
            'ciclotravessia-bocaina-009.webp',
            'ciclotravessia-bocaina-010.webp',
            'ciclotravessia-bocaina-011.webp',
            'ciclotravessia-bocaina-012.webp',
            'ciclotravessia-bocaina-013.webp',
            'ciclotravessia-bocaina-014.webp',
            'ciclotravessia-bocaina-015.webp',
            'ciclotravessia-bocaina-016.webp',
            'ciclotravessia-bocaina-017.webp',
            'ciclotravessia-bocaina-018.webp',
            'ciclotravessia-bocaina-019.webp',
            'ciclotravessia-bocaina-020.webp'
        ],
        
        'itinerario' => [
            'Dia 0' => 'Ponto de Encontro - 
Pernoite em pousada inclusa na noite anterior ( a verificar disponibilidade de qual vai receber).',
            'Dia 1' => '- 46km
* 1735 +
* 1037 -
<br>06:00h - Café da manhã .
<br>07:00h - Ajustes e saida programada.<br>19:00h - Jantar e pernoite.
<br>11:00h - Portaria das Garrafas.
<br>16:00h - Pousada Barreirinha. 
<br>19:00h - Jantar (incluso)',
            'Dia 2' => '- 60km
- 1262 + 
- 1952 - 
<br>06:00h - Café da manhã.
<br>07:00h - Ajustes e saída programada. 
<br>12:00h - Arapei-SP - Asfalto 25km. 
<br>13:00h - São José do Barreiro-SP.'
        ],
        'o_que_inclui' => [
            'Guia com certificação internacional em Primeiros Socorros (WFA)',
            'Hospedagem noite anterior',
            'Carro de apoio',
            'Mecânico', 
            'Hospedagem com jantar e café da manhã dentro do Parque',
            'Lanche durante o pedal (suporte)', 
            'Mínimo 4 participantes'
        ],
        'nao_inclui' => [
            'Refeições antes e depois da atividade',
            'Bebidas e carregador de mochilas',
            'Nenhum outro equipamento não listado nos itens inclusos'
        ],
        'politica_reembolso' => "
        <ul class='space-y-2 text-sm'>
            <li><strong>Até 30 DIAS úteis antes do evento:</strong> você será taxado em 10% do valor do roteiro para cobrir taxas administrativas;</li>
            <li><strong>Até 15 DIAS úteis antes do evento:</strong> você será taxado em 30% do valor do roteiro para cobrir taxas administrativas, multas de reservas e despesas de logística;</li>
            <li><strong>Até 7 DIAS úteis antes do evento:</strong> você será taxado em 50% do valor do roteiro para cobrir taxas administrativas, multas de reservas e de logística;</li>
            <li><strong>NÃO COMPARECIMENTO no dia do evento:</strong> Não há devolução do investimento.</li>
            <li><strong>Desistência DURANTE o evento:</strong> Não há devolução do investimento e você arcará com custos de evacuação (guia, transporte, etc...).</li>
        </ul>
    ",

    'riscos_perigos' => "Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:
        <br><br>
        O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:
        <br><br>
        1. Problemas de Saúde como: Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.
        <br><br>
        2. Situações meteorológicas/de causas naturais como: Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.
        <br><br>
        3. Demora de resgate e acesso a assistência médica: Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.
        <br><br>
        Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual."
    ],
        // Adicionaremos os outros conforme o conteúdo do Wix
    ]
];
// data/content.php (Adicione ou atualize esta parte)
$site_data['hero_offers'] = [
    [
        'titulo' => 'TRAVESSIA JUATINGA',
        'subtitulo' => 'Travessia Juatinga. Pico Pão de Açúcar x Cachoeira Saco Bravo',
        'imagem' => 'assets/img/hero/juatinga-completa-04.avif',
        'imagem_mobile' => 'assets/img/hero/travessia-joatinga-heroe-home-001.webp',
        'link' => 'roteiro-detalhe.php?v=travessia-juatinga-completa',
        'preco_de' => '',
        'preco_por' => 'R$ 3.309,00'
    ],
    [
        'titulo' => 'TRILHA DO OURO',
        'subtitulo' => 'A Trilha do Ouro (2 Dias), Travessia no Parque Nacional da Serra da Bocaina',
        'imagem' => 'assets/img/hero/trilha-ouro-01.avif',
        'link' => 'roteiro-detalhe.php?v=trilha-do-ouro',
        'preco_de' => '',
        'preco_por' => 'R$ 2.239,00'
    ],
    [
        'titulo' => 'PICO DOS MARINS',
        'subtitulo' => 'A trilha do Pico dos Marins',
        'imagem' => 'assets/img/hero/pico-dos-marins.avif',
        'imagem_mobile' => 'assets/img/hero/pico-dos-marins-heroe-home-01.webp',
        'link' => 'roteiro-detalhe.php?v=pico-dos-marins',
        'preco_de' => '',
        'preco_por' => 'R$ 1.459,00'
    ],
    [
        'titulo' => 'TRAVESSIA RUY BRAGA',
        'subtitulo' => 'Travessia Ruy Braga: Desafie-se no Itatiaia com a Capivara Rota',
        'imagem' => 'assets/img/hero/ruy-braga-01.avif',
        'link' => 'roteiro-detalhe.php?v=travessia-ruy-braga',
        'preco_de' => '',
        'preco_por' => '',
        'preco_por' => 'R$ 2.109,00'
    ],
    [
        'titulo' => 'PARQUE NACIONAL ITATIAIA',
        'subtitulo' => 'Itatiaia com Capivara Rota: Sua Aventura Começa Aqui!',
        'imagem' => 'assets/img/hero/parque-itatiaia-01.avif',
        'imagem_mobile' => 'assets/img/hero/parque-itatiaia-heroe-home-01.webp',
        'link' => 'roteiro-detalhe.php?v=parque-nacional-itatiaia',
        'preco_de' => '',
        'preco_por' => 'R$ 1.819,00'
    ],
    [
        'titulo' => 'VIVÊNCIA JUATINGA',
        'subtitulo' => 'Aventura e Alma na Reserva da Juatinga',
        'imagem' => 'assets/img/hero/vivencia-juatinga-01.avif',
        'link' => 'roteiro-detalhe.php?v=vivencia-juatinga',
        'preco_de' => '',
        'preco_por' => 'R$ 1.899,00'
    ],
    [
        'titulo' => 'Bapendi x Aiuruoca',
        'subtitulo' => 'Viva a Mantiqueira: Natureza, História e Pura Emoção',
        'imagem' => 'assets/img/hero/travessia-bapendi.avif',
        'link' => 'roteiro-detalhe.php?v=baependi-aiuruoca',
        'preco_de' => '',
        'preco_por' => 'R$ 2.109,00'
    ],
    
    ];

