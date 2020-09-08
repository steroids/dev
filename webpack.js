process.env.APP_BACKEND_URL = process.env.APP_BACKEND_URL || 'https://steroids.kozhindedev.com';

require('./steroids/react-webpack')
    .config({
        port: 9991,
        sourcePath: __dirname + '/frontend',
        staticPath: '',
        baseUrl: 'frontend/',
        inlineSvg: true,
        webpack: {
            resolve: {
                alias: {
                    '@steroidsjs/core': __dirname + '/steroids/react',
                    '@steroidsjs/bootstrap': __dirname + '/steroids/react-bootstrap',
                },
            },
        },
    })
    .base(__dirname + '/frontend/index.tsx');
