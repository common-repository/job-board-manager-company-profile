<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 


add_filter('job_bm_settings_tabs','job_bm_settings_tabs_companies');
function job_bm_settings_tabs_companies($job_bm_settings_tab){

    $job_bm_settings_tab[] = array(
        'id' => 'company',
        'title' => sprintf(__('%s Company','job-board-manager-company-profile'),'<i class="fas fa-calendar-alt"></i>'),
        'priority' => 10,
        'active' => false,
    );

    return $job_bm_settings_tab;

}




add_action('job_bm_settings_tabs_content_pages', 'job_bm_settings_tabs_content_pages_company', 20);

if(!function_exists('job_bm_settings_tabs_content_pages_company')) {
    function job_bm_settings_tabs_content_pages_company($tab){

        $settings_tabs_field = new settings_tabs_field();

        $job_bm_company_submit_page_id = get_option('job_bm_company_submit_page_id');

        $job_bm_company_edit_page_id = get_option('job_bm_company_edit_page_id');



        ?>
        <div class="section">
            <div class="section-title"><?php echo __('Company page settings', 'job-board-manager-company-profile'); ?></div>
            <p class="description section-description"><?php echo __('Choose option for company pages.', 'job-board-manager-company-profile'); ?></p>

            <?php


            $args = array(
                'id'		=> 'job_bm_company_submit_page_id',
                //'parent'		=> '',
                'title'		=> __('Company submit page','job-board-manager-company-profile'),
                'details'	=> __('Choose the page for company submit page, where the shortcode <code>[job_bm_company_submit_form]</code> used.','job-board-manager-company-profile'),
                'type'		=> 'select',
                //'multiple'		=> true,
                'value'		=> $job_bm_company_submit_page_id,
                'default'		=> '',
                'args'		=> job_bm_page_list_id(),
            );

            $settings_tabs_field->generate_field($args);




            $args = array(
                'id'		=> 'job_bm_company_edit_page_id',
                //'parent'		=> '',
                'title'		=> __('Company edit page','job-board-manager-company-profile'),
                'details'	=> __('Choose the page for company edit page, where the shortcode <code>[job_bm_company_edit_form]</code> used.','job-board-manager-company-profile'),
                'type'		=> 'select',
                //'multiple'		=> true,
                'value'		=> $job_bm_company_edit_page_id,
                'default'		=> '',
                'args'		=> job_bm_page_list_id(),
            );

            $settings_tabs_field->generate_field($args);





            ?>


        </div>
        <?php


    }
}



add_action('job_bm_settings_tabs_content_company', 'job_bm_settings_tabs_content_company');

if(!function_exists('job_bm_settings_tabs_content_company')) {
    function job_bm_settings_tabs_content_company($tab){

        $settings_tabs_field = new settings_tabs_field();

        $job_bm_company_submit_account_required = get_option('job_bm_company_submit_account_required');
        $job_bm_company_submit_recaptcha = get_option('job_bm_company_submit_recaptcha');
        $job_bm_company_submit_post_status = get_option('job_bm_company_submit_post_status');
        $job_bm_company_submit_redirect = get_option('job_bm_company_submit_redirect');

        $job_bm_company_edit_recaptcha = get_option('job_bm_company_edit_recaptcha');
        $job_bm_company_edit_post_status = get_option('job_bm_company_edit_post_status');
        $job_bm_company_edit_redirect = get_option('job_bm_company_edit_redirect');




        ?>
        <div class="section">
            <div class="section-title"><?php echo __('Company submission', 'job-board-manager-company-profile'); ?></div>
            <p class="description section-description"><?php echo __('Customize option for company submit.', 'job-board-manager-company-profile'); ?></p>

            <?php


            $args = array(
                'id'		=> 'job_bm_company_submit_account_required',
                //'parent'		=> '',
                'title'		=> __('Account required','job-board-manager-company-profile'),
                'details'	=> __('Account required to submit company.','job-board-manager-company-profile'),
                'type'		=> 'select',
                //'multiple'		=> true,
                'value'		=> $job_bm_company_submit_account_required,
                'default'		=> '',
                'args'		=> array( 'yes'=>__('Yes','job-board-manager-company-profile'), 'no'=>__('No','job-board-manager-company-profile'),),
            );

            $settings_tabs_field->generate_field($args);


            $args = array(
                'id'		=> 'job_bm_company_submit_recaptcha',
                //'parent'		=> '',
                'title'		=> __('reCAPTCHA enable','job-board-manager-company-profile'),
                'details'	=> __('Enable reCAPTCHA to protect spam on company submit form.','job-board-manager-company-profile'),
                'type'		=> 'select',
                //'multiple'		=> true,
                'value'		=> $job_bm_company_submit_recaptcha,
                'default'		=> '',
                'args'		=> array( 'yes'=>__('Yes','job-board-manager-company-profile'), 'no'=>__('No','job-board-manager-company-profile'),),
            );

            $settings_tabs_field->generate_field($args);




            $args = array(
                'id'		=> 'job_bm_company_submit_post_status',
                //'parent'		=> '',
                'title'		=> __('Submitted company status','job-board-manager-company-profile'),
                'details'	=> __('Choose company status for newly submitted companies.','job-board-manager-company-profile'),
                'type'		=> 'select',
                //'multiple'		=> true,
                'value'		=> $job_bm_company_submit_post_status,
                'default'		=> '',
                'args'		=> array( 'draft'=>__('Draft','job-board-manager-company-profile'), 'pending'=>__('Pending','job-board-manager-company-profile'), 'publish'=>__('Published','job-board-manager-company-profile'), 'private'=>__('Private','job-board-manager-company-profile'), 'trash'=>__('Trash','job-board-manager-company-profile')),
            );

            $settings_tabs_field->generate_field($args);





            $page_list = job_bm_page_list_id();
            //$page_list = array_merge($page_list, array('job_preview'=>'Job Preview'));

            $page_list['company_preview'] = __('-- Company Preview --', 'job-board-manager-company-profile');
            $page_list['company_link'] = __('-- Company Link --', 'job-board-manager-company-profile');

            $args = array(
                'id'		=> 'job_bm_company_submit_redirect',
                //'parent'		=> '',
                'title'		=> __('Redirect after company submit','job-board-manager-company-profile'),
                'details'	=> __('Redirect other link after company submitted','job-board-manager-company-profile'),
                'type'		=> 'select',
                //'multiple'		=> true,
                'value'		=> $job_bm_company_submit_redirect,
                'default'		=> '',
                'args'		=> $page_list,
            );

            $settings_tabs_field->generate_field($args);







            ?>


        </div>


        <div class="section">
            <div class="section-title"><?php echo __('Company Edit', 'job-board-manager-company-profile'); ?></div>
            <p class="description section-description"><?php echo __('Customize option for company edit.', 'job-board-manager-company-profile'); ?></p>

            <?php



            $args = array(
                'id'		=> 'job_bm_company_edit_recaptcha',
                //'parent'		=> '',
                'title'		=> __('reCAPTCHA enable','job-board-manager-company-profile'),
                'details'	=> __('Enable reCAPTCHA to protect spam on company edit form.','job-board-manager-company-profile'),
                'type'		=> 'select',
                //'multiple'		=> true,
                'value'		=> $job_bm_company_edit_recaptcha,
                'default'		=> '',
                'args'		=> array( 'yes'=>__('Yes','job-board-manager-company-profile'), 'no'=>__('No','job-board-manager-company-profile'),),
            );

            $settings_tabs_field->generate_field($args);




            $args = array(
                'id'		=> 'job_bm_company_edit_post_status',
                //'parent'		=> '',
                'title'		=> __('Edited company status','job-board-manager-company-profile'),
                'details'	=> __('Choose company status for newly edited companies.','job-board-manager-company-profile'),
                'type'		=> 'select',
                //'multiple'		=> true,
                'value'		=> $job_bm_company_edit_post_status,
                'default'		=> '',
                'args'		=> array( 'draft'=>__('Draft','job-board-manager-company-profile'), 'pending'=>__('Pending','job-board-manager-company-profile'), 'publish'=>__('Published','job-board-manager-company-profile'), 'private'=>__('Private','job-board-manager-company-profile'), 'trash'=>__('Trash','job-board-manager-company-profile')),
            );

            $settings_tabs_field->generate_field($args);





            $page_list = job_bm_page_list_id();
            //$page_list = array_merge($page_list, array('job_preview'=>'Job Preview'));

            $page_list['company_preview'] = __('-- Company Preview --', 'job-board-manager-company-profile');
            $page_list['company_link'] = __('-- Company Link --', 'job-board-manager-company-profile');

            $args = array(
                'id'		=> 'job_bm_company_edit_redirect',
                //'parent'		=> '',
                'title'		=> __('Redirect after company edit','job-board-manager-company-profile'),
                'details'	=> __('Redirect other link after company edited','job-board-manager-company-profile'),
                'type'		=> 'select',
                //'multiple'		=> true,
                'value'		=> $job_bm_company_edit_redirect,
                'default'		=> '',
                'args'		=> $page_list,
            );

            $settings_tabs_field->generate_field($args);







            ?>


        </div>

        <?php


    }
}








add_action('job_bm_settings_save', 'job_bm_settings_save_company', 20);

if(!function_exists('job_bm_settings_save_company')) {
    function job_bm_settings_save_company($tab){


        $job_bm_company_submit_page_id = isset($_POST['job_bm_company_submit_page_id']) ? sanitize_text_field($_POST['job_bm_company_submit_page_id']) : '';
        update_option('job_bm_company_submit_page_id', $job_bm_company_submit_page_id);

        $job_bm_company_edit_page_id = isset($_POST['job_bm_company_edit_page_id']) ? sanitize_text_field($_POST['job_bm_company_edit_page_id']) : '';
        update_option('job_bm_company_edit_page_id', $job_bm_company_edit_page_id);


        $job_bm_company_submit_account_required = isset($_POST['job_bm_company_submit_account_required']) ? sanitize_text_field($_POST['job_bm_company_submit_account_required']) : '';
        update_option('job_bm_company_submit_account_required', $job_bm_company_submit_account_required);

        $job_bm_company_submit_recaptcha = isset($_POST['job_bm_company_submit_recaptcha']) ? sanitize_text_field($_POST['job_bm_company_submit_recaptcha']) : '';
        update_option('job_bm_company_submit_recaptcha', $job_bm_company_submit_recaptcha);

        $job_bm_company_submit_post_status = isset($_POST['job_bm_company_submit_post_status']) ? sanitize_text_field($_POST['job_bm_company_submit_post_status']) : '';
        update_option('job_bm_company_submit_post_status', $job_bm_company_submit_post_status);

        $job_bm_company_submit_redirect = isset($_POST['job_bm_company_submit_redirect']) ? sanitize_text_field($_POST['job_bm_company_submit_redirect']) : '';
        update_option('job_bm_company_submit_redirect', $job_bm_company_submit_redirect);


        $job_bm_company_edit_recaptcha = isset($_POST['job_bm_company_edit_recaptcha']) ? sanitize_text_field($_POST['job_bm_company_edit_recaptcha']) : '';
        update_option('job_bm_company_edit_recaptcha', $job_bm_company_edit_recaptcha);

        $job_bm_company_edit_post_status = isset($_POST['job_bm_company_edit_post_status']) ? sanitize_text_field($_POST['job_bm_company_edit_post_status']) : '';
        update_option('job_bm_company_edit_post_status', $job_bm_company_edit_post_status);

        $job_bm_company_edit_redirect = isset($_POST['job_bm_company_edit_redirect']) ? sanitize_text_field($_POST['job_bm_company_edit_redirect']) : '';
        update_option('job_bm_company_edit_redirect', $job_bm_company_edit_redirect);




    }
}


/*Right panel*/

add_action('job_bm_settings_tabs_right_panel_company', 'job_bm_settings_tabs_right_panel_company');

if(!function_exists('job_bm_settings_tabs_right_panel_company')) {
    function job_bm_settings_tabs_right_panel_company($id){

        ?>
        <h3>Help & Support</h3>
        <p>Please read documentation for customize Job Board Manger - Company Profile</p>
        <a target="_blank" class="button" href="https://www.pickplugins.com/documentation/job-board-manager-company-profile/?ref=dashboard">Documentation</a>

        <p>If you found any issue could not manage to solve yourself, please let us know and post your issue on forum.</p>
        <a target="_blank" class="button" href="https://www.pickplugins.com/forum/?ref=dashboard">Create Ticket</a>

        <h3>Write Reviews</h3>
        <p>If you found Job Board Manger - Company Profile help you to build something useful, please help us by
            providing your feedback and five star reviews on plugin page.</p>
        <a target="_blank" class="button" href="https://wordpress.org/support/plugin/job-board-manager-company-profile/reviews/#new-post">Rate Us <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a>

        <h3>Shortcodes</h3>
        <p>
            <code>[job_bm_company_submit_form]</code> <br> Display company submit form, <br><a href="https://www.pickplugins.com/demo/job-board-manager/company-submit/">Demo</a>
        </p>

        <p>
            <code>[job_bm_company_edit_form]</code> <br> Display company edit form. <br><a href="https://www.pickplugins
            .com/demo/job-board-manager/company-edit/">Demo</a>
        </p>

        <p>
            <code>[job_bm_my_companies]</code> <br> Display company created by logged-in user.<br><a href="http://www.pickplugins.com/demo/job-board-manager/job-dashboard/?tabs=my_companies">Demo</a>
        </p>
        <p>
            <code>[job_bm_company_list]</code> <br> Display list of company with jobs. <br><a href="http://www.pickplugins.com/demo/job-board-manager/company-list/">Demo</a>
        </p>





        <?php

    }
}