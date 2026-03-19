<?php
/*
Template Name: Projects
*/
$GLOBALS['galison_body_bg_class'] = 'bg-white';
get_header();
$theme_uri = get_template_directory_uri();
?>

<section class="relative h-[40vh] min-h-[400px] flex items-center px-6 md:px-24 bg-slate-900 overflow-hidden">
    <img
        src="<?php echo esc_url($theme_uri . '/assets/vert.jfif'); ?>"
        class="absolute inset-0 w-full h-full object-cover opacity-30 grayscale"
        alt="Renewable Energy Background"
    />
    <div class="relative z-10 max-w-4xl pt-16">
        <h1 class="font-display text-5xl md:text-6xl font-semibold text-white mb-4 tracking-tight">
            Our Projects
        </h1>
    </div>
</section>

<section class="py-24 px-6 md:px-24 flex-grow">
    <div class="max-w-7xl mx-auto space-y-24">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="rounded-3xl overflow-hidden shadow-2xl">
                <img
                    src="<?php echo esc_url($theme_uri . '/assets/field.jpg'); ?>"
                    class="w-full h-auto object-cover hover:scale-105 transition-transform duration-700"
                    alt="BESS Project Infrastructure"
                />
            </div>
            <div>
                <h2 class="font-display text-3xl md:text-4xl font-semibold mb-6">Energy Storage Sales Management</h2>
                <p class="text-slate-600 text-lg font-light leading-relaxed">
                    In close collaboration with one of the world's leading energy storage manufacturers, we have being actively involved in the sales cycle, from prospecting and lead qualification to proposal preparation.
                </p>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1 space-y-6">
                <div class="inline-flex items-center gap-2 rounded-full bg-amber-100 text-amber-800 px-4 py-1 text-xs font-semibold uppercase tracking-[0.2em]">
                    <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                    In progress
                </div>

                <h2 class="font-display text-3xl md:text-4xl font-semibold">
                    Utility-Scale PV and BESS Development
                </h2>

                <p class="text-slate-600 text-lg font-light leading-relaxed">
                    In collaboration with international investor companies several large-scale PV and battery energy storage system (BESS) projects, in the hundreds of MW range, have been identified and secured and are currently in late-stage development.
                </p>

                <div class="grid sm:grid-cols-2 gap-8 pt-4">
                    <div>
                        <div class="text-4xl md:text-5xl font-display font-semibold mb-2">400+ MW</div>
                        <p class="text-slate-500 font-light leading-relaxed text-sm md:text-base">
                            (megawatt) range - Large-scale PV and BESS projects are identified and secured for international investors.
                        </p>
                    </div>
                    <div>
                        <div class="text-4xl md:text-5xl font-display font-semibold text-[#10B981] mb-2">2026–2028</div>
                        <p class="text-slate-500 font-light leading-relaxed text-sm md:text-base">
                            Expected to be fully operational.
                        </p>
                    </div>
                </div>

                <p class="mt-4 text-slate-500 italic font-light">
                    The projects are on track for full RTB (ready-to-build) stage, with a clear pathway toward commissioning.
                </p>
            </div>

            <div class="order-1 lg:order-2">
                <div class="rounded-3xl overflow-hidden shadow-2xl">
                    <img
                        src="<?php echo esc_url($theme_uri . '/assets/panels.jpg'); ?>"
                        class="w-full h-auto object-cover hover:scale-105 transition-transform duration-700"
                        alt="Utility-Scale PV and BESS Development"
                    />
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

