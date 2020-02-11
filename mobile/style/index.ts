import {button, createVariables} from '@steroidsjs/native/style';

const variables = createVariables({
    primary: '#f20100',
});

let classes = {};
classes = button(variables, classes);

export default {
    variables,
    classes,
};
