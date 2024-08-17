/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');

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
    require('flowbite/plugin'),
    plugin(function ({ matchUtilities, theme }) {
      matchUtilities(
        {
          glow: (value) => ({
            textShadow: `0 0 10px ${value}, 0 0 20px ${value}, 0 0 30px ${value}`,
          }),
        },
        {
          values: theme('colors'),
          type: 'color',
        }
      );
    }),
  ],
}
