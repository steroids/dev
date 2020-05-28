export default (variables, classes) => {
    classes = {
        ...classes,

        'screen': {
            paddingHorizontal: 20,
            marginBottom: 20,
        },

        'keyboard-avoid-view': {
            flex: 1
        }
    };

    return classes;
};