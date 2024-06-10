/** @type {import('tailwindcss').Config} */
// npx tailwindcss -i ./dist/src/base.css -o ./dist/css/main.css --watch
module.exports = {
  content: [
    "./index.php",
    "./postingan.php",
    "./kp.php",
    "./tentang.php",
    "./dist/css/main.css",
    "./dist/**/*.{css, js}",
    "./layout/**/*.php"
  ],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      screens: {
        '2xl': '1300px',
      }
    },
  },
  plugins: [],
}

