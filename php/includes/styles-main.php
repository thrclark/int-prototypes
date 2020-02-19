<link href="../css/main.css" rel="stylesheet" type="text/css">
<style>

.demo-theme-builder input[type="color"] {
	-webkit-appearance: none;s
 border: 1px solid black;
	width: 3rem;
	flex: inherit;
	outline: 0;
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
    
    
</style>



<style>
:root {
 --body-bg-color: #ffffff;
 --body-font-color: #444444;
 --font-stack: Cambria, Georgia, "Times New Roman", serif;
 --headerfooter-bg-color: #fafafa;
 --headerfooter-text-color: #444444;
 --footer-link-color: #900000;
 --logo-image-visibility: block;
 --logo-image-url: url("http://www.indiana.edu/~espd/rvb/develop/img/trident-large.png");
 --footer-logo-image-visibility: block;
 --footer-logo-image-url: url("http://www.indiana.edu/~espd/rvb/develop/img/trident-small.png");
 --application-name: none;
 --base-font-size: 16px;
 --base-line-height: 1.5;
}
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
	line-height: var(--base-line-height);
}
html body .rbt-brand-title {
	display: var(--application-name);
}
html body .rbt-footer img {
	content: var(--footer-logo-image-url);
	display: var(--footer-logo-image-visibility);
}
</style>
