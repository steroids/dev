require('./steroids/react-webpack')
    .config({
        port: 9991,
        sourcePath: __dirname + '/frontend',
        staticPath: '',
        baseUrl: 'frontend/',
        webpack: {
            resolve: {
                alias: {
                    '@steroidsjs/core': __dirname + '/steroids/react',
                    '@steroidsjs/bootstrap': __dirname + '/steroids/react-bootstrap',
                },
            },
        },
        devServer: {
            historyApiFallback: {
                index: '/frontend/index.html',
            },
            proxy: [
                {
                    context: ['/api'],
                    target: process.env.APP_BACKEND_URL || 'http://steroids.loc',
                    changeOrigin: true,
                },
            ],
        },
    })
    .base(__dirname + '/frontend/index.tsx');
