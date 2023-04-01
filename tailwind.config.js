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
      zIndex: {
        '100': '100',
        '99':'99'
      },
      width: {
        '78px': '78px',
        '250px':'250px'
      },
      colors: {
       'pinky':'#D61355',
       'orange':'#F94A29',
       'yellow':'#FCE22A',
       'bluey':'#30E3DF'
      }
      
    },
  },
  plugins: [],
  plugins: [require('@tailwindcss/forms'),
]
};
