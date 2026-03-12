/** @type {import('tailwindcss').Config} */
module.exports = {
  theme: {
    extend: {
      colors: {
        cream: '#FDF6F0',
        primary: {
          DEFAULT: '#F39237',
          hover: '#E07F2A',
        },
        dark: '#2D2A26',
      },
      fontFamily: {
        kanit: ['Kanit', 'cursive'],
        serif: ['Playfair Display', 'Georgia', 'serif'],
      },
      borderRadius: {
        '4xl': '2rem',
      },
      boxShadow: {
        'card': '0 4px 20px rgba(0, 0, 0, 0.06)',
        'float': '0 8px 32px rgba(0, 0, 0, 0.12)',
      },
    },
  },
  plugins: [],
}