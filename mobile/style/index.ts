import getStyles from '@steroidsjs/native/style';

// TODO not really convenient...
import HelloScreenStyles from '../src/routes/HelloScreen/HelloScreenStyles';
import InputFieldScreenStyles from '../src/routes/InputFieldScreen/InputFieldScreenStyles';
import ButtonScreenStyles from '../src/routes/ButtonScreen/ButtonScreenStyles';

const variables = {
    //primary: '#6610f2',
};

let classes = getStyles(variables);

classes = {
    ...classes,
    ...HelloScreenStyles,
    ...InputFieldScreenStyles,
    ...ButtonScreenStyles
};

export default {
    variables,
    classes,
};
