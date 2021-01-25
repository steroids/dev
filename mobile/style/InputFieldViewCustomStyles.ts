export default (variables, classes) => {
    classes = {
        ...classes,
        'InputFieldView_invalid': {
            backgroundColor: 'red',
        },
        'InputFieldView__input_invalid': {
            backgroundColor: 'red',
        },
    };

    return classes;
};