const colors = require('tailwindcss/colors') 
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/filament/**/*.blade.php",
        'node_modules/preline/dist/*.js',
    ],
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.indigo,
                success: colors.green,
                warning: colors.yellow,
                'brands': {
                    'primary': '#172858',
                    'secondary': '#00BDDF'
                }
            },
            animation: {
                'shake': 'shake 0.1000s infinite cubic-bezier(.36,.07,.19,.97) both',
            },
            keyframes: {
                'shake' : {
                    '10%, 90%': {
                        transform: 'translate3d(-1px, 0, 0)'
                    },
                    '20%, 80%': {
                        transform: 'translate3d(2px, 0, 0)'
                    },
                    '30%, 50%, 70%': {
                        transform: 'translate3d(-4px, 0, 0)'
                    },
                    '40%, 60%': {
                        transform: 'translate3d(4px, 0, 0)'
                    }
                }
            }
        },
    },
    plugins: [
      require('@tailwindcss/forms'), 
        require('@tailwindcss/typography'), 
        require('preline/plugin'),
    ],
};
