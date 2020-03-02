import React from "react";
import InputField from '@steroidsjs/core/ui/form/InputField';
import {Text, View, ScrollView, KeyboardAvoidingView} from 'react-native';
import {StackNavigationProp} from '@react-navigation/stack';
import {bem} from '@steroidsjs/core/hoc';
import {IBemHocOutput} from '@steroidsjs/core/hoc/bem';
import styles from './InputFieldScreenStyles';

interface IInputScreenPrivateProps extends IBemHocOutput {
    navigation: StackNavigationProp<any, any>,
}

@bem('InputFieldScreen', styles)
export default class InputFieldScreen extends React.Component<IInputScreenPrivateProps> {
    static navigationOptions = {
        title: 'Input',
    };

    render() {
        const bem = this.props.bem;

        return (
            <KeyboardAvoidingView
                style={bem('keyboard-avoid-view')}
                behavior="padding"
                keyboardVerticalOffset={80}
            >
                <ScrollView style={bem('screen')}>
                    <Text style={bem('h1')}>Input field</Text>
                    <View>
                        <Text style={bem('h5')}>Regular</Text>
                        <InputField style={bem(bem.element('input'))}/>
                    </View>
                    <View>
                        <Text style={bem('h5')}>Sizing</Text>
                        <InputField
                            size={'sm'}
                            style={bem(bem.element('input'))}
                        />
                        <InputField
                            size={'md'}
                            style={bem(bem.element('input'))}
                        />
                        <InputField
                            size={'lg'}
                            style={bem(bem.element('input'))}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Placeholder</Text>
                        <InputField
                            style={bem(bem.element('input'))}
                            placeholder={'Placeholder'}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Invalid</Text>
                        <InputField
                            style={bem(bem.element('input'))}
                            errors={[
                                'There you can see error detailed info'
                            ]}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Disabled</Text>
                        <InputField
                            style={bem(bem.element('input'))}
                            disabled={true}
                        />
                    </View>
                </ScrollView>
            </KeyboardAvoidingView>
        );
    }
}