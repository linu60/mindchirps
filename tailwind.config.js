export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      fontFamily: {
        satisfy: ['Satisfy', 'cursive'],
      },
      colors: {
        primary: '#1e525b',
        accent: '#c2f2fc',
        muted: '#646a6b',
      },
    },
  },
  plugins: [],
}
