// TODO for RN replace with this config
module.exports = function (api) {
    api.cache(false);
    return {
        plugins: [
            ['module-resolver', {
                'root': ['./mobile/src'],
                'alias': {
                    'reducers': __dirname + '/mobile/src/reducers',
                    '@steroidsjs/core': __dirname + '/steroids/react',
                    '@steroidsjs/native': __dirname + '/steroids/react-native',
                },
            }],
            ["@babel/plugin-proposal-decorators", { "legacy": true }]
        ],
        presets: [
            'babel-preset-expo',
        ],
    };
};

