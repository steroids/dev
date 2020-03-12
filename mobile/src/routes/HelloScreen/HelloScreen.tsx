import React from "react";
import {View} from 'react-native';
import {Button} from 'react-native-paper';
import {StackNavigationProp} from '@react-navigation/stack';
import {ROUTE_INPUT_FIELD, ROUTE_BUTTON_FIELD, ROUTE_DROPDOWN} from '../routeNames';
import {bem} from '@steroidsjs/core/hoc';
import {IBemHocOutput} from '@steroidsjs/core/hoc/bem';

interface IHelloScreenPrivateProps extends IBemHocOutput {
    navigation: StackNavigationProp<any, any>,
}

@bem('HelloScreen')
export default class HelloScreen extends React.Component<IHelloScreenPrivateProps> {
    static navigationOptions = {
        title: 'Hello',
    };

    render() {
        const bem = this.props.bem;
        return (
            <View>
                <Button
                    mode="contained"
                    onPress={() => this.props.navigation.navigate(ROUTE_INPUT_FIELD)}
                    style={bem('btn btn-primary', bem.element('button'))}
                >
                    INPUT FIELD
                </Button>
                <Button
                    mode="contained"
                    onPress={() => this.props.navigation.navigate(ROUTE_BUTTON_FIELD)}
                    style={bem('btn btn-indigo', bem.element('button'))}
                >
                    BUTTON
                </Button>
                <Button
                    mode="contained"
                    onPress={() => this.props.navigation.navigate(ROUTE_DROPDOWN)}
                    style={bem('btn btn-indigo', bem.element('button'))}
                >
                    DROPDOWN
                </Button>
            </View>
        );
    }
}