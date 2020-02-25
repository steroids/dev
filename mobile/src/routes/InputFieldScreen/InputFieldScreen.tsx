import React from "react";
import InputField from '@steroidsjs/core/ui/form/InputField';
import {Text, View, ScrollView} from 'react-native';
import {StackNavigationProp} from '@react-navigation/stack';
import {bem} from '@steroidsjs/core/hoc';
import {IBemHocOutput} from '@steroidsjs/core/hoc/bem';

interface IInputScreenPrivateProps extends IBemHocOutput {
    navigation: StackNavigationProp<any, any>,
}

@bem('InputField')
export default class InputFieldScreen extends React.Component<IInputScreenPrivateProps> {
    static navigationOptions = {
        title: 'Input',
    };

    render() {
        const bem = this.props.bem;

        return (
            <ScrollView>
                <Text style={bem('h1', bem.element('title'))}>Input field</Text>
                <View>
                    <Text style={bem('h4', bem.element('title'))}>Regular</Text>
                    <InputField style={bem('input')}/>
                </View>
                <View>
                    <Text style={bem('h4', bem.element('title'))}>Disabled</Text>
                    <InputField
                        style={bem('input')}
                        disabled={true}
                    />
                </View>
                <View>
                    <Text style={bem('h4', bem.element('title'))}>Big</Text>
                    <InputField style={bem('input')}/>
                </View>
                <View>
                    <Text style={bem('h4', bem.element('title'))}>Placeholder</Text>
                    <InputField
                        style={bem('input')}
                        placeholder={'Placeholder'}
                    />
                </View>
                <View>
                    <Text style={bem('h4', bem.element('title'))}>Invalid</Text>
                    <InputField
                        style={bem('input')}
                        // TODO doesn't work
                        errors={[
                            'There you can see error detailed info'
                        ]}
                    />
                </View>
            </ScrollView>
        );
    }
}