/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {fontFamily: {
      sevillana : ['Sevillana' , 'serif' ],
      noto : ['Noto Sans JP', 'sans-serif'],
    },
    
  },
  },
  plugins: [],
}