import * as React from 'react';
import {hot} from 'react-hot-loader';
import Router from '@steroidsjs/core/src/ui/nav/Router';
import {application} from '@steroidsjs/core/src/hoc';

import 'style/index.scss';

// @hot(module)
@application({
    components: {
        store: {
            reducers: require('@steroidsjs/core/reducers').default,
        }
    },
    onInit: ({ui}) => {
        ui.addViews(require('@steroidsjs/bootstrap').default);
        ui.addFields(require('@steroidsjs/core/ui/form').default);
        ui.addFormatters(require('@steroidsjs/core/ui/format').default);
        ui.addIcons(require('@steroidsjs/bootstrap/icon/fontawesome').default);
    },
})
export function Application () {
    return (
        <Router
            wrapperView={require('shared/Layout').default}
            routes={require('routes').default}
        />
    );
}
