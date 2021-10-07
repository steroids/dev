const path = require('path');

process.env.APP_BACKEND_URL = process.env.APP_BACKEND_URL || 'https://steroids.kozhindedev.com';

const webpackConfig = {
    resolve: {
        alias: {
            '@steroidsjs/core/build': __dirname + '/steroids/react/build',
            '@steroidsjs/core/docs': __dirname + '/steroids/react/docs',
            '@steroidsjs/core': __dirname + '/steroids/react/src',
            '@steroidsjs/bootstrap': __dirname + '/steroids/react-bootstrap/src',
        },
    },
};

require('./steroids/react-webpack')
    .config({
        port: 9991,
        sourcePath: __dirname + '/frontend',
        staticPath: '',
        baseUrl: 'frontend/',
        inlineSvg: true,
        // @todo correct at least target field
        devServer: {
            proxy: [
                {
                    context: ['/api'],
                    target: 'https://payapp.dev.kozhindev.com/',
                    changeOrigin: true,
                },
            ],
        },
        serverPath: './steroids/ssr/index.ts',
        applicationPath: '/frontend/Application.tsx',
        initActionPath: '/frontend/shared/Layout/Layout.tsx',
        webpack: webpackConfig,
        ssr: webpackConfig
    })
    .base(__dirname + '/frontend/index.tsx');
