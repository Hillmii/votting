/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#607274',
        'primary-2': '#DED0B6',
        'second-primary': '#FAEED1',
        'second-color': '#B2A59B',
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}

