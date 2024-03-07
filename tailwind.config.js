/** @type {import('tailwindcss').Config} */
import { blue } from "tailwindcss/colors";

export const content = ["./src/**/*.{html,js}"];
export const theme = {
  extend: {
    colors: {
      primary: blue,
    },
    fontFamily: {
      dm: ["DM_Sans", "sans-serif"], // Define your custom font family
    },
  },
};
export const plugins = [];
