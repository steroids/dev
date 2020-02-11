import {button, createVariables} from '@steroidsjs/native/style';

const variables = createVariables({
    //primary: '#6610f2',
});

let classes = {};
classes = button(variables, classes);

classes = {
    ...classes,

    HelloScreen__button: {
        //backgroundColor: '#f0f0f0',
    }
} ;

export default {
    variables,
    classes,
};
