module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      red: {
        lighter: '#FFB9BD',
        light: '#DE7379',
        DEFAULT: '#CD222D',
      },
      black: {
        DEFAULT: '#222222',
      },
      grey: {
        light: '#DEE4E7',
        DEFAULT: '#37474F',
      },
      white: {
        DEFAULT: '#FFFFFF',
        dark: '#FAFAFA',
      },
    },
    extend: {
      fontFamily: {
      sans: ['Montserrat', 'sans-serif'],
      }, 
      backgroundImage: theme => ({
        'hero': 'url(/storage/img/hero-background.jpg)',
      })
      
    },
    variants: {
      extend: {},
    },
    plugins: [],
  }
}