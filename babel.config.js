module.exports = function (api) {
    api.cache(false);
    return {
        plugins: [
            ['module-resolver', {
                'root': ['./mobile/src'],
                'alias': require('./metro.config').resolver.extraNodeModules,
            }],
        ],
        presets: [
            'babel-preset-expo',
        ],
    };
};
