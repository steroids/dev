import IndexPage from './IndexPage';
import {IRouteItem} from '@steroidsjs/core/ui/nav/Router/Router';
import ReactPage from './ReactPage';

export const ROUTE_ROOT = 'root';
export const ROUTE_YII2 = 'yii2';
export const ROUTE_REACT = 'react';

const roles = [null];

export default {
    id: ROUTE_ROOT,
    exact: true,
    path: '/',
    title: 'Home',
    component: IndexPage,
    roles,
    items: {
        [ROUTE_REACT]: {
            label: 'Frontend React',
            path: '/react/:category?/:path?',
            component: ReactPage,
            roles,
        },
    },
} as IRouteItem;
