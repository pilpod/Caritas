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
      'mobile-main': '0.875rem',
      'mobile-tiny': '0.75rem',
    },
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
    boxShadow: {
      hr: '0px 4px 22px rgba(205, 34, 45, 0.1), 0px 0.893452px 4.91399px rgba(205, 34, 45, 0.0596), 0px 0.266004px 1.46302px rgba(205, 34, 45, 0.0404)'
    },
    variants: {
      extend: {},
    },
    plugins: [],
  }
}