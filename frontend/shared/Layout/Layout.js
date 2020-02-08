import React from 'react';
import {Notifications} from '@steroidsjs/core/ui/layout';
import layout, {STATUS_LOADING, STATUS_OK} from '@steroidsjs/core/hoc/layout';

import {bem, components} from '@steroidsjs/core/hoc';
import './Layout.scss';
import NavBar from '@steroidsjs/core/ui/nav/NavBar';

import logoUrl from 'static/logo-steroids.svg';

@bem('Layout')
@components('http')
@layout(
    /*props => props.http.post('/api/v1/init', {
        timestamp: Date.now(),
    }),*/
    () => Promise.resolve({})
)
export default class Layout extends React.PureComponent {

    static propTypes = {
    };

    render() {
        const bem = this.props.bem;
        return (
            <div className={bem.block()}>
                <NavBar
                    logo={{
                        title: 'Steroids',
                        imageUrl: logoUrl,
                        className: bem.element('logo'),
                    }}
                />
                <div className={bem.element('content')}>
                    <Notifications/>
                    {this.renderContent()}
                </div>
            </div>
        );
    }

    renderContent() {
        switch (this.props.status) {
            case STATUS_LOADING:
                return null;

            case STATUS_OK:
                return this.props.children;
        }

        // TODO other statuses
        return this.props.status;
    }

}
