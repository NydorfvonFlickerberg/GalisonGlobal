<?php
/**
 * ACF local field groups (Advanced Custom Fields plugin required).
 *
 * @package Galison_Global
 */

defined('ABSPATH') || exit;

/**
 * Register field groups when ACF is available.
 */
function galison_global_register_acf_field_groups(): void {
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'                   => 'group_galison_home',
			'title'                 => 'Home',
			'fields'                => array(
				array(
					'key'           => 'field_galison_home_hero_image',
					'label'         => 'Hero image',
					'name'          => 'home_hero_image',
					'type'          => 'image',
					'return_format' => 'url',
					'preview_size'  => 'medium',
				),
				array(
					'key'   => 'field_galison_home_hero_headline',
					'label' => 'Hero headline',
					'name'  => 'home_hero_headline',
					'type'  => 'textarea',
					'rows'  => 3,
					'instructions' => 'Use a line break for two lines (e.g. “Power Up” then “with Renewables”).',
				),
				array(
					'key'   => 'field_galison_home_about_title',
					'label' => 'About section title',
					'name'  => 'home_about_title',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_home_about_p1',
					'label' => 'About paragraph 1',
					'name'  => 'home_about_paragraph_1',
					'type'  => 'textarea',
					'rows'  => 5,
				),
				array(
					'key'   => 'field_galison_home_about_p2',
					'label' => 'About paragraph 2',
					'name'  => 'home_about_paragraph_2',
					'type'  => 'textarea',
					'rows'  => 5,
				),
				array(
					'key'   => 'field_galison_home_card_1',
					'label' => 'Asset card 1',
					'name'  => 'home_card_1',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_home_card_2',
					'label' => 'Asset card 2',
					'name'  => 'home_card_2',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_home_card_3',
					'label' => 'Asset card 3',
					'name'  => 'home_card_3',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_home_card_4',
					'label' => 'Asset card 4',
					'name'  => 'home_card_4',
					'type'  => 'text',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-home.php',
					),
				),
			),
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
		)
	);

	acf_add_local_field_group(
		array(
			'key'                   => 'group_galison_services',
			'title'                 => 'Services',
			'fields'                => array(
				array(
					'key'           => 'field_galison_services_hero_image',
					'label'         => 'Hero background image',
					'name'          => 'services_hero_image',
					'type'          => 'image',
					'return_format' => 'url',
				),
				array(
					'key'   => 'field_galison_services_hero_title',
					'label' => 'Hero title',
					'name'  => 'services_hero_title',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_services_1_title',
					'label' => 'Service 1 title',
					'name'  => 'services_1_title',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_services_1_text',
					'label' => 'Service 1 text',
					'name'  => 'services_1_text',
					'type'  => 'textarea',
					'rows'  => 6,
				),
				array(
					'key'   => 'field_galison_services_2_title',
					'label' => 'Service 2 title',
					'name'  => 'services_2_title',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_services_2_text',
					'label' => 'Service 2 text',
					'name'  => 'services_2_text',
					'type'  => 'textarea',
					'rows'  => 6,
				),
				array(
					'key'   => 'field_galison_services_3_title',
					'label' => 'Service 3 title',
					'name'  => 'services_3_title',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_services_3_text',
					'label' => 'Service 3 text',
					'name'  => 'services_3_text',
					'type'  => 'textarea',
					'rows'  => 6,
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-services.php',
					),
				),
			),
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
		)
	);

	acf_add_local_field_group(
		array(
			'key'                   => 'group_galison_projects',
			'title'                 => 'Projects',
			'fields'                => array(
				array(
					'key'           => 'field_galison_projects_hero_image',
					'label'         => 'Hero background image',
					'name'          => 'projects_hero_image',
					'type'          => 'image',
					'return_format' => 'url',
				),
				array(
					'key'   => 'field_galison_projects_hero_title',
					'label' => 'Hero title',
					'name'  => 'projects_hero_title',
					'type'  => 'text',
				),
				array(
					'key'           => 'field_galison_projects_1_image',
					'label'         => 'Section 1 image',
					'name'          => 'projects_1_image',
					'type'          => 'image',
					'return_format' => 'url',
				),
				array(
					'key'   => 'field_galison_projects_1_title',
					'label' => 'Section 1 title',
					'name'  => 'projects_1_title',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_projects_1_text',
					'label' => 'Section 1 text',
					'name'  => 'projects_1_text',
					'type'  => 'textarea',
					'rows'  => 5,
				),
				array(
					'key'   => 'field_galison_projects_2_badge',
					'label' => 'Section 2 badge text',
					'name'  => 'projects_2_badge',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_projects_2_title',
					'label' => 'Section 2 title',
					'name'  => 'projects_2_title',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_projects_2_text',
					'label' => 'Section 2 intro text',
					'name'  => 'projects_2_text',
					'type'  => 'textarea',
					'rows'  => 5,
				),
				array(
					'key'   => 'field_galison_projects_stat_1_value',
					'label' => 'Stat 1 value (e.g. 400+ MW)',
					'name'  => 'projects_stat_1_value',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_projects_stat_1_text',
					'label' => 'Stat 1 description',
					'name'  => 'projects_stat_1_text',
					'type'  => 'textarea',
					'rows'  => 3,
				),
				array(
					'key'   => 'field_galison_projects_stat_2_value',
					'label' => 'Stat 2 value (e.g. 2026–2028)',
					'name'  => 'projects_stat_2_value',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_projects_stat_2_text',
					'label' => 'Stat 2 description',
					'name'  => 'projects_stat_2_text',
					'type'  => 'textarea',
					'rows'  => 3,
				),
				array(
					'key'   => 'field_galison_projects_2_footer',
					'label' => 'Section 2 footer note (italic)',
					'name'  => 'projects_2_footer_note',
					'type'  => 'textarea',
					'rows'  => 3,
				),
				array(
					'key'           => 'field_galison_projects_2_image',
					'label'         => 'Section 2 image',
					'name'          => 'projects_2_image',
					'type'          => 'image',
					'return_format' => 'url',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-projects.php',
					),
				),
			),
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
		)
	);

	acf_add_local_field_group(
		array(
			'key'                   => 'group_galison_contact',
			'title'                 => 'Contact',
			'fields'                => array(
				array(
					'key'           => 'field_galison_contact_hero_image',
					'label'         => 'Left column image',
					'name'          => 'contact_hero_image',
					'type'          => 'image',
					'return_format' => 'url',
				),
				array(
					'key'   => 'field_galison_contact_intro',
					'label' => 'Intro headline',
					'name'  => 'contact_intro',
					'type'  => 'textarea',
					'rows'  => 4,
				),
				array(
					'key'           => 'field_galison_contact_photo',
					'label'         => 'Contact card photo',
					'name'          => 'contact_photo',
					'type'          => 'image',
					'return_format' => 'url',
				),
				array(
					'key'   => 'field_galison_contact_name',
					'label' => 'Name',
					'name'  => 'contact_name',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_contact_role',
					'label' => 'Role',
					'name'  => 'contact_role',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_contact_company',
					'label' => 'Company line',
					'name'  => 'contact_company_line',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_contact_location',
					'label' => 'Location line',
					'name'  => 'contact_location_line',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_galison_contact_email',
					'label' => 'Email',
					'name'  => 'contact_email',
					'type'  => 'email',
				),
			),
			'location'              => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-contact.php',
					),
				),
			),
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
		)
	);
}

add_action('acf/init', 'galison_global_register_acf_field_groups');
