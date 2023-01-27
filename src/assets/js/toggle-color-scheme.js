function toggle_color_scheme()
{
    document.body.classList.toggle( 'toggle-color-scheme' );
}

function enable_toggle_color_scheme_button()
{
    var toggle_color_scheme_button = document.getElementById( "toggle_color_scheme_button" );

    toggle_color_scheme_button.href = "javascript: toggle_color_scheme();";
    toggle_color_scheme_button.textContent = "Toggle Color Scheme";
}

document.body.onload = enable_toggle_color_scheme_button();
