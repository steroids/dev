module.exports = {
    resolver: {
        //blacklistRE: /my-react-native-library\/.*node_modules\/react-native\/.*/,
        //blacklistRE: /(.*\/__fixtures__\/.*|node_modules\/react\/dist\/.*|website\/node_modules\/.*|heapCapture\/bundle\.js|.*\/__tests__\/.*|steroids-dev\/node_modules)$/,
        extraNodeModules: {
            'reducers': __dirname + '/src/reducers',
            '@steroidsjs/core': __dirname + '/../steroids/react',
        }
    },
    watchFolders: [
        __dirname + '/../steroids/react',
    ],
};