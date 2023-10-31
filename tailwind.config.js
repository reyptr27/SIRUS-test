import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",

    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        //PoweGrid
        "./app/Http/Livewire/**/*Table.php",
        "./vendor/power-components/livewire-powergrid/resources/views/**/*.php",
        "./vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php",
    ],

    presets: [
        //PowerGrid
        require("./vendor/power-components/livewire-powergrid/tailwind.config.js"),
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
            },

            colors: {
                dark: {
                    "eval-0": "#151823",
                    "eval-1": "#222738",
                    "eval-2": "#2A2F42",
                    "eval-3": "#2C3142",
                },
                cyan: colors.cyan,
                //Custom
                disable: {
                    light: "#E9ECEF",
                    dark: "#2C3142",
                },
                //PoweGrid
                "pg-primary": colors.gray,
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms")({
            strategy: "class",
        }),
        typography,
    ],
};
