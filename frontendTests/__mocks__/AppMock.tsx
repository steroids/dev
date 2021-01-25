import {application} from '@steroidsjs/core/hoc';
import {mount} from 'enzyme';
import React from 'react';

@application({
    onInit: ({ui}) => {
        ui.addViews(require('@steroidsjs/bootstrap').default);
        ui.addFields(require('@steroidsjs/core/ui/form').default);
        ui.addFormatters(require('@steroidsjs/core/ui/format').default);
        ui.addIcons(require('@steroidsjs/bootstrap/icon/fontawesome').default);
    },
})
export default class AppMock extends React.PureComponent {
    render() {
        return(this.props.children);
    }
}

export const mountInApp = (Component) => mount(
    <AppMock>
        {Component}
    </AppMock>
);
