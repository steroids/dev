import React from 'react';
import { configure, mount} from 'enzyme';
import Adapter from 'enzyme-adapter-react-16';
// import AppMock from 'frontend/tests/mocks/AppMock';
import AppMock from './mocks/AppMock';
import views from '@steroidsjs/bootstrap'
import fields from '@steroidsjs/core/ui/form'
import formatters from '@steroidsjs/core/ui/format'
import icons from '@steroidsjs/bootstrap/icon/fontawesome'
import ClientStorageComponent from "@steroidsjs/core/components/ClientStorageComponent";
import HtmlComponent from "@steroidsjs/core/components/HtmlComponent";
import HttpComponent from "@steroidsjs/core/components/HttpComponent";
import LocaleComponent from "@steroidsjs/core/components/LocaleComponent";
import MetaComponent from "@steroidsjs/core/components/MetaComponent";
import StoreComponent from "@steroidsjs/core/components/StoreComponent";
import UiComponent from "@steroidsjs/core/components/UiComponent";

configure({ adapter: new Adapter() });

console.log(2222222)

// const defaultComponents = {
//     clientStorage: {
//         className: ClientStorageComponent,
//     },
//     html: {
//         className: HtmlComponent,
//     },
//     http: {
//         className: HttpComponent,
//     },
//     locale: {
//         className: LocaleComponent,
//     },
//     meta: {
//         className: MetaComponent,
//     },
//     store: {
//         className: StoreComponent,
//     },
//     ui: {
//         className: UiComponent,
//     },
// };

// Create components
let components: any = {};
// Object.keys(defaultComponents).forEach(name => {
//     const {className} = defaultComponents[name];
//     components[name] = new className(components);
// });
//
// const {ui} = components;


// ui.addViews(views);
// ui.addFields(fields);
// ui.addFormatters(formatters);
// ui.addIcons(icons);

export const mountInApp = (Component) => mount(
    <AppMock>
        {Component}
    </AppMock>
)