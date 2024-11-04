function x_get_this_year() { return date('Y'); }
add_shortcode('currentYear', 'x_get_this_year');
