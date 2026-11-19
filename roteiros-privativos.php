<?php
require_once 'data/content.php';

$page_title = "Roteiros Privativos e Personalizados";
$page_description = "Crie sua jornada perfeita! Agende seu roteiro privativo com exclusividade total, flexibilidade e atendimento VIP.";

include 'includes/header.php';
include 'includes/navbar.php';
?>

<section class="relative py-24 bg-slate-900 text-white overflow-hidden">
    <div class="absolute inset-0 opacity-30">
        <img src="images/oferecemos-progresso.webp" class="w-full h-full object-cover" alt="Grupo Privativo">
    </div>
    <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
        <span class="text-emerald-400 font-bold uppercase tracking-[0.3em] text-xs mb-4 block">Sua Jornada Perfeita</span>
        <h1 class="text-4xl md:text-7xl font-light leading-tight">
            Agende seu roteiro <br><span class="font-black text-white italic">privativo e personalizado.</span>
        </h1>
        <p class="mt-8 text-gray-200 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
            Mais que um pacote, é a sua aventura desenhada por você. Explore a natureza com a Capivara Rota através de uma experience exclusiva.
        </p>
        <a href="#destinos" class="mt-10 inline-block bg-emerald-700 hover:bg-emerald-800 text-white px-8 py-4 rounded-full font-bold transition shadow-lg">Escolher Destino</a>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-slate-800">Benefícios de uma Experiência Privativa</h2>
            <div class="h-1 w-20 bg-emerald-600 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="flex gap-4 p-6 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="text-emerald-700 shrink-0"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                <div>
                    <h4 class="font-bold text-slate-800">Exclusividade Total</h4>
                    <p class="text-slate-600 text-sm mt-1">Roteiro inteiro dedicado ao seu grupo, sem a presença de outros viajantes.</p>
                </div>
            </div>
            <div class="flex gap-4 p-6 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="text-emerald-700 shrink-0"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                <div>
                    <h4 class="font-bold text-slate-800">Flexibilidade Inigualável</h4>
                    <p class="text-slate-600 text-sm mt-1">Escolha as datas, horários e o ritmo ideal da sua aventura.</p>
                </div>
            </div>
            <div class="flex gap-4 p-6 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="text-emerald-700 shrink-0"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg></div>
                <div>
                    <h4 class="font-bold text-slate-800">Personalização Completa</h4>
                    <p class="text-slate-600 text-sm mt-1">Adapte o roteiro aos interesses e condicionamento físico do grupo.</p>
                </div>
            </div>
            <div class="flex gap-4 p-6 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="text-emerald-700 shrink-0"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-7.714 2.143L11 21l-2.143-7.714L1 12l6.857-2.286L11 3z"></path></svg></div>
                <div>
                    <h4 class="font-bold text-slate-800">Atendimento VIP</h4>
                    <p class="text-slate-600 text-sm mt-1">Atenção exclusiva dos nossos guias, garantindo uma experiência fluida.</p>
                </div>
            </div>
            <div class="flex gap-4 p-6 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="text-emerald-700 shrink-0"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg></div>
                <div>
                    <h4 class="font-bold text-slate-800">Momentos Inesquecíveis</h4>
                    <p class="text-slate-600 text-sm mt-1">Crie memórias únicas com quem você mais gosta.</p>
                </div>
            </div>
            <div class="flex gap-4 p-6 rounded-2xl bg-slate-50 border border-slate-100">
                <div class="text-emerald-700 shrink-0"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></div>
                <div>
                    <h4 class="font-bold text-slate-800">Saídas Flexíveis</h4>
                    <p class="text-slate-600 text-sm mt-1">Agende sua saída em qualquer período da temporada (sob consulta).</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="destinos" class="py-24 bg-slate-50 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-3 gap-12 mb-20">
            <div class="lg:col-span-1">
                <h2 class="text-3xl font-bold text-slate-800 mb-6">Opções de Agendamento e Pacotes</h2>
                <p class="text-slate-600 leading-relaxed">
                    Você tem o controle total. Oferecemos Agendamento Privativo em <strong>todos os nossos roteiros</strong>. Explore a beleza da natureza com a comodidade de um serviço exclusivo.
                </p>
            </div>
            <div class="lg:col-span-2 grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                    <h5 class="font-bold text-emerald-800 uppercase text-xs tracking-widest mb-4">Personalização</h5>
                    <h4 class="text-xl font-bold mb-4">Pacotes Sob Medida</h4>
                    <p class="text-slate-500 text-sm">Monte a experiência incluindo atividades específicas, hospedagem e transporte 4x4 conforme os desejos do seu grupo.</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                    <h5 class="font-bold text-emerald-800 uppercase text-xs tracking-widest mb-4">Evolução</h5>
                    <h4 class="text-xl font-bold mb-4">Roteiros Progressivos</h4>
                    <p class="text-slate-500 text-sm">Desenvolvemos roteiros que evoluem com suas expectativas, focando em desafios crescentes de imersão.</p>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-10">
            <?php foreach($site_data['roteiros'] as $slug => $roteiro): ?>
            <article class="bg-white rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 group border border-slate-100 flex flex-col h-full">
                <div class="h-64 overflow-hidden relative shrink-0">
                    <img src="assets/img/<?= $roteiro['imagem_hero'] ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" alt="<?= $roteiro['titulo'] ?>">
                    
                    <div class="absolute top-5 left-5 flex flex-wrap gap-2">
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest text-emerald-900 shadow-sm">
                            <?= $roteiro['dificuldade'] ?>
                        </span>
                        <span class="bg-slate-900/80 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest text-white shadow-sm">
                            <?= $roteiro['distancia'] ?>
                        </span>
                    </div>
                </div>
                
                <div class="p-8 flex flex-col flex-1">
                    <h3 class="text-2xl font-bold mb-4 text-slate-800 leading-tight"><?= $roteiro['titulo'] ?></h3>
                    <p class="text-slate-500 text-sm mb-8 line-clamp-2 flex-1"><?= $roteiro['resumo'] ?></p>
                    
                    <div class="grid grid-cols-2 gap-3 border-t border-slate-100 pt-6 mt-auto">
                        <a href="roteiro-detalhe.php?v=<?= $slug ?>" 
                           class="flex items-center justify-center border-2 border-slate-200 text-slate-700 py-3 rounded-2xl font-bold text-xs hover:bg-slate-50 hover:border-slate-300 transition uppercase tracking-widest text-center">
                            Ver Roteiro
                        </a>
                        <a href="https://wa.me/<?= $site_data['info']['whatsapp'] ?>?text=Olá! Gostaria de agendar o roteiro privativo: <?= $roteiro['titulo'] ?>" 
                           target="_blank"
                           class="flex items-center justify-center bg-nature text-white py-3 rounded-2xl font-bold text-xs hover:bg-emerald-900 transition uppercase tracking-widest shadow-md text-center">
                            Agendar
                        </a>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-20 bg-nature text-white px-6 text-center">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl md:text-5xl font-light mb-8 italic">"Sua aventura desenhada por você."</h2>
        <p class="text-emerald-100 text-lg mb-12 max-w-2xl mx-auto">
            Não se prenda a datas fixas! Entre em contato e consulte a disponibilidade para o seu grupo hoje mesmo.
        </p>
        <a href="https://wa.me/<?php echo $site_data['info']['whatsapp']; ?>?text=Olá! Gostaria de montar um pacote personalizado para meu grupo." 
           class="inline-block bg-white text-nature px-10 py-5 rounded-full font-black text-lg hover:bg-emerald-50 transition shadow-2xl uppercase tracking-widest">
            Falar com a Equipe
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>