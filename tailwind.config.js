/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
const defaultConfig = require('tailwindcss/defaultConfig')

module.exports = {
  content: [
    "./components/**/**/*.{twig,css}",
    "./src/**/*.{html,js}"
  ],
  theme: {
    extend: {
      colors: {
        'brand-primary': '#ff0000'
      },
    },
  },
  plugins: [],
}

