const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                transparent: 'transparent',
                current: 'currentColor',

                'gray-background': '#f7f8fc',
                black: colors.black,
                white: colors.white,
                gray: colors.neutral,
                'blue': '#328af1',
                'blue-hover': '#2879bd',
                'yellow': '#ffc73c',
                'red': '#ec4541',
                'green': '#1aab8b',
                'purple': '#8b60ed',

            },

            spacing: {
                22: '5.5rem',
                44: '11rem',
                70: '17.5rem',
                76: '19rem',
                104: '26rem',
                175: '43.75rem'
            },

            fontSize: {
                'xxs': '0.75rem'
            },

            maxWidth: {
                custom: '68.5rem'
            },

            boxShadow: {
                card: '4px 4px 15px 0 rgba(36,37,38,0.08)',
                dialog: '3px 4px 15px 0 rgba(36,37,38,0.22)',

            },

            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        // require('@tailwindcss/line-clamp')
    ],
};