<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Retrieve the site name.
     */
    public function siteName(): string
    {
        return get_bloginfo('name', 'display');
    }

    public function siteLogo(): string{
        $logo_id  = get_theme_mod('custom_logo');
        $logo_url = wp_get_attachment_image_url($logo_id, 'full');
        return (has_custom_logo()) ? $logo_url : "";
    }

    public function generalSettings(): array{
        $social_links = get_field("social_links", "option");
        $phone_no = get_field("phone_no", "option");
        $email_address = get_field("email_address", "option");
        $enquiry_button = get_field("enquiry_button", "option");
        $menu_logo = get_field("menu_logo", "option");
        $enquiry_button_footer = get_field("enquiry_button_footer", "option");
        $signup_form_text = get_field("signup_form_text", "option");
        $contact_form_shortcode = get_field("contact_form_shortcode", "option");

        return ["social_links" => $social_links, "phone_no" => $phone_no, "email_address" => $email_address, 'enquiry_button' => $enquiry_button, 'menu_logo' => $menu_logo, 'enquiry_button_footer' => $enquiry_button_footer, 'signup_form_text' => $signup_form_text, 'contact_form_shortcode' => $contact_form_shortcode];
    }
}
