module.exports = function (api) {
    api.cache(false);
    return {
        presets: [
            "babel-preset-expo",
        ],
        plugins: [
            "react-native-classname-to-style",
            [
                "react-native-platform-specific-extensions",
                { extensions: ["scss", "sass"] }
            ],
            ['module-resolver', {
                'root': ['./mobile/src'],
                'alias': {
                    'reducers': __dirname + '/mobile/src/reducers',
                    '@steroidsjs/core': __dirname + '/steroids/react',
                    '@steroidsjs/native': __dirname + '/steroids/react-native',
                },
            }],
        ],
    };
};
