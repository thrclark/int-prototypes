<script src="../js/jquery-3.3.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

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

    setValueFromLocalStorage('logoimage-visibility');
	setValueFromLocalStorage('logoimage-url');
	setValueFromLocalStorage('lockup-visibility');
	setValueFromLocalStorage('org-name');
    setValueFromLocalStorage('app-name');
    setValueFromLocalStorage('body-bg-color');
    setValueFromLocalStorage('body-text-color');
    setValueFromLocalStorage('panel-bg-color');
    setValueFromLocalStorage('panel-text-color');
    setValueFromLocalStorage('action-color');


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
                    'org-name': 'INDIANA UNIVERSITY',
                    'app-name': 'VERIFY',
                    'logoimage-url': "url('https://is.wfu.edu/wp-content/uploads/2017/01/cropped-favicon.png')",
                    'body-bg-color': '#fcf7eb',
                    'body-text-color': '#444444',
                    'panel-bg-color': '#ffffff',
                    'panel-text-color': '#444444',
                    'action-color': '#006298',
                });
                return;
            case 'blue':
                setTheme({
					'logoimage-visibility': 'block',
					'lockup-visibility': 'block',
                    'org-name': 'INDIANA UNIVERSITY',
                    'app-name': 'VERIFY',
                    'logo-image-visibility': 'block',
                    'logoimage-url': "url('https://cdn.freebiesupply.com/logos/large/2x/villanova-wildcats-logo-png-transparent.png')",
                    'body-bg-color': '#f6f6f6',
                    'body-text-color': '#444444',
                    'panel-bg-color': '#ffffff',
                    'panel-text-color': '#444444',
                    'action-color': '#006298',
                });
                return;
            case 'yellow':
                setTheme({
					'logoimage-visibility': 'block',
					'lockup-visibility': 'block',
                    'org-name': 'INDIANA UNIVERSITY',
                    'app-name': 'VERIFY',
                    'logoimage-url': "url('http://www.indiana.edu/~espd/rvb/img/webster.png')",
                    'body-bg-color': '#fffcf6',
                    'body-text-color': '#444444',
                    'panel-bg-color': '#ffffff',
                    'panel-text-color': '#444444',
                    'action-color': '#006298',
                });
                return;
            case 'black':
                setTheme({
					'logoimage-visibility': 'block',
					'lockup-visibility': 'block',
                    'org-name': 'INDIANA UNIVERSITY',
                    'app-name': 'VERIFY',
                    'logoimage-url': "url('http://www.indiana.edu/~espd/rvb/develop/img/trident-large.png')",
                    'body-bg-color': '#fafafa',
                    'body-text-color': '#444444',
                    'panel-bg-color': '#ffffff',
                    'panel-text-color': '#444444',
                    'action-color': '#006298',
                });
                return;
            case 'white':
                setTheme({
					'logoimage-visibility': 'block',
					'lockup-visibility': 'block',
                    'org-name': 'INDIANA UNIVERSITY',
                    'app-name': 'VERIFY',
                    'logoimage-url': "url('http://www.indiana.edu/~espd/rvb/develop/img/trident-large.png')",
                    'body-bg-color': '#eaeaea',
                    'body-text-color': '#444444',
                    'panel-bg-color': '#ffffff',
                    'panel-text-color': '#444444',
                    'action-color': '#006298',
                });
                return;
        }
    })
}

const handleInputChange = (property, pixels) => {
    document.documentElement.style.setProperty(`--${property}`, `${event.target.value}${pixels ? 'px' : ''}`);
    localStorage.setItem(property, `${event.target.value}${pixels ? 'px' : ''}`);
};


document.querySelector('#logoimage-visibility').addEventListener('change', event => {
    handleInputChange('logoimage-visibility', false);
});
document.querySelector('#logoimage-url').addEventListener('input', event => {
    handleInputChange('logoimage-url', false);
});
document.querySelector('#lockup-visibility').addEventListener('change', event => {
    handleInputChange('lockup-visibility', false);
});

document.querySelector('#logoimage-url').addEventListener('input', event => {
    handleInputChange('logoimage-url', false);
});
document.querySelector('#body-bg-color').addEventListener('change', event => {
    handleInputChange('body-bg-color', false);
});
document.querySelector('#body-text-color').addEventListener('change', event => {
    handleInputChange('body-text-color', false);
});
document.querySelector('#panel-bg-color').addEventListener('change', event => {
    handleInputChange('panel-bg-color', false);
});
document.querySelector('#panel-text-color').addEventListener('change', event => {
    handleInputChange('panel-text-color', false);
});
document.querySelector('#action-color').addEventListener('change', event => {
    handleInputChange('action-color', false);
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
</script>