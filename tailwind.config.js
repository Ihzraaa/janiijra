/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'yellow-lightest': '#FFFEF5',
        'yellow-light': '#FFF9E6',
        'yellow-pastel': '#FFEBB5',
        'yellow-soft': '#FFE082',
        'yellow-warm': '#FFD966',
        'text': '#8B7355',
      },
      fontFamily: {
        'sans': ['Quicksand', 'Inter', 'ui-sans-serif', 'system-ui'],
        'serif': ['Georgia', 'Playfair Display', 'serif'],
      },
    },
  },
}
