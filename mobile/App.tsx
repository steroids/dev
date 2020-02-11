import React from 'react';
import {application} from '@steroidsjs/core/hoc';
import NativeRouter from '@steroidsjs/native/ui/NativeRouter';
import HtmlComponent from '@steroidsjs/native/components/HtmlComponent';

import style from './style';

@application({
    components: {
        html: {
            className: HtmlComponent,
            ...style,
        },
    },
    onInit: ({html, ui}) => {
        // Automatically import all views
        ui.addViews({
            'form.InputFieldView': require('./src/ui/form/InputField/InputFieldView'),
        });
        /*ui.addViews(require.context('@steroidsjs/bootstrap', true, /View.js$/));
        ui.addFields(require.context('@steroidsjs/bootstrap', true, /Field.js$/));
        ui.addFormatters(require.context('@steroidsjs/bootstrap', true, /Formatter.js$/));

        // Automatically import all fields and formatters from steroids
        ui.addFields(require.context('@steroidsjs/core/ui', true, /Field.js$/));
        ui.addFormatters(require.context('@steroidsjs/core/ui', true, /Formatter.js$/));*/
    },
})
export default class App extends React.PureComponent {
    render() {
        return (
            <NativeRouter routes={require('./src/routes').default}/>
        );
    }
}
