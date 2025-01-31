import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
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

    plugins: [forms],
};
