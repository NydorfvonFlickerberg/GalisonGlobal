<?php
/*
Template Name: Projects
*/
$GLOBALS['galison_body_bg_class'] = 'bg-white';
get_header();
$theme_uri = get_template_directory_uri();

$hero_img   = galison_global_field( 'projects_hero_image', $theme_uri . '/assets/vert.jfif' );
$hero_title = galison_global_field( 'projects_hero_title', 'Our Projects' );

$sec1_img   = galison_global_field( 'projects_1_image', $theme_uri . '/assets/field.jpg' );
$sec1_title = galison_global_field( 'projects_1_title', 'Energy Storage Sales Management' );
$sec1_text  = galison_global_field(
	'projects_1_text',
	"In close collaboration with one of the world's leading energy storage manufacturers, we have being actively involved in the sales cycle, from prospecting and lead qualification to proposal preparation."
);

$badge      = galison_global_field( 'projects_2_badge', 'In progress' );
$sec2_title = galison_global_field( 'projects_2_title', 'Utility-Scale PV and BESS Development' );
$sec2_text  = galison_global_field(
	'projects_2_text',
	'In collaboration with international investor companies several large-scale PV and battery energy storage system (BESS) projects, in the hundreds of MW range, have been identified and secured and are currently in late-stage development.'
);

$stat1_val = galison_global_field( 'projects_stat_1_value', '400+ MW' );
$stat1_txt = galison_global_field(
	'projects_stat_1_text',
	'(megawatt) range - Large-scale PV and BESS projects are identified and secured for international investors.'
);

$stat2_val = galison_global_field( 'projects_stat_2_value', '2026–2028' );
$stat2_txt = galison_global_field( 'projects_stat_2_text', 'Expected to be fully operational.' );

$footer_note = galison_global_field(
	'projects_2_footer_note',
	'The projects are on track for full RTB (ready-to-build) stage, with a clear pathway toward commissioning.'
);

$sec2_img = galison_global_field( 'projects_2_image', $theme_uri . '/assets/panels.jpg' );
?>

<section class="relative h-[40vh] min-h-[400px] flex items-center px-6 md:px-24 bg-slate-900 overflow-hidden">
	<img
		src="<?php echo esc_url( $hero_img ); ?>"
		class="absolute inset-0 w-full h-full object-cover opacity-30 grayscale"
		alt="<?php echo esc_attr( $hero_title ); ?>"
	/>
	<div class="relative z-10 max-w-4xl pt-16">
		<h1 class="font-display text-5xl md:text-6xl font-semibold text-white mb-4 tracking-tight">
			<?php echo esc_html( $hero_title ); ?>
		</h1>
	</div>
</section>

<section class="py-24 px-6 md:px-24 flex-grow">
	<div class="max-w-7xl mx-auto space-y-24">
		<div class="grid lg:grid-cols-2 gap-16 items-center">
			<div class="rounded-3xl overflow-hidden shadow-2xl">
				<img
					src="<?php echo esc_url( $sec1_img ); ?>"
					class="w-full h-auto object-cover hover:scale-105 transition-transform duration-700"
					alt="<?php echo esc_attr( $sec1_title ); ?>"
				/>
			</div>
			<div>
				<h2 class="font-display text-3xl md:text-4xl font-semibold mb-6"><?php echo esc_html( $sec1_title ); ?></h2>
				<p class="text-slate-600 text-lg font-light leading-relaxed"><?php echo esc_html( $sec1_text ); ?></p>
			</div>
		</div>

		<div class="grid lg:grid-cols-2 gap-16 items-center">
			<div class="order-2 lg:order-1 space-y-6">
				<?php if ( '' !== trim( (string) $badge ) ) : ?>
					<div class="inline-flex items-center gap-2 rounded-full bg-amber-100 text-amber-800 px-4 py-1 text-xs font-semibold uppercase tracking-[0.2em]">
						<span class="w-2 h-2 rounded-full bg-amber-500"></span>
						<?php echo esc_html( $badge ); ?>
					</div>
				<?php endif; ?>

				<h2 class="font-display text-3xl md:text-4xl font-semibold">
					<?php echo esc_html( $sec2_title ); ?>
				</h2>

				<p class="text-slate-600 text-lg font-light leading-relaxed">
					<?php echo esc_html( $sec2_text ); ?>
				</p>

				<div class="grid sm:grid-cols-2 gap-8 pt-4">
					<div>
						<div class="text-4xl md:text-5xl font-display font-semibold mb-2"><?php echo esc_html( $stat1_val ); ?></div>
						<p class="text-slate-500 font-light leading-relaxed text-sm md:text-base">
							<?php echo esc_html( $stat1_txt ); ?>
						</p>
					</div>
					<div>
						<div class="text-4xl md:text-5xl font-display font-semibold text-[#10B981] mb-2"><?php echo esc_html( $stat2_val ); ?></div>
						<p class="text-slate-500 font-light leading-relaxed text-sm md:text-base">
							<?php echo esc_html( $stat2_txt ); ?>
						</p>
					</div>
				</div>

				<?php if ( '' !== trim( (string) $footer_note ) ) : ?>
					<p class="mt-4 text-slate-500 italic font-light">
						<?php echo esc_html( $footer_note ); ?>
					</p>
				<?php endif; ?>
			</div>

			<div class="order-1 lg:order-2">
				<div class="rounded-3xl overflow-hidden shadow-2xl">
					<img
						src="<?php echo esc_url( $sec2_img ); ?>"
						class="w-full h-auto object-cover hover:scale-105 transition-transform duration-700"
						alt="<?php echo esc_attr( $sec2_title ); ?>"
					/>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
