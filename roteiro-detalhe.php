<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Força a busca do arquivo de dados a partir da raiz do servidor
require_once __DIR__ . '/data/content.php';

// 1. Pega o ID da URL
$id = isset($_GET['v']) ? $_GET['v'] : '';

// 2. Verifica se o roteiro existe
if (!isset($site_data['roteiros'][$id])) {
    header('Location: /roteiros'); // Caminho absoluto para a listagem
    exit;
}

$roteiro = $site_data['roteiros'][$id];
$page_title = (isset($roteiro['titulo']) ? $roteiro['titulo'] : 'Roteiro') . " - Capivara Rota";

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>
<?php
// Define o WhatsApp (usa o do parceiro se existir, senão usa o padrão da Capivara)
$num_whatsapp = !empty($roteiro['whatsapp']) 
    ? $roteiro['whatsapp'] 
    : $site_data['info']['whatsapp'];

// Mensagem pré-formatada dinâmica
$msg_padrao = "Olá! Tenho interesse no roteiro " . $roteiro['titulo'] . " e gostaria de tirar algumas dúvidas.";
$texto_mensagem = !empty($roteiro['mensagem_whatsapp']) 
    ? $roteiro['mensagem_whatsapp'] 
    : $msg_padrao;

// Monta o link final codificando a mensagem para URL
$link_reserva_whatsapp = "https://wa.me/" . $num_whatsapp . "?text=" . urlencode($texto_mensagem);
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">

<style>
  .swiper {
      width: 100% !important;
      height: 350px !important;
      overflow: hidden !important;
      position: relative !important;
  }
  @media (min-width: 768px) {
      .swiper {
          height: 550px !important;
      }
  }
  .swiper-slide {
      flex-shrink: 0 !important;
      width: 100% !important;
      height: 350px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
  }
  @media (min-width: 768px) {
      .swiper-slide {
          height: 550px !important;
      }
  }
  .swiper-slide img {
      width: 100% !important;
      height: 100% !important;
      object-fit: cover !important;
  }
</style>

<section class="relative h-[65vh] md:h-[60vh] flex items-end pb-12 bg-slate-900">
    <div class="absolute inset-0 opacity-60">
        <picture>
            <?php if (!empty($roteiro['imagem_hero_mobile'])): ?>
                <!-- Imagem exibida apenas em telas de até 767px (Celulares) -->
                <source media="(max-width: 767px)" srcset="assets/img/<?= $roteiro['imagem_hero_mobile'] ?>">
            <?php endif; ?>
            <!-- Imagem padrão para Desktop e fallback -->
            <img src="assets/img/<?= isset($roteiro['imagem_hero']) ? $roteiro['imagem_hero'] : '' ?>" class="w-full h-full object-cover" alt="<?= isset($roteiro['titulo']) ? $roteiro['titulo'] : '' ?>">
        </picture>
    </div>
    <div class="max-w-7xl mx-auto px-6 w-full relative z-10 text-white">
        <span class="bg-emerald-600 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest mb-4 inline-block">
            <?= isset($roteiro['dificuldade']) ? $roteiro['dificuldade'] : '' ?>
        </span>
        <h1 class="text-4xl md:text-6xl font-bold mb-2 uppercase"><?= isset($roteiro['titulo']) ? $roteiro['titulo'] : '' ?></h1>
        <p class="text-xl text-emerald-100 italic"><?= isset($roteiro['subtitulo']) ? $roteiro['subtitulo'] : '' ?></p>
    </div>
</section>

<div class="bg-white border-b border-slate-100 py-6 shadow-sm sticky top-20 z-20">
    <div class="max-w-7xl mx-auto px-6 flex flex-wrap justify-between items-center gap-6">
        <div class="flex gap-8">
            <div class="text-center md:text-left">
                <p class="text-[10px] uppercase text-slate-400 font-bold tracking-widest">Distância</p>
                <p class="font-bold text-slate-800"><?= isset($roteiro['distancia']) ? $roteiro['distancia'] : '' ?></p>
            </div>
            <div class="text-center md:text-left">
                <p class="text-[10px] uppercase text-slate-400 font-bold tracking-widest">Duração</p>
                <p class="font-bold text-slate-800"><?= isset($roteiro['duracao']) ? $roteiro['duracao'] : '' ?></p>
            </div>
            <div class="text-center md:text-left">
                <p class="text-[10px] uppercase text-slate-400 font-bold tracking-widest">Investimento</p>
                <p class="font-bold text-nature text-lg"><?= isset($roteiro['preco']) ? $roteiro['preco'] : '' ?></p>
            </div>
        </div>
        <a href="<?= $link_reserva_whatsapp ?>" 
   target="_blank" 
   rel="noopener noreferrer"
   class="bg-nature text-white px-10 py-4 rounded-2xl font-bold hover:bg-emerald-800 transition shadow-lg w-full md:w-auto text-center inline-block">
    Reservar Vaga
</a>
    </div>
</div>

<section class="py-20 bg-white px-6">
    <div class="max-w-7xl mx-auto grid lg:grid-cols-3 gap-16">
        
        <div class="lg:col-span-2 space-y-12">
            
            <div>
                <h2 class="text-2xl font-bold text-slate-800 mb-6 flex items-center gap-3 uppercase tracking-wider">
                    <span class="w-8 h-1 bg-emerald-600 rounded-full"></span>
                    Sobre a Experiência
                </h2>
                <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed text-lg mb-10">
                    <?= isset($roteiro['descricao_longa']) ? $roteiro['descricao_longa'] : '' ?>
                </div>

                <?php if (isset($roteiro['galeria']) && is_array($roteiro['galeria']) && !empty($roteiro['galeria'])): ?>
                <div class="relative w-full overflow-hidden rounded-[2.5rem] shadow-2xl bg-slate-100 group">
                    <div id="detail-slider-container" class="swiper w-full">
                        <div class="swiper-wrapper">
                            <?php foreach($roteiro['galeria'] as $index => $foto): ?>
                                <?php if (!empty($foto) && is_string($foto)): ?>
                                    <?php 
                                        // Verifica se existe foto mobile correspondente
                                        $foto_mobile = (isset($roteiro['galeria_mobile'][$index]) && !empty($roteiro['galeria_mobile'][$index])) 
                                            ? trim($roteiro['galeria_mobile'][$index]) 
                                            : null;
                                        
                                        $foto_desktop = trim($foto);
                                        $src_default = "assets/img/" . $foto_desktop;
                                        $src_mobile = $foto_mobile ? "assets/img/" . $foto_mobile : $src_default;
                                    ?>
                                    <div class="swiper-slide">
                                        <a href="<?= $src_default ?>" 
                                           data-src-mobile="<?= $src_mobile ?>"
                                           data-src-desktop="<?= $src_default ?>"
                                           data-fancybox="galeria-roteiro" 
                                           class="block w-full h-full cursor-zoom-in">
                                            <picture class="w-full h-full block">
                                                <?php if ($foto_mobile): ?>
                                                    <!-- Foto vertical para Celular -->
                                                    <source media="(max-width: 767px)" srcset="<?= $src_mobile ?>">
                                                <?php endif; ?>
                                                <!-- Foto padrão para Desktop -->
                                                <img src="<?= $src_default ?>" class="w-full h-full object-cover block" alt="Galeria do roteiro" loading="eager">
                                            </picture>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <button class="swiper-button-prev-custom absolute left-4 top-1/2 -translate-y-1/2 bg-white/90 p-3 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity z-10 focus:outline-none">
                        <svg class="w-6 h-6 text-emerald-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button class="swiper-button-next-custom absolute right-4 top-1/2 -translate-y-1/2 bg-white/90 p-3 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity z-10 focus:outline-none">
                        <svg class="w-6 h-6 text-emerald-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    
                    <div class="absolute bottom-6 right-8 bg-black/50 text-white px-4 py-1 rounded-full text-xs font-bold backdrop-blur-sm z-10">
                        <span id="current-photo">1</span> / <?= count(array_filter($roteiro['galeria'])) ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <div class="bg-slate-50 p-8 rounded-[2rem] border border-slate-100">
                <h2 class="text-2xl font-bold text-slate-800 mb-8 uppercase tracking-widest text-sm text-center">Roteiro Sugerido</h2>
                <div class="space-y-8">
                    <?php if(!empty($roteiro['itinerario']) && is_array($roteiro['itinerario'])): ?>
                        <?php foreach($roteiro['itinerario'] as $dia => $info): ?>
                        <div class="flex flex-col md:flex-row gap-4 md:gap-6 border-b border-slate-200 pb-6 last:border-0 last:pb-0">
                            <div class="font-bold text-emerald-600 uppercase text-xs shrink-0 pt-1 md:w-24 md:text-right italic">
                                <?= $dia ?>
                            </div>
                            
                            <div class="text-slate-600 leading-relaxed space-y-2 flex-1 timeline-content">
                                <?php 
                                $linhas = preg_split('/<br\s*\/?>/i', $info);
                                foreach($linhas as $linha): 
                                    if(trim($linha) !== ''):
                                ?>
                                    <div class="flex items-start gap-2">
                                        <span class="inline-block w-2 h-2 rounded-full bg-emerald-500 mt-2 shrink-0"></span>
                                        <span><?= trim($linha) ?></span>
                                    </div>
                                <?php 
                                    endif;
                                endforeach; 
                                ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-slate-400 text-center italic text-sm">Informações de itinerário indisponíveis.</p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8 border-t border-slate-100 pt-12">
                <div>
                    <h4 class="font-bold text-slate-800 uppercase text-xs mb-4 tracking-widest">Política de Cancelamento</h4>
                    <div class="text-slate-500 leading-relaxed italic">
                        <?= isset($roteiro['politica_reembolso']) ? $roteiro['politica_reembolso'] : '' ?>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold text-slate-800 uppercase text-xs mb-4 tracking-widest text-red-600">Riscos e Perigos</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        <?= isset($roteiro['riscos_perigos']) ? $roteiro['riscos_perigos'] : '' ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="space-y-8">
            <div class="p-6 bg-slate-900 rounded-3xl text-white">
                <p class="text-[10px] uppercase text-emerald-400 font-bold mb-2 tracking-widest">Ponto de Encontro</p>
                <div class="flex items-center gap-3 font-bold text-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <?= isset($roteiro['ponto_encontro']) ? $roteiro['ponto_encontro'] : '' ?>
                </div>
            </div>

            <div class="p-8 border border-slate-100 rounded-[2rem] bg-white shadow-sm">
                <h3 class="font-bold text-slate-800 mb-6 uppercase text-xs tracking-widest border-b border-slate-50 pb-2">O que está incluso</h3>
                <ul class="space-y-3 mb-10">
                    <?php if(!empty($roteiro['o_que_inclui']) && is_array($roteiro['o_que_inclui'])): ?>
                        <?php foreach($roteiro['o_que_inclui'] as $item): ?>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <svg class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            <?= $item ?>
                        </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>

                <h3 class="font-bold text-slate-800 mb-4 uppercase text-xs tracking-widest border-b border-slate-50 pb-2">Não Incluso</h3>
                <ul class="space-y-3">
                    <?php if(!empty($roteiro['nao_inclui']) && is_array($roteiro['nao_inclui'])): ?>
                        <?php foreach($roteiro['nao_inclui'] as $item): ?>
                        <li class="flex items-start gap-3 text-sm text-slate-400">
                            <svg class="w-4 h-4 text-red-300 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            <?= $item ?>
                        </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
const currentIndicator = document.getElementById('current-photo');
const sliderEl = document.getElementById('detail-slider-container');

if (sliderEl) {
    const swiper = new Swiper('#detail-slider-container', {
        loop: true,
        grabCursor: true,
        navigation: {
            nextEl: '.swiper-button-next-custom',
            prevEl: '.swiper-button-prev-custom',
        },
        on: {
            slideChange: function () {
                if(currentIndicator) {
                    currentIndicator.innerText = this.realIndex + 1;
                }
            }
        }
    });
}

// Atualiza dinamicamente os links da galeria com base no tamanho da tela
function ajustarLinksGaleriaMobile() {
    const eMobile = window.innerWidth <= 767;
    const links = document.querySelectorAll("[data-fancybox='galeria-roteiro']");
    
    links.forEach(link => {
        const srcMobile = link.getAttribute('data-src-mobile');
        const srcDesktop = link.getAttribute('data-src-desktop');
        
        if (eMobile && srcMobile) {
            link.setAttribute('href', srcMobile);
        } else if (srcDesktop) {
            link.setAttribute('href', srcDesktop);
        }
    });
}

// Executa ao carregar a página e se a janela for redimensionada (F12)
ajustarLinksGaleriaMobile();
window.addEventListener('resize', ajustarLinksGaleriaMobile);

// Inicializa o Fancybox
Fancybox.bind("[data-fancybox='galeria-roteiro']", {
    Hash: false,
    Thumbs: false,
    Toolbar: {
        display: {
            left: [],
            middle: [],
            right: ["close"],
        },
    },
    Images: {
        protected: true,
        panmode: "zoom",
    }
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>