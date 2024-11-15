<?php
	echo '<form action="' . esc_url($_SERVER['REQUEST_URI']) . '" method="post">';

    echo '<h2>T.R.M.C. aanmeldingsformulier</h2>';

    // Firstname
	echo '<p>';
	echo '<strong>Voornaam</strong> (vereist) <br/>';
	echo '<input type="text" name="firstname" size="40" required style="color: black;"/>';
	echo '</p>';

    // Last name
	echo '<p>';
	echo '<strong>Achternaam</strong> (vereist) <br/>';
	echo '<input type="text" name="lastname" size="40" required style="color: black;"/>';
	echo '</p>';

    // Address
	echo '<p>';
	echo '<strong>Adres</strong> (vereist) <br/>';
	echo '<input type="text" name="address" size="40" required style="color: black;"/>';
	echo '</p>';

    // City
	echo '<p>';
	echo '<strong>Woonplaats</strong> (vereist) <br/>';
	echo '<input type="text" name="city" size="40" required style="color: black;"/>';
	echo '</p>';

    // Postcode
	echo '<p>';
	echo '<strong>Postcode</strong> (vereist) <br/>';
	echo '<input type="text" name="postal_code" size="40" required style="color: black;"/>';
	echo '</p>';

    // Email
	echo '<p>';
	echo '<strong>Email</strong> (vereist) <br/>';
	echo '<input type="text" name="email" size="40" required style="color: black;"/>';
	echo '</p>';

    // Phonenumber
	echo '<p>';
	echo '<strong>Telefoonnummer</strong> (vereist) <br/>';
	echo '<input type="text" name="phone" size="40" required style="color: black;"/>';
	echo '</p>';

    // Birthdate
	echo '<p>';
	echo '<strong>Geboortedatum</strong> (DD-MM-YYYY) (vereist) <br/>';
	echo '<input type="text" name="birthdate" size="40" required style="color: black;"/>';
	echo '</p>';

    // Nationality
	echo '<p>';
	echo '<strong>Nationaliteit</strong> (vereist) <br/>';
	echo '<input type="text" name="nationality" size="40" required style="color: black;"/>';
	echo '</p>';

    // Certificates
    echo '<p><strong>';
    echo 'Welke brevetten gehaald';
    echo '</strong></p>';

	echo '<input type="hidden" value=0 name="glider_brevet">';
    echo '<input type="checkbox" id="glider_brevet" name="glider_brevet" value=1/>';
    echo '<label for="glider_brevet" style="padding-left: 5px; color: black;"> Zweef brevet A</label><br>';

	echo '<input type="hidden" value=0 name="motor_brevet">';
    echo '<input type="checkbox" id="motor_brevet" name="motor_brevet" value=1/>';
    echo '<label for="glider_brevet" style="padding-left: 5px; color: black;"> Motor brevet A</label><br>';

	echo '<input type="hidden" value=0 name="heli_brevet">';
    echo '<input type="checkbox" id="heli_brevet" name="heli_brevet" value=1/>';
    echo '<label for="heli_brevet" style="padding-left: 5px; color: black;"> Heli brevet A</label><br>';

	echo '<input type="hidden" value=0 name="drone_brevet_a1">';
    echo '<input type="checkbox" id="drone_brevet_a1" name="drone_brevet_a1" value=1/>';
    echo '<label for="drone_brevet_a1" style="padding-left: 5px;"> Drone EU A1</label><br>';

	echo '<input type="hidden" value=0 name="drone_brevet_a3">';
    echo '<input type="checkbox" id="drone_brevet_a3" name="drone_brevet_a3" value=1/>';
    echo '<label for="drone_brevet_a3" style="padding-left: 5px; color: black;"> Drone EU A3</label><br>';

	echo '<input type="hidden" value=0 name="drone_brevet_a2">';
    echo '<input type="checkbox" id="drone_brevet_a2" name="drone_brevet_a2" value=1/>';
    echo '<label for="drone_brevet_a2" style="padding-left: 5px; color: black;"> Drone EU A2</label><br>';

    // RDW number
	echo '<p>';
	echo '<strong>RDW registratienummer</strong> <br/>';
	echo '<input type="text" name="rdw_number" size="40" style="color: black;"/>';
	echo '</p>';

    // Other club select
    echo '<label for="other_club"><strong>Lid van een andere modelvliegclub?</strong> (vereist)</label>';
    echo '<select name="other_club" id="other_club">';
    echo '<option selected>Selecteer een optie</option>';
    echo '<option value=0>Nee</option>';
    echo '<option value=1>Ja</option>';
    echo '</select>';

    // Cringe spacing
    echo '<br>';

    // Other club if yes select
	echo '<p>';
	echo '<strong>Bij ja, welke modelvliegclub?</strong> <br/>';
	echo '<input type="text" name="other_club_text" size="40" style="color: black;/>';
	echo '</p>';

    // KNVvl select
    echo '<label for="knvvl_select"><strong>K.N.V.v.l.</strong> (vereist)</label>';
    echo '<select name="knvvl_select" id="knvvl_select">';
    echo '<option selected>Selecteer een optie</option>';
    echo '<option value=0>Nee</option>';
    echo '<option value=1>Ja</option>';
    echo '</select>';

    // Cringe spacing
    echo '<br>';

    // If KNVvl is member, number
	echo '<p>';
	echo '<strong>Bij ja, K.N.V.v.l. registratienummer</strong> <br/>';
	echo '<input type="text" name="knvvl_text" size="40" style="color: black;"/>';
	echo '</p>';

    // Wanne be member of TRMC at:
	echo '<p>';
	echo '<strong>Ik wil lid worden van de T.R.M.C. per</strong> (DD-MM-YYYY) (vereist) <br/>';
	echo '<input type="text" name="wanna_be_member_at" size="40" required style="color: black;"/>';
	echo '</p>';

	// Anti bot
	echo '<p>';
	echo '<strong>Anti bot vraag</strong> <br/>';
	echo '<input type="text" name="anti_bot" size="40" required" style="color: black;" placeholder="Wat is 3 + 3?"/>';

	// Cringe spacing
	echo '<br>';

	echo '<p><input type="submit" name="cf-submitted" value="Verstuur"></p>';

	echo '</form>';

