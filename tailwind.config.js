import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './resources/js/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Rubik', ...defaultTheme.fontFamily.sans],
                rubik: ['Rubik', 'sans-serif'],
                oswald: ['Oswald', 'sans-serif'],
            },
            colors: {
                primary: {
                    DEFAULT: '#f96601',
                    dark: '#e05a00',
                    light: '#ff8533',
                },
                dark: {
                    DEFAULT: '#121212',
                },
            },
        },
    },

    plugins: [forms],
};
