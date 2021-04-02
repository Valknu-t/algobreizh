/*
** TailwindCSS Configuration File
**
** Docs: https://tailwindcss.com/docs/configuration
** Default: https://github.com/tailwindcss/tailwindcss/blob/master/stubs/defaultConfig.stub.js
*/
module.exports = {
    purge: {
      // Learn more on https://tailwindcss.com/docs/controlling-file-size/#removing-unused-css 
      content: [
        '../**/**/**/*.php',
        '../**/**/*.php',
        '../**/*.php',
        '../*.php'
      ]
    },
    theme: {
      minHeight: {},
      transitionDuration: {},
      boxShadow: {
        sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
        DEFAULT: '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
        md: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
        lg: '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
        xl: '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
        '2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
        '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
        inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
        none: 'none',
      },
      container: {
        center: true,
        padding: {
          default: '1rem',
          sm: '1rem',
          lg: '1rem',
          xl: '5rem'
        }
      },
      extend: {
        transitionProperty: ['hover', 'focus'],
        margin: {},
        height: {},
        colors: {
          'darkgreenab': '#1e320a',
          'greenab': '#326419',
          'lightgreen': '#e6ffd2',
          'redab': '#C80000',
        },
        spacing: {},
        borderRadius: {},
        inset: {
          "1/2": '50%'
        },
        minHeight: {}
      }
    },
    variants: {},
    plugins: []
  }
  