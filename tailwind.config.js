/** @type {import('tailwindcss').Config} */

import forms from '@tailwindcss/forms';

export default {
  content: [
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
  ],
  fontFamily: {
    sans: ['Mulish', 'sans-serif'],
  },
  theme: {
    extend: {},
  },
  plugins: [
    forms,
  ],
}

