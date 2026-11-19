<?php
// Garantia de acesso aos dados do site
if (!isset($site_data)) {
    require_once __DIR__ . '/../data/content.php';
}
?>

<footer class="bg-white border-t border-slate-100 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            
            <div class="col-span-1 md:col-span-1">
                <a href="index.php" class="inline-block mb-4">
                    <img src="images/logo-capivara-rota-transp-2.png" alt="Logo" class="h-12 w-auto">
                </a>
                <div class="space-y-4">
                    <div>
                        <h5 class="font-bold text-slate-800 text-sm uppercase tracking-tight">Capivara Rota de Aventura</h5>
                        <p class="text-[10px] text-slate-400">CNPJ: 43.838.841.0001-85</p>
                    </div>
                    
                    <div class="py-2">
                        <p class="text-xs font-semibold text-emerald-800 mb-3 leading-tight uppercase tracking-wider">
                            Deseja participar de algum roteiro? <br>Preencha o formulário:
                        </p>
                        <a href="https://docs.google.com/forms/d/146L7MrGP2uHlHfOkLeGSKP98bHhDohiu6FFKE0g4wow/viewform?edit_requested=true" 
                           target="_blank"
                           class="inline-block bg-emerald-700 text-white px-5 py-2.5 rounded-lg text-xs font-bold hover:bg-emerald-800 transition shadow-sm uppercase tracking-widest">
                            Abrir Formulário
                        </a>
                    </div>
                </div>
            </div>

            <div>
                <h4 class="text-slate-900 font-bold uppercase tracking-widest text-xs mb-6">Explorar</h4>
                <ul class="space-y-4">
                    <li><a href="index.php" class="text-slate-600 hover:text-emerald-700 text-sm transition">Início</a></li>
                    <li><a href="sobre.php" class="text-slate-600 hover:text-emerald-700 text-sm transition">Sobre Nós</a></li>
                    <li><a href="roteiros.php" class="text-slate-600 hover:text-emerald-700 text-sm transition">Nossos Roteiros</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-slate-900 font-bold uppercase tracking-widest text-xs mb-6">Contato</h4>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3 text-slate-600 text-sm">
                        <svg class="w-5 h-5 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <a href="https://wa.me/<?= $site_data['info']['whatsapp']; ?>"><?= $site_data['info']['whatsapp']; ?></a>
                    </li>
                    <li class="flex items-center gap-3 text-slate-600 text-sm">
                        <svg class="w-5 h-5 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 012-2V7a2 2 0 01-2-2H5a2 2 0 01-2 2v10a2 2 0 012 2z"></path></svg>
                        <a href="mailto:<?= $site_data['info']['email']; ?>"><?= $site_data['info']['email']; ?></a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-slate-900 font-bold uppercase tracking-widest text-xs mb-6">Siga a Capivara Rota</h4>
                <div class="flex flex-col gap-3 mt-4">
                    <div class="flex gap-3">
                        <a href="https://instagram.com/<?= $site_data['info']['insta']; ?>" target="_blank" title="Instagram" class="bg-slate-100 w-12 h-12 rounded-full text-slate-600 hover:bg-emerald-700 hover:text-white transition flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="https://www.tiktok.com/@capivararota.trekking?_r=1&_t=ZS-9876XlWoKSi" target="_blank" title="TikTok" class="bg-slate-100 w-12 h-12 rounded-full text-slate-600 hover:bg-emerald-700 hover:text-white transition flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 16 16"><path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/></svg>
                        </a>
                        <a href="https://www.threads.net/@capivararota.trekking" target="_blank" title="Threads" class="bg-slate-100 w-12 h-12 rounded-full text-slate-600 hover:bg-emerald-700 hover:text-white transition flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                                <path d="M6.321 6.016c-.27-.18-1.166-.802-1.166-.802.756-1.081 1.753-1.502 3.132-1.502.975 0 1.803.327 2.394.948s.928 1.509 1.005 2.644q.492.207.905.484c1.109.745 1.719 1.86 1.719 3.137 0 2.716-2.226 5.075-6.256 5.075C4.594 16 1 13.987 1 7.994 1 2.034 4.482 0 8.044 0 9.69 0 13.55.243 15 5.036l-1.36.353C12.516 1.974 10.163 1.43 8.006 1.43c-3.565 0-5.582 2.171-5.582 6.79 0 4.143 2.254 6.343 5.63 6.343 2.777 0 4.847-1.443 4.847-3.556 0-1.438-1.208-2.127-1.27-2.127-.236 1.234-.868 3.31-3.644 3.31-1.618 0-3.013-1.118-3.013-2.582 0-2.09 1.984-2.847 3.55-2.847.586 0 1.294.04 1.663.114 0-.637-.54-1.728-1.9-1.728-1.25 0-1.566.405-1.967.868ZM8.716 8.19c-2.04 0-2.304.87-2.304 1.416 0 .878 1.043 1.168 1.6 1.168 1.02 0 2.067-.282 2.232-2.423a6.2 6.2 0 0 0-1.528-.161"/>
                            </svg>
                        </a>
                    </div>

                    <div class="flex gap-3">
                        <a href="https://www.facebook.com/share/1HZZsuaDtf/" target="_blank" title="Facebook" class="bg-slate-100 w-12 h-12 rounded-full text-slate-600 hover:bg-emerald-700 hover:text-white transition flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/capivara-rota-de-aventura-443997421" target="_blank" title="LinkedIn" class="bg-slate-100 w-12 h-12 rounded-full text-slate-600 hover:bg-emerald-700 hover:text-white transition flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- SEÇÃO DE PARCEIROS REGIONAIS (FUNDO ESCURO FULL-WIDTH) -->
<?php if (!empty($site_data['parceiros'])): ?>
<div class="bg-slate-950 text-white -mx-6 -mt-16 pt-12 pb-10 px-6 mb-12 border-b border-slate-800">
    <div class="max-w-7xl mx-auto">
        <div class="text-center md:text-left mb-6">
            <span class="text-emerald-400 font-bold uppercase tracking-widest text-xs">Parcerias</span>
            <h4 class="text-xl font-bold text-white mt-1">Parceiros de Expedição</h4>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 items-center">
            <?php foreach($site_data['parceiros'] as $slug => $parceiro): ?>
                <a href="parceiro.php?p=<?= $slug ?>" 
                   class="bg-slate-900/80 border border-slate-800 hover:border-emerald-500/50 p-4 rounded-2xl flex items-center justify-center h-20 transition-all group shadow-sm hover:shadow-emerald-500/10">
                    <img src="<?= $parceiro['logo'] ?>" 
                         alt="<?= $parceiro['nome'] ?>" 
                         class="max-h-10 w-auto object-contain grayscale group-hover:grayscale-0 opacity-70 group-hover:opacity-100 transition duration-300">
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>

        <div class="pt-8 border-t border-slate-100 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-slate-400 text-xs text-center md:text-left">
                &copy; <?= date('Y'); ?> <?= $site_data['info']['name']; ?>. <br class="md:hidden"> 
                Todos os direitos reservados.
            </p>
            <p class="text-slate-400 text-[10px] uppercase tracking-widest">
                Desenvolvido com consciência ambiental por <a href="https://www.mkteam.com.br" target="_blank" title="MKTEAM" class="hover:text-emerald-700 transition">MKTEAM</a>.
            </p>
        </div>
    </div>
</footer>

</body>
</html>