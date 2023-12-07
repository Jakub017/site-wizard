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
                'xs': '12px',
                'sm': '14px',
                'base': '16px',
                'lg': '20px',
                'xl': '24px',
                '2xl': '30px',
                '3xl': '36px',
                '4xl': '48px',
                '5xl': '60px',
                '6xl': '72px',
            },

            colors: {
                'main': {
                    '100': '#F8FBFF',
                    '200': '#F6F9FF',
                    '300': '#339DFF',
                    '400': '#007AFF',
                    '500': '#0066CC',
                    '600': '#0052A3',
                },
                'active': {
                    '100': '#E0F1BB',
                    '200': '#85A738',
                },
                'hold': {
                    '100': '#FFF0D8',
                    '200': '#F49E13',
                },
                'gray': {
                    '100': '#8D8D97',
                },
                'purple': {
                    '100': '#FCF4FC',
                    '200': '#B548C6',
                },
                'orange': {
                    '100': '#FFF0D8',
                    '200': '#F49E13',
                },
                'green': {
                    '100': '#F5FEF4',
                    '200': '#22B07D',
                },
            },
        },
    },

    plugins: [forms],
};
