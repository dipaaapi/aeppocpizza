const theme = require('tailwindcss/defaultTheme');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'media',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Monsterrat', 'sans-serif', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'pinkg': '#E2A2C8',
            },
            zIndex: {
                '-10': '-10',
                '-20': '-20',
                '-30': '-30',
                '-50': '-50',
            }
        }
    },
    variants: {
        extend: {
            opacity: ['disabled'],
            display: ["group-hover"]
        },

    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
