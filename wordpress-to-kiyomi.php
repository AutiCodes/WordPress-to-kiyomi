<?php
/*
Plugin Name: WordPress naar Kiyomi
Plugin URI: https://github.com/AutiCodes/WordPress-to-Kiyomi
Description: Deze plugin stuurt nieuwe leden aanmeldingen naar kiyomi over een API
Version: 1.0
Author: Kelvin de Reus AKA AutiCodes
Author URI: https://auticodes.nl
*/

/**
 * Handles the form submitted
 * 
 * @author AutiCodes
 * 
 * @return void
 */
function handleNewMemberSubmit(): void
{
    if (isset($_POST['cf-submitted'])) {
        if (sanitize_text_field($_POST['anti_bot']) != 6) {
            echo 'Er ging iets mis! Bot vraag is verkeerd!';
            return;
        }

        $data = array(
            'name' => sanitize_text_field($_POST['firstname']) . ' ' . sanitize_text_field($_POST['lastname']),
            'first_name' => sanitize_text_field($_POST['firstname']),
            'address' => sanitize_text_field($_POST['address']),
            'city' => sanitize_text_field($_POST['city']),
            'postcode' => sanitize_text_field($_POST['postal_code']),
            'email' => sanitize_text_field($_POST['email']),
            'phone' => sanitize_text_field($_POST['phone']),
            'birthdate' => date('Y-m-d', strtotime(sanitize_text_field($_POST['birthdate']))),
            'nationality' => sanitize_text_field($_POST['nationality']),
            'has_glider_brevet' => sanitize_text_field($_POST['glider_brevet']) ?? 0,
            'has_plane_brevet' => sanitize_text_field($_POST['motor_brevet']) ?? 0,
            'has_helicopter_brevet' => sanitize_text_field($_POST['heli_brevet']) ?? 0,
            'has_drone_a1' => sanitize_text_field($_POST['drone_brevet_a1']) ?? 0,
            'has_drone_a2' => sanitize_text_field($_POST['drone_brevet_a2']) ?? 0,
            'has_drone_a3' => sanitize_text_field($_POST['drone_brevet_a3']) ?? 0,
            'rdw_number' => sanitize_text_field($_POST['rdw_number']) ?? 0,
            'is_member_of_other_club' => sanitize_text_field($_POST['other_club_text']) ?? 0,
            'KNVvl' => sanitize_text_field($_POST['knvvl_text']),
            'wanna_be_member_at' => date('Y-m-d', strtotime(sanitize_text_field($_POST['wanna_be_member_at']))),
            'api_key' => KIYOMI_API_KEY,
        );

        $curl = curl_init(KIYOMI_API_URL);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen(json_encode($data))
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        echo $response;

        // Show succes html text from external file
		include('html/succes_form_html.php');
    }
}

/**
 * Function to register the shortcode
 *
 * @author AutiCodes
 *
 * @return object ob_get_clean()
 */
function regShortcode()
{
	ob_start();
	handleNewMemberSubmit();
	include('html/form_html.php');

	return ob_get_clean();
}

// Registers the shortcode
add_shortcode('trmc_new_member_cf', 'regShortcode');