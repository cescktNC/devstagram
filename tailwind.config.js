/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php", // Todos los archivos con la extensión '.blade.php' de todas las carpetas que estan dentro de 'resources'
    "./resources/**/*.js"
  ], // Hay que poner en que archivos se va a utilizar tailwind
  theme: {
    extend: {},
  },
  plugins: [],
}
