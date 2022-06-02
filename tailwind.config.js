module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                '8-bit': ['"Press Start 2P"', 'cursive'],
                'body': ['Comfortaa', 'cursive'],
            },
            colors: {
                primary: '#0D1821',
                secondary: '#E03616',
                accent: '#008148',
            },
            typography: {
                DEFAULT: {
                    css: {
                        color: '#fff'
                    }
                }
            }
        },
    },
    plugins: [
        require('@tailwindcss/typography')
    ],
}
