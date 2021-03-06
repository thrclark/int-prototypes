<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.sticky.js"></script>
<script src="../js/easymde.min.js"></script>
<script src="../js/pikaday.js"></script>
<script src="../js/jscolor.js"></script>
<script src="../js/jquery.multi-select.js"></script>
<script>
    $(".rbt-drawer-button").click(function() {
        $(".rbt-drawer,.rbt-drawer-button").toggleClass("open");
        $("#maincontent").toggleClass("faded");
    });
    $("#maincontent").click(function() {
        $("#maincontent").removeClass("faded");
        $(".rbt-drawer,.rbt-drawer-button").removeClass("open");
    });
</script>
<script>
const setValue = (property, value) => {
    if (value) {
        document.documentElement.style.setProperty(`--${property}`, value);
        const input = document.querySelector(`#${property}`);
        if (input) {
            value = value.replace('px', '');
            input.value = value;
        }
    }
};
const setValueFromLocalStorage = property => {
    let value = localStorage.getItem(property);
    setValue(property, value);
};
const setTheme = options => {
    for (let option of Object.keys(options)) {
        const property = option;
        const value = options[option];
        setValue(property, value);
        localStorage.setItem(property, value);
    }
}
document.addEventListener('DOMContentLoaded', () => {
    //setValueFromLocalStorage('logoimage-visibility');
    setValueFromLocalStorage('logoimage-url');
    //setValueFromLocalStorage('lockup-visibility');
    setValueFromLocalStorage('org-name');
    setValueFromLocalStorage('app-name');
    setValueFromLocalStorage('body-bg-color');
    setValueFromLocalStorage('body-text-color');
    setValueFromLocalStorage('panel-bg-color');
    setValueFromLocalStorage('panel-text-color');
    setValueFromLocalStorage('action-color');
    setValueFromLocalStorage('border-color');
    setValueFromLocalStorage('font_header');
    setValueFromLocalStorage('font_body');
    setValueFromLocalStorage('fontsize_appname');
    setValueFromLocalStorage('fontsize_orgname');
    setValueFromLocalStorage('fontsize_header');
    setValueFromLocalStorage('fontsize_body');
    
    setValueFromLocalStorage('fontsize_verifyblock');
    
    
    setValueFromLocalStorage('theme_border_radius');
    setValueFromLocalStorage('theme_page_margin');
    setValueFromLocalStorage('mstile-bg-color');
    
    //
});
const dataThemeButtons = document.querySelectorAll('[data-theme]');
for (let i = 0; i < dataThemeButtons.length; i++) {
    dataThemeButtons[i].addEventListener('click', () => {
        const theme = dataThemeButtons[i].dataset.theme;
        switch (theme) {
            case 'brown':
                setTheme({
                    'logoimage-visibility': 'block',
                    'lockup-visibility': 'block',
                    'org-name': '',
                    'app-name': 'CampusConfirm',
                    'logoimage-url': "url('../img/logo-red.png')",
                    'body-bg-color': '#fcf7eb',
                    'body-text-color': '#444444',
                    'panel-bg-color': '#ffffff',
                    'panel-text-color': '#444444',
                    'action-color': '#006298',
                    'border-color': '#dddddd',
                    'font_header': 'Cambria, Georgia, "Times New Roman", serif;',
                    'font_body': 'Cambria, Georgia, "Times New Roman", serif;',                    
                    'fontsize_orgname': '.875rem',
                    'fontsize_appname': '1.625rem',
                    'fontsize_header': '2rem',
                    'fontsize_body': '1rem',
                    'fontsize_verifyblock': '1.25rem',
                    'theme_border_radius': '0.25rem',
                    'theme_page_margin': '880px',
                    'mstile-bg-color': '#ff0000',
                });
                return;
            case 'blue':
                setTheme({
                    'logoimage-visibility': 'block',
                    'lockup-visibility': 'block',
                    'org-name': '',
                    'app-name': 'CampusConfirm',
                    'logo-image-visibility': 'block',
                    'logoimage-url': "url('../img/logo-red.png')",
                    'body-bg-color': '#f1f8ff',
                    'body-text-color': '#444444',
                    'panel-bg-color': '#ffffff',
                    'panel-text-color': '#444444',
                    'action-color': '#00a9c8',
                    'border-color': '#cfe2e5',
                    'font_header': 'Cambria, Georgia, "Times New Roman", serif;',
                    'font_body': 'Cambria, Georgia, "Times New Roman", serif;',                    
                    'fontsize_orgname': '.875rem',
                    'fontsize_appname': '1.625rem',
                    'fontsize_header': '2rem',
                    'fontsize_body': '1rem',
                    'fontsize_verifyblock': '1.25rem',
                    'theme_border_radius': '0.25rem',
                    'theme_page_margin': '880px',
                    'mstile-bg-color': '#ff0000',
                });
                return;
            case 'yellow':
                setTheme({
                    'logoimage-visibility': 'block',
                    'lockup-visibility': 'block',
                    'org-name': '',
                    'app-name': 'CampusConfirm',
                    'logoimage-url': "url('../img/logo-red.png')",
                    'body-bg-color': '#fff3db',
                    'body-text-color': '#444444',
                    'panel-bg-color': '#ffffff',
                    'panel-text-color': '#444444',
                    'action-color': '#b3842c',
                    'border-color': '#dddddd',
                    'font_header': 'Cambria, Georgia, "Times New Roman", serif;',
                    'font_body': 'Cambria, Georgia, "Times New Roman", serif;',                    
                    'fontsize_orgname': '.875rem',
                    'fontsize_appname': '1.625rem',
                    'fontsize_header': '2rem',
                    'fontsize_body': '1rem',
                    'fontsize_verifyblock': '1.25rem',
                    'theme_border_radius': '0.25rem',
                    'theme_page_margin': '880px',
                    'mstile-bg-color': '#ff0000',
                });
                return;
            case 'black':
                setTheme({
                    'logoimage-visibility': 'block',
                    'lockup-visibility': 'block',
                    'org-name': '',
                    'app-name': 'CampusConfirm',
                    'logoimage-url': "url('../img/logo-red.png')",
                    'body-bg-color': '#404040',
                    'body-text-color': '#ffffff',
                    'panel-bg-color': '#edfcff',
                    'panel-text-color': '#444444',
                    'action-color': '#0187a0',
                    'border-color': '#01a9c9',
                    'font_header': 'Cambria, Georgia, "Times New Roman", serif;',
                    'font_body': 'Cambria, Georgia, "Times New Roman", serif;',                    
                    'fontsize_orgname': '.875rem',
                    'fontsize_appname': '1.625rem',
                    'fontsize_header': '2rem',
                    'fontsize_body': '1rem',
                    'fontsize_verifyblock': '1.25rem',
                    'theme_border_radius': '0.25rem',
                    'theme_page_margin': '880px',
                    'mstile-bg-color': '#ff0000',
                });
                return;
            case 'white':
                setTheme({
                    'logoimage-visibility': 'block',
                    'lockup-visibility': 'block',
                    'org-name': '',
                    'app-name': 'CampusConfirm',
                    'logoimage-url': "url('../img/logo-red.png')",
                    'body-bg-color': '#eaeaea',
                    'body-text-color': '#444444',
                    'panel-bg-color': '#ffffff',
                    'panel-text-color': '#444444',
                    'action-color': '#006298',
                    'border-color': '#dddddd',
                    'font_header': '"BentonSans", "Helvetica Neue", "Helvetica", sans-serif;',
                    'font_body': '"BentonSans", "Helvetica Neue", "Helvetica", sans-serif;',                    
                    'fontsize_orgname': '.875rem',
                    'fontsize_appname': '1.625rem',
                    'fontsize_header': '2rem',
                    'fontsize_body': '1rem',
                    'fontsize_verifyblock': '1.25rem',
                    'theme_border_radius': '0.25rem',
                    'theme_page_margin': '880px',
                    'mstile-bg-color': '#ff0000',
                });
                return;
                
                
                
                
                 case 'red':
                setTheme({
                    'logoimage-visibility': 'block',
                    'lockup-visibility': 'block',
                    'org-name': '',
                    'app-name': 'CampusConfirm',
                    'logoimage-url': "url('../img/logo-red.png')",
                    'body-bg-color': '#f5edec',
                    'body-text-color': '#444444',
                    'panel-bg-color': '#ffffff',
                    'panel-text-color': '#444444',
                    'action-color': '#990000',
                    'border-color': '#e5cecd',
                    'font_header': '"BentonSans", "Helvetica Neue", "Helvetica", sans-serif;',
                    'font_body': '"BentonSans", "Helvetica Neue", "Helvetica", sans-serif;',                    
                    'fontsize_orgname': '.875rem',
                    'fontsize_appname': '1.625rem',
                    'fontsize_header': '2rem',
                    'fontsize_body': '1rem',
                    'fontsize_verifyblock': '1.25rem',
                    'theme_border_radius': '0.25rem',
                    'theme_page_margin': '880px',
                    'mstile-bg-color': '#ff0000',
                });
                return;
                
                
                    case 'purple':
                setTheme({
                    'logoimage-visibility': 'block',
                    'lockup-visibility': 'block',
                    'org-name': '',
                    'app-name': 'CampusConfirm',
                    'logoimage-url': "url('../img/logo-red.png')",
                    'body-bg-color': '#f2eaff',
                    'body-text-color': '#444444',
                    'panel-bg-color': '#ffffff',
                    'panel-text-color': '#444444',
                    'action-color': '#367929',
                    'border-color': '#e2d1ff',
                    'font_header': '"BentonSans", "Helvetica Neue", "Helvetica", sans-serif;',
                    'font_body': '"BentonSans", "Helvetica Neue", "Helvetica", sans-serif;',                    
                    'fontsize_orgname': '.875rem',
                    'fontsize_appname': '1.625rem',
                    'fontsize_header': '2rem',
                    'fontsize_body': '1rem',
                    'fontsize_verifyblock': '1.25rem',
                    'theme_border_radius': '0.25rem',
                    'theme_page_margin': '880px',
                    'mstile-bg-color': '#ff0000',
                });
                return;
                
        }
    })
}

const handleInputChange = (property, pixels) => {
    document.documentElement.style.setProperty(`--${property}`, `${event.target.value}${pixels ? 'px' : ''}`);
    localStorage.setItem(property, `${event.target.value}${pixels ? 'px' : ''}`);
};
//document.querySelector('#logoimage-visibility').addEventListener('change', event => {
    //handleInputChange('logoimage-visibility', false);
//});
//document.querySelector('#logoimage-url').addEventListener('input', event => {
   // handleInputChange('logoimage-url', false);
//});
//document.querySelector('#lockup-visibility').addEventListener('change', event => {
   // handleInputChange('lockup-visibility', false);
//});
document.querySelector('#body-bg-color').addEventListener('change', event => {
    handleInputChange('body-bg-color', false);
});
document.querySelector('#body-bg-color-hexcolor').addEventListener('change', event => {
    handleInputChange('body-bg-color', false);
});
document.querySelector('#body-text-color').addEventListener('change', event => {
    handleInputChange('body-text-color', false);
});
document.querySelector('#body-text-color-hexcolor').addEventListener('change', event => {
    handleInputChange('body-text-color', false);
});
document.querySelector('#panel-bg-color').addEventListener('change', event => {
    handleInputChange('panel-bg-color', false);
});
document.querySelector('#panel-bg-color-hexcolor').addEventListener('change', event => {
    handleInputChange('panel-bg-color', false);
});
document.querySelector('#panel-text-color').addEventListener('change', event => {
    handleInputChange('panel-text-color', false);
});
document.querySelector('#panel-text-color-hexcolor').addEventListener('change', event => {
    handleInputChange('panel-text-color', false);
});
document.querySelector('#action-color').addEventListener('change', event => {
    handleInputChange('action-color', false);
});
document.querySelector('#action-color-hexcolor').addEventListener('change', event => {
    handleInputChange('action-color', false);
});
document.querySelector('#font_header').addEventListener('change', event => {
    handleInputChange('font_header', false);
});
document.querySelector('#font_body').addEventListener('change', event => {
    handleInputChange('font_body', false);
});

document.querySelector('#fontsize_orgname').addEventListener('input', event => {
    handleInputChange('fontsize_orgname', true);
});
    
document.querySelector('#fontsize_appname').addEventListener('input', event => {
    handleInputChange('fontsize_appname', true);
});
    
document.querySelector('#fontsize_header').addEventListener('input', event => {
    handleInputChange('fontsize_header', true);
});

document.querySelector('#fontsize_body').addEventListener('input', event => {
    handleInputChange('fontsize_body', true);
});
    
    
    
    
    document.querySelector('#fontsize_verifyblock').addEventListener('input', event => {
    handleInputChange('fontsize_verifyblock', true);
});
    
    
    
    

document.querySelector('#theme_border_radius').addEventListener('input', event => {
    handleInputChange('theme_border_radius', true);
});
document.querySelector('#border-color').addEventListener('change', event => {
    handleInputChange('border-color', false);
});
document.querySelector('#border-color-hexcolor').addEventListener('change', event => {
    handleInputChange('border-color', false);
});
document.querySelector('#theme_page_margin').addEventListener('input', event => {
    handleInputChange('theme_page_margin', true);
});
    
    
    
document.querySelector('#mstile-bg-color').addEventListener('change', event => {
    handleInputChange('mstile-bg-color', false);
});
document.querySelector('#mstile-bg-color-hexcolor').addEventListener('change', event => {
    handleInputChange('mstile-bg-color', false);
});
    
    
    
    
</script>
<script>
function orgnameset() {
    texttosave = document.getElementById('org-name').value;
    localStorage.setItem('org-name', texttosave);
}
function orgnamestore() {
    textdata = document.getElementById('org-name').value;
    document.getElementById('org-name-display').innerHTML = textdata;
}
function appnameset() {
    texttosave = document.getElementById('app-name').value;
    localStorage.setItem('app-name', texttosave);
}
function appnamestore() {
    textdata = document.getElementById('app-name').value;
    document.getElementById('app-name-display').innerHTML = textdata;
} 
function headerhtml_set() {
    texttosave = document.getElementById('header_html').value;
    localStorage.setItem('header_html', texttosave);
}
function headerhtml_store() {
    textdata = document.getElementById('header_html').value;
    document.getElementById('header_html_display').innerHTML = textdata;
} 
function footerhtml_set() {
    texttosave = document.getElementById('footer_html').value;
    localStorage.setItem('footer_html', texttosave);
}
function footerhtml_store() {
    textdata = document.getElementById('footer_html').value;
    document.getElementById('footer_html_display').innerHTML = textdata;
}
   
</script>