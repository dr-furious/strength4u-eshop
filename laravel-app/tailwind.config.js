/** @type {import('tailwindcss').Config} */
import { blue } from "tailwindcss/colors";

export const content = ["./resources/**/*.blade.php", "./resources/**/*.js"];
export const theme = {
    extend: {
        colors: {
            primary: blue,
            "primary-grey-100": "#f4f7f8",
        },
        fontFamily: {
            dm: ["DM_Sans", "sans-serif"], // Define your custom font family
        },
    },
};
export const plugins = [];
