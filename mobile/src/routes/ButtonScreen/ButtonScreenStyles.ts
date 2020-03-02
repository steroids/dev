export default (variables, classes) => {
    classes = {
        ...classes,

        'ButtonScreen__button': {
            marginBottom: 10,

            'ButtonView_outline': {
                borderWidth: 5
            },
        },
        'ButtonScreen__row': {
            flexDirection: 'row',
            flexWrap: 'wrap',
        },
        'ButtonScreen__row-button': {
            margin: 4,
        },
    };

    return classes;
};