import IndexPage from './IndexPage';
import ComponentsPage from './ComponentsPage';

export const ROUTE_ROOT = 'root';
export const ROUTE_COMPONENTS = 'components';

const roles = [null];

export default {
    id: ROUTE_ROOT,
    exact: true,
    path: '/',
    component: IndexPage,
    roles,
    items: {
        [ROUTE_COMPONENTS]: {
            label: 'Components',
            path: '/components/:category?/:path?',
            component: ComponentsPage,
            roles,
        },
    },
};
