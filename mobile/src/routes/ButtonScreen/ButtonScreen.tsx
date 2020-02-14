import React from "react";
import {Alert, ScrollView, Text, TouchableNativeFeedback, View} from 'react-native';
import {StackNavigationProp} from '@react-navigation/stack';
import {bem} from '@steroidsjs/core/hoc';
import {IBemHocOutput} from '@steroidsjs/core/hoc/bem';
import Button from '@steroidsjs/core/ui/form/Button';

interface IButtonScreenPrivateProps extends IBemHocOutput {
    navigation: StackNavigationProp<any, any>,
}

@bem('ButtonScreen')
export default class ButtonScreen extends React.Component<IButtonScreenPrivateProps> {
    static navigationOptions = {
        title: 'Button',
    };

    render() {
        const bem = this.props.bem;

        return (
            <ScrollView>
                <Text style={bem('h1', bem.element('title'))}>Button</Text>
                <View>
                    <Text style={bem('h4', bem.element('title'))}>Loading</Text>
                    <Button
                        onClick={() => this.showAlertAsync()}
                    >
                        Press me to load
                    </Button>
                </View>
                <View>
                    <Text style={bem('h4', bem.element('title'))}>Big</Text>
                    <Button
                        onClick={this.showAlert}
                        size={'lg'}
                    >
                        Big one
                    </Button>
                </View>
                <View>
                    <Text style={bem('h4', bem.element('title'))}>Custom styling</Text>
                    <Button
                        onClick={this.showAlert}
                        size={'lg'}
                        style={{borderWidth: 1, borderColor: '#000'}}
                    >
                        Custom
                    </Button>
                </View>
            </ScrollView>
        );
    }

    showAlertAsync() {
        return new Promise((resolve) => {
            setTimeout(() => {
                resolve();
                this.showAlert();
            }, 1500);
        });
    }

    showAlert() {
        Alert.alert('Button pressed!', 'Go further!', [
            {
                text: 'Ok',
                style: 'cancel',
            },
        ]);
    }
}