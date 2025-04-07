/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php', // Include all PHP files in the theme
    './assets/src/js/**/*.js', // If using JS for template tags or dynamic classes
    './assets/src/css/**/*.css', // If you are using utility classes directly in CSS
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50: '#DFFBE4',
          100: '#BBF7C6',
          200: '#76EF8C',
          300: '#36E757',
          400: '#16BB34',
          500: '#0E7621',
          600: '#0B601B',
          700: '#094914',
          800: '#052E0D',
          900: '#031706',
          950: '#020E04',
        },
      },
    },
  },
  plugins: [],
}
