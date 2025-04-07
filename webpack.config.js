const path = require('path')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

module.exports = {
  entry: {
    main: './assets/src/js/main.js', // Your main JS file
  },
  output: {
    filename: '[name].js', // This will output 'main.js' in the 'assets/js/' folder
    path: path.resolve(__dirname, 'assets/js'),
  },
  module: {
    rules: [
      // CSS handling
      {
        test: /\.css$/,
        use: [
          'style-loader',
          'css-loader',
          'postcss-loader', // Required for Tailwind to work
        ],
      },
      // JavaScript handling (using Babel to transpile modern JS)
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: 'babel-loader',
      },
    ],
  },
  plugins: [
    // BrowserSync setup for live reloading
    new BrowserSyncPlugin({
      proxy: 'http://thrive-guitar.test/', // Your WordPress development URL
      files: ['**/*.php', 'assets/**/*.css', 'assets/**/*.js'], // Watch PHP, CSS, and JS files for changes
      injectChanges: true,
      open: true,
      // reloadOnRestart: true,
    }),
  ],
  watch: true, // Enable watching for file changes
}
