import {Text, View} from "react-native";
import React from "react";

export default class AnotherScreen extends React.Component {
    static navigationOptions = {
        title: 'Another',
    };

    render() {
        return <Text>And this is another screen.123</Text>;
    }
}