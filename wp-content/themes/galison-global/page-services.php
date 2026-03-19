<?php
/*
Template Name: Services
*/
$GLOBALS['galison_body_bg_class'] = 'bg-slate-50';
get_header();
?>

<section class="relative h-[40vh] min-h-[400px] flex items-center px-6 md:px-24 bg-slate-900 overflow-hidden">
    <img
        src="https://images.unsplash.com/photo-1497435334941-8c899ee9e8e9?q=80&w=1074&auto=format&fit=crop"
        class="absolute inset-0 w-full h-full object-cover opacity-40"
        alt="Offshore Wind Farm"
    />
    <div class="relative z-10 max-w-4xl pt-16">
        <h1 class="font-display text-5xl md:text-6xl font-semibold text-white mb-4 tracking-tight">
            Our Services
        </h1>
    </div>
</section>

<section class="py-24 px-6 md:px-24 flex-grow">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-3 gap-12">
            <div class="bg-white p-10 rounded-3xl border border-slate-100 shadow-sm hover:shadow-lg transition-all hover:border-[#10B981]/30">
                <h3 class="font-display text-2xl font-semibold mb-6">Project Origination</h3>
                <p class="text-slate-600 font-light leading-relaxed">
                    Identify solid and mature utility-scale solar, wind, hydrogen, and battery energy storage system (BESS) project opportunities, close to ready-to-build (RTB) stage, mainly in the Romania and Bulgaria region. Support in evaluating the financial attractiveness and the grid connection solution of each project, with the goal to ensure bankable and high-value projects.
                </p>
            </div>

            <div class="bg-white p-10 rounded-3xl border border-slate-100 shadow-sm hover:shadow-lg transition-all hover:border-[#10B981]/30">
                <h3 class="font-display text-2xl font-semibold mb-6">Greenfield Development</h3>
                <p class="text-slate-600 font-light leading-relaxed">
                    In collaboration with experienced local partners, we are in the position to develop utility-scale renewable energy projects from site identification to construction readiness. This would include securing land, managing the permitting process, addressing zoning and planning requirements, conducting environmental impact assessments, leading grid connection discussions with grid operators, and navigating final approval processes.
                </p>
            </div>

            <div class="bg-white p-10 rounded-3xl border border-slate-100 shadow-sm hover:shadow-lg transition-all hover:border-[#10B981]/30">
                <h3 class="font-display text-2xl font-semibold mb-6">Relationship Management</h3>
                <p class="text-slate-600 font-light leading-relaxed">
                    We have been developing relationships with local developers, EPC companies, technical consultants, financial institutions, legal firms, and leading equipment manufacturers. With our contact network and hands-on experience, we will help and support the investor, so the renewable energy projects can successfully reach fully operational status.
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

