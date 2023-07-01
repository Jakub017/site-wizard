import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                primary: ['Poppins', 'sans-serif'],
            },
            fontSize: {
                'sm': '16px',
                'base': '18px',
                'lg': '20px',
                'xl': '24px',
                '2xl': '30px',
                '3xl': '36px',
                '4xl': '48px',
                '5xl': '60px',
                '6xl': '72px',
            },

            colors: {
                'primary-color': {
                    '100': '#0A192F',
                    '200': '#060F1D',
                },
                'gray': {
                    '100': '#F3F3F3',
                    '200': '#747373',
                },
            },
        },
    },

    plugins: [forms],
};
