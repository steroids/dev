import HelloScreen from './HelloScreen/HelloScreen';
import InputFieldScreen from './InputFieldScreen/InputFieldScreen';

import {ROUTE_ROOT, ROUTE_HOME, ROUTE_INPUT_FIELD, ROUTE_BUTTON_FIELD, ROUTE_DROPDOWN} from "./routeNames";
import ButtonScreen from "./ButtonScreen/ButtonScreen";
import DropDownScreen from "./DropDownScreen/DropDownScreen";

const roles = [null];

export default {
    id: ROUTE_ROOT,
    exact: true,
    roles,
    items: {
        [ROUTE_HOME]: {
            component: HelloScreen,
        },
        [ROUTE_INPUT_FIELD]: {
            component: InputFieldScreen,
        },
        [ROUTE_BUTTON_FIELD]: {
            component: ButtonScreen,
        },
        [ROUTE_DROPDOWN]: {
            component: DropDownScreen,
        }
    },
    // drawer: [
    //     {
    //         id: ROUTE_INPUT_FIELD,
    //         label: 'Input field'
    //     },
    //     {
    //         id: ROUTE_BUTTON_FIELD,
    //         label: 'Button'
    //     },
    //
    // ]
};