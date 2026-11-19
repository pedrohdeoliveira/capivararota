<?php
// riscos-desistencias.php
// Página institucional com as políticas gerais da Capivara Rota

// 1. Carrega o Cabeçalho
include 'includes.php'; // Ou header e navbar separadamente
include 'includes/header.php';
include 'includes/navbar.php'; 
?>

<main class="max-w-4xl mx-auto px-4 py-12 md:py-20">
    
    <div class="text-center mb-16">
        <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight text-slate-900 uppercase">
            Termos e Condições
        </h1>
        <p class="text-slate-500 mt-3 max-w-xl mx-auto">
            Informações importantes sobre as políticas de cancelamento, reembolso e a ciência dos riscos envolvidos em nossas expedições remotas.
        </p>
        <div class="w-24 h-1 bg-emerald-500 mx-auto mt-6 rounded-full"></div>
    </div>

    <div class="space-y-12">
        
        <section class="bg-white p-8 md:p-10 rounded-[2rem] shadow-sm border border-slate-200/60">
            <div class="flex items-center gap-3 mb-6">
                <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                <h2 class="text-xl md:text-2xl font-bold text-slate-900 uppercase tracking-wide">
                    POLÍTICA DE DESISTÊNCIA
                </h2>
            </div>
            
            <div class="text-slate-600 leading-relaxed space-y-4">
                <p>Os cancelamentos serão reembolsados conforme abaixo:</p>
                <ul class="space-y-3 pl-2">
                    <li class="flex items-start gap-3">
                        <span class="inline-block w-1.5 h-1.5 rounded-full bg-slate-400 mt-2.5 shrink-0"></span>
                        <span><strong>Até 30 DIAS úteis antes do evento:</strong> você será taxado em 10% do valor do roteiro para cobrir taxas administrativas;</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="inline-block w-1.5 h-1.5 rounded-full bg-slate-400 mt-2.5 shrink-0"></span>
                        <span><strong>Até 15 DIAS úteis antes do evento:</strong> você será taxado em 30% do valor do roteiro para cobrir taxas administrativas, multas de reservas e despesas de logística;</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="inline-block w-1.5 h-1.5 rounded-full bg-slate-400 mt-2.5 shrink-0"></span>
                        <span><strong>Até 7 DIAS úteis antes do evento:</strong> você será taxado em 50% do valor do roteiro para cobrir taxas administrativas, multas de reservas e de logística;</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="inline-block w-1.5 h-1.5 rounded-full bg-slate-400 mt-2.5 shrink-0"></span>
                        <span><strong>NÃO COMPARECIMENTO no dia do evento:</strong> Não há devolução do investimento.</span>
                    </li>
                </ul>
            </div>
        </section>

        <section class="bg-white p-8 md:p-10 rounded-[2rem] shadow-sm border border-slate-200/60">
            <div class="flex items-center gap-3 mb-6">
                <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                <h2 class="text-xl md:text-2xl font-bold text-slate-900 uppercase tracking-wide">
                    ENTENDIMENTO DE RISCOS E PERIGOS
                </h2>
            </div>
            
            <div class="text-slate-600 leading-relaxed space-y-6">
                <p>Antes de participar de qualquer atividade é imprescindível que o cliente tenha conhecimento, entenda e aceite os Riscos e Perigos envolvidos nas atividades que realizamos:</p>
                <p>O CONTRATANTE (CLIENTE) fica ciente de que podem ocorrer:</p>
                
                <div class="space-y-4 pt-2">
                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                        <p class="font-semibold text-slate-900 mb-2">1. Problemas de Saúde como:</p>
                        <p>Escorregões e tropeções (que podem resultar em queda; torção, luxação e/ou fratura óssea); queimaduras de pele; bolhas nos pés; picadas de animais peçonhentos e/ou insetos que podem causar reação alérgica; contato com espinhos e/ou plantas urticantes; hipotermia, exaustão física e até mesmo morte, entre outros do gênero. Quando estamos em ambiente de alta montanha, a hipóxia causa dor de cabeça, náuseas, falta de apetite, insônia, e em sua forma mais grave, edema cerebral e/ou pulmonar que pode levar a morte.</p>
                    </div>

                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                        <p class="font-semibold text-slate-900 mb-2">2. Situações meteorológicas/de causas naturais como:</p>
                        <p>Mudanças bruscas e inesperadas do tempo, chuva forte, descargas elétricas, vento, granizo, nevoreiro atrapalhando a visibilidade, temperaturas extremas, radiação solar alta, queda de barreiras, pedras e/ou árvores, entre outros do gênero. Ao escalar vulcões podemos inclusive ser surpreendidos por uma erupção.</p>
                    </div>

                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                        <p class="font-semibold text-slate-900 mb-2">3. Demora de resgate e acesso a assistência médica:</p>
                        <p>Visto que o percurso das expedições é feito em local remoto e de difícil acesso, longe de hospitais ou postos de saúde. Devido ao isolamento alguns pequenos acidentes podem se transformar em situações de maior gravidade.</p>
                    </div>
                </div>

                <p class="pt-2 border-t border-slate-100 text-sm bg-amber-50/60 p-4 rounded-xl border border-amber-100/80 text-slate-700">
                    Ressaltamos que A CONTRATADA não possui equipe exclusiva para resgate. Se necessário, este será feito por Bombeiros ou Defesa Civil municipal/estadual.
                </p>
            </div>
        </section>

    </div>
    
</main>

<?php
// 2. Carrega o Rodapé
include 'includes/footer.php'; 
?>