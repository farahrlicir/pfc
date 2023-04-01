const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './components/**/*.{html,js}',
        './pages/**/*.{html,js}',
        './index.html',
    ],

    theme: {
        extend: {
           
        },
      
    },

    plugins: [require('@tailwindcss/forms')],
};
