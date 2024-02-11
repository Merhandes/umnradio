/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                biru: "#021f3a",
            },
            fontFamily: {
                poppins: ["Poppins"],
            },
        },
    },
    plugins: [require("daisyui")],
};
