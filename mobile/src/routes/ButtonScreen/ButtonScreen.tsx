import React from "react";
import {Alert, ScrollView, Text, TouchableNativeFeedback, View} from 'react-native';
import {StackNavigationProp} from '@react-navigation/stack';
import {bem} from '@steroidsjs/core/hoc';
import {IBemHocOutput} from '@steroidsjs/core/hoc/bem';
import Button from '@steroidsjs/core/ui/form/Button';
import styles from './ButtonScreenStyles';

interface IButtonScreenPrivateProps extends IBemHocOutput {
    navigation: StackNavigationProp<any, any>,
}

@bem('ButtonScreen', styles)
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
                    <Button onClick={() => this.async()}>
                        Press me to load
                    </Button>
                </View>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>Sizing</Text>
                    <Button
                        size={'sm'}
                        style={bem.element('button')}
                    >
                        Small
                    </Button>
                    <Button
                        size={'md'}
                        style={bem.element('button')}
                    >
                        Middle
                    </Button>
                    <Button
                        size={'lg'}
                        style={bem.element('button')}
                    >
                        Big
                    </Button>
                </View>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>Coloring</Text>

                    <View style={bem(bem.element('row'))}>
                        <Button
                            style={bem.element('row-button')}
                            color={'danger'}
                        >
                            danger
                        </Button>
                        <Button
                            style={bem.element('row-button')}
                            color={'info'}
                        >
                            info
                        </Button>
                        <Button
                            style={bem.element('row-button')}
                            color={'success'}
                        >
                            success
                        </Button>
                        <Button
                            style={bem.element('row-button')}
                            color={'secondary'}
                        >
                            secondary
                        </Button>
                        <Button
                            style={bem.element('row-button')}
                            color={'indigo'}
                            textColor={'yellow'}
                        >
                            Custom
                        </Button>
                        <Button
                            style={bem.element('row-button')}
                            color={'pyrple'}
                            textColor={'orange'}
                        >
                            Custom
                        </Button>
                    </View>
                </View>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>Text color auto picker</Text>
                    <Button
                        style={bem.element('button')}
                        color={'yellow'}
                    >
                        Light Back
                    </Button>
                    <Button
                        style={bem.element('button')}
                        color={'black'}
                    >
                        Dark Back
                    </Button>
                </View>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>Icon</Text>
                    <Button
                        style={bem.element('button')}
                        icon={require("../../../assets/icon.png")}
                        size={'sm'}
                        color={'pink'}
                        onClick={() => this.async()}
                    >
                        Icon
                    </Button>
                    <Button
                        style={bem.element('button')}
                        icon={require("../../../assets/icon.png")}
                        color={'pink'}
                        onClick={() => this.async()}
                    >
                        Icon
                    </Button>
                    <Button
                        style={bem.element('button')}
                        icon={require("../../../assets/icon.png")}
                        size={'lg'}
                        color={'pink'}
                        onClick={() => this.async()}
                    >
                        Icon
                    </Button>
                </View>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>Disabled</Text>
                    <Button  disabled={true}>
                        Disabled
                    </Button>
                </View>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>Outline</Text>
                    <Button  outline={true}>
                        Outline
                    </Button>
                </View>
                <View>
                    <Text style={bem('h5', bem.element('title'))}>Custom styling</Text>

                    <View style={{flex: 1, flexDirection: 'row', justifyContent: 'center'}}>
                        <Button
                            style={bem(
                                bem.element('button'),
                                {
                                    borderWidth: 1,
                                    borderColor: 'transparent',
                                    borderRadius: 50,

                                    shadowColor: 'black',
                                    shadowOpacity: 0.5,
                                    elevation: 5,

                                    flex: 0,
                                    width: 150,
                                    height: 70
                                }
                            )}
                        >
                            Custom
                        </Button>
                    </View>
                </View>
            </ScrollView>
        );
    }

    async() {
        return new Promise((resolve) => {
            setTimeout(() => {
                resolve();
            }, 1500);
        });
    }
}