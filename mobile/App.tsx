import React from 'react';
import {application} from '@steroidsjs/core/hoc';
import NativeRouter from '@steroidsjs/native/ui/NativeRouter';
import HtmlComponent from '@steroidsjs/native/components/HtmlComponent';

import style from './style';

process.env.PLATFORM = 'mobile';


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
            'form.InputFieldView': require('@steroidsjs/native/ui/form/InputField').default,
            'form.FieldLayoutView': require('@steroidsjs/native/ui/form/FieldLayout').default,
            'form.ButtonView': require('@steroidsjs/native/ui/form/Button').default,
            'form.DropDownFieldView': require('@steroidsjs/native/ui/form/DropDownField').default,
            'form.DateFieldView': require('@steroidsjs/native/ui/form/DateField').default,
            'form.TimeFieldView': require('@steroidsjs/native/ui/form/TimeField').default,
            'form.DateTimeFieldView': require('@steroidsjs/native/ui/form/DateTimeField').default,
            'form.CheckboxFieldView': require('@steroidsjs/native/ui/form/CheckboxField').default,
            'form.CheckboxListFieldView': require('@steroidsjs/native/ui/form/CheckboxListField').default,
            'form.RadioListFieldView': require('@steroidsjs/native/ui/form/RadioListField').default,
            'layout.NotificationsView': require('@steroidsjs/native/ui/layout/Notification').default,
            'layout.NotificationsItemView': require('@steroidsjs/native/ui/layout/Notification/NotificationItemView').default,
            'icon.IconView': require('@steroidsjs/native/ui/icon/IconView').default,
        });
        ui.addIcons({
            ...require('../steroids/react-native/assets/icons').default,
        })
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
