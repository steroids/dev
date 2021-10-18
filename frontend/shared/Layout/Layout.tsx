import * as React from 'react';
import {useEffect} from 'react';
import logo from 'static/logo-steroids.svg';
import {useBem, useComponents, useSelector} from '@steroidsjs/core/hooks';
import {Notifications} from '@steroidsjs/core/ui/layout';
import Header from '@steroidsjs/core/ui/layout/Header';
import Portal from '@steroidsjs/core/ui/layout/Portal';
import ModalPortal from '@steroidsjs/core/ui/modal/ModalPortal';
import useLayout, {STATUS_LOADING, STATUS_OK} from '@steroidsjs/core/hooks/useLayout';
import {ROUTE_ROOT} from '../../routes';
import './Layout.scss';
import {isInitialized as getIsInitialized} from '@steroidsjs/core/reducers/auth';

export default function Layout(props) {
    const bem = useBem('Layout');
    const components = useComponents();

    const {isInitialized} = useSelector(state => ({
        isInitialized: getIsInitialized(state)
    }));

    useEffect(() => {
        if (isInitialized) {
            components.resource.loadGoogleCaptcha();
        }
    }, [isInitialized]);

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
                    title: 'Steroids',
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
                <ModalPortal />
            </div>
        </div>
    );
}
