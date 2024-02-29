/** @type {import('tailwindcss').Config} */
import { green } from 'tailwindcss/colors'

export const content = ["./src/**/*.{html,js}"]
export const theme = {
  extend: {
    colors: {
      primary: green,
    }
  },
}
export const plugins = []

