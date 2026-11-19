<?php
// Monta a URL canônica limpa (remove extensões .php e parâmetros de rastreamento)
$protocolo = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$script = $_SERVER['SCRIPT_NAME'];

// Transforma "/roteiros.php" em "/roteiros"
$caminho_limpo = str_replace('.php', '', $script);

// Caso seja a index, limpa para a raiz da pasta
if (basename($caminho_limpo) === 'index') {
    $caminho_limpo = dirname($caminho_limpo);
    if ($caminho_limpo === '\\' || $caminho_limpo === '/') {
        $caminho_limpo = '';
    }
}

// Se a página atual for de filtragem ou detalhe, preservamos apenas as variáveis oficiais (?v= ou ?local= ou ?tipo=)
$query_string = '';
if (!empty($_GET)) {
    $parametros_validos = [];
    foreach ($_GET as $chave => $valor) {
        // Ignora parâmetros de lixo/rastreamento (como fbclid, gclid, utm_source) e mantém só os do sistema
        if (in_array($chave, ['v', 'local', 'tipo'])) {
            $parametros_validos[$chave] = $valor;
        }
    }
    if (!empty($parametros_validos)) {
        $query_string = '?' . http_build_query($parametros_validos);
    }
}

$url_canonica_final = $protocolo . $host . $caminho_limpo . $query_string;
?>
<link rel="canonical" href="<?php echo $url_canonica_final; ?>"><?php
require_once 'data/content.php';

// Valores padrão caso a página não defina metas específicas
$title = isset($page_title) ? $page_title . " | " . $site_data['info']['name'] : $site_data['info']['name'] . " | " . $site_data['info']['tagline'];
$description = isset($page_description) ? $page_description : "Experiências exclusivas de trekking e educação ambiental. Fuja do turismo de massa e conecte-se com a natureza autêntica.";
$url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <link rel="canonical" href="<?php echo $url; ?>">

    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/img/og-image.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="<?php echo $title; ?>">
    <meta property="twitter:description" content="<?php echo $description; ?>">

    <link rel="icon" type="image/png" href="images/logo-capivara-rota-transp-2.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        nature: '#2D3A27',
                        emerald: {
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        }
                    }
                }
            }
        }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "TravelAgency",
      "name": "<?php echo $site_data['info']['name']; ?>",
      "description": "<?php echo $description; ?>",
      "url": "https://<?php echo $_SERVER['HTTP_HOST']; ?>",
      "telephone": "<?php echo $site_data['info']['whatsapp']; ?>",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Chapada dos Veadeiros",
        "addressRegion": "GO",
        "addressCountry": "BR"
      },
      "sameAs": [
        "https://instagram.com/<?php echo $site_data['info']['insta']; ?>"
      ]
    }
    </script>

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
    <!-- Google tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DM1HHY859B"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-DM1HHY859B');
    </script>
    <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '634220662995737');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=634220662995737&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>

<body class="bg-white text-slate-900">