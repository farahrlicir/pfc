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
       'pinky':'#D61355',
       'orange':'#F94A29',
       'yellow':'#FCE22A',
       'bluey':'#30E3DF'
      }
    },
  },
  plugins: [],
  plugins: [require('@tailwindcss/forms')],
};
