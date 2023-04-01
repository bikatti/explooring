/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors');
const defaultFontStack = [
  "Encode Sans",
  "Montserrat",
  "SF-Pro-Display",
  "Roboto",
  "Helvetica",
  "-apple-system",
  "BlinkMacSystemFont",
  "sans-serif",
];

module.exports = {
  content: [
    "./*.{js,php}",
    "./template-parts/*.php",
    "./template-parts/**/*.php",
    "./template-parts/**/**/*.php",
  ],
  theme: {
    container: {
      screens: {
        sm: '1280px',
        md: '1280px',
        lg: '1280px',
        xl: '1280px',
        '2xl': '1280px',
      },
      padding: '20px',
      center: true,
    },
    fontFamily: {
      display: ["Anton", ...defaultFontStack],
      sans: defaultFontStack,
    },
    extend: {
      colors: {
        'primary': '#E2E700',
        'secondary': '#122023',
        'textColor': {
          light: '#616161',
          normal: '#757575',
          DEFAULT: '#2A383A',
          dark: '#424242'
        }
      },
    },
  },
  // important: true,
  plugins: [],
}