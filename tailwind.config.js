module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php'
],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontSize: {
      'h1': '3.6rem',
      'h2': '2.4rem',
      'h3': '2.0rem',
      'h4': '1.6rem',
      'h5': '1.4rem',
      'body': '1.6rem',
      'ui-main-r': '1.6rem',
      'ui-sub': '1.4rem',
      'ui-tiny': '1.2rem',
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}