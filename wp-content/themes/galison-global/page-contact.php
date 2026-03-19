<?php
/*
Template Name: Contact
*/
$GLOBALS['galison_body_bg_class'] = 'bg-slate-50';
get_header();
$theme_uri = get_template_directory_uri();
?>

<div class="flex flex-col lg:flex-row flex-grow">
    <div class="lg:w-1/2 relative min-h-[40vh] lg:min-h-full">
        <img
            src="<?php echo esc_url($theme_uri . '/assets/vert.jfif'); ?>"
            class="absolute inset-0 w-full h-full object-cover"
            alt="Solar infrastructure"
        />
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900/40 via-slate-900/20 to-transparent"></div>
    </div>

    <div class="lg:w-1/2 bg-slate-50 flex items-center justify-center p-8 md:p-16 lg:px-24 flex-col">
        <div class="max-w-2xl w-full flex flex-col lg:items-center">
            <h1 class="font-display text-2xl md:text-3xl font-semibold mb-10 leading-relaxed text-slate-800 lg:text-center">
                Please feel free to contact us for further information if you want to evaluate viable renewable energy opportunities in the Southeastern Europe.
            </h1>

            <div class="bg-white p-8 md:p-10 rounded-[2.5rem] shadow-xl shadow-slate-200/50 flex flex-col sm:flex-row items-center sm:items-start gap-8 border border-slate-100 transition-transform hover:-translate-y-1 duration-500 w-full">
                <div class="w-28 h-28 md:w-32 md:h-32 shrink-0 rounded-full overflow-hidden shadow-md border-4 border-white">
                    <img
                        src="<?php echo esc_url($theme_uri . '/assets/photo.jpg'); ?>"
                        alt="Johan Elisson"
                        class="w-full h-full object-cover select-none pointer-events-none"
                        draggable="false"
                        oncontextmenu="return false;"
                    />
                </div>

                <div class="flex flex-col items-center sm:items-start text-center sm:text-left mt-2">
                    <h2 class="font-display text-lg font-semibold mb-1">Johan Elisson</h2>
                    <p class="text-[#10B981] font-bold uppercase tracking-widest text-xs mb-5">
                        Founder & General Manager
                    </p>

                    <p class="text-slate-600 font-light text-sm mb-6 leading-relaxed">
                        <span class="font-medium text-slate-800">Galison Global Ltd.</span><br>
                        Varna, Bulgaria
                    </p>

                    <a href="mailto:johan.elisson@galison-global.com" class="inline-flex items-center gap-3 text-slate-600 hover:text-[#10B981] transition-colors group">
                        <div class="w-10 h-10 shrink-0 rounded-full bg-slate-50 flex items-center justify-center group-hover:bg-[#10B981]/10 transition-colors border border-slate-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span class="font-medium text-sm md:text-base underline decoration-slate-200 underline-offset-8 group-hover:decoration-[#10B981]">
                            johan.elisson@galison-global.com
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

