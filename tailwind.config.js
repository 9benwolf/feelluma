/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        pop: ["Poppins", "sans-serif"],
        inter: ["Inter", "sans-serif"],
        bebas: ["Bebas Neue ", "sans-serif"],
      },
    },
  },
  plugins: [],
};
