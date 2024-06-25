module.exports = {
  content: [
  './resources/**/*.blade.php',
  './resources/**/*.js',
  ],
  theme: {
  extend: {},
  },
  variants: {
  extend: {},
  },
  plugins: [
  require('@tailwindcss/forms'), // <-- kita tambahkan ini
  ],
  }