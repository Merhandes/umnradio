/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        poppins: ['Poppins'],
        nexarust: ['NexaRust']
      }
    },
  },
  plugins: [
    require("daisyui"),
    require('flowbite/plugin')
  ],
}

