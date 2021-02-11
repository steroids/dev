import * as React from 'react';
//import {Notifications} from '@steroidsjs/core/ui/layout';
import layout, {ILayoutHocOutput, STATUS_LOADING, STATUS_OK} from '@steroidsjs/core/hoc/layout';

import {bem, components} from '@steroidsjs/core/hoc';
import './Layout.scss';

//import logo from 'static/logo-steroids.svg';
import {IComponentsHocOutput} from '@steroidsjs/core/hoc/components';
import {IBemHocOutput} from '@steroidsjs/core/hoc/bem';
import {Button, Field, Form, InputField} from '@steroidsjs/core/ui/form';
//import Header from '@steroidsjs/core/ui/layout/Header';
//import {ROUTE_ROOT} from '../../routes';
//import Portal from '@steroidsjs/core/ui/layout/Portal';

@bem('Layout')
@components('http')
@layout()
export default class Layout extends React.PureComponent<IBemHocOutput & IComponentsHocOutput & ILayoutHocOutput> {
    renderContent() {
        switch (this.props.status) {
            case STATUS_LOADING:
                return null;

            case STATUS_OK:
                return this.props.children;

            default:
                // TODO other statuses
                return this.props.status;
        }
    }

    render() {
        return (
            <div>
                {this.props.status}
                <Form
                    formId='Qqq'
                    layout='horizontal'
                    initialValues={{
                        foo: 'aaa',
                    }}
                >
                    <Field
                        attribute='foo'
                        label={__('Foo name')}
                        component={InputField}
                    />
                    <InputField
                        attribute='bar'
                        label={__('Bar name')}
                    />
                </Form>
            </div>
        );
        /*const bem = this.props.bem;
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
                    {this.renderContent()}
                    <Portal/>
                </div>
            </div>
        );*/
    }
}
