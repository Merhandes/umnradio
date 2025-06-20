/** @type {import('tailwindcss').Config} */
const plugin = require("tailwindcss/plugin");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            keyframes: {
                wiggleLeft: {
                    "0%, 100%": { transform: "rotate(-5deg)" },
                    "50%": { transform: "rotate(5deg)" },
                },
                wiggleRight: {
                    "0%, 100%": { transform: "rotate(5deg)" },
                    "50%": { transform: "rotate(-5deg)" },
                },
                wiggleInRight: {
                    "0%": {
                        transform: "translateX(100%) rotate(-18deg)",
                        opacity: "1",
                    },
                    "25%": {
                        transform: "translateX(50%) rotate(-9deg)",
                        opacity: "1",
                    },
                    "50%": {
                        transform: "translateX(0) rotate(0deg)",
                        opacity: "1",
                    },
                    "75%": {
                        transform: "translateX(50%) rotate(9deg)",
                        opacity: "1",
                    },
                    "100%": {
                        transform: "translateX(100%) rotate(-18deg)",
                        opacity: "1",
                    },
                },
                wiggleInLeft: {
                    "0%": {
                        transform: "translateX(-100%) rotate(18deg)",
                        opacity: "1",
                    },
                    "25%": {
                        transform: "translateX(-50%) rotate(9deg)",
                        opacity: "1",
                    },
                    "50%": {
                        transform: "translateX(0) rotate(0deg)",
                        opacity: "1",
                    },
                    "75%": {
                        transform: "translateX(-50%) rotate(-9deg)",
                        opacity: "1",
                    },
                    "100%": {
                        transform: "translateX(-100%) rotate(18deg)",
                        opacity: "1",
                    },
                },
            },
            animation: {
                wiggleInRight: "wiggleInRight 15s linear infinite",
                wiggleInLeft: "wiggleInLeft 15s linear infinite",
            },
            colors: {
                biru: "#021f3a",
            },
            fontFamily: {
                poppins: ["Poppins"],
                nexarust: ["NexaRust"],
                emilyolivia: ["EmilyOlivia"],
                haveidea: ["HaveIdea"],
                hellomickeys: ["HelloMickeys"],
                love: ["Love"],
                badoney: ["Badoney", "sans-serif"],
                misterHoney: ["MISTERHONEY", "cursive"],
                moxyRush: ["MoxyRush", "sans-serif"],
                requiem: ["Requiem", "serif"],
                timelessMemories: ["Timeless Memories", "serif"],
                racingSansOne: ["Racing Sans One", "sans-serif"],
                saira: ["Saira", "sans-serif"],
                sairaStencilOne: ["Saira Stencil One", "sans-serif"],
                monoton: ["Monoton", "sans-serif"],
            },
        },
    },
    plugins: [
        require("daisyui"),
        require("flowbite/plugin"),
        plugin(function ({ matchUtilities, theme }) {
            matchUtilities(
                {
                    glow: (value) => ({
                        textShadow: `0 0 10px ${value}, 0 0 20px ${value}, 0 0 30px ${value}`,
                    }),
                },
                {
                    values: theme("colors"),
                    type: "color",
                }
            );
        }),
    ],
};
