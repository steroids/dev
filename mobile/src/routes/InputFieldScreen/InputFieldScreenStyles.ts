export default (variables, classes) => {
    classes = {
        ...classes,

        'InputFieldScreen__input': {
            marginBottom: 10,
        },

        'InputFieldScreen__input_custom': {
            marginBottom: 10,

            // "in-place" styles which allow to override inner styles of components
            'InputFieldView': {
                backgroundColor: 'green',
            },

            'InputFieldView__input': {
                backgroundColor: 'green',
            },
        }
    };

    return classes;
};