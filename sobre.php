<?php
require_once 'data/content.php';

// Configurações de SEO para esta página
$page_title = "Sobre Dora e Pedro";
$page_description = "Conheça a história da Capivara Rota de Aventura, desde o resgate da Dora até as expedições do guia Pedro Oliveira.";

include 'includes/header.php';
include 'includes/navbar.php';
?>

<section class="py-20 bg-slate-50 border-b border-slate-100">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <span class="text-emerald-700 font-bold uppercase tracking-[0.3em] text-xs mb-4 block">Nossa História</span>
        <h1 class="text-4xl md:text-6xl font-light text-slate-900 leading-tight">
            Conheça o coração da <br><span class="font-bold">Capivara Rota</span>
        </h1>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
        <div class="relative group">
            <div class="absolute inset-0 border-2 border-emerald-700 rounded-3xl translate-x-4 translate-y-4 transition-transform group-hover:translate-x-2 group-hover:translate-y-2"></div>
            <img src="images/sobr-dora-001.avif" alt="Dora - A Capivara" class="rounded-3xl shadow-xl relative z-10 w-full h-[450px] object-cover bg-slate-100 p-8">
            </div>
        
        <div>
            <h2 class="text-3xl font-bold text-slate-800 mb-6">Dora - A "Capivara"</h2>
            <div class="space-y-4 text-slate-600 leading-relaxed text-lg">
                <p>
                    <strong class="text-emerald-800 italic">Dora, A Capivara</strong> - Assim ela é carinhosamente chamada por seu tutor, Pedro Oliveira, com quem ela reside desde que foi resgatada de um abrigo para cães.
                </p>
                <p>
                    Após ser castrada, a simpática caramelo de sorriso fácil ganhou massa e passou a ser chamada de Capivara. Esse apelido tornou-se um dos pilares que inspiraram Pedro a nomear a agência.
                </p>
                <p>
                    Aliando o carinho pela Dora com a história local, Pedro descobriu que durante a exploração do Vale do Paraíba rumo às Gerais, a condução feita pelos povos originários era direcionada pela <span class="text-slate-900 font-semibold">Rota das Capivaras</span>, trilhas já consolidadas e de menor resistência física no cerrado.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-nature text-white text-center">
    <div class="max-w-3xl mx-auto px-6">
        <p class="text-xl md:text-2xl font-light italic">
            "Nossa missão é proporcionar experiências de imersão com mínimo impacto e diversas histórias sobre a flora e fauna local."
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
        <div class="order-2 md:order-1">
            <h2 class="text-3xl font-bold text-slate-800 mb-6">Pedro Oliveira</h2>
            <div class="space-y-4 text-slate-600 leading-relaxed">
                <p>
                    Guia de turismo e Monitor ambiental, natural de Guaratinguetá/SP. Desde 2005, explora as Serras da Mantiqueira, Bocaina e Juatinga, com enfoque total em montanhismo e corrida de montanha (Trail Run).
                </p>
                <p>
                    Com vasta experiência em ultramaratonas e provas de resistência como a <span class="text-slate-900 font-medium">La Mision 80km</span> e <span class="text-slate-900 font-medium">UD Itamonte 114km</span>, Pedro lidera expedições em locais desafiadores como Serra Fina e Marins x Itaguaré.
                </p>
                <p>
                    Fundador da Capivara Rota, seu objetivo é promover atividades outdoor de forma responsável e segura. Pedro tem a meta pessoal de visitar todos os Parques Nacionais do Brasil e América do Sul, além de concluir uma ultramaratona de 100km em cada continente.
                </p>
            </div>
            
            <div class="mt-8 flex flex-wrap gap-2">
                <span class="bg-slate-100 text-slate-600 text-xs font-bold px-3 py-1 rounded-full uppercase">Guia Certificado</span>
                <span class="bg-slate-100 text-slate-600 text-xs font-bold px-3 py-1 rounded-full uppercase">Ultramaratonista</span>
                <span class="bg-slate-100 text-slate-600 text-xs font-bold px-3 py-1 rounded-full uppercase">Monitor Ambiental</span>
            </div>
        </div>

        <div class="order-1 md:order-2">
            <div class="relative">
                <img src="images/sobre-pedro-001.avif" alt="Pedro Oliveira" class="rounded-3xl shadow-2xl w-full h-[500px] object-cover">
                <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-2xl shadow-lg border border-slate-100">
                    <p class="text-emerald-800 font-black text-2xl leading-none">20+ ANOS</p>
                    <p class="text-slate-400 text-[10px] uppercase tracking-widest mt-1">De exploração solo</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-50">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h3 class="text-2xl md:text-3xl font-bold text-slate-800 mb-8">Vamos escrever o próximo capítulo da sua aventura?</h3>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="roteiros.php" class="bg-nature text-white px-10 py-4 rounded-full font-bold hover:bg-emerald-900 transition shadow-lg">Ver Agenda de Roteiros</a>
            <a href="https://wa.me/<?php echo $site_data['info']['whatsapp']; ?>" class="bg-white text-nature border border-slate-200 px-10 py-4 rounded-full font-bold hover:bg-slate-100 transition shadow-sm">Conversar com o Pedro</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>