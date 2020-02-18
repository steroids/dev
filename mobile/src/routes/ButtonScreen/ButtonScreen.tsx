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
            <ScrollView style={bem('screen')}>
                <Text style={bem('h1', bem.element('title'))}>Button</Text>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>Loading</Text>
                    <Button
                        onClick={() => this.showAlertAsync()}
                    >
                        Press me to load
                    </Button>
                </View>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>Custom styling</Text>
                    <Button
                        onClick={this.showAlert}
                        style={bem(
                            bem.element('button'),
                            {
                                borderWidth: 1,
                                borderColor: 'transparent',
                                borderRadius: 50,
                                marginHorizontal: 20,

                                shadowColor: 'black',
                                shadowOpacity: 0.5,
                                elevation: 5,
                            }
                        )}
                    >
                        Custom
                    </Button>
                </View>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>Big</Text>
                    <Button
                        onClick={this.showAlert}
                        size={'lg'}
                    >
                        Big one
                    </Button>
                </View>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>Small</Text>
                    <Button
                        onClick={this.showAlert}
                        size={'sm'}
                    >
                        Small one
                    </Button>
                </View>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>Colors</Text>
                    <Button style={bem.element('button')} color={'danger'}>danger</Button>
                    <Button style={bem.element('button')} color={'info'}>info</Button>
                    <Button style={bem.element('button')} color={'success'}>success</Button>
                    <Button style={bem.element('button')} color={'secondary'}>secondary</Button>
                </View>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>Text color auto picker</Text>
                    <Button
                        style={bem.element('button')}
                        onClick={this.showAlert}
                        color={'yellow'}
                    >
                        Light Back
                    </Button>
                    <Button
                        style={bem.element('button')}
                        onClick={this.showAlert}
                        color={'black'}
                    >
                        Dark Back
                    </Button>
                    <Button
                        style={bem.element('button')}
                        onClick={this.showAlert}
                        color={'success'}
                        textColor={'yellow'}
                    >
                        Custom coloring
                    </Button>
                </View>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>With icon</Text>
                    <Button icon={require("../../../assets/icon.png")} onClick={this.showAlert} color={'pink'}>
                        Icon
                    </Button>
                </View>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>Disabled</Text>
                    <Button onClick={this.showAlert} disabled={true}>
                        Disabled
                    </Button>
                </View>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>Outline</Text>
                    <Button onClick={this.showAlert} outline={true}>
                        Outline
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