import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    safelist: [
        'bg-green-600',
        'hover:bg-green-700',
        'focus:ring-green-500',
        'text-white'
      ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            green: {
                50:  '#f0fdf4',
                100: '#dcfce7',
                200: '#bbf7d0',
                300: '#86efac',
                400: '#4ade80',
                500: '#22c55e',
                600: '#16a34a',
                700: '#15803d',
                800: '#166534',
                900: '#14532d',
              }
        },
    },

    plugins: [forms],
};
