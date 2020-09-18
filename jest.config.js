module.exports = {
    verbose: true,
    testRegex: '(/frontendTests/__tests__/.*|(\\.|/)(test|spec))\\.tsx?$',
    transformIgnorePatterns: ['node_modules/(?!lodash-es/*)'],
    setupFilesAfterEnv: [
      '<rootDir>/frontendTests/setupTests.tsx'
    ],
    moduleNameMapper: {
        '^reducers$': '<rootDir>/steroids/react/reducers',
        '@steroidsjs/core/(.*)': '<rootDir>/steroids/react/$1',
        '@steroidsjs/bootstrap': '<rootDir>/steroids/react-bootstrap',
        '@steroidsjs/bootstrap/(.*)': '<rootDir>/steroids/react-bootstrap/$1',
        '\\.(css|less|sass|scss)$': '<rootDir>/frontendTests/__mocks__/styleMock.ts',
        '\\.(jpg|jpeg|png|gif|eot|otf|webp|svg|ttf|woff|woff2|mp4|webm|wav|mp3|m4a|aac|oga)$': '<rootDir>/frontendTests/__mocks__/fileMock.ts',
    }
};