const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            fontSize: tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme)),
            fontSize: {
                '10': '0.625rem',
                '11': '0.688rem',
                '13': '0.813rem',
                '27': '1.688rem'

            },
            borderColor: theme => theme('colors'),
            borderColor: {
                'dark-navy': '#1F2024',
                'gray' : '#cccccc',
                'green' : '#86c540'
            },
            // colors:{

            // },
            backgroundColor: theme => theme('colors'),
            backgroundColor: {
                'dark-navy'    : '#1F2024',
                'black-russian': '#1F2024',
                'green'        : '#86c540',
                'dark-green'   : '#72b12c',
                'light-blue'   : '#1DA1F2',
                'red-violet'   : '#bc2a8d',
                'dark-blue'    : '#0077b5',
                'light-grey'   : '#232D35',
                'light-gray'   : '#ccc',
                'red'          : '#FF0000'
          },
            textColor: theme => theme('colors'),
            textColor: {
                'black-light': '#1C1C1C',
                'dark-green'   : '#72b12c',
                'dark-blue'  : '#1e73be',
                'dark-gray'  : '#a3a3a3',
                'dark-blue'  : '#516eab',
                'light-blue'  : '#29c5f6',
                'light-green'  : '#7bbf6a',
                'blue-7'  : '#0A66C2',
                'green'        : '#86c540',
                'light-gray' : '#ccc',
                'heading-color':'#1F2024'

            },

            placeholderColor: theme => theme('colors'),
            placeholderColor: {
                'black-light': '#1C1C1C',
                'dark-gray'  : '#a3a3a3'
            },
            backgroundSize:{
                '50%':'50%',
                '120%': '120%'
            },
            width: {
                '110' : '6.875rem',
                '1/03': '30%',
                '3/3': '70%',
                '20%': '20%',
                '300px': '300px',
                '150px':'150px',
                '270px':'270px'

            },
            maxWidth: {
                '784px': '784px',
                '370px':'370px',
                '350px':'350px',
                '270px': '270px',
                '190px':'190px',
                '174px':'174px',
                '85px':'85px',
                '730px':'730px',
                '760px':'760px',
                '477px':'477px',
                '365px':'365px',
                '319px':'319px',
                '289px':'289px',
                '164px':'164px'
            },
            height: {
                '50': '50px',
                lg: '30px',
                '210px':'210px',
                '100px':'100px',
                '48px':'48px'
            },
            minHeight: {
                '480px': '480px',
                '60px': '60px',
                '210px':'210px',
                '100px':'100px'
            },
            margin: {
                '03': '0.188rem',
                '15': '0.938rem',
            },
            lineHeight: {
                '21': '1.313rem',
                '24': '1.313rem',
                '30': '1.875rem',
                '34': '2.125rem'
            },
            padding: {
                '3': '0.188rem',
                '7': '0.438rem',
                '11': '0.688rem',
                '13': '0.813rem',
                '15': '0.938rem',
                '19': '1.188rem',
                '22': '1.375rem',
                '26px': '26px',
                '30': '1.875rem',
                '350': '21.875rem'
            },
            spacing: {
                '31': '1.938rem'
              },
            borderWidth: {
                '5': '5px',
                '1': '1px'
            },
            fontFamily: {
                Jost: ['Jost', 'sans-serif']
            },
        },
        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '768px',
            'lg': tailpress.theme('settings.layout.contentSize', theme),
            'xl': tailpress.theme('settings.layout.wideSize', theme),
            '2xl': '1440px'
        }
    },
    plugins: [
        tailpress.tailwind
    ]
};
