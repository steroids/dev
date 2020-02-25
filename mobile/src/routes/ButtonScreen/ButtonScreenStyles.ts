export default (variables, classes) => {
    classes = {
        ...classes,

        'ButtonScreen__button': {
            marginBottom: 10
        }
    };

    return classes;
};