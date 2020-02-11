import React from "react";
import InputField from '@steroidsjs/core/ui/form/InputField';
import InputFieldView from '../ui/form/InputField/InputFieldView';
import {View} from 'react-native';
import {Button} from 'react-native-paper';
import {StackNavigationProp} from '@react-navigation/stack';
import {ROUTE_ANOTHER} from './index';
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
                <InputField
                    layout={false}
                    view={InputFieldView}
                />
                <Button
                    mode="contained"
                    onPress={() => this.props.navigation.navigate(ROUTE_ANOTHER)}
                >
                    Go to ANOTHER
                </Button>
            </View>
        );
    }
}