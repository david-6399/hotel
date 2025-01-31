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
                primary: "#0A2463",
                secondary: "#F4F1DE",
                accent: "#FF6F61",
                neutral: "#E0E0E0",
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                opensans: ["Open Sans", "sans-serif"],
            },
        },
    },
    plugins: [],
};

