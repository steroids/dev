import IndexPage from './IndexPage';
import {IRouteItem} from '@steroidsjs/core/ui/nav/Router/Router';
import Yii2Page from './Yii2Page/Yii2Page';
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
        [ROUTE_YII2]: {
            label: 'Backend Yii2',
            path: '/yii2/:category?/:path?',
            component: Yii2Page,
            roles,
        },
        [ROUTE_REACT]: {
            label: 'Frontend React',
            path: '/react/:category?/:path?',
            component: ReactPage,
            roles,
        },
    },
} as IRouteItem;
