<?php
require_once 'data/content.php';

$slug = isset($_GET['p']) ? $_GET['p'] : '';

if (!isset($site_data['parceiros'][$slug])) {
    header('Location: index.php');
    exit;
}

$parceiro = $site_data['parceiros'][$slug];
$page_title = $parceiro['nome'] . " - Parceria Oficial";
$page_description = $parceiro['descricao'];

include 'includes/header.php';
include 'includes/navbar.php';
?>

<section class="py-20 bg-slate-900 text-white min-h-[80vh] flex items-center px-6">
    <div class="max-w-4xl mx-auto w-full bg-slate-950 p-8 md:p-12 rounded-[2.5rem] border border-slate-800 shadow-2xl">
        <div class="flex flex-col md:flex-row items-center gap-8 mb-8">
            <div class="bg-[#f7f7f7] p-6 rounded-2xl shrink-0">
                <img src="<?= $parceiro['logo'] ?>" alt="<?= $parceiro['nome'] ?>" class="h-20 w-auto object-contain">
            </div>
            <div class="text-center md:text-left">
                <span class="bg-emerald-600/20 text-emerald-400 border border-emerald-500/30 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                    <?= $parceiro['categoria'] ?> &bull; <?= $parceiro['regiao'] ?>
                </span>
                <h1 class="text-3xl md:text-4xl font-bold mt-3 mb-2"><?= $parceiro['nome'] ?></h1>
                <p class="text-slate-400 text-sm"><?= $parceiro['endereco'] ?></p>
            </div>
        </div>

        <div class="border-t border-slate-800/80 pt-8 space-y-6">
            <div>
                <h3 class="text-emerald-400 font-bold text-sm uppercase tracking-wider mb-2">Sobre a Parceria</h3>
                <p class="text-slate-300 leading-relaxed text-lg font-light"><?= $parceiro['descricao'] ?></p>
            </div>

            <!-- BLOCO DE CUPOM (Se houver) -->
            <?php if (!empty($parceiro['cupom'])): ?>
                <div class="bg-emerald-950/40 border border-emerald-500/30 p-6 rounded-2xl flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div>
                        <span class="text-xs uppercase text-emerald-400 font-bold block mb-1">Benefício Exclusivo Capivara Rota</span>
                        <p class="text-white font-bold text-lg">Use o cupom na sua compra:</p>
                    </div>
                    <div class="bg-emerald-500 text-slate-950 font-extrabold text-xl px-6 py-3 rounded-xl tracking-wider select-all">
                        <?= $parceiro['cupom'] ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- BOTÃO DO SITE/LOJA (Se houver) -->
            <?php if (!empty($parceiro['link_loja'])): ?>
                <div class="pt-4">
                    <a href="<?= $parceiro['link_loja'] ?>" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-500 text-white font-bold px-8 py-4 rounded-full transition shadow-lg">
                        <span>Acessar Site do Parceiro</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>