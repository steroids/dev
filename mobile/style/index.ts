import getStyles from '@steroidsjs/native/style';

// TODO not really convenient...
import HelloScreenStyles from '../src/routes/HelloScreen/HelloScreenStyles';
import InputFieldScreenStyles from '../src/routes/InputFieldScreen/InputFieldScreenStyles';
import ButtonScreenStyles from '../src/routes/ButtonScreen/ButtonScreenStyles';
import globals from "./globals";

const myVariables = {};

let {variables, classes} = getStyles(myVariables);

classes = {
    ...classes,
    ...HelloScreenStyles,
    ...InputFieldScreenStyles,
    ...ButtonScreenStyles(variables, classes),
    ...globals(variables, classes)
};

export default {
    variables,
    classes,
};
