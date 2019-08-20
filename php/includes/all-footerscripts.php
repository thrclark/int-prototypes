<script src="../js/jquery-3.3.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>



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

    setValueFromLocalStorage('logo-image-url');
   


});

const dataThemeButtons = document.querySelectorAll('[data-theme]');

for (let i = 0; i < dataThemeButtons.length; i++) {
    dataThemeButtons[i].addEventListener('click', () => {
        const theme = dataThemeButtons[i].dataset.theme;

        switch (theme) {
            case 'brown':
                setTheme({

             
                    'logo-image-url': "url('https://is.wfu.edu/wp-content/uploads/2017/01/cropped-favicon.png')",
                    

                });
                return;

            case 'blue':
                setTheme({
                    'logo-image-visibility': 'block',

                    'logo-image-url': "url('https://cdn.freebiesupply.com/logos/large/2x/villanova-wildcats-logo-png-transparent.png')",
                   
                });
                return;

            case 'yellow':
                setTheme({
                   

                    'logo-image-url': "url('http://www.indiana.edu/~espd/rvb/img/webster.png')",
                   
                });
                return;

            case 'black':
                setTheme({
                   
                    'logo-image-url': "url('http://www.indiana.edu/~espd/rvb/develop/img/trident-large.png')",
                  
                });
                return;

            case 'white':
                setTheme({
                   
                    'logo-image-url': "url('http://www.indiana.edu/~espd/rvb/develop/img/trident-large.png')",
                    

                });
                return;
        }
    })
}

const handleInputChange = (property, pixels) => {
    document.documentElement.style.setProperty(`--${property}`, `${event.target.value}${pixels ? 'px' : ''}`);
    localStorage.setItem(property, `${event.target.value}${pixels ? 'px' : ''}`);
};

document.querySelector('#logo-image-url').addEventListener('input', event => {
    handleInputChange('logo-image-url', false);
});


</script>