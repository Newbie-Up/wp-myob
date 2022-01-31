<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       null
 * @since      1.0.0
 *
 * @package    Update_inventory
 * @subpackage Update_inventory/admin/partials
 */

echo '<button id="update"><a href="https://secure.myob.com/oauth2/account/authorize?client_id=d907c2fd-aae8-4ecb-bf59-d54eeace9012&redirect_uri=https://www.dexdevelopment.com.au&response_type=code&scope=CompanyFile">Update Inventory - Local</a></button>';
//invoke hooks to retrieve the code in url
do_action('get_access_code')


?>

<!-- <button id="test"><a href="https://secure.myob.com/oauth2/account/authorize?client_id=d907c2fd-aae8-4ecb-bf59-d54eeace9012&redirect_uri=https://www.dexdevelopment.com.au&response_type=code&scope=CompanyFile">Update Inventory - Stage</a></button> -->


<!-- This file should primarily consist of HTML with a little bit of PHP. -->
