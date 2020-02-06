import React from "react";
import InputField from '@steroidsjs/core/ui/form/InputField';
import InputFieldView from '../ui/form/InputField/InputFieldView';

export default class HelloScreen extends React.Component {
    static navigationOptions = {
        title: 'Hello',
    };

    render() {
        return (
            <InputField
                layout={false}
                view={InputFieldView}
            />
        );
    }
}