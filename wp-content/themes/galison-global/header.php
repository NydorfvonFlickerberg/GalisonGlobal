<?php
$body_bg_class = $GLOBALS['galison_body_bg_class'] ?? 'bg-white';

$current_nav = 'home';
if (function_exists('is_page') && is_page('services')) {
    $current_nav = 'services';
} elseif (function_exists('is_page') && is_page('projects')) {
    $current_nav = 'projects';
} elseif (function_exists('is_page') && is_page('contact')) {
    $current_nav = 'contact';
} elseif (function_exists('is_front_page') && is_front_page()) {
    $current_nav = 'home';
} elseif (function_exists('is_home') && is_home()) {
    $current_nav = 'home';
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=IBM+Plex+Sans:wght@400;500;700;800&family=Syne:wght@500;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['IBM Plex Sans', 'sans-serif'],
                        brand: ['Syne', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <?php wp_head(); ?>
</head>
<body class="<?php echo esc_attr($body_bg_class); ?> text-[#0F172A] font-sans antialiased flex flex-col min-h-screen" data-current-nav="<?php echo esc_attr($current_nav); ?>">

    <header class="w-full z-50 px-6 py-6 md:px-24 flex flex-col md:flex-row justify-between items-center bg-white border-b border-slate-200 text-slate-900 shadow-sm">
        <div class="mb-6 md:mb-0 text-center md:text-left">
            <div class="font-brand font-bold text-[26px] tracking-tight text-slate-900">Galison Global Ltd.</div>
            <div class="text-[10px] md:text-xs text-slate-500 font-light mt-1 tracking-wider uppercase max-w-xs md:max-w-none">
                a Bulgarian private company with Swedish management, since 2013.
            </div>
        </div>

        <nav class="flex flex-wrap justify-center gap-6 md:gap-10 text-sm font-medium uppercase tracking-widest text-slate-600">
            <a href="<?php echo esc_url(home_url('/')); ?>" data-nav="home" class="hover:text-[#10B981] transition-colors">Home</a>
            <a href="<?php echo esc_url(galison_global_page_url('services')); ?>" data-nav="services" class="hover:text-[#10B981] transition-colors">Services</a>
            <a href="<?php echo esc_url(galison_global_page_url('projects')); ?>" data-nav="projects" class="hover:text-[#10B981] transition-colors">Projects</a>
            <a href="<?php echo esc_url(galison_global_page_url('contact')); ?>" data-nav="contact" class="hover:text-[#10B981] transition-colors">Contact</a>
        </nav>
    </header>

