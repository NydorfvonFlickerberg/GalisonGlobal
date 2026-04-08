<?php
/*
Template Name: Home
*/
$GLOBALS['galison_body_bg_class'] = 'bg-white';
get_header();
$theme_uri = get_template_directory_uri();

$hero_img     = galison_global_field( 'home_hero_image', $theme_uri . '/assets/field.jpg' );
$hero_headline = galison_global_field( 'home_hero_headline', "Power Up\nwith Renewables" );
$about_title  = galison_global_field( 'home_about_title', 'About us' );
$about_p1     = galison_global_field(
	'home_about_paragraph_1',
	'On behalf of our international clients, we are identifying and securing viable utility-scale renewable energy project opportunities in Southeastern Europe across a range of asset classes (ground-mounted solar PV, wind, battery energy storage systems, and hydrogen).'
);
$about_p2     = galison_global_field(
	'home_about_paragraph_2',
	'In collaboration with local partners, we can also support international investors in developing renewable energy projects, from site identification to fully operational status.'
);
$cards        = array(
	galison_global_field( 'home_card_1', 'Solar PV' ),
	galison_global_field( 'home_card_2', 'Onshore Wind' ),
	galison_global_field( 'home_card_3', 'BESS' ),
	galison_global_field( 'home_card_4', 'Green Hydrogen' ),
);
?>

<section class="relative h-[70vh] min-h-[450px] flex items-center px-6 md:px-24 bg-slate-900">
	<img
		src="<?php echo esc_url( $hero_img ); ?>"
		class="absolute inset-0 w-full h-full object-cover opacity-50"
		alt="<?php echo esc_attr( $about_title ); ?>"
	/>

	<div class="relative z-10 max-w-4xl">
		<h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-semibold text-white mb-6 leading-tight">
			<?php echo galison_global_headline_html( (string) $hero_headline ); ?>
		</h1>
	</div>
</section>

<section class="pt-16 pb-24 px-6 md:px-24 bg-white flex-grow">
	<div class="max-w-7xl mx-auto">
		<h2 class="font-display text-4xl font-semibold mb-8 text-slate-900"><?php echo esc_html( $about_title ); ?></h2>

		<div class="grid lg:grid-cols-2 gap-16 items-start">
			<div class="space-y-6 text-slate-600 text-lg md:text-xl font-light leading-relaxed">
				<p><?php echo esc_html( $about_p1 ); ?></p>
				<p><?php echo esc_html( $about_p2 ); ?></p>
			</div>

			<div class="grid grid-cols-2 gap-4 md:gap-6">
				<?php foreach ( $cards as $label ) : ?>
					<?php if ( '' !== trim( (string) $label ) ) : ?>
						<div class="p-8 bg-slate-50 rounded-2xl border border-slate-200 font-display font-semibold text-lg flex items-center justify-center text-center text-slate-700 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-[#10B981]/15 hover:border-[#10B981] hover:text-[#10B981] cursor-pointer">
							<?php echo esc_html( $label ); ?>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
