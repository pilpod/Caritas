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
      'ui-main': '1.6rem',
      'ui-sub': '1.4rem',
      'ui-tiny': '1.2rem',
      'mobile-main': '0.875rem',
      'mobile-tiny': '0.75rem',
      // Desktop
      'd-h1': '7.2rem',
      'd-h2': '6.4rem',
      'd-h3': '4.8rem',
      'd-h4': '3.6rem',
      'd-h5': '2.4rem',
      'd-body': '1.8rem',
      'd-ui-main': '1.8rem',
      'd-ui-sub': '1.6rem',
      'd-ui-tiny': '1.4rem',
    },
    colors: {
      red: {
        gd: 'rgba(205, 34, 45, 0.50)',
        gd2: 'rgba(205, 34, 45, 0.75)',
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
      boxShadow: {
        hr: '0px 4px 22px rgba(205, 34, 45, 0.1), 0px 0.893452px 4.91399px rgba(205, 34, 45, 0.0596), 0px 0.266004px 1.46302px rgba(205, 34, 45, 0.0404)'
      },
      fontFamily: {
      sans: ['Montserrat', 'sans-serif'],
      }, 
      backgroundImage: theme => ({
        'hero': 'url(/storage/img/hero-background.jpg)',
        'donar': 'url(/storage/img/bgDonar.jpg)'
      }),
      borderRadius: {
        'dtl': '5.0rem',
        'imglateral': '12.5rem'
      },
      width: {
        '68px': '6.8rem',
        '95px': '9.5rem',
        '150px': '15rem',
        '262px': '26.2rem',
        '350px': '35rem',
        '375px': '37.4rem',
        '660px': '66rem',
        '850px': '85rem'
      },
      height: {
        '150px': '15rem',
        '350px': '35rem',
        '365px': '36.5rem',
        '450px': '45rem',
        '540px': '54rem',
      },
      maxHeight: {
        '80%': '80%',
      },
      minHeight: {
        '50%': '50%',
      }
    },
    variants: {
      extend: {
        backgroundColor: ['active'],
        borderWidth: ['hover'],
      }
    },
    plugins: [],
  }
}