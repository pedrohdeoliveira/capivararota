<nav id="navbar" class="fixed top-0 left-0 w-full z-50 bg-white border-b border-slate-100 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <div class="flex-shrink-0 flex items-center">
                <a href="index.php" class="flex items-center gap-3">
                    <img src="images/logo-capivara-rota-transp-2.png" alt="Logo" class="h-12 w-auto">
                    <div class="hidden sm:block">
                        <span class="block text-sm font-bold tracking-widest text-emerald-900 uppercase leading-none">Capivara</span>
                        <span class="block text-[10px] tracking-[0.3em] text-emerald-700 uppercase">Rota de Aventura</span>
                    </div>
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a href="index.php" class="text-slate-600 hover:text-emerald-700 font-medium transition">Início</a>
                <a href="sobre.php" class="text-slate-600 hover:text-emerald-700 font-medium transition">Sobre</a>
                <a href="o-que-oferecemos.php" class="text-slate-600 hover:text-emerald-700 font-medium transition">O que Oferecemos</a>
                <a href="roteiros-privativos.php" class="text-slate-600 hover:text-emerald-700 font-medium transition">Roteiros Privativos</a>
                
                <div class="relative group py-2">
                    <a href="roteiros.php" class="text-slate-600 group-hover:text-emerald-700 font-medium transition inline-flex items-center gap-1">
                        Roteiros
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    
                    <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-[420px] bg-white rounded-3xl shadow-xl border border-slate-100 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-all duration-200 z-50 p-6 grid grid-cols-2 gap-6">
                        <div>
                            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-3 border-b border-slate-50 pb-1">Por Local</span>
                            <div class="space-y-1">
                                <a href="roteiros.php?local=mantiqueira" class="block py-1 text-sm text-slate-600 hover:text-emerald-600 transition">Serra da Mantiqueira</a>
                                <a href="roteiros.php?local=bocaina" class="block py-1 text-sm text-slate-600 hover:text-emerald-600 transition">Serra da Bocaina</a>
                                <a href="roteiros.php?local=papagaio" class="block py-1 text-sm text-slate-600 hover:text-emerald-600 transition">Pico do Papagaio</a>
                                <a href="roteiros.php?local=juatinga" class="block py-1 text-sm text-slate-600 hover:text-emerald-600 transition">Reserva da Juatinga</a>
                            </div>
                        </div>
                        
                        <div>
                            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-3 border-b border-slate-50 pb-1">Por Tipo</span>
                            <div class="space-y-1">
                                <a href="roteiros.php?tipo=cachoeiras" class="block py-1 text-sm text-slate-600 hover:text-emerald-600 transition">Cachoeiras</a>
                                <a href="roteiros.php?tipo=montanhas" class="block py-1 text-sm text-slate-600 hover:text-emerald-600 transition">Montanhas</a>
                                <a href="roteiros.php?tipo=florestas" class="block py-1 text-sm text-slate-600 hover:text-emerald-600 transition">Florestas</a>
                                <a href="roteiros.php?tipo=praias" class="block py-1 text-sm text-slate-600 hover:text-emerald-600 transition">Praias</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="riscos-desistencias.php" class="text-slate-600 hover:text-emerald-700 font-medium transition">Riscos e Desistências</a>
                                    
                <a href="https://wa.me/<?php echo $site_data['info']['whatsapp']; ?>" 
                   target="_blank"
                   class="bg-nature text-white px-6 py-2.5 rounded-full font-semibold text-sm hover:bg-emerald-800 transition shadow-sm">
                    Whatsapp
                </a>
            </div>

            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-slate-600 focus:outline-none">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-slate-100 max-h-[calc(100vh-5rem)] overflow-y-auto">
        <div class="px-4 pt-2 pb-6 space-y-1 sm:px-3">
            <a href="index.php" class="block px-3 py-3 text-base font-medium text-slate-700 border-b border-slate-50">Início</a>
            <a href="sobre.php" class="block px-3 py-3 text-base font-medium text-slate-700 border-b border-slate-50">Sobre</a>
            <a href="o-que-oferecemos.php" class="block px-3 py-3 text-base font-medium text-slate-700 border-b border-slate-50">O que Oferecemos</a>
            <a href="roteiros-privativos.php" class="block px-3 py-3 text-base font-medium text-slate-700 border-b border-slate-50">Roteiros Privativos</a>
            
            <div class="border-b border-slate-50 py-2">
                <a href="roteiros.php" class="block px-3 py-2 text-base font-bold text-emerald-800">Ver Todos os Roteiros</a>
                
                <div class="grid grid-cols-2 gap-2 px-3 pt-2 pb-1 text-sm">
                    <div class="space-y-1">
                        <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider">Locais</span>
                        <a href="roteiros.php?local=mantiqueira" class="block py-1 text-slate-600">Mantiqueira</a>
                        <a href="roteiros.php?local=bocaina" class="block py-1 text-slate-600">Bocaina</a>
                        <a href="roteiros.php?local=papagaio" class="block py-1 text-slate-600">Papagaio</a>
                        <a href="roteiros.php?local=juatinga" class="block py-1 text-slate-600">Juatinga</a>
                    </div>
                    <div class="space-y-1">
                        <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider">Tipos</span>
                        <a href="roteiros.php?tipo=cachoeiras" class="block py-1 text-slate-600">Cachoeiras</a>
                        <a href="roteiros.php?tipo=montanhas" class="block py-1 text-slate-600">Montanhas</a>
                        <a href="roteiros.php?tipo=florestas" class="block py-1 text-slate-600">Florestas</a>
                        <a href="roteiros.php?tipo=praias" class="block py-1 text-slate-600">Praias</a>
                    </div>
                </div>
            </div>

            <a href="riscos-desistencias.php" class="block px-3 py-3 text-base font-medium text-slate-700 border-b border-slate-50">Riscos e Desistências</a>
            <div class="pt-4">
                <a href="https://wa.me/<?php echo $site_data['info']['whatsapp']; ?>" 
                   class="block w-full text-center bg-nature text-white py-4 rounded-xl font-bold">
                    WhatsApp
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="h-20"></div>

<script>
    // Lógica do Menu Mobile
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // Efeito de sombra ao rolar a página
    window.addEventListener('scroll', () => {
        const nav = document.getElementById('navbar');
        if (window.scrollY > 10) {
            nav.classList.add('shadow-md');
        } else {
            nav.classList.remove('shadow-md');
        }
    });
</script>