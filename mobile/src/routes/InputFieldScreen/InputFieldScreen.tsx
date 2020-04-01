import React from "react";
import InputField from '@steroidsjs/core/ui/form/InputField';
import {
    Text,
    View,
    ScrollView,
    KeyboardAvoidingView,
    Image,
    ActivityIndicator,
    TouchableNativeFeedback
} from 'react-native';
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
                keyboardVerticalOffset={100}
            >
                <ScrollView style={bem('screen')}>
                    <Text style={bem('h1')}>Input field</Text>
                    <View>
                        <Text style={bem('h5')}>Label</Text>
                        <InputField
                            style={bem(bem.element('input'))}
                            label={'This is an input label'}
                        />
                        <InputField
                            style={bem(bem.element('input'))}
                            label={'This input is required to fill'}
                            required={true}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Icon</Text>
                        <InputField
                            size={'sm'}
                            style={bem(bem.element('input'))}
                            prefixElement={require("../../../assets/icon.png")}
                        />
                        <InputField
                            size={'md'}
                            style={bem(bem.element('input'))}
                            suffixElement={require("../../../assets/icon.png")}
                        />
                        <InputField
                            size={'lg'}
                            style={bem(bem.element('input'))}
                            suffixElement={require("../../../assets/icon.png")}
                            prefixElement={require("../../../assets/icon.png")}
                        />
                        <InputField
                            size={'lg'}
                            style={bem(bem.element('input'))}
                            prefixElement={<ClickableIcon/>}
                            placeholder={'<--- This is clickable'}
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
                                'Error #1',
                                'Error #1',
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
                    <View>
                        <Text style={bem('h5')}>Hint</Text>
                        <InputField
                            style={bem(bem.element('input'))}
                            hint={'This is a hint message'}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Horizontal layout</Text>
                        <InputField
                            style={bem(bem.element('input'))}
                            layout={{layout: 'horizontal', cols: [7, 5]}}
                            label={'Long variant of label'}
                        />
                        <InputField
                            style={bem(bem.element('input'))}
                            layout={{layout: 'horizontal', cols: [4, 8]}}
                            label={'Short label'}
                        />
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
                        <Text style={bem('h5')}>Multiline</Text>
                        <InputField
                            style={bem(bem.element('input'))}
                            multiline={4}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Keyboard type</Text>
                        <InputField
                            style={bem(bem.element('input'))}
                            label={'Phone pad'}
                            keyboardType={'phone-pad'}
                        />
                        <InputField
                            style={bem(bem.element('input'))}
                            label={'Number pad'}
                            keyboardType={'number-pad'}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Autocomplete type</Text>
                        <InputField
                            style={bem(bem.element('input'))}
                            label={'E-mail'}
                            autoCompleteType={'email'}
                        />
                        <InputField
                            style={bem(bem.element('input'))}
                            label={'Phone'}
                            autoCompleteType={'tel'}
                        />
                    </View>
                </ScrollView>
            </KeyboardAvoidingView>
        );
    }
}

class ClickableIcon extends React.Component<any, any>{
    constructor(props) {
        super(props);

        this.state = {
            clicked: false
        }
    }
    render() {
        return <TouchableNativeFeedback onPress={() => {this.setState({clicked: !this.state.clicked})}}>
            {!this.state.clicked && (
                <Image
                    source={require("../../../assets/icon.png")}
                    style={{width: 30, height: 30}}
                />
            ) || (
                <ActivityIndicator color={'gray'} size={'large'}/>
            )}
        </TouchableNativeFeedback>;
    }
}