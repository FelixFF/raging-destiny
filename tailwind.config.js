module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            backgroundImage: theme => ({
                'main-background': "url('/img/main-background.jpg')",
                'books-button': "url('/img/books-button.png')",
                'contact-button': "url('/img/contact-button.png')",
                'history-button': "url('/img/history-button.png')",
                'home-button': "url('/img/home-button.png')",
                'pcps-button': "url('/img/pcps-button.png')",
                'rdvs-button': "url('/img/rdvs-button.png')",
                'store-button': "url('/img/store-button.png')",
            })
        },
        minWidth: {
            '0': '0',
            '1/4': '25%',
            '1/2': '50%',
            '3/4': '75%',
            'full': '100%',
        },
        backgroundSize: {
            'auto': 'auto',
            'cover': 'cover',
            'contain': 'contain',
            '60%': '60%',
            '16': '4rem',
        }
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
