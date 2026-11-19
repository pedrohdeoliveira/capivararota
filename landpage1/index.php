<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capivara Rota de Aventura | Em Reformulação</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .btn-shadow { box-shadow: 0 4px 14px 0 rgba(45, 58, 39, 0.2); }
        .bg-nature { background-color: #2D3A27; }
        .text-nature { color: #2D3A27; }
        .border-nature { border-color: #2D3A27; }
        /* Garante que as imagens do grid mantenham a proporção quadrada */
        .aspect-square { aspect-ratio: 1 / 1; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 min-h-screen flex flex-col justify-center items-center p-4">

    <main class="w-full max-w-2xl bg-white rounded-2xl shadow-sm border border-slate-100 p-8 md:p-12 text-center flex flex-col items-center">
        
        <header class="mb-10 flex flex-col items-center">
            <img src="images/logo-capivara-rota-transp-2.png" 
                 alt="Logo Capivara Rota de Aventura" 
                 class="w-32 md:w-40 h-auto mb-4"
                 loading="lazy">
            
            <div class="text-center">
                <h1 class="text-xl md:text-2xl font-bold tracking-[0.2em] text-emerald-900 uppercase leading-none">
                    Capivara
                </h1>
                <p class="text-[10px] md:text-xs tracking-[0.4em] text-emerald-700 uppercase mt-1">
                    Rota de Aventura
                </p>
            </div>

            <div class="h-1 w-8 bg-emerald-600 mx-auto mt-4 rounded-full"></div>
        </header>

        <section class="mb-10">
            <h2 class="text-3xl md:text-4xl font-light text-slate-800 mb-6 leading-tight">
                Novas trilhas <br><strong>estão por vir.</strong>
            </h2>
            
            <p class="text-slate-600 text-base md:text-lgleading-relaxed max-w-lg mx-auto">
                Estamos redesenhando nossa experiência digital para refletir nossa essência: 
                <span class="text-emerald-800 font-medium text-nowrap">educação ambiental</span> e trekking autêntico.
            </p>
        </section>

        <section class="w-full mb-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                
                <div class="overflow-hidden rounded-xl aspect-square shadow-sm border border-slate-100">
                    <img src="images/foto-destino-1.webp" 
                         alt="Cenário de Trekking Capivara Rota" 
                         class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"
                         loading="lazy">
                </div>

                <div class="overflow-hidden rounded-xl aspect-square shadow-sm border border-slate-100">
                    <img src="images/foto-destino-2.webp" 
                         alt="Cachoeira e Natureza Preservada" 
                         class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"
                         loading="lazy">
                </div>

                <div class="overflow-hidden rounded-xl aspect-square shadow-sm border border-slate-100">
                    <img src="images/foto-destino-3.webp" 
                         alt="Trilha na Mata Atlântica" 
                         class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"
                         loading="lazy">
                </div>

                <div class="overflow-hidden rounded-xl aspect-square shadow-sm border border-slate-100">
                    <img src="images/foto-destino-4.webp" 
                         alt="Vista Panorâmica da Aventura" 
                         class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"
                         loading="lazy">
                </div>

            </div>
        </section>

        <nav class="flex flex-col gap-4 w-full max-w-md mx-auto">
            
            <a href="https://capivararoute.wixsite.com/capivararotatrekking" 
               target="_blank"
               class="w-full border-2 border-nature text-nature py-4 px-6 rounded-xl font-bold text-base hover:bg-slate-50 transition-all text-center active:scale-[0.99]">
                Acessar informações no site antigo
            </a>

            <a href="https://wa.me/5512992163832" 
               target="_blank"
               class="flex items-center justify-center gap-2 w-full bg-nature text-white py-5 px-6 rounded-xl font-semibold text-lg hover:bg-emerald-900 transition-all active:scale-[0.98] btn-shadow">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.588-5.946 0-6.556 5.332-11.888 11.888-11.888 3.176 0 6.161 1.237 8.404 3.48s3.481 5.229 3.481 8.406c0 6.555-5.332 11.887-11.887 11.887-2.01 0-3.987-.51-5.741-1.478l-6.144 1.613zm5.883-4.488l.423.252c1.472.877 3.17 1.342 4.904 1.342 5.093 0 9.237-4.144 9.237-9.237 0-2.466-.96-4.784-2.703-6.526s-4.06-2.703-6.526-2.703c-5.093 0-9.237 4.144-9.237 9.237 0 1.943.606 3.832 1.751 5.434l.277.387-1.01 3.688 3.784-.99z"/></svg>
                Falar pelo WhatsApp
            </a>

        </nav>

        <footer class="mt-12 pt-8 border-t border-slate-100 w-full text-center">
            
                <strong class="text-slate-500">Educação Ambiental.</strong>
            </p>
        </footer>

    </main>

</body>
</html>