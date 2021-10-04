import * as React from 'react';
import {useBem, useComponents} from "@steroidsjs/core/src/hooks";
import useLayout, {STATUS_LOADING, STATUS_OK} from "@steroidsjs/core/src/hooks/useLayout";

import {IComponentsHocOutput} from '@steroidsjs/core/src/hoc/components';

import {ROUTE_ROOT} from '../../routes';
import Header from '@steroidsjs/core/src/ui/layout/Header';
import Portal from '@steroidsjs/core/src/ui/layout/Portal';
import {Notifications} from '@steroidsjs/core/src/ui/layout';

import logo from 'static/logo-steroids.svg';

import './Layout.scss';

export function Layout (props: IComponentsHocOutput) {
    // TODO 28.01.2020 Kozhin
    // const components = useComponents()
    //
    // const layout = () => components.http.post('/api/v1/init', {
    //     timestamp: Date.now(),
    // })

    const layout = useLayout(() => new Promise(resolve => setTimeout(() => resolve({}), 100)))

    const renderContent = () => {
        switch (props.status) {
            case STATUS_LOADING:
                return null;

            case STATUS_OK:
                return props.children;
        }

        // TODO other statuses
        return props.status;
    }

    const bem = useBem('Layout')

    return (
        <div className={bem.block()}>
            <Header
                logo={{
                    title: 'Steroids',
                    icon: logo,
                }}
                nav={{
                    items: ROUTE_ROOT,
                }}
            />
            <div className={bem.element('content')}>
                <Notifications/>
                    {renderContent()}
                <Portal/>
            </div>
        </div>
    )
}

