import getStyles from '@steroidsjs/native/style';
import globals from "./globals";

const myVariables = {};

let {variables, classes} = getStyles(myVariables);

classes = {
    ...classes,
    ...globals(variables, classes)
};

export default {
    variables,
    classes,
};
