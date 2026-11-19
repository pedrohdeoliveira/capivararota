<?php
require_once 'data/content.php';

// Captura os filtros vindos da URL (local, tipo e o novo nivel)
$filtro_local = isset($_GET['local']) ? trim($_GET['local']) : null;
$filtro_tipo  = isset($_GET['tipo'])  ? trim($_GET['tipo'])  : null;
$filtro_nivel = isset($_GET['nivel']) ? trim($_GET['nivel']) : null;

// Array que armazenará os dados finais exibidos na tela
$roteiros_exibidos = [];

// Filtra dinamicamente baseado no cadastro do content.php
foreach ($site_data['roteiros'] as $slug => $roteiro) {

    // 1. Filtro por Nível de Dificuldade/Progressão (Iniciante, Intermediário, Avançado)
    if ($filtro_nivel) {
        if (!isset($roteiro['nivel']) || strtolower($roteiro['nivel']) !== strtolower($filtro_nivel)) {
            continue;
        }
    }

    // 2. Filtro por Local
    if ($filtro_local) {
        if (!isset($roteiro['local']) || strtolower($roteiro['local']) !== strtolower($filtro_local)) {
            continue;
        }
    }
    
    // 3. Filtro por Tipo (Suporta string única ou array de categorias)
    if ($filtro_tipo) {
        if (!isset($roteiro['tipo'])) {
            continue;
        }
        
        if (is_array($roteiro['tipo'])) {
            if (!in_array($filtro_tipo, $roteiro['tipo'])) {
                continue;
            }
        } else {
            if (strtolower($roteiro['tipo']) !== strtolower($filtro_tipo)) {
                continue;
            }
        }
    }
    
    // Se passou por todos os testes, armazena para exibição
    $roteiros_exibidos[$slug] = $roteiro;
}

$page_title = "Nossos Roteiros de Aventura";
$page_description = "Explore os melhores destinos de trekking e montanhismo: Mantiqueira, Serra da Bocaina, Juatinga e muito mais.";

include 'includes/header.php';
include 'includes/navbar.php';
?>

<section class="py-20 bg-slate-50 border-b border-slate-100 text-center">
    <div class="max-w-4xl mx-auto px-6">
        <span class="text-emerald-700 font-bold uppercase tracking-[0.3em] text-xs mb-4 block">
            <?php 
                if ($filtro_nivel) echo "Nível: " . htmlspecialchars(ucfirst($filtro_nivel));
                elseif ($filtro_local) echo "Destino: " . htmlspecialchars(ucfirst($filtro_local));
                elseif ($filtro_tipo) echo "Estilo: " . htmlspecialchars(ucfirst($filtro_tipo));
                else echo "Exploração e Aventura";
            ?>
        </span>
        <h1 class="text-4xl md:text-6xl font-light text-slate-900 leading-tight">
            Nossos <span class="font-bold text-nature">Destinos</span>
        </h1>
        <p class="mt-6 text-slate-500 text-lg max-w-2xl mx-auto leading-relaxed">
            De caminhadas leves em cachoeiras aos cumes mais técnicos do Brasil. Escolha sua próxima jornada.
        </p>
    </div>
</section>

<!-- BARRA DE FILTROS POR NÍVEL -->
<section class="py-6 bg-white border-b border-slate-100 px-6 sticky top-16 z-30 shadow-sm">
    <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-4">
        
        <div class="flex items-center gap-2 overflow-x-auto pb-2 sm:pb-0 w-full sm:w-auto">
            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider mr-2 hidden sm:inline">Filtrar por Nível:</span>
            
            <a href="roteiros.php" 
               class="px-5 py-2 rounded-full text-xs font-bold transition-all shrink-0 <?= empty($filtro_nivel) ? 'bg-slate-900 text-white shadow' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' ?>">
                Todos
            </a>

            <a href="roteiros.php?nivel=iniciante" 
               class="px-5 py-2 rounded-full text-xs font-bold transition-all shrink-0 <?= strtolower($filtro_nivel) === 'iniciante' ? 'bg-emerald-600 text-white shadow' : 'bg-emerald-50 text-emerald-800 hover:bg-emerald-100' ?>">
                🟢 Iniciante
            </a>

            <a href="roteiros.php?nivel=intermediario" 
               class="px-5 py-2 rounded-full text-xs font-bold transition-all shrink-0 <?= strtolower($filtro_nivel) === 'intermediario' ? 'bg-amber-500 text-white shadow' : 'bg-amber-50 text-amber-800 hover:bg-amber-100' ?>">
                🟡 Intermediário
            </a>

            <a href="roteiros.php?nivel=avancado" 
               class="px-5 py-2 rounded-full text-xs font-bold transition-all shrink-0 <?= strtolower($filtro_nivel) === 'avancado' ? 'bg-red-600 text-white shadow' : 'bg-red-50 text-red-800 hover:bg-red-100' ?>">
                🔴 Avançado
            </a>
        </div>

        <?php if ($filtro_local || $filtro_tipo || $filtro_nivel): ?>
            <a href="roteiros.php" class="text-xs text-slate-400 hover:text-red-600 underline font-semibold">
                Limpar Filtros &times;
            </a>
        <?php endif; ?>

    </div>
</section>

<section class="py-24 bg-white px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-3 gap-10">
            <?php if (empty($roteiros_exibidos)): ?>
                <div class="col-span-3 text-center py-12 text-slate-400">
                    Nenhum roteiro encontrado para esta classificação no momento.
                </div>
            <?php else: ?>
                <?php foreach($roteiros_exibidos as $slug => $roteiro): ?>
                
                <?php
                    // Define se a imagem traz 'assets/img/' no caminho ou não
                    $caminho_imagem = (strpos($roteiro['imagem_hero'], 'assets/img/') === 0) 
                        ? $roteiro['imagem_hero'] 
                        : 'assets/img/' . $roteiro['imagem_hero'];
                ?>

                <article class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 group flex flex-col h-full border border-slate-50">
                    <div class="h-72 overflow-hidden relative shrink-0">
                        <img src="<?= $caminho_imagem ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-700" alt="<?= $roteiro['titulo'] ?>">
                        
                        <!-- Badge de Nível / Dificuldade -->
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest text-emerald-800 shadow-sm">
                            <?= isset($roteiro['nivel']) ? ucfirst($roteiro['nivel']) : (isset($roteiro['dificuldade']) ? $roteiro['dificuldade'] : 'Aventura') ?>
                        </div>
                    </div>
                    
                    <div class="p-8 flex flex-col flex-1">
                        <div class="flex gap-4 text-xs font-medium text-slate-400 mb-3">
                            <span class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg> 
                                <?= isset($roteiro['distancia']) ? $roteiro['distancia'] : (isset($roteiro['duracao']) ? $roteiro['duracao'] : '') ?>
                            </span>
                        </div>
                        
                        <h3 class="text-2xl font-bold mb-4 text-slate-800 leading-tight">
                            <?= $roteiro['titulo'] ?>
                        </h3>
                        
                        <p class="text-slate-600 mb-8 line-clamp-3 flex-1">
                            <?= isset($roteiro['resumo']) ? $roteiro['resumo'] : '' ?>
                        </p>
                        
                        <a href="roteiro-detalhe.php?v=<?= $slug ?>" class="flex items-center justify-center w-full bg-slate-50 text-slate-800 py-4 rounded-2xl font-bold group-hover:bg-nature group-hover:text-white transition-colors">
                            Explorar Roteiro
                        </a>
                    </div>
                </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="py-20 bg-nature text-white text-center px-6">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-6">Procurando algo específico?</h2>
        <p class="text-emerald-100 text-lg mb-10">Solicite um roteiro personalizado ou tire dúvidas sobre os níveis técnicos.</p>
        <a href="https://wa.me/<?= $site_data['info']['whatsapp'] ?>" class="bg-white text-nature px-10 py-4 rounded-full font-bold hover:bg-slate-100 transition shadow-lg inline-block">Falar no WhatsApp</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>