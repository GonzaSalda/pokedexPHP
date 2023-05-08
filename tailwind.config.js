/** @type {import('tailwindcss').Config} */
module.exports = {
  purge: [
    './src/**/*.html',
    './src/**/*.php',
  ],
  theme: {
    fontFamily:{
      primary:'Gilda Display'
    },
    container:{
      padding:{
        DEFAULT: '15px'
      }
    },
    screens:{
      sm:'640px',
      md:'768px',
      lg:'960px',
      xl:'1140px',
    },
    extend: {},
  },
  plugins: [],
}