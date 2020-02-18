export default (variables, classes) => {
    classes = {
        ...classes,

        'screen': {
            paddingHorizontal: 20,
            marginBottom: 20,
        },
    };

    return classes;
};