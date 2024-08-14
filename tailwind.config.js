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
      colors: {
        biru: "#021f3a",
      },
      fontFamily: {
        poppins: ['Poppins'],
        nexarust: ['NexaRust'],
        emilyolivia: ['EmilyOlivia'],
        haveidea: ['HaveIdea'],
        hellomickeys: ['HelloMickeys'],
        love: ['Love'],
        badoney: ['Badoney', 'sans-serif'],
        misterHoney: ['MISTERHONEY', 'cursive'],
        moxyRush: ['MoxyRush', 'sans-serif'],
        requiem: ['Requiem', 'serif'],
        timelessMemories: ['Timeless Memories', 'serif'],
      }
    },
  },
  plugins: [
    require("daisyui"),
    require('flowbite/plugin')
  ],
}

