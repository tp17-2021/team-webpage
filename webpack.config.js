// config from https://wptips.dev/webpack-in-wordpress/

const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;

var path = require('path');

// change these variables to fit your project
const jsPath= './js';
const cssPath = './css';
const outputPath = 'dist';
const localDomain = 'http://mysite.local';
const entryPoints = {
    // 'app' is the output name, people commonly use 'bundle'
    // you can have more than 1 entry point
    'app': jsPath + '/app.js',
};

module.exports = {
    entry: entryPoints,
    output: {
        path: path.resolve(__dirname, outputPath),
        filename: '[name].js',
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '[name].css',
        }),

        //new BundleAnalyzerPlugin(),

        // Uncomment this if you want to use CSS Live reload
        /*
        new BrowserSyncPlugin({
          proxy: localDomain,
          files: [ outputPath + '/*.css' ],
          injectCss: true,
        }, { reload: false, }),
        */
    ],
    module: {
        rules: [
            {
                test: /\.s?[c]ss$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'sass-loader'
                ]
            },
            {
                test: /\.sass$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    {
                        loader: 'sass-loader',
                        options: {
                            sassOptions: { indentedSyntax: true }
                        }
                    }
                ]
            },
            {
                test: /\.(jpg|jpeg|png|gif|woff|woff2|eot|ttf|svg)$/i,
                use: 'url-loader?limit=1024'
            }
        ]
    },
};
