<link href="../css/main.css" rel="stylesheet" type="text/css">
<style>
:root {
--logoimage-visibility: block;
--lockup-visibility: block;
--logoimage-url: url('../img/logo-red.png');
--body-bg-color: #eaeaea;
--body-text-color: #444444;
--panel-bg-color: #ffffff;
--panel-text-color: #444444;
--action-color: #006298;
--border-color: #dddddd;
--font_header: "BentonSans", "Helvetica Neue", "Helvetica", sans-serif;
--font_body: "BentonSans", "Helvetica Neue", "Helvetica", sans-serif;
--fontsize_orgname: .875rem;
--fontsize_appname: 1.625rem;
--fontsize_header: 2rem;
--fontsize_body: 1rem;
--fontsize_verifyblock: 1.25rem;
--theme_border_radius: 0.25rem;
--theme_page_margin: 880px;
--mstile-bg-color: #ff0000;
}
.demo-theme-builder input[type="color"] {
    -webkit-appearance: none;
    border: 1px solid #666666;
    width: 3rem;
    flex: inherit;
    outline: 0;
}
.colorpick .input-group-append input {
    border-bottom-left-radius: 0px;
    border-top-left-radius: 0px;
}
.demo-theme-builder input[type="color"]::-webkit-color-swatch-wrapper {
padding: 0;
}
.demo-theme-builder input[type="color"]::-webkit-color-swatch {
border: none;
}
#body-bg-color {
    background-color: var(--body-bg-color);
}
#body-text-color {
    background-color: var(--body-text-color);
}
#panel-bg-color {
    background-color: var(--panel-bg-color);
}
#panel-text-color {
    background-color: var(--panel-text-color);
}
#action-color {
    background-color: var(--action-color);
}
#headerfooter-bg-color {
    background-color: var(--headerfooter-bg-color);
}
#headerfooter-text-color {
    background-color: var(--headerfooter-text-color);
}
#border-color {
    background-color: var(--border-color);
}
#mstile-bg-color, .mstile-bg-color {
    background-color: var(--mstile-bg-color);
}
#footer_html_display {
    max-width: var(--theme_page_margin);
}
</style>
<style>
body {
    background-color: var(--body-bg-color);
    color: var(--body-font-color);
    transition: font-size 0.2s ease-in-out, line-height 0.2s ease-in-out, color 0.2s ease-in-out, background-color 0.2s ease-in-out;
}
html body .rbt-app-header, html body .rbt-footer {
    background-color: var(--headerfooter-bg-color);
}
html body .rbt-app-header .rbt-brand-title-container .rbt-brand-title, html body .rbt-app-header .nav .nav-item .nav-link, html body .rbt-footer .rbt-footer-aux-links {
    color: var(--headerfooter-text-color);
}
html body .rbt-footer a {
    color: var(--footer-link-color);
}
html body .rbt-app-header .rbt-brand-image {
    content: var(--logo-image-url);
    display: var(--logo-image-visibility)
}
html body {
    font-size: var(--base-font-size);
}
html body .rbt-brand-title {
    display: var(--application-name);
}
html body .rbt-footer img {
    content: var(--footer-logo-image-url);
    display: var(--footer-logo-image-visibility);
}
.ms-container {
    margin-left: 0px;
    margin-right: 0px;
}
</style>
