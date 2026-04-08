<?php
/*
Template Name: Contact
*/
$GLOBALS['galison_body_bg_class'] = 'bg-slate-50';
get_header();
$theme_uri = get_template_directory_uri();

$hero_img = galison_global_field( 'contact_hero_image', $theme_uri . '/assets/vert.jfif' );
$intro    = galison_global_field(
	'contact_intro',
	'Please feel free to contact us for further information if you want to evaluate viable renewable energy opportunities in the Southeastern Europe.'
);
$photo    = galison_global_field( 'contact_photo', $theme_uri . '/assets/photo.jpg' );
$name     = galison_global_field( 'contact_name', 'Johan Elisson' );
$role     = galison_global_field( 'contact_role', 'Founder & General Manager' );
$company  = galison_global_field( 'contact_company_line', 'Galison Global Ltd.' );
$location = galison_global_field( 'contact_location_line', 'Varna, Bulgaria' );
$email    = galison_global_field( 'contact_email', 'johan.elisson@galison-global.com' );
?>

<div class="flex flex-col lg:flex-row flex-grow">
	<div class="lg:w-1/2 relative min-h-[40vh] lg:min-h-full">
		<img
			src="<?php echo esc_url( $hero_img ); ?>"
			class="absolute inset-0 w-full h-full object-cover"
			alt=""
		/>
		<div class="absolute inset-0 bg-gradient-to-b from-slate-900/40 via-slate-900/20 to-transparent"></div>
	</div>

	<div class="lg:w-1/2 bg-slate-50 flex items-center justify-center p-8 md:p-16 lg:px-24 flex-col">
		<div class="max-w-2xl w-full flex flex-col lg:items-center">
			<h1 class="font-display text-2xl md:text-3xl font-semibold mb-10 leading-relaxed text-slate-800 lg:text-center">
				<?php echo esc_html( $intro ); ?>
			</h1>

			<div class="bg-white p-8 md:p-10 rounded-[2.5rem] shadow-xl shadow-slate-200/50 flex flex-col sm:flex-row items-center sm:items-start gap-8 border border-slate-100 transition-transform hover:-translate-y-1 duration-500 w-full">
				<div class="w-28 h-28 md:w-32 md:h-32 shrink-0 rounded-full overflow-hidden shadow-md border-4 border-white">
					<img
						src="<?php echo esc_url( $photo ); ?>"
						alt="<?php echo esc_attr( $name ); ?>"
						class="w-full h-full object-cover select-none pointer-events-none"
						draggable="false"
						oncontextmenu="return false;"
					/>
				</div>

				<div class="flex flex-col items-center sm:items-start text-center sm:text-left mt-2">
					<h2 class="font-display text-lg font-semibold mb-1"><?php echo esc_html( $name ); ?></h2>
					<p class="text-[#10B981] font-bold uppercase tracking-widest text-xs mb-5">
						<?php echo esc_html( $role ); ?>
					</p>

					<p class="text-slate-600 font-light text-sm mb-6 leading-relaxed">
						<span class="font-medium text-slate-800"><?php echo esc_html( $company ); ?></span><br>
						<?php echo esc_html( $location ); ?>
					</p>

					<a href="mailto:<?php echo esc_attr( $email ); ?>" class="inline-flex items-center gap-3 text-slate-600 hover:text-[#10B981] transition-colors group">
						<div class="w-10 h-10 shrink-0 rounded-full bg-slate-50 flex items-center justify-center group-hover:bg-[#10B981]/10 transition-colors border border-slate-100">
							<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
							</svg>
						</div>
						<span class="font-medium text-sm md:text-base underline decoration-slate-200 underline-offset-8 group-hover:decoration-[#10B981]">
							<?php echo esc_html( $email ); ?>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
