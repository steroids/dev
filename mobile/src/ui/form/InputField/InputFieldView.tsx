import React from 'react';
import {TextInput} from 'react-native';

export default class InputFieldView extends React.PureComponent<any> {

    render() {
        return (
            <TextInput
                underlineColorAndroid='transparent'
                placeholder={this.props.placeholder}
                value={this.props.input.value}
                onChangeText={this.props.input.onChange}
            />
        );
        /*return (
            <input
                className={bem(
                    bem.block({
                        size: this.props.size,
                    }),
                    'form-control',
                    'form-control-' + this.props.size,
                    this.props.isInvalid && 'is-invalid',
                    this.props.className
                )}
                {...this.props.inputProps}
                type={this.props.type}
                placeholder={this.props.placeholder}
                disabled={this.props.disabled}
                required={this.props.required}
            />
        );*/
    }

}
