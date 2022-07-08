module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                red:{
                    500: '#e60013'
                },
                yellow:{
                    500: '#EECE00'
                },
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        function ({ addComponents }) {
            addComponents({
                '.container': {
                    maxWidth: '100%',
                    '@screen sm': {
                        maxWidth: '640px',
                    },
                    '@screen md': {
                        maxWidth: '767px',
                    },
                    '@screen lg': {
                        maxWidth: '1280px',
                    },
                    '@screen xl': {
                        maxWidth: '1400px',
                    },
                }
            })
        }
    ],
}
