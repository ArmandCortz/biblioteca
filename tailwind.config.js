const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
<<<<<<< HEAD
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
=======
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
