
<?php
// Custom function to handle duplicate email users
function custom_sb_add_user($settings = [], $settings_extra = [], $hash_password = true, $skip_otp = true) {
    $email = isset($settings['email']) ? sb_db_escape($settings['email']) : '';
    
    if (!empty($email)) {
        $existing_user = sb_db_get('SELECT id FROM sb_users WHERE email = "' . $email . '" LIMIT 1');
        if ($existing_user) {
            return sb_get_user($existing_user['id'], true);
        }
    }
    
    return sb_add_user($settings, $settings_extra, $hash_password, $skip_otp);
}
?>
