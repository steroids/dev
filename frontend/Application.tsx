import * as React from 'react';
import Router from '@steroidsjs/core/ui/nav/Router';
import {application} from '@steroidsjs/core/hoc';

import 'style/index.scss';

@application({
    components: {
        store: {
            reducers: require('@steroidsjs/core/reducers').default,
        },
    },
    onInit: ({ui}) => {
        ui.addViews(require('@steroidsjs/bootstrap').default);
        ui.addFields(require('@steroidsjs/core/ui/form').default);
        //ui.addFormatters(require('@steroidsjs/core/ui/format').default);
        //ui.addIcons(require('@steroidsjs/bootstrap/icon/fontawesome').default);
    },
})
export default class Application extends React.Component {

    render() {
        return (
            <Router
                wrapperView={require('shared/Layout').default}
                routes={require('routes').default}
            />
        );
    }
}
