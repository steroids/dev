/*import { createStackNavigator } from "react-navigation-stack";
import { createAppContainer } from 'react-navigation';
import {createMaterialTopTabNavigator} from "react-navigation-tabs";
import HelloScreen from "../screens/HelloScreen";
import AnotherScreen from "../screens/AnotherScreen";
import * as React from "react";

export default class Router extends React.PureComponent {
    render() {
        const Router = createAppContainer(this.navigationConfig);

        return <Router/>;
    }

    navigationConfig = createStackNavigator({
        screen: createMaterialTopTabNavigator({
            hello: HelloScreen,
            another: AnotherScreen
        }, {
            initialRouteName: 'hello',
            swipeEnabled: false,
            tabBarPosition: 'bottom',
            tabBarOptions: {
                showLabel: true,
            },
        })
    })
}*/




import AnotherScreen from './AnotherScreen';
import HelloScreen from './HelloScreen';

export const ROUTE_ROOT = 'root';
export const ROUTE_HOME = 'home';
export const ROUTE_ANOTHER = 'another';

const roles = [null];

export default {
    id: ROUTE_ROOT,
    exact: true,
    roles,
    items: {
        [ROUTE_HOME]: {
            component: HelloScreen,
        },
        [ROUTE_ANOTHER]: {
            component: AnotherScreen,
        },
    },
};
