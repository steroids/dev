import HelloScreen from './HelloScreen/HelloScreen';
import InputFieldScreen from './InputFieldScreen/InputFieldScreen';

import {
    ROUTE_HOME,
    ROUTE_INPUT_FIELD,
    ROUTE_BUTTON_FIELD,
    ROUTE_DROPDOWN,
    ROUTE_DATE,
    ROUTE_TIME, ROUTE_DATETIME,
    ROUTE_NOTIFICATION
} from "./routeNames";
import ButtonScreen from "./ButtonScreen/ButtonScreen";
import DropDownScreen from "./DropDownScreen/DropDownScreen";
import DateFieldScreen from "./DatePickerScreen/DateFieldScreen";
import TimeFieldScreen from "./TimePickerScreen/TimeFieldScreen";
import DateTimeFieldScreen from "./DateTimePickerScreen/DateTimeFieldScreen";
import NotificationScreen from "./NotificationScreen/NotificationScreen";

export default {
    navigator: {
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
            },
            [ROUTE_DATE]: {
                component: DateFieldScreen,
            },
            [ROUTE_TIME]: {
                component: TimeFieldScreen,
            },
            [ROUTE_DATETIME]: {
                component: DateTimeFieldScreen,
            },
            [ROUTE_NOTIFICATION]: {
                component: NotificationScreen,
            },
        },
    }
};
