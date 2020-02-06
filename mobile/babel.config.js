module.exports = function (api) {
    api.cache(false);
    return {
        plugins: [
            ['module-resolver', {
                'root': ['./src'],
                'alias': require('./metro.config').resolver.extraNodeModules,
            }],
        ],
        presets: [
            'babel-preset-expo',
        ],
    };
};
