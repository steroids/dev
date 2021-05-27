process.env.APP_BACKEND_URL = process.env.APP_BACKEND_URL || 'https://steroids.kozhindedev.com';

require('./steroids/react-webpack')
    .config({
        port: 9991,
        sourcePath: __dirname + '/frontend',
        staticPath: '',
        baseUrl: 'frontend/',
        inlineSvg: true,
        serverPath: './steroids/ssr',
        webpack: {
            resolve: {
                alias: {
                    '@steroidsjs/core/build': __dirname + '/steroids/react/build',
                    '@steroidsjs/core/docs': __dirname + '/steroids/react/docs',
                    '@steroidsjs/core': __dirname + '/steroids/react/src',
                    '@steroidsjs/bootstrap': __dirname + '/steroids/react-bootstrap/src',
                },
            },
        },
    })
    .base(__dirname + '/frontend/index.tsx');
