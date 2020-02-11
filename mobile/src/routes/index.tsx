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
