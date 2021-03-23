import * as React from 'react';

import logo from 'static/logo-steroids.svg';
import {useBem} from '@steroidsjs/core/hooks';
import {Notifications} from '@steroidsjs/core/ui/layout';
import Header from '@steroidsjs/core/ui/layout/Header';
import Portal from '@steroidsjs/core/ui/layout/Portal';
import useLayout, {STATUS_LOADING, STATUS_OK} from '@steroidsjs/core/hooks/useLayout';
import {ROUTE_ROOT} from '../../routes';

import './Layout.scss';

export default function Layout(props) {
    const bem = useBem('Layout');
    const {status} = useLayout();

    const renderContent = () => {
        switch (status) {
            case STATUS_LOADING:
                return null;

            case STATUS_OK:
                return props.children;

            default:
                // TODO other statuses
                return status;
        }
    }

    return (
        <div className={bem.block()}>
            <Header
                logo={{
                    title: __('Steroids'),
                    icon: logo,
                }}
                nav={{
                    items: ROUTE_ROOT,
                }}
            />
            <div className={bem.element('content')}>
                {renderContent()}
                <Notifications/>
                <Portal/>
            </div>
        </div>
    );
}
