<?php
if (isset($_POST['submit_btn'])) {
    $first_name = $_POST['fst_name'];
    $last_name =  $_POST['lst_name'];
    $mobileNumber =  $_POST['mobile_number'];
    $user_email =  $_POST['email'];
    $user_pass =  $_POST['password'];
    if (empty($first_name)) {
        $_POST['userNameError'] = "<strong>* Error</strong> User Name can not empty";
    } else if (empty($user_email)) {
        $_POST['userEmailError'] = "<strong>* Error</strong> User email can not empty";
    } else if (empty($user_pass)) {
        $_POST['userPasswordError'] = "<strong>* Error</strong> User Password can not empty";
    } else {
        $user = wp_create_user($first_name, $user_email, $user_pass);
        if (is_wp_error($user)) {
            $error = $user->get_error_message();
            $_POST['error1'] = $error;
        } else {
            wp_redirect('home');
        }
    }
}
