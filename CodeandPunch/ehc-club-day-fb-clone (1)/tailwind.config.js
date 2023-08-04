/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}"],
  theme: {
    extend: {
        colors: {
            background: '#18191a',
            header: '#252526',
            primary: '#3a3b3d',
            secondary: '#e4e6eb',
            tertiary: '#b0b3b8',
            hover: '#404041',
        }
    },
  },
  plugins: [],
}