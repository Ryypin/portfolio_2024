/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      'white': '#FFFFFF',
      'yellow': '#FBCA1B',
      'grey-light': '#3F4045',
      'grey': '#25262B',
      'grey-dark': '#25262B'
    },
    fontFamily: {
      open: ['Open Sans', 'sans-serif'],
      bebas: ['Bebas Neue', 'sans-serif'],
    }
  }
}